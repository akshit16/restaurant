<?php 
	session_start();
	include 'connection.php';
	 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:login.php');
	 }
else{
	if(isset($_GET["cid"])){
		$id =$_GET["cid"];
	}
	$error1 ="";
$error2 ="";
if(isset($_POST["name"]))
{
	$id = $_POST["id"];
  $reg = $_POST["reg"];
	$name = $_POST["name"];
  $fname = $_POST["fname"];
  $address = $_POST["address"];
	$contact = $_POST["contact"];
	$doj = $_POST["doj"];
	$package = $_POST["package"];
	$dob = $_POST["dob"];

	$occupation = $_POST["occupation"];
	$email = $_POST["email"];
	$purpose = $_POST["purpose"];
	$batch = $_POST["batch"];
	$regdate = $_POST["regdate"];

	$duedate = $_POST["duedate"];
	$deposit = $_POST["deposit"];
	$due = $_POST["due"];
	$total = $due + $deposit;
	$note = $_POST["note"];
	if(1)
	{
		$query = "UPDATE client SET 
    reg = '{$reg}',
    name = '{$name}',
    fname = '{$fname}',
    address = '{$address}',
    contact = '{$contact}',
    doj = '{$doj}',
    package = '{$package}',
    dob = '{$dob}',

    occupation = '{$occupation}',
    email = '{$email}',
    purpose = '{$purpose}',
    batch = '{$batch}',
    regdate = '{$regdate}',

    duedate = '{$duedate}',
    deposit = '{$deposit}',
    due = '{$due}',
    total = '{$total}',
    note = '{$note}'
		WHERE id={$id}";
		if(mysqli_query($link, $query)){
			header('Location:updatemessage.html');
		}
    else{
      header('Location:updateerrormessage.html');
      die($id);
    }
	}

}
else{
	$query = "SELECT * FROM client WHERE id='{$id}'";
		if($result = mysqli_query($link,$query)){
			while ($row = mysqli_fetch_array($result)) {
        $id = $row["id"];
        $reg = $row["reg"];
        $name = $row["name"];
        $fname = $row["name"];
        $address = $row["address"];
        $contact = $row["contact"];
        $doj = $row["doj"];
        $package = $row["package"];
        $dob = $row["dob"];
        $occupation = $row["occupation"];
        $email = $row["email"];
        $purpose = $row["purpose"];
        $batch = $row["batch"];
        $regdate = $row["regdate"];
        $duedate = $row["duedate"];
        $deposit = $row["deposit"];
        $due = $row["due"];
        $total = $row["total"];
        $note = $row["note"];
        $img = $row["img"];
			}
}
else{
	die('Invalid select query: ' . mysql_error());
}
}	
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
              <span class="d-ib">Update Client Information</span>

            </h1>
            <p class="title-bar-description">
              <small>This form is concerned for updating information of Olive Kitchen only</small>
            </p>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
			
			<form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post" id="updatec">
			<input type="hidden" value= <?php echo "'".$id."'"; ?> name ="id">
              <div class="form-group">
                <img src="upload/<?php echo $reg.'.png' ?>" style="height: 128px;width: 128px">
              </div>
              <div class="form-group">
                <label for="name">Profile Picture</label>
                <input name="img" class="form-control" value=<?php echo '"'.$reg.'"' ?> type="file">
              </div>
              <div class="form-group">
                <label for="reg">Registration Number</label>
                <input name="reg" class="form-control" value=<?php echo '"'.$reg.'"' ?> type="text">
              </div>     
              <div class="form-group">
                <label for="name">Customer Name</label>
                <input name="name" class="form-control" value=<?php echo '"'.$name.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="contact">Father's Name</label>
                <input name="fname" class="form-control" value=<?php echo '"'.$fname.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="contact">Address</label>
                <input name="address" class="form-control" value=<?php echo '"'.$address.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input name="contact" class="form-control" value=<?php echo '"'.$contact.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="occupation">Occupation</label>
                <input name="occupation" class="form-control" value=<?php echo '"'.$occupation.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" value=<?php echo '"'.$email.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="package">Package</label>
                <input name="package" class="form-control" value=<?php echo '"'.$package.'"' ?> type="text">
              </div>
              <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="doj">Date of Joining</label>
                    <input name="doj" class="form-control" value=<?php echo '"'.$doj.'"' ?> type="date">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input name="dob" class="form-control" value=<?php echo '"'.$dob.'"' ?> type="date">
                  </div>
                </div>
              </div>
              <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="regdate">Registration Date</label>
                    <input name="regdate" class="form-control" value=<?php echo '"'.$regdate.'"' ?> type="date">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="contact">Due Date</label>
                    <input name="duedate" class="form-control" value=<?php echo '"'.$duedate.'"' ?> type="date">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="contact">Deposit Amout</label>
                <input name="deposit" class="form-control" value=<?php echo '"'.$deposit.'"' ?> type="text">
              </div>
              <div class="form-group">
                <label for="contact">Due Amount</label>
                <input name="due" class="form-control" value=<?php echo '"'.$due.'"' ?> type="text">
              </div>
             <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
                  <input type = "hidden" value=<?php echo "'".$purpose."'"; ?> id="purpose">
                    <label for="purpose">Purpose</label>
                    <select name="purpose" class="custom-select" id="purpose1">
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
                    <input type = "hidden" value=<?php echo "'".$batch."'"; ?> id="batch">
                    <select name="batch" class="custom-select" id="batch1">
                      <option value="Not Selected">Not Selected</option>
                      <option value="Morning">Morning</option>
                      <option value="Evening">Evening</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="note">Note</label>
                <input name="note" class="form-control" value=<?php echo '"'.$note.'"' ?> type="text">
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
<script>

var temp = document.getElementById('batch').value;
var mySelect = document.getElementById('batch1');
for(var i, j = 0; i = mySelect.options[j]; j++) {
  if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
  }
}

var temp = document.getElementById('purpose').value;
var mySelect = document.getElementById('purpose1');
for(var i, j = 0; i = mySelect.options[j]; j++) {
  if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
  }
}
</script>
  </body>
</html>