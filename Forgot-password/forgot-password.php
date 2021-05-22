<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/forgot-password.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <title>Forgot Password</title>
</head>
<body>
    <?php include('server.php') ?>
    <div class="fp-container">
        <h3 class="fp-header">Forgot Password</h3>
        <form action="forgot-password.php" method="POST" class="fp-form">
            <label for="username">Username</label>
            <input id="username" type="text" name="userName" placeholder="Enter your username" required>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" class = "fp-button" name="submit-btn" value="Submit">
        </form>
        <a href="../index.php">Back to Login</a>
    </div>
</body>
</html>