<?php 
include "avail.php";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel.id</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="#">
                    <p class="menu-title">Hotel.id</p>
                </a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="history.php"> <i class="menu-icon fa fa-history"></i>History </a>
                    </li>
                    <li>
                        <a href="calculator.php"> <i class="menu-icon fa fa-calculator"></i>Calculator </a>
                    </li>
                    <li>
                        <a href="https://github.com/justdheja/hotel.id" target="_blank"> <i class="menu-icon fa fa-github"></i>GitHub</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Customer Book</strong> Elements
                </div>
                <div class="card-body card-block">
                    <form action="addToHistory.php" method="POST" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Input Name" class="form-control"><small class="form-text text-muted">Please input the customer name</small></div>
                        </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Tipe ID</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="tipeId" id="select" class="form-control">
                                        <option value="KTP">KTP</option>
                                        <option value="SIM">SIM</option>
                                        <option value="Passport">Passport</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Number</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="idnumber" placeholder="Input ID Number" class="form-control"><small class="form-text text-muted">Please input the customer ID Number</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kamar</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio" id="radio1" name="kamar" value="Superior" class="form-check-input">Superior
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio2" class="form-check-label ">
                                                <input type="radio" id="radio2" name="kamar" value="King Suite" class="form-check-input">King Suite
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio3" class="form-check-label ">
                                                <input type="radio" id="radio3" name="kamar" value="Presidential Suite" class="form-check-input">Presidential Suite
                                            </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Durasi (permalam)</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="durasi" placeholder="Input" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Check In Date</label></div>
                                <div class="col-12 col-md-9"><input type="datetime-local" name="checkInDate" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Check Out Date</label></div>
                                <div class="col-12 col-md-9"><input type="datetime-local" name="checkOutDate" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Tamu</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="jumlahTamu" placeholder="Input The number of guests" class="form-control"><small class="form-text text-muted">Please input the total guest</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary btn-sm" name="submit" value="submit">
                                <a href="index.php"><button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button></a>
                            </div>
                        </form>
                    </div>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Availability</strong>
                </div>
                <div class="card-body card-block">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Superior : <?= $superior ?></label><br>
                        <label for="text-input" class=" form-control-label">King Suite : <?= $king ?></label><br>
                        <label for="text-input" class=" form-control-label">Pesidential Suite : <?= $presidential ?></label><br>
                    </div>
                </div>
            </div>
        </div>




        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

</body>

</html>
