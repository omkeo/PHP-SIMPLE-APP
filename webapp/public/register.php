<?php include('../includes/header.php'); ?>
    <div class="container">
        <h2>Register</h2>
        <form action="../scripts/register_handler.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Register</button>
        </form>
    </div>
<?php include('../includes/footer.php'); ?>
