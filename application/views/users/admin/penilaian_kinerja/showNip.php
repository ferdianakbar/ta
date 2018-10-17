<!DOCTYPE html>

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
<h3>NIP Pegawai</h3><br>
<form action="<?php echo site_url()?>/penilaian_kinerja/showNip" method="POST" enctype="multipart/form-data" onsubmit="return validasi">
<table style="font-size:12px">
<tr>
<td>
 NIP yang akan diniai <div id="nip"></td>
 <td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" id="nip"  name="nip"></td>
</tr>
<table><td>&nbsp&nbsp&nbsp&nbsp</td><td>Tingkatan<div id="tingkatan"></td>
   <td>&nbsp&nbsp&nbsp: </td><td>&nbsp&nbsp&nbsp;</td>
			<td> 
            <select name='tingkatan' class="form-control">
			    <option value="" selected>-- Pilih Tingkatan --</option>
						<option value="Atasan" >Atasan</option>
						<option value="Bawahan" >Bawahan</option>
						<option value="Teman Sejawat" >Teman sejawat</option>
				</select>
				</div>   
	</td>
</table>  
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
	
	
