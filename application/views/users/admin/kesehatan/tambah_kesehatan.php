<!DOCTYPE html>

          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
	<script src="<?=base_url('assets/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
          <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
        
          
<script>
     $(function () {
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
$id_riwayat_kes='';
$penyakit='';
$tindakan='';
$nis='';
$telp_ayah='';


if(isset($kesehatan)){
$id_riwayat_kes=$kesehatan->id_riwayat_kes;
$penyakit=$kesehatan->penyakit;
$tindakan=$kesehatan->tindakan;
$tanggal_sakit=$kesehatan->tanggal_sakit;
$telp_ayah=$kesehatan->telp_ayah;
$nama_lengkap=$kesehatan->nama_lengkap;
$nis=$kesehatan->nis;
}
?>
<center>
<h3>---Form Riwayat Kesehatan---</h3><br>
<form action="<?php echo site_url()?>/kesehatan/simpan_kesehatan" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<?php
$tanggal_pelanggaran1= date('d-m-Y');?>
<tr><td>Tanggal</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" readonly value="<?php echo $tanggal_pelanggaran1?>"></td>
</tr>
<tr>
<td>NIS</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nis" value="<?php echo $nis?>" name="nis"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" readonly id="nama_lengkap" name="nama_lengkap"></td>
</tr>
<tr>
<td>Penyakit</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="penyakit" value="<?php echo $penyakit?>" name="penyakit"></td>
</tr>
<tr>
<td>Tindakan</td> <td>&nbsp&nbsp:</td><td></td> <td>
	<textarea class="form-control" required name="tindakan" id="tindakan"><?php echo $tindakan?></textarea></td>
</tr>
<?php 
$tanggal_sakit= date ('Y-m-d');
?>
<input type="hidden" id="telp_ayah" value="<?php echo $telp_ayah;?>" name="telp_ayah">
<input type="hidden" value="<?php echo $tanggal_sakit;?>" name="tanggal_sakit">
 <input type="hidden" name="id_riwayat_kes" value="<?php echo $id_riwayat_kes?>">    
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
