<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>Blimbing District</title>
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
                        <a href="login.html">Login</a>
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
<?php echo "Loading..."; ?>
        <script>

            mapboxgl.accessToken = 'pk.eyJ1IjoiZGlhbjk1IiwiYSI6ImNqdHFzaTNtZjBpc280NG80N2EyMnY4bWYifQ.PFVRQig9kQQAKYpwIqf0dg';
            var map = new mapboxgl.Map({
                container: 'map-canvas',
                style: 'mapbox://styles/mapbox/dark-v8',
                center: [112.650747, -7.951993],
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
                    "class_id": 1 // blimbing
                  },
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.64637, -7.95005],

                        [112.64780, -7.95065],
                        [112.64924, -7.95125],
                        [112.64964, -7.95169],
                        [112.65003, -7.95212],
                        [112.64980, -7.95330],
                        [112.64901, -7.95524],
                        [112.64895, -7.95534],
                        [112.64888, -7.95546],
                        [112.64874, -7.95570],
                        [112.64845, -7.95616],
                        [112.64785, -7.95716],
                        [112.64699, -7.95692],
                        [112.64559, -7.95630],
                        [112.64448, -7.95448],
                        [112.64321, -7.95346],
                        [112.64312, -7.95332],
                        [112.64304, -7.95320],
                        [112.64287, -7.95295],
                        [112.64259, -7.95252],
                        [112.64176, -7.95141],
                        [112.64097, -7.95120],
                        [112.64018, -7.95099],
                        [112.63969, -7.95091],
                        [112.63922, -7.95083],
                        [112.63930, -7.95070],
                        [112.63938, -7.95056],
                        [112.63954, -7.95028],
                        [112.63989, -7.94726],
                        [112.63893, -7.94689],
                        [112.63861, -7.94680],
                        [112.63828, -7.94669],
                        [112.63761, -7.94648],
                        [112.63604, -7.94611],
                        [112.63576, -7.94589],
                        [112.63549, -7.94567],
                        [112.63495, -7.94524],
                        [112.63480, -7.94427],
                        [112.63479, -7.94420],
                        [112.63481, -7.94414],
                        [112.63577, -7.94451],
                        [112.63625, -7.94470],
                        [112.63656, -7.94481],
                        [112.63673, -7.94489],
                        [112.63698, -7.94499],
                        [112.63723, -7.94509],
                        [112.63772, -7.94530],
                        [112.63870, -7.94571],
                        [112.63886, -7.94580],
                        [112.63902, -7.94589],
                        [112.63933, -7.94606],
                        [112.63996, -7.94641],
                        [112.64121, -7.94709],
                        [112.64372, -7.94848],

                        [112.64637, -7.95005]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {
                    "class_id": 2 //balearjosari
                  },
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.64277, -7.93058],

                        [112.64410, -7.93126],
                        [112.64675, -7.93373],
                        [112.64803, -7.93495],
                        [112.64942, -7.93627],
                        [112.65447, -7.94214],
                        [112.65348, -7.94196],
                        [112.65271, -7.94135],
                        [112.65161, -7.94081],
                        [112.65046, -7.94015],
                        [112.64709, -7.93912],
                        [112.64530, -7.93879],
                        [112.64353, -7.93837],
                        [112.64258, -7.93763],
                        [112.64273, -7.93722],
                        [112.64309, -7.93412],

                        [112.64277, -7.93058],

                      ]
                    ]
                  }
                },

                
                {
                  "type": "Feature",
                  "properties": {"class_id": 3}, //purwodadi
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.64000, -7.94107],

                        [112.64256, -7.94223],
                        [112.64418, -7.94326],
                        [112.64632, -7.94454],
                        [112.64758, -7.94576],
                        [112.65086, -7.94771],
                        [112.65382, -7.94905],
                        [112.65454, -7.94993],
                        [112.65415, -7.95158],
                        [112.65299, -7.95141],
                        [112.65203, -7.95067],
                        [112.65076, -7.94988],
                        [112.64974, -7.95047],
                        [112.64916, -7.95116],
                        [112.64623, -7.95001],
                        [112.63862, -7.94559],
                        [112.63480, -7.94411],
                        [112.63523, -7.94322],
                        [112.63634, -7.94228],
                        [112.63857, -7.94169],

                        [112.64000, -7.94107],
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 4}, //polowijen
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.64259, -7.93761],

                        [112.64359, -7.93841],
                        [112.64746, -7.93917],
                        [112.64729, -7.94007],
                        [112.64792, -7.94129],
                        [112.64806, -7.94427],
                        [112.65396, -7.94695],
                        [112.65595, -7.94742],
                        [112.65488, -7.94780],
                        [112.65432, -7.94823],
                        [112.65390, -7.94911],
                        [112.65133, -7.94802],
                        [112.64934, -7.94681],
                        [112.64760, -7.94568],
                        [112.64634, -7.94444],
                        [112.64258, -7.94233],
                        [112.64008, -7.94104],
                        [112.64166, -7.93964],

                        [112.64259, -7.93761]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 5}, //pandanwangi
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.65788, -7.94714],

                        [112.65896, -7.95435],
                        [112.65750, -7.96404],
                        [112.65793, -7.96489],
                        [112.65488, -7.96637],
                        [112.65373, -7.96745],
                        [112.65140, -7.96787],
                        [112.65098, -7.96880],
                        [112.64952, -7.96880],
                        [112.64839, -7.96701],
                        [112.64760, -7.96657],
                        [112.64789, -7.96520],
                        [112.65126, -7.96103],
                        [112.65099, -7.95890],
                        [112.64813, -7.95685],
                        [112.64949, -7.95430],
                        [112.65004, -7.95223],
                        [112.64908, -7.95113],
                        [112.64978, -7.95028],
                        [112.65065, -7.95002],
                        [112.65318, -7.95146],
                        [112.65398, -7.95171],
                        [112.65458, -7.95010],
                        [112.65385, -7.94912],
                        [112.65452, -7.94804],//8
                        [112.65578, -7.94746],

                        [112.65788, -7.94714]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 6}, //arjosari
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.64736, -7.93925],

                        [112.65033, -7.94011],
                        [112.65267, -7.94133],
                        [112.65349, -7.94192],
                        [112.65450, -7.94215],
                        [112.65784, -7.94721],
                        [112.65709, -7.94738],
                        [112.65617, -7.94755],
                        [112.65407, -7.94691],
                        [112.64806, -7.94440],
                        [112.64789, -7.94118],
                        [112.64720, -7.94015],

                        [112.64736, -7.93925]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 7}, //jodipan
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.63855, -7.97958],

                        [112.63951, -7.98011],
                        [112.64061, -7.98095],
                        [112.64098, -7.98218],
                        [112.64087, -7.98336],
                        [112.64225, -7.98432],
                        [112.64451, -7.98502],
                        [112.64603, -7.98588],
                        [112.64496, -7.98739],
                        [112.64367, -7.98789],
                        [112.64144, -7.98673],
                        [112.64049, -7.98625],
                        [112.63955, -7.98578],
                        [112.63829, -7.98486],
                        [112.63702, -7.98397],
                        [112.63751, -7.98252],
                        [112.63802, -7.98109],

                        [112.63855, -7.97958]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 8}, //polehan
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.64681, -7.97354],

                        [112.64861, -7.97385],
                        [112.64967, -7.97377],
                        [112.64913, -7.97541],
                        [112.64923, -7.97772],
                        [112.64849, -7.97993],
                        [112.64776, -7.98318],
                        [112.64675, -7.98486],
                        [112.64602, -7.9859],
                        [112.64452, -7.98501],
                        [112.64224, -7.98433],
                        [112.64088, -7.98337],
                        [112.64099, -7.9822],
                        [112.64071, -7.9813],
                        [112.6419, -7.98047],
                        [112.64282, -7.97959],
                        [112.64363, -7.97838],
                        [112.6443, -7.97811],
                        [112.64546, -7.97884],
                        [112.64697, -7.97892],
                        [112.64735, -7.97801],
                        [112.6462, -7.9771],
                        [112.64514, -7.97616],
                        [112.64555, -7.97519],
                        [112.64636, -7.97413],

                        [112.64681, -7.97354]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 9}, //bunulrejo
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.63845, -7.96138],

                        [112.63972, -7.96197],
                        [112.64046, -7.96232],
                        [112.64146, -7.96358],
                        [112.64231, -7.96465],
                        [112.64439, -7.96827],
                        [112.64536, -7.96879],
                        [112.64567, -7.96751],
                        [112.64567, -7.96371],
                        [112.64602, -7.96331],
                        [112.64696, -7.96345],
                        [112.64878, -7.96430],
                        [112.64799, -7.96545],
                        [112.64777, -7.96650],
                        [112.64839, -7.96715],
                        [112.64895, -7.96831],
                        [112.64937, -7.96897],
                        [112.65100, -7.96886],
                        [112.65131, -7.96818],
                        [112.65202, -7.96782],
                        [112.65282, -7.96754],
                        [112.65363, -7.96808],
                        [112.65272, -7.97010],
                        [112.65142, -7.97176],
                        [112.64984, -7.97320],
                        [112.64966, -7.97378],
                        [112.64861, -7.97380],
                        [112.64665, -7.97353],
                        [112.64453, -7.97206],
                        [112.64280, -7.96970],
                        [112.64113, -7.96800],
                        [112.63971, -7.96799],
                        [112.64007, -7.96671],
                        [112.64010, -7.96526],
                        [112.63998, -7.96415],
                        [112.63931, -7.96331],
                        [112.63842, -7.96295],
                        [112.63772, -7.96279],
                        [112.63732, -7.96218],
                        [112.63722, -7.96142],

                        [112.63845, -7.96138]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {"class_id": 10}, //purwantoro
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.63922, -7.95082],

                        [112.64014, -7.95099],
                        [112.64173, -7.95139],
                        [112.64319, -7.95339],
                        [112.64447, -7.95445],
                        [112.64557, -7.95626],
                        [112.64696, -7.95690],
                        [112.64792, -7.95722],
                        [112.64947, -7.95787],
                        [112.65113, -7.95892],
                        [112.65130, -7.96064],
                        [112.64877, -7.96429],
                        [112.64695, -7.96342],
                        [112.64604, -7.96336],
                        [112.64561, -7.96376],
                        [112.64568, -7.96465],
                        [112.64565, -7.96752],
                        [112.64534, -7.96875],
                        [112.64439, -7.96825],
                        [112.64229, -7.96455],
                        [112.64048, -7.96232],
                        [112.63850, -7.96136],
                        [112.63725, -7.96142],
                        [112.63718, -7.96086],
                        [112.63744, -7.95901],
                        [112.63749, -7.95630],
                        [112.63780, -7.95385],
                        [112.63868, -7.95175],

                        [112.63922, -7.95082]
                      ]
                    ]
                  }
                },

                {
                  "type": "Feature",
                  "properties": {}, //kesatrian
                  "geometry": {
                    "type": "Polygon",
                    "coordinates": [
                      [
                        [112.63973, -7.96801],

                        [112.64115, -7.96801],
                        [112.64286, -7.96976],
                        [112.64453, -7.97206],
                        [112.64667, -7.97353],
                        [112.64680, -7.97355],
                        [112.64671, -7.97367],
                        [112.64556, -7.97519],
                        [112.64514, -7.97615],
                        [112.64623, -7.97713],
                        [112.64737, -7.97800],
                        [112.64700, -7.97892],
                        [112.64548, -7.97885],
                        [112.64432, -7.97812],
                        [112.64366, -7.97836],
                        [112.64284, -7.97957],
                        [112.64192, -7.98046],
                        [112.64072, -7.98130],
                        [112.64062, -7.98095],
                        [112.63951, -7.98011],
                        [112.63856, -7.97958],
                        [112.63911, -7.97810],
                        [112.63956, -7.97611],
                        [112.63979, -7.97344],
                        [112.63951, -7.97140],
                        [112.63918, -7.96997],

                        [112.63973, -7.96801]
                      ]
                    ]
                  }
                }
              ]
            }


            map.addControl(new MapboxGeocoder({
                accessToken: mapboxgl.accessToken
            }));





