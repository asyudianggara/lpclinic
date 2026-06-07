<style>
  .profile-section {
    background-color: #f8fafc;
    padding: 120px 0 80px 0;
    min-height: calc(100vh - 70px);
  }
  .card-premium {
    background: #fff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.03);
    padding: 30px;
    margin-bottom: 30px;
  }
  .card-premium-title {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 25px 0;
    border-bottom: 2px solid #f1f5f9;
    padding-bottom: 12px;
    display: flex;
    align-items: center;
  }
  .card-premium-title i {
    margin-right: 10px;
    color: #3b82f6;
  }
  .profile-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #3b82f6;
    box-shadow: 0 8px 16px rgba(59, 130, 246, 0.15);
    margin: 0 auto 20px auto;
    display: block;
  }
  .form-control-custom {
    border-radius: 8px !important;
    border: 1px solid #cbd5e1 !important;
    padding: 10px 14px !important;
    height: auto !important;
    font-size: 14px !important;
    box-shadow: none !important;
    transition: all 0.2s !important;
  }
  .form-control-custom:focus {
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 3px rgba(59,130,246,0.15) !important;
  }
  .btn-save {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #fff !important;
    border: none;
    padding: 12px 30px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 30px;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.2);
    transition: all 0.2s ease;
    cursor: pointer;
    display: inline-block;
    width: 100%;
    text-align: center;
  }
  .btn-save:hover {
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.35);
    transform: translateY(-1px);
  }
  .table-custom th {
    background-color: #f8fafc;
    color: #334155;
    font-weight: 700;
    border-bottom: 2px solid #e2e8f0 !important;
  }
  .table-custom td {
    vertical-align: middle !important;
  }
</style>

<div class="profile-section">
  <div class="container">
    <div class="row">
      <!-- Kolom Kiri: Profil & Edit -->
      <div class="col-md-4">
        <div class="card-premium text-center">
          <h2 class="card-premium-title"><i class="fa fa-user"></i> Profil Saya</h2>
          
          <?= $this->session->flashdata('pesan'); ?>
          <?php $this->session->unset_userdata('pesan'); ?>

          <?= form_open_multipart('member/ubahMember'); ?>
            <img src="<?= base_url('assets/images/') . ($user['image'] ? $user['image'] : 'default.jpg'); ?>" class="profile-avatar" id="profile-preview">
            
            <div style="text-align: left; margin-bottom: 25px;">
              <div class="form-group" style="margin-bottom: 18px;">
                <label for="nama" style="font-weight: 700; color: #475569; margin-bottom: 6px; font-size: 13px;">Nama Lengkap</label>
                <input type="text" class="form-control form-control-custom" id="nama" name="nama" value="<?= $user['nama_user']; ?>" required>
              </div>
              
              <div class="form-group" style="margin-bottom: 18px;">
                <label for="username" style="font-weight: 700; color: #475569; margin-bottom: 6px; font-size: 13px;">Username</label>
                <input type="text" class="form-control form-control-custom" id="username" name="username" value="<?= $user['username']; ?>" required>
              </div>
              
              <div class="form-group" style="margin-bottom: 18px;">
                <label for="gambar" style="font-weight: 700; color: #475569; margin-bottom: 6px; font-size: 13px;">Ubah Foto Profil</label>
                <input type="file" class="form-control form-control-custom" id="gambar" name="gambar" accept="image/*" onchange="previewImage(this)">
              </div>

              <div style="font-size: 12px; color: #64748b; margin-top: 15px; text-align: center;">
                <i class="fa fa-calendar-check-o"></i> Member sejak: <?= date('d F Y', $user['date_created']); ?>
              </div>
            </div>

            <button type="submit" class="btn-save">
              <i class="fa fa-save"></i> Simpan Perubahan
            </button>
          </form>
        </div>
      </div>

      <!-- Kolom Kanan: Riwayat Diagnosa -->
      <div class="col-md-8">
        <div class="card-premium">
          <h2 class="card-premium-title"><i class="fa fa-history"></i> Riwayat Diagnosa</h2>
          
          <?php if (empty($riwayat)) : ?>
            <div class="text-center" style="padding: 40px 0;">
              <img src="<?= base_url('assets2/img/laptop_diagnostic.png'); ?>" alt="No history" style="max-height: 120px; opacity: 0.6; margin-bottom: 20px; border-radius: 8px;">
              <p style="color: #64748b; font-size: 15px; font-weight: 500;">Anda belum pernah melakukan diagnosa.</p>
              <a href="<?= base_url('member/diagnosa'); ?>" class="btn-save" style="width: auto; margin-top: 10px; padding: 10px 24px;">
                <i class="fa fa-stethoscope"></i> Diagnosa Sekarang
              </a>
            </div>
          <?php else : ?>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-custom">
                <thead>
                  <tr>
                    <th style="width: 50px; text-align: center;">No</th>
                    <th style="width: 150px; text-align: center;">Tanggal</th>
                    <th>Hasil Kerusakan</th>
                    <th style="width: 100px; text-align: center;">Probabilitas</th>
                    <th style="width: 120px; text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($riwayat as $r) : ?>
                    <tr>
                      <td style="text-align: center;"><?= $i; ?></td>
                      <td style="text-align: center; font-size: 13px; color: #64748b;"><?= date('d M Y', $r['waktu']); ?></td>
                      <td style="font-weight: 600; color: #e74c3c;"><?= $r['nama_kerusakan']; ?></td>
                      <td style="text-align: center; font-weight: 700; color: #16a085;"><?= $r['hasil_probabilitas']; ?>%</td>
                      <td style="text-align: center;">
                        <button type="button" class="btn btn-info btn-xs" style="border-radius: 4px; padding: 4px 8px; font-weight: 600;" data-toggle="modal" data-target="#detailRiwayat<?= $r['id_hasil']; ?>">
                          <i class="fa fa-eye"></i> Solusi
                        </button>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Detail Riwayat Solusi -->
<?php if (!empty($riwayat)) : ?>
  <?php foreach ($riwayat as $r) : ?>
    <div class="modal fade" id="detailRiwayat<?= $r['id_hasil']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 16px; border: none; overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.2);">
          <div class="modal-header" style="background-color: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 20px 25px;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" style="font-weight: 800; color: #1e293b; font-size: 16px;"><i class="fa fa-stethoscope" style="color: #3b82f6;"></i> Detail Hasil Diagnosa</h4>
          </div>
          <div class="modal-body" style="padding: 25px;">
            <div style="margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 15px;">
              <small style="color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Kerusakan Terdeteksi</small>
              <h3 style="margin: 5px 0 0 0; font-weight: 800; color: #e74c3c; font-size: 20px;"><?= $r['nama_kerusakan']; ?></h3>
              <span class="badge" style="background-color: #16a085; font-size: 13px; padding: 6px 12px; border-radius: 4px; margin-top: 10px; font-weight: 700;">Probabilitas: <?= $r['hasil_probabilitas']; ?>%</span>
            </div>
            
            <div>
              <small style="color: #94a3b8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; display: block; margin-bottom: 8px;">Solusi Penanganan</small>
              <div style="background-color: #f8fafc; border-radius: 12px; padding: 15px; border: 1px solid #e2e8f0; color: #334155; line-height: 1.6; font-size: 14px; white-space: pre-wrap; font-weight: 500; text-align: left;">
                <?= $r['solusi']; ?>
              </div>
            </div>
          </div>
          <div class="modal-footer" style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; padding: 15px 25px;">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 8px; font-weight: 600; padding: 8px 20px;">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

<script>
  function previewImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('profile-preview').src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
