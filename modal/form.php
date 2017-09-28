<div class="modal fade" id="penkumJenisPelaksanaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Jenis Pelaksanaan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=formpenkum" method="post">
        <div class="modal-body">
          <div class="radio">
            <label><input type="radio" name="langsung" value="1" checked="checked">Langsung</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="langsung" value="0">Tidak Langsung</label>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Proses"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="pilihKecamatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Kecamatan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="" action="index.php?p=formluhkum" method="post">
        <div class="modal-body">
        <?php
        include_once '../bdi/konfig.php';
        $SQL = "SELECT * FROM kelurahan";
        $pen = mysqli_query($con, $SQL);

        while ($p = mysqli_fetch_array($pen)){
          ?>
          <input type="checkbox" name="kelurahan[]" value=<?php echo $p['ID'] ?> >
          <label><?php echo $p['NamaKelurahan']; ?></label> <br>
          <?php
        }
         ?>
         <br>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" value="Proses"></input>
          </div>
        </form>

    </div>
  </div>
</div>
