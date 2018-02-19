<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Result</h1>
  </div>

  <?php
  $id = $_POST['id'];
  $tahun = $_POST['tahun'];

  include_once '../bdi/konfig.php';

  $SQL = "SELECT * FROM luhkum WHERE ID=$id";
  $img1 = null;
  $img2 = null;
  $img3 = null;
  $img4 = null;

  if ($pen = mysqli_query($con, $SQL)){
      while ($p = mysqli_fetch_array($pen)){
          $img1 = $p['LinkGambar1'];
          $img2 = $p['LinkGambar2'];
          $img3 = $p['LinkGambar3'];
          $img4 = $p['LinkGambar4'];
      }
  }

  $del = mysqli_query($con, "DELETE FROM luhkum WHERE ID=".$id."");

  if ($del) {
    if($img1 != null || $img1 != ""){
      unlink($img1);
    }
    if($img2 != null){
      unlink($img2);
    }
    if($img3 != null){
      unlink($img3);
    }
    if($img4 != null){
      unlink($img4);
    }
    ?>
    <p>
      Sukses Hapus Data.
    </p>
      <form class="" action="index.php?p=luhkum" method="post">
        <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
        <input type="submit" class="btn btn-success" value="Kembali">
      </form>
    <?php
  }else {
    ?>
    <p>
      Gagal Hapus Data.
    </p>
      <form class="" action="index.php?p=luhkum" method="post">
        <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
        <input type="submit" class="btn btn-success" value="Kembali">
      </form>
    <?php
  }

?>
</div>
