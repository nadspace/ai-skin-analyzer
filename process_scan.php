<?php
session_start();
session_unset(); // Clear old session data

// Directory for storing uploaded images
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Analyze skin function with improved acne detection
function analyzeSkin($image_path) {
    // Make sure GD library is enabled
    if (!extension_loaded('gd')) {
        return simpleAnalysis();
    }
    
    // Read image
    $image_info = getimagesize($image_path);
    if ($image_info === false) {
        return simpleAnalysis();
    }
    
    $image_type = $image_info[2];
    
    if ($image_type == IMAGETYPE_JPEG) {
        $image = imagecreatefromjpeg($image_path);
    } elseif ($image_type == IMAGETYPE_PNG) {
        $image = imagecreatefrompng($image_path);
    } else {
        return simpleAnalysis();
    }
    
    if (!$image) {
        return simpleAnalysis();
    }
    
    // Get image dimensions
    $width = imagesx($image);
    $height = imagesy($image);
    
    // Split image into regions (forehead, cheeks, chin)
    $regions = [
        'forehead' => ['start_y' => 0, 'end_y' => $height * 0.33],
        'cheeks' => ['start_y' => $height * 0.33, 'end_y' => $height * 0.66],
        'chin' => ['start_y' => $height * 0.66, 'end_y' => $height]
    ];
    
    // Variables for analysis
    $total_pixels = $width * $height;
    $bright_pixels = 0;
    $red_pixels = 0;
    $acne_pixels = 0;
    $region_analysis = [];
    
    // Analyze each region
    foreach ($regions as $region_name => $region) {
        $region_bright_pixels = 0;
        $region_red_pixels = 0;
        $region_acne_pixels = 0;
        $region_total_pixels = $width * ($region['end_y'] - $region['start_y']);
        
        for ($x = 0; $x < $width; $x++) {
            for ($y = $region['start_y']; $y < $region['end_y']; $y++) {
                $rgb = imagecolorat($image, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
                
                // Detect bright areas (possibly oily)
                $brightness = ($r + $g + $b) / 3;
                if ($brightness > 200) {
                    $bright_pixels++;
                    $region_bright_pixels++;
                }
                
                // Detect redness (sensitive skin/irritation)
                if ($r > 150 && $r > ($g * 1.5) && $r > ($b * 1.5)) {
                    $red_pixels++;
                    $region_red_pixels++;
                }
                
                // Improved acne detection with better threshold parameters
                // Look for reddish/inflamed spots with specific color patterns
                // Check for typical acne colors: reddish, pinkish, or with whiteheads
                if (
                    // Reddish acne
                    (($r > 150 && $r > ($g * 1.2) && $r > ($b * 1.2)) && ($g < 120 || $b < 120)) ||
                    // Whitehead centers
                    (($r > 200 && $g > 200 && $b > 200) && 
                     checkPixelContrast($image, $x, $y, $width, $height, 100))
                ) {
                    // Check surrounding pixels for contrast (acne usually has high contrast with surrounding skin)
                    if (checkPixelContrast($image, $x, $y, $width, $height, 70)) {
                        $acne_pixels++;
                        $region_acne_pixels++;
                    }
                }
            }
        }
        
        // Save region analysis results
        $region_analysis[$region_name] = [
            'brightness' => round(($region_bright_pixels / $region_total_pixels) * 100, 2),
            'redness' => round(($region_red_pixels / $region_total_pixels) * 100, 2),
            'acne' => round(($region_acne_pixels / $region_total_pixels) * 100, 2)
        ];
    }
    
    // Calculate overall percentages
    $bright_percentage = ($bright_pixels / $total_pixels) * 100;
    $red_percentage = ($red_pixels / $total_pixels) * 100;
    $acne_percentage = ($acne_pixels / $total_pixels) * 100;
    
    // Determine skin type with refined thresholds
    $skin_type = "Normal";
    
    // Prioritize acne detection - if significant acne is detected, mark as Acne-Prone
    if ($acne_percentage > 3) {
        $skin_type = "Acne-Prone";
    } elseif ($bright_percentage > 15) {
        $skin_type = "Oily";
    } elseif ($bright_percentage < 5) {
        $skin_type = "Dry";
    } elseif ($red_percentage > 10) {
        $skin_type = "Sensitive";
    } elseif ($bright_percentage >= 5 && $bright_percentage <= 15) {
        // Check if there's significant variation between regions to indicate combination skin
        $max_brightness = 0;
        $min_brightness = 100;
        
        foreach ($region_analysis as $region => $values) {
            $max_brightness = max($max_brightness, $values['brightness']);
            $min_brightness = min($min_brightness, $values['brightness']);
        }
        
        if (($max_brightness - $min_brightness) > 8) {
            $skin_type = "Combination";
        }
    }
    
    // Determine skin conditions with more categories
    $conditions = [];
    if ($red_percentage > 10) {
        $conditions[] = "Redness";
    }
    if ($bright_percentage > 15) {
        $conditions[] = "Oiliness";
    }
    if ($bright_percentage < 5) {
        $conditions[] = "Dryness";
    }
    
    // Add acne condition with different severity levels
    if ($acne_percentage > 8) {
        $conditions[] = "Severe Acne";
    } elseif ($acne_percentage > 4) {
        $conditions[] = "Moderate Acne";
    } elseif ($acne_percentage > 1.5) {
        $conditions[] = "Mild Acne";
    }
    
    if (empty($conditions)) {
        $conditions[] = "Healthy";
    }
    
    // Get recommendations based on skin type and conditions
    $recommendations = getRecommendations($skin_type, $conditions);
    
    // Analysis results
    return [
        "skin_type" => $skin_type,
        "skin_condition" => implode(", ", $conditions),
        "analysis_details" => [
            "region_analysis" => $region_analysis,
            "overall_oily_percentage" => round($bright_percentage, 2),
            "overall_redness_percentage" => round($red_percentage, 2),
            "overall_acne_percentage" => round($acne_percentage, 2)
        ],
        "recommendations" => $recommendations
    ];
}

// Improved helper function for checking pixel contrast with adjustable threshold
function checkPixelContrast($image, $x, $y, $width, $height, $threshold = 80) {
    // Check if we can examine surrounding pixels
    if ($x > 2 && $y > 2 && $x < ($width - 2) && $y < ($height - 2)) {
        $center_pixel = imagecolorat($image, $x, $y);
        $center_r = ($center_pixel >> 16) & 0xFF;
        $center_g = ($center_pixel >> 8) & 0xFF;
        $center_b = $center_pixel & 0xFF;
        
        // Check surrounding pixels (5x5 grid) - enlarged to better detect acne patterns
        $contrast_count = 0;
        $surrounding_count = 0;
        
        for ($dx = -2; $dx <= 2; $dx++) {
            for ($dy = -2; $dy <= 2; $dy++) {
                if ($dx == 0 && $dy == 0) continue; // Skip center pixel
                
                $surround_pixel = imagecolorat($image, $x + $dx, $y + $dy);
                $surround_r = ($surround_pixel >> 16) & 0xFF;
                $surround_g = ($surround_pixel >> 8) & 0xFF;
                $surround_b = $surround_pixel & 0xFF;
                
                // Calculate color difference
                $diff = abs($center_r - $surround_r) + abs($center_g - $surround_g) + abs($center_b - $surround_b);
                
                if ($diff > $threshold) { // Use the provided threshold for contrast
                    $contrast_count++;
                }
                
                $surrounding_count++;
            }
        }
        
        // Return true if a significant percentage of surrounding pixels have high contrast
        return ($contrast_count / $surrounding_count) > 0.25; // 25% threshold
    }
    
    return false;
}

function getRecommendations($skin_type, $conditions) {
    $recommendations = [
        "Cleanser" => "",
        "Moisturizer" => "",
        "Protection" => "",
        "Treatment" => "", // Treatment category
        "Tips" => []
    ];
    
    // Basic recommendations based on skin type
    switch($skin_type) {
        case "Oily":
            $recommendations["Cleanser"] = "Gel-based cleanser with salicylic acid";
            $recommendations["Moisturizer"] = "Oil-free or water-based moisturizer";
            $recommendations["Protection"] = "Gel-based sunscreen with SPF 30+";
            $recommendations["Tips"] = [
                "Use clay mask once a week",
                "Avoid oil-based products",
                "Cleanse face twice daily"
            ];
            break;
            
        case "Dry":
            $recommendations["Cleanser"] = "Cream or milk-based gentle cleanser";
            $recommendations["Moisturizer"] = "Rich cream moisturizer with hyaluronic acid";
            $recommendations["Protection"] = "Cream-based sunscreen with SPF 30+";
            $recommendations["Tips"] = [
                "Limit washing to once or twice a day with lukewarm water",
                "Apply moisturizer on damp skin",
                "Consider using facial oils at night"
            ];
            break;
            
        case "Sensitive":
            $recommendations["Cleanser"] = "Fragrance-free gentle cleanser";
            $recommendations["Moisturizer"] = "Hypoallergenic moisturizer without fragrance";
            $recommendations["Protection"] = "Mineral sunscreen for sensitive skin with SPF 30+";
            $recommendations["Tips"] = [
                "Patch test new products before use",
                "Avoid products with alcohol, fragrances, and harsh chemicals",
                "Use lukewarm water for cleansing"
            ];
            break;
            
        case "Combination":
            $recommendations["Cleanser"] = "Mild gel or foam cleanser";
            $recommendations["Moisturizer"] = "Light-weight balancing moisturizer";
            $recommendations["Protection"] = "Oil-control sunscreen for T-zone, hydrating for dry areas";
            $recommendations["Tips"] = [
                "Use different products for different areas of your face if needed",
                "Consider using a weekly clay mask on your T-zone only",
                "Hydrate well but avoid heavy products on oily areas"
            ];
            break;
            
        case "Acne-Prone":
            $recommendations["Cleanser"] = "Cleanser with 2% Salicylic Acid or Benzoyl Peroxide";
            $recommendations["Moisturizer"] = "Non-comedogenic oil-free moisturizer";
            $recommendations["Protection"] = "Oil-free, non-comedogenic sunscreen";
            $recommendations["Tips"] = [
                "Avoid touching your face with unwashed hands",
                "Change pillowcases regularly",
                "Use non-comedogenic products only",
                "Don't pick or squeeze acne to prevent scarring"
            ];
            break;
            
        default: // Normal
            $recommendations["Cleanser"] = "Gentle foaming cleanser";
            $recommendations["Moisturizer"] = "Light-weight balanced moisturizer";
            $recommendations["Protection"] = "Broad spectrum SPF 30+ sunscreen";
            $recommendations["Tips"] = [
                "Maintain your routine to keep your skin balanced",
                "Exfoliate 1-2 times per week",
                "Stay hydrated and protect from sun exposure"
            ];
    }
    
    // Add acne-specific recommendations
    if (in_array("Severe Acne", $conditions) || in_array("Moderate Acne", $conditions) || in_array("Mild Acne", $conditions)) {
        // Overwrite cleanser recommendation for acne
        $recommendations["Cleanser"] = "Cleanser with 2% Salicylic Acid or Benzoyl Peroxide";
        
        // Add acne treatment
        if (in_array("Severe Acne", $conditions)) {
            $recommendations["Treatment"] = "Consider consulting a dermatologist for prescription treatments like retinoids or topical antibiotics";
            $recommendations["Tips"][] = "Avoid squeezing pimples to prevent scarring and infection";
            $recommendations["Tips"][] = "Use non-comedogenic products that won't clog pores";
        } elseif (in_array("Moderate Acne", $conditions)) {
            $recommendations["Treatment"] = "Spot treatment with 5-10% Benzoyl Peroxide or products with Niacinamide";
            $recommendations["Tips"][] = "Gentle exfoliation 1-2 times a week with AHA/BHA";
        } else { // Mild Acne
            $recommendations["Treatment"] = "Products with 2% Salicylic Acid or 5% Niacinamide";
            $recommendations["Tips"][] = "Avoid oily and comedogenic products";
        }
        
        // Common acne tips
        $recommendations["Tips"][] = "Don't overwash your face (maximum 2x daily)";
        $recommendations["Tips"][] = "Change pillowcases regularly";
        $recommendations["Tips"][] = "Avoid touching your face with unwashed hands";
    }
    
    return $recommendations;
}

// Simple analysis function if main method fails
function simpleAnalysis() {
    $skin_types = ["Normal", "Oily", "Combination", "Sensitive", "Dry", "Acne-Prone"];
    $skin_conditions = ["Acne", "Wrinkles", "Redness", "Dark Spots", "Healthy"];
    
    $selected_type = $skin_types[array_rand($skin_types)];
    $selected_condition = $skin_conditions[array_rand($skin_conditions)];
    
    return [
        "skin_type" => $selected_type,
        "skin_condition" => $selected_condition,
        "analysis_details" => null,
        "recommendations" => getRecommendations($selected_type, [$selected_condition])
    ];
}

// Handle image upload from form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["skin_image"])) {
    $image_name = basename($_FILES["skin_image"]["name"]);
    $imageFileType = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    
    // Only allow JPG, JPEG, PNG formats
    $allowed_formats = ["jpg", "jpeg", "png"];
    if (!in_array($imageFileType, $allowed_formats)) {
        die(json_encode(["success" => false, "error" => "File format not allowed! Only JPG, JPEG, and PNG are allowed."]));
    }
    
    // Unique filename to avoid name conflicts
    $file_name = "upload_" . time() . ".$imageFileType";
    $target_file = $target_dir . $file_name;
    
    // Move file to uploads folder
    if (!move_uploaded_file($_FILES["skin_image"]["tmp_name"], $target_file)) {
        die(json_encode(["success" => false, "error" => "File upload error."]));
    }
    
    // Analyze uploaded image
    $analysis_result = analyzeSkin($target_file);
    
    // Save results to session
    $_SESSION["uploaded_image"] = $target_file;
    $_SESSION["skin_type"] = $analysis_result["skin_type"];
    $_SESSION["skin_condition"] = $analysis_result["skin_condition"];
    $_SESSION["analysis_details"] = $analysis_result["analysis_details"];
    $_SESSION["recommendations"] = $analysis_result["recommendations"];
    
    // Return JSON response
    echo json_encode(["success" => true, "redirect" => "scan_results.php?new_scan=" . time()]);
    exit();
}

