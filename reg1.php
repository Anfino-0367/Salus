<?php

include './dbconnection.php';

?>
<?php

if (isset($_POST['b1'])) {
     $t1=$_POST['t1'];
     $t2=$_POST['t2'];
     $t3=$_POST['t3'];
     $t4=$_POST['t4'];
     $t5=$_POST['t5'];
     $t6=$_POST['t6'];
     
    $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
    if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img3//$nfn"))
    {
        
    $ins_grp1=mysqli_query($dbcon,"insert into user_data values('','$t1','$t2','$t3','$t4','$t5','$t6','$nfn','0')");
    if($ins_grp1>0)
    {
      $ins=mysqli_query($dbcon,"insert into user_log values('','$t3','$t6','usr','1')");
    if($ins>0)
    { 
          
      header("location:index.php");     

       }
       
    }
    else
    {
    echo mysqli_error($dbcon);
    }
    } 
}
?>
<!--A Design by Trinity Technologies
   Author: W3layout
   Author URL: http://Trinity Technologies.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Gadget Sign Up Form a Flat Responsive Widget Template :: Trinity Technologies </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gadget Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <style type="text/css">
                    
                    
                    h2 {
  text-align: center;
}

.p {
  text-align: center;
  padding-top: 130px;
}
                </style>
                
                
                
               <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate1() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=myMap&libraries=places&callback=initAutocomplete"
        async defer></script>
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
</head>
<body>
    <h1 class="error">Emergency Sign Up Form</h1>
	<!---728x90--->
    <div class="Trinity Technologies-two-grids">
	<!---728x90--->
        <div class="mid-class">
            
            <div class="txt-left-side">
                <h2> Sign Up Here </h2>
              <form  method="post"enctype="multipart/form-data">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <input type="text" class="form-control" name="t1" placeholder="Name" required="">

                        <div class="clear"></div>
                    </div>
                    
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="number" name="t2" placeholder="contact Info" required=""onkeyup="chkc(this.value)" /><span id="o3"></span>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" name="t3" placeholder="Email" required=""onkeyup="vem(this.value)" /><span id="em"></span>

                        <div class="clear"></div>
                    </div>
                  <div class="form-left-to-w3l">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <div id="locationField">
                                            <input name="t4" id="autocomplete" placeholder="Address"
             onFocus="geolocate1()"type="text">
    </div>

                        <div class="clear"></div>
                    </div>
                  <div class="form-left-to-w3l ">

                        <span class="fa fa-image" aria-hidden="true"></span>
                        <input type="file" name="myFile" required="" >
                        <div class="clear"></div>
                    </div>
                  <div class="form-left-to-w3l">
                        <span class="fa fa-map-signs" aria-hidden="true"></span>
                        <input type="number" name="t5" placeholder="Pincode" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="t6" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    
                  
                  
                  
                    <div class="btnn">
                        <button name="b1" type="submit">Login In </button>
                    </div>
                </form>
                <div class="Trinity Technologies_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="index.php">Login Here
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
                <a href="index.php"></a>
            </div>
            <div class="txt-right-side">
            
                <img style="width: 730px;height: 750px" src="images/464745-PG35BZ-546.jpg">
            
            
            </div>
        </div>
    </div>
        
	<!---728x90--->
    <footer class="copyrigh-wthree">
        <p>
            © 2019 Gadget Sign Up Form. All Rights Reserved | Design by
            <a href="http://www.Trinity Technologies.com" target="_blank">Trinity Technologies</a>
        </p>
    </footer>
</body>

</html>