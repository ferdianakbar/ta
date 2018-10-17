<!DOCTYPE html>

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
		
<?php
$id_jenis_pelanggaran='';
$jenis_pelanggaran='';
$nama_pelanggaran='';
if(isset($pelanggaran)){
$id_jenis_pelanggaran=$pelanggaran->id_jenis_pelanggaran;
$jenis_pelanggaran=$pelanggaran->jenis_pelanggaran;
$nama_pelanggaran=$pelanggaran->nama_pelanggaran;
}
?>
<center>
<h3>---Tambah Jenis Pelanggaran---</h3><br>
<form action="<?php echo site_url()?>/pelanggaran/simpan_jenis_langgar" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>Jenis Pelanggaran</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td>
<select value="<?php echo $jenis_pelanggaran;?>" name="jenis_pelanggaran" class='form-control' id="jenis_pelanggaran">
							<option value='' >---Silahkan Pilih---</option>
							<option value="ringan">Ringan</option>
							<option value="sedang">Sedang</option>
							<option value="berat">Berat</option>
							</select></td>
</tr>
<tr>
<td>Nama Pelanggaran</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nama_pelanggaran" value="<?php echo $nama_pelanggaran?>" name="nama_pelanggaran"></td>
</tr>

 <input type="hidden" name="id_jenis_pelanggaran" value="<?php echo $id_jenis_pelanggaran?>">    
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
    </tr>   

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
