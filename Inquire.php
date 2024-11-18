<?php
require_once "./includes/dbh.inc.php";
$result = mysqli_query($conn, "SELECT * FROM inquary");
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $index_no = $_POST['index_no'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    
    mysqli_query($conn, "INSERT INTO inquary (name, index_no, email, subject, category, message) VALUES ('$name', '$index_no', '$email', '$subject', '$category', '$message')");
    header('Location: Inquire.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inquiries | LMS</title>
<link rel="stylesheet" href="./assets/css/inquary_style.css">
</head>
<body>
    <div class="container">
        <h1>Inquiries</h1>

        <!-- Inquiry Options -->
        <div class="inquiry-options">
            <div class="inquiry-option">
                <i class="fas fa-question-circle"></i>
                <h3>General Inquiry</h3>
            </div>
            <div class="inquiry-option">
                <i class="fas fa-book"></i>
                <h3>Course-Related</h3>
            </div>
            <div class="inquiry-option">
                <i class="fas fa-user"></i>
                <h3>Account Issues</h3>
            </div>
            <div class="inquiry-option">
                <i class="fas fa-money-bill"></i>
                <h3>Billing</h3>
            </div>
            <div class="inquiry-option">
                <i class="fas fa-cogs"></i>
                <h3>Technical Support</h3>
            </div>
        </div>

        <!-- Inquiry Form -->
        <div class="form-container">
            <div class="form-group">
                <label for="name">Name</label>
                <form method="POST">
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
			<div class="form-group">
                <label for="index_no">Index Number</label>
                <input type="text" name="index_no" placeholder="Enter your Index Number" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" placeholder="Enter inquiry subject" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" required>
                    <option value="">Select category</option>
                    <option value="general">General Inquiry</option>
                    <option value="course">Course-Related</option>
                    <option value="account">Account Issues</option>
                    <option value="billing">Billing</option>
                    <option value="technical">Technical Support</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" rows="5" placeholder="Type your message here..." required></textarea>
            </div>
        </div>

        <!-- Submit Button -->
        <button class="submit" name="add"> Submit Inquiry</button>
    </div></form>

    <!-- Font Awesome for icons (include this in your project for icons to work) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>

