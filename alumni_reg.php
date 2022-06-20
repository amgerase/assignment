<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = stylesheet type="text/javascript" href="java/java.js">
    <link rel="stylesheet" href="css/alumni_reg.css">
    <title>Musoma | Alumni</title>
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
        <h2>Register | alumni</h2>
    </div>
    <form method="POST" action="alumni_reg.php">
        <div class="inputs">
            <label for="full">FORM-IV</label><br>
            <input type="text" name="form4" placeholder="example: s0136/0007/2016">
        </div>
        <div class="inputs">
            <label for="full">Full-name</label><br>
            <input type="text" name="fullname" placeholder="example: Jane J Doe">
        </div>
        <div class="inputs">
            <label for="yenrolled">Enrollment Year</label><br>
            <select name="yenrolled" id="yoption"></select>
        </div>
        <div class="inputs">
            <label for="ycompleted">raduation year</label><br>
            <select name="ygraduated">
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
            <label for="hmaster">Enrollment Headmaster</label><br>
            <select name="hmaster1" id="hmaster1">
                <option value="mutta">Mutta Jeremiah</option>
                <option value="mutta">Dobee J Alberto</option>
                <option value="mutta">Salum H Kilonda</option>
                <option value="mutta">Dobee J Alberto</option>
                <option value="mutta">Salum H Kilonda</option>
                <option value="mutta">Magita Nyango</option>
            </select>
        </div>
        <div class="inputs">
            <label for="hmaster">Graduation Headmaster</label><br>
            <select name="hmaster2" id="hmaster2">
                <option value="mutta">Mutta Jeremiah</option>
                <option value="mutta">Dobee J Alberto</option>
                <option value="mutta">Salum H Kilonda</option>
                <option value="mutta">Dobee J Alberto</option>
                <option value="mutta">Salum H Kilonda</option>
                <option value="mutta">Magita Nyango</option>
            </select>
        </div>
        <div class="inputs">
            <label for="fteacher">Famous teacher</label>
            <select name="fteacher" id="fteacher">
                <option value="mutta">Mudi Mlugulu</option>
                <option value="mutta">Ayoub Mjaluo</option>
                <option value="mutta">Kutiki Mjita</option>
                <option value="mutta">Muta Vj</option>
                <option value="mutta">Magita Nyango</option>
            </select>
        </div>
        <div class="inputs">
            <label for="grade">RESULTS</label>
            <select name="grade" id="grades">
                <option value="mutta">Div-I</option>
                <option value="mutta">Div-II</option>
                <option value="mutta">Div-III</option>
                <option value="mutta">Div-IV</option>
                <option value="mutta">Failed</option>
            </select>
        </div>
        <div class="inputs">
            <label for="email">e-mail</label><br>
            <input type="email" name="email" value="" placeholder="example: jane@john.doe">
        </div>
        <div class="inputs">
            <label for="caddress">current address</label><br>
            <input type="text" name="residence" value="" placeholder="format: Musoma-Mara">
        </div>
        <div class="inputs">
            <label for="occupation">occupation</label><br>
            <input type="text" name="occupation" value="" placeholder="example: Student">
        </div>
        <div class="inputs">
            <label for="phoneno">phone#</label><br>
            <input type="text" name="phoneno" value="" placeholder="format: 0754276543">
        </div>
        <div class="inputs">
            <label for="pass1">Passoword</label><br>
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

<!--PHP DATABASE POSTING CODE-->
<?php
include("db.php");

if(isset($_POST["reg_alumni"]) && ($_POST['form4'])) {
    mysqli_query($connect, "INSERT INTO alumni VALUES('$_POST[form4]','$_POST[fullname]','$_POST[yenrolled]','$_POST[ygraduated]','$_POST[hmaster1]','$_POST[hmaster2]',
    '$_POST[fteacher]','$_POST[grade]','$_POST[occupation]','$_POST[residence]','$_POST[email]','$_POST[phoneno]','$_POST[password]')");
    
}
mysqli_close($connect);
?>
