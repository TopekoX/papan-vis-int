<?php
/*
* Tabel Data Laporan Penyuluhan Hukum
*/

include_once 'konfig.php';

$tw=$_POST['triwulan'];
$tahun=$_POST['tahun'];
?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Data Hasil Pelaksanaan Kegiatan Penerangan Hukum wilayah <?php echo $satker; ?></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>Laporan Triwulan <?php echo $tw ?> Tahun <?php echo $tahun?></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="text-center" rowspan="2">No</th>
                    <th colspan="6" class="text-center">Pelaksanaan Penkum Secara Langsung</th>
                    <th colspan="4" class="text-center">Pelaksanaan Penkum Secara Tidak Langsung</th>
                  </tr>
                  <tr>
                    <th class="text-center">Sasaran Peserta</th>
                    <th class="text-center">Materi</th>
                    <th class="text-center">Jumlah Peserta</th>
                    <th class="text-center">Waktu Pelaksanaan</th>
                    <th class="text-center">Tempat/Lokasi Keg.</th>
                    <th class="text-center">Ket</th>
                    <th class="text-center">Media yang digunakan</th>
                    <th class="text-center">Materi</th>
                    <th class="text-center">Waktu Pelaksanaan</th>
                    <th class="text-center">Ket</th>
                  </tr>
                  <tr>
                    <th class="text-center">1</th>
                    <th class="text-center">2</th>
                    <th class="text-center">3</th>
                    <th class="text-center">4</th>
                    <th class="text-center">5</th>
                    <th class="text-center">6</th>
                    <th class="text-center">7</th>
                    <th class="text-center">8</th>
                    <th class="text-center">9</th>
                    <th class="text-center">10</th>
                    <th class="text-center">11</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['tahun']) AND isset($_POST['triwulan'])){

                      if($tw == '1'){
                        $SQL = "SELECT * FROM visual.penkum WHERE Waktu >= '$tahun-01-01' AND Waktu <= '$tahun-03-31' ORDER BY Waktu ASC";
                      }else if($tw == '2'){
                        $SQL = "SELECT * FROM visual.penkum WHERE Waktu >= '$tahun-04-01' AND Waktu <= '$tahun-06-30' ORDER BY Waktu ASC";
                      }else if($tw == '3'){
                          $SQL = "SELECT * FROM visual.penkum WHERE Waktu >= '$tahun-07-01' AND Waktu <= '$tahun-09-30' ORDER BY Waktu ASC";
                      }else if($tw == '4'){
                        $SQL = "SELECT * FROM visual.penkum WHERE Waktu >= '$tahun-10-01' AND Waktu <= '$tahun-12-31' ORDER BY Waktu ASC";
                      }

                        $pen = mysqli_query($con, $SQL);
                        $no = 1;

                        if (mysqli_num_rows($pen)== 0) {
                            echo "<tr>
                                    <td colspan=11 class='text-center'><strong><h3>N I H I L</h3></strong></td>
                                  </tr>";
                        }else{
                            while ($p = mysqli_fetch_array($pen)){
                                  $waktu = date_create($p['Waktu']);

                                   echo "<tr>
                                          <td class='text-center'>$no</td>
                                          <td>" . $p['Sasaran'] . "</td>
                                          <td>" . $p['Materi'] . "</td>
                                          <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                          <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                          <td>" . $p['Tempat'] . "</td>
                                          <td>" . $p['Ket'] . "</td>
                                          <td>" . $p['Media'] . "</td>
                                          <td>" . $p['MateriTidakLangsung'] . "</td>
                                          <td>" . $p['WaktuTidakLangsung'] . "</td>
                                          <td>" . $p['KetTidakLangsung'] . "</td>
                                        </tr>";
                                    $no++;
                          }
                        }
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
