<?php
/*
* Tabel Data Laporan Penyuluhan Hukum
*/

include_once 'konfig.php';

$tw=$_POST['triwulan'];
$tahun=$_POST['tahun'];
?>
<br/>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>Data Hasil Pelaksanaan Kegiatan Penyuluhan Hukum Tiap Triwulan Tahun <?php echo $tahun?></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">TRIWULAN</th>
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

                        $SQLTW1 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-01-01' AND Waktu <= '$tahun-03-31' ORDER BY Waktu ASC";
                        $SQLTW2 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-04-01' AND Waktu <= '$tahun-06-30' ORDER BY Waktu ASC";
                        $SQLTW3 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-07-01' AND Waktu <= '$tahun-09-30' ORDER BY Waktu ASC";
                        $SQLTW4 = "SELECT * FROM visual.luhkum WHERE Waktu >= '$tahun-10-01' AND Waktu <= '$tahun-12-31' ORDER BY Waktu ASC";

                     /*  while ($a <= 4) {
                            if ($a == 1) {
                              $luh = mysqli_query($con, $SQLTW1);
                              $valuetw = "I";
                            }else if ($a == 2) {
                              $luh = mysqli_query($con, $SQLTW2);
                              $valuetw = "II";
                            }else if ($a == 3) {
                              $luh = mysqli_query($con, $SQLTW3);
                              $valuetw = "III";
                            }else if ($a == 4) {
                              $luh = mysqli_query($con, $SQLTW4);
                              $valuetw = "IV";
                            }
                            */

                            // TW I
                            $no = 1;
                            $luh = mysqli_query($con, $SQLTW1);
                            $rowspan = mysqli_num_rows($luh);
                            $valuetw = "I";
                            $cekrow = 0;
                            if ($rowspan == 0 || $rowspan == null) {
                              echo "<tr>
                                     <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                     <td class='text-center' colspan=5><strong>N I H I L</strong></td>
                                    </tr>";
                            }else{
                                while ($p = mysqli_fetch_array($luh)){
                                      $waktu = date_create($p['Waktu']);

                                      if ($cekrow == 0) {
                                        echo "<tr>
                                               <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                               <td>" . $p['SasaranDanMateri'] . "</td>
                                               <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                               <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                               <td>" . $p['SasaranDanMateri'] . "</td>
                                               <td>" . $p['Petugas'] . "</td>
                                              </tr>";
                                             $cekrow = 1;
                                      }else{
                                             echo "<tr>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                       <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td>" . $p['Petugas'] . "</td>
                                                  </tr>";
                                          }
                                        $no++;
                                        $waktu = null;
                              }
                              $a++;
                            }

                              // END TW I

                              // TW II
                              $no = 1;
                              $luh = mysqli_query($con, $SQLTW2);
                              $rowspan = mysqli_num_rows($luh);
                              $valuetw = "II";
                              $cekrow = 0;
                              if ($rowspan == 0 || $rowspan == null) {
                                echo "<tr>
                                       <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                       <td class='text-center' colspan=5><strong>N I H I L</strong></td>
                                      </tr>";
                              }else{
                                  while ($p = mysqli_fetch_array($luh)){
                                        $waktu = date_create($p['Waktu']);

                                        if ($cekrow == 0) {
                                          echo "<tr>
                                                 <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                                 <td>" . $p['SasaranDanMateri'] . "</td>
                                                 <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                 <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                 <td>" . $p['SasaranDanMateri'] . "</td>
                                                 <td>" . $p['Petugas'] . "</td>
                                               </tr>";
                                               $cekrow = 1;
                                        }else{
                                               echo "<tr>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                       <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td>" . $p['Petugas'] . "</td>
                                                     </tr>";
                                          $no++;
                                          $waktu = null;
                                }
                                $a++;
                              }
                            }
                                // END TW II

                                // TW III
                                $no = 1;
                                $luh = mysqli_query($con, $SQLTW3);
                                $rowspan = mysqli_num_rows($luh);
                                $valuetw = "III";
                                $cekrow = 0;
                                if ($rowspan == 0 || $rowspan == null) {
                                  echo "<tr>
                                         <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                         <td class='text-center' colspan=5><strong>N I H I L</strong></td>
                                        </tr>";
                                }else{
                                    while ($p = mysqli_fetch_array($luh)){
                                          $waktu = date_create($p['Waktu']);

                                          if ($cekrow == 0) {
                                            echo "<tr>
                                                   <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                                   <td>" . $p['SasaranDanMateri'] . "</td>
                                                   <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                   <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                   <td>" . $p['SasaranDanMateri'] . "</td>
                                                   <td>" . $p['Petugas'] . "</td>
                                                 </tr>";
                                                 $cekrow = 1;
                                          }else{
                                                 echo "<tr>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                       <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td>" . $p['Petugas'] . "</td>
                                                      </tr>";
                                              }
                                            $no++;
                                            $waktu = null;
                                  }
                                  $a++;
                                }

                                // TW III
                                $no = 1;
                                $luh = mysqli_query($con, $SQLTW4);
                                $rowspan = mysqli_num_rows($luh);
                                $valuetw = "IV";
                                $cekrow = 0;
                                if ($rowspan == 0 || $rowspan == null) {
                                  echo "<tr>
                                         <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                         <td class='text-center' colspan=5><strong>N I H I L</strong></td>
                                        </tr>";
                                }else{
                                    while ($p = mysqli_fetch_array($luh)){
                                          $waktu = date_create($p['Waktu']);

                                          if ($cekrow == 0) {
                                            echo "<tr>
                                                   <td class='text-center' rowspan=$rowspan>$valuetw</td>
                                                   <td>" . $p['SasaranDanMateri'] . "</td>
                                                   <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                   <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                   <td>" . $p['SasaranDanMateri'] . "</td>
                                                   <td>" . $p['Petugas'] . "</td>
                                                 </tr>";
                                                 $cekrow = 1;
                                          }else{
                                                 echo "<tr>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                                       <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                                       <td>" . $p['SasaranDanMateri'] . "</td>
                                                       <td>" . $p['Petugas'] . "</td>
                                                      </tr>";
                                              }
                                            $no++;
                                            $waktu = null;
                                  }
                                  $a++;
                                }

                        //  }

                      }

                  ?>
                </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.row -->
