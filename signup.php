<?php
$id="";
$p="";
$n="";
$c="";
$e="";
if(isset($_POST["uname"]))
{
$id=$_POST["uname"];
$p=$_POST["pwd"];
$n=$_POST["name"];
$c=$_POST["contact_no"];
$e=$_POST["email_id"];
include('wd_config.php');
$sql="insert into users(uname,pwd,name,contact_no,email_id) values('$id','$p','$n','$c','$e')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "<div class=fixed>Registration Successfull. You can login now.</div>";
	
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="home.jpg" type="image/jpg">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.ssignup.css" />
    <!-- <link rel="stylesheet" href="style.iindex.css" /> -->
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style> div.fixed
	{
		position: flex;
		bottom: 100px;
		right: 500px;
		color: #0fe00f;
	}
  div.fixedtwo
	{
		position: fixed;
		bottom: 100px;
		right: 500px;
		color: #14ad4f;
	}
	@media (max-width: 900px){
		div.fixed
	{
		position: fixed;
		bottom: 0;
		right: 50px;
		color: #0fe00f;
	}
}
.big-circle {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: linear-gradient(to bottom, #14ad4f, #030101);
  bottom: 40%;
  right: 40%;
  transform: translate(-40%, 38%);
}
	</style>
  </head>
  <body>
  <section>
            <div class="circle"></div>
            <header>
                <a href="#"><img src="xacktonlogo.png" ></a>
                <div class="name">
                    <center><h3>Web Development Internship</h3></center>
                </div>
                <!-- <ul>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul> -->
            </header>
    <div class="container">
      <span class="big-circle"></span>
      <img src="shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
         <center>
          <div class="info">
            <div class="information">
              <p><a href="https://xackton.com/">XACKTON - Because SECURITY IS AN INVESTMENT, NOT AN EXPENSE!</a></p>
            </div>
          </div>

        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="signup.php"  method= POST>
            <h3 class="title">Sign Up</h3>
            <div class="input-container">
            <input type=text name=uname value="<?=htmlentities($id)?>" required class="input">
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
            <input type=password name=pwd  required class="input">
              <label for="">Password</label>
              <span>Password</span>
            </div>
            <div class="input-container">
            <input type=text name=name value="<?=htmlentities($n)?>" required class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
            <input type=text name=contact_no value="<?=htmlentities($c)?>" required class="input" />
              <label for="">Contact Number</label>
              <span>Contact Number</span>
            </div>
            <div class="input-container">
            <input type=text name=email_id value="<?=htmlentities($e)?>" required class="input" />
              <label for="">Email Id</label>
              <span>Email Id</span>
            </div>
            <input type="submit" class="btn">
		<a href="login.php" class="btn">Login</a>
</section>
<div class="footer">
                <center>Developed By : Siddhi Solanki</center>
            </div>
</form>
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>