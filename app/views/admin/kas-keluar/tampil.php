<div class="box">
	<div class="box-header with-border">
    	<h3 class="box-title" style="margin-right: 10px;">Data Kas Keluar</h3>
      <a href="<?= BASEURL ?>/admin/tambah_keluar" class="btn btn-primary btn-xs">Tambah</a>
      <a href="<?= BASEURL ?>/admin/delAllKasKeluar" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus semua data ?')">Hapus Semua Data</a>
    </div>
    <div class="box-body">
    	<div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
                		$no = 1;
                		foreach ($data['keluar'] as $da) {
                	?>
                  <tr>
	                  <td><?= $no++; ?></td>
	                  <td><?= $da['tanggal'] ?></td>
	                  <td width="500"><?= $da['keterangan'] ?></td>
	                  <td><?= 'Rp. ' .number_format($da['jumlah']) ?></td>
	                  <td>
	                  	<a href="<?= BASEURL; ?>/admin/ubah_keluar/<?= $da['id_keluar'] ?>"><button class="btn btn-primary btn-xs">Edit</button></a>
	                  	<a href="<?= BASEURL; ?>/admin/hapus_kas_keluar/<?= $da['id_keluar'] ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
	                  </td>
	              </tr>
	          	  <?php } ?>
              	</tbody>
                <tr>
	                <th colspan="3" style="text-align: center; font-size: 15px">Total Kas Keluar</th>
	                <th align="left" style="font-size: 15px"><?= 'Rp. ' .number_format($data['total']) ?></th>
                </tr>
            </table>
    </div>
</div>
</div>