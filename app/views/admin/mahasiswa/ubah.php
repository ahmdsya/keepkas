
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="margin-right: 10px;">Ubah Data Mahasiswa </h3>
          <a href="<?= BASEURL ?>/admin/data_mahasiswa" class="btn btn-success btn-xs">Kembali</a>
        </div>
        <form class="form-horizontal" action="<?= BASEURL; ?>/admin/ubah_data_mahasiswa" method="POST">
          <div class="box-body">
          	<input type="hidden" name="id" value="<?= $data['mhs']['id_user'] ?>">
            <div class="form-group">
                  <label class="col-sm-3 control-label">NIM</label>
                  <div class="col-sm-5">
                    <input type="text" name="nim" class="form-control" value="<?= $data['mhs']['username'] ?>" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" value="<?= $data['mhs']['nama'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jurusan</label>
                  <div class="col-sm-5">
                    <input type="text" name="jur" class="form-control" value="<?= $data['mhs']['jurusan'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kelas</label>
                  <div class="col-sm-5">
                    <input type="text" name="kls" class="form-control" value="<?= $data['mhs']['kelas'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-10">
                    <div class="checkbox">
                      <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
                      <!-- <a href="index.php?page=siswa"><button class="btn btn-warning">Kembali</button></a> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->