<?php
include('../connect.php');
$id = $_POST['id'];
$sql = "SELECT * from temp_users WHERE id=".$id;

$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($result);

$firstname = $res['firstname'];
$lastname = $res['lastname'];
$yearofpassing = $res['yearofpassing'];
$degree = $res['degree'];
$department = $res['department'];
$email = $res['email'];
$altemail = $res['altemail'];
$passcode = $res['password'];
$phone = $res['phone'];
$dateob = $res['dateob'];
$monthob = $res['monthob'];
$currentorg = $res['currentorg'];
$currentcity = $res['currentcity'];
$designation = $res['designation'];
$addinfo = $res['addinfo'];
$linkedin = $res['linkedin'];

$sql = "INSERT INTO users VALUES(NULL,'".$firstname."','".$lastname."',".$yearofpassing.",'".$degree."','".$department."','".$email."','".$passcode."','".$altemail."',".$phone.",".$dateob.",".$monthob.",'".$currentorg."','".$currentcity."','".$designation."','".$addinfo."','".$linkedin."')";
$result = mysqli_query($conn,$sql);
if($result == true){
	$sql = "DELETE FROM temp_users WHERE id=".$id;
	$result = mysqli_query($conn,$sql);
	echo "User Approved!";
	return;
}
else{
	echo "Unable to Approve User.";
}
?>
