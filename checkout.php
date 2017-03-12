<?php 
session_start();
include_once("Connection.php");


      //  foreach ($rows as $row) {
          ?>
<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Frosto || Checkout</title>
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
        <!-- venobox css -->
        <link rel="stylesheet" href="lib/venobox/venobox.css">
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
<div class="checkout-wraper">
    <!--header slider area are start-->
    <div class="header-slider-area common-page checkout-page">  
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
                <h1>Checkout</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div> 
    </div>
     
    <!-- Checkout are start-->
    <div class="cart-area pt60 pb60 ">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="coupne-customer-area mb50">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                          <img src="img/icon/acc.jpg" alt="">
                           Returning customer? 
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               Click here to login
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <div class="sm-des pb20">
                    If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.
                            </div>
                            <div class="first-last-name">
                                <div class="input-box name1">
                                    <label>User Name Or Email</label>
                                    <input type="email" placeholder="Your Email" class="info" name="email">
                                </div>
                                <div class="input-box name2">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" class="info" name="padd">
                                </div>
                                <div class="frm-action cc-area">
                                    <div class="input-box tci-box">
                                        <input type="submit" class="in-btn" name="processed-checkout" value="Login">
                                    </div>
                                    <span>
                                <input type="checkbox" class="remr"> Remember me 
                                </span>
                                    <a class="forgotten forg" href="#">Forgotten Password</a>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                          <img src="img/icon/acc.jpg" alt="">
                           Have A Coupon? 
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               Click here to enter your code
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body coupon-body">
                            <div class="first-last-name">
                                <div class="input-box name1">
                                    <input type="text" placeholder="Coupne Code" class="info" name="coupne">
                                </div>
                                <div class="input-box name2">
                                    <Button type="button"  class="in-btn" onclick="foo()">Apply Coupon</Button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="billing-details">
                                <div class="contact-text right-side">
                                      <h2>Billing Details</h2>
                            <form action="#">
                               <div class="first-last-name">
                                    <div class="input-box name1">
                                        <label>First Name</label>
                                        <input type="text" name="namm" class="info" placeholder="First Name">
                                    </div>
                                    <div class="input-box name2">
                                        <label>Last Name</label>
                                        <input type="text" name="namm" class="info" placeholder="Last Name">
                                    </div>
                               </div>
                                <div class="input-box">
                                    <label>Company Name</label>
                                    <input type="text" name="cpany" class="info" placeholder="Company Name">
                                </div>
                               <div class="first-last-name">
                                    <div class="input-box name1">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="info" placeholder="Your Email">
                                    </div>
                                    <div class="input-box name2">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" class="info" placeholder="Phone Number">
                                    </div>
                               </div>
                               
                                <div class="input-box">
                                    <label>Address <em>*</em></label>
                                    <input type="text" name="add1" class="info" placeholder="Street Address">
                                    <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                               
                                <!--<div class="input-box">
                                    <label>Town/City <em>*</em></label>
                                    <input type="text" name="add1" class="info" placeholder="Town/City">
                                </div>

                                <div class="first-last-name clearfix">
                                    <div class="input-box name1">
                                        <label>State/Division <em>*</em></label>
                                        <input type="email" name="email" class="info" placeholder="Your Email">
                                    </div>
                                    <div class="input-box name2">
                                        <label>Post Code/Zip Code<em>*</em></label>
                                        <input type="text" name="phone" class="info" placeholder="Phone Number">
                                    </div>
                                </div>-->
                                
                                <div class="create-acc clearfix">
                                    <div class="acc-toggle">
                                        <input type="checkbox" id="acc-toggle">
                                        <label for="acc-toggle">Create an Account</label>
                                    </div>
                                    <div class="create-acc-body">
                                       <div class="sm-des">
                                           Create an account by entering the information below. If you are a returning customer please login at the top of the page.
                                       </div>
                                        <div class="input-box">
                                            <label>Account password <em>*</em></label>
                                            <input type="password" name="pass" class="info" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="billing-details">
                                <div class="right-side">
                                      
                                      
                                    <div class="ship-acc clearfix">
                                    <div class="ship-toggle pb20">
                                        <input type="checkbox" id="ship-toggle">
                                        <label for="ship-toggle">Ship to a different address?</label>
                                    </div>
                                    <div class="ship-acc-body">
                                        <form action="#">
                                            <div class="first-last-name">
                                                <div class="input-box name1">
                                                    <label>First Name</label>
                                                    <input type="text" name="namm" class="info" placeholder="First Name">
                                                </div>
                                                <div class="input-box name2">
                                                    <label>Last Name</label>
                                                    <input type="text" name="namm" class="info" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="input-box">
                                                <label>Company Name</label>
                                                <input type="text" name="cpany" class="info" placeholder="Company Name">
                                            </div>

                                            <div class="input-box">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>

                                            <!--<div class="input-box">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>

                                            <div class="first-last-name clearfix">
                                                <div class="input-box name1">
                                                    <label>State/Division <em>*</em></label>
                                                    <input type="email" name="email" class="info" placeholder="Your Email">
                                                </div>
                                                <div class="input-box name2">
                                                    <label>Post Code/Zip Code<em>*</em></label>
                                                    <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                </div>
                                            </div>-->
                                        </form>
                                    </div>
                                    </div>
                            <div class="form">
                                <div class="input-box">
                                    <label>Order Notes</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="area-tex"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    </div>
                   <div class="checkout-total mt20">
                       <h3>Your order</h3>
                   <form action="#" method="post">
                   <div class="table-responsive">
                        <table class="checkout-area table">
                       <thead>
                        <tr class="cart_item check-heading">
                            <td class="ctg-type"> Product</td>
                            <td class="cgt-des"> Total</td>
                        </tr>
                        </thead><?php  $result ="select Dish,Price,Quantity from cart where user ='akshit'";
                $res = mysqli_query($conn,$result);
                $total=0;
                
                        echo '<tbody>';
                        while ($row =  mysqli_fetch_array($res) ){
                          echo ' <tr class="cart_item check-item">';
                                echo '<td class="ctg-type">';echo $row['Dish'].'×'.$row['Quantity']; echo'</td>';
                                echo'<td class="cgt-des">'; echo $row['Price']*$row['Quantity']; echo'</td>';
                            echo '</tr>';
                            $total += $row['Price']*$row['Quantity']; }
                            $_SESSION['a']=10;
                            echo'<tr class="cart_item">';
                               echo '<td class="ctg-type">After Discount(if applicable)</td>';
                                echo'<td class="cgt-des">'; ?></td>
                            </tr>
                            <tr class="cart_item">
                                <td class="ctg-type">Shipping</td>
                                <td class="cgt-des">Free Shiping</td>
                            </tr>
                            <tr class="cart_item">
                                <td class="ctg-type"> Total</td>
                                <td class="cgt-des"> $ 1.026.00 </td>
                            </tr>
                        </tbody>
                    </table>
                   </div>
                </form>
                </div>
                
                    <div class="payment-section mt20 clearfix">
                        <div class="pay-toggle">
                            <form action="#">
                               <div class="pay-type-total">
                                                                <div class="input-box pt20 mt20">
                                    <input type="submit" class="in-btn" name="processed-checkout" value="Place order">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                
        </div>
    </div>
    </div>
    <!-- Checkout are end-->
     
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
        <script type="text/javascript">
            function foo (){

            $.ajax({
                type: 'POST',
                url: 'discount.php',
                //dataType:'json', // add json datatype to get json
     
                success: function(data) {
                    alert(data);
                    

                }
            });
 }
        </script>
    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:26 GMT -->
</html>
