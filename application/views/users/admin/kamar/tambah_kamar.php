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
$id_kamar='';
$nama_kamar='';
$kapasitas='';

if(isset($kamar)){
$id_kamar=$kamar->id_kamar;
$nama_kamar=$kamar->nama_kamar;
$kapasitas=$kamar->kapasitas;
}
?>
<center>
<h3>---Tambah kamar---</h3><br>
<form action="<?php echo site_url()?>/kamar/simpan_kamar" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>Nama Kamar</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nama_kamar" value="<?php echo $nama_kamar?>" name="nama_kamar"></td>
</tr>
<tr>
<td>Kapasitas</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="kapasitas" value="<?php echo $kapasitas?>" name="kapasitas"></td>
</tr>
 <input type="hidden" name="id_kamar" value="<?php echo $id_kamar?>">    
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
