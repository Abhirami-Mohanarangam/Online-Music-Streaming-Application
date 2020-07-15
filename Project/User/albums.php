<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:login.php");	
}else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Albums</title>
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


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="index.html" class="site-logo">
			<img src="images/shuffle_logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a href="home.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="#" class="login">user</a>
				<ul class="sub-menu">
					<li><a href="userprofile.php>Edit Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</header>
	<!-- Header section end -->

    <!-- Playlist section -->
    <br><br>
    <h3> &nbsp; Hey   <?php	echo $_SESSION['username']; ?>! Enjoy your Music</h3>
	<section class="playlist-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Albums</h2>
			</div>
			<div class="container">
				<div class="category-links">
                    <a href="top10Songs.php">Top 10 Songs</a>
					<a href="artist.php">Artists</a>
					<a href="" class="active">Albums</a>
					<a href="home.php">My Playlist</a>
				</div>
			</div>                                                  
			<div class="clearfix"></div>
			<div class="row playlist-area">
				<?php
					include('config.php');
					$query = "CALL displayAlbums();";
					$result = $con->query($query);
					while($row = $result->fetch_assoc()){
				?>
				<div class="mix col-lg-3 col-md-4 col-sm-6">
					<div class="playlist-item">
						<a href="selectedAlbum.php?&aid=<?php echo $row['id']?>">
							<img src="images/albums/<?php echo $row['img_path'];?>" height="296px" width="424px" alt="">
						</a>
						<h5><?php echo $row['name'];?></h5>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	<!-- Playlist section end -->

	<!-- Help section end -->
	<section class="help-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section-title mb-0 pb-4">
						<h2>Need Help to find music? </h2>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="d-flex h-100 align-items-end">
						<form class="search-form" method ="post">
							<input type="text" placeholder="Hit it" name = "search">
							<button type="submit" name="search-button">Search</button>
						</form>
						<?php
							if(isset($_POST['search-button'])){
								$search = $_POST['search'];
								$username = $_GET['username'];
								echo '<script>window.location.href = "search.php?search='.$search.'"</script>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Help section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
<?php
}
?>