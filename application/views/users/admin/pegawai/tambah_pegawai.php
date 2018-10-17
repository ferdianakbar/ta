<!DOCTYPE html>

 <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
        
        
          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
 <script>
     $(function () {
        $("#nis").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
    	    delay:0,
            source:'<?php echo site_url('perizinan/get_nis'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota
            select:function(event, ui){
    	        $('#nis').val(ui.item.nis);
    	        $('#jumlah').val(ui.item.jumlah);
                $('#nisn').val(ui.item.nisn);
                $('#nama_lengkap').val(ui.item.nama_lengkap);
                $('#telp_ayah').val(ui.item.telp_ayah);
                }
            });
    	});
    </script>
		
		<script type="text/javascript">
window.onload = function () {
document.getElementById("password").onchange = validatePassword;
document.getElementById("password1").onchange = validatePassword;
}
function validatePassword(){
var pass1=document.getElementById("password1").value;
var pass=document.getElementById("password").value;
if(pass!=pass1)
document.getElementById("password1").setCustomValidity("Password Tidak Sama");
else
document.getElementById("password1").setCustomValidity('');}
</script>
<script>
function validasi(){
			var jam_datang=document.getElementById('jam_datang');
			var jam_pergi=document.getElementById('jam_pergi');
			var jumlah=document.getElementById('jumlah');
			var jamp = jam_pergi.value.substr(0,2);
			var jamd = jam_datang.value.substr(0,2);
			

	if((Number(jamd))  < (Number(jamp))){
		alert('Jam Datang Harus Lebih Besar Dari Jam Pergi');
		return false;
	 
	}
	if(jumlah.value >= 8){
		alert('Maaf Tidak Bisa Melakukan Perizinan Pergi Lagi');
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
          </h1>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
		  
	<div class="row">
		<div class="col-xs-15">
			<div class="box">
		
    <?php foreach ($pegawai as $data) ?>
<center>
<h3>Form Input Pegawai</h3><br>
<form action="<?php echo site_url()?>/admin/tambah_pegawai" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>NIP</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" value= "" id="nip"  name="nip"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" value= "" name="nama"id="nama"></td>
</tr>
<tr><td>Golongan</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" value="" class="form-control" name="golongan" id="golongan"></td>
<tr><td>Akses<div id="akses"></td>
    <td>&nbsp&nbsp:</td>
        <td>
			<td> 
			    <select name='jabatan' class="form-control">
						<option value="" selected>-- Pilih Jabatan --</option>
						<option value="Kepala SKPD" >Kepala SKPD</option>
						<option value="Kepala Bagian" >Kepala Bagian</option>
						<option value="Kepala Bidang" >Kepala Bidang</option>
						<option value="Kepala Subbagian" >Kepala Subbagian</option>
						<option value="Sekertariat" >Sekertariat</option>
						<option value="Lurah" >Lurah</option>
						<option value="Anggota" >Anggota</option>
				</select>
				</div>   
	</td>
</tr>
<tr><td>Pilih Dinas/ Unit Kerja<div id="instansi"></td>
    <td>&nbsp&nbsp:</td>
        <td>
				<td> 
					    <select name='id_ins' class="form-control">
									<?php 
										foreach($instansi as $ins):
										if($ins->id_ins == $ins->nama_ins):
									?>
											<option selected value="<?= $ins->id_ins; ?>"><?= $ins->nama_ins; ?></option>
										<?php else: ?>
											<option value="<?= $ins->id_ins; ?>"><?= $ins->nama_ins; ?></option>
									<?php 
										endif;
										endforeach; 
									?>
								</select>
							</div>
						</td>
</tr>
<tr><td>Nomor Alat</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" value="" class="form-control" name="no_alat" id="no_alat"></td>
</tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
