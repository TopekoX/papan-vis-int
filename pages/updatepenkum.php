<?php
include_once '../visual/konfig.php';
?>
<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Result</h1>
  </div>

<?php

$id = $_POST['id'];
$sasaran = $_POST['sasaran'];
$materi = $_POST['materi'];
$jumlahpeserta = $_POST['jumlahpeserta'];
$waktu = $_POST['waktu'];
$tempat = $_POST['tempat'];
$petugas = $_POST['petugas'];
$kerjasama = $_POST['kerjasama'];
$ket = $_POST['ket'];
$tahun = $_POST['tahun'];

$target_dir = "img/uploads/";
$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);

$SQL = "SELECT * FROM penkum WHERE ID=$id";

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

if($_FILES["fileToUpload1"]["name"] == ""){
  $urlimg1 = $img1;
}else {
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["savepenkum"])) {
      $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
      if($check !== false) {
          // echo "<h3>File is an image - " . $check["mime"] . ".</h3>";
          $uploadOk = 1;
      } else {
          echo "<h3>Bukan file gambar.</h3>";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file1)) {
      echo "<h3>Maaf, gambarnya sudah ada.</h3>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload1"]["size"] > 500000) {
      echo "<h3>Maaf, ukuran filenya kebesaran. Max 500kb.</h3>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "<h3>Maaf, hanya file ekstensi JPG, JPEG, PNG & GIF yang bisa di upload.</h3>";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<h3>Maaf, gambar anda tidak bisa diupload.</h3>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
          echo "<h3>Gambar ". basename( $_FILES["fileToUpload1"]["name"]). " Berhasil di Upload.</h3>";
          $urlimg1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
          unlink($img1);
      } else {
          echo "<h3>Error upload file.</h3>.";
      }
  }
}

if($_FILES["fileToUpload2"]["name"] == ""){
  $urlimg2 = $img2;
}else {
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["savepenkum"])) {
      $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
      if($check !== false) {
          // echo "<h3>File is an image - " . $check["mime"] . ".</h3>";
          $uploadOk = 1;
      } else {
          echo "<h3>Bukan file gambar.</h3>";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file2)) {
      echo "<h3>Maaf, gambarnya sudah ada.</h3>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload2"]["size"] > 500000) {
      echo "<h3>Maaf, ukuran filenya kebesaran. Max 500kb.</h3>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "<h3>Maaf, hanya file ekstensi JPG, JPEG, PNG & GIF yang bisa di upload.</h3>";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<h3>Maaf, gambar anda tidak bisa diupload.</h3>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
          echo "<h3>Gambar ". basename( $_FILES["fileToUpload2"]["name"]). " Berhasil di Upload.</h3>";
          $urlimg2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
          unlink($img2);
      } else {
          echo "<h3>Error upload file.</h3>.";
      }
  }
}

if($_FILES["fileToUpload3"]["name"] == ""){
  $urlimg3 = $img3;
}else {
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["savepenkum"])) {
      $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
      if($check !== false) {
          // echo "<h3>File is an image - " . $check["mime"] . ".</h3>";
          $uploadOk = 1;
      } else {
          echo "<h3>Bukan file gambar.</h3>";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file3)) {
      echo "<h3>Maaf, gambarnya sudah ada.</h3>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload2"]["size"] > 500000) {
      echo "<h3>Maaf, ukuran filenya kebesaran. Max 500kb.</h3>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "<h3>Maaf, hanya file ekstensi JPG, JPEG, PNG & GIF yang bisa di upload.</h3>";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<h3>Maaf, gambar anda tidak bisa diupload.</h3>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
          echo "<h3>Gambar ". basename( $_FILES["fileToUpload3"]["name"]). " Berhasil di Upload.</h3>";
          $urlimg3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
          unlink($img3);
      } else {
          echo "<h3>Error upload file.</h3>.";
      }
  }
}

if($_FILES["fileToUpload4"]["name"] == ""){
  $urlimg4 = $img4;

}else {
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file4,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["savepenkum"])) {
      $check = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
      if($check !== false) {
          // echo "<h3>File is an image - " . $check["mime"] . ".</h3>";
          $uploadOk = 1;
      } else {
          echo "<h3>Bukan file gambar.</h3>";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file4)) {
      echo "<h3>Maaf, gambarnya sudah ada.</h3>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload4"]["size"] > 500000) {
      echo "<h3>Maaf, ukuran filenya kebesaran. Max 500kb.</h3>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "<h3>Maaf, hanya file ekstensi JPG, JPEG, PNG & GIF yang bisa di upload.</h3>";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<h3>Maaf, gambar anda tidak bisa diupload.</h3>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4)) {
          echo "<h3>Gambar ". basename( $_FILES["fileToUpload4"]["name"]). " Berhasil di Upload.</h3>";
          $urlimg4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
          unlink($img4);
      } else {
          echo "<h3>Error upload file.</h3>.";
      }
  }
}

$SQL = "UPDATE penkum SET Sasaran='$sasaran', Materi='$materi', JumlahPeserta='$jumlahpeserta',
      Waktu='$waktu', Tempat='$tempat', JenisPelaksanaan='langsung', Petugas='$petugas',
      KerjaSamaInstansiLain='$kerjasama', LinkGambar1='$urlimg1', LinkGambar2='$urlimg2',
      LinkGambar3='$urlimg3', LinkGambar4='$urlimg4', Ket='$ket' WHERE ID='$id'";

if (mysqli_query($con, $SQL)){
  ?>
  <p>
    Sukses Update Data.
  </p>
    <form class="" action="index.php?p=penkum" method="post">
      <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
      <input type="submit" class="btn btn-success" value="Kembali">
    </form>
  <?php
}else {
  echo "Error";
}

?>
</div>
