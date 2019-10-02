<?php
  $tahun = $_POST['tahun'];
  include_once '../visual/konfig.php';
  $SQL = "SELECT * FROM luhkum WHERE Waktu >= '$tahun-01-01' AND Waktu <= '$tahun-12-31' ORDER BY Waktu DESC";
?>
<div class="container">
  <div class="col-lg-12">
      <h1 class="page-header">Data Luhkum</h1>
      <a href="#pilihKecamatan" class="btn btn-info" data-toggle="modal" role="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Tambah Kegiatan</a>
      <hr>
  </div>

  <div class="content-loader">
    <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
          <tr>
            <th>No</th>
            <th>Jumlah Penduduk</th>
            <th>Waktu</th>
            <th>Sasaran dan Materi</th>
            <th>Jumlah Peserta</th>
            <th>Nama Kelurahan/Desa</th>
            <th>Lokasi Penyuluhan</th>
            <th>Petugas</th>
            <th>Ubah</th>
            <th>Hapus</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $luh = mysqli_query($con, $SQL);
            $no = 1;
            while ($p = mysqli_fetch_array($luh)){
                  $waktu = date_create($p['Waktu']);
                  $id = $p['ID'];
                    echo "<tr>
                           <td>" . $no . "</td>
                           <td>" . $p['JumlahPenduduk'] . "</td>
                           <td class='text-center'>" . date_format($waktu,'d-m-Y') . "</td>
                           <td>" . $p['SasaranDanMateri'] . "</td>
                           <td class='text-center'>" . $p['JumlahPeserta'] . "</td>

                           <td>" . $p['NamaKelurahanDesa'] . "</td>
                           <td>" . $p['LokasiPenyuluhan'] . "</td>
                           <td>" . $p['Petugas'] . "</td>
                           ";
                           ?>
                           <form id="formEditLuh<?php echo $no; ?>" action="index.php?p=formeditluhkum" method="post">
                             <input type="hidden" name="idluh" value=<?php echo $id; ?> />
                             <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
                             <td><a href="javascript:{}" onclick="document.getElementById('formEditLuh<?php echo $no;?>').submit(); return false;">Edit</a></td>
                          </form>
                        <!--  <form id="formHapusPen<?php echo $no; ?>" action="index.php?p=formhapuspenkum" method="post">
                            <input type="hidden" name="id" value=<?php echo $id; ?> />-->
                            <td><a href="#luhkumHapus<?php echo $id; ?>" data-toggle="modal" role="button" id="btn-add">Hapus</a></td>
                        <!-- </form> -->

                            <div class="modal fade" id="penkumHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Yakin mau hapus?</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                   <form id="formHapusPen<?php echo $no; ?>" action="index.php?p=hapuspenkum" method="post">
                                     <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
                                     <input type="hidden" name="id" value=<?php echo $id; ?> />
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                      <input type="submit" class="btn btn-danger" value="Hapus"></input>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="luhkumHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Yakin mau hapus?</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                   <form id="formHapusPen<?php echo $no; ?>" action="index.php?p=hapusluhkum" method="post">
                                     <input type="hidden" name="tahun" value=<?php echo $tahun; ?> />
                                     <input type="hidden" name="id" value=<?php echo $id; ?> />
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                      <input type="submit" class="btn btn-danger" value="Hapus"></input>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        <?php
                            $no++;


                      }
          ?>
        </tbody>
      </table>
  </div>
</div>
