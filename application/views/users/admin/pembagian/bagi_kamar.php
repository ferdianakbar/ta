<!-- search form -->   
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          

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

      <center><h3  class="box-title">---Pembagian Kamar---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead >
          <tr align="center">
            <th><center>NO</center></th>
			<th><center>ID KAMAR</center></th>
            <th><center>NAMA KAMAR</center></th>
            <th><center>KAPASITAS</center></th>
			
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($kamar as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><a href="<?php echo site_url().'/'.$this->uri->segment(1).'/tambah_bagi_kamar/'.$data->id_kamar?>"> <?php echo '<img src="'.base_url().'/assets/dist/img/pin.jpg" width="100" height="100">'?></a><br><?php echo $data->id_kamar;?></td>
	<td><?php echo $data->nama_kamar?></td>
	<td><?php echo $data->kapasitas?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		