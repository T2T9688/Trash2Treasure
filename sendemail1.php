<?php
include('connection.php');
include('C:\xampp1\htdocs\smtp\PHPMailerAutoload.php');
if(isset($_POST['getotp'])){
    $html="test";
    $email = $_POST['user_email'];
    $otp = $_POST['user_otp'];
    $message="Your otp is ".$otp;
    $to=$email;
	// $query1 = "IF EXISTS (SELECT email FROM user_details_final WHERE email=".$email." BEGIN  END ELSE BEGIN  END";
	// $query2 = "select email FROM user_details_final WHERE email=".$email;
	$query1 = mysqli_query($conn,"select email from user_details_final where email='$email'");
	if(mysqli_num_rows($query1)>0){
		echo smtp_mailer($to,'Otp verification',$message);
	}
	else{
		echo "<script>alert('Email Not Found.Please Register First.');</script>";
	}
	
	// $result = mysqli_query($conn,$query2);
}
function smtp_mailer($to,$subject,$msg){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port=587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "shubhamkumbhar047@gmail.com";
    $mail->Password = "sjsrppbfyynxaqaq";
    $mail->SetFrom("shubhamkumbhar047@gmail.com");
    $mail->Subject=$subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }
    else{
        return 'Sent';
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

						<input type="number" class="input" id="user_email" name="user_entered_otp" placeholder="Enter Otp">
					</div>
				</div>
                <div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">

						<input type="hidden" class="input" id="otp_inp" name="user_otp" placeholder="OTP" value="<?php echo $otp;?>">
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
				<input type="submit" class="btn" name="getotp1" value="Verify">

			</form>
		</div>
	</div>
	<!-- <script  src="otp_verify.js"></script> -->
</body>

</html>
