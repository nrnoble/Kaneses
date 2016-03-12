<?php session_start(); ?>
<?php

$id = $_POST['uid'];
$pass1 = $_POST['password'];

$host = 'localhost';
$user = 'root';
$pass = ' ';

$_SESSION["access"] = false;


if ($id == 'kfb' && $pass1 == 'kfb')
{
   $_SESSION["access"] = true;
   header("Location: kfb_administrative.php");
   echo "Successfully Logged In";
}
else
{
   $_SESSION["access_err"] =  "Wrong Id Or Password";
   //echo "fail<";
   echo "user: $id<br>";
   echo "password: $pass1<br>";
}
?>

