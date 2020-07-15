<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:index.php");	
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Administrator Page</title>
<link rel="stylesheet" type="text/css" href="css/AdminStyle.css" />
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<body>
<div class="header_wrapper">
	<div class="login">
          <?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?>
            <ul>
            	
                <li><a href="logout.php">Admin Logout</a></li>
            </ul>
   	</div>
</div>
<!--Start Menu-->
<div class="header_menu">
	<div class="menu">
    	<ul>
        	<li><a href="home.php">HOME</a></li>
            <li><a href="AdminArtist.php">ARTISTS</a></li>
            <li><a href="AdminAlbum.php">ALBUMS</a></li>
    	</ul>
    </div>
</div>
<!--End Menu-->
<div class="header_under"></div>
<!--Start Container for the web content-->
<div class="container_wrapper">
	<!--Sidebar-->
    <div class="sidebar_menu">
    	<div>
    		<h4 class="header">Menu</h4>
        </div>
    	<ul>
        	<li><a href="AdminAlbum.php"><img src="Templates/list-style.png" height="8"  width="8"/>&nbsp;Add New Album</a></li>
            <li><a href="AdminViewAlbums.php"><img src="Templates/list-style.png" height="8"  width="8"/>&nbsp;View Records</a></li>
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
		<h2 class="header">View Songs</h2>
			<table width="650" border="0" cellpadding="1" cellspacing="0" bgcolor="">
				<tr>
					<th class="table">ID</th><th class="table">Song Name</th><th class="table">Path</th><th class="table">Image Path</th><th class="table">Count</th><th class="table">Action</th>
				</tr>
				<?php
				require_once('config.php');
				$page = $_GET['page'];
				$artist = 'Artists';
				$album = 'Albums';
				if(strcmp($page,$artist) == 0){
					$id = $_REQUEST['id'];
					$getRows = mysqli_query($con,"SELECT * FROM songs WHERE songs.id in (select song_id from artists_songs where artist_id = $id)");
					if($getRows = mysqli_num_rows($getRows)==0){
						echo '<div class=error>No Songs has been uploaded for this artist</div>';	
					}else{
					$count =0;
					error_reporting(E_ERROR);
					$getSong = mysqli_query($con,"SELECT * FROM songs WHERE songs.id in (select song_id from artists_songs where artist_id = $id)");
					while($row = mysqli_fetch_array($getSong)){
						$count++;
						if($line==1){
							$bgcolor = '#FFFFFF';
							$line = 0;
						}else
						{
							$bgcolor='#E0EEF8';
							$line = 1;
						}
				?>
				<tr align="center" bgcolor="<?php echo $bgcolor?>">
					<td align="center" width="20"><?php echo $row['id'] ?></td>                    
					<td align="center"><?php echo $row['name'] ?></td>
					<td align="center"><?php echo $row['path'] ?></td>
					<td align="center"><?php echo $row['img_path'] ?></td>
					<td align="center"><?php echo $row['count'] ?></td>
					<td align="center" width="220">
                        <a href="AdminEditSong.php?id=<?php echo $row['id']?>&aid=<?php echo $id?>&page=Artists" class="link">Edit</a>&nbsp;|&nbsp;
                        <a href="AdminDeleteSong.php?id=<?php echo $row['id']?>&aid=<?php echo $id?>&page=Artists" class="link" onclick="return confirm('Do you want to delete this?');">Delete</a></td>
				</tr>
				<?php
						}
					}
				}
				elseif(strcmp($page,$album) == 0){
					$id = $_REQUEST['id'];
					$getRows = mysqli_query($con,"SELECT * FROM songs WHERE album = $id");
					if($getRows = mysqli_num_rows($getRows)==0){
						echo '<div class=error>No Songs has been uploaded for this album</div>';	
					}else{
					$count =0;
					error_reporting(E_ERROR);
					$getSong = mysqli_query($con,"SELECT * FROM songs WHERE album = $id");
					while($row = mysqli_fetch_array($getSong)){
						$count++;
						if($line==1){
							$bgcolor = '#FFFFFF';
							$line = 0;
						}else
						{
							$bgcolor='#E0EEF8';
							$line = 1;
						}
				?>
				<tr align="center" bgcolor="<?php echo $bgcolor?>">
				<td align="center" width="20"><?php echo $row['id'] ?></td>                    
				<td align="center"><?php echo $row['name'] ?></td>
				<td align="center"><?php echo $row['path'] ?></td>
				<td align="center"><?php echo $row['img_path'] ?></td>
				<td align="center"><?php echo $row['count'] ?></td>
				<td align="center" width="220">
					<a href="AdminEditSong.php?id=<?php echo $row['id']?>&aid=<?php echo $id?>&page=Albums" class="link">Edit</a>&nbsp;|&nbsp;
					<a href="AdminDeleteSong.php?id=<?php echo $row['id']?>&aid=<?php echo $id?>&page=Albums" class="link" onclick="return confirm('Do you want to delete this?');">Delete</a></td>
				</tr>
				<?php
						}
					}
				}
				elseif(!isset($_GET['page'])){
					$getRows = mysqli_query($con,"SELECT * FROM songs ");
					if($getRows = mysqli_num_rows($getRows)==0){
						echo '<div class=error>No Songs </div>';	
					}else{
					$count =0;
					error_reporting(E_ERROR);
					$getSong = mysqli_query($con,"SELECT * FROM songs");
					while($row = mysqli_fetch_array($getSong)){
						$count++;
						if($line==1){
							$bgcolor = '#FFFFFF';
							$line = 0;
						}else
						{
							$bgcolor='#E0EEF8';
							$line = 1;
						}
				?>
				<tr align="center" bgcolor="<?php echo $bgcolor?>">
				<td align="center" width="20"><?php echo $row['id'] ?></td>                    
				<td align="center"><?php echo $row['name'] ?></td>
				<td align="center"><?php echo $row['path'] ?></td>
				<td align="center"><?php echo $row['img_path'] ?></td>
				<td align="center"><?php echo $row['count'] ?></td>
				<td align="center" width="220">
					<a href="AdminEditSong.php?id=<?php echo $row['id']?>" class="link">Edit</a>&nbsp;|&nbsp;
					<a href="AdminDeleteSong.php?id=<?php echo $row['id']?>" class="link" onclick="return confirm('Do you want to delete this?');">Delete</a></td>
				</tr>
				<?php
						}
					}
				}
				?> 
          </table>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
</div>
</body>
</html><?php }?>