<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: sessionlogin.php"); // Redirect to login if not logged in
    exit();
}
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 80px;
            background-color: #f0f8ff;
        }
        .welcome-box {
            display: inline-block;
            padding: 30px;
            border: 2px solid #008080;
            border-radius: 15px;
            background: white;
            box-shadow: 2px 2px 12px #aaa;
        }
    </style>
</head>
<body>
    <div class="welcome-box">
        <h2>Welcome, <?= htmlspecialchars($email); ?>!</h2>
        <p>You have successfully logged in.</p>
        <a href="logout.php">Log out</a>
    </div>
</body>
</html>
