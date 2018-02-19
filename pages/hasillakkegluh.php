<?php
  include_once '../bdi/konfig.php';
  $tahun = $_POST['tahun'];

  $SQLTW1 = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-01-01' AND Waktu <= '$tahun-03-31' ORDER BY Waktu ASC";
  $SQLTW2 = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-04-01' AND Waktu <= '$tahun-06-30' ORDER BY Waktu ASC";
  $SQLTW3 = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-07-01' AND Waktu <= '$tahun-09-30' ORDER BY Waktu ASC";
  $SQLTW4 = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-10-01' AND Waktu <= '$tahun-12-31' ORDER BY Waktu ASC";

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
             <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th class="text-center">NO.</th>
                    <th class="text-center">SASARAN KEGIATAN</th>
                    <th class="text-center">JUMLAH PESERTA</th>
                    <th class="text-center">WAKTU PELAKSANAAN</th>
                    <th class="text-center">MATERI</th>
                    <th class="text-center">NAMA PETUGAS PENYULUHAN HUKUM</th>
                  </tr>
                  <tr>
                    <th class="text-center">1</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">5</th>
                    <th class="text-center">6</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['tahun'])){

                      $no = 1;
                      $luh = mysqli_query($con, $SQLTW1);
                      $rowspan = mysqli_num_rows($luh);
                      $valuetw = "I";
                      $cekrow = 0;
                      if ($rowspan == 0 || $rowspan == null) {
                        echo "<tr>
                               <td class='text-center' colspan=6><strong>N I H I L</strong></td>
                              </tr>";
                      }else{
                          while ($p = mysqli_fetch_array($luh)){
                                $waktu = date_create($p['Waktu']);

                                if ($cekrow == 0) {
                                  echo "<tr>
                                         <td class='text-center'>$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";
                                       $cekrow = 1;
                                }else{
                                  echo "<tr>
                                         <td class='text-center' >$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";                                    }
                                  $no++;
                                  $waktu = null;
                          }
                          $a++;
                        }

                              // END TW I
                        //  }

                      }
                  ?>
                </tbody>
                </table>
             </div>
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
             <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>SASARAN KEGIATAN</th>
                    <th>JUMLAH PESERTA</th>
                    <th>WAKTU PELAKSANAAN</th>
                    <th>MATERI</th>
                    <th>NAMA PETUGAS PENERANGAN HUKUM</th>
                  </tr>
                  <tr>
                    <th class="text-center">1</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">5</th>
                    <th class="text-center">6</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['tahun'])){

                      $no = 1;
                      $luh = mysqli_query($con, $SQLTW2);
                      $rowspan = mysqli_num_rows($luh);
                      $valuetw = "I";
                      $cekrow = 0;
                      if ($rowspan == 0 || $rowspan == null) {
                        echo "<tr>
                               <td class='text-center' colspan=6><strong>N I H I L</strong></td>
                              </tr>";
                      }else{
                          while ($p = mysqli_fetch_array($luh)){
                                $waktu = date_create($p['Waktu']);

                                if ($cekrow == 0) {
                                  echo "<tr>
                                         <td class='text-center' >$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";
                                       $cekrow = 1;
                                }else{
                                  echo "<tr>
                                         <td class='text-center' >$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";                                    }
                                  $no++;
                                  $waktu = null;
                          }
                          $a++;
                        }

                              // END TW I
                        //  }

                      }
                  ?>
                </tbody>
                </table>
             </div>
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
             <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>SASARAN KEGIATAN</th>
                    <th>JUMLAH PESERTA</th>
                    <th>WAKTU PELAKSANAAN</th>
                    <th>MATERI</th>
                    <th>NAMA PETUGAS PENERANGAN HUKUM</th>
                  </tr>
                  <tr>
                    <th class="text-center">1</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">5</th>
                    <th class="text-center">6</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['tahun'])){

                      $no = 1;
                      $luh = mysqli_query($con, $SQLTW3);
                      $rowspan = mysqli_num_rows($luh);
                      $valuetw = "I";
                      $cekrow = 0;
                      if ($rowspan == 0 || $rowspan == null) {
                        echo "<tr>
                               <td class='text-center' colspan=6><strong>N I H I L</strong></td>
                              </tr>";
                      }else{
                          while ($p = mysqli_fetch_array($luh)){
                                $waktu = date_create($p['Waktu']);

                                if ($cekrow == 0) {
                                  echo "<tr>
                                         <td class='text-center'>$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";
                                       $cekrow = 1;
                                }else{
                                  echo "<tr>
                                         <td class='text-center'>$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";                                    }
                                  $no++;
                                  $waktu = null;
                          }
                          $a++;
                        }

                              // END TW I
                        //  }

                      }
                  ?>
                </tbody>
                </table>
             </div>
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
             <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>SASARAN KEGIATAN</th>
                    <th>JUMLAH PESERTA</th>
                    <th>WAKTU PELAKSANAAN</th>
                    <th>MATERI</th>
                    <th>NAMA PETUGAS PENERANGAN HUKUM</th>
                  </tr>
                  <tr>
                    <th class="text-center">1</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">5</th>
                    <th class="text-center">6</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['tahun'])){

                      $no = 1;
                      $luh = mysqli_query($con, $SQLTW4);
                      $rowspan = mysqli_num_rows($luh);
                      $valuetw = "I";
                      $cekrow = 0;
                      if ($rowspan == 0 || $rowspan == null) {
                        echo "<tr>
                               <td class='text-center' colspan=6><strong>N I H I L</strong></td>
                              </tr>";
                      }else{
                          while ($p = mysqli_fetch_array($luh)){
                                $waktu = date_create($p['Waktu']);

                                if ($cekrow == 0) {
                                  echo "<tr>
                                         <td class='text-center'>$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";
                                       $cekrow = 1;
                                }else{
                                  echo "<tr>
                                         <td class='text-center'>$no</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                         <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                         <td>" . $p['SasaranDanMateri'] . "</td>
                                         <td>" . $p['Petugas'] . "</td>
                                       </tr>";                                    }
                                  $no++;
                                  $waktu = null;
                          }
                          $a++;
                        }

                              // END TW I
                        //  }

                      }
                  ?>
                </tbody>
                </table>
             </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.row -->
