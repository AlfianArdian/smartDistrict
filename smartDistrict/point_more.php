<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>GIS Application - Extended Template by Cyber313</title>
        <meta name="author" content="luckynvic@gmail.com">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.default.css" rel="stylesheet">

    </head>
    <body>
        <style type="text/css">
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
        <?php include 'koneksi.php'; ?>
        <?php  
            $vidwisata = $_GET['idwisatane'];
            $query = mysqli_query($conn, "SELECT * FROM wisata WHERE id_wisata = $vidwisata");
            $data = mysqli_fetch_assoc($query);
        ?>
        <nav class="navbar navbar-default nav-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Cyber GIS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               
                <ul class="top-level-menu"><!-- <ul class="nav navbar-nav"> -->
               
                    <li><a href="index.php">Home</a></li>
                    <li><a href="browse.php"  class="active">Tourism Potential</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 1px;">Population Mapping</b></a>
                        <ul class="second-level-menu"><!-- <ul class="dropdown-menu"> -->
                            <li style="padding-left: 5px">Based On:</li>
                            <li><a href="#">Gender</a>
                                    <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                            <li><a href="#">Educational</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                            <li><a href="#">Population Density</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                            <li><a href="#">Work</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                            <li><a href="#">Age</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                            <li><a href="#">Religious</a>
                                <ul class="third-level-menu">
                                        <li><a href="blimbing.php">Blimbing</a></li>
                                        <li><a href="lowokwaru.php">Lowokwaru</a></li>
                                        <li><a href="">Kedungkandang</a></li>
                                        <li><a href="klojen.php">Klojen</a></li>
                                        <li><a href="sukun.php">Sukun</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="satelitView.html">Satelit View</a></li>
                    <li><a href="about.html">About</a></li>

                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">Signed in as Admin</p></li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>

                </ul>
            </div>
        </nav>


        <div class="col-xs-12 col-md-3">
            <div class="well">

                <div class="divider10" style="height: 250px">
                    <img src="<?= $data['gambar'];?>" style="height: 250px; width: 250px">
                </div>
                
            </div>
        </div>
        <div class="col-xs-12 col-md-9">
            <div class="row point-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><?= $data['judul'];?></h4>
                    </div>
                    <div class="panel-body">
                        
                       <blockquote>
                           <p>Visit Us</p>
                           <!-- <p>New offer from this place discount up to 10%</p> -->
                       </blockquote>
                        <p> 
                            <?= $data['info'];?>
                        </p>
                        <p style="color: salmon">
                            Kategori: <?= $data['kategori'];?>                        
                        </p>
                        <!-- <address>
                            <strong>Twitter, Inc.</strong>
                            <br>
                            795 Folsom Ave, Suite 600
                            <br>
                            San Francisco, CA 94107
                            <br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address> -->

                        <!-- <address>
                            <strong>Full Name</strong>
                            <br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address> -->

                        <!-- <div id="point-gallery-slide" class="carousel slide"> -->
                            <!-- Indicators -->
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#point-gallery-slide" data-slide-to="0" class="active"></li>
                                <li data-target="#point-gallery-slide" data-slide-to="1"></li>
                                <li data-target="#point-gallery-slide" data-slide-to="2"></li>
                            </ol> -->

                            <!-- Wrapper for slides -->
                            <!-- <div class="carousel-inner">
                                <div class="item active">
                                    <img src="holder.js/200x200" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Gallery Caption #1
                                            <img src="image/wisata_malang_murah.jpg">
                                        </h3>
                                        <p>
                                            Gallery Desc #1
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="holder.js/200x200" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Gallery Caption #2</h3>
                                        <p>
                                            Gallery Desc #2
                                            <img src="image/wisata_malang_murah.jpg">
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="holder.js/200x200" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Gallery Caption #3</h3>
                                        <p>
                                            Gallery Desc #3
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="holder.js/200x200" alt="Fourth">
                                    <div class="carousel-caption">
                                        <h3>Gallery Caption #4</h3>
                                        <p>
                                            Gallery Desc #4
                                        </p>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Controls -->
                            <!-- <a class="left carousel-control" href="#point-gallery-slide" data-slide="prev"> <span class="icon-prev"></span> </a>
                            <a class="right carousel-control" href="#point-gallery-slide" data-slide="next"> <span class="icon-next"></span> </a> -->
                        <!-- </div> -->

                    </div>
                    <div class="panel-footer">
                        <a href="browse.php" class="btn btn-default">Back</a>
                        <!-- <a href="#" class="btn btn-default">Show In Map</a>
 -->
                    </div>
                </div>
            </div>

        </div>
        


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.js"></script>
    </body>
</html>