// map.on('load', function() {

//     // Add a layer showing the places.
//     map.addLayer({
//         "id": "places",
//         "type": "symbol",
//         "source": {
//             "type": "geojson",
//             "data": {
//                 "type": "FeatureCollection",
//                 "features": [{
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>Arjosari<br>9.767</p>",
//                         "icon": "theatre"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [112.645917, -7.935559]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>Balearjosari<br>9.817</p>",
//                         "icon": "theatre"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [112.644652, -7.941278]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>EatBar (2761 Washington Boulevard Arlington VA) is throwing a Big Backyard Beach Bash and Wine Fest on Saturday, serving up conch fritters, fish tacos and crab sliders, and Red Apron hot dogs. 12:00-3:00 p.m. $25.grill hot dogs.</p>",
//                         "icon": "bar"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [112.63845, -7.96138]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>The Ballston Arts & Crafts Market sets up shop next to the Ballston metro this Saturday for the first of five dates this summer. Nearly 35 artists and crafters will be on hand selling their wares. 10:00-4:00 p.m.</p>",
//                         "icon": "art-gallery"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [112.63855, -7.97958]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>Feeling dandy? Get fancy, grab your bike, and take part in this year's Seersucker Social bike ride from Dandies and Quaintrelles. After the ride enjoy a lawn party at Hillwood with jazz, cocktails, paper hat-making, and more. 11:00-7:00 p.m.</p>",
//                         "icon": "bicycle"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [-77.052477, 38.943951]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>The annual Capital Pride Parade makes its way through Dupont this Saturday. 4:30 p.m. Free.</p>",
//                         "icon": "star"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [-77.043444, 38.909664]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>Jazz-influenced hip hop artist Muhsinah plays the Black Cat (1811 14th Street NW) tonight with Exit Clov and Gods’illa. 9:00 p.m. $12.</p>",
//                         "icon": "music"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [-77.031706, 38.914581]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>The Arlington Players' production of Stephen Sondheim's <em>A Little Night Music</em> comes to the Kogod Cradle at The Mead Center for American Theater (1101 6th Street SW) this weekend and next. 8:00 p.m.</p>",
//                         "icon": "music"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [-77.020945, 38.878241]
//                     }
//                 }, {
//                     "type": "Feature",
//                     "properties": {
//                         "description": "<strong>Jumlah Penduduk</strong><p>Truckeroo brings dozens of food trucks, live music, and games to half and M Street SE (across from Navy Yard Metro Station) today from 11:00 a.m. to 11:00 p.m.</p>",
//                         "icon": "music"
//                     },
//                     "geometry": {
//                         "type": "Point",
//                         "coordinates": [-77.007481, 38.876516]
//                     }
//                 }]
//             }
//         },
//         "layout": {
//             "icon-image": "{icon}-15",
//             "icon-allow-overlap": true
//         }
//     });

//     // Create a popup, but don't add it to the map yet.
//     var popup = new mapboxgl.Popup({
//         closeButton: false,
//         closeOnClick: false
//     });

//     map.on('mouseenter', 'places', function(e) {
//         // Change the cursor style as a UI indicator.
//         map.getCanvas().style.cursor = 'pointer';

//         var coordinates = e.features[0].geometry.coordinates.slice();
//         var description = e.features[0].properties.description;

//         // Ensure that if the map is zoomed out such that multiple
//         // copies of the feature are visible, the popup appears
//         // over the copy being pointed to.
//         while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
//             coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
//         }

//         // Populate the popup and set its coordinates
//         // based on the feature found.
//         popup.setLngLat(coordinates)
//             .setHTML(description)
//             .addTo(map);
//     });

//     map.on('mouseleave', 'places', function() {
//         map.getCanvas().style.cursor = '';
//         popup.remove();
//     });
// });


        </script>

        
    </body>
</html>
