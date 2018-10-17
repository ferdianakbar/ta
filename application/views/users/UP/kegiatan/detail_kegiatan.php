
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
				
    
	<?php foreach ($keg as $data) ?>
	<div class="row">
		<div class="col-md-10 clearfix">
			<form role="form" method="post" action="<?php echo site_url()?>/pegawai/update_pegawai">
				<div id="form-group" class="tab-pane active">
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">IDENTITAS PRIBADI</th></tr>
					<tr>
						<td>Nama Instansi</td>
						<td> 
							<div class='col-sm-3'><input readonly type="text" name="nama_keg" class="form-control" id="nama_keg" value="<?php $data->nama_keg; ?>" class="form-control" required ></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nama Kegiatan</td>
						<td> 
							<div class='col-sm-3'><input type="text" name="kegiatan" class="form-control" id="kegiatan" value="<?php ?>" placeholder="nama" class="form-control" required ></div>
						</td>
					</tr>
					<tr>
						<td>PPTK</td>
						<td> 
							<div class='col-sm-2'><input type="text" name="golongan" class="form-control" id="golongan" value="<?php  ?>" placeholder="golongan" class="form-control" id="golongan" required ></div>
						</td>
					</tr>
					<tr>
						<td>Nip PPTK</td>
						<td> 
							<div class='col-sm-2'><input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php  ?>" placeholder="jabatan" class="form-control" required ></div>
						</td>
					</tr>
					<tr>	
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
	
