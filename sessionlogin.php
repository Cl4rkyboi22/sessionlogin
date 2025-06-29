<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: welcome.php"); // Redirect to welcome page if already logged in
    exit();
}
$email_cookie = isset($_COOKIE['email']) ? $_COOKIE['email'] : "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .login-box {
            background: white;
            width: 400px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }
        h2 {
            color: #000080;
            margin-bottom: 25px;
        }
        label {
            display: block;
            font-weight: bold;
            text-align: left;
            margin: 10px 0 5px;
            color: #000080;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        .remember {
            text-align: left;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #000080;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0000cc;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login with Session & Cookies</h2>
        <form action="validate.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($email_cookie) ?>" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <div class="remember">
                <input type="checkbox" name="remember" <?= $email_cookie ? 'checked' : '' ?>> Remember Me
            </div>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
