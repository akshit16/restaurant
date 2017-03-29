<?php 
	session_start();
	include 'connection.php';
	 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:login.php');
	 }
	 ?>
<!DOCTYPE html>
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
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Customer Information</span>

            </h1>
            <p class="title-bar-description">
              <small>This table describe all clients that are registered with us.</small>
            </p>
          </div>
          <div class="text-center m-b">
            <a class="btn btn-warning" href="addc.php" style="background-color:#D9230F" >Add Client</a>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="panel">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table id="demo-dynamic-tables-2" class="table table-middle nowrap">
                      <thead>
                        <tr>
                          <th>
                            <label class="custom-control custom-control-primary custom-checkbox">
                              <input class="custom-control-input" type="checkbox">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th>Order Id</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Amount</th>
                          <th>Date And Time</th>
                     
                        </tr>
                      </thead>
                      <tbody>
<?php 
$sql = "select * from orderid";
$res = mysqli_query($conn,$sql);
		$query = "SELECT * FROM orderid";
		if($result = mysqli_query($conn,$query)){
			$count=1;
			while ($row = mysqli_fetch_array($result)) {
        $cid=$row[0];
				$name=$row[1];
				//$contact=$row[5];
				//$date=date_format($date,"Y-M-D");
				$address = $row[2];
				$amount = $row[3];
        $date = $row[4];
        $email=$row[6];
        $contact=$row[5];
        //$deposit = $row[17];
				//$batch = $row[12];
				//$duedate = $row[14];
				//$assign = $row[6];
				
				echo "
                        <tr>
                          <td>
                          </td>
						  <td data-order='".$name."'>
                            <span class='icon-with-child m-r'>
                              <span class='icon-child bg-warning circle sq-20'>".$count."</span>
                            </span>	
							<strong>".$name."</strong>
							</td>
							";
				echo '
                          <td class="maw-320">
                            <span class="truncate">'.$contact.'</span>
                          </td>
                          <td><span class="label label-info label-pill">'.$email.' </span></td>
                          <td data-order="'.$address.'">
                            <span class="label label-warning label-pill"> '.$address.'</span>
                          </td>' ;

                           

                           echo ' <td style ="color:red;" data-order="'.$amount.'">'.$amount.'</td>';
                
                            echo ' <td style ="color:red;" data-order="'.$date.'">'.$date.'</td>';
                            echo '<td data-order=""></td>

                          <td>
                            <div class="btn-group pull-right dropdown">
                              <button class="btn btn-link link-muted" aria-haspopup="true" data-toggle="dropdown" type="button">
                                <span class="icon icon-ellipsis-h icon-lg icon-fw"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-menu-right">
							    <li><a href="profile.php?cid='.$cid.'">View Full Details</a></li>
                                <li><a href="updatec.php?cid='.$cid.'">Update</a></li>
                                <li><a href="delete.php?cid='.$cid.'">Delete</a></li>
                                <li><a href="#">Send SMS</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>				
				';
				$count++;
			}
		}

?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.0.0</small>
          <small class="copyright">2017 &copy; <a href="http://www.onestdevelopers.com/">Onest Developers </a></small>
        </div>
      </div>
    </div>
    
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
	<script>
	var modals = document.getElementById('addcompany');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("close1");

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modals.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	//alert("hello");
    modals.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modals.style.display = "none";
    }
}</script>

  </body>
</html>