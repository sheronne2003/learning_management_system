<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SLIATE LMS</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    
    <!-- AOS (Animate on Scroll) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index_style.css">

</head>
<body>
    <!-- Header with Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Logo Section -->
            <a class="navbar-brand" href="#">
                <img src="./Images/logo.jpg" alt="SLIATE LMS Logo">  <!-- Add your logo here -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="LMS.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./page/AboutUs.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactus.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login_Page.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container welcome-container" data-aos="fade-up">
        <h1>Welcome to SLIATE LMS -version 1.0 </h1>
        <p>Your gateway to learning and academic success. Explore courses, track your progress, and engage with your peers and instructors. We're excited to have you!</p>
        
        <a href="Login_Page.php" class="dashb-button">Get Started</a>
    </div>

    <!-- Features Section -->
    <div class="container features-container" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card" data-aos="zoom-in" data-aos-delay="300">
            <i class="fas fa-book"></i>
            <h5>Comprehensive Courses</h5>
            <p>Access a wide range of courses tailored to your learning needs and goals.</p>
        </div>
        <div class="feature-card" data-aos="zoom-in" data-aos-delay="400">
            <i class="fas fa-users"></i>
            <h5>Interactive Community</h5>
            <p>Engage with peers and instructors through discussion forums and group activities.</p>
        </div>
        <div class="feature-card" data-aos="zoom-in" data-aos-delay="500">
            <i class="fas fa-chart-line"></i>
            <h5>Track Progress</h5>
            <p>Monitor your learning progress with real-time analytics and performance tracking.</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5">
        &copy; 2024 SLIATE - All Rights Reserved
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS (Animate on Scroll) JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init(); // Initialize AOS animations
    </script>
</body>
</html>
