
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-02.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="signupform" method="post">
					<span class="login100-form-title">
						Sign Up
					</span>

          				<div class="wrap-input100 validate-input" data-validate="Please enter name">
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<input class="input100" type="text" name="name" placeholder="Username" id="name" required>
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Please enter email id">
						<input class="input100" type="email" name="email" placeholder="Email" id="email" reqiured>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password" id="password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Confirm Password">
						<input class="input100" type="password" name="confirmPassword" placeholder="Confirm Password" id="confirmPassword" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
			
						<input type="submit" name="signUp" class="btn btn-lg btn-primary s-scroll-trigger"  onclick = "return Validate()"  value="Sign UP">
					</div>
					
					<script type="text/javascript">
					    function Validate() {
        					var password = document.getElementById("password").value;
        					var confirmPassword = document.getElementById("confirmPassword").value;
        					if (password != confirmPassword) {
            						alert("Passwords do not match.");
            						return false;
        					}
        					return true;
    					}
					</script>

					<?php
						include("config.php");
						if(isset($_POST["signUp"])){
							$name = $_POST["name"];
							$email = $_POST["email"];
							$pass = $_POST["password"];
							$sql = "CALL sign_up('$name','$email','$pass')";
							if(mysqli_query($con,$sql)){
								echo '<script>alert("Successfully Created!")</script>';
								header("location:login.php");
							}
							else{
								echo '<script>alert("Oops! Something went wrong. Please Try again")</script>';
							}
						}	
					?>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Already  have an account?
						</span>

						<a href="login.php" class="txt3">
							Login now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>