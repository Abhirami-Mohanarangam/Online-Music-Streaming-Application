<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:index.php");	
}else{
	require_once('config.php');
	$id = $_GET['id'];
	$con->query("delete from albums where albums.id = $id");
	echo '<script> alert("1 record Deleted!");
					window.location.href="AdminViewAlbums.php"</script>';
}
?>