	<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-newspaper-o"></i> Selamat Datang</h4>
         KeepKas adalah sistem pengolahan uang kas kelas berbasis website.
      </div>

<!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mahasiswa</span>
              <span class="info-box-number"><?= $data['countSiswa'] ?> Orang </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-align-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Kas Masuk</span>
              <span class="info-box-number"><?= 'Rp. ' .number_format($data['jlhMasuk']) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-align-left"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Kas Keluar</span>
              <span class="info-box-number"><?= 'Rp. ' .number_format($data['jlhKeluar']) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-cube"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Saldo Kas</span>
              <span class="info-box-number"><?= 'Rp. ' .number_format($data['saldo']) ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <div class="box-body">
            	<table class="table table-bordered table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Total Kas</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php foreach ($data['mhs'] as $mhs) { ?>
                    <tr>
                    	<td><?= $mhs['username'] ?></td>
                    	<td><?= $mhs['nama'] ?></td>
                    	<td><?= $mhs['jurusan'] ?></td>
                    	<td><?= $mhs['kelas'] ?></td>
                    	<td><?= 'Rp. ' .number_format($mhs['jumlah']) ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
            	<div class="box-footer clearfix">
	              <a href="<?= BASEURL ?>/admin/data_mahasiswa" class="btn btn-sm btn-warning pull-left">Lihat Semua</a>
	            </div>
          </div>
    	</div><!-- col-md-8 -->

    	<div class="col-md-4">
    		<div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Kas Masuk</h3>
	              <?= $data['count'] ?>
	            </div>
	            <div class="box-body">
	            	<table class="table">
	            		<?php foreach ($data['masuk'] as $masuk) {
	            			$label = ($masuk['status'] == 'Menunggu') ? 'label-warning' : 'label-success';
	            			 ?>
	            		<tr>
	            			<td><b><?= $masuk['nama']?></b> telah membayar kas.</td>
	            			<td><span class="label <?= $label ?> pull-right"><?= $masuk['status'] ?></span></td>
	            		</tr>
	            		<?php } ?>
	            	</table>
	            </div>
	            <div class="box-footer clearfix">
	              <a href="<?= BASEURL ?>/admin/kas_masuk" class="btn btn-sm btn-info pull-left">Lihat Semua</a>
	            </div>
        	</div>
    	</div>

	</div><!-- row -->