<?php

include 'dbconnect.php';

$name=$_POST['name'];
$file_name=$_FILES['picture']['name'];
$price=$_POST['price'];
$category=$_POST['category'];
$des=$_POST['des'];
$upload="../images/foods/";
$file=$upload.rand().$file_name;

$sql="INSERT INTO foods VALUES('0','$name','$file','$price','$category','$des')";
$qry=mysqli_query($con,$sql);
if($qry){
	$u=move_uploaded_file($_FILES['picture']['tmp_name'], $file);
	if($u){
		echo "File Uploaded and Saved to Database";
	}else{
		echo "File Not Uploaded but Saved To Database";
	}
}else{
	echo mysqli_error($con);
}

?>