<?php 
include("connection.php"); 
$otp = rand(1000,9999);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <img class="wave" src="wave.png">
    <div class="container">
 <div class="img">
                    <img src="bg.svg">
        </div> 
        <div class="login-content">
            <form method="POST" action="mailsend.php">
                <!-- <img src="avatar.svg"> -->
                <!-- <h2 class="title">Welcome</h2> -->
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                     
                        <input type="text" class="input" name="user_name_signup" placeholder="Username">
                    </div>

                </div>
                <div class="input-div one">

                    <div class="i">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="div">
                        
                        <input type="number" class="input" name="user_phone_signup" placeholder="phone-number">
                    </div>


                </div>
                <div class="input-div one">

                    
                    <div class="i">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="div">
                        
                        <input type="text" class="input" name="user_email_signup" placeholder="Email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="text" class="input" name="user_password_signup" placeholder="Password">
                    </div>

                    <!-- <div class="i">
                        <i class="fas fa-lock"></i>
                    </div> -->
                    <!-- <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input">
                    </div> -->
                  
                </div>
               
                <input type="submit" class="btn" value="Get OTP" name="user_signup">
                <div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">

						<input type="number" class="input" id="user_email" name="user_entered_otp" placeholder="Enter Otp">
					</div>
				</div>
                <div class="div">
						<input type="hidden" class="input" id="otp_inp" name="user_otp" placeholder="OTP" value="<?php echo $otp;?>">
					</div>
                <!-- <div class="input-div pass">
                   
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="text" class="input" name="user_conf_password_signup" placeholder="Confirm Password">
                    </div>
                </div> -->
               
                
                <input type="submit" class="btn" name="getotp1" value="Verify" >
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>

<?php
if(isset($_POST['user_signup'])){
            $html="test";
            $email = $_POST['user_email_signup'];
            // $otp = $_POST['user_otp'];
            // $saveotp = $otp;
            
            $message="Your otp is ".$otp;
            $to=$email;
            $user_name = $_POST['user_name_signup'];
            $user_phoneno = $_POST['user_phone_signup'];
            $user_email = $_POST['user_email_signup'];
            $user_pass = $_POST['user_password_signup'];
            //$user_cnfpass = $_POST['user_conf_password_signup'];
            $signupcredits = 50;
            echo smtp_mailer($to,'Otp verification',$message);
            
           
            // echo "<script>alert($user_name);</script>";
            // $query = "insert into user_details_final values('$user_name','$user_phoneno','$user_email','$user_pass')";
            // $query_1 = "insert into user_cp(username,cp1) values('$user_name','$signupcredits')";
            // //$mysqli = new mysqli("localhost","root","","Demo_1");
            // $result = mysqli_query($conn,$query);
            // $result_1 = mysqli_query($conn,$query_1);
            //     if($result){
            //     echo "signup done";
            //     }
            //     else{
            //         echo "signup failed";
            //     }
   
}
?>