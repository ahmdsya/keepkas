      <div class="row">
        <!-- Left col -->
        <div class="col-md-4">
	          <a href="<?= BASEURL ?>/bayar" class="btn btn-primary btn-block" style="margin-bottom: 20px;">Bayar Kas</a>
	        <div class="box box-warning">
	          	<div class="box-body">
	          		<ul class="list-group">
		              <li class="list-group-item">
		                  <a href="<?= BASEURL ?>/profil/<?= $data['user']['id_user'] ?>"><b>Profil</b></a>
		              </li>
		              <li class="list-group-item">
		                  <a href="<?= BASEURL ?>/rincian/<?= $data['user']['username'] ?>"><b>Rincian Kas Saya</b></a>
		              </li>
		              <li class="list-group-item">
		                  <a href="<?= BASEURL ?>"><b>Data Mahasiswa</b></a>
		              </li>
		              <li class="list-group-item">
		                  <a href="<?= BASEURL ?>/ubah_password"><b>Ubah Password</b></a>
		              </li>
		          </ul>
	          	</div>
	        </div>
        </div>
