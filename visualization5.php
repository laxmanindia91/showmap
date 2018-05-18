<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>

  <body>
    <style xmlns="http://www.w3.org/2000/svg">
  		#visualization path:hover { fill: cornflowerblue; }
  		#visualization rect:hover {fill:transparent;}
	  </style>
	  
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type='text/javascript'>google.load('visualization', '1', {'packages': ['geochart']});
    
      google.setOnLoadCallback(drawVisualization);
      
        function drawVisualization() {var data = new google.visualization.DataTable();
      
       data.addColumn('string', 'Country');
       data.addColumn('number', 'Value'); 
       data.addColumn({type:'string', role:'tooltip'});var ivalue = new Array();
      
       var options = {
       colorAxis:  {minValue: 0, maxValue: 0,  colors: []},
       legend: 'none',    
       backgroundColor: {fill:'#FFFFFF',stroke:'#FFFFFF' ,strokeWidth:25 },   
       datalessRegionColor: '#ffc801',
       displayMode: 'world', 
       enableRegionInteractivity: 'true', 
       resolution: 'provinces',
       sizeAxis: {minValue: 1, maxValue:1,minSize:10,  maxSize: 10},
       region:'IN',
       keepAspectRatio: true,
       width:600,
       height:400,
       tooltip: {textStyle: {color: '#444444'}, trigger:'focus', isHtml: false}   
       };
        var chart = new google.visualization.GeoChart(document.getElementById('visualization')); 
        google.visualization.events.addListener(chart, 'select', function() {
        var selection = chart.getSelection();
        if (selection.length == 1) {
        var selectedRow = selection[0].row;
        var selectedRegion = data.getValue(selectedRow, 0);
		console.log(selectedRow + selectedRegion);
        if(ivalue[selectedRegion] != '') { document.location = ivalue[selectedRegion];  }
        }
        });
       chart.draw(data, options);
     }
     </script>
     
     <div id='visualization'></div>
  </body>

</html>