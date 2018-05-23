<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var map;
	function initMap() {
		google.charts.load('current', {
        'packages':['geochart'],	//geomap
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY',
		'callback': drawRegionsMap
      });
      //google.charts.setOnLoadCallback(drawRegionsMap);
	  //google.charts.setOnLoadCallback(drawChart1);
	  //google.charts.setOnLoadCallback(drawChart2);
	  // OR
	  /*google.charts.setOnLoadCallback(
		function() { // Anonymous function that calls drawChart1 and drawChart2
			 drawChart1();
			 drawChart2();
		  });*/

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
		['Continent', 'Countries'],
		["North America","Canada"],
		["Latin America", "Venezuela" ]
        
     
        ]);

        var options = {};
		/*var options = {
					region: 'world', //'002', // Africa
					//displayMode: 'text',
					//'dataMode' : 'regions',	//'markers';
					'colors' : '#f8bbd0',
					'showLegend' : 'true',
					//colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
					//backgroundColor: '#81d4fa',
					//datalessRegionColor: '#054073',	//'#f8bbd0',
					//defaultColor: '#f5f5f5',
					//'dataMode': 'marker'
					};*/

        /*var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));	//working
		console.log(data);
        chart.draw(data, options);*/
		
		var container = document.getElementById('regions_div');
		var geomap = new google.visualization.GeoChart(container);
		console.log(data);
        geomap.draw(data, options);
		
 google.visualization.events.addListener( 
    geomap, 'regionClick', regionClickHandler); 

      function regionClickHandler() { 
        var country_data = geomap.getSelection(); 
        //var country_code = data.getValue(data[0]); 
		alert('aaa'+country_data);
        //location.href = "?region=" + country_code; 

        geomap.setSelection(); 
      }


  // track events
  var lastEvent = null;
  container.addEventListener('click', function (e) {
    lastEvent = e;
	console.log(e);
  }, false);
  container.addEventListener('mouseover', function (e) {
    lastEvent = e;
	//geomap.setSelection([]);
	//console.log(geomap.getSelection([]));
	//console.log("/" + geomap.getSelection(data));
	//console.log(e);
    // dispatch click event to get hover value
    /*var event = document.createEvent('SVGEvents');
    event.initEvent('click', true, true);
    e.target.dispatchEvent(event);*/
  }, false);

  
		

      }
	}
    </script>
  </head>
  <body>
    <!--div id="regions_div" style="width: 900px; height: 500px;"></div-->
	<div id="regions_div" style="width: 900px; height: 500px;"></div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key
=AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY&libraries=visualization&callback=initMap">
</script>
  </body>
</html>