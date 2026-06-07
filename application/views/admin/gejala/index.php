      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Gejala</h3>
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
                    <div class="col-md-6" style="margin-bottom: 15px;">
                      <a href="" class="btn btn-primary" style="border-radius: 4px; font-weight: 600; padding: 8px 16px;" data-toggle="modal" data-target=".tambah"><i class="fa fa-plus-circle"></i> Tambah Data Gejala</a>
                    </div>
                  </div>
                  <?= $this->session->flashdata('pesan'); ?>
                  <?php $this->session->unset_userdata('pesan'); ?>
                  <table id="datatable" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr style="background-color: #f5f7fa; color: #2c3e50;">
                        <th style="width: 50px; text-align: center; font-weight: 700;">No</th>
                        <th style="width: 120px; text-align: center; font-weight: 700;">Kode Gejala</th>
                        <th style="text-align: center; font-weight: 700;">Nama Gejala</th>
                        <th style="width: 160px; text-align: center; font-weight: 700;">Kelola</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($gejala as $gjl) : ?>
                        <tr style="transition: background-color 0.15s;">
                          <td style="text-align: center; vertical-align: middle;"><?= $i; ?></td>
                          <td style="text-align: center; vertical-align: middle;"><span class="badge" style="background-color: #34495e; font-size: 12px; padding: 4px 10px; border-radius: 4px;"><?= $gjl['kode_gejala']; ?></span></td>
                          <td style="vertical-align: middle; font-size: 14px; color: #2c3e50; font-weight: 500;"><?= $gjl['nama_gejala']; ?></td>
                          <td style="text-align: center; vertical-align: middle;">
                            <a href="" class="btn btn-warning btn-xs" style="border-radius: 4px; padding: 5px 10px; font-weight: 600;" data-toggle="modal" data-target=".ubahGejala<?= $gjl['id_gejala']; ?>"><i class="fa fa-pencil"></i> Ubah</a>
                            <a href="<?= base_url('gejala/hapus/') . $gjl['id_gejala']; ?>" class="btn btn-danger btn-xs" style="border-radius: 4px; padding: 5px 10px; font-weight: 600;" onclick="return confirm('Yakin ingin menghapus data gejala ini?');"><i class="fa fa-trash"></i> Hapus</a>
                          </td>
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