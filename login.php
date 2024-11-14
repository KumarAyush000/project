<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <h1 class="logo"><a href="index.html">FitLife Pro</a></h1>
        </div>

        <form method="post" action="login.php">
        <?php include('errors.php'); ?>     

<div class="login-container">
    <h2>Login</h2>
    <form action="dashboard.html" method="post"> <!-- Adjust action as needed -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn" name="login_user">Login</button>
    </form>
    <div class="footer">
        <p><a href="register.php">Don't have an account? Register</a></p>
    </div>
</div>

</body>
</html>