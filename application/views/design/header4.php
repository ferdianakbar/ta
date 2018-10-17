<html>
  <head>
    <title>PEMERINTAH KOTA YOGYAKARTA</title>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-1.9.1.js');?>"></script>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
	
<script type="text/javascript" src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.js');?>"></script>

<link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
       
    <link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
	 <link href="<?=base_url('assets/plugins/datepicker/datepicker3.css');?>" rel="stylesheet" type="text/css" />
	 
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('assets/plugins/fontawesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=base_url('assets/plugins/ionicons/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('assets/dist/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
	 <link href="<?=base_url('assets/dist/css/coba.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/dist/css/main.css');?>" rel="stylesheet" type="text/css" />
	<link href="<?=base_url('assets/uadmin/css/plugins.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/uadmin/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('assets/dist/css/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url('assets/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>    
    <!-- FastClick -->
    <script src='<?=base_url('assets/plugins/fastclick/fastclick.min.js');?>'></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets/dist/js/app.min.js');?>" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/plugins/datepicker/bootstrap-datepicker.js');?>" type="text/javascript"></script>
    <?php echo $this->session->flashdata('msg');?>
  </head>
  <body class="skin-red fixed">

    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">Imam Bukhari</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php echo $this->session->userdata('photo')!=''?'<img src="'.base_url().'/upload/foto_profil/'.$this->session->userdata('photo').'"class="user-image" alt="User Image">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"class="user-image" alt="User Image">'?>
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama_lengkap');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <?php echo $this->session->userdata('photo')!=''?'<img src="'.base_url().'/upload/foto_profil/'.$this->session->userdata('photo').'"class="img-circle" alt="User Image">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"class="img-circle" alt="User Image">'?>
                    <p>
                      <?php echo $this->session->userdata('nama_lengkap');?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                      <a href="<?php echo site_url().'/santri/edit_pass/'.$this->session->userdata('username');?>" class="btn btn-default btn-flat">Ganti Password</a>
                      <a href="<?=site_url('auth/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <?php echo $this->session->userdata('photo')!=''?'<img src="'.base_url().'/upload/foto_profil/'.$this->session->userdata('photo').'"class="img-circle" alt="User Image">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"class="img-circle" alt="User Image">'?>
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('nama_lengkap');?></p>

              <i class="fa fa-circle text-success"></i> Online
            </div>
          </div>
		  
		  
		  <ul class="sidebar-menu">
            <li class="header"></li>
            <li>
              <a href="<?=site_url('santri');?>">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
			<li class=""><a href="<?php echo site_url().'/santri/laporan_pelanggaran/'.$this->session->userdata('username')?>"><i class="fa fa-warning"></i>Laporan Pelanggaran</a>
						</li>
			<li class=""><a href="<?php echo site_url().'/santri/laporan_perizinan_pergi/'.$this->session->userdata('username')?>"><i class="fa fa-clock-o"></i>Laporan Perizinan Pergi</a>
						</li>
			<li class=""><a href="<?php echo site_url().'/santri/laporan_perizinan_pulang/'.$this->session->userdata('username');?>"><i class="fa fa-clock-o"></i>Laporan Perizinan Pulang</a>
						</li>
			<li class=""><a href="<?php echo site_url().'/santri/laporan_kesehatan/'.$this->session->userdata('username');?>"><i class="fa fa-medkit"></i>Laporan Riwayat Kesehatan</a>
						</li>  
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>