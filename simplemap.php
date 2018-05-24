<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
		
		var myLatLng = {lat: 26.397, lng: 76.644};
		
		google.maps.event.addListener(map, 'zoom_changed', function() {
		var zoomLevel = map.getZoom();
		map.setCenter(myLatLng);
		console.log(zoomLevel);
		//infowindow.setContent('Zoom: ' + zoomLevel);
		});
		
	google.maps.event.addListener(map, "position_changed", function() {	// Draggable event
      var position = map.getPosition();
	  console.log(position);
    });

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY&callback=initMap"
    async defer></script>
  </body>
</html>