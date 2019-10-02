<?php
  include_once '../visual/konfig.php';
  $tahun = $_POST['tahun'];

  $SQLTW1 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-01-01' AND Waktu <= '$tahun-03-31' ORDER BY Waktu ASC";
  $SQLTW2 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-04-01' AND Waktu <= '$tahun-06-30' ORDER BY Waktu ASC";
  $SQLTW3 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-07-01' AND Waktu <= '$tahun-09-30' ORDER BY Waktu ASC";
  $SQLTW4 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-10-01' AND Waktu <= '$tahun-12-31' ORDER BY Waktu ASC";

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><img src="img/kejaksaan.png" class="rounded float-left" alt="Kejaksaan" width="70" height="70"> Pelaksanaan Kegiatan Penyuluhan Hukum</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><strong>Triwulan I</strong></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <?php
                if(isset($_POST['tahun'])){
                        $luh = mysqli_query($con, $SQLTW1);
                        $rowspan = mysqli_num_rows($luh);

                        if ($rowspan == 0 || $rowspan == null) {
                          echo "<center><strong>N I H I L</strong></center>";
                        }else{
                          echo '<marquee>
                                  ';
                              while ($p = mysqli_fetch_array($luh)){
                                if ($p['LinkGambar1'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar1'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar2'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar2'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar3'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar3'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar4'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar4'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                            }
                            echo '<div class="caption">
                                  <p>'.$p['Sasaran'].'</p>
                                  </div>';

                          echo "</marquee>";

                        }
                          // END TW I
                    //  }

                  }
              ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><strong>Triwulan II</strong></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <?php
                if(isset($_POST['tahun'])){
                        $luh = mysqli_query($con, $SQLTW2);
                        $rowspan = mysqli_num_rows($luh);

                        if ($rowspan == 0 || $rowspan == null) {
                          echo "<center><strong>N I H I L</strong></center>";
                        }else{
                          echo '<marquee>
                                  ';
                              while ($p = mysqli_fetch_array($luh)){
                                if ($p['LinkGambar1'] != null OR $p['LinkGambar1'] != "") {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar1'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar2'] != null OR $p['LinkGambar2'] != "") {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar2'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar3'] != null OR $p['LinkGambar3'] != "") {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar3'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar4'] != null OR $p['LinkGambar4'] != "") {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar4'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                            }
                            echo '<div class="caption">
                                  <p>'.$p['Sasaran'].'</p>
                                  </div>';

                          echo "</marquee>";

                        }
                          // END TW I
                    //  }

                  }
              ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><strong>Triwulan III</strong></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <?php
                if(isset($_POST['tahun'])){
                        $luh = mysqli_query($con, $SQLTW3);
                        $rowspan = mysqli_num_rows($luh);

                        if ($rowspan == 0 || $rowspan == null) {
                          echo "<center><strong>N I H I L</strong></center>";
                        }else{
                          echo '<marquee>
                                  <div class="thumbhail">';
                              while ($p = mysqli_fetch_array($luh)){
                                if ($p['LinkGambar1'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar1'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar2'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar2'].'" alt="The Pulpit Rock" width="304" height="228">';

                                }
                                if ($p['LinkGambar3'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar3'].'" alt="The Pulpit Rock" width="304" height="228">';
                                  }
                                if ($p['LinkGambar4'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar4'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                            }

                          echo "</div></marquee>";

                        }
                          // END TW I
                    //  }

                  }
              ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center><strong>Triwulan IV</strong></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <?php
                if(isset($_POST['tahun'])){
                        $luh = mysqli_query($con, $SQLTW4);
                        $rowspan = mysqli_num_rows($luh);

                        if ($rowspan == 0 || $rowspan == null) {
                          echo "<center><strong>N I H I L</strong></center>";
                        }else{
                          echo '<marquee>
                                  <div class="thumbhail">';
                              while ($p = mysqli_fetch_array($luh)){
                                if ($p['LinkGambar1'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar1'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar2'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar2'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar3'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar3'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                                if ($p['LinkGambar4'] != null) {
                                  echo '<img name="imgLuhkum" src="'.$p['LinkGambar4'].'" alt="The Pulpit Rock" width="304" height="228">';
                                }
                            }
                            echo '<div class="caption">
                                  <p>'.$p['Sasaran'].'</p>
                                  </div>';

                          echo "</div></marquee>";

                        }
                          // END TW I
                    //  }

                  }
              ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.row -->
