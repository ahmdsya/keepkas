<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 style="font-size: 19px;"><?= $data['countSiswa'] ?> Orang</h3>

              <p>Mahasiswa</p>
            </div>
            <div class="icon">
              <!-- <i class="fa fa-group"></i> -->
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 style="font-size: 19px;"><?= 'Rp. '.number_format($data['jlhMasuk']) ?></h3>

              <p>Kas Masuk</p>
            </div>
            <div class="icon">
              <!-- <i class="fa fa-align-right"></i> -->
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 style="font-size: 19px;"><?= 'Rp. '.number_format($data['jlhKeluar']) ?></h3>

              <p>Kas Keluar</p>
            </div>
            <div class="icon">
              <!-- <i class="fa fa-align-left"></i> -->
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 style="font-size: 19px;"><?= 'Rp. '.number_format($data['saldo']) ?></h3>

              <p>Saldo Kas</p>
            </div>
            <div class="icon">
              <!-- <i class="fa fa-money"></i> -->
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->