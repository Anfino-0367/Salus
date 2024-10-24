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
                                
                                
                                <div id="map" style="width: 100%; height: 400px"></div>
                                                         <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&libraries=places&callback=initAutocomplete"
         async defer></script>
                                
                                <form method="post">
                        <center>
                        <table class="table table-responsive">
                            <tr>
                                <td><input type="text" name="t1" id="lat" class="form-control" /></td>
                                <td><input type="text" name="t2" id="lng" class="form-control" /></td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td colspan="2" align="center"><input type="submit" name="sub" value="Update Location" class="btn btn-danger btn-sm" /></td>
                            </tr>
                        </table>
                        </center>
                      
                        
                    </form>
                            
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