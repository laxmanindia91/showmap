<html>
  <head>
  <style>
  div {
  display: inline-block;
  vertical-align: top;
}
  </style>
   <!--script src="https://maps.googleapis.com/maps/api/js?libraries=visualization""></script--> 
  </head>
  <body>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
<div id="mapcontainer"></div>
<div id="tablecontainer">
  <ul class="regions" id="regions"></ul>
</div>
    <script>

      function drawMap() {
  var data = google.visualization.arrayToDataTable([
    ['Province'],
    ['Montana'],
    ['Washington'],
    ['Oregon'],
    ['California'],
    ['New York'],
    ['Connecticut'],
    ['Alabama'],
    ['Idaho'],
    ['Nevada'],
    ['Nebraska'],
    ['Colorado'],
    ['Arizona'],
    ['New Mexico'],
    ['Texas'],
    ['Louisiana'],
    ['Oklahoma'],
    ['Virginia'],
    ['Kentucky'],
    ['Illinois'],
    ['Indiana'],
    ['Arkansas'],
    ['Louisiana'],
    ['Mississippi'],
    ['Georgia'],
    ['Florida'],
    ['Missouri'],
    ['Iowa'],
    ['Minnesota'],
    ['South Dakota'],
    ['North Dakota'],
    ['Wyoming'],
    ['Utah'],
    ['Illinois'],
    ['Maine'],
    ['Vermont'],
    ['Massachussets'],
    ['Maryland'],
    ['Delaware'],
    ['New Jersey'],
    ['South Carolina'],
    ['North Carolina'],
    ['Michigan'],
    ['Wisconsin'],
    ['Kansas'],
    ['Alaska'],
    ['Hawaii'],
    ['Rhode Island'],
    ['District of Colombia'],
    ['Ohio'],
    ['West Virginia'],
    ['Pennsylvania'],
    ['Tennessee'],
    ['New Hampshire']
  ]);
  data.sort([{column: 0}]);

  var options = {
    region: 'US',
	//dataMode : 'regions',	//'markers';
    backgroundColor: '#eee',
    datalessRegionColor: '#ffc801',
    width: 700,
    height: 300,
    resolution: 'provinces',
  };

  var container = document.getElementById('mapcontainer');
  var chart = new google.visualization.GeoChart(container);

  google.visualization.events.addListener(chart, 'select', myClickHandler);

  // use data table to build regions list
  /*var regions = document.getElementById('regions');
  for (var i = 0; i < data.getNumberOfRows(); i++) {
    regions.insertAdjacentHTML(
      'beforeEnd',
      '<li data-row="' + i + '"><a class="region" href="/' + data.getValue(i, 0) + '">' + data.getValue(i, 0) + '</a></li>'
    );
  }*/

  // track events
  var lastEvent = null;
  container.addEventListener('click', function (e) {
    lastEvent = e;
  }, false);
  container.addEventListener('mouseover', function (e) {
    lastEvent = e;
    // dispatch click event to get hover value
    var event = document.createEvent('SVGEvents');
    event.initEvent('click', true, true);
    e.target.dispatchEvent(event);
  }, false);

  function myClickHandler() {
    var selection = chart.getSelection();
    var message = '';
    if (selection.length > 0) {
      if (selection[0].row !== null) {
        if (lastEvent.type === 'mouseover') {
          // mouseover
          var regionLinks = regions.getElementsByTagName('li');
          for (var i = 0; i < regionLinks.length; i++) {
            var regionRow = parseInt(regionLinks[i].getAttribute('data-row'));
            regionLinks[i].style.backgroundColor = (regionRow === selection[0].row) ? 'cyan' : null;
            chart.setSelection([]);
          }
        } else {
          // click
          console.log("/" + data.getValue(selection[0].row, 0));
          //window.location = "/" + data.getValue(selection[0].row, 0);
        }
      }
    }
  }

  chart.draw(data, options);
}
google.charts.load('current', {
  packages:['geochart'],
  callback: drawMap
});
	  
	  </script>
	  
  </body>
</html>