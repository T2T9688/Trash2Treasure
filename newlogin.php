<?php
include("finaluser_dash.html");
include("newfcombdash.php");
	    // $query = "select * from user_details";
		// $data  = mysqli_query($conn,$query);
		// $total = mysqli_num_rows($data);
		// $Enusername = $_POST['user_name_login'];
		// $Enpass = $_POST['user_password_login'];
		// if($total!=0){
		// 	while($result = mysqli_fetch_assoc($data)){
		// 		if(($Enusername==$result['username'])&&($Enpass==$result['password'])){
		// 			echo "User Found.LogIn Successfull.  :)".$total;
		// 			break;
		// 		}
		// 	}
		// } 
		// else{
		// 	echo "No record found.Sorry.  :(";
		// }
        $result['username'] = $_POST['user_name_dsb'];
        $result['phonenum'] = $_POST['user_phno_dsb'];
        $result['email'] = $_POST['user_email_dsb'];
?>
