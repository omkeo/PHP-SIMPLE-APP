<?php
$servername = "localhost";
$username = "root";  // MySQL username
$password = "";      // MySQL password
$dbname = "webapp_db"; // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
