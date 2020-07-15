<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:index.php");	
}else{
	require_once('config.php');
	$id = $_REQUEST['id'];
	$deletealbum = mysqli_query($con,"call deleteArtist($id)");
	$deletesong = mysqli_query($con,"DELETE FROM songs WHERE songs.id in (select song_id from artists_songs where artist_id = $id)");
	header("Location: AdminViewArtists.php");
}
?>