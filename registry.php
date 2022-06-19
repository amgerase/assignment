<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet type="text/javascript" href="java/java.js">
    <link rel="stylesheet" href="css/alumni_reg.css">
    <title>Musoma | Registry</title>
    <script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1950; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
</script>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="post" action="registry.php">
        <div class="inputs">
            <label for="fname">First-Name</label><br>
            <input type="text" name="fname" placeholder="format: Jane">
        </div>
        <div class="inputs">
            <label for="mname">mid-name</label><br>
            <input type="text" name="mname" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="sname">surname</label><br>
            <input type="password" name="sname">
        </div>
        <div class="inputs">
            <label for="uname">username</label><br>
            <input type="text" name="uname" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="email">e-mail</label><br>
            <input type="text" name="email" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="phoneno">phone#</label><br>
            <input type="text" name="phoneno" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="cv">cv</label><br>
            <input type="file" name="cv" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="inputs">
            <select name="socmedia" id="smedia">
                <option value="">Choose Here</option>
                <option value="twitter">twitter</option>
                <option value="facebook">facebook</option>
                <option value="instagram">instagram</option>
            </select>
        </div>
        <div class="inputs">
            <label for="bdate">birth-date</label><br>
            <input type="date" name="bdate" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="pass1">Passowrd</label><br>
            <input type="password" name="pass1" value="" placeholder="format: Jane J Doe">
        </div>
        <div class="buttons">
            <button type="submit" class="btn" name="reg_alumni">Register</button>
        </div>
        <div class="buttons">
            Am registered&nbsp;<a href="alumni_login.php"><input type="button" class="btn" value="Sign In"></a>
        </div>
        
    </form>
</body>
</html>
<?php
include("db.php");

if(isset($_POST["reg_alumni"]) && ($_POST[fullname] && $_POST[mname] && $_POST[sname] || $_POST[uname] || $_POST[email] || $_POST[phoneno] || $_POST[socmedia] || $_POST[password_1] || $_POST[bdate])!=0) {
    mysqli_query($connect, "INSERT INTO alumni VALUES('NULL','$_POST[fname]','$_POST[mname]','$_POST[sname]','$_POST[uname]','$_POST[email]','$_POST[phoneno]','$_POST[cv]','$_POST[socmedia]','$_POST[bdate]','$_POST[password_1]')");
    header('location: login.php');
}
mysqli_close($connect);
?>