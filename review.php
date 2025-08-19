<?php 
session_start();
include 'config.php'; // Database connection

// Fetch all reviews from the database
$sql = "SELECT * FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review - AiSYA SMART SKIN</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #1976d2;
            --primary-light: #64b5f6;
            --primary-gradient: linear-gradient(135deg, #1976d2, #64b5f6);
            --secondary: #2c3e50;
            --accent: #ffcc00;
            --bg-light: #f0f4f8;
            --white: #ffffff;
            --gray: #777777;
            --gray-light: #f5f7fa;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
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
            line-height: 1.6;
            min-height: 100vh;
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
            list-style: none;
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
        
        /* Updated Header */
        header {
            background: linear-gradient(to right, #87CEEB, #A0E6FF);
            padding: 40px 20px;
            color: white;
            margin-bottom: 30px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .subtitle {
            font-size: 1.1rem;
            font-weight: 300;
            opacity: 0.9;
            margin-bottom: 1rem;
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
        
        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
            bottom: -8px;
            left: 0;
        }
        
        /* Review Form */
        .review-form-container {
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow);
            padding: 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .review-form-container:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--secondary);
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #e1e5ea;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(100, 181, 246, 0.2);
        }
        
        .rating-container {
            display: flex;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }
        
        .rating-star {
            font-size: 1.5rem;
            color: #dddddd;
            cursor: pointer;
            transition: color 0.2s ease;
        }
        
        .rating-star:hover,
        .rating-star.active {
            color: var(--accent);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .submit-button {
            background: var(--primary-gradient);
            color: var(--white);
            border: none;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
            width: 100%;
            margin-top: 1rem;
        }
        
        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.4);
        }
        
        /* Reviews List */
        .reviews-container {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .reviews-header {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
        }
        
        .reviews-icon {
            font-size: 1.8rem;
            color: var(--primary);
        }
        
        .review-card {
            background: var(--white);
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .review-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary-gradient);
        }
        
        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.8rem;
        }
        
        .reviewer-name {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--secondary);
        }
        
        .review-rating {
            color: var(--accent);
            font-size: 1.1rem;
        }
        
        .review-content {
            color: var(--secondary);
            margin-bottom: 0.8rem;
            line-height: 1.6;
        }
        
        .review-date {
            color: var(--gray);
            font-size: 0.85rem;
            font-style: italic;
        }
        
        /* Decoration Elements */
        .decoration {
            position: absolute;
            z-index: -1;
        }
        
        .decoration-1 {
            top: 15%;
            left: 5%;
            width: 150px;
            height: 150px;
            background: var(--primary-light);
            opacity: 0.1;
            border-radius: 50%;
        }
        
        .decoration-2 {
            bottom: 10%;
            right: 8%;
            width: 200px;
            height: 200px;
            background: var(--primary-light);
            opacity: 0.1;
            border-radius: 50%;
        }
        
        /* Responsiveness */
        @media (max-width: 900px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .reviews-container {
                order: 2;
            }
            
            .review-form-container {
                order: 1;
            }
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 480px) {
            .review-form-container,
            .review-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Decorative Elements -->
    <div class="decoration decoration-1"></div>
    <div class="decoration decoration-2"></div>
    
    <!-- Updated Navigation -->
    <nav>
        <div class="logo">AiSYA SMART SKIN</div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="skincare_routine.php">Skincare Routine</a></li>
            <li><a href="ingredients.php">Ingredients</a></li>
            <li><a href="recommendation.php">Recommendations</a></li>
        </ul>
    </nav>
    
    <!-- Updated Header Section -->
    <header>
        <h1>Customer Reviews</h1>
        <p class="subtitle">Share your experience with our AI-powered skincare analysis</p>
    </header>
    
    <!-- Main Content -->
    <div class="main-content">
        <!-- Review Form Section -->
        <div class="review-form-container">
            <h2 class="section-title">Share Your Feedback</h2>
            <form action="submit_review.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                
                <div class="form-group">
                    <label>Your Rating</label>
                    <div class="rating-container">
                        <span class="rating-star" data-value="1">★</span>
                        <span class="rating-star" data-value="2">★</span>
                        <span class="rating-star" data-value="3">★</span>
                        <span class="rating-star" data-value="4">★</span>
                        <span class="rating-star" data-value="5">★</span>
                    </div>
                    <input type="hidden" name="rating" id="rating-value" value="" required>
                </div>
                
                <div class="form-group">
                    <label for="comment">Your Review</label>
                    <textarea id="comment" name="comment" class="form-control" placeholder="Tell us about your experience..." required></textarea>
                </div>
                
                <button type="submit" class="submit-button">Submit Review</button>
            </form>
        </div>
        
        <!-- Reviews List Section -->
         <div class="reviews-container">
            <div class="reviews-header">
                <span class="reviews-icon">💙</span>
                <h2 class="section-title">What Our Users Say</h2>
            </div>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="review-card">
                    <div class="review-header">
                        <span class="reviewer-name"><?php echo htmlspecialchars($row['name']); ?></span>
                        <span class="review-rating"><?php echo str_repeat("⭐", $row['rating']); ?></span>
                    </div>
                    <p class="review-content"><?php echo htmlspecialchars($row['comment']); ?></p>
                    <small class="review-date"><?php echo $row['created_at']; ?></small>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <script>
        // JavaScript for the star rating functionality
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.rating-star');
            const ratingInput = document.getElementById('rating-value');
            
            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    ratingInput.value = value;
                    
                    // Reset all stars
                    stars.forEach(s => s.classList.remove('active'));
                    
                    // Activate clicked star and all before it
                    stars.forEach(s => {
                        if (s.getAttribute('data-value') <= value) {
                            s.classList.add('active');
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>