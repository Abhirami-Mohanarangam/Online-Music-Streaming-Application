<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Categories</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
			<li><a href="home.php?username=<?php echo $_GET['username']?>">Home</a></li>
			<li><a href="#">Pages</a>
				<ul class="sub-menu">
					<li><a href="category.php?username=<?php echo $_GET['username']?>">Category</a></li>
					<li><a href="home.php?username=<?php echo $_GET['username']?>">Playlist</a></li>
					<li><a href="artist.php?username=<?php echo $_GET['username']?>">Artist</a></li>
				</ul>
			</li>
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="#" class="login">user</a>
				<ul class="sub-menu">
					<li><a href="userprofile.php?username=<?php echo $_GET['username']?>">Edit Profile</a></li>
					<li><a href="logout.php?username=<?php echo $_GET['username']?>">Logout</a></li>
				</ul>
            </li>
            <li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<!-- Category section -->
	<section class="category-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Live Concert Playlist</h2>
			</div>
			<div class="container">
				<div class="category-links">
					<a href="" class="active">Genres</a>
					<a href="artist.php?username=<?php echo $_GET['username']?>">Artists</a>
					<a href="home.php?username=<?php echo $_GET['username']?>">All Playlist</a>
				</div>
			</div>
			<div class="category-items">
				<div class="row">
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/9.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/2.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="category-item">
							<img src="img/playlist/7.jpg" alt="">
							<div class="ci-text">
								<h4>Micke Smith</h4>
								<p>Live from Madrid</p>
							</div>
							<a href="artist.html" class="ci-link"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->

	<!-- Songs section  -->
	<section class="songs-section">
		<div class="container">
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/1.jpg" alt="">
							<div class="song-info">
								<h4>Jennifer Brown</h4>
								<p>One Night in Ibiza</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="music-files/1.mp3"></div>
								<div class="jp-audio jp_container_1" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>
										<!-- Progress Bar -->
										<div class="player_bars">
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/2.jpg" alt="">
							<div class="song-info">
								<h4>Michael Smith</h4>
								<p>Dream in colors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_2" data-url="music-files/2.mp3"></div>
								<div class="jp-audio jp_container_2" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/3.jpg" alt="">
							<div class="song-info">
								<h4>Indeed</h4>
								<p>In the park</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_3" data-url="music-files/3.mp3"></div>
								<div class="jp-audio jp_container_3" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/4.jpg" alt="">
							<div class="song-info">
								<h4>Moon man</h4>
								<p>Dream in colors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_4" data-url="music-files/4.mp3"></div>
								<div class="jp-audio jp_container_4" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/5.jpg" alt="">
							<div class="song-info">
								<h4>Neens</h4>
								<p>One Night in Ibiza</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_5" data-url="music-files/5.mp3"></div>
								<div class="jp-audio jp_container_5" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/6.jpg" alt="">
							<div class="song-info">
								<h4>The Smiths</h4>
								<p>Dream in colors</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_6" data-url="music-files/6.mp3"></div>
								<div class="jp-audio jp_container_6" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/7.jpg" alt="">
							<div class="song-info">
								<h4>Don’t Stop</h4>
								<p>Turn up the music</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_7" data-url="music-files/7.mp3"></div>
								<div class="jp-audio jp_container_7" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<!-- song -->
			<div class="song-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="song-info-box">
							<img src="img/songs/8.jpg" alt="">
							<div class="song-info">
								<h4>The Reds</h4>
								<p>Love is in the air</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single_player_container">
							<div class="single_player">
								<div class="jp-jplayer jplayer" data-ancestor=".jp_container_8" data-url="music-files/8.mp3"></div>
								<div class="jp-audio jp_container_8" role="application" aria-label="media player">
									<div class="jp-gui jp-interface">

										<!-- Player Controls -->
										<div class="player_controls_box">
											<button class="jp-prev player_button" tabindex="0"></button>
											<button class="jp-play player_button" tabindex="0"></button>
											<button class="jp-next player_button" tabindex="0"></button>
											<button class="jp-stop player_button" tabindex="0"></button>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars">
											
											<div class="jp-progress">
												<div class="jp-seek-bar">
													<div>
														<div class="jp-play-bar"><div class="jp-current-time" role="timer" aria-label="time">0:00</div></div>
													</div>
												</div>
											</div>
											<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
										</div>
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="songs-links">
							<i onclick="myFunction(this)" class="fa fa-thumbs-o-up" style='font-size:36px;'></i>

							<script>
								function myFunction(x) {
									x.classList.toggle("fa-thumbs-up");
								}
							</script>

						</div>
					</div>
				</div>
			</div>
			<div class="site-pagination pt-5 mt-5">
				<a href="#" class="active">1|</a>
				<a href="#">2|</a>
				<a href="#">3|</a>
				<a href="#">4</a>
			</div>
		</div>
	</section>
	<!-- Songs section end -->

	
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main.js"></script>

	<!-- Audio Player and Initialization -->
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jplayerInit.js"></script>

	</body>
</html>
