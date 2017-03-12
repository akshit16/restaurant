<?php 
session_start();
include_once("Connection.php");


      
          
$result ="select code,discount from coupon where user ='akshit'";
                $res = mysqli_query($conn,$result);
                $row =  mysqli_fetch_array($res);
                //echo $row['code'];
                //echo $row['discount'];
                $coupon = $_POST['coupne'];
                //echo $coupon;
                $resul ="select Dish,Price,Quantity from cart where user ='akshit'";
                $re = mysqli_query($conn,$resul);
                $total=0;
                while ($ro =  mysqli_fetch_array($re) ){
                	 $total += $ro['Price']*$ro['Quantity'];}
                	 //echo "$total";

                if($coupon==$row['code'])
                {
                   $tot = $total - ($total*$row['discount']/100);
                   //echo $tot;
                   echo "coupon applied";
                }
                else
                {
                	$tot = $total;
                	echo "invalid coupon";
                }
                $dis = "update cart set Discount = $tot where user ='akshit'";
                 $rs = mysqli_query($conn,$dis);

header('Refresh: 1; url=checkout.php');
              
                //$coupon=$_POST['coupne'];
                /*if($coupon==$row['code']){
                    $_SESSION['total']= $_SESSION['a']-($_SESSION['a']*$row['discount']/100);
                } echo $total;*/


                ?>