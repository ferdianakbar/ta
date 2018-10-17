
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

      <center><h3  class="box-title">DAFTAR LIBUR</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>HARI</center></th>
            <th><center>JAM KERJA</center></th>
            <th><center>TOLERANSI</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($users as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $data->id_user;?></td>
	<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_users/'.$data->photo.'" width="100" height="100">':'belum ada foto'?></td>
	<td><?php echo $data->tempat_lahir;?>,<?php echo date("d-M-Y",strtotime($data->tanggal_lahir))?></td>
	<td class="text-center">
                                    <div class="btn">
                                        <a  href="<?php echo site_url().'/'.$this->uri->segment(1).'/edit_users/'.$data->id_user;?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        <a onclick="return confirm('yakin akan dihapus?')" href="<?php echo site_url().'/'.$this->uri->segment(1).'/hapus_users/'.$data->id_user;?>" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
		