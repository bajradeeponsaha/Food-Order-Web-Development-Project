<?php
if(isset($_POST['login'])){
	include_once('dbconnect.php');
    $email=$_POST['email'];
    $password=$_POST['password'];


    $email=stripslashes($email);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($con, $email);
    $password=mysqli_real_escape_string($con, $password);

    $query=mysqli_query($con, "SELECT * FROM users where password='$password' AND email='$email'");

    $rows=mysqli_num_rows($query);
    if ($rows==1) {
        $bag=mysqli_fetch_array($query);
    	$_SESSION['user']=$bag;
        echo "<center><h1>Login Successfully</h1></center>";
    	header("Refresh: 2, url=index.php");
    }
    else{
    	echo "Invalid Email or Password";
    }
    mysqli_close($con);
}

 ?>