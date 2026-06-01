      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Pengetahuan</h3>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <a href="" class="btn btn-primary" style="border-radius: 4px; font-weight: 600; padding: 8px 16px; margin-bottom: 15px;" data-toggle="modal" data-target="#tambahPengetahuan"><i class="fa fa-plus-circle"></i> Tambah Data Aturan</a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <!-- Tabel satu -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tabel Kerusakan</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <?= $this->session->flashdata('pesan'); ?>
                  <table id="datatable-buttons" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr style="background-color: #f5f7fa; color: #2c3e50;">
                        <th style="width: 50px; text-align: center; font-weight: 700;">No</th>
                        <th style="text-align: center; font-weight: 700;">Nama Kerusakan</th>
                        <th style="text-align: center; font-weight: 700;">Nama Gejala</th>
                        <th style="width: 120px; text-align: center; font-weight: 700;">Probabilitas</th>
                        <th style="width: 160px; text-align: center; font-weight: 700;">Kelola</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($pengetahuan as $P) : ?>
                        <tr style="transition: background-color 0.15s;">
                          <td style="text-align: center; vertical-align: middle;"><?= $i; ?></td>
                          <td style="vertical-align: middle; font-size: 14px; color: #2c3e50; font-weight: 500;"><span class="badge" style="background-color: #e74c3c; font-size: 11px; padding: 3px 8px; border-radius: 4px;"><?= $P['kode_kerusakan']; ?></span> <strong><?= $P['nama_kerusakan']; ?></strong></td>
                          <td style="vertical-align: middle; font-size: 14px; color: #2c3e50; font-weight: 500;"><span class="badge" style="background-color: #34495e; font-size: 11px; padding: 3px 8px; border-radius: 4px;"><?= $P['kode_gejala']; ?></span> <?= $P['nama_gejala']; ?></td>
                          <td style="text-align: center; vertical-align: middle; font-size: 14px; font-weight: 600; color: #16a085;"><?= $P['probabilitas']; ?></td>
                          <td style="text-align: center; vertical-align: middle;">
                            <a href="" class="btn btn-warning btn-xs" style="border-radius: 4px; padding: 5px 10px; font-weight: 600;" data-toggle="modal" data-target=".ubahPengetahuan<?= $P['id']; ?>"><i class="fa fa-pencil"></i> Ubah</a>
                            <a href="<?= base_url('pengetahuan/hapus/') . $P['id']; ?>" class="btn btn-danger btn-xs" style="border-radius: 4px; padding: 5px 10px; font-weight: 600;" onclick="return confirm('Yakin ingin menghapus data aturan ini?');"><i class="fa fa-trash"></i> Hapus</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Tabel satu -->
          </div>
        </div>
      </div>
      <!-- /page content -->