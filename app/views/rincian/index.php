<div class="col-md-8">
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">Rincian Kas</h3>
			<div class="badge badge-danger float-right pull-right"><?= 'Total Kas : Rp. ' .number_format($data['user']['jumlah']) ?></div>
		</div>
		<div class="box-body">

			<ul class="list-group">
				<?php foreach ($data['rincian'] as $da) { ?>
				<li class="list-group-item">
		        	<?= $da['waktu'] ?>
		        	<div class="badge float-right"><?= 'Rp. ' .number_format($da['jumlah']) ?></div>
				</li>
				<?php } ?>
		    </ul>

		    <!-- <div style="text-align: center;">
				<nav aria-label="...">
					<ul class="pagination pagination-sm">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active">
						      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
						    </li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#">Next</a>
						    </li>
					</ul>
				</nav>
		    </div> -->

		</div>
	</div>
</div>