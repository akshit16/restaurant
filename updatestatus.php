<?php
include_once('connection.php');
$up = "update userorder set status = 'completed' where user = '{$_SESSION["user"]}' ";
$retval = mysqli_query( $conn, $up );
if($retval){
echo "completed.";
}
else
{
	die(mysqli_error($conn));
}
?>