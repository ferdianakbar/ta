<!DOCTYPE html>

          <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
        
          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
 
		  <script type="text/javascript">
		$(document).ready(function () {
                
                $('#tanggal_datang').datepicker({
                    format: "yyyy-mm-dd"
                });  
            
            });
			$(document).ready(function () {
                
                $('#tanggal_pergi').datepicker({
                    format: "yyyy-mm-dd"
                });  
            
            });
			</script>
		      <script>
     $(document).ready(function () {
        $("#nis").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
    	    delay:0,
            source:'<?php echo site_url('pelanggaran/get_nis'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota
            select:function(event, ui){
    	        $('#nis').val(ui.item.nis);
                $('#nisn').val(ui.item.nisn);
                $('#nama_lengkap').val(ui.item.nama_lengkap);
             $('#telp_ayah').val(ui.item.telp_ayah);
                }
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

?>

<center>
<h3>---Form Perizinan Pulang Santri---</h3><br>
<form action="<?php echo site_url()?>/perizinan/simpan_perizinan_pulang" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>

<td>NIS</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nis"  name="nis"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" name="nama_lengkap" readonly id="nama_lengkap" ></td>
</tr>
<tr><td>Tanggal Pergi</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="tanggal_pergi"  name="tanggal_pergi"></td>
</tr>
<tr><td>Tanggal Datang</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="tanggal_datang"  name="tanggal_datang"></td>
</tr>
<tr><td>Jam Pergi</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td></tr>
<tr><td>Jam Datang</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_datang" id="jam_datang" class="form-control"></td></tr>
<tr>
<td>Keperluan</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><textarea class="form-control" required name="keperluan" id="keperluan"></textarea></td>
</tr>
<input type="hidden" value="pulang" name="jenis_izin">
<input type="hidden" name="id_izin">
<input type="hidden" id="telp_ayah" name="telp_ayah">
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
