<!DOCTYPE html>
<html>

  <head>
    
    
  </head>

  <body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <div id="regions_div" style="width: 900px; height: 500px;"></div>
	   
	   <script type='text/javascript'>
	   google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
			// Create the data table.
        /*var data = new google.visualization.DataTable();
        data.addColumn('string', 'Country');
        data.addColumn('string', 'Popularity');
        data.addRows([
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);*/
		
        var data = google.visualization.arrayToDataTable([
          ['Continent',],
          ['Middle East and India'],
          ['Europe'],
          ['Americas'],
          ['Asia Pacific'],
          ['Africa'],
        ]);

        var options = {
			//backgroundColor: '#FFFFFF', //'#d9e8f5',
			//backgroundColor: {fill:'#FFFFFF',stroke:'#FFFFFF' ,strokeWidth:25 },
			datalessRegionColor: '#372861',	//'#f8bbd0',
			//colorAxis: {colors: ['#6E90CF', '#3B729F']},
			resolution: 'continents'
		};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
		
		google.visualization.events.addListener( 
    chart, 'regionClick', regionClickHandler); 

      function regionClickHandler() { 
        var selection = chart.getSelection();
		//var country_data = data.getValue(selection[0].row, 1);
				
        //var country_code = data.getValue(data[1],data[1]); 
		//alert('aaa'+country_data);
		console.log(data.getNumberOfColumns());
		console.log(data.getNumberOfRows());
		//console.log(data.getValue(1,0));
		//console.log(selection);
		//var selection = chart.getSelection();
		if (selection.length) {
			var country_data = data.getValue(selection[0].row, 1);
			alert(country_data);
			console.log(country_data);
			location.href = "?region=" + country_data;
		}
        //location.href = "?region=" + country_code; 

        chart.setSelection(); 
      }

	  

	  
      }
     </script>

  </body>

</html>