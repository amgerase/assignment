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
        var ddlYears = document.getElementById("yoption");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 1948; i <= currentYear; i++) {
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
            <label for="full">Full-name</label><br>
            <input type="text" name="fullname" placeholder="example: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="yenrolled">Enrollment Year</label><br>
            <select name="yenrolled" id="yoption"></select>
        </div>
        <div class="inputs">
            <label for="ycompleted">Completion year</label><br>
            <select name="ycompleted" id="yoption">
                <option>1948</option>
                <option>1949</option>
                <option>1950</option>
                <option>1951</option>
                <option>1952</option>
                <option>1953</option>
                <option>1954</option>
                <option>1955</option>
                <option>1956</option>
                <option>1957</option>
                <option>1958</option>
                <option>1959</option>
                <option>1960</option>
                <option>2000</option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2015</option>
                <option>2015</option>
                <option>2015</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
            </select>
        </div>
        <div class="inputs">
            <label for="hmaster">Headmaster</label><br>
            <select name="hmaster" id="hmaster">
                <option value="mutta">Mutta Jeremiah</option>
                <option value="mutta">Dobee J Alberto</option>
                <option value="mutta">Salum H Kilonda</option>
                <option value="mutta">Dobee J Alberto</option>
                <option value="mutta">Salum H Kilonda</option>
                <option value="mutta">Magita Nyango</option>
            </select>
        </div>
        <div class="inputs">
            <label for="email">e-mail</label><br>
            <input type="email" name="email" value="" placeholder="example: jane@john.doe">
        </div>
        <div class="inputs">
            <label for="phoneno">phone#</label><br>
            <input type="text" name="phoneno" value="" placeholder="format: 0754276543">
        </div>
        <div class="inputs">
            <label for="cv">cv</label><br>
            <input type="file" name="cv" value="">
        </div>
        <div class="inputs">
            <label for="cv">Social-Media</label><br>
            <select name="socmedia" id="smedia">
                <option value="">Choose Here</option>
                <option value="twitter">twitter</option>
                <option value="facebook">facebook</option>
                <option value="instagram">instagram</option>
            </select>
            <input type="text" name="smlink" value="" placeholder="Media Link">
        </div>
        <div class="inputs">
            <label for="bdate">birth-date</label><br>
            <input type="date" name="bdate" value="">
        </div>
        <div class="inputs">
            <label for="pass1">Passowrd</label><br>
            <input type="password" name="password" value="">
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