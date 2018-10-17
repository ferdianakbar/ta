<html>
<head>
<title>
</title>
</head>
<body>
<h3><center><a style="color:black"href="javascript:window.print()"> LAPORAN RIWAYAT KESEHATAN SANTRI</a></center></h3>
<table>
<tr>
<br>
<td><h4>Periode: <?php echo $bln ?>-<?php echo $thn ?></h4></td>
</tr>
</table>
<table BORDER="1">  
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>FOTO</center></th>
            <th><center>NIS</center></th>
            <th><center>NAMA LENGKAP</center></th>
            <th><center>TANGGAL SAKIT</center></th>
            <th><center>PENYAKIT</center></th>
            <th><center>TINDAKAN</center></th>
          </tr>
        </thead>
        <tbody>
		<?php $nourut=0;
		foreach ($cetak as $data) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $data->photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$data->photo.'" width="100" height="100">':'belum ada foto'?></td>
	<td><?php echo $data->nis;?></td>
	<td><?php echo $data->nama_lengkap;?></td>
	<td><?php echo date("d-M-Y",strtotime($data->tanggal_sakit))?></td>
		<td><?php echo $data->penyakit;?></td>
			<td><?php echo $data->tindakan;?></td>
	</tr> <?php } ?>
		</tbody>
      </table>
	  </body>
	  </html>