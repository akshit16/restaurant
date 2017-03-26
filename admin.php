<?php
session_start();
include_once("Connection.php");


$user = $_POST['user'];
$pass = $_POST['pass'];
if( $user=='admin' &&  $pass == 'admin123')
{ 
	//$_SESSION['name'] = $row['name'];
	header('Location: http://localhost/restaurant2/restaurant/adminafterlogin.php');
}
else
{
	echo "wrong credentials";
	session_destroy();
}
$_SESSION['user']=$user;

$_SESSION['password']=$pass;

?>