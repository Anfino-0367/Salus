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
     $t7=$_POST['t7'];
     $t8=$_POST['t8'];
     $t9=$_POST['t9'];
    $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    $up1=$_FILES['myFile1']['name'];
    $count1=rand('1000000','9999999');
    $nfn1=$count1."".substr($up1,strrpos($up1,"."));
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img1//$nfn"))
    {
          if(move_uploaded_file($_FILES['myFile1']['tmp_name'],getcwd()."//img2//$nfn1"))
    {
    $ins_grp1=mysqli_query($dbcon,"insert into ser_reg values('','$t1','$t2','$t3','$t4','$t5','$t6','$nfn','$nfn1','$t7','$t8','$t9','0')");
    if($ins_grp1>0)
    {
      $ins=mysqli_query($dbcon,"insert into user_log values('','$t5','$t6','ser','0')");
    if($ins>0)
    { 
          
      header("location:reg.php");     

       }
       
    }
    else
    {
    echo mysqli_error($dbcon);
    }
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
    <h1 class="error">Emergency Sign Up Form</h1>
	<!---728x90--->
    <div class="Trinity Technologies-two-grids">
	<!---728x90--->
        <div class="mid-class">
            <div class="img-right-side">
                
                
                <img style="width: 100%;height: 400px" src="images/18033.jpg" class="img-fluid" alt="">
                <div id="dvMap" style="width: 100%; height: 500px"></div>
            </div>
            <div class="txt-left-side">
                <h2> Sign Up Here </h2>
              <form  method="post"enctype="multipart/form-data">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <input type="text" class="form-control" name="t1" placeholder="Name" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                        <select name="t2" id="stat" required="required" class="form-control">
                                        <option value="">Choose profession</option>
                                        <?php
                                        $sel_state=mysqli_query($dbcon,"select * from ser");
                                        while($r_state=mysqli_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                           }
                                        ?>
                                    </select>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-calendar-check-o" aria-hidden="true"></span>
                        <input type="text" name="t3" placeholder="Work Experiance" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="t4" placeholder="contact Info" required=""onkeyup="chkc(this.value)" /><span id="o3"></span>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" name="t5" placeholder="Email" required=""onkeyup="vem(this.value)" /><span id="em"></span>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="t6" placeholder="Password" required="">
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-image" aria-hidden="true"></span>
                        <input type="file" name="myFile" required="" >
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-file-word-o" aria-hidden="true"></span>
                        <input type="file" name="myFile1" required="" >
                        <div class="clear"></div>
                    </div>
                  
                  
                  
                  <div class="form-left-to-w3l ">

                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                       <input type="text"name="t7" class="form-control form-control-lg"id="la" placeholder=" Latitude"  aria-describedby="basic-addon1" required>
                                      
                        <div class="clear"></div>
                    </div>
                  <div class="form-left-to-w3l ">

                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <input type="text"name="t8" class="form-control form-control-lg"id="lo" placeholder=" Longitude"  aria-describedby="basic-addon1" required>
                               
                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-map-signs" aria-hidden="true"></span>
                        <input type="number" name="t9" placeholder="pincode" required="" >
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