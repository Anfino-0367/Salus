<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['ser'];
$sel=mysqli_query($dbcon,"select * from ser_reg where em='$usr'");
    $r=mysqli_fetch_row($sel);
    $la=$r[9];
                          $lo=$r[10];
?>
<?php

if($usr=$_SESSION['ser'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<?php
if(isset($_POST['sub']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
  $t3=$_POST['t3'];
    $zz=  mysqli_query($dbcon,"insert into loc values('','$usr','$r[1]','$r[2]','$r[7]','$t1','$t2','$t3','0')");
    if($zz>0)
    {
         
        header("location:emg.php?s=1");
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
	<title><?php echo $title ?>| Contact Us :: Trinity Technologies</title>
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
		
	<!-- //main banner -->

	<!-- contact -->
        
	<div class="contact py-5" id="contact">
		
                 <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"SELECT  `id`, `uid`, `nme`, `con`, `ph`, `la`, `lo`, `msg`, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM loc  HAVING distance < 60 ORDER BY id desc");
   
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {
                                                            
                                                        ?>
                
                <div class="what bg-li py-5" id="what">
		<div class="container py-xl-5 py-lg-3">
			<div class="row about-bottom-w3l text-center mt-4">
                            
                            
                            
                            <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                
                                                                ?>
                            
				<div class="col-lg-4 about-grid">
					<div class="about-grid-main">
                                            <img style="width: 100px;height: 100px" src="../img3/<?php echo $r_gal[4] ?>" alt="" class="img-fluid">
						<h4 class="my-4"><?php echo $r_gal[2] ?></h4>
						<p><?php echo substr($r_gal['7'],0,55)?>.......</p>
                                                <br/>
                                                <a href="emg_dt.php?mid=<?php echo $r_gal[0] ?>" class="btn btn-success">Join</a>&nbsp;&nbsp;<a href="emg_dt.php?del=<?php echo $r_gal[0] ?>" class="btn btn-danger">Leave</a>
					</div>
				</div>
                            
				<?php
                                                            }
                                                            ?>
                            
                            
				
			</div>
                    
		</div>
	</div>
                <?php
                                                        }
                                                        ?>
                
                </div>

	<!-- //contact-->

	<!-- map -->
	
	<!-- //map -->

	<!-- footer -->
	
	<!-- //footer -->
	<!-- copyright bottom -->
	<div class="copy-bottom bg-li py-4 border-top">
		<div class="container-fluid">
			<div class="d-md-flex px-md-3 position-relative text-center">
				<!-- footer social icons -->
				
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