<!-- search form -->   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          
<link rel="stylesheet" href="<?=base_url('assets/js/dg-picture-zoom.css');?>" type="text/css" /> <script type="text/javascript" src="<?=base_url('assets/js/mootools-1.2.4-core-yc.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/mootools-more.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/dg-picture-zoom.js');?>"></script>



<script type="text/javascript" src="<?=base_url('assets/js/dg-picture-zoom-autoload.js');?>"></script>
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

      <center><h3  class="box-title">---Approve Calon Santri---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
	<div class="box-header">
				
				<form method="POST" action="<?php echo site_url()?>/admin/daftar_akun_cari">
				<table>
				<tr>
				<td><b>Pilih Tahun :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="thn">
									<option value="">--Pilih--</option>
									<?php
									$thn=$this->db->query("select distinct date_format(tanggal_daftar, '%Y') as tahun from calon_santri c join pendaftaran p on (c.nisn=p.nisn) where status=0")->result();
									foreach($thn as $data) { 
										if($_POST){
											$thn = $_POST['thn'];
											if($thn==$data->tahun){
												?><option value="<?php echo $data->tahun?>" selected><?php echo $data->tahun ?></option> <?php
											}else{
												?><option value="<?php echo $data->tahun?>"><?php echo $data->tahun ?></option><?php
											}
										}else{
												?><option value="<?php echo $data->tahun?>"><?php echo $data->tahun ?></option> <?php
										}?>
									 
									<?php } ?>
								</select>
				</td><td>&nbsp&nbsp</td>
									<td><input type="submit" name="search" value="Tampilkan"/></td></tr></table></form></div>
      <table id="example1" class="table table-bordered table-striped">
        <thead >
          <tr align="center">
            <th><center>NO</center></th>
			<th><center>FOTO</center></th>
            <th><center>NISN</center></th>
            <th><center>NAMA</center></th>
            <th><center>NO TELEPON</center></th>
            <th><center>EMAIL</center></th>
            <th><center>BUKTI PEMBAYARAN</center></th>
			<th><center>TANGGAL DAFTAR</center></th>
			<th><center>AKSI</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($calon as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="50" height="50">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'" width="50" height="50">'?></td>
	<td><?php echo $data->nisn?></td>
	<td><?php echo $data->nama_lengkap?></td>
	<td><?php echo $data->telp?></td>
	<td><?php echo $data->email?></td>
	<td><?php echo $data->bayar!=''?'<img src="'.base_url().'/upload/bayar/'.$data->bayar.'?url='.base_url().'/upload/bayar/'.$data->bayar.'" class="dg-picture-zoom" width="50" height="50">':'belum ada bukti bayar'?></td>
	<td><?php echo date("d-M-Y",strtotime($data->tanggal_daftar))?></td>
	<td class="text-center">
                                    
                                        <a href="<?php echo site_url().'/admin/kirim_email/'.$data->nisn;?>" data-toggle="tooltip" class="label label-success">APPROVE</a>
                                    </td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		