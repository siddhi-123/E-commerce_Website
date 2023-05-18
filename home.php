
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
<!-- <div id="preloader"></div> -->
    <section id="header">
        <a href="#"><img src="img/xacktonlogo.png" class="logo" alt=""></a>
        <div>
           <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="blog2.html">Blog</a></li>
            <li><a href="about2.html">About</a></li>
            <li><a href="contact2.php">Contact</a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
           </ul> 
        </div>
        
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <a href="shop.php"><button>Shop Now</button></a>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="features/f1.jpg" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="features/f2.jpg" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="features/f3.jpg" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="features/f4.jpg" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="features/f5.jpg" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="features/f6.jpg" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <?php
            include 'wd_config.php';
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
                    <!-- <input type="number" min="0" name="product_quantity" value="0"> -->
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <!-- <input type="submit" value="add to cart" name="add_to_cart" class="btn"> -->
                </div>
            </form>
         </div>
            <?php
      };
   };
   ?>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services </h4>
        <h2>Up to <span>70% Off</span> - All baby clothes and Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="offers">
        <div class="offer">
            <a href="offers2.html"><button class="offr">Click to view offers</button></a>
        </div>
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
            <a href="about2.html">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact2.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Login</a>
            <!-- <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a> -->
            <a href="#">Help</a>
        </div>

        <div class="copyright">
            <p>@2023 XACKTON. Design Developed By Siddhi Solanki</p>
        </div>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="main.js"></script>
    <script src="script.js"></script>
    <!-- <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script>
        $(window).on("load",function(){
            $(".loader.wrapper").fadOut("slow");
        });
    </script> -->
</body>
</html>