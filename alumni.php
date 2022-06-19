<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CUSTOMIZED CSS LINK-->
    <link rel="stylesheet" href="css/style.css">
    <!--FONTAWESOME AND BOOTSRAP LINKS FOR ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Musoma | Alumni</title>
  </head>
  <body>
    <h1 style="font-family: Poppins, sans-serif;">Hello, world!</h1>
    <i class="fab fa-facebook"></i>
    <div>
        <table content-align="center" border="1.5px" style="width: 800px; line-height: 30px; margin-left: auto; margin-right: auto;">
            <tr>
                <th colspan="8">Registered Users</th>
            </tr>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>