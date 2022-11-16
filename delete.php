<?php

session_start();




header('location: main.php');
$con = mysqli_connect('localhost', 'root', '','userregistration');

$name = $_POST['user'];
$password = "password";
$email = "email";



if (isset($_POST['user_delete'])){
    $user_id =  $_POST['user'];
    $query = "DELETE FROM usertable WHERE name='$user_id'";
    $query_run = mysqli_query($con,$query);

    if ($query_run){
        $_SESSION['status'] = "vymazane data";
        header("Location: main.php");
    } else {
        $_SESSION['status'] = "nevymazane data";
        header("Location: profil.php");
    }
}
$con->close();
?>