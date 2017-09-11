<div class="modal fade" id="tahunPenkum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=penkum" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="tahunLuhkum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=luhkum" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="tahunPerTWPenkumLuhkum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Triwulan</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=barpenkumpertw" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahunPenkumLuhkum">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="tahunPerTHPenkumLuhkum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=barpenkumperth" method="post">
        <div class="modal-body">
          <div class="form-group">
            Menampilkan Data Penkum dan Luhkum 5 Tahun Terakhir
            <input type="hidden" name="tahunini" value="tahunini" />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Lanjut"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="tahunPerKec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=barluhkumkec" method="post">
        <div class="modal-body">
          <div class="form-group">
            Menampilkan Data Luhkum per Daerah dalam 5 Tahun Terakhir
            <input type="hidden" name="kecamatan" value="kecamatan" />
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Lanjut"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="tahunTabel1TW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=tabel1" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleSelect1">Pilih Tahun:</label>
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Pilih Triwulan:</label>
            <select class="form-control" name="triwulan">
              <option value="1">Triwulan I</option>
              <option value="2">Triwulan II</option>
              <option value="3">Triwulan III</option>
              <option value="4">Triwulan IV</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
 </div>
</div>

<div class="modal fade" id="tahunTabel2TW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=tabel2" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleSelect1">Pilih Tahun:</label>
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Pilih Triwulan:</label>
            <select class="form-control" name="triwulan">
              <option value="1">Triwulan I</option>
              <option value="2">Triwulan II</option>
              <option value="3">Triwulan III</option>
              <option value="4">Triwulan IV</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
 </div>
</div>

<div class="modal fade" id="tahunTabel4TW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=tabel4" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="tahunTabel3TW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=tabel3" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="hasillakkegpen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=hasillakkegpen" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="hasillakkegluh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=hasillakkegluh" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="hasilfotopen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=fotopen" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="hasilfotoluh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=fotoluh" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahun">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="barpenpertw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=grafikpenkum" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahunPenkumLuhkum">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="barluhpertw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=grafikluhkum" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahunPenkumLuhkum">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mappenpertw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=petapenkum" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahunpeta">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mapluhpertw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Pilih Tahun</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.php?p=petaluhkum" method="post">
        <div class="modal-body">
          <div class="form-group">
            <select class="form-control" name="tahunpeta">
              <?php
                for ($i=date("Y"); $i >= 2012; $i--) {
                  echo "<option value='$i'>$i</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <input type="submit" class="btn btn-primary" value="Kirim"></input>
        </div>
      </form>
    </div>
  </div>
</div>
