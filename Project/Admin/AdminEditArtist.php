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
<script type="text/javascript" src="Javascript/formValidateEditAlbum.js"></script>
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
    	<h2 class="header">Artists</h2>	
        	<div class="form">
            	<form method="post" id="myform" action="AdminUpdateArtist.php" />
					<?php 
						require_once('config.php');
						$id = $_REQUEST['id'];
                        $getArtist = mysqli_query($con,"call getSelectedArtist($id)");
						while($rowAlbum = mysqli_fetch_array($getArtist)){
					?>
					<div>                        
                    	<label for="Artist">Artist Name</label>
                        <input type="text" name="artist" placeholder="Artist" value="<?php echo $rowAlbum['name']?>" size="39"/>
                        <input type="hidden" value="<?php echo $rowAlbum['id']?>" name="id" />
                    </div>
                    <div>
                    	<label for="Image">Image Path</label>
                        <input type="text" name="img_path" placeholder="Image Path"  value="<?php echo $rowAlbum['img_path']?>"size="39"/>
					</div>
					<?php
						}
					?>
                    <div>
                    	<input type="submit" value="Update Artist" />
                        <input type="button" id="button2" onclick="window.location.href='AdminViewArtist.php'" value="Back" />
                    </div>
                 
                    
                </form>
            </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->
</body>
</html><?php } ?>