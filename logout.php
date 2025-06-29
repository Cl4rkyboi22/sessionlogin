<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Remove cookies if they exist
if (isset($_COOKIE['email'])) {
    setcookie("email", "", time() - 3600, "/"); // Expire the email cookie
}

header("Location: sessionlogin.php"); // Redirect to login page
exit();
?>
