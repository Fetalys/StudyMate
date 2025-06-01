<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyMate | Sign up</title>    
    <link rel="stylesheet" href="/studymate/client/styles/register.css" />

</head>

<body>
    <div class="login-container">
        <a href="/studymate/client/pages/landing-page.php"><img src="/studymate/client/assets/icons/education.png" alt="Logo" class="login-logo"></a>
        <form method="post" action="login_process.php" style="width:100%;">
            <input type="name" name="name" class="login-input" placeholder="Name" required autocomplete="username">
            <input type="email" name="email" class="login-input" placeholder="Email" required autocomplete="username">
            <input type="password" name="password" class="login-input" placeholder="Password" required autocomplete="current-password">
            <input type="password" name="cnfm-password" class="login-input" placeholder="Confirm Password" required autocomplete="current-password">
            <a href="/studymate/server/auth/login.php" class="login-link">Already have an accout?</a>
            <button type="submit" class="register-btn" onclick="window.location.href='login.php'">Register</button>
        </form>
    </div>
</body>

</html>