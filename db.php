<?php 
/*establishing db connection*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";
$connect = mysqli_connect($servername,$username,$password,$dbname);
/*checking connection status*/
if($connect->connect_error){
    die("connection failed:".$connect->conect_error);
}
?>