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
                <center>Data Statistik Grafik Batang Pelaksanaan Kegiatan Penerangan Hukum & Penyuluhan Hukum Triwulan Berjalan <?php echo "Tahun ".$_POST['tahunPenkumLuhkum']?></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <canvas id="penluhpertw"></canvas>
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
                <thead>
                  <tr>
                    <th>Triwulan</th>
                    <th>I</th>
                    <th>II</th>
                    <th>III</th>
                    <th>IV</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include_once '../visual/konfig.php';

                    if(isset($_POST["tahunPenkumLuhkum"])){
                    	$tahun = $_POST['tahunPenkumLuhkum'];

                      $pen = mysqli_query($con, "SELECT IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31')) AS TriwulanI,
                    	          IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30')) AS TriwulanII,
                    	          IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30')) AS TriwulanIII,
                    	          IF(SUM(DATE(penkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31') IS NULL, 0, SUM(DATE(penkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31')) AS TriwulanIV FROM visual.penkum");
                    	$luh= mysqli_query($con, "SELECT IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31') IS NULL, 0 , SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-01-01' AND '$tahun-03-31')) AS TriwulanI,
                    	          IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-04-01' AND '$tahun-06-30')) AS TriwulanII,
                    	          IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-07-01' AND '$tahun-09-30')) AS TriwulanIII,
                    	          IF(SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31') IS NULL, 0, SUM(DATE(luhkum.Waktu) BETWEEN '$tahun-10-01' AND '$tahun-12-31')) AS TriwulanIV FROM visual.luhkum");

                      while ($p = mysqli_fetch_array($pen)){
                             echo "<tr><td>Penerangan Hukum</td><td>" . $p['TriwulanI'] . "</td><td>" . $p['TriwulanII'] . "</td><td>" . $p['TriwulanIII'] . "</td><td>" . $p['TriwulanIV'] . "</td></tr>";
                      }
                      while ($p = mysqli_fetch_array($luh)){
                             echo "<tr><td>Penyuluhan Hukum</td><td>" . $p['TriwulanI'] . "</td><td>" . $p['TriwulanII'] . "</td><td>" . $p['TriwulanIII'] . "</td><td>" . $p['TriwulanIV'] . "</td></tr>";
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
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>Jumlah Peserta</center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table table-borderless">
                <?php
                    if(isset($_POST["tahunPenkumLuhkum"])){

                     $pen = mysqli_query($con, "SELECT IF(SUM(penkum.JumlahPeserta) IS NULL, 0, SUM(penkum.JumlahPeserta)) AS penkum
                                          FROM visual.penkum WHERE penkum.waktu>='$tahun-01-01' AND penkum.waktu<='$tahun-12-31'");
                     $luh = mysqli_query($con, "SELECT IF(SUM(luhkum.JumlahPeserta) IS NULL, 0, SUM(luhkum.JumlahPeserta)) AS luhkum
                                          FROM visual.luhkum WHERE luhkum.waktu>='$tahun-01-01' AND luhkum.waktu<='$tahun-12-31'");
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
                    Orang
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
                    Orang
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
