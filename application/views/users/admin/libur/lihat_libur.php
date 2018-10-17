
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

      <center><h3  class="box-title">DAFTAR HARI LIBUR</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>TANGGAL</center></th>
            <th><center>KETERANGAN</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($libur as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
  <td><?php echo $nourut ?></td>
  <td><?php echo $data->tanggal;?></td>
  <td><?php echo $data->keterangan;?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		