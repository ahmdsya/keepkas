<div class="col-md-8">
	<!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <?php
                if (empty($data['profil']['gambar'])) {
                    $data['img'] = ''.BASEURL.'/assets/dist/img/user.png';
                }else{
                  $data['img'] = ''.BASEURL.'/assets/dist/img/'.$data['profil']['gambar'].'';
                }
                ?>
                <img class="img-circle user-image" src="<?= $data['img'] ?>" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><?= $data['profil']['nama'] ?></h3><br>
              <h5 class="widget-user-desc"><?= $data['profil']['username'] ?></h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Sudah Bayar Kas <span class="pull-right badge bg-blue"><?= $data['rowCount'] ?> Kali</span></a></li>
                <li><a href="#">Total Kas <span class="pull-right badge bg-aqua"><?= 'Rp. ' .number_format($data['total']) ?></span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->

          <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title" style="margin-right: 10px;">Profil <?= $data['nama'] ?></h3>
        </div>
        <form class="form-horizontal" action="<?= BASEURL; ?>/profil/ubah/<?= $data['profil']['id_user'] ?>" method="POST" enctype="multipart/form-data">
          <div class="box-body">
          	<div class="form-group">
                  <label class="col-sm-3 control-label">Foto Profil</label>
                  <div class="col-sm-5">
                    <?= $data['form'] ?>
                  </div>
                </div>
          		<div class="form-group">
                  <label class="col-sm-3 control-label">Nim</label>
                  <div class="col-sm-5">
                    <input type="text" name="nim" class="form-control" value="<?= $data['profil']['username'] ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama</label>
                  <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" value="<?= $data['profil']['nama'] ?>" <?= $data['read'] ?>>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jurusan</label>
                  <div class="col-sm-5">
                    <input type="text" name="jur" class="form-control" value="<?= $data['profil']['jurusan'] ?>" <?= $data['read'] ?>>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kelas</label>
                  <div class="col-sm-5">
                    <input type="text" name="kls" class="form-control" value="<?= $data['profil']['kelas'] ?>" <?= $data['read'] ?>>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-10">
                    <div class="checkbox">
                      <?= $data['btn'] ?>
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