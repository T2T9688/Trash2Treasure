<?php
include("connection.php");
error_reporting(0);
// include("finaluser_dash.html");
// include("newlogin.php")
	    $query = "select * from user_details_final";
        $query_1 = "select * from user_cp";
        $query_2 = "select * from staff_username";
		$data  = mysqli_query($conn,$query);
        $data_1  = mysqli_query($conn,$query_1);
        $data_2  = mysqli_query($conn,$query_2);
		$total = mysqli_num_rows($data);
        $total_1 = mysqli_num_rows($data_1);
		$Enusername = $_POST['user_n_login'];
		$Enpass = $_POST['user_pass_login'];
		if($total!=0){
            for($i=0;$i<$total;$i++){
			while((($result = mysqli_fetch_assoc($data))&&($result_1 = mysqli_fetch_assoc($data_1)))||($result_2 = mysqli_fetch_assoc($data_2))){
				if(($Enusername==$result['username'])&&($Enpass==$result['password'])){

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<style type="text/css">
    .div1{position:absolute;top:24%;left:23%;height:60%;width:54%;background:transparent;border: 2px solid rgba(255,255,255,0.2);backdrop-filter: blur(20px);box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:30px;}
    .div1img1{position:absolute;top:-34%;left:30%;height:300px;width:300px;border-radius:100%;background-color:purple;background-image: url(avatar.svg);background-size:cover;}
    .div2{position:absolute;top:37%;left:27%;height:30%;width:54%;text-align:center;}
    .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:80%;background:transparent;border:none;text-align:center;font-family: 'Times New Roman', Times, serif;}
    .div2i1{top:0%;font-size:43px;font-weight:bold;}
    .div2i2{top:23%;font-size:25px;}
    .div2i3{top:46%;font-size:25px;}
    .div2i4{top:69%;font-size:20px;border-radius:20px;}
    /* .submit{position:absolute;top:68%;left:40%;height:85px;width:250px;border:none;border-radius:100px;background-color:white;font-size:50px;color:black;text-align:center;font-weight: bold;font-family: 'Times New Roman', Times, serif;} */
    /* .cp{position: absolute;top:54%;left:25%;height: 160px;width:160px;background:transparent;} */
    #cp1{position:absolute;top:59%;left:41%;height:100px;width:280px;border:none;border-radius:100px;background-color:white;font-size:50px;color:black;text-align:center;}
    #cp{position: absolute;top:54%;left:36%;height: 180px;width:180px;background:transparent;}

    @media screen and (max-width: 200px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:10%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:20px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:10px;}
        .div2 .div2i3{top:28%;font-size:10px;}
        .div2 .div2i4{top:42%;font-size:10px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:32%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:19%;height: 60px;width:60px;background:transparent;}
    }


    @media only screen  and (min-width:200px)  and (max-width:300px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:20px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:10px;}
        .div2 .div2i3{top:28%;font-size:10px;}
        .div2 .div2i4{top:42%;font-size:10px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:36%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:25%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:300px)  and (max-width:400px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:25px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:15px;}
        .div2 .div2i3{top:28%;font-size:15px;}
        .div2 .div2i4{top:42%;font-size:15px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:40%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:32%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:400px)  and (max-width:500px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:20px;}
        .div2 .div2i3{top:28%;font-size:20px;}
        .div2 .div2i4{top:42%;font-size:20px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:42%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:500px)  and (max-width:600px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:20px;}
        .div2 .div2i3{top:28%;font-size:20px;}
        .div2 .div2i4{top:42%;font-size:20px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:42%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:600px)  and (max-width:700px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:20px;}
        .div2 .div2i3{top:28%;font-size:20px;}
        .div2 .div2i4{top:42%;font-size:20px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:45%;left:42%;height:40px;width:90px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 75px;width:75px;background:transparent;}
    }


    @media only screen  and (min-width:700px)  and (max-width:800px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:35px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:25px;}
        .div2 .div2i3{top:28%;font-size:25px;}
        .div2 .div2i4{top:42%;font-size:25px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:45%;left:42%;height:45px;width:110px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 80px;width:80px;background:transparent;}
    }

    @media only screen  and (min-width:800px)  and (max-width:900px){
        .div1{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:35px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:25px;}
        .div2 .div2i3{top:28%;font-size:25px;}
        .div2 .div2i4{top:42%;font-size:25px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:45%;left:42%;height:45px;width:110px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:38%;height: 80px;width:80px;background:transparent;}
    }

    @media only screen  and (min-width:900px)  and (max-width:1000px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:40px;font-weight:bold;}
        .div2 .div2i2{top:17%;font-size:30px;}
        .div2 .div2i3{top:31%;font-size:30px;}
        .div2 .div2i4{top:45%;font-size:30px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:47%;left:43%;height:45px;width:110px;font-size:  20px;}
    #cp{position: absolute;top:45%;left:39%;height: 80px;width:80px;background:transparent;}
    }

    </style>
