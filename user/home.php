<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['usr'];

?>
<?php

if($usr=$_SESSION['usr'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<?php

$sel=mysqli_query($dbcon,"select * from user_data where em='$usr'");
    $r=mysqli_fetch_row($sel);
?>


<?php
if(isset($_GET['mid']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
  $t3=$_POST['t3'];
    $zz=  mysqli_query($dbcon,"insert into loc values('','$usr','$r[1]','$r[2]','$r[7]','8.4830',' 77.1763','Emergency!!!','0')");
    if($zz>0)
    {
         
        header("location:emg1.php");
    }
    else
    {
       
    }
    }
      
    


?>
<!--
Author: Trinity Technologies
Author URL: http://Trinity Technologies.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $title ?>| Home :: Trinity Technologies</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="../temp/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../temp/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="../temp/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts --> 
	<link href="../temp///fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<?php 
                
                include 'menu.php';
                ?>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt position-relative">
			<div class="container">
				<div class="d-md-flex">
					<div class="w3ls_banner_txt">
						<h3 class="w3ls_pvt-title">Project <br><span>Salus</span></h3>
						<p class="text-sty-banner">Get your nearest service help from professionals now without any delay </p>
                                                <a href="home.php?mid=1" class="btn button-style mt-md-5 mt-4">Send Emergency Now</a>
					</div>
					<div class="banner-img">
						<img src="../temp/images/banner.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<!-- animations effects -->
			<div class="icon-effects-w3l">
				<img src="../temp/images/shape1.png" alt="" class="img-fluid shape-wthree shape-w3-one">
				<img src="../temp/images/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">
				<img src="../temp/images/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
				<img src="../temp/images/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
				<img src="../temp/images/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
				<img src="../temp/images/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">
			</div>
			<!-- //animations effects -->
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- what we do section -->
	
	<!-- //footer -->
	<!-- copyright bottom -->
	<div class="copy-bottom bg-li py-4 border-top">
		<div class="container-fluid">
			<div class="d-md-flex px-md-3 position-relative text-center">
				<!-- footer social icons -->
				<div class="social-icons-footer mb-md-0 mb-3">
					<ul class="list-unstyled">
						<li>
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-instagram"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer social icons -->
				<!-- copyright -->
				<div class="copy_right mx-md-auto mb-md-0 mb-3">
					<p class="text-bl let">© 2019 Startup. All rights reserved | Design by
						<a href="../temp/http://Trinity Technologies.com/" target="_blank">Trinity Technologies</a>
					</p>
				</div>
				<!-- //copyright -->
				<!-- move top icon -->
				<a href="#home" class="move-top text-center">
					<span class="fa fa-level-up" aria-hidden="true"></span>
				</a>
				<!-- //move top icon -->
			</div>
		</div>
	</div>
	<!-- //copyright bottom -->

</body>

</html>