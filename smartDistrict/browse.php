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
                    <li><p class="navbar-text">Signed in as Admin</p></li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="col-xs-12 col-md-4">
            <div class="well">
                <form class="form-inline" role="form">
                    <div class="form-group ">
                        <h4>Why do you study in Malang?</h4>
                        <!-- <label class="sr-only" for="searchText">Search</label>
                        <input type="text" class="form-control input-sm" id="searchText" placeholder="Search Location"> -->
                    </div>
                    <!-- <button type="submit" class="btn btn-default btn-sm">
                        <i class="glyphicon glyphicon-search"></i>
                    </button> -->
                    <!-- <button class="btn btn-default btn-sm">
                        <i class="glyphicon glyphicon-filter"></i> Filter
                    </button> -->
                </form>

                <div class="divider10" style="height: 100px">
                <div class="hidden-xs hidden-sm">

                    <form action="" method="POST">  <!-- <?php if ($vkategori == 'all') echo "checked"; ?> -->

                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                            <?php $vkategori = 'all'; ?>
                                <label class="radio-inline"><input type="radio" name="select" id="id_select_1" value="all" <?php if ($vkategori == 'all'){echo 'checked';} ?> style="margin-bottom: 10px">All</label> <!-- checked="checked" -->
                                <label class="radio-inline"><input type="radio" name="select" id="id_select_2" value="negeri" <?php if ($vkategori == 'negeri'){echo 'checked';} ?> style="margin-bottom: 10px">Negeri</label>
                                <label class="radio-inline"><input type="radio" name="select" id="id_select_3" value="swasta" <?php if ($vkategori == 'swasta'){echo 'checked';} ?> style="margin-bottom: 10px">Swasta</label>
                                <!-- <label class="radio-inline"><input type="radio"  name="select" id="id_select_4" value="dewasa" <?php if ($vkategori == 'dewasa'){echo 'checked';} ?> style="margin-bottom: 10px">Dewasa</label> -->
                            </div>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <button type="submit" name="button" value="Submit" class="btn btn-default btn-sm">
                                    <i class="glyphicon glyphicon-filter"></i>Filter 
                                </button> 
                            </div>
                    </form>

                    <!-- <h4>Make your day beautiful today</h4> -->
                    <!-- <div class="list-group">

                        <a href="#" class="list-group-item "> <h4 class="list-group-item-heading" >Food & Drink</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>
                        <a href="#" class="list-group-item "> <h4 class="list-group-item-heading" >Meeting Point</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>
                        <a href="#" class="list-group-item"> <h4 class="list-group-item-heading" >Garden</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>
                        <a href="#" class="list-group-item "> <h4 class="list-group-item-heading" >Museum</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>
                        <a href="#" class="list-group-item "> <h4 class="list-group-item-heading" >Shopping</h4>
                        <p class="list-group-item-text">
                            Location Address
                        </p> </a>

                    </div> -->
                        <!-- <div class="form-group required">
                            <label for="id_select"  class="control-label col-md-4  requiredField">Kewarganegaraan<span class="asteriskField">*</span> </label>
                        </div> -->
                </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-8">
          <div class="row">

            <?php
                if(isset($_POST['button'])){
                    $vkategori = $_POST['select'];  // Storing Selected Value In Variable
                    //echo "You have selected :" .$vkategori;  // Displaying Selected Value
                    if ($vkategori == 'all') {
                        $sql = "SELECT * FROM wisata";
                        $hasil = mysqli_query($conn, $sql);
                    } else {
                        $sql = "SELECT * FROM wisata WHERE kategori = '$vkategori'";
                        $hasil = mysqli_query($conn, $sql);
                    }   
                    
                }else{
                    $sql = "SELECT * FROM wisata";
                    $hasil = mysqli_query($conn, $sql);
                }
            ?>

            <?php if (mysqli_num_rows($hasil)>0) : ?>
              <?php while ($baris = mysqli_fetch_assoc($hasil)) : ?>  
                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img style="height: 200px" src="<?php echo $baris['gambar']; ?>" alt="...">
                        <div class="caption">
                            <h3><?php echo $baris['judul']; ?></h3>
                            <p>
                                <?= substr($baris['info'],0,80)."..."; ?>
                            </p>
                            <p>
                                <a href="point_more.php?idwisatane=<?= $baris['id_wisata']; ?>" class="btn btn-primary">More Info</a>
                                <a href="find.php?idwisatane=<?= $baris['id_wisata']; ?>" class="btn btn-default" target="_blank" title="Opens in a new window"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>

                                <!-- <a href="blimbing.php" target="_blank" title="Opens in a new window">Subdistrict</a> -->

                            </p>
                        </div>
                    </div>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
                <?= "tidak ada satupun data artikel"; ?>
            <?php endif; ?>

                <!-- <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img style="height: 200px" src="image/musium.jpg" alt="...">
                        <div class="caption">
                            <h3>Brawijaya Museum</h3>
                            <p>
                                Description of place 1
                            </p>
                            <p>
                                 <a href="point_more.html" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img style="height: 200px" src="image/Bataputi.jpg" alt="...">
                        <div class="caption">
                            <h3>BataPuti Coffeehouse</h3>
                            <p>
                                Description of place 1
                            </p>
                            <p>
                                 <a href="point_more.html" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img style="height: 200px" src="image/bukit-delight.jpg" alt="...">
                        <div class="caption">
                            <h3>Bukit Delight cafe</h3>
                            <p>
                                Description of place 1
                            </p>
                            <p>
                                <a href="point_more.html" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img style="height: 200px" src="image/matos1.jpg" alt="...">
                        <div class="caption">
                            <h3>Matos</h3>
                            <p>
                                Description of place 1
                            </p>

                            <p>
                                 <a href="point_more.html" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img style="height: 200px" src="image/alun2malang.jpg" alt="...">
                        <div class="caption">
                            <h3>Malang square</h3>
                            <p>
                                Description of place 1
                            </p>
                            <p>
                                 <a href="point_more.html" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div> -->
          </div>
            <div class="row">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
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
