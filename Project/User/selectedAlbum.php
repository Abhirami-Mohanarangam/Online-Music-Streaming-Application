<?php
	session_start();
	if(isset($_SESSION['user_id'])==0){
	header("location:login.php");	
	}else{

		include('config.php');
		$album_id = $_GET['aid'];
		$query = "SELECT * from albums where id = $album_id ";
		$result = $con->query($query);
		$row = $result->fetch_assoc();
	
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $row['name'];?></title>
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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	
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
			<li><a href="Contact.php">Contact</a></li>
			<li><a href="#" class="login">user</a>
				<ul class="sub-menu">
					<li><a href="userprofile.php">Edit Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
            </li>
            <li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</header>
	<!-- Header section end -->
	
	<!-- Player section -->
	<section class="player-section set-bg" data-setbg="images/player-bg.jpg">
		<div class="player-box">
			<div class="tarck-thumb-warp">
				<div class="tarck-thumb">
					<img src="images/albums/<?php echo $row['img_path'];?>" alt="">
				</div>
			</div>
			<div class="wave-player-warp">
				<div class="row">
					<div class="col-lg-8">
						<div class="wave-player-info">
							<h2><?php echo $row['name'];?></h2>
							<p></p>
						</div>
					</div>
				</div>
				<ul>
					<br>
					<li><strong>Genre:</strong>&nbsp;<span>electro, drum & base, minimal</span></li><br>
					<li><strong>Tags:</strong>&nbsp;<span>quitar, piano, music, electronic music, minimal, chill music, pop, cultural, live, popular</span></li><br>
					<li><strong>Instruments:</strong>&nbsp;<span>quitar, piano, drums, bass</span></li><br>
				</ul>
			</div>
		</div>
	</section>
	<!-- Player section end -->

	<!-- Songs details section -->
	<section class="category-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Songs in <?php echo $row['name'];?></h2>
			</div>
			<div class="container">
				<div class="category-links">
                    <a href="top10Songs.php">Top 10 Songs</a>
					<a href="artist.php">Artists</a>
					<a href="home.php">My Playlist</a>
				</div>
			</div> 
			<div class="category-items">
				<div class="row">
					<?php
						$count = 0;
						$query = "CALL getAlbumSongs('".$album_id."');";
						$result = $con->query($query);
						while($row = $result->fetch_assoc()){
							$count += 1;
					?>
					<div class="col-xl-3 col-sm-6">
						<div class="similar-song">
							<img class="ss-thumb" src="images/albums/<?php echo $row['img_path']?>" alt="">
							<div class="jp-gui jp-interface">
								<div class="ss-controls">
									<div class="songs-links">
										<a href="listenSong.php?sid=<?php echo $row['id']?>"><i class="fa fa-play" style='font-size:36px; color:orange;'></i></a>
										<a href="choosePlaylist.php?sid=<?php echo $row['id']?>&page=Album&aid=<?php echo $_GET['aid']?>"><i class="fa fa-plus" style='font-size:36px; color:orange;'></i></a>
									</div>
									<div class="player_controls_box">
										<h4><?php echo $row['name']?></h4>
										<p><?php echo $row['count']?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>

    <!-- Songs details section -->
	<div id="chart">
		<?PHP
			if($count > 1){
				include("config.php");
				$query = "SELECT * FROM songs where album = $album_id";
				$result = mysqli_query($con, $query);
				$chart_data = '';
				while($row = mysqli_fetch_array($result))
				{
				 $chart_data .= "{ name:'".$row['name']."', count:".$row['count']."}, ";

				}
			}
		?>
		
	</div>
	<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'name',
 ykeys:['count'],
 labels:['Song count','Song Count'],
 hideHover:'auto',
});
</script>
	
    
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

	<!-- Audio Players js -->
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/wavesurfer.min.js"></script>

	<!-- Audio Players Initialization -->
	<script src="js/WaveSurferInit.js"></script>
	<script src="js/jplayerInit.js"></script>

	</body>
</html>
<?php
	}?>