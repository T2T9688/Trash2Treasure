<?php
    if(isset($_POST['getotp']))
    {
            $email = $_POST['user_email'];
            $to = $email;
            $from = "trash2treasure9688@gmail.com";
            $subject = "Email verification";
            $header = "From : trash2treasure9688@gmail.com";
            $otp = rand(1000,9999);
            $userentotp = $_POST['user_ent_otp'];
            $message = $otp;
            mail($to,$subject,$message,$header);
            echo $otp;    
    }
    // if(isset($_POST['verifyotp'])){
    //     if($otp==$userentotp){
    //         echo "You can proceed.";

    //     }
    // }

?>