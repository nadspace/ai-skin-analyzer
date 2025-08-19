<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Routine</title>
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

        /* Navbar and Hamburger Menu */
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

        header h4 {
            font-size: 1.2rem;
            font-weight: normal;
            opacity: 0.9;
        }

        section {
            margin: 40px 0;
        }

        h2 {
            padding: 15px;
            color: #5f9ea0;
            font-size: 1.8rem;
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }

        h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(to right, #87CEEB, #A0E6FF);
            border-radius: 3px;
        }

        /* Video Container */
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .video-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            margin: 20px;
            padding: 20px;
            width: 300px;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .video-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .video-card iframe {
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .video-card h3 {
            font-size: 1.3rem;
            margin: 15px 0;
            color: #5f9ea0;
        }

        .video-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.5;
        }

        /* Routine Section Styles */
        .skin-type-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .skin-type-tabs button {
            background-color: #e9f5f8;
            border: none;
            padding: 12px 25px;
            margin: 5px;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            color: #5f9ea0;
            font-weight: bold;
        }

        .skin-type-tabs button:hover {
            background-color: #b8e2ec;
            transform: translateY(-3px);
        }

        .skin-type-tabs button.active {
            background-color: #87CEEB;
            color: white;
            box-shadow: 0 4px 10px rgba(135, 206, 235, 0.4);
        }

        .routine-container {
            display: flex;
            justify-content: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .routine-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            padding: 30px;
            width: 100%;
            max-width: 800px;
            text-align: left;
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .routine-card.active {
            display: block;
        }

        .routine-card h3 {
            color: #5f9ea0;
            margin-bottom: 20px;
            font-size: 1.8rem;
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }

        .routine-card h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, #87CEEB, #A0E6FF);
            border-radius: 3px;
        }

        .routine-card ul {
            list-style-type: none;
            padding: 0;
        }

        .routine-card ul li {
            margin: 20px 0;
            font-size: 1.1rem;
            color: #333;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 8px;
            background-color: #f9f9f9;
            transition: transform 0.3s;
        }

        .routine-card ul li:hover {
            transform: translateX(10px);
            background-color: #f0f8ff;
        }

        .routine-card ul li i {
            margin-right: 15px;
            color: #87CEEB;
            font-size: 1.3rem;
            min-width: 25px;
        }

        footer {
            background: linear-gradient(to right, #87CEEB, #A0E6FF);
            padding: 25px;
            color: white;
            font-size: 1.1rem;
            margin-top: 50px;
            position: relative;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #87CEEB;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: all 0.3s;
            transform: translateY(20px);
        }

        .back-to-top.show {
            opacity: 1;
            transform: translateY(0);
        }

        .back-to-top:hover {
            background-color: #5f9ea0;
        }

        @media (max-width: 768px) {
            .video-card {
                width: 90%;
                margin: 15px auto;
            }

            .menu {
                width: 100%;
                right: 0;
                top: 60px;
                border-radius: 0 0 10px 10px;
            }

            .skin-type-tabs button {
                padding: 10px 15px;
                font-size: 0.9rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .routine-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    
<nav>
    <a href="index.php" class="logo">AiSYA SMART SKIN</a>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="recommendation.php">Recommendation</a>
        <a href="ingredients.php">Ingredients</a>
        <a href="review.php">Review</a>
    </div>
</nav>

    <header>
        <h1>Your Perfect Skincare Routine</h1>
        <h4>Learn the latest tips and tricks for healthy, glowing skin</h4>
    </header>

    <!-- Video Section -->
    <section>
        <h2>⋆｡ ﾟ ☁︎｡ ⋆｡ ﾟ ☾ ﾟ ｡ ⋆ Tips and Tutorials ⋆｡ ﾟ ☁︎｡ ⋆｡ ﾟ ☾ ﾟ ｡ ⋆</h2>
        <div class="video-container">
            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/y46hvE9JAXo?si=KB85QCM8AGZiDAja" 
                title="Clean girl makeup tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>Clean Girl Makeup Tutorial</h3>
                <p>Create a flawless, natural makeup look with this easy-to-follow tutorial for everyday beauty.</p>
            </div>

            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/I3tqyVR4_NI?si=vjX4VB9LIr9k_RWl" 
                title="Beginner skincare tips tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>Beginner Skincare Tips 🧴</h3>
                <p>Learn how to take care of your skin with this comprehensive step-by-step daily routine tutorial.</p>
            </div>

            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/DmxjKP6pzmk?si=2OngkCOOwuG-AZMr" 
                title="Night routine" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>Night Skincare Routine</h3>
                <p>This tutorial guides you through an effective night skincare routine for rejuvenating your skin while you sleep.</p>
            </div>
            
            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/AYhI5hOvORw?si=9ds_04nNSD_6Sv46" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>A Guide to Self-Care</h3>
                <p>Learn how to take care of yourself both mentally and physically with these helpful self-care tips for overall wellness.</p>
            </div>

            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/BGV_cAzH9Lw?si=hcUYxiRQAYVNkXbf" 
                title="healthy hair tips" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>Healthy Hair Tips 🌷🧸</h3>
                <p>Discover the secrets to maintaining beautiful, healthy hair with these expert tips and product recommendations.</p>
            </div>

            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/hMPixv__T9A?si=m_sSjtCK9FccI3Id" 
                title="Stay fresh and clean all day" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>Stay Fresh All Day</h3>
                <p>Let's dive into the best tips for staying clean and fresh all day long, from personal hygiene routines to clothing care.</p>
            </div>
            
            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/k9Yo5vYv-B4?si=G08eS3sQEgiTJyD6" 
                title="Stay fresh and clean all day" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>My Updated Skincare Routine</h3>
                <p>Join me as I share my latest skincare routine and the products that keep my skin glowing and healthy throughout the seasons!</p>
            </div>
            
            <div class="video-card">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/GcNfRzxHZz8?si=I4dju_q2-iLEaE4B" 
                title="Stay fresh and clean all day" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
                <h3>Perfect Skincare for Your Skin Type</h3>
                <p>Learn how to create a personalized skincare routine that suits your unique skin type for a healthier, glowing complexion.</p>
            </div>
        </div>
    </section>
    
    <!-- Skincare Routine Section -->
    <section>
        <h2>⋆｡ ﾟ ☁︎｡ ⋆｡ ﾟ ☾ ﾟ ｡ ⋆ Skincare Routine ﾟ ☁︎｡ ⋆｡ ﾟ ☾ ﾟ ｡ ⋆</h2>
        
        <!-- Tab buttons for different skin types -->
        <div class="skin-type-tabs">
            <button class="active" onclick="showRoutine('oily')">Oily Skin</button>
            <button onclick="showRoutine('dry')">Dry Skin</button>
            <button onclick="showRoutine('combination')">Combination Skin</button>
            <button onclick="showRoutine('sensitive')">Sensitive Skin</button>
        </div>
        
        <!-- Routine Cards -->
        <div class="routine-container">
            <div id="oily-routine" class="routine-card active">
                <h3>Oily Skin Routine</h3>
                <ul>
                    <li><i class="fas fa-soap"></i> Cleanse with a gel-based cleanser containing salicylic acid to remove excess oil and prevent breakouts.</li>
                    <li><i class="fas fa-tint"></i> Use a toner with witch hazel or salicylic acid to control oil production and refine pores.</li>
                    <li><i class="fas fa-eye-dropper"></i> Apply a lightweight, oil-free serum with niacinamide to regulate sebum production.</li>
                    <li><i class="fas fa-leaf"></i> Moisturize with a lightweight, oil-free gel moisturizer to hydrate without clogging pores.</li>
                    <li><i class="fas fa-sun"></i> Finish with a matte, non-comedogenic sunscreen with at least SPF 30 for daily protection.</li>
                </ul>
            </div>

            <div id="dry-routine" class="routine-card">
                <h3>Dry Skin Routine</h3>
                <ul>
                    <li><i class="fas fa-soap"></i> Cleanse with a hydrating, creamy cleanser that won't strip your skin's natural oils.</li>
                    <li><i class="fas fa-tint"></i> Apply a hydrating toner with rose water or glycerin to add moisture back to the skin.</li>
                    <li><i class="fas fa-eye-dropper"></i> Use a hyaluronic acid serum to draw moisture into the skin and plump fine lines.</li>
                    <li><i class="fas fa-leaf"></i> Moisturize with a rich, nourishing cream containing ceramides and fatty acids to lock in hydration.</li>
                    <li><i class="fas fa-sun"></i> Apply a hydrating sunscreen with at least SPF 30 that provides additional moisture throughout the day.</li>
                </ul>
            </div>

            <div id="combination-routine" class="routine-card">
                <h3>Combination Skin Routine</h3>
                <ul>
                    <li><i class="fas fa-soap"></i> Cleanse with a balancing cleanser that removes oil without drying out the skin.</li>
                    <li><i class="fas fa-tint"></i> Use a toner with witch hazel for the T-zone and hydrating ingredients for the cheeks.</li>
                    <li><i class="fas fa-eye-dropper"></i> Apply a balancing serum with niacinamide to regulate oil production and hydrate dry areas.</li>
                    <li><i class="fas fa-leaf"></i> Use a lightweight moisturizer on oily areas and a richer cream on dry areas, or find a balanced formula.</li>
                    <li><i class="fas fa-sun"></i> Finish with a broad-spectrum sunscreen that works well for both oily and dry skin.</li>
                </ul>
            </div>

            <div id="sensitive-routine" class="routine-card">
                <h3>Sensitive Skin Routine</h3>
                <ul>
                    <li><i class="fas fa-soap"></i> Cleanse with a fragrance-free, gentle cleanser that won't irritate the skin.</li>
                    <li><i class="fas fa-tint"></i> Skip toner or use an alcohol-free, soothing formula with aloe or chamomile.</li>
                    <li><i class="fas fa-eye-dropper"></i> Apply a soothing serum with centella asiatica, aloe vera, or green tea to calm inflammation.</li>
                    <li><i class="fas fa-leaf"></i> Moisturize with a hypoallergenic cream free from common irritants like fragrances and dyes.</li>
                    <li><i class="fas fa-sun"></i> Use a mineral-based sunscreen with zinc oxide or titanium dioxide, which is less likely to cause irritation.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Back to top button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2025 AiSYA SMART SKIN | Terms of Use | Privacy Policy</p>
    </footer>

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

        // Function to show the selected skin type routine
        function showRoutine(skinType) {
            // Hide all routine cards
            const routines = document.querySelectorAll('.routine-card');
            routines.forEach(routine => routine.classList.remove('active'));

            // Show the selected routine
            document.getElementById(`${skinType}-routine`).classList.add('active');

            // Update active tab button
            const buttons = document.querySelectorAll('.skin-type-tabs button');
            buttons.forEach(button => button.classList.remove('active'));
            event.target.classList.add('active');
        }

        // Back to top button functionality
        const backToTopButton = document.getElementById("backToTop");
        
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add("show");
            } else {
                backToTopButton.classList.remove("show");
            }
        });
        
        backToTopButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>
</html>