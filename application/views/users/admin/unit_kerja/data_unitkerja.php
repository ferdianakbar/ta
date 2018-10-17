
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
				<?php foreach($instansi as $data) ?>
	<div class="row">
		<div class="col-md-12 clearfix">
			<form role="form" method="post" action="<?php echo site_url()?>/unit_kerja/update_unitkerja">				
				<div id="form-group" class="tab-pane active">
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">Data Unit Kerja</th></tr>
					<tr>
						<td>Kode Unit Kerja</td>
						<td> 
							<div class='col-sm-4'>
							<input readonly type="text" name="id_ins" class="form-control" id="id_ins" value="<?php echo $data->id_ins;?>" placeholder="id_ins" class="form-control"  required ></div>
							</div>
						</td>
					</tr>
					
					<tr>
						<td>Unit Kerja</td>
						<td> 
							<div class='col-sm-4'>
							<input readonly type="text" name="nama_ins" class="form-control" id="nama_ins" value="<?php echo $data->nama_ins;?>" placeholder="id_ins" class="form-control"  required ></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Kepala</td>
						<td> 
							<div class='col-sm-4'><input type="text" name="kepala_ins" class="form-control" id="kepala_ins" value="<?php echo $data->kepala_ins; ?>" placeholder="kepala_ins" class="form-control" required ></div>
						</td>
					</tr>
					<tr>
					<tr>
						<td>NIP Kepala</td>
						<td> 
							<div class='col-sm-3'><input type="text" name="NIPkepala" class="form-control" id="NIPkepala" value="<?php echo $data->NIPkepala; ?>" placeholder="NIPkepala" class="form-control" required ></div>
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
	
