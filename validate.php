<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Simple login check (dummy check)
if (!empty($email) && !empty($password)) {
    $_SESSION['email'] = $email;

    // If remember me is checked, store email in cookie for 30 days
    if (isset($_POST['remember'])) {
        setcookie("email", $email, time() + (86400 * 30), "/");
    } else {
        setcookie("email", "", time() - 3600, "/"); // Clear cookie if not checked
    }

    header("Location: welcome.php"); // Redirect to welcome page
    exit();
} else {
    echo "<div style='text-align:center; margin-top:50px; font-family:Arial;'>
            <p style='color:red; font-size:18px;'>Email or Password is invalid.</p>
            <p><a href='sessionlogin.php'>Click <b>here</b></a> to try again.</p>
          </div>";
}
?>
