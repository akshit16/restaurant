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
$sum = $qty*$price;
$ins = "insert into cart(User,Dish,price,quantity,total,discount) 
values ('Sakshi','$dish',$price,$qty,$sum,20)";
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
/*$resul ="select Price,Quantity from cart where user ='Sakshi' and Dish='$dish'";
                $re = mysqli_query($conn,$resul);
                 $ro =  mysqli_fetch_array($re); */
$tum = $qty*$price;
 $dis = "update cart set total = $tum where user ='Sakshi' and Dish='$dish'";
                 $rs = mysqli_query($conn,$dis);

}
if($qty == 0)
{
	$del = "DELETE FROM cart
WHERE Quantity=0";
$retvalI = mysqli_query( $conn, $del );
if($retvalI){
echo "Deleted.";
}
}
}
?>