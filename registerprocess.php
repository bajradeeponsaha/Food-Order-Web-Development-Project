<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];

include_once('dbconnect.php');

$sql="INSERT INTO users VALUES('0','$name','$email','$password','$phone','$address')";

$qry=mysqli_query($con,$sql);
if($qry){
	echo "<center><h1>Registration Completed</h1></center>";
	header("Refresh:2 ,url=index.php");
}else{
	echo "<center><h1>Error:- ".mysqli_error($con)."</h1></center>";
}

  
?>
