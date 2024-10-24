<?php
ob_start();
include './dbconnection.php';
session_start();
?>
<?php

if (isset($_POST['b1'])) {
     $t1=$_POST['t1'];
     $t2=$_POST['t2'];
     $t3=$_POST['t3'];
     $t4=$_POST['t4'];
     $t5=$_POST['t5'];
     $t6=$_POST['t6'];
    
    $ins_grp1=mysqli_query($dbcon,"insert into pol_reg values('','$t1','$t2','$t3','$t4','$t5','$t6','1')");
    if($ins_grp1>0)
    {
      $ins=mysqli_query($dbcon,"insert into user_log values('','$t3','$t4','police','0')");
    if($ins>0)
    { 
       
      header("location:login.php");     

       }
       
    }
    else
    {
    echo mysqli_error($dbcon);
    }
    
}
?>
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
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="temp/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="temp/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="temp/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
        
        
        
        <script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}
  
 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
    </script>
                
                
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=myMap"></script>

    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
    </script>
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
				<li class="breadcrumb-item"><a href="#" class="font-weight-bold">Police Station Registration</a></li>
				
			</ol>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- contact -->
	<div class="contact py-5" id="contact">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row">
				<div class="col-lg-6">
					   <div id="dvMap" style="width: 100%; height: 500px"></div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<!-- contact form grid -->
					<div class="contact-top1">
                                            <form  method="post" class="contact-wthree-do"enctype="multipart/form-data">
                                                
                                                 <div class="form-left-to-w3l">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <input type="text" class="form-control" name="t1" placeholder="Name" required="">

                        <div class="clear"></div>
                    </div>
                    
                    
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="t2" class="form-control"placeholder="contact Info" required=""onkeyup="chkc(this.value)" /><span id="o3"></span>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" name="t3"class="form-control" placeholder="Email" required=""onkeyup="vem(this.value)" /><span id="em"></span>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="t4"class="form-control" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    
                  
                  
                  
                  <div class="form-left-to-w3l ">

                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                       <input type="text"name="t5" class="form-control form-control-lg"id="la" placeholder=" Latitude"  aria-describedby="basic-addon1" required>
                                      
                        <div class="clear"></div>
                    </div>
                  <div class="form-left-to-w3l ">

                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <input type="text"name="t6" class="form-control form-control-lg"id="lo" placeholder=" Longitude"  aria-describedby="basic-addon1" required>
                               
                        <div class="clear"></div>
                    </div>
                    
                                                
                    <div class="btnn">
                        <button class="btn btn-cont-w3 btn-block mt-4" name="b1" type="submit">Register </button>
                    </div>
                
                                            </form>
					</div>
					<!-- //contact form grid ends here -->
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
	
	<!-- //copyright bottom -->

</body>

</html>