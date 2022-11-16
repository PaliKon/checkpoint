<?php


session_start();




header('location: main.php');
$con = mysqli_connect('localhost', 'root', '','userregistration');





$name = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];



$s = "SELECT * FROM usertable WHERE name = '$name'";
// insert in database
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
{
    echo "Meno je zabrate";
} else{
   // $sql = "INSERT INTO `tbl_contact` ( `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ( '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
    $reg = "INSERT INTO `usertable`(name, password, email) values ('$name', '$password','$email')";
    mysqli_query($con, $reg);
    echo "Registracia uspesna";

}

?>