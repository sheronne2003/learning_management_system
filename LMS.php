<?php
    session_start();
    // If not logged in
    if(!isset($_SESSION["user_index"])){
        header("location: ./Login_Page.php");
    }
?>
<!DOCTYPE html>
<htlang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/LMS_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    
    <!-- AOS (Animate on Scroll) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <title>Welcome - <?php if(isset($_SESSION["user_index"])){ echo $_SESSION["user_index"]; } ?></title>
   
</head>

<body>


    <!-- Profile -->
    <div class="profile">
    </div>
    <div class="container2">
        <header>
            <h1>Learning Management System(LMS)</h1>
        </header>

        <div class="student-info">
            <h2>Welcome - <span><?php if(isset($_SESSION["user_name"])){ echo $_SESSION["user_name"]; } ?></span></h2>
            <h2>Index Number - <span><?php if(isset($_SESSION["user_index"])){ echo $_SESSION["user_index"]; } ?></span></h2>
            <h2>Intake - <span><?php if(isset($_SESSION["user_intake"])){ echo $_SESSION["user_intake"]; } ?></span></h2>
            <button class="logout-button"><a href="./includes/logout.inc.php">Logout</a></button>
        </div>

        <div class="notice-board">
            <h3>Resources</h3>
            <ul>
                <button><a href="./Notice_Board.php">Notice Board</a></button>
                <button><a href="./time_table.php">Time Table</a></button>
                <button><a href="./assignment.php">Assignment</a></button>
                <button><a href="https://drive.google.com/drive/home?dmr=1&ec=wgc-drive-hero-goto">Results</a></button>
                <button><a href="./Inquire.php">Inquire</a></button>
                <button><a href="./Exam_Start_Login.php">Online Exams</a></button>
                <button><a href="./notes.php">Notes</a></button>
                
                
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS (Animate on Scroll) JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); // Initialize AOS animations
    </script>
</body>
</html>

