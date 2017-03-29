<?php
session_start();
	include 'connection.php';
	$discount = $_POST['cou'];
	$sql = "select user from coupon";
$res = mysqli_query($conn,$sql);
$user = array();
while ($row = mysqli_fetch_array($res)) {
$user[] = $row['user'];
	}
$cod = rand(100000,999999);
//echo $cod;
$num_rows = mysqli_num_rows($res);
echo $num_rows;
for($i=0;$i<$num_rows;$i++)
{
	//echo $i;
$sql1="insert into coupon(user,code,amount,discount) values ('$user[$i]','$cod',600,$discount)";	
if(! mysqli_query( $conn, $sql1 ))
{
die(mysqli_error($conn));}
else{ 
echo "successful";
}
}

 
?>