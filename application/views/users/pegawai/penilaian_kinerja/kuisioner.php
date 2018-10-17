<!DOCTYPE html>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
		  
	<div class="row">
		<div class="col-xs-12">
			<div class="box">

    <?php foreach ($pegawai as $data) ?>
    <h3><td>&nbsp&nbsp&nbsp;</td>IDENTITAS PEGAWAI YANG DINILAI</h3></center>
   <form action="<?php echo site_url()?>/penilaian_kinerja/simpan" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
   <table><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>NIP</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp;</td></td><td><input required type="textfield" class="form-control"  value= "<?php echo $data->nip; ?>" id="nip"  readonly name="nip"></td></table>
   <table><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>NAMA</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </td><td>&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control"  value= "<?php echo $data->nama; ?>" id="nama"  readonly name="nama"></td></table>
   <table><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>JABATAN</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </td><td>&nbsp&nbsp&nbsp;</td></td><td><input required type="textfield" class="form-control"  value= "<?php echo $data->jabatan; ?>" id="jabatan"  readonly name="jabatan"></td></table>
   <?php foreach ($pkp as $row) ?>
   <table><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>TINGKATAN</td><td>&nbsp: </td><td>&nbsp&nbsp&nbsp;</td></td><td><input required type="textfield" class="form-control"  value= "<?php echo $row->tingkatan; ?>" id="tingkatan"  readonly name="tingkatan"></td></table>
   <table><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>TINGKATAN</td><td>&nbsp: </td><td>&nbsp&nbsp&nbsp;</td></td><td><input required type="textfield" class="form-control"  value= "<?php echo $this->session->userdata('jabatan'); ?>" id="jabatan"  readonly name="jabatan"></td></table>
   <!-- <div class="col-md-12"> -->
    
  <br>
</div>
</center>

<?php $tingkatan = $row->tingkatan;
      $a = 'Teman Sejawat';
    if ($tingkatan !== $a):
