<?php include "connection.php"?>

<!DOCTYPE html>
<html lang="en">
	<!-- 9588471038 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	<style type="text/css">
		.appip {position: absolute;height: 100%;width: 30%;top: 15%;left: 35%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
		.appip h1 {font-size: 50px;color: #1c1c1c;margin-left: 35px;}
		.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 5%;width: 65%;padding: 10px;transition: 0.5s;}
		.userdet .cname,.phone,.email,.address {position: absolute;left: 14%;font-size: 25px;}
		.userdet .cname {position: absolute;top: 14%;}
		.userdet .cname:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.userdet .phone {position: absolute;top: 22.5%;}
		.userdet .phone:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.userdet .email {position: absolute;top: 31%;}
		.userdet .email:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.userdet .address {position: absolute;top: 39.5%;}
		.userdet .address:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.currenttime .currentdate,.currentmonth {position: absolute;top: 55%;height: 7%;width: 12%;background-color: white;border: none;border-radius: 15px;font-size: 21px;text-align: center;color: black;font-weight: bold;transition: 0.5s;}
		.currentdate:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.currentmonth:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.currenttime .currentdate,.sat2 .setdate {left: 25%;}
		.currenttime .currentmonth,.sat2 .setmonth {left: 56%;}
		.ct {position: absolute;top: 47%;left: 22%;color: #1c1c1c;font-size: 25px;font-weight: bold;}
		.sat {position: absolute;top: 61%;left: 23%;color: #1c1c1c;font-size: 25px;font-weight: bold;}
		.sat2 .setdate,.setmonth {position: absolute;top: 69%;height: 7%;width: 12%;background-color: white;border: none;border-radius: 15px;font-size: 30px;text-align: center;color: black;font-weight: bold;transition: 0.5s;}
		.setdate:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.setmonth:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.set {font-family: Georgia, serif;position:absolute;top: 55%;left: 0%;height: 8%;width: 60%;border-radius: 15px;color: white;background-color: #707070;font-size: 30px;font-weight: bold;border:none;transition: 0.5s;}
		.set:hover {background-color: #90EE90;color: white;}
		.appippart {position: absolute;top: 79%;left: 25%;right: 5%;height: 15%;}	
		#eon{display:none;}	
		@media screen and (min-width:200px) and (max-width:300px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 20px;color: #1c1c1c;margin-left: 30px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 50%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 42%;left: 20%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 52%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 20%;font-size: 25px;}
			.set1 {position:absolute;top: 85%;left: 27%;height: 5%;width: 45%;font-size: 20px;}
            .appippart {position: absolute;top: 79%;left: 15%;right: 5%;height: 15%;}	
		}

		@media screen and (min-width:300px) and (max-width:400px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 30px;color: #1c1c1c;margin-left: 40px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 50%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 42%;left: 20%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 52%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 58%;left: 18%;font-size: 25px;}
			.set1 {position:absolute;top: 85%;left: 27%;height: 5%;width: 45%;font-size: 20px;}
            .appippart {position: absolute;top: 79%;left: 15%;right: 5%;height: 15%;}	

		}

		@media screen and (min-width:400px) and (max-width:500px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 35px;color: #1c1c1c;margin-left: 50px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 42%;left: 22%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 52%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 58%;left: 18%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 5%;width: 45%;font-size: 20px;}
            .appippart {position: absolute;top: 80%;left: 20%;right: 5%;height: 15%;}	

		}

		@media screen and (min-width:500px) and (max-width:600px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 35px;color: #1c1c1c;margin-left: 80px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 3%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 42%;left: 29%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 52%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 58%;left: 18%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 20px;}
            .appippart {position: absolute;top: 80%;left: 24%;right: 5%;height: 15%;}	

		}


		@media screen and (min-width:600px) and (max-width:700px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 35px;color: #1c1c1c;margin-left: 100px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 3%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 42%;left: 29%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 52%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 58%;left: 24%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 20px;}
            .appippart {position: absolute;top: 80%;left: 28%;right: 5%;height: 15%;}	

		}

		@media screen and (min-width:700px) and (max-width:800px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 40px;color: #1c1c1c;margin-left: 140px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 3%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 45%;left: 32%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 55%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 60%;left: 28%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 20px;}
            .appippart {position: absolute;top: 80%;left: 30%;right: 5%;height: 15%;}	

		}


		@media screen and (min-width:800px) and (max-width:900px){
			.appip{position: absolute;height: 105%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 40px;color: #1c1c1c;margin-left: 150px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 45%;left: 32%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 55%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 60%;left: 28%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 35px;}
            .appippart {position: absolute;top: 82%;left: 32%;right: 5%;height: 15%;}

		}

		@media screen and (min-width:900px) and (max-width:1000px){
			.appip{position: absolute;height: 105%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 40px;color: #1c1c1c;margin-left: 210px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 70%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 45%;left: 36%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 55%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 60%;left: 32%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 35px;}
            .appippart {position: absolute;top: 82%;left: 32%;right: 5%;height: 15%;}

		}

		@media screen and (min-width:1000px) and (max-width:1100px){
			.appip{position: absolute;height: 105%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 40px;color: #1c1c1c;margin-left: 250px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 70%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 45%;left: 40%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 55%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 60%;left: 36%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 35px;}
            .appippart {position: absolute;top: 82%;left: 35%;right: 5%;height: 15%;}

		}

		@media screen and (max-height:600px) and (max-width:1100px){
			.appip{position: absolute;height: 105%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 40px;color: #1c1c1c;margin-left: 250px;margin-top: 30px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 70%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 45%;left: 40%;font-size: 25x;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 55%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 70%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 60%;left: 36%;font-size: 25px;}
			.set1 {position:absolute;top: 89%;left: 27%;height: 8%;width: 45%;font-size: 35px;}
            .appippart {position: absolute;top: 82%;left: 35%;right: 5%;height: 15%;}

		}

	</style>
	<script type="text/javascript">
		function appitime() {
			var today = new Date();
			var cd = today.getDate();
			var cm0 = today.getMonth();
			var cm = cm0 + 1;
			document.getElementById("currentdate").value = cd;
			document.getElementById("currentmonth").value = cm;
		}
		function subform(){
			var button = document.getElementById("button1");
			button.form.submit();
		}
		function eon_val_y(){
			document.getElementById("eon").value="YES";
			alert(document.getElementById("eon").value);
		}
		function eon_val_n(){
			document.getElementById("eon").value="NO";
			alert(document.getElementById("eon").value);
		}
	</script>
</head>

<body class="body1"  bgColor="#c9c9c9">
	<!--bgColor="#39289e">  height:40%;
	  width:100%;-->
	<!--<img style="height:auto;width:100%;" src="C:\Users\poonam\Downloads\shubham\appipbackground.jpeg">-->
		<div class="appip">
			<h1>APPOINTMENT</h1>
			<form action="sell_upload.php" method="post" enctype="multipart/form-data">
				
				<div class="userdet">
					<input type="text" class="cname" name="username" placeholder="Name" required><br>
					<input type="tel" class="phone" name="Phonenumber" placeholder="Phone no." pattern="[0-9]{10}"
						required><br>
					<input type="email" class="email" name="useremail" placeholder="Email" required><br>
					<input type="text" class="address" name="useraddress" placeholder="Address"><br>
				</div>
				<!-- <p class="ct">Food is Eadable Or Not ?</p> -->
				<div class="currenttime">
					<!-- <input type="text" id="eon" name="Eadable_or_not"> -->
					<input type="number" class="ct" name="price" placeholder="price"><br>
					<!-- <input type="text" name="curr_date" class="currentdate" id="currentdate" value="YES" onclick="eon_val_y()">
					<input type="text" name="curr_month" class="currentmonth" id="currentmonth" value="NO" onclick="eon_val_n()"><br> -->
				</div>
				<p class="sat">Set Appoitment Date</p>
				<div class="sat2">
					<input type="number" max="31" min="1" class="setdate" name="appointment_date"><br>
					<input type="number" max="12" min="1" class="setmonth" name="appointment_month"><br>
				</div>
				
				<div class="appippart">
					
					<div class="listdiv2">
                        <input type="file" name="photo" class="ch_file">
                            <!-- <input type="file" class="ch_file" name="photo"> -->
						
						<input type="submit" name="submitform" value="SET" class="set" style="height: 50px;width: 200px;">
					</div>
				</div>
			</form>
		</div>
</body>

</html>
<?php
    if(isset($_POST['submitform'])){
        $file = $_POST['scrapimg'];
        echo $file;
    }
?>