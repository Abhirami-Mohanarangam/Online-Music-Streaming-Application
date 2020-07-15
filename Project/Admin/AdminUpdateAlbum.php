
<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:index.php");	
}else{

require_once('config.php');
$id = $_POST['id'];
$album = $_POST['album'];
$img_path = $_POST['img_path'];
$update = mysqli_query($con,"CALL updateAlbum($id,'".$album."','".$img_path."');") or die (mysql_error());
echo '<script>alert("1 Record updated!");
				window.location.href="AdminViewAlbums.php"</script>';
}
?>