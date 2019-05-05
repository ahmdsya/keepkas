<div class="col-md-8">
<!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="margin-right: 10px;">Ubah Password</h3>
        </div>
        <form class="form-horizontal" action="<?= BASEURL; ?>/ubah_password/ubah/<?= $data['user']['id_user'] ?>" method="POST">
          <div class="box-body">
          	
          		<div class="form-group">
                  <label class="col-sm-3 control-label">Password Lama</label>
                  <div class="col-sm-5">
                    <input type="password" name="lama" class="form-control" placeholder="Masukkan Password Lama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Password Baru</label>
                  <div class="col-sm-5">
                    <input type="password" name="baru" class="form-control" placeholder="Masukkan Password Baru">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Ulangi Password</label>
                  <div class="col-sm-5">
                    <input type="password" name="ulangi" class="form-control" placeholder="Ulangi Password">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-10">
                    <div class="checkbox">
                    	<button type="submit" name="ubah" class="btn btn-info">Ubah</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
  </div>