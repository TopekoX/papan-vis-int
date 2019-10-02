<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Form Penkum</h1>
  </div>
  <div class="col-lg-12">
    <?php
    include_once '../visual/konfig.php';
    $langsung = $_POST['langsung'];
    $tahun = $_POST['tahun'];

    if ($langsung == 1){
      ?>
      <form method='post' action="index.php?p=addpenkum" enctype="multipart/form-data">
        <table class='table table-bordered'>

        <tr>
            <td>Sasaran</td>
            <td><input type='text' name='sasaran' class='form-control' placeholder='Contoh : SMAN 1 Palu' autofocus required /> <small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Materi</td>
            <td><input type='text' name='materi' class='form-control' placeholder='Contoh : Bahaya Narkoba, Dampak Korupsi' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Jumlah Peserta</td>
            <td><input type='text' name='jumlahpeserta' class='form-control' placeholder='Contoh : 60' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td><input type='date' name='waktu' class='form-control' placeholder='Contoh : 20' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td><input type='text' name='tempat' class='form-control' placeholder='Contoh : Kantor Pertanahan' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td><input type='text' name='petugas' class='form-control' placeholder='Contoh : Ucup, Ipul' required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Kerjasama dgn Instansi Lain</td>
            <td><input type='text' name='kerjasama' class='form-control' placeholder='Contoh : Dinas Pendidikan Kota Palu'></td>
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
            <button type="submit" class="btn btn-primary" name="savepenkum" id="btn-save">
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
