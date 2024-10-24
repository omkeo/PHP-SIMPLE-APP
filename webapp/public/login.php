<?php include('../includes/header.php'); ?>
    <div class="container">
        <h2>Login</h2>
        <form action="../scripts/login_handler.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
<?php include('../includes/footer.php'); ?>
