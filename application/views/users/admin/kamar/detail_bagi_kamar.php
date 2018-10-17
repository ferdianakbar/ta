
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
			
			<div class="box-header"></div>
			<center>
			<table>
				<tr>
<td>ID DETAIL KAMAR</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input readonly value="<?php echo $detail->id_detail_kamar;?>"type="textfield" name="id_detail_kamar" class="form-control" id="id_detail_kamar"></td>
</tr>
<tr>
<td>NAMA KAMAR</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input value="<?php echo $detail->nama_kamar;?>"type="textfield" class="form-control" readonly id="nama_kamar"></td>
</tr>
<tr>
<td>NAMA ASATIDZ</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input readonly type="textfield" class="form-control" id="nama_asatidz" value="<?php echo $detail->nama_asatidz;?>"></td>
</tr>
<tr>
<td>KAPASITAS</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td>&nbsp&nbsp<?php echo "0";?>&nbsp&nbsp / &nbsp&nbsp<?php echo $detail->kapasitas;?></td>
</tr><tr>
<td>SEMESTER</td><td>&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><select name="semester">
<option value="ganjil">Ganjil</option>
<option value="genap">Genap</option>
</td>
</tr>
			</table>
			</center>			
				
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
</script>

      
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIS</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>TEMPAT, TGL LAHIR</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
foreach ($santri as $data) {
$nourut++;?>
				<tr>
					<td><?php echo $nourut ?></td>
					<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="70" height="70">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"width="70" height="70">'?></td>
					<td><?php echo $data->nis;?></td>
					<td><?php echo $data->nama_lengkap;?></td>
					<td><?php echo $data->tempat_lahir;?>,<?php echo date("d-M-Y",strtotime($data->tanggal_lahir))?></td>
					<td class="text-center">
						 <a  href="<?php echo site_url().'/kamar/simpan_detail_kamar_santri/'.$data->nis,$detail->id_detail_kamar,$detail->id_kamar;?>" data-toggle="tooltip"  class="label label-warning">TAMBAH</a>
                    </td>
					</tr>
						<?php } ?>
		</tbody>
      </table>

	  <br><br>
	  
	  <center>
<h3>---Detail Pembagian Kamar---</h3>
	  <table class="shortcode table table-bordered">
        <thead>
        <tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIS</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>TEMPAT, TGL LAHIR</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
        </table>
	  </center>
	   <a  href="<?php echo site_url().'/kamar/hapus_kamar_asatidz/'.$detail->id_detail_kamar;?>" data-toggle="tooltip" class="btn btn-danger  btn-sm">BATAL</a>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		