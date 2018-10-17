
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
				
<?php				
$photo='';

if(isset($user)){
	$photo=$user->photo;
}

?>
	<div class="row">
		<div class="col-md-12 clearfix">
			<form role="form" method="post" action="<?php echo site_url()?>/pegawai/update_pegawai" enctype="multipart/form-data">
				<?php foreach($pegawai as $row) ?>
				<div id="form-group" class="tab-pane active">
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">IDENTITAS PRIBADI</th></tr>
					<tr>
						<td>NIP</td>
						<td> 
							<div class='col-sm-3'><input readonly type="text" name="nip" class="form-control" id="nip" value="<?php echo $this->session->userdata('nip');?>" placeholder="nip" class="form-control" id="nip" required ></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td> 
							<div class='col-sm-3'><input type="text" name="nama" class="form-control" id="nama" value="<?php echo $this->session->userdata('nama');?>" placeholder="nama" class="form-control" id="nama" required ></div>
						</td>
					</tr>
					<tr>
						<td>Golongan</td>
						<td> 
							<div class='col-sm-2'><input type="text" name="golongan" class="form-control" id="golongan" value="<?php echo $row->golongan; ?>" placeholder="golongan" class="form-control" id="golongan" required ></div>
						</td>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td> 
							<div class='col-sm-2'><input type="text" name="jabatan" class="form-control" id="jabatan" value="<?php echo $row->jabatan; ?>" placeholder="jabatan" class="form-control" required ></div>
						</td>
					</tr>
					<tr>
						<td>instansi</td>
						<td> 
							<div class='col-sm-6'>
								<select name='id_ins' class="form-control">
									<?php 
										foreach($instansi as $rins):
										if($rins->id_ins == $row->id_ins):
									?>
											<option selected value="<?= $rins->id_ins; ?>"><?= $rins->nama_ins; ?></option>
										<?php else: ?>
											<option value="<?= $rins->id_ins; ?>"><?= $rins->nama_ins; ?></option>
									<?php 
										endif;
										endforeach; 
									?>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nomor Enroll</td>
						<td> 
							<div class='col-sm-3'><input type="text" name="no_enroll" class="form-control" id="no_enroll" value="<?php echo $row->no_enroll; ?>" placeholder="no_enroll" class="form-control" id="no_enroll" required ></div>
						</td>
					</tr>
					<tr>
						<td>Nomor Alat</td>
						<td> 
							<div class='col-sm-3'><input type="text" name="no_alat" class="form-control" id="no_alat" value="<?php echo $row->no_alat; ?>" placeholder="no_alat" class="form-control" id="no_alat" required ></div>
						</td>
					</tr>
					<tr>
						<td>Photo</td>
						<td><?php echo $row->photo !=''?'<img src="'.base_url().'assets/upload/foto_user/'.$row->photo.'" width="200" height=300">':'<img src="'.base_url().'assets/upload/foto_profil/noface.png" width="300" height="300">'?><br>
						<div class='col-sm-3'><input type="file" class="form-control" name="photo" id="photo"></td>
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
	
