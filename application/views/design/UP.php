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
  <body class="skin-blue fixed">

    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">Sistem TPP</a>
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
                <?php echo $this->session->userdata('photo')!=''?'<img src="'.base_url().'assets/upload/foto_user/'.$this->session->userdata('photo').'"class="user-image" alt="User Image">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"class="user-image" alt="User Image">'?>
                  <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  <?php echo $this->session->userdata('photo')!=''?'<img src="'.base_url().'assets/upload/foto_user/'.$this->session->userdata('photo').'"class="user-image" alt="User Image">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"class="user-image" alt="User Image">'?>
                    <p>
                      <?php echo $this->session->userdata('nama');?>
                      <br><td><?php echo $this->session->userdata('akses');?></td>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                     
                      <a href="<?=site_url('auth/logout');?>" class="btn btn-default btn-flat">logout</a>
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
            <?php echo $this->session->userdata('photo')!=''?'<img src="'.base_url().'assets/upload/foto_user/'.$this->session->userdata('photo').'"class="user-image" alt="User Image">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"class="user-image" alt="User Image">'?>
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('nama');?></p>
              <i class="fa fa-circle text-success"></i> Online
            </div>
          </div>
		  
		  
<ul class="sidebar-menu">
<li class="header"></li>
            <li><a href="<?=site_url('UP');?>">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
<!-- Menu Data -->
            <li class="treeview">
              <a href="#">
                 <i class="fa fa-group"></i> <span>Data</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <!--data pegawai-->
              <ul class="treeview-menu">
                <li class="treeview">
                  <a herf="#"> 
                    <i class="fa fa-group"></i><span>Data Pegawai</span> <i class="fa fa-angle-right pull-right"></i></a>
                      <ul class="treeview-menu">
			                  <li class="">
                            <a href="<?=site_url('UP/data_pegawai');?>"><i class="fa fa-minus"></i>Data Pegawai</a>
			                  </li>
			                  <li class="">
                        <a href="<?=site_url('UP/edit_data_pegawai');?>"><i class="fa fa-minus"></i>Edit Pegawai</a>
			                  </li>
                        <li class="">
                        <a href="<?=site_url('UP/tambah_pegawai');?>"><i class="fa fa-minus"></i>Tambah Pegawai</a>
			                  </li>
                      </ul>                  
                </li>

                <!--Data unit kerja-->
                <li class="treeview">
                  <a herf="#"> 
                      <i class="fa fa-group"></i><span>Data Unit Kerja</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="treeview-menu">
                          <li class="">
                              <a href="<?=site_url('UP/data_unitkerja');?>"><i class="fa fa-minus"></i>Unit Kerja</a>
                          </li>
                          <li class="treeview">
                          <a href="<?=site_url('UP/getIns');?>">
                              <i class="fa fa-minus"></i><span>Kegiatan</span></a>
                          </li>
                </li>
                </ul>
                <!--data user-->
                <li class="treeview">
                <a herf="#">
                    <i class="fa fa-lock"></i><span>User</span> <i class="fa fa-angle-right pull-right"></i></a>
                      <ul class="treeview-menu">
			                  <li class=""><a href="<?=site_url('UP/data_users');?>"><i class="fa fa-minus"></i>Daftar User</a>
			                  </li>
			                  <li class=""><a href="<?=site_url('UP/tambah_users');?>"><i class="fa fa-minus"></i>Tambah User</a>
			                  </li>
                        <li class=""><a href="<?=site_url('UP/ganti_pass');?>"><i class="fa fa-minus"></i>Ganti Password</a>
                        </li>
                      </ul>              
              </li>                   
            </li>
</li>
</ul>

