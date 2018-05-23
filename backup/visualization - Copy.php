<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
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
          /*['Country', 'Popularity'],
          ['Germany', 700],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700],
		  ['IN', 700]*/
		  ['Region'],
		  ['Asia Pacific']
        ]);

        //var options = {};
		var options = {
					//region: 'world', //'002', // Africa
					//displayMode: 'text',
					//'dataMode' : 'world',	//'markers';
					//colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
					//backgroundColor: '#81d4fa',
					//datalessRegionColor: '#f8bbd0',
					//defaultColor: '#f5f5f5',
					//'dataMode': 'marker'
					};

        /*var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));	//working
		console.log(data);
        chart.draw(data, options);*/
		
		var container = document.getElementById('regions_div');
		var geomap = new google.visualization.GeoChart(container);

        geomap.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
	<!--script async defer src="https://maps.googleapis.com/maps/api/js?key
=AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY&libraries=visualization&callback=initMap">
</script-->
  </body>
</html>