<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AiSYA SMART SKIN</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500;600&display=swap');

        :root {
            --primary: #1976d2;
            --primary-light: #64b5f6;
            --primary-dark: #0d47a1;
            --secondary: #2c3e50;
            --background: #f0f4f8;
            --white: #ffffff;
            --gray: #4a4a4a;
            --shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            --shadow-large: 0px 6px 20px rgba(0, 0, 0, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background);
			background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23d8e8f0' fill-opacity='0.2' fill-rule='evenodd'/%3E%3C/svg%3E");
            color: var(--secondary);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background: var(--white);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--secondary);
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
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        nav a:hover {
            color: var(--primary);
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            text-align: center;
            padding: 80px 20px;
            margin-bottom: 60px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.3rem;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* Video Section */
        .video-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto 80px;
            max-width: 900px;
        }

        .video-wrapper {
            width: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: var(--shadow-large);
        }

        .video-wrapper::before {
            content: '';
            display: block;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cta-button {
            display: inline-block;
            margin-top: 40px;
            padding: 16px 40px;
            background: var(--primary);
            color: white;
            font-size: 1.2rem;
            font-family: 'Playfair Display', serif;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
            font-weight: 600;
            letter-spacing: 1px;
        }

        .cta-button:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.4);
        }

        /* Services Section */
        .services {
            padding: 80px 20px;
            background: var(--white);
            text-align: center;
            margin-bottom: 80px;
            box-shadow: var(--shadow);
            border-radius: 10px;
        }

        .services h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--secondary);
            position: relative;
            display: inline-block;
        }

        .services h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: var(--primary);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .services p {
            font-size: 1.1rem;
            font-weight: 400;
            line-height: 1.7;
            color: var(--gray);
            max-width: 800px;
            margin: 30px auto 0;
        }

        /* Skin Types Grid */
        .skin-types-container {
            margin: 0 auto 80px;
        }

        .skin-types-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }

        .skin-types-title::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .skin-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            justify-content: center;
        }

        .skin-type {
            background: var(--white);
            border-radius: 15px;
            box-shadow: var(--shadow);
            padding: 30px 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .skin-type:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-large);
        }

        .skin-type img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid rgba(25, 118, 210, 0.2);
        }

        .skin-type h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .skin-type p {
            font-size: 0.95rem;
            color: var(--gray);
        }

        /* Footer */
        footer {
            background: var(--secondary);
            color: var(--white);
            padding: 40px 0;
            text-align: center;
        }

        .copyright {
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            nav {
                gap: 15px;
            }
            
            nav a {
                font-size: 0.85rem;
            }
            
            .services h2, 
            .skin-types-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            .logo {
                margin-bottom: 10px;
            }
            
            nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero {
                padding: 60px 20px;
            }
            
            .cta-button {
                padding: 14px 30px;
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">AiSYA SMART SKIN</div>
            <nav>
                <a href="skincare_routine.php">Skincare Routine</a>
                <a href="ingredients.php">Ingredients</a>
                <a href="recommendation.php">Recommendations</a>
                <a href="review.php">Reviews</a>
				
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>DISCOVER YOUR PERFECT SKIN</h1>
            <p>Experience personalized skincare recommendations powered by advanced AI technology</p>
        </div>
    </section>

    <section class="video-container container">
        <div class="video-wrapper">
            <video autoplay loop muted>
                <source src="video/ai.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <a href="scan.php" class="cta-button">Analyze Your Skin Now</a>
    </section>

    <section class="services container">
        <h2>OUR SERVICES</h2>
        <p>
            AiSYA Smart Skin uses advanced artificial intelligence to analyze your unique skin type and conditions.
            Simply upload a photo of your skin, and our sophisticated technology will identify your skin concerns,
            recommend personalized skincare products, and create a tailored skincare routine that addresses your specific needs.
        </p>
    </section>

    <section class="skin-types-container container">
        <h2 class="skin-types-title">UNDERSTAND YOUR SKIN TYPE</h2>
        <div class="skin-types">
            <div class="skin-type">
                <img src="images/skin_oily.jpg" alt="Oily Skin">
                <h3>Oily Skin</h3>
                <p>Characterized by excess sebum production, resulting in a shiny appearance and prone to acne.</p>
            </div>
            <div class="skin-type">
                <img src="images/skin_dry.jpg" alt="Dry Skin">
                <h3>Dry Skin</h3>
                <p>Lacks natural moisture, often feels tight, and may appear flaky or show fine lines.</p>
            </div>
            <div class="skin-type">
                <img src="images/skin_normal.jpg" alt="Normal Skin">
                <h3>Normal Skin</h3>
                <p>Well-balanced with good circulation, fine pores, and a smooth, even tone.</p>
            </div>
            <div class="skin-type">
                <img src="images/skin_sensitive.jpg" alt="Sensitive Skin">
                <h3>Sensitive Skin</h3>
                <p>Reacts easily to products or environmental factors with redness, itching, or burning.</p>
            </div>
        </div>
    </section>

    <footer>
            <div class="copyright">
                &copy; 2025 AiSYA SMART SKIN. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>