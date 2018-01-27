<?php
include('connect.php');
$year = $_POST['year'];
$btech = $_POST['btech'];
$mtech = $_POST['mtech'];
$others = $_POST['others'];
$phd = $_POST['phd'];
$sql = "INSERT INTO stats VALUES(NULL,'".$year."','".$btech."','".$mtech."','".$others."','".$phd."')";
$res = mysqli_query($conn,$sql);
if($res==true){
	echo '<script type="text/javascript">alert("Success");</script>';
	header('Location:../adminhome.php');
}
else{
	echo '<script type="text/javascript">alert("Failure");</script>';
	header('Location:../adminhome.php');
}
?>