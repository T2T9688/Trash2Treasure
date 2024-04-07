<?php
    $i=1;
    $j=0;
    $finalcartitems = array();
	if(isset($_POST['placeorder'])){
		$cartlen=$_POST['cartlen'];
		$cartlen11 = 'cartlen';
		//$firstval = $_POST[$cartlen11];
		// echo "<script>alert($cartlen);alert($firstval);</script>";
		for($i=0;$i<$cartlen;$i++){
			
			$test = $_POST[$cartlen11.($i+1)];
			//$temp1 = $i-1;
			$finalcartitems[$i]=$test;
			echo "<script>alert($finalcartitems[$i]);</script>";
		}
	}
?> 


<!DOCTYPE html>
<html lang="en">
	<!-- 9588471038 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	<style type="text/css">
		.appip {position: absolute;height: 150%;width: 30%;top: 15%;left: 35%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
		.appip h1 {font-size: 50px;color: #1c1c1c;margin-left: 35px;}
		.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 5%;width: 65%;padding: 10px;transition: 0.5s;}
		.userdet .cname,.phone,.email,.address {position: absolute;left: 14%;font-size: 25px;}
		.userdet .cname {position: absolute;top: 11%;}
		.userdet .cname:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.userdet .phone {position: absolute;top: 18.5%;}
		.userdet .phone:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.userdet .email {position: absolute;top: 26%;}
		.userdet .email:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.userdet .address {position: absolute;top: 33.5%;}
		.userdet .address:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.sat2 .setdate,.setmonth {position: absolute;top: 47%;height: 7%;width: 12%;background-color: white;border: none;border-radius: 15px;font-size: 25px;text-align: center;color: black;font-weight: bold;transition: 0.5s;}
		.setdate:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.setmonth:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);transform: matrix(1.2, 0, 0, 1.2, 0, 0);}
		.sat2 .setdate {left: 25%;}
		.sat2 .setmonth {left: 56%;}
		.sat {position: absolute;top: 40%;left: 31%;color: #1c1c1c;font-size: 25px;font-weight: bold;}
		.set {font-family: Georgia, serif;position:absolute;top: 90%;left: 19%;height: 8%;width: 60%;border-radius: 15px;color: white;background-color: #707070;font-size: 30px;font-weight: bold;border:none;transition: 0.5s;}
		.set:hover {background-color: #90EE90;color: white;}
		.appippart {position: absolute;top: 71%;left: 5%;right: 5%;height: 15%;}
		.listdiv {position: absolute;top: 16%;left: 4%;height: 5%;width: 10%;}
		.listdiv1 {position: absolute;top: 3%;left: 23%;height: 15%;width: 70%;}
		.listdiv2 {position: absolute;top: 55%;left: 7.5%;}
		.label_of_list{color:#1c1c1c;font-size:17px;font-weight:bold;}
		.getlist {font-family: Georgia, serif;position: absolute;left: 100px;height: 30px;width: 90px;background-color: #707070;border: none;border-radius: 10px 10px 10px 10px;color: white;font-weight: bold;transition: 0.5s}
		.getlist:hover {background-color: #90EE90;color: white;}
		.txtSelectedValues {position: absolute;top: 40px;left: 30px;height: 20px;width: 250px;border: none;border-radius: 10px 10px 10px 10px;}
		.submitlist {height: 30px;width: 50px;background-color: blue;border: none;border-radius: 10px 10px 10px 10px;color: white;font-weight: bold;}
		
		@media screen and (min-width:200px) and (max-width:300px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 20px;color: #1c1c1c;margin-left: 15px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 50%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 28%;font-size: 15px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 47%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 62%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 54%;left: 28%;font-size: 15px;}
			.label_of_list{color:#1c1c1c;font-size:13px;font-weight:bold;}
			.mainlist{position: absolute;top:0%; left:14%;height:60px;width: 120px; overflow-y: scroll;}
			.getlist {position: absolute;top: 30px;left: 30px;height: 30px;width: 90px;}
			.txtSelectedValues {position: absolute;top: 65px;left: 0px;height: 20px;width: 150px;}
			.listdiv2{top: 40%;}
			.set {position:absolute;top: 93%;left: 27%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (min-width:300px) and (max-width:400px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 25px;color: #1c1c1c;margin-left:65px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 50%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 32%;font-size: 15px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 47%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 62%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 55%;left: 28%;font-size: 15px;}
			.label_of_list{color:#1c1c1c;font-size:13px;font-weight:bold;}
			.mainlist{position: absolute;top:0%; left:14%;height:60px;width: 120px; overflow-y: scroll;}
			.getlist {position: absolute;top: 30px;left: 65px;height: 30px;width: 90px;}
			.txtSelectedValues {position: absolute;top: 65px;left: 0px;height: 20px;width: 200px;}
			.listdiv2{top: 40%;}
			.set {position:absolute;top: 93%;left: 27%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (min-width:400px) and (max-width:500px){
			.appip{position: absolute;height: 95%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 30px;color: #1c1c1c;margin-left:65px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 50%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 35%;font-size: 15px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 47%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 64%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 28%;font-size: 15px;}
			.label_of_list{color:#1c1c1c;font-size:13px;font-weight:bold;}
			.mainlist{position: absolute;top:73%; left:14%;height:60px;width: 160px; overflow-y: scroll;}
			.getlist {position: absolute;top: 30px;left: 85px;height: 30px;width: 90px;}
			.txtSelectedValues {position: absolute;top: 65px;left: 0px;height: 20px;width: 280px;}
			.listdiv2{top: 50%;}
			.set {position:absolute;top: 94%;left: 27%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (min-width:500px) and (max-width:600px){
			.appip{position: absolute;height: 100%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 30px;color: #1c1c1c;margin-left:85px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 37%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 47%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 64%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 30%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:13px;font-weight:bold;}
			.mainlist{position: absolute;top:73%; left:14%;height:60px;width: 210px; overflow-y: scroll;}
			.getlist {position: absolute;top: 30px;left: 115px;height: 30px;width: 90px;}
			.txtSelectedValues {position: absolute;top: 65px;left: 0px;height: 20px;width: 360px;}
			.listdiv2{top: 50%;}
			.set {position:absolute;top: 94%;left: 27%;height: 5%;width: 45%;font-size: 20px;}

		}


		@media screen and (min-width:600px) and (max-width:700px){
			.appip{position: absolute;height: 100%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 30px;color: #1c1c1c;margin-left:120px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 2%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 37%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 47%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 64%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 30%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:15px;font-weight:bold;}
			.mainlist{position: absolute;top:73%; left:14%;height:60px;width: 210px; overflow-y: scroll;}
			.getlist {position: absolute;top: 30px;left: 145px;height: 30px;width: 90px;}
			.txtSelectedValues {position: absolute;top: 70px;left: 0px;height: 20px;width: 360px;}
			.set {position:absolute;top: 94.5%;left: 27%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (min-width:700px) and (max-width:800px){
			.appip{position: absolute;height: 105%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 35px;color: #1c1c1c;margin-left:160px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 37%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 47%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 64%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 30%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:20px;font-weight:bold;}
			.mainlist{position: absolute;top:73%; left:14%;height:60px;width: 260px; overflow-y: scroll;}
			.getlist {position: absolute;top: 30px;left: 170px;height: 30px;width: 90px;}
			/* .txtSelectedValues {position: absolute;top: 65px;left: 50px;height: 20px;width: 360px;} */
			.getlist {height: 60px;width: 120px;}
			.txtSelectedValues {position: absolute;top:100px;height: 40px;width: 380px;}
			.listdiv2{top: 50%;}
			.set {position:absolute;top: 94%;left: 27%;height: 5%;width: 45%;font-size: 20px;}

		}


		@media screen and (min-width:800px) and (max-width:900px){
			.appip{position: absolute;height: 115%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 35px;color: #1c1c1c;margin-left:185px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 39%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 49%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 66%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 32%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:20px;font-weight:bold;}
			.appippart {position: absolute;top: 75%;left: 5%;right: 5%;height: 15%;}
			/* .mainlist{position: absolute;top:100%; left:14%;height:60px;width: 260px; overflow-y: scroll;} */
			/* .getlist {position: absolute;top: 20px;left: 170px;height: 30px;width: 90px;} */
			 /* .txtSelectedValues {position: absolute;top: 60px;left: 50px;height: 20px;width: 360px;} */
			 .getlist {height: 60px;width: 120px;}
			.txtSelectedValues {top:70px;height: 40px;width: 380px;}
			.listdiv2{top:68%;left:23%;} 
			.set {position:absolute;top: 94.5%;left: 25%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (min-width:900px) and (max-width:1000px){
			.appip{position: absolute;height: 120%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 35px;color: #1c1c1c;margin-left:210px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 39%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 49%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 66%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 34%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:20px;font-weight:bold;}
			.appippart {position: absolute;top: 75%;left: 7%;right: 5%;height: 15%;}
			/* .mainlist{position: absolute;top:100%; left:14%;height:60px;width: 260px; overflow-y: scroll;} */
			/* .getlist {position: absolute;top: 20px;left: 170px;height: 30px;width: 90px;}
			.txtSelectedValues {position: absolute;top: 60px;left: 50px;height: 20px;width: 360px;} */
			.getlist {height: 60px;width: 120px;}
			.txtSelectedValues {top:70px;height: 40px;width: 380px;}
			.listdiv2{top: 65%;left:25%;}
			.set {position:absolute;top: 94.5%;left: 25%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (min-width:1000px) and (max-width:1100px){
			.appip{position: absolute;height: 125%;width: 80%;top: 15%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 55px;color: #1c1c1c;margin-left:240px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 39%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 49%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 66%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 56%;left: 37%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:20px;font-weight:bold;}
			.appippart {position: absolute;top: 75%;left: 9%;right: 5%;height: 15%;}
			/* .mainlist{position: absolute;top:100%; left:14%;height:60px;width: 260px; overflow-y: scroll;} */
			 .getlist {height: 60px;width: 120px;}
			.txtSelectedValues {top:70px;height: 40px;width: 380px;}
			.listdiv2{top: 65%;left:24%;}
			.set {position:absolute;top: 94.5%;left: 25%;height: 5%;width: 45%;font-size: 20px;}

		}

		@media screen and (max-height:600px) and (max-width:1100px){
			.appip{position: absolute;height: 140%;width: 80%;top: 7%;left: 10%;background-color: red;border-radius: 20px 20px 20px 20px;background: transparent;border: 2px solid rgba(255, 255, 255, 0.2);backdrop-filter: blur(20px);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
			.appip h1 {font-size: 55px;color: #1c1c1c;margin-left:200px;}
			.appip .cname,.phone,.email,.address{font-family: Georgia, serif;border: none;border-radius: 50px 50px 50px 50px;height: 4%;width: 60%;padding: 10px;transition: 0.5s;}
			.ct {position: absolute;top: 40%;left: 39%;font-size: 20px;}
			.currenttime .currentdate,.currentmonth {position: absolute;top: 45%;height: 7%;width: 15%;font-size: 25px;}
			.sat2 .setdate,.setmonth {position: absolute;top: 60%;height: 7%;width: 15%;font-size:25px;}
			.sat {position: absolute;top: 54%;left: 35%;font-size: 20px;}
			.label_of_list{color:#1c1c1c;font-size:20px;font-weight:bold;}
			.appippart {position: absolute;top: 68%;left: 9%;right: 5%;height: 15%;}
			/* .mainlist{position: absolute;top:100%; left:14%;height:60px;width: 260px; overflow-y: scroll;} */
			 .getlist {height: 60px;width: 120px;}
			.txtSelectedValues {top:70px;height: 40px;width: 380px;}
			.listdiv2{top: 65%;left:17%;}
			.set {position:absolute;top: 94%;left: 25%;height: 5%;width: 45%;font-size: 20px;}

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
		function buttononm() {
			document.getElementById("set").style.backgroundColor = "blue";
		}
		function buttononm1() {
			document.getElementById("set").style.backgroundColor = "white";
		}
		function loopSelected() {
			var txtSelectedValuesObj = document.getElementById('txtSelectedValues');
			var selectedArray = new Array();
			var selObj = document.getElementById('mainlist');
			var i;
			var count = 0;
			for (i = 0; i < selObj.options.length; i++) {
				if (selObj.options[i].selected) {
					selectedArray[count] = selObj.options[i].value;
					count++;
				}
			}
			txtSelectedValuesObj.value = selectedArray;
		}
	</script>
</head>

<body class="body1" onload="appitime()" bgColor="#c9c9c9">
	<!--bgColor="#39289e">  height:40%;
	  width:100%;-->
	<!--<img style="height:auto;width:100%;" src="C:\Users\poonam\Downloads\shubham\appipbackground.jpeg">-->
    <script>
        var length_of_cart=0;
    </script>
		<div class="appip">
			<h1>APPOINTMENT</h1>
			<form action="https://formsubmit.co/trash2treasure9688@gmail.com" method="POST">
				<div class="userdet">
					<input type="text" class="cname" name="username" placeholder="Name" required><br>
					<input type="tel" class="phone" name="Phonenumber" placeholder="Phone no." pattern="[0-9]{2}-[0-9]{10}"
						required><br>
					<input type="email" class="email" name="useremail" placeholder="Email" required><br>
					<input type="text" class="address" name="useraddress" placeholder="Address"><br>
				</div>
				<!-- <p class="ct">Current Date</p> -->
				<!-- <div class="currenttime">
					<input type="text" name="curr_date" class="currentdate" id="currentdate"disabled>
					<input type="text" name="curr_month" class="currentmonth" id="currentmonth" disabled><br>
				</div> -->
				<p class="sat">Set Appoitment Date</p>
				<div class="sat2">
					<input type="number" max="31" min="1" class="setdate" name="appointment_date"><br>
					<input type="number" max="12" min="1" class="setmonth" name="appointment_month"><br>
				</div>
				<input type="submit" name="submitform" value="SET" class="set" id="set">
				<div class="appippart">
					<div class="listdiv"> <label for="mainlist" class="label_of_list">Mainlist</label></div>
					<div class="listdiv1"> <select class="mainlist" id="mainlist" multiple name="mainlist">
                        <!-- <script>
                            document.getElementById('mainlist').innerHTML = cart.map((items)=>
                                {
                                    var {image, title, price} = items;                                    
                                    return(
                                        `<option><div class='cart-item'>
                                            <div class='row-img'>
                                                <img class='rowimg' src=${image}>
                                            </div>
                                            <p style='font-size:12px;'>${title}</p>
                                            <h2 style='font-size:15px;'>$ ${price}.00</h2>`+
                                            "<i class='fa-solid fa-trash' onclick='delElement("+(j++)+")'></i></div></option>"
                                    );
                                })
                        </script> -->
						<?php
							$finalcartitems_len = count($finalcartitems);
							for($i=0;$i<$finalcartitems_len;$i++){
								//$finalcartitems[$j]=$_POST['cart_element'.$j++];
								echo "<option>".$finalcartitems[$i]."</option>";
							}
						?>
                        
                            <option>plastic 0kg</option>
							
							<!-- <option></option> -->
							<!--<option>plastic 5kg - 10kg</option>
							<option>plastic 10kg - 15kg</option>
							<option>plastic 15kg - 20kg</option>
							<option>plastic More than 20kg</option>
							<option>notebook 0kg</option>
							<option>notebook 1kg - 5kg</option>
							<option>notebook 5kg - 10kg</option>
							<option>notebook 10kg - 15kg</option>
							<option>notebook 15kg - 20kg</option>
							<option>notebook More than 20kg</option>
							<option>Newspaper 0kg</option>
							<option>Newspaper 1kg - 5kg</option>
							<option>Newspaper 5kg - 10kg</option>
							<option>Newspaper 10kg - 15kg</option>
							<option>Newspaper 15kg - 20kg</option>
							<option>Newspaper More than 20kg</option>
							<option>cartoons Cardboard 0kg</option>
							<option>cartoons Cardboard 1kg - 5kg</option>
							<option>cartoons Cardboard 5kg - 10kg</option>
							<option>cartoons Cardboard 10kg - 15kg</option>
							<option>cartoons Cardboard 15kg - 20kg</option>
							<option>cartoons Cardboard More than 20kg</option>
							<option>Oil Daba 0kg</option>
							<option>Oil Daba 1kg - 5kg</option>
							<option>Oil Daba 5kg - 10kg</option>
							<option>Oil Daba 10kg - 15kg</option>
							<option>Oil Daba 15kg - 20kg</option>
							<option>Oil Daba More than 20kg</option>
							<option>sari`s boxs 0kg</option>
							<option>sari`s boxs 1kg - 5kg</option>
							<option>sari`s boxs 5kg - 10kg</option>
							<option>sari`s boxs 10kg - 15kg</option>
							<option>sari`s boxs 15kg - 20kg</option>
							<option>sari`s boxs More than 20kg</option>
							<option>Gadi,pello 0kg</option>
							<option>Gadi,pello 1kg - 5kg</option>
							<option>Gadi,pello 5kg - 10kg</option>
							<option>Gadi,pello 10kg - 15kg</option>
							<option>Gadi,pello 15kg - 20kg</option>
							<option>Gadi,pello More than 20kg</option>
							<option>laptop/LED/MONITOR 0kg</option>
							<option>laptop/LED/MONITOR 1kg - 5kg</option>
							<option>laptop/LED/MONITOR 5kg - 10kg</option>
							<option>laptop/LED/MONITOR 10kg - 15kg</option>
							<option>laptop/LED/MONITOR 15kg - 20kg</option>
							<option>laptop/LED/MONITOR More than 20kg</option>
							<option>Books 0kg</option>
							<option>Books 1kg - 5kg</option>
							<option>Books 5kg - 10kg</option>
							<option>Books 10kg - 15kg</option>
							<option>Books 15kg - 20kg</option>
							<option>Books More than 20kg</option>
							<option>Office Papers 0kg</option>
							<option>Office Papers 1kg - 5kg</option>
							<option>Office Papers 5kg - 10kg</option>
							<option>Office Papers 10kg - 15kg</option>
							<option>Office Papers 15kg - 20kg</option>
							<option>Office Papers More than 20kg</option>
							<option>Magazine 0kg</option>
							<option>Magazine 1kg - 5kg</option>
							<option>Magazine 5kg - 10kg</option>
							<option>Magazine 10kg - 15kg</option>
							<option>Magazine 15kg - 20kg</option>
							<option>Magazine More than 20kg</option>
							<option>Plastic Bottles 0kg</option>
							<option>Plastic Bottles 1kg - 5kg</option>
							<option>Plastic Bottles 5kg - 10kg</option>
							<option>Plastic Bottles 10kg - 15kg</option>
							<option>Plastic Bottles 15kg - 20kg</option>
							<option>Plastic Bottles More than 20kg</option>
							<option>Milk Pouch 0kg</option>
							<option>Milk Pouch 1kg - 5kg</option>
							<option>Milk Pouch 5kg - 10kg</option>
							<option>Milk Pouch 10kg - 15kg</option>
							<option>Milk Pouch 15kg - 20kg</option>
							<option>Milk Pouch More than 20kg</option>
							<option>Stainless Steel 0kg</option>
							<option>Stainless Steel 1kg - 5kg</option>
							<option>Stainless Steel 5kg - 10kg</option>
							<option>Stainless Steel 10kg - 15kg</option>
							<option>Stainless Steel 15kg - 20kg</option>
							<option>Stainless Steel More than 20kg</option>
							<option>Aluminium 0kg</option>
							<option>Aluminium 1kg - 5kg</option>
							<option>Aluminium 5kg - 10kg</option>
							<option>Aluminium 10kg - 15kg</option>
							<option>Aluminium 15kg - 20kg</option>
							<option>Aluminium More than 20kg</option>
							<option>Copper 0kg</option>
							<option>Copper 1kg - 5kg</option>
							<option>Copper 5kg - 10kg</option>
							<option>Copper 10kg - 15kg</option>
							<option>Copper 15kg - 20kg</option>
							<option>Copper More than 20kg</option>
							<option>Shoes 0kg</option>
							<option>Shoes 1kg - 5kg</option>
							<option>Shoes 5kg - 10kg</option>
							<option>Shoes 10kg - 15kg</option>
							<option>Shoes 15kg - 20kg</option>
							<option>Shoes More than 20kg</option>
							<option>Common Wire 0kg</option>
							<option>Common Wire 1kg - 5kg</option>
							<option>Common Wire 5kg - 10kg</option>
							<option>Common Wire 10kg - 15kg</option>
							<option>Common Wire 15kg - 20kg</option>
							<option>Common Wire More than 20kg</option>
							<option>Pipes plastic or metal 0kg</option>
							<option>Pipes plastic or metal 1kg - 5kg</option>
							<option>Pipes plastic or metal 5kg - 10kg</option>
							<option>Pipes plastic or metal 10kg - 15kg</option>
							<option>Pipes plastic or metal 15kg - 20kg</option>
							<option>Pipes plastic or metal More than 20kg</option> -->
						</select></div>
					<div class="listdiv2">
						<!--<form action="https://formsubmit.co/trash2treasure9688@gmail.com" method="POST">-->
						<div class="ld11"><input type="button" class="getlist" onclick="loopSelected()" value="Getlist"></div>
						<div class="ld12"><input type="text" name="mainfinallist" class="txtSelectedValues" id="txtSelectedValues"></div>

						<!--  <input type="submit" id="submitlist" value="SEND" name="send">-->
					</div>
				</div>
			</form>
		</div>
        <script src="addtocart.js"></script>
</body>

</html>