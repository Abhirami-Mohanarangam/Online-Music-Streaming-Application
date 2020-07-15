<?php
require_once('config.php');
$username = $_POST['username'];
$password = $_POST['password'];
$check = mysqli_query($con,"SELECT * FROM admin WHERE username = '$username' AND password ='$password'") or die(mysqli_error());
if(mysqli_num_rows($check) >= 1){
	while($row = mysqli_fetch_array($check)){
		session_start();
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['username'] = $row['username'];
		header("Location:home.php");	
	}
	
}else{
	header("Location:index.php?error_log=1");	
}
?>