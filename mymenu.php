<?php
session_start();
include_once("Connection.php");


      //  foreach ($rows as $row) {
          ?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Frosto || Menu</title>
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
<div class="menu-wraper">
    <!--header slider area are start-->
    <div class="header-slider-area common-page"> 
    <!--header slider area are end-->  

    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a></li>
								                <li><a href="menu.html">Menu</a></li>
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
                       <span>Indian</span>
                        <img src="img/mega1.jpg" alt="">
                      </a>
                     </span>
                     <span>
                      <a href="menu.html">
                       <span>Tandoori</span>
                        <img src="img/mega2.jpg" alt="">                                      
                      </a>
                     </span>
                     <span>
                      <a href="menu.html">
                       <span>Chinese</span>
                        <img src="img/mega3.jpg" alt="">
                      </a>
                     </span>
                     <span>
                      <a href="menu.html">
                       <span>Hot Breads</span>
                        <img src="img/mega4.jpg" alt="">
                      </a>
                     </span>
                     <span>
                      <a href="menu.html">
                       <span>Beverages</span>
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
                <h1>Menu</h1>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                <li class="active">Menu</li>
            </ol>
        </div>
    </div> 
    </div>
     
    <!-- our-special-menu-area are start-->
    <div class="our-special-menu-area pt60 pb60 ">
            <div class="container">
                <div class="row">
                      <div class="col-md-12">
                           <div class="section-title text-center pb40">
                               <h1>Our</h1>
                               <h2>Menu</h2>
                                <div class="sec-img">
                                    <img src="img/icon/product2.png" alt="">
                                </div>
                           </div>
                      </div>
                </div>
                <div class="row">
                   <div class="col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu text-center">
                        <div class="sma-img">

                           <img src="img/menu/05.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Indian</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                           
                            
							 <?php 
                              $count = 0;
								$result ="select * from menu where Category ='Indian'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%11 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                  $a=  $row['id'];
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                   
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%11 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="sma-middle mt60">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="special-menu sma-small">
                        <div class="sma-img">
                           <img src="img/menu/06.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Hot Breads</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                           <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Hot Breads'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%4 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%4 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					   </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu">
                        <div class="sma-img">
                           <img src="img/menu/07.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Chinese</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Chinese'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%7 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%7 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
						</div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                  <div class="sma-middle sma-last mt60 bac-right">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu">
                        <div class="sma-img">
                           <img src="img/menu/09.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Tandoori </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                           <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Tandoori'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%8 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%8 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					  </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="special-menu sma-small">
                        <div class="sma-img">
                           <img src="img/menu/08.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Beverages</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Beverages'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%4 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%4 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					  </div>
                        </div>
                    </div>
                </div>
				</div>
                <div class="row">
                  <div class="sma-middle mt60">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="special-menu sma-small">
                        <div class="sma-img">
                           <img src="img/menu/11.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Curd/Raita</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                             <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Curd/Raita'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%4 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%4 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					  </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu">
                        <div class="sma-img">
                           <img src="img/menu/10.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Rice </h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                           <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Rice'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%7 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%7 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					  </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                  <div class="sma-middle sma-last mt60 bac-right">
				  <!-- Eggs And Mutton -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="special-menu">
                        <div class="sma-img">
                           <img src="img/menu/12.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Eggs and Mutton Gravy</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                             <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Mutton and Egg'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%6 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%6 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					  </div>
                        </div>
                    </div>
					<!-- papad and salad -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="special-menu sma-small">
                        <div class="sma-img">
                           <img src="img/menu/13.jpg" alt=""> 
                           <div class="sma-heading">
                               <h3>Papad and Salad</h3>
                           </div>
                        </div>
                        <div class="total-menu-item carsoule-btn smp-carsoule">
                            <?php 
                              $count = 0;
								$result ="select Dish,Price from menu where Category ='Papad and Salad'  ";
								$res = mysqli_query($conn,$result);
                                   while ($row =  mysqli_fetch_array($res) )
                                   {
									if($count%3 == 0)
									{
									echo ' <div class="total-menu-single">';	
									
									}
                                      echo ' <div class="single-menu-item">
                                             <div class="smi-heading">';
										echo '<a href="#">';
                                      echo $row['Dish']."</a></div>";
                                      echo '<div class="smi-price"><span>';
                                     echo $row['Price']."</span></div>"; 
                                      echo '</div>';
                                     $count++;
                                    if($count%3 == 0 || $count == mysqli_num_rows($res))
										echo '</div>';


                                   }
								  




                              ?>
					   </div>
                        </div>
                    </div>
                </div>
				</div>
            </div>
        </div>
    <!-- our-special-menu-area are end-->
     
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
        <script type="text/javascript" src="jquery.min.js"></script>
        <!-- nivo.slider js -->
        <script src="lib/js/jquery.nivo.slider.pack.js"></script>
        <script src="lib/js/nivo-active.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- Sticky JS -->	
        <script src="js/jquery.sticky.js"></script>
		<!-- venobox js -->
        <script src="lib/venobox/venobox.js"></script>
		<!-- google map  js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script>
     

            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(23.81033, 90.41252)
                };
                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    icon: 'img/map-marker.png',
                    map: map
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 18:00:02 GMT -->
</html>
