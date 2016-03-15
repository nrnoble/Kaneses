<?php session_start();

$id = $_POST['uid'];
$pass1 = $_POST['password'];

$host = 'localhost';
$user = 'root';
$pass = ' ';

$_SESSION["access"] = false;


if ($id == 'kfb' && $pass1 == 'kfb')
{
   $_SESSION["access"] = true;
   //echo $_SESSION["access"] ;
   $test = $_SESSION['access'];
   $test = "foo1";

   //echo "<script>alert('$test')</script>";
   header("Location: kfb_administrative.php");
}
else
{
   $_SESSION["access_err"] =  "Wrong Id Or Password";
   $_SESSION["access"] = false;
  //echo $_SERVER['HTTP_REFERER'];
   header('Location: ' . $_SERVER['HTTP_REFERER']);
   //echo "<script>showpopup();</script>";
   //echo "fail<";
   //echo "user: $id<br>";
   //echo "password: $pass1<br>";
}
?>

