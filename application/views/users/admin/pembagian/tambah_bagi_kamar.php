
          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang,
            <small><b><?php echo $this->session->userdata('nama_lengkap');?></b></small>
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

?>
 <form action="<?php echo site_url()?>/kamar/simpan_bagi_kamar" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
	<div class="row">
		<div class="col-md-12 clearfix">
			<ul class="nav nav-tabs" >
				<li class="active"><a data-toggle="tab" href="#home">DATA SANTRI</a></li>
				<li><a data-toggle="tab" href="#menu1">DATA ASATIDZ</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane active">
				<table class="table table-bordered">
				<tr class="success"><th colspan="2">DATA SANTRI</th></tr>
<tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIS</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>TEMPAT, TGL LAHIR</center></th>
            <th><center>AKSI</center></th>
          </tr>
<?php $nourut=0;
foreach ($santri as $data) {
$nourut++;?>
				<tr>
					<td><?php echo $nourut ?></td>
					<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="100" height="100">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"width="100" height="100">'?></td>
					<td><?php echo $data->nis;?></td>
					<td><?php echo $data->nama_lengkap;?></td>
					<td><?php echo $data->tempat_lahir;?>,<?php echo date("d-M-Y",strtotime($data->tanggal_lahir))?></td>
					<td> 
						<?php echo '<input name="checkbox[]" type="checkbox" id="checkbox[]" value="'.$data->nis.'">'?>		
						</td>
						</tr>
						<input type="hidden" name="id_kamar" id="id_kamar" value="<?php echo $kamar->id_kamar;?>" >
						<?php } ?>
				</table>
				</div>
	
	
    <div id="menu1" class="tab-pane">
     <table class="table table-bordered">
				<tr class="success"><th colspan="2">DATA ASATIDZ</th></tr>
				<tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIP</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>TEMPAT, TGL LAHIR</center></th>
            <th><center>AKSI</center></th>
          </tr>
<?php $nourut1=0;
foreach ($asatidz as $data1) {
$nourut1++;?>
				<tr>
					<td><?php echo $nourut1 ?></td>
					<td><?php echo $data1->photo!=''?'<img src="'.base_url().'/upload/foto_asatidz/'.$data1->photo.'" width="100" height="100">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"width="100" height="100">'?></td>
					<td><?php echo $data1->nip;?></td>
					<td><?php echo $data1->nama_lengkap;?></td>
					<td><?php echo $data1->tempat_lahir;?>,<?php echo date("d-M-Y",strtotime($data1->tanggal_lahir))?></td>
					<td> 
						<?php echo '<input name="checkbox1" type="checkbox" id="checkbox1" value="'.$data1->nip.'">'?>		
						</td>
						</tr>
						<?php } ?>
				</table>
    </div>
	<input type="text" name="jumMK" value="<?php echo (($nourut1+$nourut)-1); ?>" />
	<input type="submit" name="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	
