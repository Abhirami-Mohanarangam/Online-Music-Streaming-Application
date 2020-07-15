<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:login.php");	
}else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Home</title>
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
	<style>
		/* The Modal (background) */
		.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
		}

		/* The Close Button */
		.close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
		}

		.close:hover,
		.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
		}
	</style>

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
					<li><a href="userprofile.php">Edit Profile</a></li>
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
    <h3>Hey   <?php	echo $_SESSION['username']; ?>! Enjoy your Music</h3>
	<section class="playlist-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Playlists</h2>
			</div>
			<div class="container">
				<div class="category-links">
                    <a href="top10Songs.php">Top 10 Songs</a>
					<a href="artist.php">Artists</a>
					<a href="albums.php">Albums</a>
					<a href="" class="active">My Playlist</a>
				</div>
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
						<a href="selectedPlaylist.php?pid=<?php echo $row['id'];?>&var=<?php echo $var;?>">
							<img src="images/playlist/<?php echo $var?>.jpg" height="296px" width="424px" alt="">
						</a>
						<h5><?php echo $row['name'];?></h5>
					</div>
				</div>
				<?php
					}
				?>
				<div class="mix col-lg-3 col-md-4 col-sm-6">
					<div class="playlist-item">
						<!-- Trigger/Open The Modal -->
						<button id="myBtn" class="btn-primary">Create new</button>

						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Create Playlist</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="d-flex h-100 align-items-end">
										<form class="search-form" method = "post">
											<input type="text" placeholder="Playlist name" name="playlistName">
											<button type = "submit" name="create" >Create</button>
										</form>
										<?php
											include('config.php');
											if(isset($_POST['create'])){
												$pname = $_POST['playlistName'];
												$username = $_SESSION['username'];
												echo '<script>window.location.href = "createPlaylist.php?username='.$username.'&pname='.$pname.'"</script>';
											}
										?>
									</div>
								</div>

							</div>
						</div>
						<script>
							// Get the modal
							var modal = document.getElementById("myModal");

							// Get the button that opens the modal
							var btn = document.getElementById("myBtn");

							// Get the <span> element that closes the modal
							var span = document.getElementsByClassName("close")[0];

							// When the user clicks the button, open the modal 
							btn.onclick = function() {
								modal.style.display = "block";
							}

							// When the user clicks on <span> (x), close the modal
							span.onclick = function() {
								modal.style.display = "none";
							}

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
								if (event.target == modal) {
									modal.style.display = "none";
								}
							}
						</script>
					</div>
				</div>
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
								echo '<script>window.location.href = "search.php?&search='.$search.'"</script>';
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
}?>