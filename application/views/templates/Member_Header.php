<!doctype html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?= base_url('assets2'); ?>/img/asgardev_favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?= $judul; ?> - ASGARDEV Laptop Clinic</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="<?= base_url('assets2'); ?>/css/bootstrap.css" rel="stylesheet" />
  <link href="<?= base_url('assets2'); ?>/css/landing-page.css" rel="stylesheet" />


  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
  <link href="<?= base_url('assets2'); ?>/css/pe-icon-7-stroke.css" rel="stylesheet" />
<style>
  .navbar-top, nav.navbar { 
    background-color: #1e3c72 !important; 
    border-bottom: none !important; 
    transition: all 0.3s ease;
  }
  .navbar-top .navbar-nav>li>a, nav.navbar .navbar-nav>li>a { 
    color: rgba(255, 255, 255, 0.85) !important; 
    font-weight: 600 !important; 
    opacity: 1 !important; 
    transition: all 0.2s ease;
  }
  .navbar-top .navbar-nav>li>a:hover, nav.navbar .navbar-nav>li>a:hover { 
    color: #ffffff !important; 
  }
  .logo-container {
    display: flex !important;
    align-items: center !important;
    margin-top: 5px !important;
    height: auto !important;
  }
  .logo-container .logo {
    width: 42px !important;
    height: 42px !important;
    border-radius: 50% !important;
    overflow: hidden !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #fff !important;
    flex-shrink: 0 !important;
    float: none !important;
  }
  .logo-container .logo img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
  }
  .logo-container .brand { 
    color: #ffffff !important; 
    font-weight: 700 !important; 
    font-size: 16px !important;
    line-height: 1.2 !important;
    margin-left: 12px !important;
    margin-top: 0 !important;
    width: auto !important;
    height: auto !important;
    float: none !important;
    text-transform: none !important;
    transition: all 0.2s ease;
  }
  .navbar-header a:hover .brand, .navbar-header a:focus .brand {
    color: #ffffff !important;
  }
  .navbar-header a { 
    text-decoration: none !important; 
  }
  .navbar-toggle .icon-bar {
    background-color: #ffffff !important;
  }
</style>
</head>

<body class="landing-page landing-page2">
  <nav class="navbar navbar-top" role="navigation" style="background-color: #1e3c72; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar bar1"></span>
          <span class="icon-bar bar2"></span>
          <span class="icon-bar bar3"></span>
        </button>
        <a href="<?= base_url('member/index'); ?>">
          <!-- Navbar Judul Pojok Kiri -->
          <div class="logo-container">
            <div class="logo">
              <img src="<?= base_url('assets2'); ?>/img/asgardev_logo.png" alt="ASGARDEV Laptop Clinic" style="border-radius: 4px; object-fit: cover;">
            </div>
            <div class="brand" style="text-transform: none; font-size: 15px; font-weight: 700; line-height: 1.2; padding-top: 5px;">
              ASGARDEV <br>Laptop Clinic
            </div>
          </div>
          <!-- End of Navbar Judul Pojok Kiri -->
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="example">
        <!-- Navbar Kanan -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?= base_url('member/index'); ?>" class="page-scroll">
              <i class="fa fa-home"></i>
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#">
              <i class="fa fa-user"></i>
              <?= $user['nama_user']; ?>
            </a>
          </li>
          <li>
            <a href="<?= base_url('auth/logout'); ?>" class="btn-logout">
              <i class="fa fa-sign-out"></i>
              Logout
            </a>
          </li>
        </ul>
        <!-- End of Navbar Kanan -->
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>