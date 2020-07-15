<?php
	session_start();
	if(isset($_SESSION['user_id'])==0){
	header("location:login.php");	
	}else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>My profile</title>
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
            <li><a href="contact.html">Contact</a></li>
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
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
        <!-- left column -->
            <div class="col-md-3">
            </div>
            
            <!-- edit form column -->
            <?php
                require_once('config.php');
                $name = $_SESSION['username'];
                $sql = "CALL getDetails('".$name."') ";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
            ?>
            
            <div class="col-md-9 personal-info">
                <h3>Personal info</h3>
                <form class="form-horizontal" role="form" method="POST">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                        <input class="form-control" type="text" value="<?php echo $row['user_mail_id'];?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                        <input class="form-control" type="text" value="<?php echo $_SESSION['username']?>" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Current Password:</label>
                        <div class="col-md-8">
                        <input class="form-control" type="password" value="" name="curr_pass">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                        <input class="form-control" type="password" value="" name="pass">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                        <input class="form-control" type="password" value="" name="con_pass">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                        <input type="submit" name = "save" class="btn btn-primary" value="Save Changes" >
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel" >
                        </div>
                    </div>
                    <?php
                        include("config.php");
						if(isset($_POST["save"])){
							$curr_pwd = $_POST["curr_pass"];
                            $pwd = $_POST["pass"];
                            $con_pass = $_POST["con_pass"];
                            $p=$row['password'];
							if(strcmp($curr_pwd,$p) == 0){
                                if(strcmp($pwd,$con_pass) == 0){
                                    $query = "CALL updateDetails('$name','$pwd')";
                                    $con->query($query);
                                    echo "<script>alert('Password changed successfully!')</script>"; 
                                    echo "<script>window.location.href='home.php'</script>";
                                }
                                else{
                                    echo "<script>alert('The passwords does not match!');
                                            window.location.href='userprofile.php'</script>";
                                }
                            }
							else{
                                 echo "<script>alert('Current password is wrong! Enter the correct password');
                                                window.location.href='userprofile.php'</script>";
							}
						}
					?>
                </form>
            </div>
        </div>
    </div>
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