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
<title>Administrator Page</title>
<link rel="stylesheet" type="text/css" href="css/AdminStyle.css" />
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="Javascript/formvalidatealbum.js"></script>
</head>

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
    	<h4 class="header">Menu</h4>
    	<ul>
        	<li><a href="AdminArtist.php"><img src="Templates/list-style.png" height="8"  width="8"/>&nbsp;Add New Artist</a></li>
            <li><a href="AdminViewArtists.php"><img src="Templates/list-style.png" height="8"  width="8"/>&nbsp;View Records</a></li> 
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 class="header">Artists Record Section</h2>	
        	<div class="form">
            	<table width="650" border="0" cellpadding="1" cellspacing="0" bgcolor="">
                	<tr>
                    	<th class="table">ID</th><th class="table">Artists</th><th class="table">Image Path</th><th class="table">Action</th>
                    </tr>
                    <?php
						require_once('config.php');
						error_reporting(E_ERROR);
						$line = 0;
						$page = 'AdminViewArtists.php';
						$dataperpage = mysqli_query($con,"select * from artists");
						$numpage = mysqli_num_rows($dataperpage);
						$start = $_GET['start'];
						$eu = $start - 0;
						$limit = 12;
						$thisp= $eu + $limit;
						$back = $eu - $limit;
						$next = $eu + $limit;
						if(strlen($start) > 0 && !is_numeric($start)){
							echo 'Data Error';	
							exit();
						}
						$sql = mysqli_query($con,"SELECT * from artists ORDER BY id ASC LIMIT $eu, $limit");
						while($row = mysqli_fetch_array($sql)){
						if($line == 1){
							$bgcolor='#E0EEF8';
							$line=0;
						}else{
							$bgcolor = '#FFFFFF';
							$line=1;
						}
					?>
                    <tr align="center" bgcolor="<?php echo $bgcolor?>">
                    	<td align="center" width="20"><?php echo $row['id'] ?></td>                    
                        <td align="center"><?php echo $row['name'] ?></td>
                        <td align="center"><?php echo $row['img_path'] ?></td>
                        <td align="center" width="220">
                        
                        <a href="AdminViewSongs.php?id=<?php echo $row['id']?>&page=Artists" class="link">View Songs</a>&nbsp;|&nbsp;
                        <a href="AdminSong.php?id=<?php echo $row['id']?>&page=Artists" class="link">Add Song</a>&nbsp;|&nbsp;
                        <a href="AdminEditArtist.php?id=<?php echo $row['id']?>" class="link">Edit</a>&nbsp;|&nbsp;
                        <a href="AdminDeleteArtist.php?id=<?php echo $row['id']?>" class="link" onclick="return confirm('Do you want to delete this?');">Delete</a></td>
                    </tr>
                    
                    <?php
						}

						if($numpage>$limit){
							echo "<table align=center><tr><td align=left width=60>";
							if($back>=0){
								echo "<a href=$page?start=$back>PREV</a>";	
							}
							echo "</td><td align=center>";
								$l = 1;
								for($i = 0; $i < $numpage;$i = $i + $limit){
									if($i<>$eu){
										echo "<a href=$page?start=$i><font color=red>$l</font></a>";	
									}else{
										echo "<font color=red>$l</font>";	
									}
									$l = $l + 1;
								}
							echo "</td><td align=right>";
							if($thisp<$numpage){
								echo "<a href=$page?start=$next>NEXT</a>";	
							}
							echo "</td></tr></table>";
						}
					?>
                </table>
            </div>
    </div>
     <!--End Web Content-->
</div>
>
</body>
</html>

<?php  }?>
