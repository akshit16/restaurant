<?php 
	session_start();
	include 'connection.php';
	 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:login.php');
	 }
else{
	if(isset($_GET["cid"])){
		$id =$_GET["cid"];
	}
	$error1 ="";
$error2 ="";
	if(1)
	{
		$query = "DELETE FROM client WHERE id='{$id}'";
		if(mysqli_query($link, $query)){
			header('Location:deletemessage.html');
		}
		else{
			header('Location:deleteerror.html');
		}
	}	
 }
?>