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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .appointment-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            height: 100px; /* Increased height for multiple selection */
        }

        .form-group input[type="button"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .selected-items {
            margin-top: 10px;
        }
    </style>
    <script>
         function loopSelected() {
			var txtSelectedValuesObj = document.getElementById('txtSelectedValues');
			var selectedArray = new Array();
			var selObj = document.getElementById('appointmentType');
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

<body>
    <div class="appointment-form">
        <h2>Book Appointment</h2>
        <form id="appointmentForm" action="https://formsubmit.co/trash2treasure9688@gmail.com" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="appointmentType">Appointment Type:</label>
                <select id="appointmentType" name="appointmentType" multiple required>
                        <?php
							$finalcartitems_len = count($finalcartitems);
							for($i=0;$i<$finalcartitems_len;$i++){
								//$finalcartitems[$j]=$_POST['cart_element'.$j++];
								echo "<option>".$finalcartitems[$i]."</option>";
							}
						?>
                    <option>Plastic 0kg</option>
                    <option>Plastic 1kg - 5kg</option>
                    <option>Plastic 5kg - 10kg</option>
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
                    <option>Pipes plastic or metal More than 20kg</option>
                </select>
                    <!-- Add more options here -->
                </select>
            </div>
            <div class="form-group">
               
                <input type="button" class="button" id="getlistbut" value="Getlist" onclick="loopSelected()">
                <input type="text" class="forminput" id="txtSelectedValues" style="margin-top: 7px;" placeholder="Getlist">
            </div>
            <div class="selected-items">
                <!-- <h3>Selected Items:</h3>
                <ul id="selectedItemsList"></ul> -->
                 <button type="submit">Book Appointment</button>
            </div>
        </form>
        
    </div>

    <script>
        // document.getElementById('appointmentForm').addEventListener('submit', function (event) {
        //     event.preventDefault();
        //     const selectedItems = Array.from(document.getElementById('appointmentType').selectedOptions).map(option => option.value);
        //     document.getElementById('selectedItemsList').innerHTML = '';
        //     selectedItems.forEach(item => {
        //         const li = document.createElement('li');
        //         li.textContent = item;
        //         document.getElementById('selectedItemsList').appendChild(li);
        //     });
        // });
       
    </script>
</body>

</html>
