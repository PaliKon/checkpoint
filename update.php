<?php

session_start();




header('location: main.php');
$con = mysqli_connect('localhost', 'root', '','userregistration');


$passwordNew = $_POST['passwordNew'];
$user=$_SESSION['username'];


$reg = "UPDATE usertable SET password='$passwordNew' WHERE name='$user'";
mysqli_query($con, $reg);
echo "Heslo zmenene";

$con->close();
?>