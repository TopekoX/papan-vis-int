<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Statistik Kegiatan Penkum & Luhkum</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
              <?php
                  if(isset($_POST["kecamatan"])){
                    $tahunini = date("Y");
                    $tahunawal = $tahunini - 5;
                    $tahunakhir = $tahunini - 1;
                ?>
                <center>Daerah Yang Telah Disuluh Tahun <?php echo $tahunawal; ?> s/d <?php echo $tahunakhir; ?></center>
                <?php } ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <canvas id="luhkecamatan"></canvas>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
<!-- /.row -->
</div>
