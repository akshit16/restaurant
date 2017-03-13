<?php 
session_start();
include_once("Connection.php");
$id =  $_POST['id'];
$qty = $_POST['qty'];
echo $qty;
$sql = "select Sub,Category,Dish,Price from menu where id = $id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
$dish = $row['Dish'];
$price = $row['Price'];
$sql1= "select * from cart where User = 'Sakshi' and Dish = '$dish'";
$res1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($res1);
$num = mysqli_num_rows($res1);
if($num == 0)
{

$ins = "insert into cart(User,Dish,price,quantity,discount) 
values ('Sakshi','$dish',$price,$qty,20)";
if(! mysqli_query( $conn, $ins ))
{
die(mysqli_error($conn));}
else{ 
echo "successful";
}
}
else
{

$up = "update cart set quantity = $qty where user = 'Sakshi' and Dish = '$dish'";
$retval = mysqli_query( $conn, $up );
if($retval){
echo "Details updated.";
}
}
?>