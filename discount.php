<?php 
session_start();
include_once("Connection.php");


      
          
$result ="select code,discount from coupon where user ='Sakshi'";
                $res = mysqli_query($conn,$result);
                $row =  mysqli_fetch_array($res);
                //echo $row['code'];
                //echo $row['discount'];
                $coupon = $_POST['coupne'];
                $_SESSION['coupon'] = $coupon;
                //echo $coupon;
                $resul ="select Dish,Price,Quantity,total from cart where user ='Sakshi'";
                $re = mysqli_query($conn,$resul);
                $total=0;
                //$sum =0;
                while ($ro =  mysqli_fetch_array($re) ){
                   // $sum = $ro['Price']*$ro['Quantity'];
                	 $total += $ro['total'];
                    }
                	 //echo "$total";

                if($coupon==$row['code'])
                {
                   $tot = $total - ($total*$row['discount']/100);
                   echo $tot;
                   echo "coupon applied";
                }
                else
                {
                	$tot = $total;
                	echo "invalid coupon";
                }
                $dis = "update cart set Discount = $tot where user ='Sakshi'";
                 $rs = mysqli_query($conn,$dis);

header('Refresh: 1; url=checkout.php');
              
                //$coupon=$_POST['coupne'];
                /*if($coupon==$row['code']){
                    $_SESSION['total']= $_SESSION['a']-($_SESSION['a']*$row['discount']/100);
                } echo $total;*/


                ?>