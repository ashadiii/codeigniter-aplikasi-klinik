<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?=$title?> | Aplikasi Erha Klinik</title>
  

  <link rel="shortcut icon" href="<?=base_url();?>assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?=base_url();?>assets/favicon.ico" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- jQuery 3 -->
  <script src="<?=base_url();?>assets/css/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?=base_url();?>assets/css/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=base_url();?>assets/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?=base_url();?>assets/css/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url();?>assets/css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?=base_url();?>assets/css/bower_components/raphael/raphael.min.js"></script>
  <script src="<?=base_url();?>assets/css/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?=base_url();?>assets/css/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?=base_url();?>assets/css/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?=base_url();?>assets/css/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?=base_url();?>assets/css/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?=base_url();?>assets/css/bower_components/moment/min/moment.min.js"></script>
  <script src="<?=base_url();?>assets/css/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?=base_url();?>assets/css/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?=base_url();?>assets/css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?=base_url();?>assets/css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?=base_url();?>assets/css/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url();?>assets/css/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?=base_url();?>assets/css/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url();?>assets/css/dist/js/demo.js"></script>
  <!-- validate -->
  <script type="text/javascript" src="<?=base_url();?>assets/css/dist/js/jquery.validate.min.js"></script>
  <!-- chart -->
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition fixed skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header main-header-custom">

    <a href="<?php echo base_url('') ?>" class="logo-custom">
      EAP Delivery
    </a>
    <!-- Logo -->
    <!-- <a href="<?php echo base_url('') ?>" class="logo">
      
      <span class="logo-mini"><b>A</b>LT</span>
     
      <span class="logo-lg">APLIKASI MONITORING PENGADAAN LAHAN PELABUHAN PONTIANAK, KALIMANTAN BARAT</span>
    </a> -->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <?php if ($this->session->userdata("nama")): ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=empty($this->session->userdata('image')) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$this->session->userdata('image').'' ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=empty($this->session->userdata('image')) ? ''.base_url().'assets/img/user2-160x160.jpg' : ''.base_url().'assets/img/'.$this->session->userdata('image').'' ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata("nama"); ?> - Admin
                  <small>Member since 2018</small>
                </p>
              </li>
              
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                  <a href="<?=base_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
            <?php endif; ?>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>