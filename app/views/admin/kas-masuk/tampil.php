<div class="box">
	<div class="box-header with-border">
    	<h3 class="box-title" style="margin-right: 10px;">Data Kas Masuk</h3>
      <a href="<?= BASEURL ?>/admin/delAllKasMasuk" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus semua data ?')">Hapus Semua Data</a>
    </div>
    <div class="box-body">

    	<div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Status</th>
                  <th>Waktu</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
                		$no = 1;
                		foreach ($data['masuk'] as $da) {
                      if ($da['status'] == 'Menunggu') {
                        $label = 'label-warning';
                        $btn = '<a href="'.BASEURL.'/admin/konfirmasi/'. $da['id_masuk']. '"><button class="btn btn-primary btn-xs">Konfirmasi</button></a>';
                      }else{
                        $label = 'label-success';
                        $btn = '';
                      }
                	?>
                  <tr>
	                  <td><?= $no++; ?></td>
	                  <td><span class="label <?= $label ?> pull-right"><?= $da['status'] ?></span></td>
	                  <td><?= $da['waktu'] ?></td>
	                  <td><?= $da['nim'] ?></td>
	                  <td><?= $da['nama'] ?></td>
	                  <td><?= 'Rp. ' .number_format($da['jumlah']) ?></td>
	                  <td>
	                  	<?= $btn ?>
	                  	<a href="<?= BASEURL; ?>/admin/hapus_kas_masuk/<?= $da['id_masuk'] ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
	                  </td>
	              </tr>
	          	  <?php } ?>
              	</tbody>
                <tr>
	                <th colspan="5" style="text-align: center; font-size: 15px">Total Kas Masuk yang Terkonfirmasi</th>
	                <th align="left" style="font-size: 15px"><?= 'Rp. ' .number_format($data['total']) ?></th>
                </tr>
            </table>
    	
    </div>
</div>