<?php
include("connection.php");
error_reporting(0);
// include("finaluser_dash.html");
// include("newlogin.php")
	    $query = "select * from user_details_final";
        $query_1 = "select * from user_cp";
        $query_2 = "select * from staff_username";
        $query_3 = "select * from recycle_company";
        $query_4 = "select * from transac_history";
		$data  = mysqli_query($conn,$query);
        $data_1  = mysqli_query($conn,$query_1);
        $data_2  = mysqli_query($conn,$query_2);
        $data_3  = mysqli_query($conn,$query_3);
        $data_4  = mysqli_query($conn,$query_4);
		$total = mysqli_num_rows($data);
        $total_1 = mysqli_num_rows($data_1);
		$Enusername = $_POST['user_n_login'];
		$Enpass = $_POST['user_pass_login'];
		if($total!=0){
            for($i=0;$i<$total;$i++){
			while(((($result = mysqli_fetch_assoc($data))&&($result_1 = mysqli_fetch_assoc($data_1)))||(($result_3 = mysqli_fetch_assoc($data_3)))&&($result_4 = mysqli_fetch_assoc($data_4)))||($result_2 = mysqli_fetch_assoc($data_2))){
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
        <form method="POST">
            <div class="div1">
                <!-- <img class="div1img1" src="img11.jpg" alt="profile_img"> -->
                
                <!-- <input type="text" name="user_cp" class="cp1" disabled value="3">
                <img src="cpimg.png" class="cp">  -->
            </div>
            <div class="div2">
                <input class="div2i1" type="text" name="normaluser" disabled value="<?php echo $result['username'];?>"><br>
                <input class="div2i2" type="text" name="user_phno_dsb" disabled value="<?php echo $result['phonenum'];?>"><br>
                <input class="div2i3" type="email" name="user_email_dsb" disabled value="<?php echo $result['email'];?>"><br>
                <!-- <input class="div2i4" type="hidden" name="client_username" value="Client's username"><br> -->
            </div>
            <div class="sub">
                <input type="text" name="user_cp" id="cp1" disabled value="<?php echo $result_1['cp1'];?>">
                <!-- <input type="text" value=""> -->
                <img src="creditpoint.png" id="cp">
            </div>
            <input type="submit" name="creditstore" class="button1" value="Credit Store">
        </form>
</body>
</html>

<?php
if(isset($_POST['creditstore'])){
?>
    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trash To Treasure</title>

    <link rel="stylesheet" href="styleforbuypage.css"> 

    <link rel="icon" href="leaf.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script src="https://mediafiles.botpress.cloud/4cbb7811-b1bd-4593-883a-48f4a7faef68/webchat/config.js"
        defer>
    </script>
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        <style>
            .bars{
                display:flex;
                justify-content:center;
                align-items:center;
                margin-top:-10px;
            }
            .active:hover{
                transform: matrix(1.2, 0, 0, 1.2, 0, 0);
                color: #359381;
            }
            .active{
                background: #359381;
                color: white;
            }
            .div1,.div2,.sub,.button1{
                display:none;
            }
        </style>
</head>
<body>
        <!-- Header -->
        <div class="container">
            <div class="nav">
                <div class="logo" style="width: 300px;margin-top:-30px;font-size:30px;color:#359381;font-weight:bold;"><img src="weblogof.jpeg" height="70" width="70"></div>
                <div class="bars">
                    <a href="#" class="active" style="font-size:16px;transition:0.5s;color:white;height:30px;padding-top:5px;">Home</a>
                    <a href="Service.html" class="active" style="font-size:20px;transition:0.5s;color:white;height:30px;padding-top:5px;">Service</a>
                    <a href="contact.html" class="active" style="font-size:17px;transition:0.5s;color:white;height:30px;padding-top:5px;">Contact Us</a>
                    <a href="login.php" class="active" style="font-size:20px;transition:0.5s;color:white;height:30px;padding-top:5px;">Login</a>
                    <!-- <a href="final_buypage.php">Sell</a> -->
                </div>
                <div class="cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p id="count">0</p>

                </div>
                <div class="cart1">
                    <img src="creditpoint.png" height="50" width="50" style="margin-top:-5px;">
                    <p id="count" style="margin-top:-40px;margin-left:50px;height: 30px;width: 30px;display: flex;align-items: center;justify-content: center;border-radius: 22px;background-color: goldenrod;color: black;"><?php echo $result_1['cp1'];?></p>
                    
                </div>
            </div>
            <div class="mainbuycontent">
                <div class="container1">
                    <div id="root"></div>
                    <div class="sidebar">
                        <div class="head"><p>My Cart</p></div>
                        <div id="cartItem">Your Cart is Empty</div>
                            <div class="foot">
                                <h3>Total</h3>
                                <h2 id="total">$ 0.00</h2>
                            </div>
                        <div class="foot2">
                            <div id="inputContainer">
                                <!-- Inputs will be dynamically added here -->
                              </div>
                              <div id="inputContainer1">
                                <!-- Inputs will be dynamically added here -->
                              </div>
                            <form method="post" id="myForm" action="time.php">
                                
                                <input type="hidden" style="display: none;" id="cartlen" name="cartlen">
                                <input type="hidden" style="display: none;" id="cartlen1" name="cartlen1">
                                <input type="hidden" style="display: none;" id="cartlen2" name="cartlen2">
                                <input type="hidden" style="display: none;" id="cartlen3" name="cartlen3">
                                <input type="hidden" style="display: none;" id="cartlen4" name="cartlen4">
                                <input type="hidden" style="display: none;" id="cartlen5" name="cartlen5">
                                <input type="button" value="ADD TO CART" id="od1" onclick="final_order()" style="width: 100%;margin-right:10px;margin-bottom:7px;border: none;border-radius: 5px;background-color: goldenrod;padding: 7px 25px;cursor: pointer;color: white;">
                                <script>
                                    function final_order(){
                                        var no_of_options=cart.length;
                                        document.getElementById("cartlen").value=no_of_options;
                                        // alert(no_of_options);
                                        let ch1=1;
                                        let j=1;
                                        // for(i=0;i<no_of_options;i++){
                                            // document.write("<input type='hidden' id=name='cart_element_fin"+i+"' style='display:none;' name='cart_element_fin"+i+"'>");
                                            // document.getElementById("myForm").submit();
                                            for(j=1;j<=no_of_options;j++){


                                                var temp3 = document.getElementById("cart_element"+(j-1)).value;
                                                document.getElementById("cartlen"+j).value=temp3;
                                                // alert("cartlen"+j);
                                                // alert(document.getElementById("cartlen"+j).value);
                                                // alert("cart_element"+(j-1));
                                                // alert(document.getElementById("cart_element"+(j-1)).value);
                                            }
                                    //    }
                                    }
                                    function setlist(b,c){
                                        
                                        alert(b);
                                        alert(c);
                                    }
                                </script>
                                
                                <input type="submit" name="placeorder" id="od2" value="ORDER" style="width: 100%;margin-right:30px;margin-bottom:7px;border: none;border-radius: 5px;background-color: goldenrod;padding: 7px 25px;cursor: pointer;color: white;">
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            $selectquery = "select * from sell_obj";
            $query = mysqli_query($conn,$selectquery);
            $total11= mysqli_num_rows($query);
            $i;
            ?>
    <!-- <script></script> -->
    <script>
        const product = [


            <?php
                if($total11!=0){
                    for($i=0;$i<$total11;$i++){
                    while($result=mysqli_fetch_assoc($query)){
                        ?>{
                        id: <?php echo $result['id'];?>,
                        image:'<?php echo $result['images'];?>',
                        title:'<?php echo $result['username'];?>',
                        price:<?php echo $result['price'];?>,
                        },
                        <?php
                    }
                }
            }
        ?>   
               
                // {
                //     id: 1,
                //     image: 'diy3.jpeg',
                //     title:'diy3',
                //     price: 10,
                // },
                // {
                //     id: 2,
                //     image: 'diy4.jpeg',
                //     title:'diy4',
                //     price: 5,
                // },
                // {
                //     id: 3,
                //     image: 'diy5.jpeg',
                //     title:'diy5',
                //     price: 10,
                // },
                // {
                //     id: 4,
                //     image: 'diy7.jpeg',
                //     title:'diy7',
                //     price: 15,
                // },
                // {
                //     id: 5,
                //     image: 'diy8.jpeg',
                //     title:'diy8',
                //     price: 5,
                // },
                // {
                //     id: 6,
                //     image: 'diy9.jpeg',
                //     title:'diy9',
                //     price: 10,
                // },
                // {
                //     id: 7,
                //     image: 'diy10.jpeg',
                //     title:'diy10',
                //     price: 10,
                // },
                // {
                //     id: 8,
                //     image: 'diy11.jpeg',
                //     title:'diy11',
                //     price: 15,
                // },
                // {
                //     id: 9,
                //     image: 'diy12.jpeg',
                //     title:'diy12',
                //     price: 8,
                // },
                // {
                //     id: 10,
                //     image: 'diy13.jpeg',
                //     title:'diy13',
                //     price: 5,
                // },
                // {
                //     id: 11,
                //     image: 'diy14.jpeg',
                //     title:'diy14',
                //     price: 15,
                // },
                // {
                //     id: 12,
                //     image: 'diy15.jpeg',
                //     title:'diy15',
                //     price: 5,
                // },
                // {
                //     id: 13,
                //     image: 'diy16.jpeg',
                //     title:'diy16',
                //     price: 5,
                // },
                // {
                //     id: 14,
                //     image: 'diy17.jpeg',
                //     title:'diy17',
                //     price: 10,
                // },
                // {
                //     id: 15,
                //     image: 'diy18.jpeg',
                //     title:'diy18',
                //     price: 10,
                // },
                // {
                //     id: 16,
                //     image: 'diy19.jpeg',
                //     title:'diy19',
                //     price: 15,
                // },
                // {
                //     id: 17,
                //     image: 'diy20.jpeg',
                //     title:'diy20',
                //     price: 5,
                // },
                // {
                //     id: 18,
                //     image: 'diy21.jpeg',
                //     title:'diy21',
                //     price: 10,
                // },
                // {
                //     id: 19,
                //     image: 'diy22.jpeg',
                //     title:'diy22',
                //     price: 10,
                // },
                

            ];
           
            const categories = [...new Set(product.map((item)=>
                {return item}))]
                let i=0;
            document.getElementById('root').innerHTML = categories.map((item)=>
            {
                var {image, title, price} = item;
                return(
                    `<div class='box'>
                        <div class='img-box'>
                            <img class='images' src=${image} height='50' width='90'></img>
                        </div>
                        <div class='bottom'>
                        <p>${title}</p>
                        <h2>$ ${price}.00</h2>`+
                        "<button onclick='addtocart("+(i++)+")'>Add to Cart</button>"+
                        `</div></div>`
                    )
            }).join('');

            var cart = [];
            let ch1 = 0;
            function addtocart(a){
                cart.push({...categories[a]});
                displaycart();
                
                    const inputContainer = document.getElementById('inputContainer');
                    const input = document.createElement('input');
                    input.type = 'text';
                    input.placeholder = 'Enter value ' + (ch1 + 1);
                    input.name = 'cart_element' + ch1;
                    input.id = 'cart_element' + ch1;
                    input.style='display:none';
                    input.value=cart[cart.length-1].title;
                    inputContainer.appendChild(input);
                    inputContainer.appendChild(document.createElement('br'));
                    // alert("cart_element"+ch1);
                    // alert(document.getElementById("cart_element"+ch1).value);
                    ch1++;
                    
            }

            function delElement(a){
                cart.splice(a, 1);
                displaycart();
            }

            function finalcartlen(){
                document.getElementById("cartlen").value=cart.length;
                    let i=0;
                    final_order();
            }

            function updatelist(){
                for(i=0;i<cart.length;i++){
                    const temp = document.getElementById("cart_element"+i).value;
                    document.getElementById("cart_element_fin"+i).value=temp;
                }
            }

            function displaycart(a){
                let j = 0,total=0;
                document.getElementById("count").innerHTML=cart.length;
                if(cart.length==0){
                    document.getElementById('cartItem').innerHTML = "Your Cart is Empty";
                    document.getElementById("total").innerHTML = "$ "+0+".00";
                }
                else{
                    document.getElementById('cartItem').innerHTML = cart.map((items)=>
                    {
                        var {image, title, price} = items;
                        total=total+price;
                        document.getElementById("total").innerHTML = "$ "+total+".00";
                        if(total><?php echo $result_1['cp1'];?>){
                            document.getElementById("od1").style.display = "none";
                            document.getElementById("od2").style.display = "none";
                            alert("You Don't Have Sufficient <b>Credit Points</b> ... :(");
                        }
                        else{
                            document.getElementById("od1").style.display = "block";
                            document.getElementById("od2").style.display = "block";
                        }
                        
                        return(
                            `<div class='cart-item'>
                                <div class='row-img'>
                                    <img class='rowimg' src=${image}>
                                </div>
                                <p style='font-size:12px;'>${title}</p>
                                <h2 style='font-size:15px;'>$ ${price}.00</h2>`+
                                "<i class='fa-solid fa-trash' onclick='delElement("+(j++)+")'></i></div>"
                        );
                    })
                }
            }


    </script>

</body>
</html>
<?php
}
?>


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
    .submit{position:absolute;top:68%;left:42%;height:45px;width:180px;border:none;border-radius:100px;background-color:white;font-size:30px;color:black;text-align:center;font-weight: bold;font-family: 'Times New Roman', Times, serif;}
    .submit1{position:absolute;top:76%;left:42%;height:45px;width:180px;border:none;border-radius:100px;background-color:white;font-size:30px;color:black;text-align:center;font-weight: bold;font-family: 'Times New Roman', Times, serif;}
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
                <input type="submit" class="submit" value="USER" name="update_cp">
                <input type="submit" class="submit1" value="COMP" name="update_cp1">
            </div>
            
        </form>
</body>
</html>

<?php
                }
                else   {
                    //  echo "No record found.Sorry.  :(";
                    if(($Enusername==$result_3['EIN'])&&($Enpass==$result_3['password'])){
                        // echo "working";
                        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<style type="text/css">
    .div7{position:absolute;top:24%;left:23%;height:60%;width:54%;background:transparent;border: 2px solid rgba(255,255,255,0.2);backdrop-filter: blur(20px);box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:30px;}
    .div7img1{position:absolute;top:-34%;left:30%;height:300px;width:300px;border-radius:100%;background-color:purple;background-image: url(avatar.svg);background-size:cover;}
    .div8{position:absolute;top:37%;left:27%;height:30%;width:54%;text-align:center;}
    .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:80%;background:transparent;border:none;text-align:center;font-family: 'Times New Roman', Times, serif;}
    .div8i1{top:0%;font-size:43px;font-weight:bold;}
    .div8i2{top:23%;font-size:25px;}
    .div8i3{top:46%;font-size:25px;}
    .div8i4{top:69%;font-size:20px;border-radius:20px;}
    /* .sub_1mit{position:absolute;top:68%;left:40%;height:85px;width:250px;border:none;border-radius:100px;background-color:white;font-size:50px;color:black;text-align:center;font-weight: bold;font-family: 'Times New Roman', Times, serif;} */
    /* .cp{position: absolute;top:54%;left:25%;height: 160px;width:160px;background:transparent;} */
    #cp1{position:absolute;top:59%;left:41%;height:100px;width:280px;border:none;border-radius:100px;background-color:white;font-size:50px;color:black;text-align:center;}
    #cp{position: absolute;top:54%;left:36%;height: 180px;width:180px;background:transparent;}

    @media screen and (max-width: 200px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:10%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:20px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:10px;}
        .div8 .div8i3{top:28%;font-size:10px;}
        .div8 .div8i4{top:42%;font-size:10px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:32%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:19%;height: 60px;width:60px;background:transparent;}
    }


    @media only screen  and (min-width:200px)  and (max-width:300px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:20px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:10px;}
        .div8 .div8i3{top:28%;font-size:10px;}
        .div8 .div8i4{top:42%;font-size:10px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:36%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:25%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:300px)  and (max-width:400px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:25px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:15px;}
        .div8 .div8i3{top:28%;font-size:15px;}
        .div8 .div8i4{top:42%;font-size:15px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:40%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:32%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:400px)  and (max-width:500px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:30px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:20px;}
        .div8 .div8i3{top:28%;font-size:20px;}
        .div8 .div8i4{top:42%;font-size:20px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:42%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:500px)  and (max-width:600px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:30px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:20px;}
        .div8 .div8i3{top:28%;font-size:20px;}
        .div8 .div8i4{top:42%;font-size:20px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:44.5%;left:42%;height:35px;width:80px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 60px;width:60px;background:transparent;}
    }

    @media only screen  and (min-width:600px)  and (max-width:700px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:30px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:20px;}
        .div8 .div8i3{top:28%;font-size:20px;}
        .div8 .div8i4{top:42%;font-size:20px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:45%;left:42%;height:40px;width:90px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 75px;width:75px;background:transparent;}
    }


    @media only screen  and (min-width:700px)  and (max-width:800px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:35px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:25px;}
        .div8 .div8i3{top:28%;font-size:25px;}
        .div8 .div8i4{top:42%;font-size:25px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:45%;left:42%;height:45px;width:110px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:37%;height: 80px;width:80px;background:transparent;}
    }

    @media only screen  and (min-width:800px)  and (max-width:900px){
        .div7{position:absolute;top:24%;left:10%;height:34%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:35px;font-weight:bold;}
        .div8 .div8i2{top:14%;font-size:25px;}
        .div8 .div8i3{top:28%;font-size:25px;}
        .div8 .div8i4{top:42%;font-size:25px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:45%;left:42%;height:45px;width:110px;font-size:  20px;}
    #cp{position: absolute;top:43%;left:38%;height: 80px;width:80px;background:transparent;}
    }

    @media only screen  and (min-width:900px)  and (max-width:1000px){
        .div7{position:absolute;top:24%;left:10%;height:40%;width:80%;}
        .div7 .div7img1{position:absolute;top:-17%;left:23%;height:150px;width:150px;}
        .div8{position:absolute;top:29%;left:21.5%;height:30%;width:54%;}
        .div8 .div8i1,.div8i2,.div8i3,.div8i4{color:black;position:absolute;left:0%;height:20%;width:100%;background:transparent;border:none;text-align:center;}
        .div8 .div8i1{top:0%;font-size:40px;font-weight:bold;}
        .div8 .div8i2{top:17%;font-size:30px;}
        .div8 .div8i3{top:31%;font-size:30px;}
        .div8 .div8i4{top:45%;font-size:30px;border-radius:20px;}
        .sub_1 .sub_1mit{position:absolute;top:50%;left:28%;height:35px;width:86px;border:none;border-radius:100px;background-color:white;font-size:18px;color:black;text-align:center;}
        #cp1{position:absolute;top:47%;left:43%;height:45px;width:110px;font-size:  20px;}
    #cp{position: absolute;top:45%;left:39%;height: 80px;width:80px;background:transparent;}
    }

    </style>
