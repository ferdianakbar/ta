
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

      <center><h3  class="box-title">---Data Nilai Tes---</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
	<div class="box-header">
				
				<form method="POST" action="<?php echo site_url()?>/pimpinan/laporan_nilai_tes">
				<table>
				<tr>
				<td><b>Pilih Keterangan :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="ket">
									<option value="">--Pilih--</option>
									<?php
									$ket=$this->db->query("select distinct keterangan from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on (c.nisn=p.nisn)")->result();
									foreach($ket as $data3) { 
										if($_POST){
											$ket = $_POST['keterangan'];
											if($ket==$data3->keterangan){
												?><option value="<?php echo $data3->keterangan?>" ><?php echo $data3->keterangan ?></option> <?php
											}else{
												?><option value="<?php echo $data3->keterangan?>"><?php echo $data3->keterangan ?></option><?php
											}
										}else{
												?><option value="<?php echo $data3->keterangan?>"><?php echo $data3->keterangan ?></option> <?php
										}?>
									 
									<?php } ?></select></td></tr>
						<tr>
				<td><b>Pilih Tahun :&nbsp&nbsp<b>
				</td>
				<td colspan=3>
				<select name="thn">
									<option selected value="">--Pilih--</option>
									<?php
									$tahun=$this->db->query("select distinct concat(20,(substr(no_pendaftaran,4,2))) as tahun from nilai_tes n join calon_santri c on(c.nisn=n.nisn) join pendaftaran p on (c.nisn=p.nisn)")->result();
									foreach($tahun as $data1) { 
										if($_POST){
											$tahun = $_POST['tahun'];
											if($tahun==$data1->tahun){
												?><option value="<?php echo $data1->tahun?>" ><?php echo $data1->tahun ?></option> <?php
											}else{
												?><option value="<?php echo $data1->tahun?>"><?php echo $data1->tahun ?></option><?php
											}
										}else{
												?><option value="<?php echo $data1->tahun?>"><?php echo $data1->tahun ?></option> <?php
										}?>
									 
									<?php } ?>
								</select></td><td>&nbsp&nbsp</td>
									<td><input type="submit" name="search" value="Tampilkan"/></td></tr></table></form></div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
       <tr>
            <td rowspan="2"><center>NO PENDAFTARAN</center></td>
            <td rowspan="2"><center>NAMA</center></td>
            <td colspan="4"><center>NILAI TULIS</center></td>
            <td colspan="3"><center>NILAI PRAKTIK</center></td>
            <td colspan="8"><center>NILAI RATA-RATA</center></td>
            <td rowspan="2"><center>NILAI AKHIR</center></td>
            <td rowspan="2"><center>KETERANGAN</center></td>
            <td rowspan="2"><center>AKSI</center></td>
          </tr>
		  <tr>
		  <td>PAI</td>
		  <td>B.Indo</td>
		  <td>MTK</td>
		  <td>B.Ingg</td>
		  <td>Al-Qur'an</td>
		  <td>Sholat</td>
		  <td>Wawancara</td>
		  <td colspan="2">Tulis</td>
		  <td colspan="2">Al-Qur'an</td>
		  <td colspan="2">Sholat</td>
		  <td colspan="2">Wawancara</td>
		  </tr>
        </thead>
		
        <tbody>
		<?php 
		foreach ($nilai as $data) {
$no_pendaftaran=$data->no_pendaftaran;		 
$keterangan=$data->keterangan;		 
$nama_lengkap=$data->nama_lengkap;
$pai=$data->nilai_pai;
$mtk=$data->nilai_matematika;
$indo=$data->nilai_indonesia;
$inggris=$data->nilai_inggris;
$quran=$data->nilai_quran;
$sholat=$data->nilai_sholat;
$wawancara=$data->nilai_wawancara; 
		?><center>
		<tr align="center" >
		  <td><?php echo $no_pendaftaran?></td>
		  <td><?php echo $nama_lengkap?></td>
		  <td><?php echo $pai?></td>
		  <td><?php echo $indo?></td>
		  <td><?php echo $mtk?></td>
		  <td><?php echo $inggris?></td>
		  <td><?php echo $quran?></td>
		  <td><?php echo $sholat?></td>
		  <td><?php echo $wawancara?></td>
		  <td><?php echo($pai+$mtk+$indo+$inggris)/4 ;?></td>
		  <td><?php echo (($pai+$mtk+$indo+$inggris)/4)*30/100; ?></td>
		  <td><?php echo $quran?></td>
		  <td><?php echo $quran*30/100;?></td>
		  <td><?php echo $sholat?></td>
		  <td><?php echo $sholat*20/100;?></td>
		  <td><?php echo $wawancara?></td>
		  <td><?php echo $wawancara*20/100;?></td>
		  <td><?php echo $nilai_akhir=((($pai+$mtk+$indo+$inggris)/4)*30/100) + ($quran*30/100) + ($sholat*20/100) + ($wawancara*20/100);?></td>
		  <td><?php echo $keterangan;?>
		  </td>
		  <td class="text-center">
                                    <div class="btn">
                                        <a  href="<?php echo site_url().'/'.$this->uri->segment(1).'/edit_nilai_tes/'.$data->id_nilai;?>" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                        
                                    </div></td>
	</tr> </center>
	<?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		