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
<h3>Capaian Kinerja</h3><br>
<form action="<?php echo site_url()?>/UP/daftar_kegiatan" method="GET" enctype="multipart/form-data" onsubmit="return validasi">
<table style="font-size:15px">
<tr>
<td>Pilih Dinas/ Unit Kerja<div id="instansi"></td>
    <td>&nbsp&nbsp:</td>
        <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td>
            <td>
            <select name="ins" class="form-control">
                <?php foreach($instansi as $row): ?>
                    <option value="<?= $row->id_ins; ?>"><?= $row->nama_ins; ?></option>
                <?php endforeach; ?>
            </select>
            </td>
    </div>    
</tr>
<div id="tahun"><td>Tahun Anggaran</td>
   <td>&nbsp&nbsp&nbsp: </td><td>&nbsp&nbsp&nbsp;</td>
			<td> 
            <select name= "tahun" class="form-control">
						<option value="2018" >2018</option>
						<option value="2017" >2017</option>
						<option value="2016" >2016</option>
                        <option value="2015" >2018</option>
						<option value="2014" >2017</option>
						<option value="2013" >2016</option>
				</select>
				</div>   
	</td>
</table>  
<tr>
    <td> </td> <td> </td> <td> </td><td><input type="submit" value="TAMPILKAN" class="btn btn-large  btn-sm">
<br>
<br>

    <td>  </td>
       

</table>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
