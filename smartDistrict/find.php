<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8' />
  <title>Get started with the Map Matching API</title>
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
  <!-- Import Mapbox GL JS  -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />
  <!-- Import jQuery -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <!-- Import Mapbox GL Draw -->
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.js'></script>
  <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.css' type='text/css' />

  <style>

  	.marker {
      background-image: url('icons8-marker-48.png');
      background-size: cover;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      cursor: pointer;
    }

    .mapboxgl-popup {
       max-width: 200px;
    }

    .mapboxgl-popup-content {
       text-align: center;
       font-family: 'Open Sans', sans-serif;
       font-size: 12pt;
    }

    body {
      margin: 0;
      padding: 0;
    }

    #map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }

    .info-box {
      position: absolute;
      margin: 20px;
      width: 25%;
      top: 0;
      bottom: 40%;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      overflow-y: scroll;
      font-family: sans-serif;
      font-size: 0.8em;
      line-height: 2em;
    }

    #info {
      font-size: 16px;
      font-weight: bold;
    }
  </style>
</head>

<body>
	<?php include 'koneksi.php'; ?>
	<?php  
		$vidwisata = $_GET['idwisatane'];
	?>
  <?php
      $query = mysqli_query($conn, "SELECT * FROM wisata WHERE id_wisata = $vidwisata");
            
      $data = mysqli_fetch_assoc($query);
  ?>
  <!-- Create a container for the map -->
  <div id='map'></div>

  <div class="info-box">
    <div id="info">
      <p>Draw your route using the draw tools on the right. To get the most accurate route match, draw points at regular intervals.</p>
    </div>
    <div id="directions"></div>
  </div>

  <script>
    var lon = "<?= $data['lon'];?>";
    var lat = "<?= $data['lat'];?>";
    // Add your Mapbox access token
    mapboxgl.accessToken = 'pk.eyJ1IjoiZGlhbjk1IiwiYSI6ImNqdHFzaTNtZjBpc280NG80N2EyMnY4bWYifQ.PFVRQig9kQQAKYpwIqf0dg';
    var map = new mapboxgl.Map({
      container: 'map', // Specify the container ID
      style: 'mapbox://styles/mapbox/streets-v11', // Specify which map style to use
      center: [lon, lat], // Specify the starting position 112.631438, -7.986733
      zoom: 14.5, // Specify the starting zoom
    });

    var draw = new MapboxDraw({
      // Instead of showing all the draw tools, show only the line string and delete tools
      displayControlsDefault: false,
      controls: {
        line_string: true,
        trash: true
      },
      styles: [
        // Set the line style for the user-input coordinates
        {
          "id": "gl-draw-line",
          "type": "line",
          "filter": ["all", ["==", "$type", "LineString"],
            ["!=", "mode", "static"]
          ],
          "layout": {
            "line-cap": "round",
            "line-join": "round"
          },
          "paint": {
            "line-color": "#438EE4",
            "line-dasharray": [0.2, 2],
            "line-width": 4,
            "line-opacity": 0.7
          }
        },
        // Style the vertex point halos
        {
          "id": "gl-draw-polygon-and-line-vertex-halo-active",
          "type": "circle",
          "filter": ["all", ["==", "meta", "vertex"],
            ["==", "$type", "Point"],
            ["!=", "mode", "static"]
          ],
          "paint": {
            "circle-radius": 12,
            "circle-color": "#FFF"
          }
        },
        // Style the vertex points
        {
          "id": "gl-draw-polygon-and-line-vertex-active",
          "type": "circle",
          "filter": ["all", ["==", "meta", "vertex"],
            ["==", "$type", "Point"],
            ["!=", "mode", "static"]
          ],
          "paint": {
            "circle-radius": 8,
            "circle-color": "#438EE4",
          }
        },
      ]
    });

    // Add the draw tool to the map
    map.addControl(draw);

    function updateRoute() {
      // Set the profile
      var profile = "driving";
      // Get the coordinates that were drawn on the map
      var data = draw.getAll();
      var lastFeature = data.features.length - 1;
      var coords = data.features[lastFeature].geometry.coordinates;
      // Format the coordinates
      var newCoords = coords.join(';')
      // Set the radius for each coordinate pair to 25 meters
      var radius = [];
      coords.forEach(element => {
        radius.push(25);
      });
      getMatch(newCoords, radius, profile);
    }

    // Make a Map Matching request
    function getMatch(coordinates, radius, profile) {
      // Separate the radiuses with semicolons
      var radiuses = radius.join(';')
      // Create the query
      var query = 'https://api.mapbox.com/matching/v5/mapbox/' + profile + '/' + coordinates + '?geometries=geojson&radiuses=' + radiuses + '&steps=true&access_token=' + mapboxgl.accessToken;

      $.ajax({
        method: 'GET',
        url: query
      }).done(function(data) {
        // Get the coordinates from the response
        var coords = data.matchings[0].geometry;
        // Draw the route on the map
        addRoute(coords);
        getInstructions(data.matchings[0]);
      });
    }

    // Draw the Map Matching route as a new layer on the map
    function addRoute(coords) {
      // If a route is already loaded, remove it
      if (map.getSource('route')) {
        map.removeLayer('route')
        map.removeSource('route')
      } else {
        map.addLayer({
          "id": "route",
          "type": "line",
          "source": {
            "type": "geojson",
            "data": {
              "type": "Feature",
              "properties": {},
              "geometry": coords
            }
          },
          "layout": {
            "line-join": "round",
            "line-cap": "round"
          },
          "paint": {
            "line-color": "#03AA46",
            "line-width": 8,
            "line-opacity": 0.8
          }
        });
      };
    }

    function getInstructions(data) {
      // Target the sidebar to add the instructions
      var directions = document.getElementById('directions');

      var legs = data.legs;
      var tripDirections = [];
      // Output the instructions for each step of each leg in the response object
      for (var i = 0; i < legs.length; i++) {
        var steps = legs[i].steps;
        for (var j = 0; j < steps.length; j++) {
          tripDirections.push('<br><li>' + steps[j].maneuver.instruction) + '</li>';
        }
      }
      directions.innerHTML = "<br><h2>Trip duration: " + Math.floor(data.duration / 60) + "min ????</h2>"  + tripDirections ;
    }

    // If the user clicks the delete draw button, remove the layer if it exists
    function removeRoute() {
      if (map.getSource('route')) {
        map.removeLayer('route');
        map.removeSource('route');
      } else {
        return;
      }
    }

    map.on('draw.create', updateRoute);
    map.on('draw.update', updateRoute);
    map.on('draw.delete', removeRoute);


    var geojsone = {
              type: 'FeatureCollection',
              features: [
                // sukun
                {
                  type: 'Feature',
                  geometry: {
                    type: 'Point',
                    // coordinates: [-122.414, 37.776]
                    coordinates: [lon, lat]
                  },
                  properties: {
                    title: '<?= $data['judul'];?>',
                    description: '<a href=\"#\" target=\"_blank\" title=\"Opens in a new window\">Visit Us</a>'
                  }
                },
              ]
            };
 
            // add markers to map
            geojsone.features.forEach(function(marker) {

              // create a HTML element for each feature
              var el = document.createElement('div');
              el.className = 'marker';

              // make a marker for each feature and add to the map
              new mapboxgl.Marker(el)
                .setLngLat(marker.geometry.coordinates)

                .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                .setHTML('<h4>' + marker.properties.title + '</h4><p>' + marker.properties.description + '</p>'))

                .addTo(map);
            });

  </script>
</body>

</html>