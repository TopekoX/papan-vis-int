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
        <h3 class="page-header">Data Hasil Pelaksanaan Kegiatan Penyuluhan Hukum wilayah <?php echo $satker; ?></h3>
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
                    <th class="text-center">No</th>
                    <th class="text-center">Jumlah Kecamatan</th>
                    <th class="text-center">Jumlah Kelurahan</th>
                    <th class="text-center">Jumlah Penduduk</th>
                    <th class="text-center">Waktu Pelaksanaan Kegiatan Luhkum</th>
                    <th class="text-center">Sasaran Peserta Kegiatan Luhkum & Materi</th>
                    <th class="text-center">Jumlah Peserta</th>
                    <th class="text-center">Nama Kelurahan</th>
                    <th class="text-center">Lokasi Penyuluhan</th>
                    <th class="text-center">Keterangan</th>
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
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_POST['tahun']) AND isset($_POST['triwulan'])){

                      if($tw == '1'){
                        $SQL = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-01-01' AND Waktu <= '$tahun-03-31' ORDER BY Waktu ASC";
                      }else if($tw == '2'){
                        $SQL = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-04-01' AND Waktu <= '$tahun-06-30' ORDER BY Waktu ASC";
                      }else if($tw == '3'){
                          $SQL = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-07-01' AND Waktu <= '$tahun-09-30' ORDER BY Waktu ASC";
                      }else if($tw == '4'){
                        $SQL = "SELECT * FROM bdi.luhkum WHERE Waktu >= '$tahun-10-01' AND Waktu <= '$tahun-12-31' ORDER BY Waktu ASC";
                      }

                        $luh = mysqli_query($con, $SQL);
                        $no = 1;

                        if (mysqli_num_rows($luh)== 0) {
                            echo "<tr>
                                    <td colspan=10 class='text-center'><strong><h3>N I H I L</h3></strong></td>
                                  </tr>";
                        }else{
                            while ($p = mysqli_fetch_array($luh)){
                                  $waktu = date_create($p['Waktu']);

                                  $SQLluhkec = "SELECT COUNT(*) AS JumlahKecamatan FROM(SELECT kecamatan.NamaKecamatan FROM kegiatanluhkum, luhkum, kecamatan, kelurahan
                                    WHERE kegiatanluhkum.IDLuhkum=".$p['ID']."
                                    AND kegiatanluhkum.IDKelurahan=kelurahan.ID AND kelurahan.IDKecamatan=kecamatan.ID GROUP BY kecamatan.NamaKecamatan) luhkum";

                                  $kec = mysqli_query($con, $SQLluhkec);

                                  while ($k = mysqli_fetch_array($kec)){
                                    $jmlkec = $k['JumlahKecamatan'];
                                  }

                            $SQLluhkel = "SELECT COUNT(IDKelurahan) AS JumlahKelurahan FROM bdi.kegiatanluhkum WHERE IDLuhkum = ".$p['ID']."";

                            $kel = mysqli_query($con, $SQLluhkel);

                                  while ($k = mysqli_fetch_array($kel)){
                                    $jmlkel = $k['JumlahKelurahan'];
                                  }

                                   echo "<tr>
                                          <td class='text-center'>$no</td>
                                          <td class='text-center'>$jmlkec</td>
                                          <td class='text-center'>$jmlkel</td>
                                          <td class='text-center'>" . $p['JumlahPenduduk'] . "</td>
                                          <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                                          <td>" . $p['SasaranDanMateri'] . "</td>
                                          <td class='text-center'>" . $p['JumlahPeserta'] . "</td>
                                          <td>" . $p['NamaKelurahanDesa'] . "</td>
                                          <td>" . $p['LokasiPenyuluhan'] . "</td>
                                          <td>" . $p['Ket'] . "</td>
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
