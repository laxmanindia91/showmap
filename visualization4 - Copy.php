<html>
  <head>
  <style>

  </style>
   <style xmlns="http://www.w3.org/2000/svg">
    #visualization path:hover { fill: cornflowerblue; }
    #visualization rect:hover {fill:transparent;}
</style> 
  </head>
  <body>
    
<div id="chart"> </div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="mapdata.js"></script>
<script type="text/javascript">// <![CDATA[
google.load('visualization', '1', {'packages': ['geochart']});
google.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap () {
//console.log(simplemaps_worldmap_mapdata["regions"]);
//console.log(simplemaps_worldmap_mapdata["regions"][0].name);
//console.log(simplemaps_worldmap_mapdata["regions"][0].states);	//	states
//console.log(simplemaps_worldmap_mapdata["regions"][0].states.length);	//	states length

var array_region = [];
var array_state = [];

var obj = simplemaps_worldmap_mapdata["regions"];

var startString = '[';
var dataString = '';
var endString = ']';
var finalString = '';

for (var region in obj) {
		//console.log(obj[region].name);
		//dataString += startString + obj[region].name + ',';
		//array_region.push(obj[region].name);
		for (var i=0; i<obj[region].states.length;i++) {
			//console.log(obj[region].states[i]);
			array_state.push(obj[region].states[i]);
    }
	array_region.push(obj[region].name,array_state);
}

console.log(array_region);


var data = google.visualization.arrayToDataTable([

    
	['North America',["Canada","United States","Greenland","Bermuda"]],

  ]);

var view = new google.visualization.DataView(data)
view.setColumns([0, 1])

var height =	'600';
var container = document.getElementById('chart');
  var geochart = new google.visualization.GeoChart(container);
  geochart.draw( view, {
    width: 800,	//window.width(),
    height: height,
    region: 'world', 
    legend: 'none',
    keepAspectRatio: false,
    backgroundColor: '#FFFFFF', //'#d9e8f5',
	//backgroundColor: {fill:'#FFFFFF',stroke:'#FFFFFF' ,strokeWidth:25 },
	datalessRegionColor: '#372861',	//'#f8bbd0',
    colorAxis: {colors: ['#6E90CF', '#3B729F']}
  } );


// track events
  var lastEvent = null;
  
  google.visualization.events.addListener( 
    container, 'regionClick', regionClickHandler); 

      function regionClickHandler() { 
        var country_data = geomap.getSelection(); 
        //var country_code = data.getValue(data[0]); 
		alert('aaa'+country_data);
        //location.href = "?region=" + country_code; 

        geomap.setSelection(); 
      }
  
    container.addEventListener('mouseover', function (e) {
    lastEvent = e;
	//geomap.setSelection([]);
	//console.log(geomap.getSelection([]));
	//console.log("/" + geomap.getSelection(data));
	console.log(e);
    // dispatch click event to get hover value
    /*var event = document.createEvent('SVGEvents');
    event.initEvent('click', true, true);
    e.target.dispatchEvent(event);*/
  }, false);


function selectHandler(e)     {   
   //window.location = data.getValue(geochart.getSelection()[0].row, 1);
   console.log(e);
}
        google.visualization.events.addListener(geochart, 'select', selectHandler);
}
// ]]></script>




	  
  </body>
</html>