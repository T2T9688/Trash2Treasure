<?php
include('connection.php');
$checkotp = $_POST['user_entered_otp'];
$user_name = $_POST['user_name_signup'];
$user_phoneno = $_POST['user_phone_signup'];
$user_email = $_POST['user_email_signup'];
$user_pass = $_POST['user_password_signup'];
//$user_cnfpass = $_POST['user_conf_password_signup'];
$otp = $_POST['user_otp'];
if(isset($_POST['getotp1'])){
    if($checkotp==$otp){
        echo "<script>alert('Otp verified... :)');</script>";
        $signupcredits = 50;
            
        $query = "insert into user_details_final values('$user_name','$user_phoneno','$user_email','$user_pass')";
        $query_1 = "insert into user_cp(username,cp1) values('$user_name','$signupcredits')";
        //$mysqli = new mysqli("localhost","root","","Demo_1");
        $result = mysqli_query($conn,$query);
        $result_1 = mysqli_query($conn,$query_1);
            if($result){
            echo "signup done";
            }
            else{
                echo "signup failed";
            }
    }
    else{
        echo "<script>alert('Otp Unverified... :(');</script>";
    }
}

?>