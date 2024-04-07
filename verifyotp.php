<?php
include('connection.php');
$checkotp = $_POST['user_entered_otp'];
$otp = $_POST['user_otp'];

if(isset($_POST['getotp1'])){
        if($checkotp==$otp){
            echo "<script>alert('Otp verified... :)');</script>";
               
    }
    else{
        echo "<script>alert('Otp Unverified... :(');</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Submit Otp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="login.css">
	<link rel="icon" href="leave1.jpeg">
	<script type="text/javascript" src="https://smtpjs.com/v3/smtp.js"></script>
</head>



<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="verifyotp.php">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">

						<input type="text" class="input" id="user_email" name="user_new_password" placeholder="New Password">
					</div>
				</div>
                <div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">

						<input type="text" class="input" id="otp_inp" name="user_cnf_password" placeholder="Confirm Password">
					</div>
                    
				</div>
				<!-- <div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div> -->
					<!-- <div class="div">

						<input type="text" class="input" name="user_pass_login" placeholder="Password">
					</div> -->
				<!-- </div> -->
				<!-- <a href="#">Forgot Password?</a> -->
				<!-- <button class="btn" id="getotp" onclick="otp_verify1()">GET OTP</button>
                <button class="btn" id="verifyotp">VERIFY OTP</button> -->
				<!-- <a href="signup.php"><input type="button" class="btn" value="Sign Up" ></a> -->
				<!-- <a href="company_signup.php"><input type="button" class="btn" value="Company Sign Up" ></a> -->
				<!-- <a href="signup.html">Sign Up</a> -->
				<input type="submit" class="btn" name="getotp2" value="Verify">

			</form>
		</div>
	</div>
	<!-- <script  src="otp_verify.js"></script> -->
</body>

</html>
<?php

if(isset($_POST['getotp2'])){
    $usernewpass = $_POST['user_new_password'];
    $usercnfpass = $_POST['user_cnf_password'];
    if($usernewpass==$usercnfpass){
        $query1 = "update user_details_final set password='$usernewpass'";
        $result = mysqli_query($conn,$query1);
        if($result){
            echo "<script>alert('Password Updated... :)');</script>";
        }
        else{
            echo "<script>alert('Password Not Updated... :(');</script>";
        }
}
}
?>