<?php include 'sellpage_php.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Linking CSS file -->
 <link rel="stylesheet" href="sellpage_css.css">
 <title>Document</title>
</head>

<body>
 <div class="container">


  <form method="post" class="form" enctype="multipart/form-data">
   <div class="heading">
    <h2>Contact Form</h2>
   </div>

   <div class="formGroup">
    <input type="text" name="name" id="name" placeholder="Name" autocomplete="off" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>" required="">
   </div>

   <div class="formGroup">
    <input type="email" name="email" id="email" placeholder="Email ID" autocomplete="off" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" required="">
   </div>

   <div class="formGroup">
    <input type="text" name="subject" placeholder="Subject" autocomplete="off" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>" required="">
   </div>

   <div class="formGroup">
    <input type="text" name="message" placeholder="Your Message" autocomplete="off" <?php echo !empty($postData['message']) ? $postData['message'] : ''; ?> required="">
   </div>

   <div class="formGroup">
    <input type="file" name="attachment" class="form-control" multiple>
   </div>

   <!-- Display submission status -->
   <div class="status">
    <?php if (!empty($statusMsg)) { ?>
     <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>">
      <?php echo $statusMsg; ?></p>
    <?php } ?>
   </div>

   <div class="formGroup">
    <button class="btn2" name="submit" value="SUBMIT" type="submit">SUBMIT </button>
   </div>

    </form>
 </div>

</body>

</html>