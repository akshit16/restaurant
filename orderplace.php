<?php 
session_start();
include_once("Connection.php");

$result ="select Dish,Price,Quantity,Discount from cart where user ='akshit'";
                $res = mysqli_query($conn,$result);
                //$row =  mysqli_fetch_array($res);
                date_default_timezone_set("Asia/Kolkata");
               $date= date('d-m-Y H:i:s');

                 $add ="select address from signup where user ='akshit'";
               $r = mysqli_query($conn,$add);
               $ro =  mysqli_fetch_array($r);
               
                while ($row =  mysqli_fetch_array($res))
                {
                	//$dish[] = $row['Dish'];
                	//echo $row['Dish'];
                	 $sql ="insert into userorder(user,address,dish,quantity,tprice,time_date,status) values('akshit','{$ro["address"]}','{$row["Dish"]}',{$row["Quantity"]},{$row["Discount"]},'$date','pending')";
                	$re = mysqli_query($conn,$sql);
                }

               echo "your order is placed";
                
                ?>