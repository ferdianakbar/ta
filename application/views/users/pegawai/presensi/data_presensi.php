
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

      <center><h3 class="box-title">Data Presensi</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        </tr>
          <tr>
            <th><center>NIP</center></th>
            <th><center>NAMA</center></th>
            <th><center>1</center></th>
            <th><center>2</center></th>
            <th><center>3</center></th>
          </tr>
        </thead>
        <tbody>
    <?php $nourut=0;
		foreach ($nilai as $data) {
		?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $hasil?></td>
  <td><?php echo $data->nama;?></td>
  <td><?php echo $data->status?></td>
  <td><?php echo $data->kuota_cuti;?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		