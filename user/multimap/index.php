<?php
include '../../dbconnection.php';
$mid=$_GET['mid'];
$sel=mysqli_query($dbcon,"select * from c_act where eid='$mid'");

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Google Maps Multiple Markers</title>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&sensor=false"></script>
</head>
<body>
  <div id="map" style="width: 100%; height: 500px;"></div>

  <script type="text/javascript">
    var locations = [
        <?php
        while($r=mysqli_fetch_row($sel))
        {
            $sel1=mysqli_query($dbcon,"select * from ser_reg where em='$r[1]'");
$r1=mysqli_fetch_row($sel1);
$jb=mysqli_query($dbcon,"select * from ser where id='$r1[2]'");
    $jb1=mysqli_fetch_row($jb);
        ?>
      ['<?php echo $r1[1] ?>(<?php echo $jb1[1] ?>)', <?php echo $r1[9] ?>, <?php echo $r1[10] ?>],
              <?php
        }
              ?>      
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: new google.maps.LatLng(<?php echo $r1[9] ?>, <?php echo $r1[10] ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        title:locations[i][0],
        icon:'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_red.png',
        map: map,      
      });
     
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
       
    }
  </script>
</body>
</html>