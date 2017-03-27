<?php 
session_start();
include_once("Connection.php");
$_SESSION["add"]=$_POST['add'];
  date_default_timezone_set("Asia/Kolkata");
               $date= date('d-m-Y H:i:s');
               $_SESSION["time"]=$date;
$addr = "insert into orderid(user,address,date)  values ('{$_SESSION["user"]}','{$_SESSION["add"]}','{$_SESSION["time"]}')";
if(! mysqli_query( $conn, $addr ))
{
die(mysqli_error($conn));}
else{ 
//echo "successful";
}
header('Refresh: 0; url=checkout.php');
?>