<?php
include_once("Connection.php");
$name = $_POST['name'];
$user = $_POST['name'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$add = $_POST['address'];
function randomString() {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < 6; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
 $str = randomString();
//echo $str;
$sql = "insert into signup values ('$name','$user','$password',$contact,'$email','$add','$str')";
if(! mysqli_query( $conn, $sql ))
{
die(mysqli_error($conn));}
else{ 
echo "successful";
}
?>