<?php 
// Database connection
$conn = new mysqli("localhost", "root", "", "asya_smart_skin");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from URL
if (isset($_GET['skin_type']) && isset($_GET['skin_concern'])) {
    $skin_type = htmlspecialchars($_GET['skin_type']);
    $skin_concern = htmlspecialchars($_GET['skin_concern']);

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM products WHERE skin_type = ? AND concern = ?");
    
    if (!$stmt) {
        die("Query preparation failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $skin_type, $skin_concern);
    
    if (!$stmt->execute()) {
        die("Query execution failed: " . $stmt->error);
    }

    $result = $stmt->get_result();
} else {
    echo "<p style='color: red; text-align: center;'>Please select your skin type and concern.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Products</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23d8e8f0' fill-opacity='0.2' fill-rule='evenodd'/%3E%3C/svg%3E");
            color: #333;
            text-align: center;
            margin: 20px;
            padding: 20px;
        }
        h2 {
            color: #5F9EA0; /* Blue pastel */
            font-size: 2em;
            margin-bottom: 20px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .product {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }
        .product:hover {
            transform: scale(1.05);
        }
        img {
            max-width: 100%;
            border-radius: 10px;
        }
        .store-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }
        .store-links a {
            text-decoration: none;
            font-weight: bold;
            color: #87CEEB; /* Blue pastel */
            transition: color 0.3s;
        }
        .store-links a:hover {
            color: #5F9EA0; /* Darker blue pastel */
        }
        .back-button {
            background-color: #87CEEB; /* Blue pastel */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: #5F9EA0; /* Darker blue pastel on hover */
        }
    </style>
</head>
<body>
    <button class="back-button" onclick="window.location.href='recommendation.php'">Back to Recommendations</button>
    
    <h2>Recommended Products for Your Skin</h2>
    <div class="product-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>
                        <h4>" . htmlspecialchars($row['product_name']) . "</h4>
                        <p>" . htmlspecialchars($row['description']) . "</p>
                        <p><strong>Price:</strong> RM" . number_format((float)$row['price'], 2) . "</p>";

                if (!empty($row['image_url'])) {
                    echo "<img src='" . htmlspecialchars($row['image_url']) . "' alt='Product Image'>";
                }
                
                echo "<div class='store-links'>
                      <a href='https://www.watsons.com.my/search?q=" . urlencode($row['product_name']) . "' target='_blank'>Watsons</a>
                      <a href='https://www.guardian.com.my/search?q=" . urlencode($row['product_name']) . "' target='_blank'>Guardian</a>
                      </div>
                      </div>";
            }
        } else {
            echo "<p style='color: red;'>No products found for your selection.</p>";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>