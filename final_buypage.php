<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 1px solid #ccc;
      outline: none;
      transition:0.3s; /* Smooth transition for all properties */
    }
    .form-group input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition:0.5s;
    }
    .form-group input[type="submit"]:hover {
      background-color: #0056b3;
      border-radius: 5px;
    }
    .error-message {
      color: red;
      font-size: 0.8em;
    }

    /* Decrease the width of the bottom line */
    .form-group input {
      border-bottom-width: 0.5px;
    }

    /* Hover effect */
  </style>
</head>
<body>
  <div class="form-container">
    <form id="myForm" action="sell_upload.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="Phonenumber" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="useremail" required>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>
      </div>
      <div class="form-group">
        <label for="file">File:</label>
        <input type="file" id="file" name="photo">
      </div>
      <div class="form-group">
        <input type="submit" name="submitform" value="Submit">
      </div>
    </form>
  </div>
</body>
</html>
