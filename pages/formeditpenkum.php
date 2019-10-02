<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Form Edit Penkum</h1>
  </div>
  <div class="col-lg-12">
    <?php
    include_once '../visual/konfig.php';
    $id = $_POST['idpen'];
    $tahun = $_POST['tahun'];

    $SQL = "SELECT * FROM penkum WHERE ID=$id";

    if ($pen = mysqli_query($con, $SQL)){
        while ($p = mysqli_fetch_array($pen)){
      ?>
      <form method='post' action="index.php?p=updatepenkum" enctype="multipart/form-data">
        <table class='table table-bordered'>

        <tr>
            <td>Sasaran</td>
            <td><input type='text' name='sasaran' class='form-control' value="<?php echo $p['Sasaran'] ?>" required > <small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Materi</td>
            <td><input type='text' name='materi' class='form-control' value="<?php echo $p['Materi']; ?>" required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Jumlah Peserta</td>
            <td><input type='text' name='jumlahpeserta' class='form-control' value="<?php echo $p['JumlahPeserta']; ?>" required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td><input type='date' name='waktu' class='form-control' value="<?php echo $p['Waktu']; ?>" required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td><input type='text' name='tempat' class='form-control' value="<?php echo $p['Tempat']; ?>" required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td><input type='text' name='petugas' class='form-control' value="<?php echo $p['Petugas']; ?>" required><small><i><font color="red">wajib diisi</font></i></small></td>
        </tr>
        <tr>
            <td>Kerjasama dgn Instansi Lain</td>
            <td><input type='text' name='kerjasama' class='form-control' value="<?php echo $p['KerjaSamaInstansiLain']; ?>"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type='text' name='ket' class='form-control' value="<?php echo $p['Ket']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
              Foto Dokumentasi: <br>
              <?php if($p['LinkGambar1'] != null){
                echo '<img name="imgPenkum" src="'.$p['LinkGambar1'].'" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload1" value='.$p['LinkGambar1'].'> <br>';
              } else {
                echo '<img name="imgPenkum" src="img/uploads/not_found.jpg" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload1" > <br>';
              }?>

              <?php if($p['LinkGambar2'] != null){
                echo '<img name="imgPenkum" src="'.$p['LinkGambar2'].'" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload2" value='.$p['LinkGambar2'].'> <br>';
              } else {
                echo '<img name="imgPenkum" src="img/uploads/not_found.jpg" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload2"> <br>';
              }?>

              <?php if($p['LinkGambar3'] != null){
                echo '<img name="imgPenkum" src="'.$p['LinkGambar3'].'" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload3" value='.$p['LinkGambar3'].'> <br>';

              } else {
                echo '<img name="imgPenkum" src="img/uploads/not_found.jpg" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload3"> <br>';
              }?>

              <?php if($p['LinkGambar4'] != null){
                echo '<img name="imgPenkum" src="'.$p['LinkGambar4'].'" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload4" value='.$p['LinkGambar4'].'> <br>';

              } else {
                echo '<img name="imgPenkum" src="img/uploads/not_found.jpg" alt="The Pulpit Rock" width="304" height="228">';
                echo '<input type="file" name="fileToUpload4"> <br>';

              }?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
            <input type="hidden" name="id" value="<?php echo $p['ID'] ?>">
            <input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
            <button type="submit" class="btn btn-primary" name="savepenkum" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Proses
			</button>
            </td>
        </tr>

    </table>
    </form>
    <?php
      }
    }
    ?>
  </div>
</div>