<!-- Menu Presensi-->
            <li class="treeview">
              <a href="#">
                 <i class="fa fa-group"></i> <span>presensi</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li class="treeview">
                <a herf="#"> 
                    <i class="fa fa-gear"></i><span>Data Ijin</span> <i class="fa fa-angle-right pull-right"></i>
                </a>
                    <ul class="treeview-menu">
                    <li class="">
                          <a href="<?=site_url('UP/tambah_perizinan');?>"><i class="fa fa-minus"></i>Formulir</a>
			               </li>
                     <li class="">
                          <a href="<?=site_url('UP/aproval');?>"><i class="fa fa-minus"></i>Approval</a>
                     </li>
                       <li class="">
                          <a href="<?=site_url('UP/data_izin');?>"><i class="fa fa-minus"></i>Daftar Ijin</a>
			                 </li>
                    </ul>                   
              </li>
              
      <li class="treeview">
                <a herf="#"> 
                    <i class="fa fa-calendar"></i><span>Hari Libur</span> <i class="fa fa-angle-right pull-right"></i>
                </a>
                    <ul class="treeview-menu">
			<li class=""><a href="<?=site_url('UP/tambah_libur');?>"><i class="fa fa-minus"></i>Set Hari Libur</a>
			</li>
			<li class=""><a href="<?=site_url('UP/data_libur');?>"><i class="fa fa-minus"></i>Daftar Hari Libur</a>
			</li>
      </ul>                   
              </li>
              <li class="treeview">
                  <a href="<?=site_url('UP/daftar_jamkerja');?>"><i class="fa fa-clock-o"></i>Daftar Jam Kerja</a>                  
              </li>
              <li class="treeview">
                <a herf="#"> 
                    <i class="fa fa-file"></i><span>Cuti</span> <i class="fa fa-angle-right pull-right"></i>
                </a>
                    <ul class="treeview-menu">
			                 <li class="">
                       <a href="<?=site_url('UP/nip_cuti');?>"><i class="fa fa-minus"></i>Tambah Cuti</a>
                       </li>
                       <li class="">
                       <a href="<?=site_url('UP/approval_cuti');?>"><i class="fa fa-minus"></i>Approval Cuti</a>
			                 </li>
                       <li class="">
                       <a href="<?=site_url('UP/lihat_cuti');?>"><i class="fa fa-minus"></i>Daftar Cuti</a>
			                 </li>
                    </ul>                  
              </li>
              <li class="treeview">
                <a herf="#"> 
                    <i class="fa fa-file"></i><span>Entry Presensi</span> <i class="fa fa-angle-right pull-right"></i>
                </a>
                    <ul class="treeview-menu">
			                 <li class="">
                       <a href="<?=site_url('UP/presensi_manual');?>"><i class="fa fa-minus"></i>Presensi Manual</a>
			                 </li>
                       <li class="">
                       <a href="<?=site_url('UP/showPresman');?>"><i class="fa fa-minus"></i>approve presensi</a>
			                 </li>
                    </ul>                  
              </li>
              <li class="treeview">
              <a href="<?=site_url('UP/data_presensi');?>"> 
                    <i class="fa fa-file"></i><span>Data Presensi</span>
                </a>
                             
              </li>

-->				</li>
          </ul>
          <li class="treeview">
          <a href="<?=site_url('unit_kerja/getIns');?>">
                 <i class="fa fa-trophy"></i> <span>Capaian Kinerja</span> <i class="fa fa-angle-left pull-right"></i>
              </a></li>
          <li class="treeview">
              <a href="#">
                 <i class="fa fa-certificate"></i> <span>Penilaian Kinerja</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
			              <li class=""><a href="<?=site_url('UP/showNip');?>"><i class="fa fa-minus"></i>Kuisioner PKP</a>
			              </li>                      
              </ul>
              <ul class="treeview-menu">
			              <li class=""><a href="<?=site_url('UP/hasil');?>"><i class="fa fa-minus"></i>Hasil Kuisioner</a>
			              </li>                      
              </ul>
          <li class="treeview">
              <a href="#">
                 <i class="fa fa-file-text"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li class="treeview">
                <a herf="#"> 
                    <i class="fa fa-file-text"></i><span>Presensi</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                    <ul class="treeview-menu">
			              <li class=""><a href="<?=site_url('admin/tambah_users');?>"><i class="fa fa-minus"></i>Set Laporan</a>
			              </li>
			              <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Pegawai</a>
			              </li>
                    <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Jam Kerja</a>
			              </li>
                    <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Ijin</a>
			              </li>
                    <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Hari Libur</a>
			              </li>
                    <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Presensi</a>
			              </li>
                    <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Presensi Harian</a>
			              </li>
                    <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Presensi Rekap</a>
			              </li>
                    </ul>
              </li>
              <li class="treeview">
              <a herf="#"> 
                   <i class="fa fa-file-text"></i><span>Capaian Organisasi</span> <i class="fa fa-angle-right pull-right"></i>
              </a>
                   <ul class="treeview-menu">
			             <li class=""><a href="<?=site_url('admin/tambah_users');?>"><i class="fa fa-minus"></i>Set Laporan</a>
			             </li>
			             <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Pegawai</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Jam Kerja</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Ijin</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Hari Libur</a>
		               </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Presensi</a>
 		               </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Presensi Harian</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Presensi Rekap</a>
			             </li>
                   </ul>
              </li>
              <li class="treeview">
              <a herf="#"> 
                   <i class="fa fa-file-text"></i><span>Kinerja Pegawai</span> <i class="fa fa-angle-right pull-right"></i>
              </a>
                   <ul class="treeview-menu">
			             <li class=""><a href="<?=site_url('admin/tambah_users');?>"><i class="fa fa-minus"></i>Kuisioner</a>
			             </li>
			             <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Edit Kuisioner</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Jam Kerja</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Ijin</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Hari Libur</a>
		               </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Daftar Presensi</a>
 		               </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Presensi Harian</a>
			             </li>
                   <li class=""><a href="<?=site_url('admin/lihat_users');?>"><i class="fa fa-minus"></i>Presensi Rekap</a>
			             </li>
                   </ul>
              </li>
                
                
                
</section>
        <!-- /.sidebar -->
      </aside>