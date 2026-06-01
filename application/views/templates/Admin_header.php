<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="<?= base_url('assets2'); ?>/img/asgardev_favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $judul; ?> - ASGARDEV Laptop Clinic</title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?= base_url('assets'); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="<?= base_url('assets'); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets'); ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
  
  <style>
    /* Custom Modern Modals, Inputs & Alerts by ASGARDEV */
    .modal-content {
      border-radius: 12px !important;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
      border: none !important;
      overflow: hidden;
    }
    .modal-header {
      background: #f8fafc;
      border-bottom: 1px solid #e2e8f0 !important;
      padding: 18px 25px !important;
    }
    .modal-title {
      font-weight: 700 !important;
      color: #1e293b !important;
      font-size: 16px !important;
    }
    .modal-body {
      padding: 25px !important;
    }
    .modal-footer {
      border-top: 1px solid #e2e8f0 !important;
      padding: 15px 25px !important;
      background: #f8fafc;
    }
    .modal-footer .btn {
      border-radius: 6px !important;
      padding: 8px 20px !important;
      font-weight: 600 !important;
    }
    .form-control {
      border-radius: 6px !important;
      border: 1px solid #cbd5e1 !important;
      box-shadow: none !important;
      padding: 10px 12px !important;
      height: auto !important;
      font-size: 14px !important;
      transition: all 0.15s ease-in-out !important;
    }
    .form-control:focus {
      border-color: #3b82f6 !important;
      box-shadow: 0 0 0 3px rgba(59,130,246,0.15) !important;
    }
    .alert {
      border-radius: 8px !important;
      border: none !important;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05) !important;
      padding: 15px 20px !important;
      font-weight: 500 !important;
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

<body class="nav-md footer-fixed">