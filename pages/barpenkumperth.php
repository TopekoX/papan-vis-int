<div class="container">

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Visualisasi Data Penkum & Luhkum</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>Data Statistik Grafik Batang Pelaksanaan Kegiatan Penerangan Hukum & Penyuluhan Hukum 5 Tahun Terakhir</center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <canvas id="penluhperth"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>Tabel Kegiatan</center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table">

                <?php
                    if(isset($_POST["tahunini"])){
                      $tahunini = date("Y");
                	?>
                <thead>
                  <tr>
                    <th>Tahun</th>
                    <th><?php echo $tahunini-5 ?></th>
                    <th><?php echo $tahunini-4 ?></th>
                    <th><?php echo $tahunini-3 ?></th>
                    <th><?php echo $tahunini-2 ?></th>
                    <th><?php echo $tahunini-1 ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include_once '../visual/konfig.php';

                    $tahun5 = $tahunini-1;
                    $tahunakhir = $tahun5;
                    $tahun4 = $tahun5-1;
                    $tahun3 = $tahun4-1;
                    $tahun2 = $tahun3-1;
                    $tahun1 = $tahun2-1;
                    $tahunawal = $tahun1;

                    if(isset($_POST["tahunini"])){
                      $tahun = $_POST['tahunPenkumLuhkum'];

                      $penkum5 = mysqli_query($con, "SELECT IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-03-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-12-31')) AS '$tahun1',
                      					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31')) AS '$tahun2',
                      					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31')) AS '$tahun3',
                      					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31')) AS '$tahun4',
                      					IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31')) AS '$tahun5' FROM visual.penkum");

                      $luhkum5 = mysqli_query($con, "SELECT IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-03-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun1-01-01' AND '$tahun1-12-31')) AS '$tahun1',
                      					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun2-01-01' AND '$tahun2-12-31')) AS '$tahun2',
                      					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun3-01-01' AND '$tahun3-12-31')) AS '$tahun3',
                      					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun4-01-01' AND '$tahun4-12-31')) AS '$tahun4',
                      					IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun5-01-01' AND '$tahun5-12-31')) AS '$tahun5' FROM visual.luhkum");


                      while ($p = mysqli_fetch_array($penkum5)){
                             echo "<tr><td>Penerangan Hukum</td><td>" . $p[$tahun1] . "</td><td>" . $p[$tahun2] . "</td><td>" . $p[$tahun3] . "</td><td>" . $p[$tahun4] . "</td><td>" . $p[$tahun5] . "</td></tr>";
                      }
                      while ($p = mysqli_fetch_array($luhkum5)){
                        echo "<tr><td>Penyuluhan Hukum</td><td>" . $p[$tahun1] . "</td><td>" . $p[$tahun2] . "</td><td>" . $p[$tahun3] . "</td><td>" . $p[$tahun4] . "</td><td>" . $p[$tahun5] . "</td></tr>";
                      }
                    }
                  ?>

                </tbody>
              </table>
              <?php } ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>Jumlah Kegiatan 5 Tahun Terakhir</center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table table-borderless">
                <?php
                    if(isset($_POST["tahunini"])){

                     $luh = mysqli_query($con, "SELECT IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahunawal-01-01' AND '$tahunakhir-03-31') IS NULL, 0, SUM(DATE(luhkum.Waktu)
                                          BETWEEN '$tahunawal-01-01' AND '$tahunakhir-12-31')) AS 'luhkum' FROM visual.luhkum");
                     $pen = mysqli_query($con, "SELECT IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahunawal-01-01' AND '$tahunakhir-03-31') IS NULL, 0, SUM(DATE(penkum.Waktu)
                                          BETWEEN '$tahunawal-01-01' AND '$tahunakhir-12-31')) AS 'penkum' FROM visual.penkum");
                   }
                 ?>

                <tr>
                  <td>
                    Penerangan Hukum
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    <p class="text-right">
                    <?php
                      while ($p = mysqli_fetch_array($pen)){
                             echo $p['penkum'];
                      }
                     ?>
                   </p>
                  </td>
                  <td>
                    Kali
                  </td>
                </tr>
                <tr>
                  <td>
                    Penyuluhan Hukum
                  </td>
                  <td>
                    :
                  </td>
                  <td>
                    <p class="text-right">
                      <?php
                      while ($p = mysqli_fetch_array($luh)){
                             echo $p['luhkum'];
                      }
                     ?></p>
                  </td>
                  <td>
                    Kali
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.row -->

</div>
