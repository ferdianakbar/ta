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

<center>
<h3>Formulir Presensi Manual</h3><br>
<form action="<?php echo site_url()?>/admin/simpan_info_tes" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">

    <table style="font-size:18px">
<tr>
    <td>Tanggal</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="tanggal_pergi"  name="tanggal_pergi"></td>
</tr>
        
<td>
    NIP</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nis"  name="nis">
</td>
<tr>
    <td>Nama Lengkap</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" name="nama_lengkap" readonly id="nama_lengkap" ></td>
</tr>
<tr>
    <td>Jam</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
</tr>
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="Ijin" class="btn btn-sm  btn-sm">
       

</table>
</form>
</center>
   <!-- /.box-body -->
  <!-- /.box -->
  
</div>
</div>
</div>
	</section>
		