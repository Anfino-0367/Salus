<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['ser'];
$sel=mysqli_query($dbcon,"select * from user_data where em='$usr'");
    $r=mysqli_fetch_row($sel);
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
    $la=$_POST['t1'];
    $lo=$_POST['t2'];
   
    
   $logn=mysqli_query($dbcon,"update ser_reg set la='$la',lo='$lo' where em='$usr'");
    if($logn>0)
    {
        header("location:emg.php");
    }
 else {
      
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
		<div class="banner_w3lspvt-2">
			<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php" class="font-weight-bold">Home</a></li>
				<li class="breadcrumb-item" aria-current="page">Emergency</li>
			</ol>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- contact -->
        <?php
            if(isset($_GET['s']))
                
            {     
                
                ?>
            
            <center>
            <span style="color: green"><h3>Please Remain Calm ....Help is on the way</h3></span>
            </center>
            
            <?php
            
            }
            
            ?>
	<div class="contact py-5" id="contact">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row">
                            
				<div class="col-lg-6">
                                    <img src="../images/loc.gif" alt="image" class="img-fluid" />
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<!-- contact form grid -->
                                        <div class="contact-top1">
                                            
                                            
                                            
                                            
                                            <div id="map_x">
                        <div class="label label-danger" style="cursor: pointer;" onclick="shomap(); initialiseMap(); initialise()"><span class="glyphicon glyphicon-map-marker"></span> UPDATE MY LOCATION</div>
                        <div id="abcmap" style="display: none;">
                       
    <body><div class="row">
                      
                    <div class="box-body">
                <center>
                    <div class="button button2" id="map_canvas" style="width:600px; height:350px ;"></div>
                    <div id="current">Initializing...</div>
                    
                </center>
                        <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

                <script src="js/geoPosition.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/geoPositionSimulator.js" type="text/javascript" charset="utf-8"></script>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=myMap"></script>


		<script>
                    function shomap()
                {
                    
                    $("#abcmap").show(1000);
                }
		function initialiseMap()
		{
                     var myOptions = {
			      zoom: 4,
			      mapTypeControl: true,
			      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			      navigationControl: true,
			      navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			      mapTypeId: google.maps.MapTypeId.ROADMAP      
			    }	
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		}
		function initialise()
		{
			var locations=new Array({ coords: {
										latitude: 	30.2847664,
										longitude: -97.7264275
									} 
								});
			geoPositionSimulator.init(locations);
			if(geoPosition.init())
			{
				document.getElementById('current').innerHTML="Click on the map to Update your Location";
				geoPosition.getCurrentPosition(showPosition,function(){document.getElementById('current').innerHTML="Couldn't get location"},{enableHighAccuracy:true});
			}
			else
			{
				document.getElementById('current').innerHTML="Functionality not available";
			}
		}
		function showPosition(p)
		{
			var latitude = parseFloat( p.coords.latitude );
			var longitude = parseFloat( p.coords.longitude );
                        //var latitude = 8.4938174;
			//var longitude = 76.9480406;
			//document.getElementById('current').innerHTML="latitude=" + latitude + " longitude=" + longitude;
			var pos=new google.maps.LatLng( latitude , longitude);
			map.setCenter(pos);
			map.setZoom(14);

			var infowindow = new google.maps.InfoWindow({
			    content: "<strong>yes</strong>"
			});

			var marker = new google.maps.Marker({
			    position: pos,
			    map: map,
			    title:"You are here"
			});

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			});
			google.maps.event.addListener(map, 'click', function (e) {
                        //var x=confirm("Latitude: " + e.latLng.lat() + "\rLongitude: " + e.latLng.lng()+"\nCorrect?");
                        document.getElementById("lat1").value=e.latLng.lat();
                        document.getElementById("lng1").value=e.latLng.lng();
                        
            });
		}
		</script>
                
                      <div class="chart-responsive">
                       
                        
                      </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      
                    </div><!-- /.col -->
                  </div><!-- /.row --></body>
                  <div id="frmdata">
                    <form method="post">
                        <center>
                        <table class="table table-responsive">
                            <tr>
                                <td><input type="text" name="t1" id="lat1" class="form-control" /></td>
                                <td><input type="text" name="t2" id="lng1" class="form-control" /></td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td colspan="2" align="center"><input type="submit" name="sub" value="Update Now" class="btn btn-danger btn-sm" /></td>
                            </tr>
                        </table>
                        </center>
                      
                        
                    </form>
                  </div>
                                        </div>
					<!-- //contact form grid ends here -->
				</div>
			</div>
		</div>
	</div>
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