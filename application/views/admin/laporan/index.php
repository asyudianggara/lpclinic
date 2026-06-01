      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Laporan</h3>
            </div>

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= $tabel; ?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row mt-3">

                  </div>

                  <table id="datatable-buttons" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr style="background-color: #f5f7fa; color: #2c3e50;">
                        <th style="width: 50px; text-align: center; font-weight: 700;">No</th>
                        <th style="width: 180px; text-align: center; font-weight: 700;">Tanggal Diagnosa</th>
                        <th style="text-align: center; font-weight: 700;">Nama Member</th>
                        <th style="text-align: center; font-weight: 700;">Hasil Kerusakan</th>
                        <th style="width: 150px; text-align: center; font-weight: 700;">Nilai Probabilitas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($laporan as $l) : ?>
                        <tr style="transition: background-color 0.15s;">
                          <td style="text-align: center; vertical-align: middle;"><?= $i; ?></td>
                          <td style="text-align: center; vertical-align: middle; font-size: 13px; font-weight: 500; color: #666;"><?= date('d F Y', $l['waktu']); ?></td>
                          <td style="vertical-align: middle; font-size: 14px; font-weight: 600; color: #34495e;"><?= $l['nama_user']; ?></td>
                          <td style="vertical-align: middle; font-size: 14px; font-weight: 500; color: #e74c3c;"><?= $l['nama_kerusakan']; ?></td>
                          <td style="text-align: center; vertical-align: middle; font-size: 15px; font-weight: 700; color: #16a085;"><?= $l['hasil_probabilitas']; ?>%</td>

                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- /page content -->