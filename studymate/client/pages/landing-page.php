<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StudyMate | All-in-One Student Tool</title>
  <link rel="stylesheet" href="/studymate/client/styles/main.css">
</head>

<body>

  <header>
    <h1>StudyMate</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#card-section">Features</a>
      <a href="#pricing-section">Pricing</a>
      <a href="/studymate/server/auth/login.php">Login</a>
      <a href="#">Register</a>
    </nav>
  </header>

  <main>
    <section class="intro">
      <div class="intro">
        <video autoplay muted loop playsinline class="bg-video">
          <source src="/studymate/client/assets/welcome-banner.mp4" type="video/mp4">
        </video>
        <h2>Welcome to StudyMate!</h2>
        <p>"Where Notes, Focus, and Friends Meet"</p>
      </div>
    </section>

    <section id="card-section">
      <h3>📚 Free Features</h3>
      <div class="card-container">
        <div class="card">
          <h4>📝 Notes</h4>
          <p>Organize your class notes in one convenient place.</p>
        </div>
        <div class="card">
          <h4>📅 Calendar & Planner</h4>
          <p>Track your schedule, classes, and deadlines easily.</p>
        </div>
        <div class="card">
          <h4>⏱️ Pomodoro Timer</h4>
          <p>Boost productivity using time-tested Pomodoro sessions.</p>
        </div>
        <div class="card">
          <h4>🧮 Calculator</h4>
          <p>Do quick math without leaving your study environment.</p>
        </div>
        <div class="card">
          <h4>📋 To-do List</h4>
          <p>Stay organized with daily and weekly task lists.</p>
        </div>
        <div class="card">
          <h4>💬 Group Chats</h4>
          <p>Chat with classmates and work on tasks together.</p>
        </div>
      </div>
    </section>

    <section class="card-section premium">
      <h3>🌟 Premium Features</h3>
      <div class="card-container">
        <div class="card">
          <h4>🎧 Spotify Integration</h4>
          <p>Play your favorite study playlists directly in the app.</p>
        </div>
        <div class="card">
          <h4>📊 Study Stats & Analytics</h4>
          <p>Track your study time and performance over time.</p>
        </div>
        <div class="card">
          <h4>🎨 Custom Themes</h4>
          <p>Personalize your dashboard with fun color themes.</p>
        </div>
        <div class="card">
          <h4>📂 Cloud Backup</h4>
          <p>Securely save your notes and tasks to the cloud.</p>
        </div>
      </div>
    </section>

    <section id="pricing-section" class="card-section">
      <h3>💸 Choose Your Plan</h3>
      <div class="card-container">
        <div class="card">
          <h4>Free</h4>
          <p><strong> ₱0/month</strong></p>
          <ul style="text-align:left; margin: 1rem 0 0 0; padding-left: 1.2rem;">
            <li>📝 Notes & To-do List</li>
            <li>📅 Calendar & Planner</li>
            <li>⏱️ Pomodoro Timer</li>
            <li>🧮 Calculator</li>
            <li>💬 Group Chats</li>
          </ul>
          <a class="free-btn" href="#" style="color: #fff;">Try Free!</a>
        </div>
        <div class="card" style="border-width:2.5px; border-color:#F4631E;">
          <h4>Premium</h4>
          <p><strong>₱99/month</strong></p>
          <ul style="text-align:left; margin: 1rem 0 0 0; padding-left: 1.2rem;">
            <li>All Free Features</li>
            <li>🎧 Spotify Integration</li>
            <li>📊 Study Stats & Analytics</li>
            <li>🎨 Custom Themes</li>
            <li>📂 Cloud Backup</li>
          </ul>
          <a class="prm-btn" href="" style="color: #fff;">Upgrade now</a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    &copy; 2025 StudyMate. All rights reserved.
  </footer>
  <script src="/studymate/client/scripts/navscroll-lp.js"></script>
</body>

</html>
