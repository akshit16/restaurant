<?php 
session_start();
include_once("Connection.php");


      //  foreach ($rows as $row) {
          ?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Frosto || Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        
        <!--All Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- datepicker css -->
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<!-- timepicker css -->
        <link rel="stylesheet" href="css/jquery.timepicker.css">
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="cart-wraper">
    <!--header slider area are start-->
    <div class="header-slider-area common-page cart-page">  
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a></li>
								<li><a href="cart.html">Menu</a></li>
                                <li><a href="news.html">News and Promotions</a></li>
								<li><a href="orderonline.html">Order Online</a></li>
								<li><a href="cart.html">Cart</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
	</div> 
    <!--mobile menu area end-->
       
    <!--header menu area are start-->
    <div class="header-menu-area">
		<!--header-area are start-->
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="search-phone">
							<ul>
								<li><span style="color:white"><i class="fa fa-phone" aria-hidden="true"></i> 9655770461, 8680896643</span></li>
							</ul>
						</div>
					</div>
				<div class="col-md-4 col-sm-4">
					<div class="logo">
						<a href="index.html"><img src="img/logoft.png" alt=""></a>
					</div>
				</div>
					<!--<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>-->
				</div>
			</div>
		</div>  
		<!--header-area are end-->
		
		<!-- Main menu area are start  -->
		<div id="sticker" class="menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					   <div class="main-menu">
						   <nav>
							<ul>
							

								<li><a href="index.html">Home</a></li>							
								<li><a href="menu.html">Menu<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="mega-menu mega-2">
									   <span>
										  <a href="menu.html">
											 <span>Special Menu</span>
											  <img src="img/mega1.jpg" alt="">
										  </a>
									   </span>
									   <span>
										  <a href="menu.html">
											 <span>Breakfast Menu</span>
											  <img src="img/mega2.jpg" alt="">                                      
										  </a>
									   </span>
									   <span>
										  <a href="menu.html">
											 <span>Lunch Menu</span>
											  <img src="img/mega3.jpg" alt="">
										  </a>
									   </span>
									   <span>
										  <a href="menu.html">
											 <span>Dinner Menu</span>
											  <img src="img/mega4.jpg" alt="">
										  </a>
									   </span>
									   <span>
										  <a href="menu.html">
											 <span>Desserts</span>
											  <img src="img/mega5.jpg" alt="">
										  </a>
									   </span>
								   </div>
								</li>
								<li><a href="orderonline.html">Order Online</a></li>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="news.html">News and Promotions</a></li>
								<li><a href="about-us.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="login.html">Login</a></li>
							</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main menu area are end  -->     
    </div>
    <!--header menu area are end-->
    
    <!-- home slider start -->
    <div class="slider-container">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h1>Cart</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                <li class="active">Cart</li>
            </ol>
        </div>
    </div> 
    </div>
     
    <!-- cart are start-->
    <div class="cart-area pt60 pb60 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="checkout.php">
                   <div class="table-responsive">
                    <table class="shop_table cart table">
                        <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                        </thead>
                       <?php echo '<tbody>';
                            $result ="select Dish,Price,Quantity from cart where user ='akshit'  ";
                $res = mysqli_query($conn,$result);
                $total=0;
                while ($row =  mysqli_fetch_array($res) ){
                    echo'<tr class="cart_item">';
                                echo'<td class="remove"><a href="#">X</a></td>';
                                echo'<td class="item-title">';echo $row['Dish']; echo'</td>';
                                echo'<td class="item-price">'; echo $row['Price']; echo'</td>';
                                echo '<td class="item-qty">'; echo $row['Quantity']; echo '</td>';
                                echo'<td class="total-price">'; echo $row['Price']*$row['Quantity']; echo'</td>';
                            echo'</tr>';}?>
                            <!--tr class="cart_item">
                                <td class="cart-action" colspan="6">
                                    <div class="coupne-area">
                                        <div class="input-box coupon-box">
                                            <input type="text" name="name" placeholder="Coupon Code" class="apply-coupne">
                                        </div>
                                        <div class="input-box">
                                            <input type="submit" class="in-btn" name="apply" value="Apply Coupon">
                                        </div>
                                    </div>
                                    <div class="update-cart">

                                        <div class="input-box">
                                            <input type="submit" class="in-btn" name="update-cart" value="Update Cart">
                                        </div>
                                    </div>
                                </td>
                            </tr!-->
                        </tbody>
                    </table>
                    </div>
                </form>
                <div class="total-cart-wrap">
                    <div class="section-title text-center pt40">
                        <h3>Cart Totals</h3>
                    </div>
                    <form method="post" action="#">
                    <div class="table-responsive">
                    <table class="cart-total-area table">
                        <tbody>
                            <tr class="cart_item">
                                <td class="ctg-type"> Total</td>
                                <td class="cgt-des"><?php  $result ="select Dish,Price,Quantity from cart where user ='akshit'";
                $res = mysqli_query($conn,$result);
                $total=0;
                while ($row =  mysqli_fetch_array($res) ){
                                          
                                   
                                   
                                                    

                                                          $total +=  $row['Quantity']*$row['Price'];}
                                                          echo $total;
                                                          $_SESSION['a']=$total;?>
                                       </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="input-box tci-box text-center">
                        <input type="button" class="in-btn" name="processed-checkout" value="Processed Checkout"
                        onclick="document.location.href='checkout.php';">
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- cart are end-->
     
    <!--footer area are start-->
    <div class="footer-area pt60 pb60">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="single-footer text-center">
                        <div class="sosa-icon">
                            <img src="img/icon/icon-service.png" alt="">
                        </div>
                         <h1>Delivery Service</h1>
                         <div class="address">
                            <span>
                                Opposite IIT BHU gate,<br>
                                AD Street Varanasi -14<br>
                                <span class="email">frosto@gmail.com</span>
                            </span>
                            <div class="phone-no">
                                <span>9655770461, 8680896643</span>
                            </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="single-footer footer-middle text-center">
                        <div class="sosa-icon">
                            <img src="img/icon/icon-time.png" alt="">
                        </div>
                         <h1>Opening Time</h1>
                        <div class="service-time">
                            <h2>Everday</h2>
                            <span>9.30 AM - 11.00 PM</span>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="single-footer text-center">
                        <div class="sosa-icon">
                            <img src="img/icon/icon-letter.png" alt="">
                        </div>
                         <h1>Subscribe Us</h1>
                        <div class="detail-subs">
                            Subscribe to the <span>Frosto</span> newsletter to get <br> regular update about offers
                        </div>
                        <form action="#">
                            <div class="input-box">
                                <input class="newslatter" type="email" placeholder="Enter your Email-Id " name="newlatter">
                                <button title="Subscribe" type="submit" class="button"><i class="fa fa-paper-plane-o"></i></button>
                            </div>
                        </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <!--footer area are end-->
        
    <!--Copyright area are start--> 
    <div class="copyright-info pt60 pb60">
        <div class="container">
            <div class="row">
                <a href="index.html"><img src="img/logoft.png" alt=""></a>
				<p>Copyright © 2017 -<a href="http://onestdevelopers.com/">Onest Developers. </a>All rights reserved.  </p>
            </div>
        </div>
    </div>
    <!--Copyright area are end--> 
</div>
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- datepicker js -->
        <script src="js/bootstrap-datepicker.js"></script>
		<!-- timepicker js -->
        <script src="js/jquery.timepicker.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- nivo.slider js -->
        <script src="lib/js/jquery.nivo.slider.pack.js"></script>
        <script src="lib/js/nivo-active.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- Sticky JS -->	
        <script src="js/jquery.sticky.js"></script>
		<!-- venobox js -->
        <script src="lib/venobox/venobox.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:26 GMT -->
</html>
