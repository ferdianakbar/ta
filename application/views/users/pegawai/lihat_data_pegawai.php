<!DOCTYPE html>

          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
		  <script type="text/javascript">
		$(document).ready(function () {
                
                $('#tanggal_lahir').datepicker({
                    format: "yyyy-mm-dd"
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
			var telp=document.getElementById('telp');
			var pimpinan=document.getElementById('pimpinan');
			var wanita=document.getElementById('wanita');
			var admin=document.getElementById('admin');
			var pria=document.getElementById('pria');

	if(password.value.length != 5){
		alert('Password Harus 5 Karakter');
		password.focus;
		return false;
	 
	}
	if(pria.checked == false && wanita.checked == false){
		alert('Jenis kelamin tidak boleh kosong');
		return false;
	}	if(pimpinan.checked == false && admin.checked == false){
		alert('Tipe User tidak boleh kosong');
		return false;
	}	
	if(isNaN(telp.value)){
		alert('No Telepon Harus Angka');
		telp.focus();
		return false;
	}
	if(telp.value.length > 15 || telp.value.length <10){
		alert('No telepon harus dalam range 10-15 karakter');
		telp.focus;
		return false;
	}
	
	
	return true;
 }
 </script>          

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
		  
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
<center>
<h3>Data Pegawai</h3><br>
<form action="<?php echo site_url()?>/pegawai/data_pegawai" method="GET" enctype="multipart/form-data" onsubmit="return validasi">
<table style="font-size:12px">
<tr>
<td>
 Pilih Dinas/ Unit Kerja<div id="jenis"></td>
    <td>&nbsp&nbsp:</td>
        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td>
            <td>
            <select name="ins" class="form-control"  id="jenis_pelanggaran">
                <?php foreach($instansi as $row): ?>
                    <option value="<?= $row->id_ins; ?>"><?= $row->nama_ins; ?></option>
                <?php endforeach; ?>
            </select>
            </td>
    </div>    
<tr>
    <td> </td> <td> </td> <td> </td><td><input type="submit" value="OK" class="btn btn-large  btn-sm">
<tr></tr>
    <td>  </td>
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
