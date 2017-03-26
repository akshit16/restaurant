<?php 
session_start();
include_once("Connection.php");

$result ="select Dish,Price,Quantity,Discount from cart where user ='Sakshi'";
                $res = mysqli_query($conn,$result);
                //$row =  mysqli_fetch_array($res);
                date_default_timezone_set("Asia/Kolkata");
               $date= date('d-m-Y H:i:s');
//$timestamp = STR_TO_DATE( '$date', '%d/%m/%Y %H:%i:%s');
                 $add ="select address from signup where user ='Sakshi'";
               $r = mysqli_query($conn,$add);

               $ro =  mysqli_fetch_array($r);
               $del = "DELETE FROM cart
WHERE user='Sakshi'";
$retvalI = mysqli_query( $conn, $del );
if($retvalI){
echo "Deleted.";
}
               
                while ($row =  mysqli_fetch_array($res))
                {
                	//$dish[] = $row['Dish'];
                	//echo $row['Dish'];
                	 $sql ="insert into userorder(user,address,dish,quantity,tprice,time_date,status) values('Sakshi','{$ro["address"]}','{$row["Dish"]}',{$row["Quantity"]},{$row["Discount"]},'$date','pending')";
                	$re = mysqli_query($conn,$sql);
          
                }

               echo "your order is placed";
                
                ?>