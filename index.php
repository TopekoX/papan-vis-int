<?php 
include 'konfig.php'; 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bank Data Kejari Palu</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bdi/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .table-borderless > tbody > tr > td,
      .table-borderless > tbody > tr > th,
      .table-borderless > tfoot > tr > td,
      .table-borderless > tfoot > tr > th,
      .table-borderless > thead > tr > td,
      .table-borderless > thead > tr > th {
          border: none;
      }

      body {
          padding-top: 25px;
      }
    </style>

    <!-- Custom Fonts -->
    <link href="../bdi/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- JQUERY -->
    <script src="../bdi/vendor/jquery/jquery-2.2.3.min.js"></script>

    <script src = "https://maps.googleapis.com/maps/api/js"></script>

</head>
<body>

<!-- Fixed navbar -->
<div class="wrapper">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../bdi"><?php echo $title; ?></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bullhorn fa-fw"></i> Penkum & Luhkum <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                  <a href="#tahunPenkum" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Penkum</a>
              </li>
              <li>
                  <a href="#tahunLuhkum" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Luhkum</a>
              </li><li role="separator" class="divider"></li>
              <li>
                  <a href="#tahunPerTWPenkumLuhkum" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Grafik per Triwulan</a>
              </li>
              <li>
                  <a href="#tahunPerTHPenkumLuhkum" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Grafik 5 Tahun Terakhir</a>
              </li>
              <li>
                  <a href="#tahunPerKec" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Luhkum 5 Tahun Terakhir</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#tahunTabel1TW" data-toggle="modal"><i class="fa fa-table fa-fw"></i> Pelaksanaan Penkum 1</a>
              </li>
              <li>
                <a href="#tahunTabel2TW" data-toggle="modal"><i class="fa fa-table fa-fw"></i> Pelaksanaan Luhkum 1</a>
              </li>
              <li>
                <a href="#tahunTabel3TW" data-toggle="modal"><i class="fa fa-table fa-fw"></i> Pelaksanaan Penkum 2</a>
              </li>
              <li>
                <a href="#tahunTabel4TW" data-toggle="modal"><i class="fa fa-table fa-fw"></i> Pelaksanaan Luhkum 2</a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="#hasillakkegpen" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Hasil Pelaksanaan Penkum</a>
              </li>
              <li>
                <a href="#hasillakkegluh" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Hasil Pelaksanaan Luhkum</a>
              </li>
              <li>
                <a href="#hasilfotopen" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Foto Dokumentasi Penkum</a>
              </li>
              <li>
                <a href="#hasilfotoluh" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Foto Dokumentasi Luhkum</a>
              </li>
              <li>
                <a href="#barpenpertw" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Grafik Batang Penkum</a>
              </li>
              <li>
                <a href="#barluhpertw" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Grafik Batang Luhkum</a>
              </li>
              <li>
                <a href="#mappenpertw" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Peta Wilayah Penkum</a>
              </li>
              <li>
                <a href="#mapluhpertw" data-toggle="modal"><i class="fa fa-desktop" aria-hidden="true"></i> Peta Wilayah Luhkum</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bullhorn fa-fw"></i> Perkara <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                  <a href="index.php?p=barkorupsi" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Tipikor</a>
              </li>
              <li>
                  <a href="index.php?p=barnarkoba" data-toggle="modal"><i class="fa fa-bar-chart-o fa-fw"></i> Narkoba</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="../bdi/index.php?p=playpenluhgrafik" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-play"></i> Play</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php" onclick="return confirm('Yakin mau logout?')"><i class="fa fa-sign-out"></i> Log out &nbsp;&nbsp; <span class="sr-only">(current)</span></a></li>
        </ul>
      </div><!--/.nav-collapse -->
  </nav>
</div>

    <div id="wrapper">

        <!-- Navigation -->

        <div id="page-content-wrapper">
          <div class="container-fluid">
            <?php
          		$pages_dir = 'pages';
          		if(!empty($_GET['p'])){
          			$pages = scandir($pages_dir, 0);
          			unset($pages[0], $pages[1]);

          			$p = $_GET['p'];
          			if(in_array($p.'.php', $pages)){
          				include($pages_dir.'/'.$p.'.php');
          			} else {
          				echo '<h1>Halaman tidak ditemukan! :(</h1>';
          			}
          		} else {
          			include($pages_dir.'/home.php');
          		}
      		?>
        </div>
        <!-- /#page-wrapper -->
      </div>
    </div>
    <!-- /#wrapper -->
    <!-- Modal -->
    <?php include_once 'modal/pilihtahunpenkum.php'; ?>
    <?php include_once 'modal/form.php'; ?>

    <!-- jQuery -->
    <!-- jQuery 2.2.3 -->
    <!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <!--<script src="../bdi/vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../bdi/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bdi/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Chartjs JavaScript -->
    <script src="../bdi/vendor/chartjs/Chart.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bdi/vendor/raphael/raphael.min.js"></script>
    <script src="../bdi/vendor/morrisjs/morris.min.js"></script>
    <script src="../bdi/data/morris-data.js"></script>

    <?php
      include_once 'data/penkum-luhkum.php';
      include_once 'data/perkara.php';
      include_once 'data/narkoba.php';
      include_once 'data/penkum-luhkum-play.php';
     ?>


</body>

</html>
