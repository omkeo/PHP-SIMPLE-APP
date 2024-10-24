<?php
session_start();
include('../config/config.php');
include('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Professional Web App - Home</title>
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">CloudTech</a>
            <ul class="nav-menu">
                <li><a href="#">Products</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Support</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="logout.php" class="btn-primary">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="btn-primary">Login</a></li>
                    <li><a href="register.php" class="btn-secondary">Get Started</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Innovative Cloud Solutions</h1>
                <p>Seamlessly build, deploy, and manage applications on the most secure cloud infrastructure.</p>
                <a href="#" class="btn-primary">Explore Products</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2>Our Core Cloud Services</h2>
            <div class="services-grid">
                <div class="service">
                    <h3>Compute</h3>
                    <p>Scale computing resources with our flexible cloud solutions.</p>
                </div>
                <div class="service">
                    <h3>Storage</h3>
                    <p>Secure and scalable storage solutions for your business needs.</p>
                </div>
                <div class="service">
                    <h3>Networking</h3>
                    <p>Advanced networking services to build reliable infrastructures.</p>
                </div>
                <div class="service">
                    <h3>Security</h3>
                    <p>Best-in-class security services for data protection and compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 CloudTech. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

<?php
include('../includes/footer.php');
?>
