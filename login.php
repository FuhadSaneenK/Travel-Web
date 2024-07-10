<!DOCTYPE html>

<?php
include("connection.php");
?>

<html lang="en">
<head>
    <title>Travel Login</title>
    <link rel="stylesheet" href="loginstyles.css">
</head>
<body>
    
        <div class="container">
            <div class="login-form">
                <h1>Welcollme Back!</h1>
                <form>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    <input type="submit" value="Login">
                    <a href="#" class="forgot-password-link">Forgot Password?</a>
                </form>
                <div class="no-account">
                    <span>Don't have an account?</span>
                    <a href="#">Reighjgjgister Now</a>
                </div>
            </div>
        </div>
    
</body>
</html>
