<!DOCTYPE html>
<?php 
	session_start();
	include 'connection.php';
	 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:login.php');
	 }
else{
	if(isset($_GET["cid"])){
		$cid =$_GET["cid"];
	$query = "SELECT * FROM orderid where orderid ='{$cid}'";
		if($result = mysqli_query($conn,$query)){
			while ($row = mysqli_fetch_array($result)) {
				
				$user = $row["user"];
				//$name = $row["name"];
				$address = $row["address"];
				$contact = $row["contact"];
				$amount= $row["amount"];
				$date = $row["date"];
			
				$email = $row["email"];
				
			}
	}			
					
	}
	else{
		header('Location:index.php');
	}
}
$quer = "SELECT * FROM userorder where user = '$user' and time_date='$date' ";
$dish = array();
$quantity= array();
if($resul = mysqli_query($conn,$quer)){
      while ($tow = mysqli_fetch_assoc($resul)) {
        
        //$name = $tow["user"];
        //$name = $row["name"];
        //$add = $tow["address"];
       // $cont = $tow["contact"];
        $amt= $tow["tprice"];
        //$dat = $tow["time_date"];
      $quantity[] = $tow['quantity'];
        $dish[] = $tow["dish"];
        $status = $tow['status'];
        
      }
  }     
       
   
  
  else{
    header('Location:index.php');
  }
$dish1 = implode('<br>' , $dish);
$quantity1= implode('<br>', $quantity);
?>
<html lang="en">
<head>
<?php 
include 'head.php';
?>
  </head>
  <body class="layout layout-header-fixed">
		<?php
			include 'topnav.php';
		?>
    <div class="layout-main">
		<?php
			include 'sidenav.php';
		?>
      <div class="layout-content">
        <div class="profile">
          <div class="profile-header">
            <div class="profile-cover">
              <div class="profile-container">
                <div class="profile-card" >
                  <div class="profile-avetar">
                    <img class="profile-avetar-img" width="128" height="128" src="upload/<?php echo $user?>.png" alt="user_profile_dynamicgym">
                  </div>
                  <div class="profile-overview">
                    <h1 class="profile-name"><?php echo $user ?></h1>
                    <a href= <?php echo '"updatec.php?cid='.$cid.'"'?>> <button class="profile-follow-btn" type="button">Update</button></a>
                    <p><b>Date and Time of Order : </b> <?php echo $date;?></p>
					
					<p><b>Contact : </b><?php echo $contact;?></p>
					<p><b>Amount :</b> Rs. <?php echo $amount;?></p>
					<p><b>Batch :</b> </p>
                  </div>
                  <div class="profile-info">
                    <ul class="profile-nav">
                      <li>
                        
                        <a href="#">
                          <h3 class="profile-nav-heading">Rs. <?php echo $amount;?></h3>
                          <em>
                            <small>Due Amount</small>
                          </em>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="profile-tabs">
                  <ul class="profile-nav">
                    <li class="active">
                      <a href="#">Overview</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="profile-body">
            <div class="profile-container">
	            <h5>Name : </h5><h4><?php echo $user;?>  </h4>
				<!--h5>Father's Name : </h5><h4><?php echo $fname;?></h4-->
	            <h5>Address : </h5><h4><?php echo $address;?>  </h4>

				<h5>Dish: </h5><table><tr><td><h4><?php echo $dish1;?></h4></td><td><?php  echo $quantity1;?></h4></td></tr></table>
	            <h5>Date of order : </h5><h4><?php echo $date;?>  </h4>
				
	            <h5>Email : </h5><h4><?php echo $email;?>  </h4>
				<!--h5>Purpose: </h5><h4><?php echo $purpose;?></h4-->
				<h5>Total Amount: </h5><h4>Rs. <?php echo $amt;?></h4>
				<h5>Status: </h5><h4><?php echo $status;?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/profile.min.js"></script>
  </body>


</html>