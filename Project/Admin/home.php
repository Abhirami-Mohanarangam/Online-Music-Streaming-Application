<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:index.php");	
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Page</title>
<link rel="stylesheet" type="text/css" href="css/AdminStyle.css" />
<script type="text/javascript" src="Javascript/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="Javascript/formvalidation.js"></script>
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
    	<div>
    		<h4 class="header">Menu</h4>
        </div>
    	<ul>
        	<li><a href="Feedbacks.php"><img src="Templates/list-style.png" height="8"  width="8"/>&nbsp;Feed Backs</a></li>
            <li><a href="AddUser.php"><img src="Templates/list-style.png" height="8"  width="8"/>&nbsp;Add User</a></li>        
        </ul>
    </div> 
    <!--End Sidebar-->
    <!--Start Web Content-->
    <div class="home_content">
    	<h2 class="header">Hello Admin <?php echo $_SESSION['username']?></h2>
        
        <div class="banner">
        
        </div>
    </div>
     <!--End Web Content-->
</div>
<!--End Container-->

</div>
</body>
</html>
<?php 	
}
?>