?>
		<div class="panel-body">

    <h3><label>I. Prestasi Kerja</label></h3>
    <h4><label>A. KEPEMIMPINAN</label></h4>
    <!-- <div class="col-md-4">    -->
    <td>&nbsp&nbsp</td>
    <label>1. Penjabaran visi dan misi pemerintah daerah dalam bentuk program dan rencana kerja sertaketepatan menentuka prioritas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem1" value="10" required> 10</td>
    <td><input type="radio" name="kepem1" value="20" required> 20</td>
    <td><input type="radio" name="kepem1" value="30" required> 30</td>
    <td><input type="radio" name="kepem1" value="40" required> 40</td>
    <td><input type="radio" name="kepem1" value="50" required> 50</td>
    <td><input type="radio" name="kepem1" value="60" required> 60</td>
    <td><input type="radio" name="kepem1" value="70" required> 70</td>
    <td><input type="radio" name="kepem1" value="80" required> 80</td>
    <td><input type="radio" name="kepem1" value="90" required> 90</td>
    <td><input type="radio" name="kepem1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Mengorganisisr sumberdaya dan aset yang menjadi tanggung jawabnya.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem2" value="10" required> 10</td>
    <td><input type="radio" name="kepem2" value="20" required> 20</td>
    <td><input type="radio" name="kepem2" value="30" required> 30</td>
    <td><input type="radio" name="kepem2" value="40" required> 40</td>
    <td><input type="radio" name="kepem2" value="50" required> 50</td>
    <td><input type="radio" name="kepem2" value="60" required> 60</td>
    <td><input type="radio" name="kepem2" value="70" required> 70</td>
    <td><input type="radio" name="kepem2" value="80" required> 80</td>
    <td><input type="radio" name="kepem2" value="90" required> 90</td>
    <td><input type="radio" name="kepem2" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Menjalankan tugas manajerial secara transparan dan mampu membangun jejaring kerja.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem3" value="10" required> 10</td>
    <td><input type="radio" name="kepem3" value="20" required> 20</td>
    <td><input type="radio" name="kepem3" value="30" required> 30</td>
    <td><input type="radio" name="kepem3" value="40" required> 40</td>
    <td><input type="radio" name="kepem3" value="50" required> 50</td>
    <td><input type="radio" name="kepem3" value="60" required> 60</td>
    <td><input type="radio" name="kepem3" value="70" required> 70</td>
    <td><input type="radio" name="kepem3" value="80" required> 80</td>
    <td><input type="radio" name="kepem3" value="90" required> 90</td>
    <td><input type="radio" name="kepem3" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>4. Membeikan kesempatan kepada bawahan untuk berkreatifitas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem4" value="10" required> 10</td>
    <td><input type="radio" name="kepem4" value="20" required> 20</td>
    <td><input type="radio" name="kepem4" value="30" required> 30</td>
    <td><input type="radio" name="kepem4" value="40" required> 40</td>
    <td><input type="radio" name="kepem4" value="50" required> 50</td>
    <td><input type="radio" name="kepem4" value="60" required> 60</td>
    <td><input type="radio" name="kepem4" value="70" required> 70</td>
    <td><input type="radio" name="kepem4" value="80" required> 80</td>
    <td><input type="radio" name="kepem4" value="90" required> 90</td>
    <td><input type="radio" name="kepem4" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>5. Bersikap adil dan tepat memberikan motivasi dan bimbingan kepada bawahan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem5" value="10" required> 10</td>
    <td><input type="radio" name="kepem5" value="20" required> 20</td>
    <td><input type="radio" name="kepem5" value="30" required> 30</td>
    <td><input type="radio" name="kepem5" value="40" required> 40</td>
    <td><input type="radio" name="kepem5" value="50" required> 50</td>
    <td><input type="radio" name="kepem5" value="60" required> 60</td>
    <td><input type="radio" name="kepem5" value="70" required> 70</td>
    <td><input type="radio" name="kepem5" value="80" required> 80</td>
    <td><input type="radio" name="kepem5" value="90" required> 90</td>
    <td><input type="radio" name="kepem5" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>6. keteladanan dalam bersikap dan berperilaku.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem6" value="10" required> 10</td>
    <td><input type="radio" name="kepem6" value="20" required> 20</td>
    <td><input type="radio" name="kepem6" value="30" required> 30</td>
    <td><input type="radio" name="kepem6" value="40" required> 40</td>
    <td><input type="radio" name="kepem6" value="50" required> 50</td>
    <td><input type="radio" name="kepem6" value="60" required> 60</td>
    <td><input type="radio" name="kepem6" value="70" required> 70</td>
    <td><input type="radio" name="kepem6" value="80" required> 80</td>
    <td><input type="radio" name="kepem6" value="90" required> 90</td>
    <td><input type="radio" name="kepem6" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>7. Keberanian pengambilan keputusan yang tidak bertanggungan dengan ketentuan perundangan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kepem7" value="10" required> 10</td>
    <td><input type="radio" name="kepem7" value="20" required> 20</td>
    <td><input type="radio" name="kepem7" value="30" required> 30</td>
    <td><input type="radio" name="kepem7" value="40" required> 40</td>
    <td><input type="radio" name="kepem7" value="50" required> 50</td>
    <td><input type="radio" name="kepem7" value="60" required> 60</td>
    <td><input type="radio" name="kepem7" value="70" required> 70</td>
    <td><input type="radio" name="kepem7" value="80" required> 80</td>
    <td><input type="radio" name="kepem7" value="90" required> 90</td>
    <td><input type="radio" name="kepem7" value="100"required> 100</td>
    
    <h4><label>B. KETRAMPILAN</label></h4>
    <td>&nbsp&nbsp</td>
    <label>1. Pemahaman tugas pokok dan penjabarannya.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram1" value="10" required> 10</td>
    <td><input type="radio" name="ketram1" value="20" required> 20</td>
    <td><input type="radio" name="ketram1" value="30" required> 30</td>
    <td><input type="radio" name="ketram1" value="40" required> 40</td>
    <td><input type="radio" name="ketram1" value="50" required> 50</td>
    <td><input type="radio" name="ketram1" value="60" required> 60</td>
    <td><input type="radio" name="ketram1" value="70" required> 70</td>
    <td><input type="radio" name="ketram1" value="80" required> 80</td>
    <td><input type="radio" name="ketram1" value="90" required> 90</td>
    <td><input type="radio" name="ketram1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. kecepatan dan ketelitian dalam penyelesaian pekerjaan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram2" value="10" required> 10</td>
    <td><input type="radio" name="ketram2" value="20" required> 20</td>
    <td><input type="radio" name="ketram2" value="30" required> 30</td>
    <td><input type="radio" name="ketram2" value="40" required> 40</td>
    <td><input type="radio" name="ketram2" value="50" required> 50</td>
    <td><input type="radio" name="ketram2" value="60" required> 60</td>
    <td><input type="radio" name="ketram2" value="70" required> 70</td>
    <td><input type="radio" name="ketram2" value="80" required> 80</td>
    <td><input type="radio" name="ketram2" value="90" required> 90</td>
    <td><input type="radio" name="ketram2" value="100"required> 100</td>
     
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Penyelesaian permasalahan dalam melaksanakan tugas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram3" value="10" required> 10</td>
    <td><input type="radio" name="ketram3" value="20" required> 20</td>
    <td><input type="radio" name="ketram3" value="30" required> 30</td>
    <td><input type="radio" name="ketram3" value="40" required> 40</td>
    <td><input type="radio" name="ketram3" value="50" required> 50</td>
    <td><input type="radio" name="ketram3" value="60" required> 60</td>
    <td><input type="radio" name="ketram3" value="70" required> 70</td>
    <td><input type="radio" name="ketram3" value="80" required> 80</td>
    <td><input type="radio" name="ketram3" value="90" required> 90</td>
    <td><input type="radio" name="ketram3" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>4. Penyeleaian terhadap pihak lain sesuai bidang tugasnya.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram4" value="10" required> 10</td>
    <td><input type="radio" name="ketram4" value="20" required> 20</td>
    <td><input type="radio" name="ketram4" value="30" required> 30</td>
    <td><input type="radio" name="ketram4" value="40" required> 40</td>
    <td><input type="radio" name="ketram4" value="50" required> 50</td>
    <td><input type="radio" name="ketram4" value="60" required> 60</td>
    <td><input type="radio" name="ketram4" value="70" required> 70</td>
    <td><input type="radio" name="ketram4" value="80" required> 80</td>
    <td><input type="radio" name="ketram4" value="90" required> 90</td>
    <td><input type="radio" name="ketram4" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>5. keinginen untuk meningkatkan kemampuan/kemajuan untuk belajar.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram5" value="10" required> 10</td>
    <td><input type="radio" name="ketram5" value="20" required> 20</td>
    <td><input type="radio" name="ketram5" value="30" required> 30</td>
    <td><input type="radio" name="ketram5" value="40" required> 40</td>
    <td><input type="radio" name="ketram5" value="50" required> 50</td>
    <td><input type="radio" name="ketram5" value="60" required> 60</td>
    <td><input type="radio" name="ketram5" value="70" required> 70</td>
    <td><input type="radio" name="ketram5" value="80" required> 80</td>
    <td><input type="radio" name="ketram5" value="90" required> 90</td>
    <td><input type="radio" name="ketram5" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>6. kesesuaian hasil pekerjaan denganperintah atasan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram6" value="10" required> 10</td>
    <td><input type="radio" name="ketram6" value="20" required> 20</td>
    <td><input type="radio" name="ketram6" value="30" required> 30</td>
    <td><input type="radio" name="ketram6" value="40" required> 40</td>
    <td><input type="radio" name="ketram6" value="50" required> 50</td>
    <td><input type="radio" name="ketram6" value="60" required> 60</td>
    <td><input type="radio" name="ketram6" value="70" required> 70</td>
    <td><input type="radio" name="ketram6" value="80" required> 80</td>
    <td><input type="radio" name="ketram6" value="90" required> 90</td>
    <td><input type="radio" name="ketram6" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>7. penyusunan laporan secara tepat, cepat dan lengkap.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="ketram7" value="10" required> 10</td>
    <td><input type="radio" name="ketram7" value="20" required> 20</td>
    <td><input type="radio" name="ketram7" value="30" required> 30</td>
    <td><input type="radio" name="ketram7" value="40" required> 40</td>
    <td><input type="radio" name="ketram7" value="50" required> 50</td>
    <td><input type="radio" name="ketram7" value="60" required> 60</td>
    <td><input type="radio" name="ketram7" value="70" required> 70</td>
    <td><input type="radio" name="ketram7" value="80" required> 80</td>
    <td><input type="radio" name="ketram7" value="90" required> 90</td>
    <td><input type="radio" name="ketram7" value="100"required> 100</td>
    
    <h4><label>C. PRAKARSA</label></h4>
    <td>&nbsp&nbsp</td>
    <label>1. Inisiatif dalam melaksanakan tugas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="praka1" value="10" required> 10</td>
    <td><input type="radio" name="praka1" value="20" required> 20</td>
    <td><input type="radio" name="praka1" value="30" required> 30</td>
    <td><input type="radio" name="praka1" value="40" required> 40</td>
    <td><input type="radio" name="praka1" value="50" required> 50</td>
    <td><input type="radio" name="praka1" value="60" required> 60</td>
    <td><input type="radio" name="praka1" value="70" required> 70</td>
    <td><input type="radio" name="praka1" value="80" required> 80</td>
    <td><input type="radio" name="praka1" value="90" required> 90</td>
    <td><input type="radio" name="praka1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Penyampaian saran bermanfaat.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="praka2" value="10" required> 10</td>
    <td><input type="radio" name="praka2" value="20" required> 20</td>
    <td><input type="radio" name="praka2" value="30" required> 30</td>
    <td><input type="radio" name="praka2" value="40" required> 40</td>
    <td><input type="radio" name="praka2" value="50" required> 50</td>
    <td><input type="radio" name="praka2" value="60" required> 60</td>
    <td><input type="radio" name="praka2" value="70" required> 70</td>
    <td><input type="radio" name="praka2" value="80" required> 80</td>
    <td><input type="radio" name="praka2" value="90" required> 90</td>
    <td><input type="radio" name="praka2" value="100"required> 100</td>
    <?php
    $data = $data->jabatan;
    $a = 'Kepala SKPD';
    $b = 'Kepala Bagian';
    $c = 'Sekertariat';
    $d = 'Lurah';
    if($data==$a OR $data==$b OR $data==$c OR $data==$d):?>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Penyampaian saran bermanfaat</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="praka3" value="10" required> 10</td>
    <td><input type="radio" name="praka3" value="20" required> 20</td>
    <td><input type="radio" name="praka3" value="30" required> 30</td>
    <td><input type="radio" name="praka3" value="40" required> 40</td>
    <td><input type="radio" name="praka3" value="50" required> 50</td>
    <td><input type="radio" name="praka3" value="60" required> 60</td>
    <td><input type="radio" name="praka3" value="70" required> 70</td>
    <td><input type="radio" name="praka3" value="80" required> 80</td>
    <td><input type="radio" name="praka3" value="90" required> 90</td>
    <td><input type="radio" name="praka3" value="100"required> 100</td>
    
    <h4><label>D. CAPAIAN KERJA</label></h4>
    <td>&nbsp&nbsp</td>
    <label>1. Prosentase hasil kerja yang dicapai.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="capker1" value="10" required> 10</td>
    <td><input type="radio" name="capker1" value="20" required> 20</td>
    <td><input type="radio" name="capker1" value="30" required> 30</td>
    <td><input type="radio" name="capker1" value="40" required> 40</td>
    <td><input type="radio" name="capker1" value="50" required> 50</td>
    <td><input type="radio" name="capker1" value="60" required> 60</td>
    <td><input type="radio" name="capker1" value="70" required> 70</td>
    <td><input type="radio" name="capker1" value="80" required> 80</td>
    <td><input type="radio" name="capker1" value="90" required> 90</td>
    <td><input type="radio" name="capker1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Kesesuaian hasil kerja dengan rencana kerja serta visi dan misi.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="capker2" value="10" required> 10</td>
    <td><input type="radio" name="capker2" value="20" required> 20</td>
    <td><input type="radio" name="capker2" value="30" required> 30</td>
    <td><input type="radio" name="capker2" value="40" required> 40</td>
    <td><input type="radio" name="capker2" value="50" required> 50</td>
    <td><input type="radio" name="capker2" value="60" required> 60</td>
    <td><input type="radio" name="capker2" value="70" required> 70</td>
    <td><input type="radio" name="capker2" value="80" required> 80</td>
    <td><input type="radio" name="capker2" value="90" required> 90</td>
    <td><input type="radio" name="capker2" value="100"required> 100</td>
    <td>&nbsp&nbsp</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Prosentase hasil kerja yang dicapai.Efisiensi dan efektifitas pelaksanaan tugas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="capker3" value="10" required> 10</td>
    <td><input type="radio" name="capker3" value="20" required> 20</td>
    <td><input type="radio" name="capker3" value="30" required> 30</td>
    <td><input type="radio" name="capker3" value="40" required> 40</td>
    <td><input type="radio" name="capker3" value="50" required> 50</td>
    <td><input type="radio" name="capker3" value="60" required> 60</td>
    <td><input type="radio" name="capker3" value="70" required> 70</td>
    <td><input type="radio" name="capker3" value="80" required> 80</td>
    <td><input type="radio" name="capker3" value="90" required> 90</td>
    <td><input type="radio" name="capker3" value="100"required> 100</td>
    <?php else: ?>
    
    <?php endif ?>
    <br>
    <h3><label>II. Perilaku</label></h3>
    <h4><label>A. KERJASAMA</label></h4>
    <td>&nbsp&nbsp</td>
    <label>1. Kesediaan bekerja sama dengan orang lain.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja1" value="10" required> 10</td>
    <td><input type="radio" name="kerja1" value="20" required> 20</td>
    <td><input type="radio" name="kerja1" value="30" required> 30</td>
    <td><input type="radio" name="kerja1" value="40" required> 40</td>
    <td><input type="radio" name="kerja1" value="50" required> 50</td>
    <td><input type="radio" name="kerja1" value="60" required> 60</td>
    <td><input type="radio" name="kerja1" value="70" required> 70</td>
    <td><input type="radio" name="kerja1" value="80" required> 80</td>
    <td><input type="radio" name="kerja1" value="90" required> 90</td>
    <td><input type="radio" name="kerja1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Kesediaan membantu memecahkan masalah tugas teman sejawat.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja2" value="10" required> 10</td>
    <td><input type="radio" name="kerja2" value="20" required> 20</td>
    <td><input type="radio" name="kerja2" value="30" required> 30</td>
    <td><input type="radio" name="kerja2" value="40" required> 40</td>
    <td><input type="radio" name="kerja2" value="50" required> 50</td>
    <td><input type="radio" name="kerja2" value="60" required> 60</td>
    <td><input type="radio" name="kerja2" value="70" required> 70</td>
    <td><input type="radio" name="kerja2" value="80" required> 80</td>
    <td><input type="radio" name="kerja2" value="90" required> 90</td>
    <td><input type="radio" name="kerja2" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Tingkat Toleransi terhadap perbedaan pendapat.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja3" value="10" required> 10</td>
    <td><input type="radio" name="kerja3" value="20" required> 20</td>
    <td><input type="radio" name="kerja3" value="30" required> 30</td>
    <td><input type="radio" name="kerja3" value="40" required> 40</td>
    <td><input type="radio" name="kerja3" value="50" required> 50</td>
    <td><input type="radio" name="kerja3" value="60" required> 60</td>
    <td><input type="radio" name="kerja3" value="70" required> 70</td>
    <td><input type="radio" name="kerja3" value="80" required> 80</td>
    <td><input type="radio" name="kerja3" value="90" required> 90</td>
    <td><input type="radio" name="kerja3" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>4. Konsistensi terhadap hasil kesepakatan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja4" value="10" required> 10</td>
    <td><input type="radio" name="kerja4" value="20" required> 20</td>
    <td><input type="radio" name="kerja4" value="30" required> 30</td>
    <td><input type="radio" name="kerja4" value="40" required> 40</td>
    <td><input type="radio" name="kerja4" value="50" required> 50</td>
    <td><input type="radio" name="kerja4" value="60" required> 60</td>
    <td><input type="radio" name="kerja4" value="70" required> 70</td>
    <td><input type="radio" name="kerja4" value="80" required> 80</td>
    <td><input type="radio" name="kerja4" value="90" required> 90</td>
    <td><input type="radio" name="kerja4" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>5. Kesediaan menerima kritik dari orang lain</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja5" value="10" required> 10</td>
    <td><input type="radio" name="kerja5" value="20" required> 20</td>
    <td><input type="radio" name="kerja5" value="30" required> 30</td>
    <td><input type="radio" name="kerja5" value="40" required> 40</td>
    <td><input type="radio" name="kerja5" value="50" required> 50</td>
    <td><input type="radio" name="kerja5" value="60" required> 60</td>
    <td><input type="radio" name="kerja5" value="70" required> 70</td>
    <td><input type="radio" name="kerja5" value="80" required> 80</td>
    <td><input type="radio" name="kerja5" value="90" required> 90</td>
    <td><input type="radio" name="kerja5" value="100"required> 100</td>
    <br>
    <h4><label>B. KETAATAN</label></h4>
    <td>&nbsp&nbsp</td>
    <label>1. Ketaatan terhadap peraturan perundang-undangan dan tidak menyalahgunakan wewenang.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta1" value="10" required> 10</td>
    <td><input type="radio" name="keta1" value="20" required> 20</td>
    <td><input type="radio" name="keta1" value="30" required> 30</td>
    <td><input type="radio" name="keta1" value="40" required> 40</td>
    <td><input type="radio" name="keta1" value="50" required> 50</td>
    <td><input type="radio" name="keta1" value="60" required> 60</td>
    <td><input type="radio" name="keta1" value="70" required> 70</td>
    <td><input type="radio" name="keta1" value="80" required> 80</td>
    <td><input type="radio" name="keta1" value="90" required> 90</td>
    <td><input type="radio" name="keta1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Ketaatan terhadap tugas kedinasan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta2" value="10" required> 10</td>
    <td><input type="radio" name="keta2" value="20" required> 20</td>
    <td><input type="radio" name="keta2" value="30" required> 30</td>
    <td><input type="radio" name="keta2" value="40" required> 40</td>
    <td><input type="radio" name="keta2" value="50" required> 50</td>
    <td><input type="radio" name="keta2" value="60" required> 60</td>
    <td><input type="radio" name="keta2" value="70" required> 70</td>
    <td><input type="radio" name="keta2" value="80" required> 80</td>
    <td><input type="radio" name="keta2" value="90" required> 90</td>
    <td><input type="radio" name="keta2" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Penggunaan sarana dan prasarana kantor untuk kepentingan dinas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta3" value="10" required> 10</td>
    <td><input type="radio" name="keta3" value="20" required> 20</td>
    <td><input type="radio" name="keta3" value="30" required> 30</td>
    <td><input type="radio" name="keta3" value="40" required> 40</td>
    <td><input type="radio" name="keta3" value="50" required> 50</td>
    <td><input type="radio" name="keta3" value="60" required> 60</td>
    <td><input type="radio" name="keta3" value="70" required> 70</td>
    <td><input type="radio" name="keta3" value="80" required> 80</td>
    <td><input type="radio" name="keta3" value="90" required> 90</td>
    <td><input type="radio" name="keta3" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>4. Ketaatan dalam berpakaian dinas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta4" value="10" required> 10</td>
    <td><input type="radio" name="keta4" value="20" required> 20</td>
    <td><input type="radio" name="keta4" value="30" required> 30</td>
    <td><input type="radio" name="keta4" value="40" required> 40</td>
    <td><input type="radio" name="keta4" value="50" required> 50</td>
    <td><input type="radio" name="keta4" value="60" required> 60</td>
    <td><input type="radio" name="keta4" value="70" required> 70</td>
    <td><input type="radio" name="keta4" value="80" required> 80</td>
    <td><input type="radio" name="keta4" value="90" required> 90</td>
    <td><input type="radio" name="keta4" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>5. Kesopanan dan kerapian dalam berpakaian.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta5" value="10" required> 10</td>
    <td><input type="radio" name="keta5" value="20" required> 20</td>
    <td><input type="radio" name="keta5" value="30" required> 30</td>
    <td><input type="radio" name="keta5" value="40" required> 40</td>
    <td><input type="radio" name="keta5" value="50" required> 50</td>
    <td><input type="radio" name="keta5" value="60" required> 60</td>
    <td><input type="radio" name="keta5" value="70" required> 70</td>
    <td><input type="radio" name="keta5" value="80" required> 80</td>
    <td><input type="radio" name="keta5" value="90" required> 90</td>
    <td><input type="radio" name="keta5" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>6. Kesopanan dalam berperilaku dan bertutur kata.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta6" value="10" required> 10</td>
    <td><input type="radio" name="keta6" value="20" required> 20</td>
    <td><input type="radio" name="keta6" value="30" required> 30</td>
    <td><input type="radio" name="keta6" value="40" required> 40</td>
    <td><input type="radio" name="keta6" value="50" required> 50</td>
    <td><input type="radio" name="keta6" value="60" required> 60</td>
    <td><input type="radio" name="keta6" value="70" required> 70</td>
    <td><input type="radio" name="keta6" value="80" required> 80</td>
    <td><input type="radio" name="keta6" value="90" required> 90</td>
    <td><input type="radio" name="keta6" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>7. Tingkat kebenaran laporan pelaksanaan tugas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta7" value="10" required> 10</td>
    <td><input type="radio" name="keta7" value="20" required> 20</td>
    <td><input type="radio" name="keta7" value="30" required> 30</td>
    <td><input type="radio" name="keta7" value="40" required> 40</td>
    <td><input type="radio" name="keta7" value="50" required> 50</td>
    <td><input type="radio" name="keta7" value="60" required> 60</td>
    <td><input type="radio" name="keta7" value="70" required> 70</td>
    <td><input type="radio" name="keta7" value="80" required> 80</td>
    <td><input type="radio" name="keta7" value="90" required> 90</td>
    <td><input type="radio" name="keta7" value="100"required> 100</td>
    <?php 
    foreach ($pegawai as $data) 
    $data = $data->jabatan;
    $b = 'Lurah';
    $responden = $this->session->userdata('jabatan');
    if($data == $b && $responden == 'Camat'):?>
       <td>&nbsp&nbsp</td>
       <h4><label>  HUBUNGAN MASYARAKAT</label></h4>
       <div class="table-kuisioner" border="0"></div>
       <td>&nbsp&nbsp</td>
       <td><input type="radio" name="humas" value="10" required> 10</td>
       <td><input type="radio" name="humas" value="20" required> 20</td>
       <td><input type="radio" name="humas" value="30" required> 30</td>
       <td><input type="radio" name="humas" value="40" required> 40</td>
       <td><input type="radio" name="humas" value="50" required> 50</td>
       <td><input type="radio" name="humas" value="60" required> 60</td>
       <td><input type="radio" name="humas" value="70" required> 70</td>
       <td><input type="radio" name="humas" value="80" required> 80</td>
       <td><input type="radio" name="humas" value="90" required> 90</td>
       <td><input type="radio" name="humas" value="100"required> 100</td>
    <?php else: ?>
    
    <?php endif ?>
       <br>

    <?php else: ?>
    <div class="row">
    <div class="col-xs-12">
    <div class="box">
    <h3><label>II. Perilaku</label></h3>
    <h4><label>A. KERJASAMA</label></h4>
    <td>&nbsp&nbsp</td>
    <label>1. Kesediaan bekerja sama dengan orang lain.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja1" value="10" required> 10</td>
    <td><input type="radio" name="kerja1" value="20" required> 20</td>
    <td><input type="radio" name="kerja1" value="30" required> 30</td>
    <td><input type="radio" name="kerja1" value="40" required> 40</td>
    <td><input type="radio" name="kerja1" value="50" required> 50</td>
    <td><input type="radio" name="kerja1" value="60" required> 60</td>
    <td><input type="radio" name="kerja1" value="70" required> 70</td>
    <td><input type="radio" name="kerja1" value="80" required> 80</td>
    <td><input type="radio" name="kerja1" value="90" required> 90</td>
    <td><input type="radio" name="kerja1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Kesediaan membantu memecahkan masalah tugas teman sejawat.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja2" value="10" required> 10</td>
    <td><input type="radio" name="kerja2" value="20" required> 20</td>
    <td><input type="radio" name="kerja2" value="30" required> 30</td>
    <td><input type="radio" name="kerja2" value="40" required> 40</td>
    <td><input type="radio" name="kerja2" value="50" required> 50</td>
    <td><input type="radio" name="kerja2" value="60" required> 60</td>
    <td><input type="radio" name="kerja2" value="70" required> 70</td>
    <td><input type="radio" name="kerja2" value="80" required> 80</td>
    <td><input type="radio" name="kerja2" value="90" required> 90</td>
    <td><input type="radio" name="kerja2" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Tingkat Toleransi terhadap perbedaan pendapat.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja3" value="10" required> 10</td>
    <td><input type="radio" name="kerja3" value="20" required> 20</td>
    <td><input type="radio" name="kerja3" value="30" required> 30</td>
    <td><input type="radio" name="kerja3" value="40" required> 40</td>
    <td><input type="radio" name="kerja3" value="50" required> 50</td>
    <td><input type="radio" name="kerja3" value="60" required> 60</td>
    <td><input type="radio" name="kerja3" value="70" required> 70</td>
    <td><input type="radio" name="kerja3" value="80" required> 80</td>
    <td><input type="radio" name="kerja3" value="90" required> 90</td>
    <td><input type="radio" name="kerja3" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>4. Konsistensi terhadap hasil kesepakatan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja4" value="10" required> 10</td>
    <td><input type="radio" name="kerja4" value="20" required> 20</td>
    <td><input type="radio" name="kerja4" value="30" required> 30</td>
    <td><input type="radio" name="kerja4" value="40" required> 40</td>
    <td><input type="radio" name="kerja4" value="50" required> 50</td>
    <td><input type="radio" name="kerja4" value="60" required> 60</td>
    <td><input type="radio" name="kerja4" value="70" required> 70</td>
    <td><input type="radio" name="kerja4" value="80" required> 80</td>
    <td><input type="radio" name="kerja4" value="90" required> 90</td>
    <td><input type="radio" name="kerja4" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>5. Kesediaan menerima kritik dari orang lain</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="kerja5" value="10" required> 10</td>
    <td><input type="radio" name="kerja5" value="20" required> 20</td>
    <td><input type="radio" name="kerja5" value="30" required> 30</td>
    <td><input type="radio" name="kerja5" value="40" required> 40</td>
    <td><input type="radio" name="kerja5" value="50" required> 50</td>
    <td><input type="radio" name="kerja5" value="60" required> 60</td>
    <td><input type="radio" name="kerja5" value="70" required> 70</td>
    <td><input type="radio" name="kerja5" value="80" required> 80</td>
    <td><input type="radio" name="kerja5" value="90" required> 90</td>
    <td><input type="radio" name="kerja5" value="100"required> 100</td>
    <br>
    <h4><label>B. KETAATAN</label></h4>
    <br>
    <td>&nbsp&nbsp</td>
    <label>1. Ketaatan terhadap peraturan perundang-undangan dan tidak menyalahgunakan wewenang.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta1" value="10" required> 10</td>
    <td><input type="radio" name="keta1" value="20" required> 20</td>
    <td><input type="radio" name="keta1" value="30" required> 30</td>
    <td><input type="radio" name="keta1" value="40" required> 40</td>
    <td><input type="radio" name="keta1" value="50" required> 50</td>
    <td><input type="radio" name="keta1" value="60" required> 60</td>
    <td><input type="radio" name="keta1" value="70" required> 70</td>
    <td><input type="radio" name="keta1" value="80" required> 80</td>
    <td><input type="radio" name="keta1" value="90" required> 90</td>
    <td><input type="radio" name="keta1" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>2. Ketaatan terhadap tugas kedinasan.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta2" value="10" required> 10</td>
    <td><input type="radio" name="keta2" value="20" required> 20</td>
    <td><input type="radio" name="keta2" value="30" required> 30</td>
    <td><input type="radio" name="keta2" value="40" required> 40</td>
    <td><input type="radio" name="keta2" value="50" required> 50</td>
    <td><input type="radio" name="keta2" value="60" required> 60</td>
    <td><input type="radio" name="keta2" value="70" required> 70</td>
    <td><input type="radio" name="keta2" value="80" required> 80</td>
    <td><input type="radio" name="keta2" value="90" required> 90</td>
    <td><input type="radio" name="keta2" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>3. Penggunaan sarana dan prasarana kantor untuk kepentingan dinas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta3" value="10" required> 10</td>
    <td><input type="radio" name="keta3" value="20" required> 20</td>
    <td><input type="radio" name="keta3" value="30" required> 30</td>
    <td><input type="radio" name="keta3" value="40" required> 40</td>
    <td><input type="radio" name="keta3" value="50" required> 50</td>
    <td><input type="radio" name="keta3" value="60" required> 60</td>
    <td><input type="radio" name="keta3" value="70" required> 70</td>
    <td><input type="radio" name="keta3" value="80" required> 80</td>
    <td><input type="radio" name="keta3" value="90" required> 90</td>
    <td><input type="radio" name="keta3" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>4. Ketaatan dalam berpakaian dinas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta4" value="10" required> 10</td>
    <td><input type="radio" name="keta4" value="20" required> 20</td>
    <td><input type="radio" name="keta4" value="30" required> 30</td>
    <td><input type="radio" name="keta4" value="40" required> 40</td>
    <td><input type="radio" name="keta4" value="50" required> 50</td>
    <td><input type="radio" name="keta4" value="60" required> 60</td>
    <td><input type="radio" name="keta4" value="70" required> 70</td>
    <td><input type="radio" name="keta4" value="80" required> 80</td>
    <td><input type="radio" name="keta4" value="90" required> 90</td>
    <td><input type="radio" name="keta4" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>5. Kesopanan dan kerapian dalam berpakaian.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta5" value="10" required> 10</td>
    <td><input type="radio" name="keta5" value="20" required> 20</td>
    <td><input type="radio" name="keta5" value="30" required> 30</td>
    <td><input type="radio" name="keta5" value="40" required> 40</td>
    <td><input type="radio" name="keta5" value="50" required> 50</td>
    <td><input type="radio" name="keta5" value="60" required> 60</td>
    <td><input type="radio" name="keta5" value="70" required> 70</td>
    <td><input type="radio" name="keta5" value="80" required> 80</td>
    <td><input type="radio" name="keta5" value="90" required> 90</td>
    <td><input type="radio" name="keta5" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>6. Kesopanan dalam berperilaku dan bertutur kata.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta6" value="10" required> 10</td>
    <td><input type="radio" name="keta6" value="20" required> 20</td>
    <td><input type="radio" name="keta6" value="30" required> 30</td>
    <td><input type="radio" name="keta6" value="40" required> 40</td>
    <td><input type="radio" name="keta6" value="50" required> 50</td>
    <td><input type="radio" name="keta6" value="60" required> 60</td>
    <td><input type="radio" name="keta6" value="70" required> 70</td>
    <td><input type="radio" name="keta6" value="80" required> 80</td>
    <td><input type="radio" name="keta6" value="90" required> 90</td>
    <td><input type="radio" name="keta6" value="100"required> 100</td>
    <br>
    <td>&nbsp&nbsp</td>
    <label>7. Tingkat kebenaran laporan pelaksanaan tugas.</label> 
    <div class="table-kuisioner" border="0"></div>
    <td>&nbsp&nbsp</td>
    <td><input type="radio" name="keta7" value="10" required> 10</td>
    <td><input type="radio" name="keta7" value="20" required> 20</td>
    <td><input type="radio" name="keta7" value="30" required> 30</td>
    <td><input type="radio" name="keta7" value="40" required> 40</td>
    <td><input type="radio" name="keta7" value="50" required> 50</td>
    <td><input type="radio" name="keta7" value="60" required> 60</td>
    <td><input type="radio" name="keta7" value="70" required> 70</td>
    <td><input type="radio" name="keta7" value="80" required> 80</td>
    <td><input type="radio" name="keta7" value="90" required> 90</td>
    <td><input type="radio" name="keta7" value="100"required> 100</td>
    <br>
    <?php endif ?>
    <td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		