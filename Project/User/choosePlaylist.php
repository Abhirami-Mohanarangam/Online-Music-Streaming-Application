<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:login.php");	
}else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>choose Playlist</title>
	<meta charset="UTF-8">
	<meta name="description" content="Shuffle.com">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    <!-- Playlist section -->
   	<section class="playlist-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Choose Playlist</h2>
			</div>
			<div class="container">
			</div>                                                
			<div class="clearfix"></div>
			<div class="row playlist-area">
				<?php
					include('config.php');
					$var = 0;
					$username = $_SESSION['username'];
					$query = "CALL displayPlaylist('".$username."');";
					$result = $con->query($query);
					while($row = $result->fetch_assoc()){
						$var = $var+1;
				?>
				<div class="mix col-lg-3 col-md-4 col-sm-6">
					<div class="playlist-item">
						<?php
							if(isset($_GET['page'])){
						?>
						<a href="addSongToPlaylist.php?pid=<?php echo $row['id'];?>&sid=<?php echo $_GET['sid'];?>&page=<?php echo $_GET['page']?>&aid=<?php echo $_GET['aid']?>">
							<img src="images/playlist/<?php echo $var?>.jpg" height="296px" width="424px" alt="">
						</a>
						<?php
							}
							else{
						?>
						<a href="addSongToPlaylist.php?pid=<?php echo $row['id'];?>&sid=<?php echo $_GET['sid'];?>">
							<img src="images/playlist/<?php echo $var?>.jpg" height="296px" width="424px" alt="">
						</a>
						<?php
							}
						?>
						<h5><?php echo $row['name'];?></h5>
					</div>
				</div>
				<?php
					}
				?>
            </div>
        </div>
    </section>
</body>
</html>
<?php
}
?>