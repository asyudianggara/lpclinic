<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color: #f8fafc; font-family: 'Poppins', sans-serif;">

  <style>
    .results-section {
      padding: 120px 0 80px 0;
      min-height: calc(100vh - 100px);
    }
    .results-card {
      background: #fff;
      border-radius: 20px;
      padding: 35px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
      border: 1px solid #e2e8f0;
      margin-bottom: 30px;
    }
    .results-title {
      font-size: 24px;
      font-weight: 800;
      color: #1e293b;
      margin: 0 0 25px 0;
      border-bottom: 2px solid #f1f5f9;
      padding-bottom: 15px;
      display: flex;
      align-items: center;
    }
    .results-title i {
      color: #3b82f6;
      margin-right: 12px;
    }
    .prob-item {
      background: #f8fafc;
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 18px;
      border: 1px solid #e2e8f0;
      transition: all 0.25s ease;
    }
    .prob-item:hover {
      transform: translateX(4px);
      border-color: #3b82f6;
      background: #fff;
      box-shadow: 0 4px 15px rgba(59, 130, 246, 0.05);
    }
    .prob-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
    }
    .prob-name {
      font-size: 15px;
      font-weight: 700;
      color: #334155;
      margin: 0;
    }
    .prob-pct {
      font-size: 18px;
      font-weight: 800;
      color: #3b82f6;
    }
    .prob-bar-container {
      height: 8px;
      background: #e2e8f0;
      border-radius: 4px;
      overflow: hidden;
    }
    .prob-bar-fill {
      height: 100%;
      background: linear-gradient(90deg, #3b82f6 0%, #60a5fa 100%);
      border-radius: 4px;
    }
    .conclusion-box {
      background: linear-gradient(135deg, #ef4444 0%, #f87171 100%);
      color: #fff;
      border-radius: 16px;
      padding: 25px;
      margin-bottom: 30px;
      box-shadow: 0 8px 25px rgba(239, 68, 68, 0.25);
    }
    .conclusion-title {
      font-size: 13px;
      opacity: 0.9;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      margin-bottom: 6px;
      font-weight: 700;
    }
    .conclusion-name {
      font-size: 24px;
      font-weight: 800;
      margin: 0;
      color: #fff;
      line-height: 1.3;
    }
    .solution-card {
      background: #fff;
      border-radius: 16px;
      border: 1px solid #e2e8f0;
      padding: 30px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
    }
    .solution-image {
      width: 100%;
      border-radius: 12px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      margin-bottom: 25px;
      object-fit: cover;
      max-height: 220px;
    }
    .solution-title {
      font-size: 18px;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 15px;
      border-bottom: 2px solid #3b82f6;
      padding-bottom: 6px;
      display: inline-block;
    }
    .solution-text {
      font-size: 15px;
      line-height: 1.7;
      color: #475569;
      white-space: pre-line;
      margin: 0;
    }
    .back-btn {
      background: #f1f5f9;
      color: #475569 !important;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: 600;
      transition: all 0.2s;
      text-decoration: none !important;
      display: inline-block;
      margin-top: 20px;
    }
    .back-btn:hover {
      background: #e2e8f0;
      color: #1e293b !important;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar" style="background-color: #1e3c72 !important; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('member/index'); ?>" style="font-weight: 800; color: #fff;">ASGARDEV Laptop Clinic</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="<?= base_url('member/index'); ?>" class="nav-link" style="color: rgba(255,255,255,0.8) !important;"><span>Home</span></a></li>
          <li class="nav-item"><a href="#" class="nav-link" style="color: rgba(255,255,255,0.8) !important;"><span><i class="fa fa-user"></i> <?= $user['nama_user']; ?></span></a></li>
          <li class="nav-item"><a href="<?= base_url('auth/logout'); ?>" class="nav-link btn-logout" style="color: rgba(255,255,255,0.8) !important;"><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="results-section">
    <div class="container">
      <div class="row">
        <!-- Kolom Kiri: Hasil Analisis Probabilitas -->
        <div class="col-md-6">
          <div class="results-card">
            <h2 class="results-title"><i class="fa fa-bar-chart"></i> Analisis Probabilitas Bayes</h2>
            
            <?php foreach ($diagnosa as $diag) : ?>
              <?php
              if ($diag['id_kerusakan'] == 1) {
                $diag['id_kerusakan'] = 'Rusak Pada IC Power';
              } elseif ($diag['id_kerusakan'] == 2) {
                $diag['id_kerusakan'] = 'Rusak Pada IC VGA';
              } elseif ($diag['id_kerusakan'] == 3) {
                $diag['id_kerusakan'] = 'Rusak pada Inverter/gangguan pada fleksibel kabel';
              } elseif ($diag['id_kerusakan'] == 4) {
                $diag['id_kerusakan'] = 'Rusak pada LCD';
              } elseif ($diag['id_kerusakan'] == 5) {
                $diag['id_kerusakan'] = 'Rusak pada Keyboard';
              }
              $pctValue = $diag['hasil_probabilitas'] * 100;
              ?>
              <div class="prob-item">
                <div class="prob-header">
                  <h4 class="prob-name"><?= $diag['id_kerusakan']; ?></h4>
                  <span class="prob-pct"><?= $pctValue; ?>%</span>
                </div>
                <div class="prob-bar-container">
                  <div class="prob-bar-fill" style="width: <?= $pctValue; ?>%;"></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Kolom Kanan: Kesimpulan & Solusi Penanganan -->
        <div class="col-md-6">
          <!-- Kesimpulan Utama -->
          <div class="conclusion-box">
            <div class="conclusion-title"><i class="fa fa-exclamation-triangle"></i> Diagnosa Tertinggi</div>
            <?php foreach ($tertinggi as $tinggi) : ?>
              <?php
              if ($tinggi['id_kerusakan'] == 1) {
                $tinggi['id_kerusakan'] = 'Rusak Pada IC Power';
              } elseif ($tinggi['id_kerusakan'] == 2) {
                $tinggi['id_kerusakan'] = 'Rusak Pada IC VGA';
              } elseif ($tinggi['id_kerusakan'] == 3) {
                $tinggi['id_kerusakan'] = 'Rusak pada Inverter / gangguan fleksibel kabel';
              } elseif ($tinggi['id_kerusakan'] == 4) {
                $tinggi['id_kerusakan'] = 'Rusak pada LCD';
              } elseif ($tinggi['id_kerusakan'] == 5) {
                $tinggi['id_kerusakan'] = 'Rusak pada Keyboard';
              }
              ?>
              <h2 class="conclusion-name"><?= $tinggi['id_kerusakan']; ?></h2>
            <?php endforeach; ?>
          </div>

          <!-- Detail Solusi -->
          <?php foreach ($detail as $det) : ?>
            <div class="solution-card">
              <div class="row">
                <div class="col-sm-5">
                  <img src="<?= base_url('assets/images/kerusakan/'); ?><?= $det['gambar']; ?>" class="solution-image" alt="Visual Kerusakan">
                </div>
                <div class="col-sm-7">
                  <h4 class="solution-title"><i class="fa fa-wrench"></i> Solusi Perbaikan</h4>
                  <p class="solution-text"><?= $det['solusi']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          <div class="text-center">
            <a href="<?= base_url('member/diagnosa'); ?>" class="back-btn"><i class="fa fa-arrow-left"></i> Diagnosa Ulang</a>
          </div>
        </div>
      </div>
    </div>
  </section>