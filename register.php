<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel = stylesheet type="text/javascript" href="java/java.js">
    <link rel="stylesheet" href="db.php">
    <title>Musoma | Register</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form name="form1" method="post" action="register.php">

       <!-- <?php include('errors.php'); ?> -->
        
        <div class="input-group">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="mname" value="" placeholder="Middle Name">
        <input type="text" name="sname" value="" placeholder="Surname">
        <input type="text" name="uname" value="" placeholder="Username">
        </div>
        <div class="input-group">
        <input type="email" name="email" value="" placeholder="Email Address">
        <input type="text" name="phoneno" value="" placeholder="Phone Number">
        </div>
        <label>Upload CV: </label>
        <input type="file" name="cv" enctype="multipart/form-data" value="">
        <div class="input-group">
            <label>Social Media</label>
            <select name="socmedia" id="smedia">
                    <option value="">choose here</option>
                    <option value="facebook">facebook</option>
                    <option value="twitter">twitter</option>
                    <option value="instagram">facebook</option>
            </select>
        </div>
        <div class="input-group">
        <input type="date" name="bdate" placeholder="Birth Date">
        <input type="password" name="password_1" placeholder="Strong password">
        </div>
        <div class="input-group">
        <button type="submit" class="btn" name="reg_user" onclick="formvalidate()">Register</button>
        </div>
        Already a member?
        <a href="login.php"><input type="button" class="btn" value="Log In"></a>
    </form>
</body>
</html>

<?php
include("db.php");
if(isset($_POST["reg_user"]) && ($_POST[fname] || $_POST[mname] || $_POST[sname] || $_POST[uname] || $_POST[email] || $_POST[phoneno] || $_POST[socmedia] || $_POST[password_1] || $_POST[bdate])!=0) {
    mysqli_query($connect, "INSERT INTO users VALUES('NULL','$_POST[fname]','$_POST[mname]','$_POST[sname]','$_POST[uname]','$_POST[email]','$_POST[phoneno]','$_POST[cv]','$_POST[socmedia]','$_POST[bdate]','$_POST[password_1]')");
    header('location: login.php');
}
mysqli_close($connect);
?>