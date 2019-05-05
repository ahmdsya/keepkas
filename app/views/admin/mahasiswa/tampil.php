<div class="box">
	<div class="box-header with-border">
    	<h3 class="box-title" style="margin-right: 10px;">Data Mahasiswa</h3>
    	<a href="<?= BASEURL ?>/admin/tambah_mahasiswa" class="btn btn-primary btn-xs">Tambah</a>
    	<a href="<?= BASEURL ?>/admin/import_mahasiswa" class="btn btn-warning btn-xs">Import</a>
      <a href="<?= BASEURL ?>/admin/delAllMahasiswa" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus semua data ?')">Hapus Semua Data</a>
    </div>
    <div class="box-body">
    	<div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Kelas</th>
                  <th>Total Kas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
                		$no = 1;
                		foreach ($data['mhs'] as $mhs) {
                	?>
                  <tr>
	                  <td><?= $no++; ?></td>
	                  <td><?= $mhs['username'] ?></td>
	                  <td><?= $mhs['nama'] ?></td>
	                  <td><?= $mhs['jurusan'] ?></td>
	                  <td><?= $mhs['kelas'] ?></td>
                    <td><?= 'Rp. ' .number_format($mhs['jumlah']) ?></td>
	                  <td>
	                  	<a href="<?= BASEURL; ?>/admin/ubah_mahasiswa/<?= $mhs['id_user'] ?>"><button class="btn btn-primary btn-xs">Edit</button></a>
	                  	<a href="<?= BASEURL; ?>/admin/hapus_mahasiswa/<?= $mhs['id_user'] ?>"><button class="btn btn-danger btn-xs">Hapus</button></a>
	                  </td>
	              </tr>
	          	  <?php } ?>
              	</tbody>
            </table>
    </div>
</div>