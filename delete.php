<?php

session_start();




header('location: main.php');
$con = mysqli_connect('localhost', 'root', '','userregistration');

$name = $_POST['user'];
$password = "password";
$email = "email";

$user=$_SESSION['username'];

$reg = "DELETE FROM usertable WHERE name='$user'";
mysqli_query($con, $reg);
echo "Ucet zruseny";
session_destroy();
header('Location: main.php');





$con->close();
?>