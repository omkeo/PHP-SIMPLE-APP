<?php
session_start();
require_once('../config/config.php');
include('../includes/header.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
include('../includes/footer.php');
?>
