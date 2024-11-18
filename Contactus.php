<?php
require_once "./includes/dbh.inc.php";
$result = mysqli_query($conn, "SELECT * FROM student");
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    mysqli_query($conn, "INSERT INTO message (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");
    header('Location: ContactUs.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us | LMS</title>
    <link rel="stylesheet" href="./assets/css/ContactUs_style.css">
</head>
<body>

<header>
    <h1>Contact LMS Support Team</h1>
    <p>Your learning journey is our priority. Reach out to us anytime!</p>
</header>

<section class="container contact-form">
    <div class="form-section">
        <h2>Send Us a Message</h2>
            <form method="POST">
        <h3>Send Us Massages</h3>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="text" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="8" placeholder="Your Message" required></textarea>
        <button type="submit" name="add">Submit</button>
        </form>
    </div>

    <div class="info-section">
        <h3>Our Contact Information</h3>
        <p>Address: Advanced Technological Institute, 42, Rodrigo Place, Colombo 15.</p>
        <p>Email: infoatiheadoffice@gmail.com</p>
        <p>Phone: 011-2521152/011-2521282</p>

        <h3>Hours of Operation</h3>
        <p>Monday - Friday: 9 AM - 6 PM</p>
        <p>Saturday: 10 AM - 4 PM</p>
        <p>Sunday: Closed</p>

        <div class="map">
            <h3>Find Us Here</h3>
            <iframe src="https://www.google.com/maps/embed?..."></iframe>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <h2>Meet Our Support Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="team-member1.jpg" alt="Team Member 1">
                <h3>Sheronne Anjalee</h3>
                <p>Support Specialist</p>
            </div>
            <div class="team-member">
                <img src="team-member2.jpg" alt="Team Member 2">
                <h3>Dulmini Tharuka</h3>
                <p>Technical Support</p>
            </div>
            <div class="team-member">
                <img src="team-member3.jpg" alt="Team Member 3">
                <h3>Diluni Kawindi</h3>
                <p>Customer Care</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 LMS. All Rights Reserved. | Designed by LMS Creatives</p>
    <div class="social-media">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">LinkedIn</a>
        <a href="#">Instagram</a>
    </div>
</footer>

</body>
</html>

