<?php
session_start();
$_SESSION["login"]=0;
$u="";
$success=0;
if(isset($_POST["uname"]))
{
$u=$_POST["uname"];
$p=$_POST["pwd"];
include 'wd_config.php';
$sql="select * from users where uname='$u' and pwd = '$p'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1)
{
	$row=mysqli_fetch_assoc($result);
	if ($row["status"]=="I")
	echo "<div class=fixed> Account is Inactivated by the Admin </div>";
	else //status is "A"
	{
		$_SESSION["login"]=1;
		$_SESSION["uname"]=$u;
		header("Location:index.php");
		$success=1;
	}
}
else
{
	echo "<div class=fixed>	INVALID username and/or password </div>";
}
}
if($success==0)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.loginn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="home.jpg" type="image/jpg">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.iindex.css" /> -->
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <div class="container">
		<div class="img">
			<img src="xacktonlogo.png">
		</div>
		<div class="login-content">
			<form action="login.php" method=POST>
				<h2 class="title">Please login to your account</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type=text name=uname value="<?php echo $u;?>" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type=password name=pwd class="input">
            	   </div>
            	</div>
            	<a href="signup.php">Sign Up?</a>
            	<input type="submit" class="btn" value="Login"><br>&nbsp
				<div class="footer">
                <center>Developed By : Siddhi Solanki</center>
            </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main2.js"></script>
</body>
</html>
<?php
}
?>