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
    <link rel="stylesheet" href="./assets/css/login_style.css">
</head>
<body>

    <div class="login-container">
        <h2>SLIATE LMS Student Login</h2>
        <form action="./includes/login.inc.php" method="POST" class="login">
            <input type="text" name="index_no" placeholder="Enter your Index Number here..." >
            <input type="password" name="password" placeholder="Enter your Password here..." >
            <button type="submit" name="login-btn">Login</button>
        </form>
        <a href="./admin.php" class="Admin">If you are an Admin</a>
        <!--<
    </div>

</body>
</html>