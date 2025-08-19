<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Skincare Recommendations</title>
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
            font-size: 2rem;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Subtitle Section */
        .subtitle {
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #87CEEB;
            border-radius: 5px;
            margin: 10px auto;
            display: inline-block;
        }

        /* Form Styling */
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        form:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        label {
            color: #87CEEB;
            font-size: 1.2rem;
            display: block;
            margin-bottom: 10px;
        }

        select, input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #87CEEB;
            border-radius: 8px;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #87CEEB;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #5F9EA0;
        }


        /* Chatbot Styling */
        #chatbot-icon {
            position: fixed;
            bottom: 80px;
            right: 20px;
            background-color: #3B78B3;
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        #chatbot {
            display: none;
            position: fixed;
            bottom: 150px;
            right: 20px;
            width: 320px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .chat-box {
            height: 220px;
            overflow-y: auto;
            border: 1px solid #87CEEB;
            padding: 12px;
            background-color: #f9f9f9;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        #user-input {
            width: 75%;
            padding: 12px;
            margin-right: 5px;
            border-radius: 8px;
            border: 1px solid #87CEEB;
        }

        button {
            padding: 12px;
            background-color: #87CEEB;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #5F9EA0;
        }
    </style>
</head>
<body>
    <!-- Updated Navigation -->
    <nav>
        <a href="index.php" class="logo">AiSYA SMART SKIN</a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="skincare_routine.php">Skincare Routine</a>
            <a href="ingredients.php">Ingredients</a>
            <a href="review.php">Review</a>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <h1>Find the Best Skincare Products for Your Skin!</h1>
        <p>Explore top products and expert skincare advice.</p>
    </header>

    <!-- Subtitle -->
    <div class="subtitle">✧・ﾟ: Best Picks for Your Skin :・ﾟ✧</div>

    <!-- Skincare Recommendation Form -->
    <form action="products.php" method="GET">
        <label for="skin_type">Select your skin type:</label>
        <select name="skin_type" id="skin_type">
            <option value="normal">Normal</option>
            <option value="oily">Oily</option>
            <option value="dry">Dry</option>
            <option value="combination">Combination</option>
            <option value="sensitive">Sensitive</option>
        </select>

        <label for="skin_concern">Select your skin concern:</label>
        <select name="skin_concern" id="skin_concern">
            <option value="acne">Acne</option>
            <option value="wrinkles">Wrinkles</option>
            <option value="dryness">Dryness</option>
            <option value="oiliness">Oiliness</option>
            <option value="redness">Redness</option>
        </select>

        <input type="submit" value="Get Recommendations">
    </form>
	
    <!-- Chatbot Icon -->
    <div id="chatbot-icon" onclick="toggleChatbot()">🤖</div>

    <!-- Chatbot Section -->
    <div id="chatbot">
        <div class="chat-box" id="chat-box">
            <p><strong>AI Bot:</strong> Hello! Ask me anything about skincare.</p>
        </div>
        <input type="text" id="user-input" placeholder="Ask me anything...">
        <button onclick="sendMessage()">Send</button>
    </div>

    <script>
        // Function to toggle chatbot
        function toggleChatbot() {
            const chatbot = document.getElementById("chatbot");
            if (chatbot.style.display === "block") {
                chatbot.style.display = "none";
            } else {
                chatbot.style.display = "block";
            }
        }
    </script>
    <script src="chatbot.js"></script>
</body>
</html>