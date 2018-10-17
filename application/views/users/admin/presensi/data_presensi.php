
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
          <tr>
            <th><center>NO</center></th>
            <th><center>TANGGAL</center></th>
            <th><center>NIP</center></th>
            <th><center>NAMA</center></th>
            <th><center>JUMLAH KEHADIRAN</center></th>
            <th><center>JUMLAH TERLAMBAT</center></th>
            <th><center>JUMLAH MENDAHULUI</center></th>
            <th><center>JUMLAH PRESENTASE %</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
        <tbody>
    <?php $nourut= 1;
		foreach ($presensi as $data) {
		?>
  <tr style="font-size:12pt" align="center">
    <td><?php echo $nourut++; ?></td>
    <td><?php echo $data->nip; ?></td>
    <td><?php echo $data->tanggal; ?></td>    
    <td><?php echo $data->nama; ?></td>
    <td><?php echo jumHadir($data->nip); ?></td>
    <td><?php echo jumPresensi('terlambat', $data->nip); ?></td>
    <td><?php echo jumPresensi('mendahului', $data->nip); ?></td>
    <td><?php echo klasifikasi($data->persentase); ?>%</td>
    <td><?php  
    
    $awal  = date_create($data->jamPulang);
    $akhir = date_create($data->jamPresensiPulang);
    $diff  = date_diff( $awal, $akhir );

    echo $diff->i . ' menit, ';?></td>
	</tr> 
  <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		