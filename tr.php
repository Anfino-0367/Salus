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
                                <td colspan="2"><textarea class="form-control"name="t3"></textarea></td>
                            </tr>
                            <tr>
                                
                                <td colspan="2" align="center"><input type="submit" name="sub" value="Send Help" class="btn btn-danger btn-sm" /></td>
                            </tr>
                        </table>
                        </center>
                      
                        
                    </form>
                  </div>