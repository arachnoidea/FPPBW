<?php
    $abc = $this->session->userdata('nama');
    if(empty($abc)){
      header("Location: login");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Halaman Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets2/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="<?php echo base_url(); ?>assets2/stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="<?php echo base_url(); ?>assets2/stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets2/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets2/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets2/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>index.php/Home/admin" class="logo"><b>Shinta ADMIN</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url('index.php/Login/logout');?>">Logout</a></li>
            	</ul>
            </div>
        </header>

         <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><img src="<?php echo base_url(); ?>assets/admin/assets/img/72.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Shinta</h5>
                    
                  <li class="mt">
                      <a class="active" href="<?php echo base_url(); ?>index.php/Home/admin">
                          <i class="fa fa-dashboard"></i>
                          <span >Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Barang</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/Admin/bt">Daftar Barang</a></li>

                          <li><a  href="<?php echo base_url(); ?>index.php/Admin/form">Tambah Barang</a></li>

                          <li><a  href="<?php echo base_url(); ?>index.php/Admin/testi">Testimoni</a></li>

                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
