<html>
<head>
<title>
</title>
</head>
<body>
<h3><center><a style="color:black"href="javascript:window.print()"> LAPORAN NILAI TES CALON SANTRI</a></center></h3>
<table>
<tr>
<br>
<td><h4>TAHUN: <?php echo $thn ?>- <?php echo $ket ?></h4></td>
</tr>
</table>
<table BORDER="1">  
      <thead>
       <tr>
            <td rowspan="2"><center>NO PENDAFTARAN</center></td>
            <td rowspan="2"><center>NAMA</center></td>
            <td colspan="4"><center>NILAI TULIS</center></td>
            <td colspan="3"><center>NILAI PRAKTIK</center></td>
            <td colspan="8"><center>NILAI RATA-RATA</center></td>
            <td rowspan="2"><center>NILAI AKHIR</center></td>
            <td rowspan="2"><center>KETERANGAN</center></td>
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
		foreach ($cetak as $data) {
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
	</tr> </center>
	<?php } ?>
		</tbody>
      </table>
	  </body>
	  </html>