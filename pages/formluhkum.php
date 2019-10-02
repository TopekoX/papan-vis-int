<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Form Luhkum</h1>
  </div>
  <div class="col-lg-12">
    <?php
    include_once '../visual/konfig.php';

    if (!empty($_POST['kelurahan'])){
      $kelurahan = $_POST['kelurahan'];
    
      ?>
      <form method='post' action="index.php?p=addluhkum" enctype="multipart/form-data">
        <table class='table table-bordered'>

        <tr>
            <td>Jumlah Penduduk</td>
            <td><input type='text' name='jumlahpenduduk' class='form-control' placeholder='Contoh : 100' autofocus required /> <small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td><input type='date' name='waktu' class='form-control' placeholder='Contoh : 20' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Sasaran dan Materi</td>
            <td><input type='text' name='sasaranmateri' class='form-control' placeholder='Contoh : Warga Kelurahan Ujuna materi KDRT' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Jumlah Peserta</td>
            <td><input type='text' name='jumlahpeserta' class='form-control' placeholder='Contoh : 60' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Nama Kelurahan</td>
            <td><input type='text' name='namakelurahan' class='form-control' placeholder='Contoh : Kelurahan Ujuna, Kampung Baru' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Lokasi Penyuluhan</td>
            <td><input type='text' name='lokasi' class='form-control' placeholder='Contoh : Kelurahan Ujuna' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td><input type='text' name='petugas' class='form-control' placeholder='Contoh : Ucup, Ipul' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type='text' name='ket' class='form-control' placeholder='Keterangan Tambahan' ></td>
        </tr>
        <tr>
            <td colspan="2">
              Pilih Foto Dokumentasi: <br>
              <input type="file" name="fileToUpload1" > <br>
              <input type="file" name="fileToUpload2" > <br>
              <input type="file" name="fileToUpload3" > <br>
              <input type="file" name="fileToUpload4" > <br>
            </td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
            <?php
              foreach ($_POST['kelurahan'] as $kel) {
                ?>
                <input type="hidden" name="kelurahan[]" value=<?php echo "$kel"; ?> />
                <?php
              }
             ?>
            <button type="submit" class="btn btn-primary" name="saveluhkum" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Proses
			</button>
            </td>
        </tr>

    </table>
    </form>
    <?php
    }
    ?>
  </div>
</div>
