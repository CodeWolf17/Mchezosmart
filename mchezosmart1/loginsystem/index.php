<?php session_start();
require_once('dbconnection.php');

//Code for Registration
if(isset($_POST['signup']))
{
	$sponsor=$_POST['sponsor'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$activate=$_POST['activate'];
	$bdate=$_POST['bdate'];
	$country=$_POST['country'];
	$region=$_POST['region'];
	$contactno=$_POST['contactno'];

$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>5)
{
	echo "<script>alert('Email or Username id already exist with another account. Please try with other username email id');</script>";
} else{
	$msg=mysqli_query($con,"insert into users(sponsor,fname,lname,email,activate,bdate,country,region,contactno) values('$sponsor','$fname','$lname','$email','$activate','$bdate','$country','$region','$contactno')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
}

// Code for login
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$fname=$_POST['fname'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE fname='$fname' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="../myindex.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['lname']=$num['lastname'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];
$fname=$_POST['fname'];
$row1=mysqli_query($con,"select email,password from users where email='$femail' and fname='$fname'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "MchezoSmart, Information about your password";
$password=$row2['password'];
$message = "Welcome MchezoSmart,Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";
}
}

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Mchezo Smart.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../styles/stylete1.css">
		<link rel="stylesheet" href="../styles/styleo.css">
		<link rel="stylesheet" href="../styles/style1.css">
		<link rel="stylesheet" href="../styles/style2-Montserrat.css">
		<link rel="stylesheet" href="../styles/style3-cloudflare.css">
    <link rel="stylesheet" href="../styles/home_style2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body class="contabee">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="../index.html" class="logo"><strong>MchezoSmart. logo</strong></a>
					<nav id="nav">
						<a href="../index.html" class="w3 w3-hover-blue">Home</a>
						<a href="../aboutas.html" class="w3 w3-hover-blue">About Us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
					    <div align="center">
                <div class="flex-container-background">
                    <div class="flex-container">
                        <div class="flex-item-0">
                            <h2 id="form_header"><b> <font color="white">Karibu Mchezo</font><font color="orange">Smart.</font></b></h2>
                        </div>
                    </div>

                    <div class="w3-container">
    <div >
      <button class="w3-bar-item w3-button tablink w3-blue" onclick="openCity(event,'London')">Login</button>
      <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Register</button>
      <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Forgot Password</button>
    </div>
<!login>
    <div id="London" class="w3-container w3-border city">

          <div class="flex-item-1">

                          <div class="flex-item-login">
        		</div>
                <form name="login" action="" method="post">
                  <input type="text" class="text" name="fname" value="" placeholder="Enter your Username"  ><a href="#" class=" icon user"></a>

                  <input type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>

                  <div class="p-container">

                    <div class="submit two">
                    <input class="buttons2" type="submit" name="login" value="LOG IN" >
                    </div>
                    <div class="clear"> </div>
                  </div>

                </form>
            </div>
          </div>
      </div>
    </div>


<!registration>
    <div id="Paris" class="w3-container w3-border city" style="display:none">
          <div class="flex-item-1">
                  <div class="flex-item-login">

          <div class="register">
      <form name="registration" method="post" action="" enctype="multipart/form-data">
				<p>Sponsor Name</p>
        <input type="text" class="text" value="" name="sponsor"  required >
        <p>Username Name </p>
        <input type="text" class="text" value=""  name="fname" required >
        <p>Full Name </p>
        <input type="text" class="text" value="" name="lname"  required >
        <p>Email Address </p>
        <input type="text" class="text" value="" name="email" required >
        <p>Password </p>
        <input type="password" value="" name="activate" required>
				<p>Birthday </p>
				<input type="text" class="text" value="" name="bdate" required >
				<p>Country </p>
				<input type="text" class="text" value="" name="country" required >
				<p>City/Region </p>
				<input type="text" class="text" value="" name="region" required >
        <p>Contact No. </p>
        <input type="text" value="" name="contactno"  required>
        <div class="sign-up">
          <input class="buttons2" type="reset" value="Reset">
          <input class="buttons2" type="submit" name="signup"  value="Sign Up" >
          <div class="clear"> </div>
        </div>
      </form>
    </div>
    </div>
    </div>
    </div>
<!pass4got>
    <div id="Tokyo" class="w3-container w3-border city" style="display:none">
          <div class="flex-item-1">
                  <div class="flex-item-login">

        </div>
        <form name="login" action="" method="post">
          <input type="text" class="text" name="fname" value="" placeholder="Enter your Username" required ><a href="#" class=" icon user"></a>

          <input type="text" class="text" name="femail" value="" placeholder="Enter your registered email" required ><a href="#" class=" icon email"></a>

              <div class="submit three">
                <input class="buttons2" type="submit" name="send" onClick="myFunction()" value="Send Email" >
              </div>
            </form>
            </div>
            </div>
          </div>
      </div>

  </div>

    </div>
  </div>

  <script>
  function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " w3-blue";
  }
  </script>

					  <!-- End Contact Section -->



					</div>
				</script>
				<script src="../myjs/jquery.min.js"></script>
				<script src="../myjs/skel.min.js"></script>
				<script src="../myjs/util.js"></script>
				<script src="../myjs/main.js"></script>
					<!-- Footer -->

					<footer class="w3-container w3-theme-d3 w3-padding-16">
					  <div align="center"> <h5><font color="white">Mchezo</font> <font color="orange">Wangu</font></h5> </div>
					</footer>

					<footer class="w3-container w3-theme-d5">
					<div align="center">  <p>Powered by MchezoSmart. </p> </div>
					</footer>

					<script>
					// Accordion
					function myFunction(id) {
					  var x = document.getElementById(id);
					  if (x.className.indexOf("w3-show") == -1) {
					    x.className += " w3-show";
					    x.previousElementSibling.className += " w3-theme-d1";
					  } else {
					    x.className = x.className.replace("w3-show", "");
					    x.previousElementSibling.className =
					    x.previousElementSibling.className.replace(" w3-theme-d1", "");
					  }
					}

					// Used to toggle the menu on smaller screens when clicking on the menu button
					function openNav() {
					  var x = document.getElementById("navDemo");
					  if (x.className.indexOf("w3-show") == -1) {
					    x.className += " w3-show";
					  } else {
					    x.className = x.className.replace(" w3-show", "");
					  }
					}


	</body>
</html>
