
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

      <center><h3  class="box-title">---Data Santri---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
	<div class="box-header">
				
				<form method="POST" action="<?php echo site_url()?>/santri/cari">
				<table>
				<tr>
				<td><b>Pilih Tahun :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="tahun">
									<option value="0">--Pilih--</option>
									<?php
									$tahun=$this->db->query("select distinct concat(20,(substr(nis,3,2))) as tahun from santri")->result();
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
            <th><center>NIS</center></th>
            <th><center>FOTO</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>TEMPAT, TGL LAHIR</center></th>
            <th><center>ALAMAT</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
		 <tbody>
		<?php $nourut=0;
		foreach ($santri as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->nis;?></td>
	<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="50" height="50">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"width="50" height="50">'?></td>
	<td><?php echo $data->nama_lengkap;?></td>
	<td><?php echo $data->tempat_lahir;?>,<?php echo date("d-M-Y",strtotime($data->tanggal_lahir))?></td>
	<td><?php echo $data->alamat_lengkap;?></td>
	<td class="text-center">
                                    <div class="btn">
                                        <a  href="<?php echo site_url().'/'.$this->uri->segment(1).'/detail_santri/'.$data->nis;?>" data-toggle="tooltip" class="label label-success">DETAIL</a>
                                    </div></td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		