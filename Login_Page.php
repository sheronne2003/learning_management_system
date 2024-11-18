<?php
    session_start();
    if(isset($_SESSION["user_index"])){
        header("location: ./LMS.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIATE LMS - Student Login</title>
    
    <!-- Bootstrap CSS (For responsive design and base styles) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: url(http://kegalle.sliate.ac.lk/uploads/slide1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        /* Login Form Container */
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 380px;
            background-color: #Ffffff;
            color: #ffffff;
            opacity: 90%;

        }

        .login-container .p-name {
            margin-bottom: 20px;
            color: #28a745;
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .login-container .login-text {
            margin-bottom: 20px;
            color: lightgreen;
            font-size: 1.3rem;
            font-weight: bold;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        /* Form Elements */
        .login-container input[type="text"], .login-container input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: #218838 solid 1px;
        }

        .login-container input[type="text"]:focus, .login-container input[type="password"]:focus {
            border-color: #007bff; /* Focus color */
            outline: none;
        }

        /* Submit Button */
        .login-container button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #218838;
        }

        /* Additional Links */
        .login-container .forgot-password {
            display: block;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
        }

        .login-container .forgot-password:hover {
            text-decoration: underline;
        }

        .login-container .Admin {
            display: block;
            margin-top: 15px;
            font-size: 0.9rem;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container .Admin:hover {
            text-decoration: underline;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .login-container {
                padding: 30px;
                max-width: 100%;
            }
        }

    </style>
</head>
<body>

<!-- Login Form -->
<div class="login-container">
    <h2 class="p-name">SLIATE LMS </h2> 
    <h2 class="login-text">Student Login</h2>
    <form action="./includes/login.inc.php" method="POST" class="login">
        <input type="text" name="index_no" placeholder="Enter your Index Number here..." required>
        <input type="password" name="password" placeholder="Enter your Password here..." required>
        <button type="submit" name="login-btn">Login</button>
    </form>
    <a href="./admin.php" class="Admin">If you are an Admin</a>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery (For Bootstrap functionality) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
