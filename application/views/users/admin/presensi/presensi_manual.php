
          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang,
            <small><b><?php echo $this->session->userdata('nama');?></b></small>
          </h1>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="col-md-4 panel-group" id="accordion">
                <div class="panel-title">
                </div>
		  <div class="panel panel-success" style="background-color: rgba(255,255,255,0.)">
                    <div class="button-login panel-heading" data-toggle="collapse" data-parent="#accordion" >
                        <div class="panel-title">
                            <center><b>Presensi Manual</b></center>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo site_url()?>/presensi/manual">
                            <button type="submit" class="btn btn-lg btn-block btn-success" style="font-size:12px"><b>PRESENSI</b></button>
                        </form>
                    </div>
                </div>
        </section>
        
	</div>
	
	
