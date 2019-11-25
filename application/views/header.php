<?php
require_once('change_lang.php');
?>
<!DOCTYPE html>
<html>
<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo project_title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>" class="nav-link"><?php echo Home;?></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="<?php echo Search;?>" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>" class="brand-link" style="white-space: inherit;" >
      <img src="<?php echo base_url();?>dist/img/logoUnico.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"style="opacity: 1; max-height: 150px;">
      <span class="brand-text font-weight-light" style="margin-left: 20px;">UNICONNECT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Super Market Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url();?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <?php echo Dashboard;?>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="javascript:void(0);" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <?php echo Product;?>
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>product/see_product" class="nav-link">
                  <i class="fas fa-cube nav-icon"></i>
                  <p><?php echo See_product;?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="fas fa-barcode nav-icon"></i>
                  <p><?php echo Manage_Product;?></p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo base_url()?>product/create_product" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Create_Product;?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>product/organization_commercial" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Organization_commercial;?></p>
                </a>
              </li>
              </ul>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>product/classify_product" class="nav-link">
                  <i class="fas fa-sitemap nav-icon"></i>
                  <p><?php echo Classify_Product;?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>product/product_suppliers" class="nav-link">
                  <i class="fas fa-truck nav-icon"></i>
                  <p><?php echo Product_Suppliers;?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>product/price_managment" class="nav-link">
                  <i class="fas fa-dollar-sign nav-icon"></i>
                  <p><?php echo Price_Managment;?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>product/product_taxes" class="nav-link">
                  <i class="fas fa-balance-scale nav-icon"></i>
                  <p><?php echo Product_Taxes;?></p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>