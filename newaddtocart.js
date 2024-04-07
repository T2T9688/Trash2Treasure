const product = [
    {
        id: 0,
        image: 'diy2.jpeg',
        title:'diy2',
        price: 10,
    },
    {
        id: 1,
        image: 'diy3.jpeg',
        title:'diy3',
        price: 10,
    },
    {
        id: 2,
        image: 'diy4.jpeg',
        title:'diy4',
        price: 5,
    },
    {
        id: 3,
        image: 'diy5.jpeg',
        title:'diy5',
        price: 10,
    },
    {
        id: 4,
        image: 'diy7.jpeg',
        title:'diy7',
        price: 15,
    },
    {
        id: 5,
        image: 'diy8.jpeg',
        title:'diy8',
        price: 5,
    },
    {
        id: 6,
        image: 'diy9.jpeg',
        title:'diy9',
        price: 10,
    },
    {
        id: 7,
        image: 'diy10.jpeg',
        title:'diy10',
        price: 10,
    },
    {
        id: 8,
        image: 'diy11.jpeg',
        title:'diy11',
        price: 15,
    },
    {
        id: 9,
        image: 'diy12.jpeg',
        title:'diy12',
        price: 8,
    },
    {
        id: 10,
        image: 'diy13.jpeg',
        title:'diy13',
        price: 5,
    },
    {
        id: 11,
        image: 'diy14.jpeg',
        title:'diy14',
        price: 15,
    },
    {
        id: 12,
        image: 'diy15.jpeg',
        title:'diy15',
        price: 5,
    },
    {
        id: 13,
        image: 'diy16.jpeg',
        title:'diy16',
        price: 5,
    },
    {
        id: 14,
        image: 'diy17.jpeg',
        title:'diy17',
        price: 10,
    },
    {
        id: 15,
        image: 'diy18.jpeg',
        title:'diy18',
        price: 10,
    },
    {
        id: 16,
        image: 'diy19.jpeg',
        title:'diy19',
        price: 15,
    },
    {
        id: 17,
        image: 'diy20.jpeg',
        title:'diy20',
        price: 5,
    },
    {
        id: 18,
        image: 'diy21.jpeg',
        title:'diy21',
        price: 10,
    },
    {
        id: 19,
        image: 'diy22.jpeg',
        title:'diy22',
        price: 10,
    },
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
                <img class='images' src=${image}></img>
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
        alert("cart_element"+ch1);
        alert(document.getElementById("cart_element"+ch1).value);
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