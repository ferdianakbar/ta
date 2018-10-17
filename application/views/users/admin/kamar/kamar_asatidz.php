<!DOCTYPE html>
<script src="<?=base_url('assets/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
          <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
        

          <!-- search form -->
   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
      
    
    
<script>
     $(function () {
        $("#nip").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
            minLength:0,
    	    delay:0,
            source:'<?php echo site_url('kamar/get_nip'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota
            select:function(event, ui){
    	        $('#nip').val(ui.item.nip);
                $('#nama_lengkap').val(ui.item.nama_lengkap);
               
                }
            });
    	});
    </script>
    
		  <script type="text/javascript">
		$(document).ready(function () {
                
                $('#tanggal_bagi_kamar').datepicker({
                    format: "yyyy-mm-dd"
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
		


<center>
<h3>---Form Pembagian Kamar---</h3><br>
<form action="<?php echo site_url()?>/kamar/simpan_detail_kamar" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>Nama Kamar</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><select class="form-control" required name="id_kamar" id="id_kamar">
									<option  value="">---Silahkan Pilih---</option>
									<?php foreach ($kamar as $k){ ?>
									<option  value="<?php echo $k->id_kamar?>">[<?php echo $k->id_kamar?>]<?php echo $k->nama_kamar;?></option>
									<?php } ?>
										</select></td>
</tr>

<tr>
<td>NIP</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nip" name="nip"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" readonly id="nama_lengkap"></td>
</tr>
<?php
$tanggal_bagi_kamar= date('Y-m-d');
?>
<tr><td>Tanggal</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="tanggal" readonly value="<?php echo $tanggal_bagi_kamar;?>" name="tanggal"></td>
</tr>
<tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
