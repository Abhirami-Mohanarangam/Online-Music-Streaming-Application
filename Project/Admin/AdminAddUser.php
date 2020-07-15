<?php
require_once('config.php');
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['pass'];

$Adduser =  "CALL addAdmin('".$name."','".$username."','".$password."')";
	if(!mysqli_query($con,$Adduser)){
		die(mysqli_error());
	}else{
		echo '<script>alert("1 Record added!");
				window.location.href="AddUser.php"</script>';	
	}
?>