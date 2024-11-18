<?php
    session_start();
    if(isset($_SESSION["user_index"])){
        header("location: ./admin_page.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIATE LMS - Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-container">
        <h2>SLIATE LMS Admin Login</h2>
        <form action="./includes/admin_login.inc.php" method="POST" class="login">
            <input type="text" name="NIC" placeholder="Enter your ID Number here..." >
            <input type="password" name="password" placeholder="Enter your Password here..." >
            <button type="submit" name="login-btn">Login</button>
        </form>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>

</body>
</html>