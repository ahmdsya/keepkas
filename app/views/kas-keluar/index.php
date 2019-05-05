<div class="col-md-8">
	<div class="box">
	<div class="box-header with-border">
    	<h3 class="box-title" style="margin-right: 10px;">Data Kas Keluar</h3>
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
	                  <td width="350"><?= $da['keterangan'] ?></td>
	                  <td><?= 'Rp. ' .number_format($da['jumlah']) ?></td>
	              </tr>
	          	  <?php } ?>
              	</tbody>
            </table>
    </div>
</div>
</div>
</div>