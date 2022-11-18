<?php


session_start();




header('location: main.php');
$con = mysqli_connect('localhost', 'root', '','userregistration');





$name = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];


if (empty($_POST['user']) || empty($_POST['password']) || empty($_POST['email'])) {
    // One or more values are empty.
    exit('Prosim vypln celu registraciu');
}


$s = "SELECT * FROM usertable WHERE name = '$name'";
// insert in database
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Email je neplatny');
}
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['user']) == 0) {
    exit('Meno neni vhodne!');
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    exit('Heslo musi byt dlhe od 5 do 20 znakov!');
}

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