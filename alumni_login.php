<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet type="text/javascript" href="java/java.js">
    <link rel="stylesheet" href="css/alumni_reg.css">
    <title>Musoma | Alumni</title>
</head>
<body>
    <div class="header">
        <h2>ALUMNI&nbsp;&nbsp;login</h2>
    </div>
    <form method="post" action="alumni_reg.php">
        <div class="inputs">
            <label for="indexno">Form IV</label><br>
            <input type="text" name="indexno" placeholder="format: S0190/00090/2015">
        </div>
        <div class="inputs">
            <label for="pass1">password</label><br>
            <input type="password" name="pass1">
        </div>
        <div class="buttons">
            <button type="submit" class="btn" name="alumni_login">Register</button>
        </div>
        <div class="buttons">
            Am registered&nbsp;<a href="alumni_login.php"><input type="button" class="btn" value="Sign In"></a>
        </div>
        
    </form>
</body>
</html>
<?php
include("db.php");

if(isset($_POST["reg_alumni"]) && ($_POST[fullname] || $_POST[mname] || $_POST[sname] || $_POST[uname] || $_POST[email] || $_POST[phoneno] || $_POST[socmedia] || $_POST[password_1] || $_POST[bdate])!=0) {
    mysqli_query($connect, "INSERT INTO alumni VALUES('NULL','$_POST[fname]','$_POST[mname]','$_POST[sname]','$_POST[uname]','$_POST[email]','$_POST[phoneno]','$_POST[cv]','$_POST[socmedia]','$_POST[bdate]','$_POST[password_1]')");
    header('location: login.php');
}
mysqli_close($connect);
?>