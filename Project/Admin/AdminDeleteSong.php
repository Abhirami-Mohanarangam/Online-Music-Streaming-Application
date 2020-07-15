<?php
require_once('config.php');
$id = $_REQUEST['id'];
mysqli_query($con,"CALL deleteSong($id);");
mysqli_query($con,"delete from artists_songs where song_id = $id");
if(isset($_GET['aid'])){
	echo '<script>alert("1 Record deleted!");
				window.location.href="AdminViewSongs.php?id='.$_GET['aid'].'&page='.$_GET['page'].'"</script>';
}	
?>