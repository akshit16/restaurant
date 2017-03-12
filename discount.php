<?php 
session_start();
include_once("Connection.php");


      
          
$resul ="select code,discount from coupon where user ='akshit'";
                $re = mysqli_query($conn,$resul);
                $row =  mysqli_fetch_array($re);
                echo $row['code'];
                echo $row['discount'];
                echo $_SESSION['a'];
                //$coupon=$_POST['coupne'];
                /*if($coupon==$row['code']){
                    $_SESSION['total']= $_SESSION['a']-($_SESSION['a']*$row['discount']/100);
                } echo $total;*/


                ?>