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
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
           </ul> 
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>Contact Us</h2>
        <p>Leave a message. We'd love to hear from you!</p>

    </section>

    <section id="contact-details" class="section-p1">
       <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Contact Us</h2>
        <h3>Office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>Mumbai - 400 037</p>
            </li>
            <li>
                <i class="fal fa-envelope"></i>
                <p>info@xackton.com</p>
            </li>
            <li>
                <i class="fal fa-phone-alt"></i>
                <p>Contact - +91 7977837609</p>
            </li>
        </div>
       </div> 
       <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30175.18198150283!2d72.87022885000002!3d19.0242269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf399d0797f7%3A0xea8535f3c97b3e3e!2sMumbai%2C%20Maharashtra%20400037!5e0!3m2!1sen!2sin!4v1683364310379!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
       </div>
    </section>

    <section id="form-details">
    <?php
    $name = "";
    $email = "";
    $subject = "";
    $message = "";

    if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    include('wd_config.php');
                        
        $save = "INSERT INTO contact(name,email,subject,message)VALUES('$name','$email','$subject','$message')";
        $query = mysqli_query($conn,$save);
        if ($query){
            echo "<h3>Data entered successfully</h3>";
        }
        else{
            echo "Error entering data";
        }
                            
}?>
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" name="name" value="<?php echo $name?>" required="" placeholder="Name">
            <input type="text" name="email" value="<?php echo $email?>" required="" placeholder="Email Id">
            <input type="text" name="subject" value="<?php echo $subject?>" required="" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" name="message" value="<?php echo $message?>" required="" placeholder="Your Meassage"></textarea>
            <button class="normal">SUBMIT</button>
        </form>
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
