<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?= base_url('assets2'); ?>/img/asgardev_favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $judul; ?> - ASGARDEV Laptop Clinic</title>

  <link href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendors/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>build/css/custom.min.css" rel="stylesheet">
  
  <style>
    body.login {
      background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%) !important;
      font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    .login_wrapper {
      max-width: 400px;
      margin: 8% auto 0 auto;
    }
    .login_content {
      background: #ffffff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
      border: 1px solid rgba(255, 255, 255, 0.1);
      text-shadow: none;
    }
    .login_content form h1 {
      font-size: 26px;
      font-weight: 700;
      color: #1e293b;
      margin: 0 0 5px 0;
      text-shadow: none;
      letter-spacing: -0.5px;
    }
    .login_content form input[type="text"],
    .login_content form input[type="password"] {
      border-radius: 6px;
      border: 1px solid #cbd5e1;
      padding: 12px 15px;
      height: auto;
      font-size: 14px;
      margin-bottom: 5px;
      box-shadow: none;
      transition: all 0.2s ease-in-out;
    }
    .login_content form input[type="text"]:focus,
    .login_content form input[type="password"]:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
    }
    .login_content form button.submit {
      width: 100%;
      background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
      border: none;
      color: #fff;
      padding: 12px;
      border-radius: 6px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s;
      float: none;
      margin-top: 15px;
      margin-left: 0;
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }
    .login_content form button.submit:hover {
      background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
      box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
      transform: translateY(-1px);
      color: #fff;
    }
    .login_content a {
      color: #2563eb;
      text-shadow: none;
      font-weight: 600;
      transition: color 0.15s;
    }
    .login_content a:hover {
      color: #1d4ed8;
      text-decoration: underline;
    }
    .separator {
      border-top: 1px solid #e2e8f0;
      padding-top: 20px;
      margin-top: 25px;
    }
    .separator h1 {
      font-size: 20px !important;
      font-weight: 700 !important;
      color: #1e293b !important;
      margin-bottom: 5px !important;
    }
    .separator p {
      font-size: 12px;
      color: #64748b;
      margin-top: 10px;
    }
    
    /* Custom Modern Alerts by ASGARDEV */
    .alert {
      border-radius: 8px !important;
      border: none !important;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05) !important;
      padding: 15px 20px !important;
      font-weight: 500 !important;
      text-shadow: none !important;
    }
    .alert-success {
      background-color: #d1fae5 !important;
      color: #065f46 !important;
    }
    .alert-danger {
      background-color: #fee2e2 !important;
      color: #991b1b !important;
    }
    .alert-info {
      background-color: #e0f2fe !important;
      color: #075985 !important;
    }
    .alert-warning {
      background-color: #fef3c7 !important;
      color: #92400e !important;
    }
  </style>
</head>

<body class="login">
  <div>
    <div class="login_wrapper">
      <section class="login_content">
        <div style="text-align: center; margin-bottom: 20px;">
          <a href="<?= base_url('home'); ?>">
            <img src="<?= base_url('assets2/img/asgardev_logo.png'); ?>" alt="ASGARDEV Logo" style="width: 70px; height: 70px; border-radius: 50%; box-shadow: 0 4px 10px rgba(0,0,0,0.15); border: 2px solid #2563eb; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
          </a>
        </div>
        <form method="POST" action="<?= base_url('auth'); ?>">
          <h1>Login</h1>
          <p style="color: #64748b; margin-bottom: 25px;">Portfolio demo by <strong>ASGARDEV</strong></p>

          <?= $this->session->flashdata('pesan'); ?>
          <div style="margin-bottom: 15px; text-align: left;">
            <input type="text" class="form-control" placeholder="Username" name="username" />
            <small class="text-danger" style="margin-top: 5px; display: block;"><?= form_error('username'); ?></small>
          </div>
          <div style="margin-bottom: 15px; text-align: left;">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            <small class="text-danger" style="margin-top: 5px; display: block;"><?= form_error('password'); ?></small>
          </div>
          <div>
            <button type="submit" class="btn btn-primary submit">
              <i class="fa fa-sign-in"></i> Log in
            </button>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <a href="<?= base_url('auth/registrasi'); ?>">
              Buat Akun Member
            </a>

            <div class="clearfix"></div>

            <div>
              <a href="<?= base_url('home'); ?>" style="text-decoration: none;">
                <h1 style="margin-top: 15px !important;"><i class="fa fa-stethoscope"></i> ASGARDEV Laptop Clinic</h1>
              </a>
              <p>&copy; 2019-2026 Sistem Pakar Diagnosa Kerusakan Laptop. Developed by ASGARDEV.</p>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</body>

</html>
