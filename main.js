let carts = document.querySelectorAll('.add-cart');
let products = [
    {
        name: 'Boys Navy Polka Dot Print Shirt And Pant Set With Bow',
        tag: 'polkadot',
        price: 749,
        inCart: 0
    },
    {
        name: 'Girls Black Checkered Blouse and Skirt Set',
        tag: 'blackcheckered',
        price: 957,
        inCart: 0
    },
    {
        name: 'Girls White Solid Party Dress',
        tag: 'whitesolid',
        price: 1460,
        inCart: 0
    },
    {
        name: 'Girls Pink Solid Sleeveless Party Dress',
        tag: 'pinksolid',
        price: 1484,
        inCart: 0
    },
    {
        name: 'Girls Green Text Print Onesies with Headband',
        tag: 'greentextprint',
        price: 919,
        inCart: 0
    },
    {
        name: 'Girls Pink Solid Sleeveless Playsuit with Belt',
        tag: 'pinksolid',
        price: 949,
        inCart: 0
    },
    {
        name: 'Unisex White Text Print Onesies - Pack Of 2',
        tag: 'whitetextprint',
        price: 464,
        inCart: 0
    },
    {
        name: 'Girls Green Sleeveless Floral Print Casual Dress with Hat',
        tag: 'greensleeveless',
        price: 863,
        inCart: 0
    },
];

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {
        if(cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    // console.log("The product price is", product.price);
    let cartCost = localStorage.getItem('totalCost');
    // cartCost = parseInt(cartCost);
    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);

    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
    localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");
    let cartCost = localStorage.getItem('totalCost');

    console.log(cartItems);
    if (cartItems && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <a>Delete</a>
                <img src="products/${item.tag}.jpg">
                <span>${item.name}M</span>
            </div>
            <div class="price">${item.price}</div>
            <div class="quantity">
                <ion-icon class="decrease" name="arrow-dropleft-circle"><ion-icon>
                <span>${item.inCart}</span>
                <ion-icon class="increase" name="arrow-dropright-circle"></ion-icon>
            </div>
            <div class="total">
                Rs.${item.inCart * item.price}
            </div>
            `;
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">
                    Basket Total
                </h4>
                <h4 class="basketTotal">
                    Rs.${cartCost}
                </h4>`
    }
}
onLoadCartNumbers();