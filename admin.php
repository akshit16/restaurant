<?php
session_start();
include_once("Connection.php");


$user = $_POST['user'];
$pass = $_POST['pass'];
$result ="select * from signup where user  = '$user' and password = '$pass'";
$res = mysqli_query($conn,$result);
$row = mysqli_fetch_array($res);
if($row['user'] == $user && $row['password'] == $pass)
{ 
	$_SESSION['name'] = $row['name'];
	header('Location: http://localhost/Restaurant/adminafterlogin.php');
}
else
{
	echo "wrond credentials";
	session_destroy();
}
$_SESSION['user']=$user;

$_SESSION['password']=$pass;

?>