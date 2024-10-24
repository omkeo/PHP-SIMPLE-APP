<?php
session_start();  // Start the session to access session data

// Check if the user is logged in (session exists)
if (isset($_SESSION['username'])) {
    // Unset all session variables
    session_unset();
    
    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: ../public/login.php");
    exit;
} else {
    // If no session is active, redirect to the login page directly
    header("Location: ../public/login.php");
    exit;
}
?>
