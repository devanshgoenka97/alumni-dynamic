<?php
$firstname =  $_POST['firstname'];
$lastname = $_POST['lastname'];
if($firstname=='' || $lastname==''){
	echo "Name is a Required Field";
	return;
}
$yearofpassing = $_POST['yearofpassing'];
if($yearofpassing==''){
	echo "Year Of Passing is a Required Field";
	return;
}
$dateob = $_POST['dateob'];
$monthob = $_POST['monthob'];
$degree = $_POST['degree'];
if($degree==''){
	echo "Degree is a Required Field";
	return;
}
$department = $_POST['department'];
if($department==''){
	echo "Department is a Required Field";
	return;
}
$email = $_POST['email'];
if($email==''){
	echo "Email is a Required Field";
	return;
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "Please enter a valid Email address!";
	return;
}
$altemail = $_POST['altemail'];
$phone = $_POST['phone'];
$currentorg = $_POST['currentorg'];
if($currentorg==''){
	echo "Current Organisation is a Required Field";
	return;
}
$currentcity = $_POST['currentcity'];
$designation = $_POST['designation'];
$addinfo = $_POST['addinfo'];
$linkedin = $_POST['linkedin'];

$servername = "localhost";
$username = "alumni";
$password = "alumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,'alumnicell');

if($altemail==''){
	$altemail = 'NULL';
}

if($phone==''){
	$phone = 0;
}

if($dateob==''){
	$dateob = 0;
}

if($monthob==''){
	$monthob = 0;
}

if($currentcity==''){
	$currentcity = 'NULL';
}

if($designation==''){
	$designation = 'NULL';
}

if($addinfo==''){
	$addinfo = 'NULL';
}

if($linkedin==''){
	$linkedin = 'NULL';
}

$sql = "INSERT INTO temp_users VALUES(NULL,'".$firstname."','".$lastname."',".$yearofpassing.",'".$degree."','".$department."','".$email."','".$altemail."',".$phone.",".$dateob.",".$monthob.",'".$currentorg."','".$currentcity."','".$designation."','".$addinfo."','".$linkedin."')";

$result = mysqli_query($conn,$sql);

if($result==true)
	echo "Successfully Registered! Kindly wait for Admin Approval!";
else
	echo "Failed To Register";
?>