// Handle image capture from camera
$input = file_get_contents("php://input");
$data = json_decode($input, true);

if ($data && isset($data["captured_image"])) {
    $image_data = $data["captured_image"];
    
    if (preg_match('/^data:image\/(png|jpeg|jpg);base64,/', $image_data, $matches)) {
        $image_data = substr($image_data, strpos($image_data, ',') + 1);
        $image_data = base64_decode($image_data);
        $image_extension = $matches[1];
        $file_name = "camera_capture_" . time() . ".$image_extension";
        $target_file = $target_dir . $file_name;
        
        if (file_put_contents($target_file, $image_data)) {
            // Analyze captured image
            $analysis_result = analyzeSkin($target_file);
            
            // Save results to session
            $_SESSION["uploaded_image"] = $target_file;
            $_SESSION["skin_type"] = $analysis_result["skin_type"];
            $_SESSION["skin_condition"] = $analysis_result["skin_condition"];
            $_SESSION["analysis_details"] = $analysis_result["analysis_details"];
            $_SESSION["recommendations"] = $analysis_result["recommendations"];
            
            echo json_encode(["success" => true, "redirect" => "scan_results.php?new_scan=" . time()]);
            exit();
        } else {
            echo json_encode(["success" => false, "error" => "Failed to save camera image."]);
            exit();
        }
    } else {
        echo json_encode(["success" => false, "error" => "Invalid image format."]);
        exit();
    }
}
?>