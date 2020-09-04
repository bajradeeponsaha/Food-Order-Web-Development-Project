<?php
include 'dbconnect.php';

$name=$_POST['uname'];
$qty=$_POST['qty'];
$total=$_POST['price'];
$phone=$_POST['phone'];
$daddress=$_POST['address'];
$foodid=$_POST['foodid'];
$uid=$_SESSION['user']['id'];

$sql="INSERT INTO `orders` VALUES('0','$uid','$foodid','$qty','$total','$phone','$daddress','processing')";

$qry=mysqli_query($con,$sql);

if($qry){
	echo "<center><h1>Order Successfully</h1></center>";
	header("location: index.php");
}else{
	echo "Somthing Went Wrong!";
}

?>