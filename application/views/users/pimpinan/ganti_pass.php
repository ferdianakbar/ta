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
$password='';
$nisn='';

if(isset($pimpinan)){
$pass=$pimpinan->password;
$id_user=$pimpinan->id_user;
}
?>
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
<center>
<h3>---Ganti Password---</h3><br>
<form action="<?php echo site_url()?>/pimpinan/simpan_pass" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>Password Lama</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input readonly type="textfield" class="form-control"  value="<?php echo $pass?>"></td>
</tr>
<tr>
<td>Password Baru</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="password" class="form-control" id="password" name="password"></td>
</tr>
<tr>
<td>Konfirmasi Password Baru</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="password" class="form-control" id="password1" name="password1"></td>
</tr>
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">       
<input type="hidden" value="<?php echo $id_user?>" name="id_user">
</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
