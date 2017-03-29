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
  <style>
  #moredetails{
	  display:none;
  }
  </style>
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
              <span class="d-ib">Add client Information</span>

            </h1>
            <p class="title-bar-description">
              <small>This form is concerned for new client registration only</small>
            </p>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
			<form action="addclient.php" method="post" id="clientadd" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Profile Picture</label>
                <input name="img" class="form-control" type="file">
              </div>
              <div class="form-group">
                <label for="reg">Registration Number</label>
                <input name="reg" class="form-control" type="text">
              </div>     
              <div class="form-group">
                <label for="name">Customer Name</label>
                <input name="name" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="contact">Father's Name</label>
                <input name="fname" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="contact">Address</label>
                <input name="address" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input name="contact" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="occupation">Occupation</label>
                <input name="occupation" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="package">Package</label>
                <input name="package" class="form-control" type="text">
              </div>
              <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="doj">Date of Joining</label>
                    <input name="doj" class="form-control" type="date">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input name="dob" class="form-control" type="date">
                  </div>
                </div>
              </div>
              <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="regdate">Registration Date</label>
                    <input name="regdate" class="form-control" type="date">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="contact">Due Date</label>
                    <input name="duedate" class="form-control" type="date">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="contact">Deposit Amout</label>
                <input name="deposit" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label for="contact">Due Amount</label>
                <input name="due" class="form-control" type="text">
              </div>
             <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">

                    <label for="status">Purpose</label>
                    <select name="purpose" class="custom-select">
                      <option value="Not Selected">Not Selected</option>
                      <option value="Gym">Gym</option>
                      <option value="Dance">Dance</option>
                      <option value="Aerobics">Aerobics</option>
                      <option value="Cardio">Cardio</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="batch">Batch</label>
                    <select name="batch" class="custom-select">
                      <option value="Not Selected">Not Selected</option>
                      <option value="Morning">Morning</option>
                      <option value="Evening">Evening</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="note">Note</label>
                <input name="note" class="form-control" type="text">
              </div>
			  
			 
              <div class="form-group">
                <input type="submit" id="addc" class="btn btn-primary" type="button">
                <input type="reset" class="btn btn-default" type="button" value="Clear">
              </div>
			  </form>
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
  </body>
</html>