</head>

<body  bgColor="#c9c9c9">
    <!-- <h1>hi</h1> -->
        <form>
            <div class="div1">
                <!-- <img class="div1img1" src="img11.jpg" alt="profile_img"> -->
                
                <!-- <input type="text" name="user_cp" class="cp1" disabled value="3">
                <img src="cpimg.png" class="cp">  -->
            </div>
            <div class="div2">
                <input class="div2i1" type="text" name="user_name_dsb" disabled value="<?php echo $result['username'];?>"><br>
                <input class="div2i2" type="text" name="user_phno_dsb" disabled value="<?php echo $result['phonenum'];?>"><br>
                <input class="div2i3" type="email" name="user_email_dsb" disabled value="<?php echo $result['email'];?>"><br>
                <!-- <input class="div2i4" type="text" name="client_username" value="Client's username"><br> -->
            </div>
            <div class="sub">
                <input type="text" name="user_cp" id="cp1" disabled value="<?php echo $result_1['cp1'];?>">
                <!-- <input type="text" value=""> -->
                <img src="creditpoint.png" id="cp">
            </div>
            
        </form>
</body>
</html>

<?php
// echo "User Found.LogIn Successfull.  :)".$total;
                    // $_POST['user_name_dsb'] = $result['username'];
                    // $_POST['user_phno_dsb'] = $result['phonenum'];
                    // $_POST['user_email_dsb'] = $result['email'];
                    // cho $result['username'];
                    // echo $result['phonenum'];
                    // echo $result['email'];
                    // $result['username'] = $_POST['user_name_dsb'];
                    // $result['phonenum'] = $_POST['user_phno_dsb'];
                    // $result['email'] = $_POST['user_email_dsb'];
					break;
				}
                else{
                    if(($Enusername==$result_2['username'])&&($Enpass==$result_2['password'])){
		
                ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style type="text/css">
    .div1{position:absolute;top:24%;left:23%;height:60%;width:54%;background:transparent;border: 2px solid rgba(255,255,255,0.2);backdrop-filter: blur(20px);box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:30px;}
    .div1img1{position:absolute;top:-34%;left:30%;height:300px;width:300px;border-radius:100%;background-color:purple;background-image: url(avatar.svg);background-size:cover;}
    .div2{position:absolute;top:37%;left:27%;height:30%;width:54%;text-align:center;}
    .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:80%;background:transparent;border:none;text-align:center;font-family: 'Times New Roman', Times, serif;}
    .div2i1{top:0%;font-size:43px;font-weight:bold;}
    .div2i2{top:23%;font-size:25px;}
    .div2i3{top:46%;font-size:25px;}
    .div2i4{top:69%;font-size:20px;border-radius:20px;}
    .submit{position:absolute;top:68%;left:40%;height:85px;width:250px;border:none;border-radius:100px;background-color:white;font-size:50px;color:black;text-align:center;font-weight: bold;font-family: 'Times New Roman', Times, serif;}
    /* .cp{position: absolute;top:54%;left:25%;height: 160px;width:160px;background:transparent;} */

    @media screen and (max-width: 200px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1 .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2 .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:10%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2 .div2i1{top:0%;font-size:20px;font-weight:bold;}
        .div2 .div2i2{top:14%;font-size:10px;}
        .div2 .div2i3{top:28%;font-size:10px;}
        .div2 .div2i4{top:42%;font-size:10px;border-radius:20px;}
        .sub .submit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }


    @media only screen  and (min-width:200px)  and (max-width:300px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:22px;font-weight:bold;}
        .div2i2{top:18%;font-size:12px;}
        .div2i3{top:36%;font-size:12px;}
        .div2i4{top:54%;font-size:12px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:33%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    @media only screen  and (min-width:300px)  and (max-width:400px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:25px;font-weight:bold;}
        .div2i2{top:18%;font-size:15px;}
        .div2i3{top:36%;font-size:15px;}
        .div2i4{top:54%;font-size:15px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:38%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    @media only screen  and (min-width:400px)  and (max-width:500px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:25px;font-weight:bold;}
        .div2i2{top:18%;font-size:15px;}
        .div2i3{top:36%;font-size:15px;}
        .div2i4{top:54%;font-size:15px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:40%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    @media only screen  and (min-width:500px)  and (max-width:600px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:25px;font-weight:bold;}
        .div2i2{top:18%;font-size:15px;}
        .div2i3{top:36%;font-size:15px;}
        .div2i4{top:54%;font-size:15px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:40%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    @media only screen  and (min-width:600px)  and (max-width:700px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2i2{top:18%;font-size:20px;}
        .div2i3{top:36%;font-size:20px;}
        .div2i4{top:54%;font-size:20px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:42%;height:45px;width:96px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }


    @media only screen  and (min-width:700px)  and (max-width:800px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2i2{top:18%;font-size:20px;}
        .div2i3{top:36%;font-size:20px;}
        .div2i4{top:54%;font-size:20px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:43%;height:45px;width:96px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    @media only screen  and (min-width:800px)  and (max-width:900px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2i2{top:18%;font-size:20px;}
        .div2i3{top:36%;font-size:20px;}
        .div2i4{top:54%;font-size:20px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:43%;height:45px;width:96px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    @media only screen  and (min-width:900px)  and (max-width:1000px){
        .div1{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div1img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div2{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div2i1,.div2i2,.div2i3,.div2i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div2i1{top:0%;font-size:30px;font-weight:bold;}
        .div2i2{top:18%;font-size:20px;}
        .div2i3{top:36%;font-size:20px;}
        .div2i4{top:54%;font-size:20px;border-radius:20px;}
        .submit{position:absolute;top:53%;left:43%;height:45px;width:96px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
    }

    </style>

</head>

<body  bgColor="#c9c9c9">
    <!-- <h1>hi</h1> -->
        <form method="POST">
            <div class="div1">
                <!-- <img class="div1img1" src="img11.jpg" alt="profile_img"> -->
                
                <!-- <input type="text" name="user_cp" class="cp1" disabled value="3">
                <img src="cpimg.png" class="cp">  -->
            </div>
            <div class="div2">
                <input class="div2i1" type="text" name="user_name_dsb" disabled value="<?php echo $result_2['username'];?>"><br>
                <input class="div2i2" type="text" name="user_phno_dsb" disabled value="<?php echo $result_2['phonenum'];?>"><br>
                <input class="div2i3" type="email" name="user_email_dsb" disabled value="<?php echo $result_2['email'];?>"><br>
                <input class="div2i4" type="text" name="client_username" value="Client's username"><br>
            </div>
            <div class="sub">
                <input type="submit" class="submit" value="ADD" name="update_cp">
            </div>
            
        </form>
</body>
</html>

<?php
                }
                else   {
                     echo "No record found.Sorry.  :(";
                }
            }
        } 
    }
	}
    if(isset($_POST['update_cp'])){
        $staff_entered_username = $_POST['client_username'];
        $up_user_cp = "update user_cp set cp1=cp1+50 where username='$staff_entered_username'";
        $result_f  = mysqli_query($conn,$up_user_cp);
    }
?>