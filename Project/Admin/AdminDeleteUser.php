<?php
require_once('config.php');
$id = $_REQUEST['id'];
$sql = mysqli_query($con,"CALL deleteAdmin($id);") or die(mysql_error());
echo '<script>alert("1 Record deleted!");
				window.location.href="AddUser.php"</script>';	
?>