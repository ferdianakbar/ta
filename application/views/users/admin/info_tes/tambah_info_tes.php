<!DOCTYPE html>

          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
<link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
          
		  <script type="text/javascript">
		$(document).ready(function () {
                
                $('#tanggal_datang').datepicker({
                    format: "dd-mm-yyyy"
                });  
            
            });
			$(document).ready(function () {
                
                $('#tanggal_pergi').datepicker({
                    format: "dd-mm-yyyy"
                });  
            
            });
			</script>
<script>
function validasi(){
			var tanggal_datang=document.getElementById('tanggal_datang');
			var tanggal_pergi=document.getElementById('tanggal_pergi');
			var jumlah=document.getElementById('jumlah');
			var jamp = tanggal_pergi.value;
			var jamd = tanggal_datang.value;
			var x =((Date.parse(jamd))  - (Date.parse(jamp)))/100000000;
			

	if( x >= 4){
		alert('Tidak Bisa Izin Melebihi 3 Hari');
		return false;
	 
	}	
	if( x < 0){
		alert('Tanggal Datang Harus Lebih Besar Dari Tanggal Pergi');
		return false;
	 
	}
	
	return true;
 }	
</script>
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
$id_info_tes='';
$tgl_tes='';
$bobot='';
$jenis_tes='';
$keterangan='';
$id_user='';
$nama_lengkap='';
$tipe_user='';
$telp='';
$photo='';
$alamat='';
$password='';
$jenis_kelamin='';
$tempat_lahir='';
$tanggal_lahir='';

if(isset($tes)){
$id_info_tes=$tes->id_info_tes;
$tgl_tes=$tes->tgl_tes;
$bobot=$tes->bobot;
$jenis_tes=$tes->jenis_tes;
$keterangan=$tes->keterangan;
}
if(isset($users)){
$id_user=$users->id_user;
$nama_lengkap=$users->nama_lengkap;
$tipe_user=$users->tipe_user;
$telp=$users->telp;
$photo=$users->photo;
$alamat=$users->alamat;
$password=$users->password;
$jenis_kelamin=$users->jenis_kelamin;
$tempat_lahir=$users->tempat_lahir;
$tanggal_lahir=$users->tanggal_lahir;
}
?>
<center>
<h3>Formulir Ijin</h3><br>
<form action="<?php echo site_url()?>/admin/simpan_info_tes" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">

    <table style="font-size:18px">
    
<td>NIP</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nis"  name="nis">
</td>
<tr>
    <td>Nama Lengkap</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" name="nama_lengkap" readonly id="nama_lengkap" ></td>
</tr>
<tr>
    <td>Tanggal Pergi</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="tanggal_pergi"  name="tanggal_pergi"></td>
</tr>
<tr>
    <td>Tanggal Datang</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="tanggal_datang"  name="tanggal_datang"></td>
</tr>
<tr>
    <td>Jam Pergi</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
</tr>
<tr>
    <td>Jam Datang</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_datang" id="jam_datang" class="form-control"></td></tr>
<tr>
    <td>Surat (Dasar Ijin)</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="jenis_tes" value="<?php echo $jenis_tes?>" name="jenis_tes"></td>
</tr>
<tr>
    <td>Nomor</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="jenis_tes" value="<?php echo $jenis_tes?>" name="jenis_tes"></td>
</tr>
<tr>
    <td>Keterangan</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="jenis_tes" value="<?php echo $jenis_tes?>" name="jenis_tes"></td>
</tr>
<tr>
    <td>Status Ijin</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td>
    <td><input id="tipe_user" <?php echo $tipe_user=='admin'?'checked="checked"':''?> required type="radio"  name="tipe_user"  value="admin">Perlop keperluan lain-lain</td>
    <td>&nbsp</td><td><input <?php echo $tipe_user=='pimpinan'?'checked="checked"':''?> required type="radio"  id="tipe_user" name="tipe_user" value="pimpinan">Perlop Tahunan</td>
    
</tr>
<input type="hidden" value="pulang" name="jenis_izin">
<input type="hidden" name="id_izin">
<input type="hidden" id="telp_ayah" name="telp_ayah">
</select></td></div>
 <input type="hidden" name="id_user" value="<?php echo $id_user?>">    
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="Ijin" class="btn btn-sm  btn-sm">
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
