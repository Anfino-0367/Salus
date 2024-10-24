<?php
ob_start();
include './dbconnection.php';
session_start();
?>
<?php
                                             
                           
if(isset($_POST['sub']))
{
$t1=$_POST['t1'];
    $t2=$_POST['t2'];

$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'");
if(mysqli_num_rows($log)>0)
{
    
    $r=mysqli_fetch_row($log);
if($r[3]=="usr")
{
    $_SESSION['usr']=$t1;
     
    header("location:user/home.php");
    
}

if($r[3]=="ser")
{
    $_SESSION['ser']=$t1;
     
    header("location:service/home.php");
    
}


if($r[3]=="dist")
{
    $_SESSION['dist']=$t1;
     
    header("location:district/home.php");
    
}


}
else
{
    header("location:index.php?Fail=1");
}
    

}
                                    ?>


<!--Author: Trinity Technologies
Author URL: http://Trinity Technologies.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title><?php echo $title ?> :: Trinity Technologies</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Video Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="login/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="video-w3l" data-vide-bg="login/video/1">
		<!-- title -->
		<h1>
			<span>T</span>rack
			<span>M</span>e
			<span>N</span>ow</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<form method="post">
				<div class="form-style-agile">
					<label>
						<i class="fas fa-user"></i>Username</label>
					<input placeholder="Username" name="t1" type="text" required="">
				</div>
				<div class="form-style-agile">
					<label>
						<i class="fas fa-unlock-alt"></i>Password</label>
					<input placeholder="Password" name="t2" type="password" required="">
				</div>
				<!-- switch -->
				<div class="checkout-w3l">
					<div class="demo5">
						<div class="switch demo3">
							<input type="checkbox">
							<label>
								<i></i>
							</label>
						</div>
					</div>
					<a href="login/#">Remember Me</a>
				</div>
				<!-- //switch -->
				<input type="submit" name="sub" value="Log In">
				<!-- social icons -->
				<div class="footer-social">
                                    <a href="reg1.php"><h2>User Registration</h2></a>
                                    <a href="reg.php"> <h2 style="float: left">Service Registration</h2></a>
					
				</div>
				<!-- //social icons -->
			</form>
		</div>
		<!-- //content -->

		<!-- copyright -->
		<div class="footer">
			<p>&copy; 2018 Video Login Form. All rights reserved | Design by
				<a href="#">Trinity Technologies</a>
			</p>
		</div>
		<!-- //copyright -->
	</div>

	
	<!-- Jquery -->
	<script src="login/js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->

	<!-- Video js -->
	<script src="login/js/jquery.vide.min.js"></script>
	<!-- //Video js -->
	
</body>

</html>