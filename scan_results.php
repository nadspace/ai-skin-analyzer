<?php
session_start();

// Check if there's analysis data
if (!isset($_SESSION["skin_type"]) || !isset($_SESSION["skin_condition"])) {
    header("Location: index.php");
    exit();
}

// Get data from session
$skin_type = $_SESSION["skin_type"];
$skin_condition = $_SESSION["skin_condition"];
$analysis_details = $_SESSION["analysis_details"];
$recommendations = $_SESSION["recommendations"];
$image_path = $_SESSION["uploaded_image"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Analysis Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .analysis-card {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .skin-type-badge {
            font-size: 0.9rem;
            padding: 8px 15px;
            border-radius: 20px;
            margin-top: 10px;
        }
        .result-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .recommendation-item {
            padding: 10px;
            border-left: 4px solid #4e73df;
            background-color: #f8f9fc;
            margin-bottom: 10px;
            border-radius: 0 5px 5px 0;
        }
        .progress {
            height: 10px;
            border-radius: 5px;
        }
        .region-card {
            border-left: 4px solid #4e73df;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4 text-center">Skin Analysis Results</h1>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card analysis-card">
                    <div class="card-body text-center">
                        <h4>Your Photo</h4>
                        <img src="<?php echo $image_path; ?>" alt="Skin Photo" class="result-image mt-3">
                    </div>
                </div>
                
                <div class="card analysis-card">
                    <div class="card-body text-center">
                        <h4>Skin Type</h4>
                        <?php 
                        $badge_color = "primary";
                        switch($skin_type) {
                            case "Oily": $badge_color = "info"; break;
                            case "Dry": $badge_color = "warning"; break;
                            case "Sensitive": $badge_color = "danger"; break;
                            case "Combination": $badge_color = "secondary"; break;
                            case "Acne-Prone": $badge_color = "dark"; break;
                            default: $badge_color = "success"; // Normal
                        }
                        ?>
                        <span class="badge bg-<?php echo $badge_color; ?> skin-type-badge d-block mx-auto mt-3"><?php echo $skin_type; ?></span>
                        
                        <h5 class="mt-4">Skin Condition</h5>
                        <p class="lead"><?php echo $skin_condition; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <?php if ($analysis_details): ?>
                <div class="card analysis-card mb-4">
                    <div class="card-header">
                        <h4>Analysis Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5>Overall Oil Level</h5>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-info" role="progressbar" 
                                     style="width: <?php echo $analysis_details['overall_oily_percentage']; ?>%" 
                                     aria-valuenow="<?php echo $analysis_details['overall_oily_percentage']; ?>" 
                                     aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <p><?php echo $analysis_details['overall_oily_percentage']; ?>% (<?php echo ($analysis_details['overall_oily_percentage'] > 15) ? 'High' : (($analysis_details['overall_oily_percentage'] > 10) ? 'Medium' : 'Low'); ?>)</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Overall Redness Level</h5>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-danger" role="progressbar" 
                                     style="width: <?php echo $analysis_details['overall_redness_percentage']; ?>%" 
                                     aria-valuenow="<?php echo $analysis_details['overall_redness_percentage']; ?>" 
                                     aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <p><?php echo $analysis_details['overall_redness_percentage']; ?>% (<?php echo ($analysis_details['overall_redness_percentage'] > 10) ? 'High' : (($analysis_details['overall_redness_percentage'] > 5) ? 'Medium' : 'Low'); ?>)</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Overall Acne Level</h5>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-warning" role="progressbar" 
                                     style="width: <?php echo $analysis_details['overall_acne_percentage']; ?>%" 
                                     aria-valuenow="<?php echo $analysis_details['overall_acne_percentage']; ?>" 
                                     aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <p><?php echo $analysis_details['overall_acne_percentage']; ?>% (<?php echo ($analysis_details['overall_acne_percentage'] > 8) ? 'High' : (($analysis_details['overall_acne_percentage'] > 4) ? 'Medium' : (($analysis_details['overall_acne_percentage'] > 1.5) ? 'Mild' : 'Minimal')); ?>)</p>
                        </div>
                        
                        <h5 class="mb-3">Analysis by Facial Region</h5>
                        <div class="row">
                            <?php foreach ($analysis_details['region_analysis'] as $region => $values): ?>
                            <div class="col-md-4">
                                <div class="card region-card">
                                    <div class="card-body">
                                        <h6><?php echo ucfirst($region); ?></h6>
                                        
                                        <small>Brightness/Oil:</small>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-info" role="progressbar" 
                                                 style="width: <?php echo $values['brightness']; ?>%" 
                                                 aria-valuenow="<?php echo $values['brightness']; ?>" 
                                                 aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <p class="small"><?php echo $values['brightness']; ?>%</p>
                                        
                                        <small>Redness:</small>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-danger" role="progressbar" 
                                                 style="width: <?php echo $values['redness']; ?>%" 
                                                 aria-valuenow="<?php echo $values['redness']; ?>" 
                                                 aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <p class="small"><?php echo $values['redness']; ?>%</p>
                                        
                                        <small>Acne:</small>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-warning" role="progressbar" 
                                                 style="width: <?php echo $values['acne']; ?>%" 
                                                 aria-valuenow="<?php echo $values['acne']; ?>" 
                                                 aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <p class="small"><?php echo $values['acne']; ?>%</p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="card analysis-card">
                    <div class="card-header">
                        <h4>Skincare Recommendations</h4>
                    </div>
                    <div class="card-body">
                        <?php if ($recommendations): ?>
                        <div class="mb-4">
                            <h5>Recommended Products</h5>
                            <div class="recommendation-item">
                                <strong>Cleanser:</strong> <?php echo $recommendations['Cleanser']; ?>
                            </div>
                            <div class="recommendation-item">
                                <strong>Moisturizer:</strong> <?php echo $recommendations['Moisturizer']; ?>
                            </div>
                            <div class="recommendation-item">
                                <strong>Protection:</strong> <?php echo $recommendations['Protection']; ?>
                            </div>
                            <?php if(!empty($recommendations['Treatment'])): ?>
                            <div class="recommendation-item">
                                <strong>Treatment:</strong> <?php echo $recommendations['Treatment']; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <div>
                            <h5>Skincare Tips</h5>
                            <ul class="list-group">
                                <?php foreach ($recommendations['Tips'] as $tip): ?>
                                <li class="list-group-item"><?php echo $tip; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php else: ?>
                        <p>No recommendations available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>