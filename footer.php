<section id="cobertura">
				<div id="map_canvas" class="bordert" style="width: 100%; height: 376px;"></div>
						<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLsIXyGWmytDNc91Mq2VMfEH9oytRp9Ec&callback=initMap"></script>
						<script>
						// This example displays a marker at the center of Australia.
						// When the user clicks the marker, an info window opens.

						function initialize() {
							var girardot  = new google.maps.LatLng(4.908797, -73.941500);
							var guasca = new google.maps.LatLng(4.866516, -73.878104);

						  var mapOptions = {
							zoom: 12,
							center: girardot,
							  zoomControl: true,
							  scaleControl: false,
							  scrollwheel: false,
							  disableDoubleClickZoom: true,
						  };

						  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

							var mgir = new google.maps.Marker({
							  position: girardot,
							  map: map,
							  title: 'Sopo'
						  });
							
							var mguasca = new google.maps.Marker({
							  position: guasca,
							  map: map,
							  title: 'Guasca'
						  });
						}
						google.maps.event.addDomListener(window, 'load', initialize);
						</script>
      		</section>
     			

     			<section id="footer" class="bordert" style="border-color: ##056eb3; border-top-width: 15px; background-color: white;">
      			<div class="inwidth-block">
      				        <h1 class="h22in2">¡CONTACTANOS!</h1>
   				    		<!--<img id="footlogo" src="img/logo2.png" width="200"  alt=""/><br>-->
   				    		<a href="https://wa.me/message/XAEEMQCCZ6JDE1"><img id="" src="img/QR JJNETWORKS.png" width="200"  alt=""/></a><br>
							<span></span><br><br>
   				
				</div>        
				<div class="inwidth-block" style="color: #98989a;">
				 <span class="fas fa-map-marker-alt" style="color:#5e72a7"> </span> <span><?php echo $direccion; ?></span>
					<span><?php echo $ciudad; ?></span><br>
					 
					 <span class="far fa-envelope" style="color:#5e72a7"> </span> <span><?php echo $correo; ?></span><br>
<span class="fas fa-phone" style="color:#5e72a7"> </span> <span><?php echo $telefono; ?></span><br>
				</div>      		
			</section>