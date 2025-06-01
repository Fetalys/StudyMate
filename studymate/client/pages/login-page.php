<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyMate | Login</title>    
    <link rel="stylesheet" href="/studymate/client/styles/login.css" />

</head>

<body>
    <div class="login-container">
        <a href="/studymate/client/pages/landing-page.php"><img src="/studymate/client/assets/icons/education.png" alt="Logo" class="login-logo"></a>
        <form method="post" action="login_process.php" style="width:100%;">
            <input type="email" name="email" class="login-input" placeholder="Email" required autocomplete="username">
            <input type="password" name="password" class="login-input" placeholder="Password" required autocomplete="current-password">
            <a href="#" class="forgot-link">Forgot password?</a>
            <button type="submit" class="login-btn">Login</button>
            <button type="button" class="register-btn" onclick="window.location.href='register-page.php'">Register</button>
        </form>
    </div>
</body>

</html>