
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

      <center><h3 class="box-title">Data Nilai Kuisioner</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>NAMA</center></th> 
            <th><center>A. KEPEMIMPINAN</center></th> 
            <th><center>B. KETRAMPILAN</center></th> 
            <th><center>C. PRAKARSA</center></th> 
            <th><center>D. CAPAIAN KERJA</center></th> 
            <th><center>A. KERJASAMA</center></th> 
            <th><center>B. KETAATAN</center></th> 
            <th><center>B. HUBUNGAN MASYARAKAT</center></th> 
            <th><center>B. TOTAL</center></th> 
          </tr>
        </thead>
        <tbody>
    <?php $nourut=0;
		foreach ($nilai as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
  <td><?php echo $data->nama;?></td>
  <td><?php echo $data->kepemimpinan?></td>
  <td><?php echo $data->ketrampilan;?></td>
  <td><?php echo $data->prakarsa;?></td>
  <td><?php echo $data->capaian_kerja;?></td>
  <td><?php echo $data->kerjasama;?></td>
  <td><?php echo $data->ketaatan;?></td>
  <td><?php echo $data->hubungan_masyarakat;?></td>
  <td><?php echo $data->total_nilai;?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		