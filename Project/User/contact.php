<?php
session_start();
if(isset($_SESSION['user_id'])==0){
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Shuffle.com</title>
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
			<img src="img/shuffle_logo.png" alt="">
		</a>
		<div class="header-right">
			<div class="user-panel">
				<a href="" class="login">Login</a>
				<span>|</span>
				<a href="" class="register">Create an account</a>
			</div> 
		</div>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="Contact.html">Contact</a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<!-- Map -->
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.742864444032!2d77.0021273!3d11.0246887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1584217488643!5m2!1sen!2sin" style="border:0;" allowfullscreen></iframe></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Get in touch</h2>
						</div>
						<p>This project was created by Abhirami.M and Rooban.S We are doing MSc Data Science in PSG COllege of Technology,Coimbatore,Tamil Nadu. This project uses HTML,CSS,Javascript,Bootstrap Templates in the front-end. The backend is done using MySQL which is connected to the front-end using PHP.</p>
						<ul>
							<li>PSG College of technology</li>
							<li>Coimbatore</li>
							<li>+91 99521-60172</li>
							<li>+91 97904-56377</li>
							<li>contact@shuffle.com</li>
						</ul>
						<form class="contact-from" method = post>
							<div class="row">
								<div class="col-md-6">
									<input type="text" name = "name" placeholder="Your name" required>
								</div>
								<div class="col-md-6">
									<input type="text" name = "email" placeholder="Your e-mail" required>
								</div>
								<div class="col-md-12">
									<input type="text" name = "subject" placeholder="Subject" required>
									<textarea placeholder="Message" name = "message" required></textarea>
									<button class="site-btn" name = "submit">send message</button>
								</div>
							</div>
						</form>
						<?php
							include('config.php');
							if(isset($_POST['submit'])){
								$name = $_POST['name'];
								$email = $_POST['email'];
								$subject = $_POST['subject'];
								$message = $_POST['message'];
								$sql = "CALL submitFeedback('".$name."','".$email."','".$subject."','".$message."')";
								$con->query($sql);
								echo '<script> alert("Submitted Successfully");
										window.location.href = "contact.php";
									</script>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	
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
else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Shuffle.com</title>
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
					<li><a href="userprofile.php">Edit Profile</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 p-0">
					<!-- Map -->
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.742864444032!2d77.0021273!3d11.0246887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1584217488643!5m2!1sen!2sin" style="border:0;" allowfullscreen></iframe></div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="contact-warp">
						<div class="section-title mb-0">
							<h2>Get in touch</h2>
						</div>
						<p>This project was created by Abhirami.M and Rooban.S. We are doing MSc Data Science in PSG COllege of Technology,Coimbatore,Tamil Nadu. This project uses HTML,CSS,Javascript,Bootstrap Templates in the front-end. The backend is done using MySQL which is connected to the front-end using PHP.</p>
						<ul>
							<li>PSG College of technology</li>
							<li>Coimbatore</li>
							<li>+91 99521-60172</li>
							<li>+91 97904-56377</li>
							<li>contact@shuffle.com</li>
						</ul>
						<form class="contact-from" method = post>
							<div class="row">
								<div class="col-md-6">
									<input type="text" name = "name" placeholder="Your name" required>
								</div>
								<div class="col-md-6">
									<input type="text" name = "email" placeholder="Your e-mail" required>
								</div>
								<div class="col-md-12">
									<input type="text" name = "subject" placeholder="Subject" required>
									<textarea placeholder="Message" name = "message" required></textarea>
									<button class="site-btn" name = "submit">send message</button>
								</div>
							</div>
						</form>
						<?php
							include('config.php');
							if(isset($_POST['submit'])){
								$name = $_POST['name'];
								$email = $_POST['email'];
								$subject = $_POST['subject'];
								$message = $_POST['message'];
								$sql = "CALL submitFeedback('".$name."','".$email."','".$subject."','".$message."')";
								$con->query($sql);
								echo '<script> alert("Submitted Successfully");
										window.location.href = "contact.php";
									</script>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	
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
