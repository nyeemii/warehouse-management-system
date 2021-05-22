<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/login.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
        <title>LOGIN</title>
    </head>
    <body>
        <?php include('index-server.php') ?>
        <div class="login-container">
            <div class="login-header">
                <h3>WAREHOUSE INFORMATION MANAGEMENT SYSTEM</h3>
            </div>
            <div class="login-container2">
                <form action="index.php" method="POST">
                    <?php
                        echo "<input type='hidden' name='hidden' value='".$atmp."'>";
                    ?>
                    <label for="username">Username</label>
                    <input id="username" type="text" name="userName" placeholder="Enter your username" required>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="passWord" placeholder="Enter your password" required>
                    <input type="submit" class = "login-submit" name="login-button" value="LOGIN">
                </form>
                <a href="./Forgot-password/forgot-password.php" class="link"><h5>Forgot Password?</h5></a>
            </div>
        </div>
    </body>
</html>