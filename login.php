<!DOCTYPE html>
<html>

<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="login.css">
	<link rel="icon" href="leave1.jpeg">
	
</head>

<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="newfcombdash_1.php">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">

						<input type="text" class="input" name="user_n_login" placeholder="Username">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">

						<input type="text" class="input" name="user_pass_login" placeholder="Password">
					</div>
				</div>
				<!-- <div class="div">
						<input type="hidden" class="input" id="otp_inp" name="user_otp" placeholder="OTP" value="">
					</div> -->
				<a href="forgot_p.php">Forgot Password?</a>
				<input type="submit" class="btn" value="Login" name="user_login">
				<a href="newsignup1.php"><input type="button" class="btn" name="signup" value="Sign Up" ></a>
				<a href="company_signup.php"><input type="button" class="btn" value="Company Sign Up" ></a>
				<!-- <a href="signup.html">Sign Up</a> -->
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>

