<?php
include '../dbconnection.php';
ob_start();
session_start();
$usr=$_SESSION['police'];
$sel=mysqli_query($dbcon,"select * from pol_reg where em='$usr'");
    $r=mysqli_fetch_row($sel);
    $mid=$_GET['mid'];
    $sel1=mysqli_query($dbcon,"select * from loc where id='$mid'");
    $r1=mysqli_fetch_row($sel1);
   
                          $mid=$_GET['mid'];
?>
<?php
date_default_timezone_set("Asia/Kolkata"); 
$tim=date("h:i:a");
$date=date('Y-m-d'); 
?>
<?php

if($usr=$_SESSION['police'])
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
    
    $zz=  mysqli_query($dbcon,"insert into msg values('','$usr','$mid','$t1','$date','$tim','0')");
    if($zz>0)
    {
         
        header("location:emg_dt.php?mid=$mid");
    }
    else
    {
       
    }
    }
      
    


?>

 <?php
                            if(isset($_GET['del']))
{
    $del1=mysqli_query($dbcon,"delete from c_act where eid='".$_GET['del']."' and uid='$usr'");
    //echo mysqli_error($dbcon);
    if($del1>0)
    {
       header("location:emg.php");
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
	
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=myMap"></script>
  <script type="text/javascript">
      
        function initMap() {
        var uluru = {lat: <?php echo $r1['5']?>, lng: <?php echo $r1['6']?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
    
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&callback=initMap">
    </script>
<script>
    
    function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
    </script>
        <style>
            
            
            *{
    font-family: 'Open Sans', sans-serif;
}

.well {
    margin-top:-20px;
    background-color:#007FBD;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
}

.well:hover {
    margin-top:-20px;
    background-color:#0077B2;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
    border-bottom : 2px solid rgba(97, 203, 255, 0.65);
}

body {
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 1.42857143;
color: #fff;
background-color: #F1F1F1;
}



.bg_blur
{
    background-image:url('../images/giphy.gif');
    height: 300px;
    background-size: cover;
}

.follow_btn {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid #007FBE;
}

.follow_btn:hover {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid rgba(255, 255, 255, 0.8);
}

.header1{
    color : #808080;
    margin-left:10%;
    
}

.picture{
    height:150px;
    width:150px;
    position:absolute;
    top: 75px;
    left:-75px;
}

.picture_mob{
    position: absolute;
    width: 35%;
    left: 35%;
    bottom: 70%;
}

.btn-style{
    color: #fff;
    background-color: #007FBE;
    border-color: #adadad;
    width: 33.3%;
}

.btn-style:hover {
    color: #333;
    background-color: #3D5DE0;
    border-color: #adadad;
    width: 33.3%;
   
}


@media (max-width: 767px) {
    .header{
        text-align : center;
    }
    
    
    
    .nav{
        margin-top : 30px;
    }
}

.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 30%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 70%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
        </style>
</head>

<body onload="update()">
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<?php
                include 'menu.php';
                
                ?>
		<!-- //header -->

		<!-- banner -->
		<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
                    <a href="#" class="follow_btn" data-toggle="modal" data-target="#myModal">Location <span class="fa fa-map-marker"></span></a>
		</div>
        <div class="col-md-8  col-xs-12">
            <img src="../img3/<?php echo $r1[4] ?>" class="img-thumbnail picture hidden-xs" />
           <img src="../img3/<?php echo $r1[4] ?>" class="img-thumbnail visible-xs picture_mob" />
           <div class="header1">
               <br/>
               <br/>
                <h1><?php echo $r1[2] ?></h1>
                <a href="tel:<?php echo $r1[3] ?>"><h4><?php echo $r1[3] ?></h4></a>
                <span>"<?php echo $r1[7] ?>"</span>
          
           
           
           </div>
           
        </div>
    </div>   
    
	
</div>
                
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="background-color: white">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    <div id="map" style="width: 480px; height: 500px;"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
	<!-- //main banner -->

	<!-- contact -->
        
        <div class="contact py-5" id="contact">
            
            <div class="container">
                
                
                
                <div class="container">

<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Active Service</h4>
            </div>
            
          </div>
          <div class="inbox_chat">
              <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from c_act where eid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
               <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $cu=mysqli_query($dbcon,"select * from ser_reg where em='$r_gal[1]'");
    $cu1=mysqli_fetch_row($cu);
                                                                $i++;
                                                                ?>
              
              
              
            <div class="chat_list">
              <div class="chat_people">
                  <div class="chat_img"> <img src="../img1/<?php echo $cu1[7] ?>" alt="sunil" class="img img-circle"> </div>
                <div class="chat_ib">
                  <h5><?php echo $cu1[1] ?><span class="chat_date"></span></h5>
                  <b style="color: gray"><?php
                  
                   $jb=mysqli_query($dbcon,"select * from ser where id='$cu1[2]'");
    $jb1=mysqli_fetch_row($jb);
    echo"$jb1[1]"
                  
                  ?>.</b>
                </div>
              </div>
            </div>
            <?php
                                                            }
                                                        }
                                                        ?>
            
          </div>
        </div>
        <div class="mesgs">
            <script>
                                          function update() {                                             
                                                $.get("loadchat1.php?mid=<?php echo $mid ?>", function(data) {
                                                    $("#mssg").html(data);
                                                });
                                                window.setTimeout("update();", 100);
                                            }
                                          </script>
          <div class="msg_history">
              <form method="post">
                  <div class="type_msg" style="border-style: groove">
            <div class="input_msg_write">
              </div>
          </div>
            </form>
              <br/>
              <div id="mssg">
                  
              <?php
                        
                                                        $sel_gal1=mysqli_query($dbcon,"select * from msg where eid='$mid' order by id desc");
                                                        if(mysqli_num_rows($sel_gal1)>0)
                                                        {$i=0;
                                                        ?>
               <?php
                                                            while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                                                                $pr=mysqli_query($dbcon,"select * from ser_reg where em='$r_gal1[1]'");
    $pr1=mysqli_fetch_row($pr);
                                                                $i++;
                                                                ?>
              <?php
              
              if($r_gal1[1]!="$usr")
              {
              ?>
              
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img class="img img-circle" src="../img1/<?php echo $pr1[7] ?>" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                    <p><?php echo $pr1[1] ?>
                        <br/>
                        <?php echo $r_gal1[3] ?>
                    </p>
                  <span class="time_date">    <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
              </div>
            </div>
             <br/>
              <?php
              }
 else {
              ?>
              <?php
              
              if($r_gal1[1]="$usr")
              {
              ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?php echo $r_gal1[3] ?></p>
                <span class="time_date">   <?php echo $r_gal1[5] ?>|   <?php echo $r_gal1[4] ?></span></div>
            </div>
            
            <?php
              }
 }
              ?>
            <?php
            
                                                            }
                                                        }
            ?>
          </div>
            <form method="post">
          
            </form>
          </div>
        </div>
      </div>
      
      
      
      
    </div></div>
                
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