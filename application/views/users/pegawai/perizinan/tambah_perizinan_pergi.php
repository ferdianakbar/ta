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
		<div class="col-xs-12">
			<div class="box">
      <?php 
$nip='';
$nama='';
$tgl_pergi='';
$jam_pergi='';
$tgl_datang='';
$jam_datang='';
$keterangan='';
$photo='';

if(isset($perizinan)){
$nip=$perizinan->nip;
$nama=$perizinan->nama;
$tgl_pergi=$perizinan->$tgl_pergi;
$jam_pergi=$perizinan->$jam_pergi;
$tgl_datang=$perizinan->$tgl_datang;
$jam_datang=$perizinan->$jam_datang;
$keterangan=$perizinan->$keterangan;
$photo=$perizinan->photo;
}

?>		
      

<center>
<h3>---Form Perizinan Pergi---</h3><br>
<form action="<?php echo site_url()?>/pegawai/lihat_data_izin" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>NIP</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" value= "<?php echo $this->session->userdata('nip');?>" id="nip"  readonly name="nip"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" value= "<?php echo $this->session->userdata('nama');?>" readonly name="nama"id="nama"></td>
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
<tr><td>Tanggal Izin</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="date" value="" class="form-control" name="tgl_pergi" id="tgl_pergi"></td>
<tr><td>Jam Pergi</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td></tr>
<tr><td>Tanggal Datang</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="date" value="" class="form-control" name="tgl_datang" id="tgl_datang"></td>
<tr><td>Jam Datang</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_datang" id="jam_datang" class="form-control"></td></tr>
<tr>
<td>Keperluan</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><textarea class="form-control" required name="keperluan" id="keperluan"></textarea></td>
<tr><td>Photo</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><?php echo $photo!=''?'<img src="'.base_url().'/upload/izin/'.$photo.'':''?><input type="file" name="photo" id="photo" class="form-control"></td></tr>
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" name="btnsimpan" value="simpan" class="btn btn-danger  btn-sm">

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
