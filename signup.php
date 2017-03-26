<?php
include_once("Connection.php");
$name = $_POST['name'];
$user = $_POST['user'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$add = $_POST['address'];
$ref=$_POST['referal'];
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
 $code = rand(100000, 999999);
$sql = "insert into signup values ('$name','$user','$password',$contact,'$email','$add','$str')";
if(! mysqli_query( $conn, $sql ))
{
die(mysqli_error($conn));}
else{ 
echo "successful";
}
$sql1="select * from signup where referral = '$ref'";
$result= mysqli_query( $conn, $sql1);
if(! $result)
{
die(mysqli_error($conn));}
else{ 
	while( $row = mysqli_fetch_assoc( $result ) ){ 
$usr = $row['user'];}
}

$sq = "insert into coupon(user,code,amount,discount) values('$user','$code',500,25)";
if(! mysqli_query( $conn, $sq ))
{
die(mysqli_error($conn));}
else{ 
//echo "successful";
}
$cod = rand(100000,999999);
$s = "insert into coupon(user,code,amount,discount) values('$usr','$cod',500,20)";
if(! mysqli_query( $conn, $s ))
{
die(mysqli_error($conn));}
else{ 
//echo "successful";
header('Location: http://localhost/res/restaurant/login.html');
}
$r = "delete from coupon where user =''";
if(! mysqli_query( $conn, $r ))
{
die(mysqli_error($conn));}
else{ 
//echo "successful";
}


?>