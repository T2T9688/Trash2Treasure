<?php
include('verifymail_signup.php');
if(isset($_POST['getotp1'])){
                        $query = "insert into user_details_final values('$user_name','$user_phoneno','$user_email','$user_pass')";
                        $query_1 = "insert into user_cp(username,cp1) values('$user_name','$signupcredits')";
                        //$mysqli = new mysqli("localhost","root","","Demo_1");
                        $result = mysqli_query($conn,$query);
                        $result_1 = mysqli_query($conn,$query_1);
                            if($result){
                            echo "<script>alert('signup done');</script>";
                            }
                            else{
                                echo "<script>alert('signup failed');</script>";
                            }
                        // else{
                        //     echo "Please enter the both password SAME.";
                        // }
                    }
?>