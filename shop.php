<?php 
session_start();
include 'wd_config.php';
if(!isset($_SESSION["login"])||$_SESSION["login"]==0)
{
	header("Location:login.php");
}

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND uname = '".$_SESSION["uname"]."'") or die('query failed');
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart!';
    }else{
       mysqli_query($conn, "INSERT INTO `cart`(uname, name, price, image, quantity) VALUES('".$_SESSION["uname"]."', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 
 };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xackton Internship - 3</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <section id="header">
        <a href="#"><img src="img/xacktonlogo.png" class="logo" alt=""></a>
        <div>
           <ul id="navbar">
           <li><?php
            include 'wd_config.php';
        $sql="select name from users where uname='".$_SESSION["uname"]."'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        { ?>
            <a>Welcome,<?php echo " ".$row['name']; ?></a>  
            <?php
        }
        ?></li>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
           </ul> 
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header">
        <h2>#staysafe</h2>
        <p>Save more with coupons & up to 70% off! </p>

    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Awesome Collection For Little Ones</p>
        <div class="pro-container">
            <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
            <div class="pro">
            <form method="post" class="box" action="">
                <img src="products/<?php echo $fetch_product['image']; ?>" alt="">
                <div class="des">
                    <div class="name"><?php echo $fetch_product['name']; ?></div>
                    <div class="price">Rs.<?php echo $fetch_product['price']; ?></div>
                    <input type="number" min="0" name="product_quantity" value="0">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                </div>
            </form>
         </div>
            <?php
      };
   };
   ?>
</section>

    <!-- <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f1.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f2.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>2 - Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 949.00</h4>
                </div>
                <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="2 - Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="949">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f3.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f4.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f5.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f6.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f7.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/f8.jpg" alt="">
                <div class="des">
                    <span>ONESIE</span>
                    <h5>Lemon-chillo Long Sleeve Unisex Onesie</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 649.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n1.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Boys Navy Polka Dot Print Shirt And Pant Set With Bow</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 749.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n2.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Girls Black Checkered Blouse and Skirt Set</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 957.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n3.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Girls White Solid Party Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1,460.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n4.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Girls Pink Solid Sleeveless Party Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 1,484.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n5.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Girls Green Text Print Onesies with Headband</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 919.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n6.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Girls Pink Solid Sleeveless Playsuit with Belt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 949.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n7.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Unisex White Text Print Onesies - Pack Of 2</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 464.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
            <div class="pro">
                <form action="manage_cart.php" method="POST">
                <img src="products/n8.jpg" alt="">
                <div class="des">
                    <span>Hopscotch</span>
                    <h5>Girls Green Sleeveless Floral Print Casual Dress with Hat</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs. 863.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                <input type="hidden" name="Item_Name" value="Lemon-chillo Long Sleeve Unisex Onesie">
                <input type="hidden" name="Price" value="649">
            </form>
            </div>
        </div>
    </section> -->

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/xacktonlogo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Mumbai = 400 037</p>
            <p><strong>Email Id:</strong> info@xackton.com</p>
            <p><strong>Phone:</strong> +91 7977837609</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="https://www.facebook.com/xackton"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/XacktonOfficial"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCh1ORE8jXtSo68Oejxk2inQ"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.instagram.com/xackton/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="logout.php">Logout</a>
            <a href="cart.php">View Cart</a>
            <!-- <a href="#">My Wishlist</a> -->
            <!-- <a href="#">Track My Order</a> -->
            <a href="contact.php">Help</a>
        </div>

        <div class="copyright">
            <p>@2023 XACKTON. Design Developed By Siddhi Solanki</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
