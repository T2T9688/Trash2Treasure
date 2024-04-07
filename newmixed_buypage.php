<?php include "connection.php";?>
<?php
    if(isset($_POST['creditstore'])){
        $temp1=$_POST['normaluser'];
    }
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
        </style>
</head>
<body>
        <!-- Header -->
        <div class="container">
            <div class="nav">
                <div class="logo" style="width: 300px;margin-top:-10px;font-size:30px;color:#359381;font-weight:bold;">Trash To Treasure</div>
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
                    <p id="count" style="margin-top:-40px;margin-left:50px;height: 30px;width: 30px;display: flex;align-items: center;justify-content: center;border-radius: 22px;background-color: goldenrod;color: black;"><?php echo $temp1;?></p>
                    
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
                                <input type="button" value="ADD TO CART" onclick="final_order()" style="width: 100%;margin-right:10px;margin-bottom:7px;border: none;border-radius: 5px;background-color: goldenrod;padding: 7px 25px;cursor: pointer;color: white;">
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
                                
                                <input type="submit" name="placeorder" value="ORDER" style="width: 100%;margin-right:30px;margin-bottom:7px;border: none;border-radius: 5px;background-color: goldenrod;padding: 7px 25px;cursor: pointer;color: white;">
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

