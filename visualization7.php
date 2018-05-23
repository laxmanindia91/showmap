<!DOCTYPE html>
<html>

  <head>
  <style>

html, body {
  width: 100%;
  height: 100%;
  margin: 0px;
}

#chartdiv {
  width: 100%;
  height: 100%;
}

</style>  
    
  </head>

  <body>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<div id="chartdiv"></div>

<script>

var map = AmCharts.makeChart("chartdiv", {
  "type": "map",
  "theme": "light",
  "dataProvider": {
    "map": "worldLow",
    "zoomLevel": 2.7,
    "zoomLongitude": 24.0174,
    "zoomLatitude": -1.1076,
    "areas": [
      { "id": "AO" },
      { "id": "BF" },
      { "id": "BI" },
      { "id": "BJ" },
      { "id": "BW" },
      { "id": "CD" },
      { "id": "CF" },
      { "id": "CG" },
      { "id": "CI" },
      { "id": "CM" },
      { "id": "DJ" },
      { "id": "DZ" },
      { "id": "EG" },
      { "id": "ER" },
      { "id": "ET" },
      { "id": "GA" },
      { "id": "GH" },
      { "id": "GM" },
      { "id": "GN" },
      { "id": "GQ" },
      { "id": "GW" },
      { "id": "KE" },
      { "id": "LR" },
      { "id": "LS" },
      { "id": "LY" },
      { "id": "MA" },
      { "id": "MG" },
      { "id": "ML" },
      { "id": "MR" },
      { "id": "MW" },
      { "id": "MZ" },
      { "id": "NA" },
      { "id": "NE" },
      { "id": "NG" },
      { "id": "RW" },
      { "id": "SD" },
      { "id": "SL" },
      { "id": "SN" },
      { "id": "SO" },
      { "id": "SS" },
      { "id": "SZ" },
      { "id": "TD" },
      { "id": "TG" },
      { "id": "TN" },
      { "id": "TZ" },
      { "id": "UG" },
      { "id": "ZA" },
      { "id": "ZM" },
      { "id": "ZW" },
      { "id": "EH" }
    ]
  },
  "areasSettings": {
    "autoZoom": true,
    "selectedColor": "#CC0000",
    "unlistedAreasAlpha": 0
  },
  "zoomControl": {
    "minZoomLevel": 2.7
  }
});

</script>
  </body>

</html>