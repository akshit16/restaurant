<?php 
session_start();
include 'connection.php';
 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	 header('Location:login.php');
 }
 else{
$error1 ="";
$error2 ="";
if(isset($_POST["name"]))
{
	if($_POST["reg"])
		$reg = $_POST["reg"];
	else
		$reg = 'None';
	$name = $_POST["name"];
	if($_POST["contact"])
		$contact = $_POST["contact"];
	else
		$contact = 'None';
	if($_POST["fname"])
		$fname = $_POST["fname"];
	else
		$fname = 'None';
	if($_POST["address"])
		$address = $_POST["address"];
	else
		$address = 'None';
	if($_POST["contact"])
		$contact = $_POST["contact"];
	else
		$contact = 'None';
	if($_POST["doj"])
		$doj = $_POST["doj"];
	else
		$doj = 'None';
	if($_POST["package"])
		$package = $_POST["package"];
	else
		$package = 'None';
	if($_POST["dob"])
		$dob = $_POST["dob"];
	else
		$dob = '';
	if($_POST["occupation"])
		$occupation = $_POST["occupation"];
	else
		$occupation = 'None';
	if($_POST["email"])
		$email = $_POST["email"];
	else
		$email = 'None';
	if($_POST["purpose"])
		$purpose = $_POST["purpose"];
	else
		$purpose = 'None';
	if($_POST["batch"])
		$batch = $_POST["batch"];
	else
		$batch = 'None';
	$regdate = date("Y-m-d");
	if($_POST["duedate"])
		$duedate = $_POST["duedate"];
	else
		$duedate = '';	
	if($_POST["deposit"])
		$deposit = $_POST["deposit"];
	else
		$deposit = 0;
	
	if($_POST["due"])
		$due = $_POST["due"];
	else
		$due = 0;
	$total = $due+$deposit;
	if($_POST["note"])
		$note = $_POST["note"];
	else
		$note = 'None';
	$img ='5';



	if(1)
	{
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["img"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$target_file = $target_dir . basename($reg).'.'.$imageFileType;
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["img"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["img"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$query = "INSERT INTO `client` (`reg`, `name`, `fname`, `address`, `contact`, `doj`, `package`, `dob`, `occupation`, `email`, `purpose`, `batch`, `regdate`, `duedate`, `deposit`, 
		`due`, `total`, `note`, `img`) VALUES ('{$reg}','{$name}','{$fname}','{$address}','{$contact}','{$doj}','{$package}','{$dob}','{$occupation}','{$email}','{$purpose}','{$batch}','{$regdate}','{$duedate}','{$deposit}','{$due}','{$total}','{$note}','{$img}')";
		if(mysqli_query($link, $query)){

			header('Location:addmessage.html');
		}
		else{
			header('Location:adderrormessage.html');
		}
	}
}
else {
	die("hello");
}
 }
?>