<?php

include("db.php");
//header("location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel = stylesheet type="text/javascript" href="java/java.js">
    <title>Musoma | Home</title>
</head>
<body>    
    <div class="container">
        <!--Navigation bar begins here-->
        <div class="navbar">
            <p class="logo">Musoma Technical secondary school</p>
            <ul>
                <li class="list"><a href="staff.php" class="links">staff</a></li>
                <li class="list"><a href="alumni.php" class="links">alumni</a></li>
                <li class="list"><a href="contact.php" class="links">contact</a></li>
                <li class="list"><a href="register.php" class="links">register</a></li>
                <li class="list"><a href="about.php" class="links">about</a></li>
                <li class="list"><a href="home.php" class="links">home</a></li>
            </ul>
        </div>
        <!--Navigation bar ends here-->

        <!--Main body starts here-->
        <div class="main">
        <table content-align="center" style="border: 1px solid black; width: 97vw; line-height: 30px; margin-left: auto; margin-right: auto;">
        <caption align="center" style="color: blue; text-transform: uppercase;">Registered Alumni(s)</caption>
            <t>
                <th colspan="1">Id</th>
                <th >Firstname</th>
                <th >Surname</th>
                <th >Username</th>
                <th >Phone#</th>
                <th >BirthDate</th>
            </t>
            <?php 
                include("db.php");
                $sql1 = "SELECT * FROM users";
                $result = mysqli_query($connect,$sql1);
                while($rows=mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $rows["id"]; ?></td>
                <td><?php echo $rows["fname"]; ?></td>
                <td><?php echo $rows["sname"]; ?></td>
                <td><?php echo $rows["uname"]; ?></td>
                <td><?php echo $rows["phoneno"]; ?></td>
                <td><?php echo $rows["bdate"]; ?></td>
            </tr>
            <?php  }
            mysqli_close($connect);
            ?>
        </table>
        </div>

        <!--Footer starts here-->
        <div class="footer">
            <ul>
                Follow us:
                <li><a href="#" style="color: tomato"><i class="fab fa-facebook">facebook</i></a></li>
                <li><a href="#" style="color: tomato"><i class="fab fa-twitter">Twitter</i></a></li>
            </ul>
            <ul class="pages1">
                Our pages:<br>
                <li class="list"><a href="home.php" style=>Register</a></li>
                <li  class="list"><a href="#">About</a></li>
                <li class="list"><a href="#">Home</a></li>
            </ul><br>
            <ul class="pages1">
                <li class="list"><a href="home.php">Staff</a></li>
                <li  class="list"><a href="#">Alumni</a></li>
                <li class="list"><a href="#">Contact</a></li>
            </ul><br>
            <h4 class="bottom">Designed with <i class=<i class="fas fa-heart"></i>></i> by: ANS&nbsp;|&nbsp;Copyright&nbsp;&copy;&nbsp;2022</h4><br>
        </div>
        <!--Footer ends here-->
    </div>
</body>
</html>
