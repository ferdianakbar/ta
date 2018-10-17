<!DOCTYPE html>
 <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
        
        <script type="text/javascript">
		function GetSelectedTextValue(id_jenis){
		var selectedtext = id_jenis.options[id_jenis.selectedIndex].innerHTML;
		var selectedvalue= id_jenis.value;
		//var selectedvalue = dropDown.options[dropDown.selectedIndex].value;
		document.getElementById("txt").value = selectedtext;
		}
        </script>
    
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
$nis='';
$nama_lengkap='';
$photo='';
$tanggal_pelanggaran='';
$jam_pelanggaran='';
$hukuman='';

if(isset($pelanggaran)){
$nis=$pelanggaran->nis;
$nama_lengkap=$pelanggaran->nama_lengkap;
$hukuman=$pelanggaran->hukuman;
$photo=$pelanggaran->photo;
$jenis_pelanggaran=$pelanggaran->jenis_pelanggaran;
$nama_pelanggaran=$pelanggaran->nama_pelanggaran;
$tanggal_pelanggaran=$pelanggaran->tanggal_pelanggaran;
$jam_pelanggaran=$pelanggaran->jam_pelanggaran;
}
?>

<center>
<h3>---Form Pelanggaran Santri---</h3><br>
<form action="<?php echo site_url()?>/pelanggaran/simpan_pelanggaran" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>NIS</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nis" value="<?php echo $nis?>" name="nis"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" readonly name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap?>"></td>
</tr>
<tr>
<td>
 Jenis Pelanggaran<div id="jenis"></td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><select class="form-control"  id="jenis_pelanggaran">
    <option>- Pilih Jenis Pelanggaran -</option>";
    <option value="ringan">Ringan</option>
    <option value="berat">Sedang</option>
    <option value="berat">Berat</option>
</select></td></div>
</tr>
<tr id="nama">
     <script type="text/javascript"> 
        $("#jenis_pelanggaran").change(function(){
                var jenis_pelanggaran = {jenis_pelanggaran:$("#jenis_pelanggaran").val()};
                   $.ajax({
               type: "POST",
               url : "<?=site_url('pelanggaran/tampil_nama');?>",
               data: jenis_pelanggaran,
               success: function(msg){
               $('#nama').html(msg);
               }
            });
              });
       </script>
         
</tr>
<?php 
$tanggal_pelanggaran= date('Y-m-d');
$tanggal_pelanggaran1= date('d-m-Y');
?>
<input type="hidden" value="<?php echo $tanggal_pelanggaran;?>" name="tanggal_pelanggaran">
<tr><td>Tanggal Pelanggaran</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" readonly value="<?php echo $tanggal_pelanggaran1?>"></td>
</tr>
<tr><td>Jam Pelanggaran</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td> <input type="time" name="jam_pelanggaran" id="jam_pelanggaran" class="form-control"></td></tr>
<tr>
<td>Hukuman</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="hukuman" value="<?php echo $hukuman?>" name="hukuman"></td>
</tr>
<input  type="hidden"  id="txt" name="nama_pelanggaran">
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
	
	
