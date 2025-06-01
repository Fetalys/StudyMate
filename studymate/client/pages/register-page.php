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
    <div class="register-container">
        <a href="/studymate/client/pages/landing-page.php"><img src="/studymate/client/assets/icons/education.png" alt="Logo" class="register-logo"></a>
        <form method="post" action="login_process.php" style="width:100%;">
            <input type="name" name="name" class="register-input" placeholder="Name" required autocomplete="username">
            <input type="email" name="email" class="register-input" placeholder="Email" required autocomplete="username">
            <input type="password" name="password" class="register-input" placeholder="Password" required autocomplete="current-password">
            <input type="password" name="cnfm-password" class="register-input" placeholder="Confirm Password" required autocomplete="current-password">
            <a href="/studymate/server/auth/login.php" class="login-link">Already have an accout?</a>
            <button type="submit" class="register-btn" onclick="window.location.href='login-page.php'">Register</button>
        </form>
    </div>
</body>

</html>