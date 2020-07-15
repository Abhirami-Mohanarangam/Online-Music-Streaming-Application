<?php
require_once('config.php');
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['pass'];
$update = mysqli_query($con,"CALL updateAdmin($id,'".$name."','".$username."','".$password."');") or die (mysql_error());
echo '<script>alert("1 Record updated!");
				window.location.href="AddUser.php"</script>';
?>