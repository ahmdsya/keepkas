<div class="col-md-8">
	<div class="box">
	<div class="box-header with-border">
    	<h3 class="box-title">Data Kas Masuk</h3>
    </div>
    <div class="box-body">

    	<div class="table-responsive">
          <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Waktu</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                	<?php 
                		$no = 1;
                		foreach ($data['masuk'] as $da) {
                	?>
                  <tr>
	                  <td><?= $no++; ?></td>
	                  <td><?= $da['waktu'] ?></td>
	                  <td><?= $da['nim'] ?></td>
	                  <td><?= $da['nama'] ?></td>
	                  <td><?= 'Rp. ' .number_format($da['jumlah']) ?></td>
	              </tr>
	          	  <?php } ?>
              	</tbody>
            </table>
    	
    </div>
</div>
</div>