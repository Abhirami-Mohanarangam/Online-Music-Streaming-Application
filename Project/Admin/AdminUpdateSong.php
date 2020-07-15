<?php
require_once('config.php');
$id = $_POST['id'];
$name = $_POST['name'];
$path = $_POST['path'];
$album_id = $_POST['album'];
$img_path = $_POST['img_path'];
$count =$_POST['count'];
$update = mysqli_query($con,"CALL updateSong($id,'".$name."','".$path."',$album_id,'".$img_path."',$count);") or die (mysql_error());
if(isset($_GET['aid'])){
	echo '<script>alert("1 Record Updated!");
				window.location.href="AdminViewSongs.php?id='.$_GET['aid'].'&page='.$_GET['page'].'"</script>';
}	
else{
	echo '<script>alert("1 Record Updated!");
				window.location.href="AdminViewSongs.php"</script>';
}
?>