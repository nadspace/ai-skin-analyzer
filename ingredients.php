<?php require 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Skin Type</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23d8e8f0' fill-opacity='0.2' fill-rule='evenodd'/%3E%3C/svg%3E");
            color: #333;
            text-align: center;
        }

        /* Updated Navigation */
        nav {
            background-color: rgba(135, 206, 235, 0.95);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 1.6rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 0.95rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 8px 0;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        nav a:hover {
            color: #E0F7FA;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .nav-links {
                gap: 1rem;
            }
            
            nav a {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            nav {
                flex-direction: column;
                gap: 1rem;
                padding: 12px;
            }
            
            .nav-links {
                width: 100%;
                justify-content: center;
            }
        }

        header {
            background: linear-gradient(to right, #87CEEB, #A0E6FF);
            padding: 40px 20px;
            color: white;
            margin-bottom: 30px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Skin Type Container */
        .skin-type-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
            flex-wrap: wrap;
        }

        .skin-type {
            background: #87CEEB;
            color: white;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.1);
        }

        .skin-type:hover {
            background: #5F9EA0;
            transform: scale(1.05);
        }

        /* Product List */
        .product-list {
            margin-top: 30px;
            display: none;
            padding: 20px;
            grid-template-columns: repeat(3, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            max-width: 200px;
            height: auto;
            object-fit: cover;
            border-radius: 12px;
            display: block;
            margin: 0 auto;
        }

        .ingredients {
            display: none;
            background: #E0F7FA;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
        }

    </style>
    <script>
        // Function to toggle menu
        function toggleMenu() {
            const menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }

        // Close menu when clicking outside
        document.addEventListener("click", function(event) {
            const menu = document.getElementById("menu");
            const menuIcon = document.querySelector(".menu-icon");
            
            if (!menu.contains(event.target) && event.target !== menuIcon) {
                menu.classList.remove("show");
            }
        });

        // Function to show products based on skin type
        function showProducts(skinType) {
            if (skinType === 'other') {
                window.location.href = 'article.php';
            } else {
                document.querySelectorAll('.product-list').forEach(el => el.style.display = 'none');
                document.getElementById(skinType).style.display = 'grid';
            }
        }

        // Function to toggle ingredients
        function toggleIngredients(skinType, productId) {
            let ingredients = document.getElementById('ingredients-' + skinType + '-' + productId);
            ingredients.style.display = (ingredients.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</head>
<body>
    <nav>
        <a href="index.php" class="logo">AiSYA SMART SKIN</a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="recommendation.php">Recommendation</a>
            <a href="skincare_routine.php">Skincare Routine</a>
            <a href="review.php">Review</a>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <h1>Ingredient Information Based on Product</h1>
        <p>Select your skin type below</p>
    </header>

    <!-- Skin Type Container -->
    <div class="skin-type-container">
        <div class="skin-type" onclick="showProducts('normal')">Normal</div>
        <div class="skin-type" onclick="showProducts('oily')">Oily</div>
        <div class="skin-type" onclick="showProducts('combination')">Combination</div>
        <div class="skin-type" onclick="showProducts('sensitive')">Sensitive</div>
        <div class="skin-type" onclick="showProducts('other')">Article</div>
    </div>

    <!-- Product List -->
    <?php
    $skin_types = ['normal', 'oily', 'combination', 'sensitive'];
    foreach ($skin_types as $type) {
        echo "<div id='$type' class='product-list' style='display: none;'>";

        $filtered_products = array_filter($products, function ($product) use ($type) {
            return in_array($type, $product['suitable_for']);
        });

        if (empty($filtered_products)) {
            echo "<p>No suitable products found.</p>";
        } else {
            foreach ($filtered_products as $index => $product) {
                echo "<div class='product-card' onclick='toggleIngredients(\"$type\", $index)'>";
                echo "<img src='{$product['image']}' alt='{$product['name']}'>";
                echo "<h3>{$product['name']}</h3>";
                echo "<p><strong>Brand:</strong> {$product['brand']}</p>";
                echo "<p>{$product['description']}</p>";
                echo "<p><strong>Price:</strong> RM{$product['price']}</p>";
                echo "<div id='ingredients-{$type}-{$index}' class='ingredients' style='display: none;'>";
                echo "<p><strong>Ingredients:</strong> " . implode(", ", $product['ingredients']) . "</p>";
                echo "</div>";
                echo "</div>";
            }
        }

        echo "</div>";
    }
    ?>
</body>
</html>