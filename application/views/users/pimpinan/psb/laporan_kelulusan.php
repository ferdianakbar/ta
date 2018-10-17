
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

      <center><h3  class="box-title">---Data Nilai Tes---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
	<div class="box-header">
				
				<form method="POST" action="<?php echo site_url()?>/pimpinan/cari_nilai">
				<table>
				<tr>
				<td><b>Pilih Tahun :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="tahun">
									<option value="">--Pilih--</option>
									<?php
									$tahun=$this->db->query("select distinct concat(20,(substr(no_pendaftaran,4,2))) as tahun from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on (c.nisn=p.nisn)")->result();
									foreach($tahun as $data1) { 
										if($_POST){
											$tahun = $_POST['tahun'];
											if($tahun==$data1->tahun){
												?><option value="<?php echo $data1->tahun?>" selected><?php echo $data1->tahun ?></option> <?php
											}else{
												?><option value="<?php echo $data1->tahun?>"><?php echo $data1->tahun ?></option><?php
											}
										}else{
												?><option value="<?php echo $data1->tahun?>"><?php echo $data1->tahun ?></option> <?php
										}?>
									 
									<?php } ?>
								</select></td><td>&nbsp&nbsp</td>
									<td><input type="submit" name="search" value="Tampilkan"/></td></tr></table></form></div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
       <tr>
            <th><center>NO</center></th>
			  <th><center>FOTO</center></th>
            <th><center>NISN</center></th>
            <th><center>NO PENDAFTARAN</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>ASAL SD</center></th>
            <td rowspan="2"><center>KETERANGAN</center></td>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($nilai as $data) {
		$nourut++;
$no_pendaftaran=$data->no_pendaftaran;		 
$keterangan=$data->keterangan;		 
$nama_lengkap=$data->nama_lengkap;
$nisn=$data->nisn;
$nama_sd=$data->nama_sd;
$photo=$data->photo;
		?><center>
		<tr align="center" >
		  <td><?php echo $nourut;?></td>
		  <td><?php echo $nisn?></td>
		  <td><?php echo $no_pendaftaran?></td>
		  <td><?php echo $nama_lengkap?></td>
		  <td><?php echo $nama_sd?></td>
		  <td><?php echo $keterangan;?></td>
	</tr> </center>
	<?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		