<?php include("connection.php"); ?>
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
            <form method="POST">
                <!-- <img src="avatar.svg"> -->
                <h4 class="title" style="fontsize:2rem;font-weight:bold; text-decoration:underline;">Business signup</h4>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                     
                        <input type="text" class="input" name="company_ein_signup" placeholder="EIN">
                    </div>

                </div>
                <div class="input-div one">

                    <div class="i">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="div">
                        
                        <input type="tex" class="input" name="company_name_signup" placeholder="Company Name">
                    </div>


                </div>
                <div class="input-div one">

                    
                    <div class="i">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="div">
                        
                        <input type="email" class="input" name="company_email_signup" placeholder="Email">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="number" class="input" name="company_phonenum_signup" placeholder="Contact number">
                    </div>

                    <!-- <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input">
                    </div> -->
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="text" class="input" name="company_add_signup" placeholder="Address">
                    </div>

                    <!-- <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input">
                    </div> -->
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="text" class="input" name="company_password_signup" placeholder="Password">
                    </div>

                    <!-- <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password" class="input">
                    </div> -->
                </div>
                <div class="input-div pass">
                   
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="text" class="input" name="comp_conf_password_signup" placeholder="Confirm Password">
                    </div>
                </div>
               
                <input type="submit" class="btn" value="Sign Up" name="user_signup">
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<?php
if($_POST['user_signup']){
            $comp_ein = $_POST['company_ein_signup'];
            $comp_name = $_POST['company_name_signup'];
            $comp_phoneno = $_POST['company_phonenum_signup'];
            $comp_email = $_POST['company_email_signup'];
            $comp_add = $_POST['company_add_signup'];
            $comp_pass = $_POST['company_password_signup'];
            $comp_cnfpass = $_POST['comp_conf_password_signup'];
            $predef_transac = 0;
            if($comp_pass==$comp_cnfpass){
            $query = "insert into recycle_company values('$comp_ein','$comp_name','$comp_email','$comp_phoneno','$comp_add','$comp_pass')";
            $query_1 = "insert into transac_history(EIN,comp_name,no_of_transac) values('$comp_ein','$comp_name','$predef_transac')";
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
                echo "Please enter the both password SAME.";
            }
        }
?> 