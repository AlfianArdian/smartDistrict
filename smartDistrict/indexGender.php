<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>GIS Application</title>
        <meta name="author" content="luckynvic@gmail.com">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- <link href="ext/customScroll/css/jquery.mCustomScrollbar.css" rel="stylesheet"> -->
        <link href="css/style.default.css" rel="stylesheet">
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />

        <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.4/mapbox-gl-draw.js'></script>
        <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.4/mapbox-gl-draw.css' type='text/css' />
    </head>
    <body>

        <?php include 'koneksi.php'; ?>
           
          <?php
              $queryLowok = mysqli_query($conn, "SELECT * FROM gender_kecamatan WHERE id_kecamatan = 1");
              $dataLowok = mysqli_fetch_assoc($queryLowok);
              //
              $queryKedung = mysqli_query($conn, "SELECT * FROM gender_kecamatan WHERE id_kecamatan = 2");
              $dataKedung = mysqli_fetch_assoc($queryKedung);
              //
              $queryKloj = mysqli_query($conn, "SELECT * FROM gender_kecamatan WHERE id_kecamatan = 3");
              $dataKloj = mysqli_fetch_assoc($queryKloj);
              //
              $queryBlim = mysqli_query($conn, "SELECT * FROM gender_kecamatan WHERE id_kecamatan = 4");
              $dataBlim = mysqli_fetch_assoc($queryBlim);
              //
              $querySuk = mysqli_query($conn, "SELECT * FROM gender_kecamatan WHERE id_kecamatan = 5");
              $dataSuk = mysqli_fetch_assoc($querySuk);
          ?>

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

            .third-level-menu
            {
                position: absolute;
                top: 0;
                right: -150px;
                width: 150px;
                list-style: none;
                padding: 0;
                margin: 0;
                display: none;
            }

            .third-level-menu > li
            {
                height: 30px;
                background: #999999;
            }
            .third-level-menu > li:hover { background: #CCCCCC; }

            .second-level-menu
            {
                position: absolute;
                top: 30px;
                left: 0;
                width: 150px;
                list-style: none;
                padding: 0;
                margin: 0;
                display: none;
            }

            .second-level-menu > li
            {
                position: relative;
                height: 30px;
                background: #999999;
            }
            .second-level-menu > li:hover { background: #CCCCCC; }

            .top-level-menu
            {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .top-level-menu > li
            {
                position: relative;
                float: left;
                height: 50px;
                width: 150px;
                background: #999999;
            }
            .top-level-menu > li:hover { background: #CCCCCC; }

            .top-level-menu li:hover > ul
            {
                /* On hover, display the next level's menu */
                display: inline;
            }


            /* Menu Link Styles */

            .top-level-menu a /* Apply to all links inside the multi-level menu */
            {
                font: bold 14px Arial, Helvetica, sans-serif;
                color: #FFFFFF;
                text-decoration: none;
                padding: 0 0 0 10px;

                /* Make the link cover the entire list item-container */
                display: block;
                line-height: 30px;
            }
            .top-level-menu a:hover { color: #000000; }

            .card {
              /* Add shadows to create the "card" effect */
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              position: fixed;
              background-color: gray;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
              padding: 2px 16px;
            }
            
        </style>

        <nav class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar" >
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GIS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               
                <ul class="top-level-menu"><!-- <ul class="nav navbar-nav"> -->
               
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="browse.php">Education</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 1px;">Mapping</b></a>
                        <ul class="second-level-menu"><!-- <ul class="dropdown-menu"> -->
                            <li style="padding-left: 5px">Based On:</li>
                            <!-- <li><a href="#">Gender</a>
                                    <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li> -->
                           <!--  <li><a href="#">Educational</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li> -->
                            <li><a href="#">Village Boundary</a>
                                    <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                            <li><a href="indexIbadah.php">Worship Place</a></li>
                            <li><a href="indexGender.php">Population</a></li>           
                                    <!-- <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li> -->
                            <!-- <li><a href="#">Age</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li> -->
                            <!-- <li><a href="#">Religious</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li><a href="satelitView.html">Satelit View</a></li>
                    <li><a href="about.html">About</a></li>

                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">Signed in as User</p></li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div id="map-canvas" ></div>
        
                

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- <script src="ext/customScroll/js/jquery.mCustomScrollbar.min.js"></script> -->
        <!-- <script src="ext/customScroll/js/jquery.mousewheel.min.js"></script> -->
        <script src="js/application.js"></script>

        <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.6/mapbox-gl-geocoder.min.js'></script>
        <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.6/mapbox-gl-geocoder.css' type='text/css' />
<?php echo "Loading,,,,"; ?>
        <script>

            mapboxgl.accessToken = 'pk.eyJ1IjoiZGlhbjk1IiwiYSI6ImNqdHFzaTNtZjBpc280NG80N2EyMnY4bWYifQ.PFVRQig9kQQAKYpwIqf0dg';
            var map = new mapboxgl.Map({
                container: 'map-canvas',
                style: 'mapbox://styles/mapbox/streets-v8',
                center: [112.631438, -7.986733],
                zoom: 11
                // hash: true
            });
            

            var Draw = new MapboxDraw({
              displayControlsDefault: false,
              userProperties: true,
              styles: [{
                  'id': 'gl-draw-polygon-fill-inactive',
                  'type': 'fill',
                  'filter': ['all', ['==', 'active', 'false'],
                    ['==', '$type', 'Polygon'],
                    ['!=', 'mode', 'static']
                  ],
                  'paint': {
                    'fill-color': [
                      "case", ['==', ['get', "user_class_id"], 1], "#00ff00", ['==', ['get', "user_class_id"], 2], "#0000ff", ['==', ['get', "user_class_id"], 3], "purple", ['==', ['get', "user_class_id"], 4], "yellow",
                      'cyan'
                    ],
                    'fill-outline-color': '#3bb2d0',
                    'fill-opacity': 0.5
                  }
                },
                // {
                //   'id': 'gl-draw-polygon-fill-active',
                //   'type': 'fill',
                //   'filter': ['all', ['==', 'active', 'true'],
                //     ['==', '$type', 'Polygon']
                //   ],
                //   'paint': {
                //     'fill-color': '#fbb03b',
                //     'fill-outline-color': '#fbb03b',
                //     'fill-opacity': 0.1
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-midpoint',
                //   'type': 'circle',
                //   'filter': ['all', ['==', '$type', 'Point'],
                //     ['==', 'meta', 'midpoint']
                //   ],
                //   'paint': {
                //     'circle-radius': 3,
                //     'circle-color': '#fbb03b'
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-stroke-inactive',
                //   'type': 'line',
                //   'filter': ['all', ['==', 'active', 'false'],
                //     ['==', '$type', 'Polygon'],
                //     ['!=', 'mode', 'static']
                //   ],
                //   'layout': {
                //     'line-cap': 'round',
                //     'line-join': 'round'
                //   },
                //   'paint': {
                //     'line-color': '#3bb2d0',
                //     'line-width': 2
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-stroke-active',
                //   'type': 'line',
                //   'filter': ['all', ['==', 'active', 'true'],
                //   ['==', '$type', 'Polygon']
                //   ],
                //   'layout': {
                //     'line-cap': 'round',
                //     'line-join': 'round'
                //   },
                //   'paint': {
                //     'line-color': '#fbb03b',
                //     'line-dasharray': [0.2, 2],
                //     'line-width': 2
                //   }
                // },
                // {
                //   'id': 'gl-draw-line-inactive',
                //   'type': 'line',
                //   'filter': ['all', ['==', 'active', 'false'],
                //     ['==', '$type', 'LineString'],
                //     ['!=', 'mode', 'static']
                //   ],
                //   'layout': {
                //     'line-cap': 'round',
                //     'line-join': 'round'
                //   },
                //   'paint': {
                //     'line-color': '#3bb2d0',
                //     'line-width': 2
                //   }
                // },
                // {
                //   'id': 'gl-draw-line-active',
                //   'type': 'line',
                //   'filter': ['all', ['==', '$type', 'LineString'],
                //     ['==', 'active', 'true']
                //   ],
                //   'layout': {
                //     'line-cap': 'round',
                //     'line-join': 'round'
                //   },
                //   'paint': {
                //     'line-color': '#fbb03b',
                //     'line-dasharray': [0.2, 2],
                //     'line-width': 2
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-and-line-vertex-stroke-inactive',
                //   'type': 'circle',
                //   'filter': ['all', ['==', 'meta', 'vertex'],
                //     ['==', '$type', 'Point'],
                //     ['!=', 'mode', 'static']
                //   ],
                //   'paint': {
                //     'circle-radius': 5,
                //     'circle-color': '#fff'
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-and-line-vertex-inactive',
                //   'type': 'circle',
                //   'filter': ['all', ['==', 'meta', 'vertex'],
                //     ['==', '$type', 'Point'],
                //     ['!=', 'mode', 'static']
                //   ],
                //   'paint': {
                //     'circle-radius': 3,
                //     'circle-color': '#fbb03b'
                //   }
                // },
                // {
                //   'id': 'gl-draw-point-point-stroke-inactive',
                //   'type': 'circle',
                //   'filter': ['all', ['==', 'active', 'false'],
                //     ['==', '$type', 'Point'],
                //     ['==', 'meta', 'feature'],
                //     ['!=', 'mode', 'static']
                //   ],
                //   'paint': {
                //     'circle-radius': 5,
                //     'circle-opacity': 1,
                //     'circle-color': '#fff'
                //   }
                // },
                // {
                //   'id': 'gl-draw-point-inactive',
                //   'type': 'circle',
                //   'filter': ['all', ['==', 'active', 'false'],
                //     ['==', '$type', 'Point'],
                //     ['==', 'meta', 'feature'],
                //     ['!=', 'mode', 'static']
                //   ],
                //   'paint': {
                //     'circle-radius': 3,
                //     'circle-color': '#3bb2d0'
                //   }
                // },
                // {
                //   'id': 'gl-draw-point-stroke-active',
                //   'type': 'circle',
                //   'filter': ['all', ['==', '$type', 'Point'],
                //     ['==', 'active', 'true'],
                //     ['!=', 'meta', 'midpoint']
                //   ],
                //   'paint': {
                //     'circle-radius': 7,
                //     'circle-color': '#fff'
                //   }
                // },
                // {
                //   'id': 'gl-draw-point-active',
                //   'type': 'circle',
                //   'filter': ['all', ['==', '$type', 'Point'],
                //     ['!=', 'meta', 'midpoint'],
                //     ['==', 'active', 'true']
                //   ],
                //   'paint': {
                //     'circle-radius': 5,
                //     'circle-color': '#fbb03b'
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-fill-static',
                //   'type': 'fill',
                //   'filter': ['all', ['==', 'mode', 'static'],
                //     ['==', '$type', 'Polygon']
                //   ],
                //   'paint': {
                //     'fill-color': '#404040',
                //     'fill-outline-color': '#404040',
                //     'fill-opacity': 0.1
                //   }
                // },
                // {
                //   'id': 'gl-draw-polygon-stroke-static',
                //   'type': 'line',
                //   'filter': ['all', ['==', 'mode', 'static'],
                //     ['==', '$type', 'Polygon']
                //   ],
                //   'layout': {
                //     'line-cap': 'round',
                //     'line-join': 'round'
                //   },
                //   'paint': {
                //     'line-color': '#404040',
                //     'line-width': 2
                //   }
                // },
                // {
                //   'id': 'gl-draw-line-static',
                //   'type': 'line',
                //   'filter': ['all', ['==', 'mode', 'static'],
                //     ['==', '$type', 'LineString']
                //   ],
                //   'layout': {
                //     'line-cap': 'round',
                //     'line-join': 'round'
                //   },
                //   'paint': {
                //     'line-color': '#404040',
                //     'line-width': 2
                //   }
                // },
                // {
                //   'id': 'gl-draw-point-static',
                //   'type': 'circle',
                //   'filter': ['all', ['==', 'mode', 'static'],
                //     ['==', '$type', 'Point']
                //   ],
                //   'paint': {
                //     'circle-radius': 5,
                //     'circle-color': '#404040'
                //   }
                // }
              ]
            });
            map.addControl(Draw);//, 'top-left'
            // Draw.remove()
            map.on('load', (e) => {
              Draw.set(geoJSON)
            });

            var geoJSON = {
              "type": "FeatureCollection",
              "features": [{
                  "type": "Feature",
                  "properties": {
                    "class_id": 1 // blimbing
                  },
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.639432, -7.921114], //1
                        [112.637029, -7.925705],
                        [112.639260, -7.928085],
                        [112.637544, -7.929955],
                        [112.641149, -7.931655],
                        [112.642179, -7.933525],
                        [112.640634, -7.938456],
                        [112.636858, -7.944916],
                        [112.638059, -7.946106],
                        [112.637888, -7.952737],
                        [112.638746, -7.952907],
                        [112.636687, -7.960557], //12
                        [112.639433, -7.962257],
                        [112.638232, -7.963958],
                        [112.639434, -7.965148],
                        [112.637888, -7.967187],
                        [112.638261, -7.978474],
                        [112.635518, -7.987051],
                        [112.645480, -7.993198],//19
                        [112.649233, -7.987193],
                        [112.648943, -7.983905],
                        [112.650964, -7.979330],
                        [112.650675, -7.975184],
                        [112.653082, -7.971167],
                        [112.654715, -7.970661],
                        [112.654409, -7.968033],
                        [112.657165, -7.964889],
                        [112.658900, -7.963787],
                        [112.659206, -7.961866],
                        [112.661350, -7.960249],//30
                        [112.662166, -7.959036],
                        [112.663493, -7.958631],
                        [112.664311, -7.950443],
                        [112.663698, -7.948017],
                        [112.665637, -7.945894],
                        [112.666250, -7.947107],
                        [112.665637, -7.948320],
                        [112.666965, -7.948623],
                        [112.666760, -7.947208],
                        [112.668292, -7.947208],
                        [112.668496, -7.945793],
                        [112.667372, -7.944074],
                        [112.665229, -7.942861],
                        [112.664412, -7.940334],
                        [112.665535, -7.939222],
                        [112.664922, -7.936391],
                        [112.662064, -7.931943],
                        [112.662778, -7.931033],
                        [112.661859, -7.927899],
                        [112.662880, -7.926989],
                        [112.649712, -7.919712],
                        [112.649712, -7.917993],
                        [112.645834, -7.916376],
                        [112.645834, -7.913747],
                        [112.645630, -7.914455],
                        [112.644303, -7.914859],
                        [112.642772, -7.918094],
                        [112.642976, -7.919308],
                        [112.641853, -7.919308],
                        [112.639432, -7.921114]
                      ]
                    ]
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "class_id": 2 //kedungkandang
                  },
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.659439, -7.965923],
                        
                        [112.657165, -7.964889],
                        [112.654409, -7.968033],
                        [112.654715, -7.970661],
                        [112.653082, -7.971167],
                        [112.650675, -7.975184],
                        [112.650964, -7.979330],
                        [112.648943, -7.983905],
                        [112.649233, -7.987193],
                        [112.645480, -7.993198],//19
                        [112.635518, -7.987051],//18
                        [112.630240, -8.003287],//2
                        [112.631215, -8.004217],
                        [112.630614, -8.004642],
                        [112.631215, -8.009572],
                        [112.631816, -8.011612],
                        [112.631505, -8.012653],
                        [112.631741, -8.013588],
                        [112.631548, -8.014289],
                        [112.631591, -8.015702],
                        [112.631484, -8.016350],
                        [112.631441, -8.016849],
                        [112.631988, -8.018644],
                        [112.633415, -8.020248],
                        [112.633522, -8.020577],//
                        [112.633404, -8.021947],
                        [112.633071, -8.022861],
                        [112.632856, -8.023435],
                        [112.632030, -8.024529],
                        [112.631451, -8.025719],//*
                        [112.629291, -8.030201],
                        [112.629098, -8.032071],
                        [112.629079, -8.032684],
                        [112.629186, -8.033183],//**
                        [112.629100, -8.034001],
                        [112.630699, -8.034968],
                        [112.630806, -8.035223],
                        [112.630742, -8.035892],
                        [112.631043, -8.036823],
                        [112.631244, -8.038219],
                        [112.631206, -8.039112],
                        [112.630755, -8.041354],
                        [112.631603, -8.043946],
                        [112.631464, -8.046081],

                        [112.634978, -8.046583],
                        [112.635665, -8.047433],
                        [112.642360, -8.049728],
                        [112.645364, -8.048367],// 5
                        [112.645193, -8.049897],
                        [112.645536, -8.051173],
                        [112.648798, -8.048028],
                        [112.652918, -8.049983],
                        [112.656781, -8.050068],
                        [112.657382, -8.045903],
                        [112.662016, -8.040208],
                        [112.665364, -8.040803],
                        [112.667853, -8.035109],
                        [112.667853, -8.035024],
                        [112.672745, -8.031964],
                        [112.674033, -8.029159],
                        [112.674634, -8.028904],
                        [112.675406, -8.027714],
                        [112.672058, -8.024739],
                        [112.673123, -8.018475],
                        [112.673002, -8.014965],
                        [112.672744, -8.011310],
                        [112.672744, -8.011225],
                        [112.672057, -8.008931], // 6
                        [112.678924, -8.010120],
                        [112.679353, -8.005360],
                        [112.680984, -8.005870],
                        [112.681241, -8.004765],
                        [112.683044, -8.005275],
                        [112.683473, -8.004510],
                        [112.684331, -8.004935],
                        [112.689309, -7.996859],
                        [112.693172, -7.987594],
                        [112.693687, -7.987339],
                        [112.694192, -7.986542],
                        [112.693905, -7.986222],
                        [112.694451, -7.984847],
                        [112.694040, -7.984405],
                        [112.694660, -7.982722], //7
                        [112.688708, -7.980624],
                        [112.689638, -7.977199],
                        [112.689989, -7.976363],
                        [112.689650, -7.975501],
                        [112.685875, -7.975980],
                        [112.684392, -7.974754],
                        [112.682957, -7.975440],
                        [112.681498, -7.975249],
                        [112.680844, -7.976641],
                        [112.680436, -7.976811],
                        [112.678476, -7.976625],
                        [112.678150, -7.975441],
                        [112.677377, -7.975611],
                        [112.675597, -7.974499],
                        [112.676262, -7.972381],
                        [112.675918, -7.972212],
                        [112.675489, -7.972721],
                        [112.668023, -7.969237], // 8
                        [112.666391, -7.970852],
                        [112.662958, -7.971278],
                        [112.662700, -7.970513],
                        [112.663730, -7.968387],

                        [112.659439, -7.965923]// awal akhir

                      ]
                    ]
                  }
                },
                // {
                //   "type": "Feature",
                //   "properties": {},
                //   "geometry": {
                //     "type": "Point",
                //     "coordinates": [
                //       112.599716, -7.976297
                //     ]
                //   }
                // },
                // {
                //   "type": "Feature",
                //   "properties": {},
                //   "geometry": {
                //     "type": "LineString",
                //     "coordinates": [
                //       [
                //         112.589716, -7.986297
                //       ],
                //       [
                //         112.579716, -7.976297
                //       ]
                //     ]
                //   }
                // },
                {
                  "type": "Feature",
                  "properties": {"class_id": 3}, //sukun
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.629197, -8.033304],

                        [112.622007, -8.029492],
                        [112.622012, -8.028470],
                        [112.620810, -8.027960],
                        [112.620895, -8.027450],
                        [112.617719, -8.026515], //2
                        [112.618835, -8.023455],
                        [112.613426, -8.020990],
                        [112.613597, -8.019375],
                        [112.615315, -8.019205],
                        [112.617975, -8.016400],
                        [112.617289, -8.015550],
                        [112.618661, -8.011385],
                        [112.617287, -8.010620],
                        [112.616944, -8.009940],
                        [112.616000, -8.009940],
                        [112.613425, -8.015125],
                        [112.609305, -8.016656],// 4
                        [112.608619, -8.019036],
                        [112.608018, -8.019036],
                        [112.606988, -8.017761],
                        [112.606558, -8.015381],
                        [112.607245, -8.012831],
                        [112.605527, -8.010727],
                        [112.601225, -8.007040],
                        [112.601064, -8.006626],
                        [112.600141, -8.006328],
                        [112.600023, -8.006710],
                        [112.599637, -8.006859],
                        [112.598586, -8.006190],
                        [112.597245, -8.005999], //5
                        [112.597887, -8.003823],
                        [112.598059, -8.001781],
                        [112.599314, -7.999199],
                        [112.601321, -7.992601],
                        [112.600087, -7.991368],
                        [112.598842, -7.994227],
                        [112.598617, -7.995863],
                        [112.598316, -7.996022],
                        [112.595484, -7.994099],
                        [112.592437, -7.993918],
                        [112.589121, -7.992358],
                        [112.591278, -7.986142], //6
                        [112.588381, -7.985281],
                        [112.587072, -7.986737],
                        [112.586267, -7.986737],
                        [112.586074, -7.987003],
                        [112.583542, -7.986939],
                        [112.582877, -7.987268],
                        [112.582115, -7.987024],
                        [112.581237, -7.987104],
                        [112.579907, -7.985755],
                        [112.578200, -7.984809],
                        [112.581731, -7.980134],
                        [112.585507, -7.982004],
                        [112.585593, -7.982684],
                        [112.587653, -7.983024],
                        [112.588682, -7.982259],
                        [112.590431, -7.982584],
                        [112.592790, -7.984952],
                        [112.597973, -7.984526], //7
                        [112.599154, -7.981750],
                        [112.597780, -7.981155],
                        [112.598467, -7.979539],
                        [112.589466, -7.975216],
                        [112.591086, -7.973080],
                        [112.593232, -7.973250],
                        [112.593918, -7.973972],
                        [112.595850, -7.973452],
                        [112.598746, -7.974584],
                        [112.599860, -7.972117], //8
                        [112.600805, -7.972605],
                        [112.602693, -7.971606],
                        [112.602911, -7.970003],
                        [112.602178, -7.967101],
                        [112.600954, -7.966527],
                        [112.600471, -7.965518],
                        [112.599291, -7.965433],
                        [112.597961, -7.963095],
                        [112.599420, -7.959706],
                        [112.599023, -7.959153],
                        [112.599356, -7.956773],
                        [112.596094, -7.954957],
                        [112.591792, -7.954936],
                        [112.591095, -7.955701],
                        [112.589818, -7.954267], // 9
                        [112.590075, -7.950186],
                        [112.590569, -7.949527],
                        [112.591781, -7.949984],
                        [112.592575, -7.948018],// 10
                        [112.598572, -7.950271],
                        [112.600460, -7.949739],
                        [112.601147, -7.951035],
                        [112.603550, -7.950015], //11
                        [112.603035, -7.953415], //12
                        [112.604495, -7.954520],
                        [112.606200, -7.954233],
                        [112.607928, -7.954286], //13
                        [112.606211, -7.958261],
                        [112.607585, -7.958516],
                        [112.607735, -7.960004],
                        [112.607896, -7.960258],
                        [112.608615, -7.960726],
                        [112.608786, -7.961915],
                        [112.612563, -7.962510],
                        [112.613454, -7.963859], //14
                        [112.612134, -7.971606],
                        [112.613124, -7.971868], //15
                        [112.612135, -7.977215], //16
                        [112.614474, -7.981433],
                        [112.614141, -7.983611], //17
                        [112.622994, -7.983323], //18
                        [112.622522, -7.984779],
                        [112.622232, -7.985416],
                        [112.623338, -7.987658],
                        [112.622458, -7.988201],
                        [112.622308, -7.988690],
                        [112.623359, -7.987626],
                        [112.622973, -7.988115],
                        [112.622243, -7.988423],
                        [112.622704, -7.989847],
                        [112.622833, -7.992737],
                        [112.623391, -7.992822],
                        [112.624100, -7.995914],
                        [112.623606, -7.997360],
                        [112.623681, -7.997966],
                        [112.623091, -7.997934],
                        [112.623154, -7.998783], //19
                        [112.625463, -7.998974], //20
                        [112.625817, -7.996233],
                        [112.626418, -7.996466],
                        [112.628757, -7.991174], //21
                        [112.630988, -7.991951],
                        [112.631278, -7.992896],
                        [112.633458, -7.993551],

                        [112.630240, -8.003287],//2
                        [112.631215, -8.004217],
                        [112.630614, -8.004642],
                        [112.631215, -8.009572],
                        [112.631816, -8.011612],
                        [112.631505, -8.012653],
                        [112.631741, -8.013588],
                        [112.631548, -8.014289],
                        [112.631591, -8.015702],
                        [112.631484, -8.016350],
                        [112.631441, -8.016849],
                        [112.631988, -8.018644],
                        [112.633415, -8.020248],
                        [112.633522, -8.020577],//
                        [112.633404, -8.021947],
                        [112.633071, -8.022861],
                        [112.632856, -8.023435],
                        [112.632030, -8.024529],
                        [112.631451, -8.025719],//*
                        [112.629291, -8.030201],
                        [112.629098, -8.032071],
                        [112.629079, -8.032684],
                        [112.629186, -8.033183],//**

                        [112.629197, -8.033304]
                      ]
                    ]
                  }
                },
                {
                  "type": "Feature",
                  "properties": {"class_id": 4}, //lowokwaru
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.592575, -7.948018],// 10 skn

                        [112.598572, -7.950271],
                        [112.600460, -7.949739],
                        [112.601147, -7.951035],
                        [112.603550, -7.950015], //11 skn
                        [112.603035, -7.953415], //12 skn
                        [112.604495, -7.954520],
                        [112.606200, -7.954233],
                        [112.607928, -7.954286], //13 skn
                        [112.606211, -7.958261],
                        [112.607585, -7.958516],
                        [112.607735, -7.960004],
                        [112.607896, -7.960258],
                        [112.608615, -7.960726],
                        [112.608786, -7.961915],
                        [112.612563, -7.962510],
                        [112.613454, -7.963859], //14 skn
                        [112.614391, -7.964035], //1
                        [112.619191, -7.966722], //2
                        [112.620782, -7.964200],
                        [112.621597, -7.963658], //4
                        [112.621090, -7.961419],
                        [112.621519, -7.960090], //5
                        [112.615509, -7.956159],
                        [112.616539, -7.955171],
                        [112.616217, -7.955022],
                        [112.616786, -7.952291],
                        [112.615584, -7.951675],
                        [112.616701, -7.950399], //9
                        [112.623729, -7.956074],
                        [112.624555, -7.956159],
                        [112.624545, -7.956902],
                        [112.625747, -7.957731],
                        [112.630403, -7.960228],
                        [112.631423, -7.960791],
                        [112.630436, -7.962087], //10
                        [112.634849, -7.964518],
                        [112.636687, -7.960557], // 12 blb
                        [112.638746, -7.952907],
                        [112.637888, -7.952737],
                        [112.638059, -7.946106],
                        [112.636858, -7.944916],
                        [112.640634, -7.938456],
                        [112.642179, -7.933525],
                        [112.641149, -7.931655],
                        [112.637544, -7.929955],
                        [112.639260, -7.928085],
                        [112.637029, -7.925705],
                        [112.639432, -7.921114], //1 blb
                        [112.638103, -7.918831],
                        [112.631343, -7.912355],
                        [112.630474, -7.911972],
                        [112.630206, -7.911037],
                        [112.627735, -7.911330],
                        [112.626053, -7.913588],
                        [112.624680, -7.913844],
                        [112.623907, -7.915714],
                        [112.620817, -7.918095],
                        [112.618757, -7.918010],
                        [112.617716, -7.919848],
                        [112.616697, -7.919540],
                        [112.615067, -7.920391],
                        [112.613050, -7.919774],
                        [112.612674, -7.920072],
                        [112.610667, -7.919669], //11
                        [112.611204, -7.922856],
                        [112.609144, -7.923706],
                        [112.602438, -7.921423],
                        [112.600904, -7.923664],
                        [112.599638, -7.923495],
                        [112.599992, -7.923144],
                        [112.599992, -7.922570],
                        [112.599016, -7.921911],
                        [112.598093, -7.922028],
                        [112.597417, -7.923006],
                        [112.596269, -7.920222],
                        [112.595014, -7.920052],
                        [112.594220, -7.918437],
                        [112.593308, -7.918139],
                        [112.592836, -7.917502],
                        [112.591902, -7.917268],
                        [112.591356, -7.917853],
                        [112.592664, -7.918777],
                        [112.593426, -7.918947],
                        [112.594038, -7.920052],
                        [112.593265, -7.923113], //12
                        [112.595218, -7.923272],
                        [112.595379, -7.922433],
                        [112.596183, -7.922688],
                        [112.596645, -7.923389],
                        [112.597299, -7.923453],
                        [112.599960, -7.926343],
                        [112.598930, -7.930253],
                        [112.597471, -7.929913],
                        [112.597471, -7.931614],
                        [112.598297, -7.932538],
                        [112.597900, -7.933399],
                        [112.598759, -7.934674],
                        [112.598276, -7.935184],
                        [112.598898, -7.935450],
                        [112.598502, -7.936714],
                        [112.597182, -7.937277],
                        [112.596270, -7.936799],
                        [112.596012, -7.937649],
                        [112.589758, -7.936013],
                        [112.585369, -7.936630], //13
                        [112.585263, -7.937852],
                        [112.580123, -7.937299],
                        [112.580209, -7.936587],
                        [112.578761, -7.936481],
                        [112.578331, -7.936885],
                        [112.574168, -7.935589],
                        [112.573546, -7.935865],
                        [112.570778, -7.935695],
                        [112.570864, -7.936492],
                        [112.569576, -7.936800],
                        [112.569061, -7.938755], //14
                        [112.570864, -7.939010],
                        [112.570950, -7.939520],
                        [112.575241, -7.941730],
                        [112.575842, -7.941475],
                        [112.577376, -7.942909],
                        [112.579994, -7.943175],
                        [112.581593, -7.944876],
                        [112.583310, -7.945385],
                        [112.583653, -7.946236],
                        [112.586743, -7.947766],

                        [112.592575, -7.948018]
                      ]
                    ]
                  }
                },
                {
                  "type": "Feature",
                  "properties": {}, //klojen
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.619191, -7.966722], //2 lwk

                        [112.620782, -7.964200],
                        [112.621597, -7.963658], //4 lwk
                        [112.621090, -7.961419],
                        [112.621519, -7.960090], //5 lwk
                        [112.615509, -7.956159],
                        [112.616539, -7.955171],
                        [112.616217, -7.955022],
                        [112.616786, -7.952291],
                        [112.615584, -7.951675],
                        [112.616701, -7.950399], //9 lwk
                        [112.623729, -7.956074],
                        [112.624555, -7.956159],
                        [112.624545, -7.956902],
                        [112.625747, -7.957731],
                        [112.630403, -7.960228],
                        [112.631423, -7.960791],
                        [112.630436, -7.962087], //10 lwk
                        [112.634849, -7.964518],
                        [112.636687, -7.960557], // 12 blb
                        [112.639433, -7.962257], // 13 blb
                        [112.638232, -7.963958], // 14 blb
                        [112.639434, -7.965148], // 15 blb
                        [112.637888, -7.967187], // 16 blb
                        [112.638261, -7.978474], // 17 blb
                        [112.635518, -7.987051], // 18 blb
                        [112.633458, -7.993551], //24 skn
                        [112.631278, -7.992896], //23 skn
                        [112.630988, -7.991951], //22 skn
                        
                        [112.628757, -7.991174], //21
                        [112.626418, -7.996466],
                        [112.625817, -7.996233],
                        [112.625463, -7.998974], //20
                        [112.623154, -7.998783], //19
                        [112.623091, -7.997934],
                        [112.623681, -7.997966],
                        [112.623606, -7.997360],
                        [112.624100, -7.995914],
                        [112.623391, -7.992822],
                        [112.622833, -7.992737],
                        [112.622704, -7.989847],
                        [112.622243, -7.988423],
                        [112.622973, -7.988115],
                        [112.623359, -7.987626],
                        [112.622308, -7.988690],
                        [112.622458, -7.988201],
                        [112.623338, -7.987658],
                        [112.622232, -7.985416],
                        [112.622522, -7.984779],
                        [112.622994, -7.983323], //18
                        [112.614141, -7.983611], //17
                        [112.614474, -7.981433],
                        [112.612135, -7.977215], //16
                        [112.613124, -7.971868], //15
                        [112.612134, -7.971606],
                        [112.613454, -7.963859], //14 skn
                        [112.614391, -7.964035], //1 lwk

                        [112.619191, -7.966722]
                      ]
                    ]
                  }
                }
              ]
            }


            map.addControl(new MapboxGeocoder({
                accessToken: mapboxgl.accessToken
            }));




            var geojsone = {
              type: 'FeatureCollection',
              features: [
                // blimbing
                {
                  type: 'Feature',
                  geometry: {
                    type: 'Point',
                    // coordinates: [-77.032, 38.913]
                    coordinates: [112.651932, -7.930152]
                  },
                  properties: {
                    title: 'Blimbing District<br><br>Laki-laki: <?= $dataBlim['Laki-laki'];?><br>Perempuan: <?= $dataBlim['Perempuan'];?>',
                    description: '<a href=\"blimbing.php\" target=\"_blank\" title=\"Opens in a new window\">Subdistrict<br></a>'
                  }
                },
              // klojen
                {
                  type: 'Feature',
                  geometry: {
                    type: 'Point',
                    // coordinates: [-122.414, 37.776]
                    coordinates: [112.618011, -7.966252]
                  },
                  properties: {
                    title: 'Klojen District<br><br>Laki-laki: <?= $dataKloj['Laki-laki'];?><br>Perempuan: <?= $dataKloj['Perempuan'];?>',
                    description: '<a href=\"klojen.php\" target=\"_blank\" title=\"Opens in a new window\">Subdistrict</a>'
                  }
                },
              // lowokwaru
                {
                  type: 'Feature',
                  geometry: {
                    type: 'Point',
                    // coordinates: [-122.414, 37.776]
                    coordinates: [112.630447, -7.946053]
                  },
                  properties: {
                    title: 'Lowokwaru District<br><br>Laki-laki: <?= $dataLowok['Laki-laki'];?><br>Perempuan: <?= $dataLowok['Perempuan'];?>',
                    description: '<a href=\"lowokwaru.php\" target=\"_blank\" title=\"Opens in a new window\">Subdistrict</a>'
                  }
                },
                // kedungkandang
                {
                  type: 'Feature',
                  geometry: {
                    type: 'Point',
                    // coordinates: [-122.414, 37.776]
                    coordinates: [112.643684, -8.011824]
                  },
                  properties: {
                    title: 'Kedungkandang District<br><br>Laki-laki: <?= $dataKedung['Laki-laki'];?><br>Perempuan: <?= $dataKedung['Perempuan'];?>',
                    description: '<a href=\"lowokwaru.php\" target=\"_blank\" title=\"Opens in a new window\">Subdistrict</a>'
                  }
                },
                // sukun
                {
                  type: 'Feature',
                  geometry: {
                    type: 'Point',
                    // coordinates: [-122.414, 37.776]
                    coordinates: [112.630338, -8.004849]
                  },
                  properties: {
                    title: 'Sukun District<br><br>Laki-laki: <?= $dataSuk['Laki-laki'];?><br>Perempuan: <?= $dataSuk['Perempuan'];?>',
                    description: '<a href=\"sukun.php\" target=\"_blank\" title=\"Opens in a new window\">Subdistrict</a>'
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
