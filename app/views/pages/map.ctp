<?php echo $html->script('http://maps.google.com/maps/api/js?sensor=true', array('inline'=>false)); ?>
<?php $html->scriptStart(array('inline'=>false));?>
	$(document).ready(function() {
	    var latlng = new google.maps.LatLng(20.397, -80.644);
	    var myOptions = {
	      zoom: 2,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP,
	      streetViewControl: false,
	      mapTypeControlOptions: {
       		style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
      	      },
      	      zoomControlOptions: {
        	style: google.maps.ZoomControlStyle.SMALL
      	      }
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);	    
	    var infowindow = new google.maps.InfoWindow({content:""});
	    var yourpos;	    
	    
	    $.get("/locations/mappoints.xml",{},function(xml){
			$(xml).find("location").each(function() {
				var the_marker = new google.maps.Marker({
					title: $(this).attr("Name"),
					map: map,
					clickable: true,
					position: new google.maps.LatLng(
						parseFloat($(this).attr("Latitude")),
						parseFloat($(this).attr("Longitude"))
					)
         			});
         			the_marker.url = "/locations/view/"+$(this).attr("LocationID");
		
         			new google.maps.event.addListener(the_marker, 'click', function() {
         				infowindow.setContent('<div style="width:400px;height:160px;"><img src="/img/download.gif" />&nbsp;Loading...</div>');
         				$.get(the_marker.url,{},function(data){
         					infowindow.setContent(data);});
					infowindow.open(map, the_marker);
				});				
			});	
	    });
	    
	    var museum_marker = new google.maps.Marker({
	    	title: "Museum of the Modern Snowglobe",
	    	map: map,
	    	icon: "http://google-maps-icons.googlecode.com/files/museum-historical.png",
	    	position: new google.maps.LatLng("42.391227", "-71.101799")
	    	
	    });	    
	    new google.maps.event.addListener(museum_marker, 'click', function() {
         				infowindow.setContent('<div style="text-align:center;"><h2>This is the museum</h2></div>');
         				infowindow.open(map, museum_marker);
            });
	    
	    if (navigator.geolocation) {
	    	navigator.geolocation.getCurrentPosition(setPositionMarker);
	    }	
	    
	    function setPositionMarker(pos) {
	    	var image = '/img/google_marker_green.png';
	    	var msg = '<div style="text-align:center;"><h2>You are probably here</h2></div>';
	    	
	    	yourpos = new google.maps.LatLng(
				parseFloat(pos.coords.latitude),
				parseFloat(pos.coords.longitude)
		);
	    
		var your_marker = new google.maps.Marker({
			title: "Your current location",
			map: map,
			clickable: true,
			icon: image,
			position: yourpos
		});		
	    	new google.maps.event.addListener(your_marker, 'click', function() {
			infowindow.setContent(msg);
			infowindow.open(map, your_marker);
		});
		
		infowindow.setContent(msg);
		infowindow.open(map, your_marker);
		
		$("#latitude").text(pos.coords.latitude);
		$("#longitude").text(pos.coords.longitude);
		$("#findme").click(function() {map.panTo(yourpos);map.setZoom(9);});	
		$("#currentposition").toggle();
	    }
 	})

 	
<?php $html->scriptEnd(); ?>



<div style="float:left;width:800px;">

<h4>Map View</h4>

<div id="map_canvas"></div>

<h4>Geographical facts about the collection</h4>

<ul class="factlist">
<li>19 countries are represented in the collection.</li>
<li>No snowglobes yet from Australia or Antartica.</li>
<li>Most snowglobes from: Las Vegas, 6 snowglobes</li>
<li>Most recent acquisition: <?php echo $this->Html->link('2011, Great Wall of China', array('controller' => 'snowglobes', 'action' => 'view', 192), array('name' => 'globe'));?></li>
<li>Farthest traveled snowglobe: <?php echo $this->Html->link('Hong Kong', array('controller' => 'snowglobes', 'action' => 'view', 193), array('name' => 'globe'));?>, 7,975 miles</li>
<li>Runner up: <?php echo $this->Html->link('Maui', array('controller' => 'snowglobes', 'action' => 'view', 28), array('name' => 'globe'));?>, 5,042 miles</li>

<div id="currentposition" style="display:none;">
	<h4>Your current location is probably here</h4>

	<p>Latitude: <span id="latitude"></span><br/>
	Longitude: <span id="longitude"></span></p>	
	<p><a href="#" id="findme">Find me on the map</a></p>
</div>

</div>