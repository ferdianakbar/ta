
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

      <center><h3 class="box-title">Data Cuti</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>NIP</center></th>
            <th><center>NAMA</center></th>
            <th><center>STATUS</center></th>
            <th><center>KUOTA CUTI</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
        <tbody>
    <?php $nourut=0;
    
		foreach ($cuti as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->nip;?></td>
  <td><?php echo $data->nama;?></td>
  <td><?php echo $data->status?></td>
  <td><?php echo $data->kuota_cuti;?></td>
  <td class="text-center">
<?php 
  $status = $data->status;
  $disetujui = 'pending';
  if($data->status == $disetujui):?>
      <div class="btn">
          <a href="<?php echo site_url().'/cuti/simpan_cuti/'.$data->nip;?>" data-toggle="tooltip" class="label label-success">APPROVE</a>
          <br> </div>
      <div class="btn">
          <a href="<?php echo site_url().'/cuti/tolak_cuti/'.$data->nip;?>" data-toggle="tooltip" class="btn btn-xs btn-danger">TOLAK</a>
      </div></td>
  <?php else: ?>
    </div></td>
    <?php endif ?>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		