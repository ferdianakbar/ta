
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



      <center><h3  class="box-title">---Data Pembagian Kamar---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
		  <th><center>AKSI</center></th>
            <th><center>NO</center></th>
            <th><center>ID DETAIL KAMAR</center></th>
            <th><center>NAMA KAMAR</center></th>
			<th><center>NAMA ASATIDZ</center></th>
            <th><center>NAMA SANTRI</center></th>
            

          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($detail1 as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td rowspan="<?php echo $data->jumlah;?>"><?php echo $nourut ?></td>
	<td rowspan="<?php echo $data->jumlah;?>"><a href="<?php echo site_url().'/kamar/atur_ulang/'.$data->id_detail_kamar;?>" data-toggle="tooltip" class="label label-danger">ATUR ULANG</a></td>
	<td rowspan="<?php echo $data->jumlah;?>"><?php echo $data->id_detail_kamar;?></td>
	<td rowspan="<?php echo $data->jumlah;?>"><?php echo $data->nama_kamar;?></td>
	<td rowspan="<?php echo $data->jumlah;?>"><?php echo $data->nama_asatidz;?></td>
	<?php foreach ($detail as $data1) {?>
	<td style="font-size:12pt;background-color:#F9F9F9" align="center"><?php echo $data1->nama_santri;?></td>
	</tr>
	<?php }?></tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		