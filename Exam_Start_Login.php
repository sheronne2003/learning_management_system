<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNDIT LMS - Exam Login</title>
    <style>
        /* Reset styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Full page setup */
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4CAF50, #8BC34A);
        }

        /* Main container */
        .login-container {
            background-color: white;
            border-radius: 10px;
            padding: 3rem 2rem;
            max-width: 500px;
            width: 100%;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        /* Welcome text styling */
        .login-container h1 {
            color: #333;
            font-size: 2.2rem;
            margin-bottom: 1rem;
        }

        .login-container p {
            color: #555;
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        /* Input fields styling */
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        /* Start Exam button styling */
        .login-container .start-exam {
            background-color: #4CAF50;
            color: white;
            padding: 0.8rem 1.5rem;
            font-size: 1.2rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
            width: 100%;
        }

        .login-container .start-exam:hover {
            background-color: #388E3C;
        }

        .notes{
            background-color: #4CAF50;
            color: white;
            padding: 0.8rem 1.5rem;
            font-size: 1.2rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
            width: 100%;
        }

        /* Footer description styling */
        .login-container .description {
            color: #666;
            font-size: 0.9rem;
            margin-top: 1.5rem;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #ccc;
        }

    </style>
</head>
<body>

<div class="login-container">
<img src="./Images/logo1.jpg" alt="SLIATE LMS Logo">
    <h1>Welcome to HNDIT LMS</h1>
    <p>Please login to access your exam paper.</p>
    
    <!-- Login form -->
    <form action="/start-exam" method="POST">
        <button class="notes"><a href="exam2.php">Start Exam</a></button>
    </form>

    <!-- Description section -->
    <div class="description">
        <p>Ensure your details are correct before starting. Good luck!</p>
    </div>

    <div class="footer">
        © 2023 LMS Inc. All rights reserved.
    </div>
</div>
</div>

</body>
</html>
