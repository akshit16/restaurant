<?php
include_once('connection.php');
$up = "update userorder set status = 'completed' where user = 'Sakshi' ";
$retval = mysqli_query( $conn, $up );
if($retval){
echo "completed.";
}
else
{
	die(mysqli_error($conn));
}
?>