
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="margin-right: 10px;">Tambah Data Mahasiswa </h3>
          <a href="<?= BASEURL ?>/admin/data_mahasiswa" class="btn btn-success btn-xs">Kembali</a>
        </div>
        <form class="form-horizontal" action="<?= BASEURL; ?>/admin/tambah_data_mahasiswa" method="POST">
          <div class="box-body">
            <div class="form-group">
                  <label class="col-sm-3 control-label">NIM</label>
                  <div class="col-sm-5">
                    <input type="text" name="nim" class="form-control" placeholder="NIM" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jurusan</label>
                  <div class="col-sm-5">
                    <input type="text" name="jur" class="form-control" placeholder="Jurusan" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kelas</label>
                  <div class="col-sm-5">
                    <input type="text" name="kls" class="form-control" placeholder="Kelas" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-10">
                    <div class="checkbox">
                      <button type="submit" name="tambah" class="btn btn-primary">Tambahkan</button>
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