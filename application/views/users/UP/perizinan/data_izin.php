
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"> 
        <!-- Content Header (Page header) -->
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

      <center><h3 class="box-title">Data Izin</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>NIP</center></th>
            <th><center>NAMA</center></th>
            <th><center>INSTANSI</center></th>
            <th><center>TANGGAL PERGI</center></th>
            <th><center>JAM PERGI</center></th>
            <th><center>TANGGAL DATANG</center></th>
            <th><center>JAM DATANG</center></th>
            <th><center>KEPERLUAN</center></th>
            <th><center>STATUS</center></th>
          </tr>
        </thead>
        <tbody>
    <?php $nourut=0;
    
		foreach ($izin as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->nip;?></td>
  <td><?php echo $data->nama;?></td>
  <?php foreach ($instansi as $row) ?>
  <td><?php echo $row->nama_ins;?></td>
  <td><?php echo $data->tgl_pergi;?></td>
  <td><?php echo $data->jam_pergi;?></td>
  <td><?php echo $data->tgl_datang;?></td>
  <td><?php echo $data->jam_datang;?></td>
  <td><?php echo $data->keperluan;?></td>
  <td><?php echo $data->status;?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		