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
$ins = "insert into cart(User,Dish,price,quantity,total) 
values ('Sakshi','$dish',$price,$qty,$sum)";
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
                 $sel = "select total from cart where user ='Sakshi'";
                  $aks = mysqli_query($conn,$sel);
               // $row =  mysqli_fetch_array($res);
                $total=0;
                //$sum =0;
                while ($pow =  mysqli_fetch_array($aks) ){
                   // $sum = $ro['Price']*$ro['Quantity'];
                     $total += $pow['total'];
                    }
                 $d = "update cart set Discount = $total where user ='Sakshi' ";
$a = mysqli_query($conn,$d);
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