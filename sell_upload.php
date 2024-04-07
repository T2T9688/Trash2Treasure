<?php
    include "connection.php";
    if(isset($_POST['submitform'])){
        $username = $_POST['username'];
        $phno = $_POST['Phonenumber'];
        $email = $_POST['useremail'];
        $address = $_POST['useraddress'];
        $price = $_POST['price'];
        // $photo = $_POST['photo'];
        //$file = $_FILES['photo'];
        $file = $_FILES['photo'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        if($fileerror==0){
            $destfile = 'upload/'.$filename;
            // echo $destfile;
            move_uploaded_file($filepath,$destfile);

            $insertquery = "insert into sell_obj(username,phonenum,email,address,images,price) values('$username','$phno','$email','$address','$destfile','$price')";
        
            $query = mysqli_query($conn,$insertquery);
            if($query){
                echo "<script>alert('Your Material Details are UPLOADED ... :)');</script>";
            }

        }
        // print_r($file);
    }
?>