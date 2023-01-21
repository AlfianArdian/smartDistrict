<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>Lowokwaru District</title>
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
               
                    <li class="active"><a href="index.php">Home</a></li>
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
<?php echo "coba"; ?>
        <script>

            mapboxgl.accessToken = 'pk.eyJ1IjoiZGlhbjk1IiwiYSI6ImNqdHFzaTNtZjBpc280NG80N2EyMnY4bWYifQ.PFVRQig9kQQAKYpwIqf0dg';
            var map = new mapboxgl.Map({
                container: 'map-canvas',
                style: 'mapbox://styles/mapbox/dark-v8',
                center: [112.617043, -7.939178],
                zoom: 12.3
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
                      "case", ['==', ['get', "user_class_id"], 1], "orange", 
                                ['==', ['get', "user_class_id"], 2], "lime", 
                                ['==', ['get', "user_class_id"], 3], "purple", 
                                ['==', ['get', "user_class_id"], 4], "yellow",
                                ['==', ['get', "user_class_id"], 5], "red",
                                ['==', ['get', "user_class_id"], 6], "navy",
                                ['==', ['get', "user_class_id"], 7], "green",
                                ['==', ['get', "user_class_id"], 8], "olive",
                                ['==', ['get', "user_class_id"], 9], "fuchsia",
                                ['==', ['get', "user_class_id"], 10], "teal",
                      'cyan'
                    ],
                    'fill-outline-color': '#3bb2d0',
                    'fill-opacity': 0.8
                  }
                },
                
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
                    "class_id": 1 // tlogomas
                  },
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.60523, -7.92206],

                        [112.60523, -7.92544],
                        [112.61019, -7.93408],
                        [112.61364, -7.93913],
                        [112.61613, -7.94075],
                        [112.61596, -7.94313],
                        [112.61518, -7.94517],
                        [112.61518, -7.94636],
                        [112.61312, -7.94738],
                        [112.61176, -7.94780],
                        [112.61057, -7.94703],
                        [112.60995, -7.94695],
                        [112.60909, -7.94772],
                        [112.60727, -7.94783],
                        [112.60360, -7.94678],
                        [112.60231, -7.94610],
                        [112.60124, -7.94413],
                        [112.59957, -7.93937],
                        [112.60034, -7.93879],
                        [112.60154, -7.92746],
                        [112.60359, -7.92307],

                        [112.60523, -7.92206]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {
                    "class_id": 2 //tasikmadu
                  },
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.6177, -7.92268],

                        [112.62239, -7.92349],
                        [112.62840, -7.92272],
                        [112.63100, -7.92120],
                        [112.63518, -7.92519],
                        [112.63922, -7.92893],
                        [112.64274, -7.93055],
                        [112.64308, -7.93386],
                        [112.64282, -7.93709],
                        [112.64214, -7.93879],
                        [112.63982, -7.93616],
                        [112.63805, -7.93580],
                        [112.63484, -7.93344],
                        [112.63361, -7.93379],
                        [112.63276, -7.93487],
                        [112.63277, -7.93558],
                        [112.63183, -7.93644],
                        [112.62810, -7.93602],
                        [112.62640, -7.93530],
                        [112.62436, -7.93503],
                        [112.62239, -7.93356],
                        [112.61876, -7.92515],

                        [112.6177, -7.92268]
                      ]
                    ]
                  }
                },

                
                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 3}, //purwodadi
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.60790, -7.92067],

                //         [112.61776, -7.92289],
                //         [112.62102, -7.93059],
                //         [112.62248, -7.93500],
                //         [112.62463, -7.93573],
                //         [112.62639, -7.93794],
                //         [112.62632, -7.94117],
                //         [112.62557, -7.94245],
                //         [112.62439, -7.94236],
                //         [112.62294, -7.94223],
                //         [112.62075, -7.94361],
                //         [112.62020, -7.94066],
                //         [112.61922, -7.93963],
                //         [112.61813, -7.93955],
                //         [112.61687, -7.94074],
                //         [112.61440, -7.93989],
                //         [112.61295, -7.93854],
                //         [112.61227, -7.93726],
                //         [112.61129, -7.93611],
                //         [112.60978, -7.93352],
                //         [112.60915, -7.93202],
                //         [112.60806, -7.93055],
                //         [112.60532, -7.92503],
                //         [112.60506, -7.92230],
                //         [112.60643, -7.92187],

                //         [112.60790, -7.92067]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 4}, //polowijen
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.64259, -7.93761],

                //         [112.64359, -7.93841],
                //         [112.64746, -7.93917],
                //         [112.64729, -7.94007],
                //         [112.64792, -7.94129],
                //         [112.64806, -7.94427],
                //         [112.65396, -7.94695],
                //         [112.65595, -7.94742],
                //         [112.65488, -7.94780],
                //         [112.65432, -7.94823],
                //         [112.65390, -7.94911],
                //         [112.65133, -7.94802],
                //         [112.64934, -7.94681],
                //         [112.64760, -7.94568],
                //         [112.64634, -7.94444],
                //         [112.64258, -7.94233],
                //         [112.64008, -7.94104],
                //         [112.64166, -7.93964],

                //         [112.64259, -7.93761]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 5}, //pandanwangi
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.65788, -7.94714],

                //         [112.65896, -7.95435],
                //         [112.65750, -7.96404],
                //         [112.65793, -7.96489],
                //         [112.65488, -7.96637],
                //         [112.65373, -7.96745],
                //         [112.65140, -7.96787],
                //         [112.65098, -7.96880],
                //         [112.64952, -7.96880],
                //         [112.64839, -7.96701],
                //         [112.64760, -7.96657],
                //         [112.64789, -7.96520],
                //         [112.65126, -7.96103],
                //         [112.65099, -7.95890],
                //         [112.64813, -7.95685],
                //         [112.64949, -7.95430],
                //         [112.65004, -7.95223],
                //         [112.64908, -7.95113],
                //         [112.64978, -7.95028],
                //         [112.65065, -7.95002],
                //         [112.65318, -7.95146],
                //         [112.65398, -7.95171],
                //         [112.65458, -7.95010],
                //         [112.65385, -7.94912],
                //         [112.65452, -7.94804],//8
                //         [112.65578, -7.94746],

                //         [112.65788, -7.94714]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 6}, //arjosari
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.64736, -7.93925],

                //         [112.65033, -7.94011],
                //         [112.65267, -7.94133],
                //         [112.65349, -7.94192],
                //         [112.65450, -7.94215],
                //         [112.65784, -7.94721],
                //         [112.65709, -7.94738],
                //         [112.65617, -7.94755],
                //         [112.65407, -7.94691],
                //         [112.64806, -7.94440],
                //         [112.64789, -7.94118],
                //         [112.64720, -7.94015],

                //         [112.64736, -7.93925]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 7}, //jodipan
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.63855, -7.97958],

                //         [112.63951, -7.98011],
                //         [112.64061, -7.98095],
                //         [112.64098, -7.98218],
                //         [112.64087, -7.98336],
                //         [112.64225, -7.98432],
                //         [112.64451, -7.98502],
                //         [112.64603, -7.98588],
                //         [112.64496, -7.98739],
                //         [112.64367, -7.98789],
                //         [112.64144, -7.98673],
                //         [112.64049, -7.98625],
                //         [112.63955, -7.98578],
                //         [112.63829, -7.98486],
                //         [112.63702, -7.98397],
                //         [112.63751, -7.98252],
                //         [112.63802, -7.98109],

                //         [112.63855, -7.97958]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 8}, //polehan
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.64681, -7.97354],

                //         [112.64861, -7.97385],
                //         [112.64967, -7.97377],
                //         [112.64913, -7.97541],
                //         [112.64923, -7.97772],
                //         [112.64849, -7.97993],
                //         [112.64776, -7.98318],
                //         [112.64675, -7.98486],
                //         [112.64602, -7.9859],
                //         [112.64452, -7.98501],
                //         [112.64224, -7.98433],
                //         [112.64088, -7.98337],
                //         [112.64099, -7.9822],
                //         [112.64071, -7.9813],
                //         [112.6419, -7.98047],
                //         [112.64282, -7.97959],
                //         [112.64363, -7.97838],
                //         [112.6443, -7.97811],
                //         [112.64546, -7.97884],
                //         [112.64697, -7.97892],
                //         [112.64735, -7.97801],
                //         [112.6462, -7.9771],
                //         [112.64514, -7.97616],
                //         [112.64555, -7.97519],
                //         [112.64636, -7.97413],

                //         [112.64681, -7.97354]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 9}, //bunulrejo
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.63845, -7.96138],

                //         [112.63972, -7.96197],
                //         [112.64046, -7.96232],
                //         [112.64146, -7.96358],
                //         [112.64231, -7.96465],
                //         [112.64439, -7.96827],
                //         [112.64536, -7.96879],
                //         [112.64567, -7.96751],
                //         [112.64567, -7.96371],
                //         [112.64602, -7.96331],
                //         [112.64696, -7.96345],
                //         [112.64878, -7.96430],
                //         [112.64799, -7.96545],
                //         [112.64777, -7.96650],
                //         [112.64839, -7.96715],
                //         [112.64895, -7.96831],
                //         [112.64937, -7.96897],
                //         [112.65100, -7.96886],
                //         [112.65131, -7.96818],
                //         [112.65202, -7.96782],
                //         [112.65282, -7.96754],
                //         [112.65363, -7.96808],
                //         [112.65272, -7.97010],
                //         [112.65142, -7.97176],
                //         [112.64984, -7.97320],
                //         [112.64966, -7.97378],
                //         [112.64861, -7.97380],
                //         [112.64665, -7.97353],
                //         [112.64453, -7.97206],
                //         [112.64280, -7.96970],
                //         [112.64113, -7.96800],
                //         [112.63971, -7.96799],
                //         [112.64007, -7.96671],
                //         [112.64010, -7.96526],
                //         [112.63998, -7.96415],
                //         [112.63931, -7.96331],
                //         [112.63842, -7.96295],
                //         [112.63772, -7.96279],
                //         [112.63732, -7.96218],
                //         [112.63722, -7.96142],

                //         [112.63845, -7.96138]
                //       ]
                //     ]
                //   }
                // },

                // {
                //   "type": "Feature",
                //   "properties": {"class_id": 10}, //purwantoro
                //   "geometry": {
                //     "type": "Polygon",
                //     "coordinates": [
                //       [
                //         [112.63922, -7.95082],

                //         [112.64014, -7.95099],
                //         [112.64173, -7.95139],
                //         [112.64319, -7.95339],
                //         [112.64447, -7.95445],
                //         [112.64557, -7.95626],
                //         [112.64696, -7.95690],
                //         [112.64792, -7.95722],
                //         [112.64947, -7.95787],
                //         [112.65113, -7.95892],
                //         [112.65130, -7.96064],
                //         [112.64877, -7.96429],
                //         [112.64695, -7.96342],
                //         [112.64604, -7.96336],
                //         [112.64561, -7.96376],
                //         [112.64568, -7.96465],
                //         [112.64565, -7.96752],
                //         [112.64534, -7.96875],
                //         [112.64439, -7.96825],
                //         [112.64229, -7.96455],
                //         [112.64048, -7.96232],
                //         [112.63850, -7.96136],
                //         [112.63725, -7.96142],
                //         [112.63718, -7.96086],
                //         [112.63744, -7.95901],
                //         [112.63749, -7.95630],
                //         [112.63780, -7.95385],
                //         [112.63868, -7.95175],

                //         [112.63922, -7.95082]
                //       ]
                //     ]
                //   }
                // },

                {
                  "type": "Feature",
                  "properties": {}, //tunggulwulung
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.60790, -7.92067],

                        [112.61776, -7.92289],
                        [112.62102, -7.93059],
                        [112.62248, -7.93500],
                        [112.62463, -7.93573],
                        [112.62639, -7.93794],
                        [112.62632, -7.94117],
                        [112.62557, -7.94245],
                        [112.62439, -7.94236],
                        [112.62294, -7.94223],
                        [112.62075, -7.94361],
                        [112.62020, -7.94066],
                        [112.61922, -7.93963],
                        [112.61813, -7.93955],
                        [112.61687, -7.94074],
                        [112.61440, -7.93989],
                        [112.61295, -7.93854],
                        [112.61227, -7.93726],
                        [112.61129, -7.93611],
                        [112.60978, -7.93352],
                        [112.60915, -7.93202],
                        [112.60806, -7.93055],
                        [112.60532, -7.92503],
                        [112.60506, -7.92230],
                        [112.60643, -7.92187],

                        [112.60790, -7.92067]
                      ]
                    ]
                  }
                }
              ]
            }


            map.addControl(new MapboxGeocoder({
                accessToken: mapboxgl.accessToken
            }));




            // var geojsone = {
            //   type: 'FeatureCollection',
            //   features: [
            //     // blimbing
            //     {
            //       type: 'Feature',
            //       geometry: {
            //         type: 'Point',
            //         // coordinates: [-77.032, 38.913]
            //         coordinates: [112.651932, -7.930152]
            //       },
            //       properties: {
            //         title: 'Blimbing District',
            //         description: 'Detail'
            //       }
            //     },
            //   // klojen
            //     {
            //       type: 'Feature',
            //       geometry: {
            //         type: 'Point',
            //         // coordinates: [-122.414, 37.776]
            //         coordinates: [112.618011, -7.966252]
            //       },
            //       properties: {
            //         title: 'Klojen District',
            //         description: 'Detail'
            //       }
            //     },
            //   // lowokwaru
            //     {
            //       type: 'Feature',
            //       geometry: {
            //         type: 'Point',
            //         // coordinates: [-122.414, 37.776]
            //         coordinates: [112.630447, -7.946053]
            //       },
            //       properties: {
            //         title: 'Lowokwaru District',
            //         description: '<a href=\"getCoordinate.html\" target=\"_blank\" title=\"Opens in a new window\">Make it Mount Pleasant</a><br>Detail'
            //       }
            //     },
            //     // kedungkandang
            //     {
            //       type: 'Feature',
            //       geometry: {
            //         type: 'Point',
            //         // coordinates: [-122.414, 37.776]
            //         coordinates: [112.643684, -8.011824]
            //       },
            //       properties: {
            //         title: 'Kedungkandang District',
            //         description: '<a href=\"getCoordinate.html\" target=\"_blank\" title=\"Opens in a new window\">Make it Mount Pleasant</a><br>Detail'
            //       }
            //     },
            //     // sukun
            //     {
            //       type: 'Feature',
            //       geometry: {
            //         type: 'Point',
            //         // coordinates: [-122.414, 37.776]
            //         coordinates: [112.630338, -8.004849]
            //       },
            //       properties: {
            //         title: 'Sukun District',
            //         description: '<a href=\"getCoordinate.html\" target=\"_blank\" title=\"Opens in a new window\">Make it Mount Pleasant</a><br>Detail'
            //       }
            //     },
            //   ]
            // };

            // // add markers to map
            // geojsone.features.forEach(function(marker) {

            //   // create a HTML element for each feature
            //   var el = document.createElement('div');
            //   el.className = 'marker';

            //   // make a marker for each feature and add to the map
            //   new mapboxgl.Marker(el)
            //     .setLngLat(marker.geometry.coordinates)

            //     .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
            //     .setHTML('<h4>' + marker.properties.title + '</h4><p>' + marker.properties.description + '</p>'))

            //     .addTo(map);
            // });

        </script>

        
    </body>
</html>
