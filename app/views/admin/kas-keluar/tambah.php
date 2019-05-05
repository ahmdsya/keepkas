
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="margin-right: 10px;">Tambah Kas Keluar</h3>
          <a href="<?= BASEURL ?>/admin/kas_keluar" class="btn btn-success btn-xs">Kembali</a>
        </div>
        <form class="form-horizontal" action="<?= BASEURL; ?>/admin/tambah_kas_keluar" method="POST">
          <div class="box-body">
            <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal</label>

                  <div class="col-sm-5">
                    <input type="date" name="tgl" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Keterangan</label>

                  <div class="col-sm-5">
                    <textarea name="ket" class="form-control" placeholder="Keterangan"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jumlah</label>

                  <div class="col-sm-5">
                    <input type="number" name="jlh" class="form-control" placeholder="10000">
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