</head>

<body  bgColor="#c9c9c9">
    <!-- <h1>hi</h1> -->
        <form>
            <div class="div7">
                <!-- <img class="div7img1" src="img11.jpg" alt="profile_img"> -->
                
                <!-- <input type="text" name="user_cp" class="cp1" disabled value="3">
                <img src="cpimg.png" class="cp">  -->
            </div>
            <div class="div8">
                <input class="div8i1" type="text" name="user_name_dsb" disabled value="<?php echo $result_3['EIN'];?>"><br>
                <input class="div8i2" type="text" name="user_phno_dsb" disabled value="<?php echo $result_3['comp_name'];?>"><br>
                <input class="div8i3" type="email" name="user_email_dsb" disabled value="<?php echo $result_3['email'];?>"><br>
                <!-- <input class="div8i4" type="text" name="client_username" value="Client's username"><br> -->
            </div>
            <div class="sub_1">
                <input type="text" name="user_cp" id="cp1" disabled value="<?php echo $result_4['no_of_transac'];?>">
                <!-- <input type="text" value=""> -->
                <!-- <img src="creditpoint.png" id="cp"> -->
            </div>
            
        </form>
</body>
</html>



                        <?php
                    }
                    else{
                        // echo "working";
                    }
                }
            
                }
            }
        } 
    }
	// }
    if(isset($_POST['update_cp'])){
        $staff_entered_username = $_POST['client_username'];
        $up_user_cp = "update user_cp set cp1=cp1+50 where username='$staff_entered_username'";
        $result_f  = mysqli_query($conn,$up_user_cp);
    }
    if(isset($_POST['update_cp1'])){
        $staff_entered_ein = $_POST['client_username'];
        $up_user_cp = "update transac_history set no_of_transac=no_of_transac+1 where EIN   ='$staff_entered_ein'";
        $result_f  = mysqli_query($conn,$up_user_cp);
    }
?>