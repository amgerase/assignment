<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel = stylesheet type="text/javascript" href="java/java.js">
    <title>Musoma | Login</title>
</head>
<body>
    <div class="header">
  	    <h2>Login</h2>
    </div>
    <form method="post" action="login.php">

        <!--<?php include('errors.php'); ?>-->

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Log In</button>
        </div>
        <p>
            Not yet a member? <a href="register.php"><input type="button" class="btn" value="Sign Up"></a>
        </p>
    </form>
</body>
</html>