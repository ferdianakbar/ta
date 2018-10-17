
 <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
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
		  
		  
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
			
			<div class="box-header">			
				</div>
 
	<div class="row">
		<div class="col-md-12 clearfix">
			<form role="form" method="post" action="<?php echo site_url()?>/pegawai/update_pegawai">
				<?php foreach($jamker as $data) ?>
				<div id="form-group" class="tab-pane active">
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">IDENTITAS PRIBADI</th></tr>
					<tr>
						<td>Instansi</td>
						<td> 
							<div class='col-sm-4'><input readonly type="text" name="id_ins" class="form-control" id="id_ins" value="<?php echo $data->nama_ins; ?>" placeholder="nama_ins" class="form-control"required ></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>JAM MASUK</td>
						<td> 
							<div class='col-sm-2'><input type="text" name="jam_msk" class="form-control" value="<?php echo $data->jam_msk; ?>" placeholder="jam_msk" class="form-control" id="jam_msk" required ></div>
						</td>
					</tr>
					<tr>
						<td>JAM PULANG</td>
						<td> 
							<div class='col-sm-2'><input type="text" name="jam_plg" class="form-control" value="<?php echo $data->jam_plg; ?>" placeholder="jam_plg" class="form-control" id="jam_plg" required ></div>
						</td>
					</tr>	
				</table>
				</div>
				<button type="submit" class="btn btn-lg btn-block btn-success" style="font-size:12px"><b>EDIT</b></button>
			</form>
			
		</div>		
    </div>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	
