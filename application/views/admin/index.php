      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Dashboard</h3>
            </div>

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Halaman Admin</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- Welcome Banner -->
                  <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12">
                      <div class="x_panel" style="background: linear-gradient(135deg, #1D2671 0%, #C33764 100%); color: #fff; border-radius: 8px; padding: 25px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">
                        <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
                          <div class="col-sm-2 text-center" style="margin-bottom: 10px;">
                            <img src="<?= base_url('assets/images/') . ($user['image'] ? $user['image'] : 'default.jpg'); ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid rgba(255,255,255,0.5); object-fit: cover;">
                          </div>
                          <div class="col-sm-10">
                            <h2 style="font-size: 24px; font-weight: 700; margin: 0 0 10px 0; color: #fff;">Selamat Datang, <?= $user['nama_user']; ?>!</h2>
                            <p style="font-size: 15px; opacity: 0.9; margin: 0; line-height: 1.6;">Anda masuk sebagai Administrator panel <strong>ASGARDEV Expert System</strong>. Kelola data gejala, kerusakan, aturan penalaran Bayes, dan lihat laporan diagnosa secara langsung melalui menu di bawah ini.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Stats Tiles -->
                  <div class="row top_tiles" style="margin-top: 10px;">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats" style="padding: 15px; border-radius: 8px; border-left: 5px solid #1D2671; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                        <a href="<?= base_url('gejala'); ?>" style="text-decoration: none;">
                          <div class="icon" style="color: #1D2671; top: 15px; right: 20px; font-size: 32px;"><i class="fa fa-edit"></i></div>
                          <div class="count" style="font-size: 32px; font-weight: 700; color: #333; margin-left: 0;"><?= $totalGejala; ?></div>
                          <h3 style="font-size: 16px; font-weight: 600; color: #666; margin-top: 10px; margin-left: 0;">Total Gejala</h3>
                        </a>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats" style="padding: 15px; border-radius: 8px; border-left: 5px solid #C33764; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                        <a href="<?= base_url('kerusakan'); ?>" style="text-decoration: none;">
                          <div class="icon" style="color: #C33764; top: 15px; right: 20px; font-size: 32px;"><i class="fa fa-desktop"></i></div>
                          <div class="count" style="font-size: 32px; font-weight: 700; color: #333; margin-left: 0;"><?= $totalKerusakan; ?></div>
                          <h3 style="font-size: 16px; font-weight: 600; color: #666; margin-top: 10px; margin-left: 0;">Total Kerusakan</h3>
                        </a>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats" style="padding: 15px; border-radius: 8px; border-left: 5px solid #f39c12; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                        <a href="<?= base_url('pengetahuan'); ?>" style="text-decoration: none;">
                          <div class="icon" style="color: #f39c12; top: 15px; right: 20px; font-size: 32px;"><i class="fa fa-table"></i></div>
                          <div class="count" style="font-size: 32px; font-weight: 700; color: #333; margin-left: 0;"><?= $totalPengetahuan; ?></div>
                          <h3 style="font-size: 16px; font-weight: 600; color: #666; margin-top: 10px; margin-left: 0;">Basis Aturan</h3>
                        </a>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats" style="padding: 15px; border-radius: 8px; border-left: 5px solid #27ae60; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                        <a href="<?= base_url('laporan'); ?>" style="text-decoration: none;">
                          <div class="icon" style="color: #27ae60; top: 15px; right: 20px; font-size: 32px;"><i class="fa fa-bar-chart-o"></i></div>
                          <div class="count" style="font-size: 32px; font-weight: 700; color: #333; margin-left: 0;"><?= $totalLaporan; ?></div>
                          <h3 style="font-size: 16px; font-weight: 600; color: #666; margin-top: 10px; margin-left: 0;">Total Laporan</h3>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
