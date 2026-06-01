<style>
  .member-dashboard {
    background-color: #f8fafc;
    padding: 120px 0 80px 0;
    min-height: calc(100vh - 70px);
  }
  .welcome-banner {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    border-radius: 20px;
    color: #fff;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(30, 60, 114, 0.15);
    margin-bottom: 40px;
    border: none;
  }
  .welcome-banner h1 {
    font-size: 32px;
    font-weight: 700;
    margin: 0 0 12px 0;
    color: #fff;
  }
  .welcome-banner p {
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.7;
    margin: 0;
  }
  .dashboard-card {
    background: #fff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    padding: 35px;
    transition: all 0.3s ease-in-out;
    margin-bottom: 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    border-color: #3b82f6;
  }
  .card-icon-container {
    width: 70px;
    height: 70px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    margin-bottom: 25px;
  }
  .icon-blue {
    background-color: rgba(59, 130, 246, 0.1);
    color: #3b82f6;
  }
  .icon-green {
    background-color: rgba(16, 185, 129, 0.1);
    color: #10b981;
  }
  .card-title {
    font-size: 22px;
    font-weight: 700;
    color: #1e293b;
    margin: 0 0 15px 0;
  }
  .card-desc {
    font-size: 14px;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 30px;
    flex-grow: 1;
  }
  .btn-premium {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #fff !important;
    border: none;
    padding: 12px 30px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 30px;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.2);
    transition: all 0.2s ease;
    display: inline-block;
    text-align: center;
    text-decoration: none !important;
  }
  .btn-premium:hover {
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.35);
    transform: translateY(-1px);
    color: #fff !important;
  }
  .tip-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    text-align: left;
  }
  .tip-icon {
    color: #10b981;
    margin-right: 12px;
    font-size: 18px;
    margin-top: 2px;
  }
  .tip-text {
    font-size: 14px;
    color: #475569;
    line-height: 1.5;
    margin: 0;
  }
</style>

<div class="member-dashboard">
  <div class="container">
    <!-- Welcome Banner -->
    <div class="row">
      <div class="col-md-12">
        <div class="welcome-banner" style="padding: 30px 40px; overflow: hidden; position: relative;">
          <div class="row" style="display: flex; align-items: center; flex-wrap: wrap;">
            <div class="col-sm-8" style="padding-right: 20px;">
              <h1 style="font-size: 30px; font-weight: 800; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">Selamat Datang di ASGARDEV Laptop Clinic!</h1>
              <p style="font-size: 15px; opacity: 0.95; line-height: 1.7; margin-bottom: 0;">Halo, <strong><?= $user['nama_user']; ?></strong>. Kami siap membantu Anda mendiagnosa kesehatan laptop dan komputer Anda dengan cepat menggunakan algoritma probabilitas teorema Bayes yang cerdas, andal, dan akurat secara real-time.</p>
            </div>
            <div class="col-sm-4 text-center hidden-xs">
              <img src="<?= base_url('assets2'); ?>/img/laptop_diagnostic.png" alt="Diagnostic Illustration" style="max-height: 140px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.2); border: 2px solid rgba(255,255,255,0.15); object-fit: cover;">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cards Grid -->
    <div class="row">
      <!-- Card Mulai Diagnosa -->
      <div class="col-md-6">
        <div class="dashboard-card">
          <div>
            <div class="card-icon-container icon-blue">
              <i class="fa fa-stethoscope"></i>
            </div>
            <h2 class="card-title">Mulai Diagnosa Kerusakan</h2>
            <p class="card-desc">Lakukan pemeriksaan instan pada laptop/komputer Anda dengan memilih gejala-gejala kerusakan yang dirasakan. Sistem akan menghitung kecocokan kerusakan berdasarkan basis aturan Bayes.</p>
          </div>
          <div>
            <a href="<?= base_url('member/diagnosa'); ?>" class="btn-premium">
              <i class="fa fa-play"></i> Mulai Pemeriksaan
            </a>
          </div>
        </div>
      </div>

      <!-- Card Tips Perawatan -->
      <div class="col-md-6">
        <div class="dashboard-card">
          <div>
            <div class="card-icon-container icon-green">
              <i class="fa fa-lightbulb-o"></i>
            </div>
            <h2 class="card-title">Tips Merawat Laptop</h2>
            <div class="card-desc">
              <div class="tip-item">
                <i class="fa fa-check-circle tip-icon"></i>
                <p class="tip-text">Bersihkan lubang sirkulasi udara laptop dari debu secara rutin untuk menghindari over heating.</p>
              </div>
              <div class="tip-item">
                <i class="fa fa-check-circle tip-icon"></i>
                <p class="tip-text">Hindari meletakkan laptop di atas kasur/bantal saat menyala karena menghambat pembuangan panas.</p>
              </div>
              <div class="tip-item">
                <i class="fa fa-check-circle tip-icon"></i>
                <p class="tip-text">Jangan biarkan baterai laptop benar-benar kosong (0%) sebelum melakukan pengisian ulang daya.</p>
              </div>
            </div>
          </div>
          <div style="text-align: left; padding-left: 10px; color: #64748b; font-size: 13px; font-weight: 500;">
            <i class="fa fa-info-circle"></i> Selalu rawat hardware Anda untuk performa maksimal.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>