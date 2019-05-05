        <div class="col-md-8">
        	<div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Mahasiswa</h3>
	          	</div>
	          	<div class="box-body">
	          		<ul class="products-list product-list-in-box">
	          			<?php foreach ($data['mhs'] as $mhs) { 
	          				if (empty($mhs['gambar'])) {
				                    $data['img'] = ''.BASEURL.'/assets/dist/img/user.png';
				                }else{
				                    $data['img'] = ''.BASEURL.'/assets/dist/img/'.$mhs['gambar'].'';
				                }
	          				?>
		                <li class="item">
		                  <div class="product-img">
		                    <img src="<?= $data['img'] ?>" alt="Product Image">
		                  </div>
		                  <div class="product-info">
		                    <a href="<?= BASEURL ?>/profil/<?= $mhs['id_user'] ?>" class="product-title"><?= $mhs['nama'] ?>
		                      <span class="label label-success pull-right"><?= 'Rp. ' .number_format($mhs['jumlah']) ?></span></a>
		                    <span class="product-description">
		                          <?= $value = ($mhs['jumlah'] != "") ? 'Terakhir bayar kas pada ' .$mhs['tgl']. '' : 'Belum pernah membayar uang kas.'; ?>
		                        </span>
		                  </div>
		                </li>
		            	<?php } ?>
		            </ul>

		            <?php
		            if (empty($_GET['hal'])) {
		              $halaman_aktif = '1';
		            } else {
		              $halaman_aktif = $_GET['hal'];
		            }
		            ?>

		            <div style="text-align: center;">
		            	<nav>
			              <ul class="pagination">
			              <!-- Button untuk halaman sebelumnya -->
			              <?php 
			              if ($halaman_aktif<='1') { ?>
			                <li class="disabled">
			                  <a href="" aria-label="Previous">
			                    <span aria-hidden="true">&laquo;</span>
			                  </a>
			                </li>
			              <?php
			              } else { ?>
			                <li>
			                  <a href="?hal=<?= $data['page'] - 1 ?>" aria-label="Previous">
			                    <span aria-hidden="true">&laquo;</span>
			                  </a>
			                </li>
			              <?php
			              }
			              ?>

			              <!-- Link halaman 1 2 3 ... -->
			              <?php 
			              for($x=1; $x<=$data['halaman']; $x++) { ?>
			                <li class="">
			                  <a href="?hal=<?= $x ?>"><?php echo $x ?></a>
			                </li>
			              <?php
			              }
			              ?>

			              <!-- Button untuk halaman selanjutnya -->
			              <?php 
			              if ($halaman_aktif >= $data['halaman']) { ?>
			                <li class="disabled">
			                  <a href="" aria-label="Next">
			                    <span aria-hidden="true">&raquo;</span>
			                  </a>
			                </li>
			              <?php
			              } else { ?>
			                <li>
			                  <a href="?hal=<?= $data['page'] +1 ?>" aria-label="Next">
			                    <span aria-hidden="true">&raquo;</span>
			                  </a>
			                </li>
			              <?php
			              }
			              ?>
			              </ul>
			            </nav>
		            </div>
	          	</div>
	        </div>
        </div>
    </div>