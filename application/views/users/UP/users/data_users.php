
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Selamat Datang,
            <small><b><?php echo $this->session->userdata('nama');?></b></small>
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

      <center><h3  class="box-title">DATA USER</h3></center>
      <form action="<?php echo site_url()?>/admin/lihat_users" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>NIP</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>UNIT KERJA</center></th>
            <th><center>ID USER</center></th>
            <th><center>AKSES</center></th>
            <th><center>PHOTO</center></th>            
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($users as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->nip;?></td>
  <td><?php echo $data->nama;?></td>
  <td><?php echo $data->nama_ins;?></td>
	<td><?php echo $data->id_user;?></td>
	<td><?php echo $data->akses;?></td>
  <td><?php echo $data->photo!=''?'<img src="'.base_url().'assets/upload/foto_user/'.$data->photo.'" width="250" height="300">':'belum ada foto'?></td>
  </tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
  <div>
</div>
</div>
</div>
	</section>
		