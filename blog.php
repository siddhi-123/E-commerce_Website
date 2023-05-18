<?php 
session_start();
include 'wd_config.php';
if(!isset($_SESSION["login"])||$_SESSION["login"]==0)
{
	header("Location:login.php");
}
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
            <li><a href="shop.php">Shop</a></li>
            <li><a class="active" href="blog.php">Blog</a></li>
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

    <section id="page-header" class="blog-header">
        <h2>Read More</h2>
        <p>Read all about our products! </p>

    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Fashion Fridays: Nautical trend for the win!</h4>
                <p>We sailed the seas for this Fashion Friday Trend!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>07/02</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Go twinning with your little ones this Valentine’s Day</h4>
                <p>The #twinning craze has taken over the world and what started off as a fashion statement for actual twins is being flaunted by couples, siblings, parent-child duos. The new trend embraces synchronised colours, trendy prints, and matching outfits. If you’re planning to sport a twin avatar with your little one this Valentine’s day from the Valentine’s Day twin collection, you should head this-a-way!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>05/02</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Zodiac style files: Aquarius birthday outfits for your little boy!</h4>
                <p>Confident, assertive, and eccentric. This perfectly describes an Aquarius man. If your boy is born between January 21st and February 20th, he is an Aquarius boy. When it comes to fashion, Aquarians are quite daring and don’t mind breaking fashion rules. Here are birthday outfits for your Aquarian boy that are tailor-made for him!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>04/02</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>I discovered a whole range of fashionable onesies for babies!</h4>
                <p>Having a baby is most definitely a miraculous feeling, whether it’s your first, second or third time. Some days you rejoice the thought of holding your newborn after delivery and some days you get anxious over not being able to control certain aspects of pregnancy.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>29/01</h1>
        </div>
    </section>

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
