<script type="text/javascript">
		$(document).ready(function () {
                
                $('#tanggal_lahir').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
			
		$(document).ready(function () {
                
                $('#tanggal_lahir_ayah').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
		$(document).ready(function () {
                
                $('#tanggal_lahir_ibu').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
		$(document).ready(function () {
                
                $('#tanggal_lahir_wali').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
	</script>
	<script>
			function validasi(){
			var nama_lengkap=document.getElementById('nama_lengkap');
			var nama_panggilan=document.getElementById('nama_panggilan');
			var tempat_lahir=document.getElementById('tempat_lahir');
			var kewarganegaraan=document.getElementById('kewarganegaraan');
			var bahasa=document.getElementById('bahasa');
			var anakke=document.getElementById('anakke');
			var jml_saudara=document.getElementById('jml_saudara');
			var kandung=document.getElementById('kandung');
			var tiri=document.getElementById('tiri');
			var angkat=document.getElementById('angkat');
			var berat=document.getElementById('berat');
			var tinggi=document.getElementById('tinggi');
			var gol_darah=document.getElementById('gol_darah');
			var penyakit=document.getElementById('penyakit');
			var tinggal_bersama=document.getElementById('tinggal_bersama');
			var alamat_lengkap=document.getElementById('alamat_lengkap');
			var telp=document.getElementById('telp');
			var alamat_sd=document.getElementById('alamat_sd');
			var nama_sd=document.getElementById('nama_sd');
			var nama_ayah=document.getElementById('nama_ayah');
			var tempat_lahir_ayah=document.getElementById('tempat_lahir_ayah');
			var alamat_ayah=document.getElementById('alamat_ayah');
			var telp_ayah=document.getElementById('telp_ayah');
			var pend_terakhir_ayah=document.getElementById('pend_terakhir_ayah');
			var pekerjaan_ayah=document.getElementById('pekerjaan_ayah');
			var alamat_kantor_ayah=document.getElementById('alamat_kantor_ayah');
			var penghasilan_ayah=document.getElementById('penghasilan_ayah');
			var tanggungan_istri=document.getElementById('tanggungan_istri');
			var tanggungan_anak=document.getElementById('tanggungan_anak');
			var tanggungan_lain=document.getElementById('tanggungan_lain');
			var nama_ibu=document.getElementById('nama_ibu');
			var tempat_lahir_ibu=document.getElementById('tempat_lahir_ibu');
			var alamat_ibu=document.getElementById('alamat_ibu');
			var telp_ibu=document.getElementById('telp_ibu');
			var pend_terakhir_ibu=document.getElementById('pend_terakhir_ibu');
			var pekerjaan_ibu=document.getElementById('pekerjaan_ibu');
			var alamat_kantor_ibu=document.getElementById('alamat_kantor_ibu');
			var penghasilan_ibu=document.getElementById('penghasilan_ibu');
		var nama_wali=document.getElementById('nama_wali');
			var tempat_lahir_wali=document.getElementById('tempat_lahir_wali');
			var alamat_wali=document.getElementById('alamat_wali');
			var telp_wali=document.getElementById('telp_wali');
			var pend_terakhir_wali=document.getElementById('pend_terakhir_wali');
			var pekerjaan_wali=document.getElementById('pekerjaan_wali');
			var alamat_kantor_wali=document.getElementById('alamat_kantor_wali');
			var penghasilan_wali=document.getElementById('penghasilan_wali');
					var hubungan_keluarga=document.getElementById('hubungan_keluarga');
					var motivasi=document.getElementById('motivasi');
					var no_ijazah=document.getElementById('no_ijazah');
					var tahun_ijazah=document.getElementById('tahun_ijazah');
			
			if(isNaN(telp.value)){
		alert('No Telepon Harus Berupa Numerik');
		telp.focus();
		return false;
	}
		if(telp.value.length > 15 || telp.value.length <10){
		alert('No telepon harus dalam range 10-15 karakter');
		telp.focus;
		return false;
	}
	
	if(isNaN(telp_ayah.value)){
		alert('No Telepon Harus Berupa Numerik');
		telp_ayah.focus();
		return false;
	}
	if(telp_ayah.value.length > 15 || telp_ayah.value.length <10){
		alert('No telepon harus dalam range 10-15 karakter');
		telp_ayah.focus;
		return false;
	}
	if(isNaN(telp_ibu.value)){
		alert('No Telepon Harus Berupa Numerik');
		telp_ibu.focus();
		return false;
	}
	if(telp_ibu.value.length > 15 || telp_ibu.value.length <10){
		alert('No telepon harus dalam range 10-15 karakter');
		telp_ibu.focus;
		return false;
	}	
	if(isNaN(telp_wali.value)){
		alert('No Telepon Harus Berupa Numerik');
		telp_wali.focus();
		return false;
	}
		if(telp_wali.value.length > 15 || telp_wali.value.length <10){
		alert('No telepon harus dalam range 10-15 karakter');
		telp_wali.focus;
		return false;
	}
	if(isNaN(anakke.value)){
		alert('Anak Ke- Harus Angka');
		anakke.focus();
		return false;
	}
	if(isNaN(jml_saudara.value)){
		alert('Jumlah Saudara Harus Angka');
		jml_saudara.focus();
		return false;
	}
	if(isNaN(kandung.value)){
		alert('Jumlah Saudara Kandung Harus Angka');
		kandung.focus();
		return false;
	}if(isNaN(angkat.value)){
		alert('Jumlah Saudara Angkat Harus Angka');
		angkat.focus();
		return false;
	}if(isNaN(tiri.value)){
		alert('Jumlah Saudara Tiri Harus Angka');
		tiri.focus();
		return false;
	}
	if(isNaN(berat.value)){
		alert('Berat Badan Harus Angka');
		berat.focus();
		return false;
	}
	if(isNaN(tinggi.value)){
		alert('Tinggi Badan Harus Angka');
		tinggi.focus();
		return false;
	}
	if(isNaN(tanggungan_istri.value)){
		alert('Jumlah Tanggungan Istri Harus Angka');
		tanggungan_istri.focus();
		return false;
	}
	if(isNaN(tanggungan_anak.value)){
		alert('Jumlah Tanggungan Anak Harus Angka');
		tanggungan_anak.focus();
		return false;
	}
	if(isNaN(tanggungan_lain.value)){
		alert('Jumlah Tanggungan Lain Harus Angka');
		tanggungan_lain.focus();
		return false;
	}
	if(isNaN(tahun_ijazah.value)){
		alert('Tahun Ijazah Harus Angka');
		tahun_ijazah.focus();
		return false;
	}
	if(gol_darah.value==''){
		alert('Pilih Salah Satu Golongan Darah');
		gol_darah.focus;
		return false;
	}
	if(pend_terakhir_ayah.value==''){
		alert('Pilih Salah Satu Pendidikan Terakhir Ayah');
		pend_terakhir_ayah.focus;
		return false;
	}	
	if(pend_terakhir_ibu.value==''){
		alert('Pilih Salah Satu Pendidikan Terakhir Ibu');
		pend_terakhir_ibu.focus;
		return false;
	}
	if(penghasilan_ayah.value==''){
		alert('Pilih Salah Satu Penghasilan Ayah');
		penghasilan_ayah.focus;
		return false;
	}	
	if(penghasilan_ibu.value==''){
		alert('Pilih Salah Satu Penghasilan ibu');
		penghasilan_ibu.focus;
		return false;
	}
	if(no_ijazah.value.length != 10){
		alert('No Ijazah Harus 10 karakter \n Contoh: MA 0000001');
		no_ijazah.focus;
		return false;
	}
	return true;
 }
	</script>
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
			<div class="box-header">			
				</div>

 <?php
$nama_lengkap='';$nama_panggilan='';$tempat_lahir='';$tanggal_lahir='';$kewarganegaraan='';$bahasa='';$anakke='';$jml_saudara='';$kandung='';$tiri='';$angkat='';$berat='';$tinggi='';$gol_darah='';$penyakit='';$tinggal_bersama='';$alamat_lengkap='';$telp='';$nama_sd='';$alamat_sd='';$nisn='';$nama_ayah='';$tempat_lahir_ayah='';$alamat_ayah='';$telp_ayah='';$pend_terakhir_ayah='';$pekerjaan_ayah='';$alamat_kantor_ayah='';$penghasilan_ayah='';$tanggungan_istri='';$tanggungan_anak='';$tanggungan_lain='';$nama_ibu='';$tempat_lahir_ibu='';$alamat_ibu='';$telp_ibu='';$pend_terakhir_ibu='';$pekerjaan_ibu='';$alamat_kantor_ibu='';$penghasilan_ibu='';$nama_wali='';$tempat_lahir_wali='';$hubungan_keluarga='';$alamat_wali='';$telp_wali='';$pend_terakhir_wali='';$pekerjaan_wali='';$alamat_kantor_wali='';$penghasilan_wali='';$motivasi='';$password='';$email='';$photo='';$tanggal_lahir_ayah='';$tanggal_lahir_ibu='';$tanggal_lahir_wali='';$no_ijazah='';$tahun_ijazah='';

if(isset($calon)){
$nama_lengkap=$calon->nama_lengkap;$nama_panggilan=$calon->nama_panggilan;$tempat_lahir=$calon->tempat_lahir;$tanggal_lahir=$calon->tanggal_lahir;$kewarganegaraan=$calon->kewarganegaraan;$bahasa=$calon->bahasa;$anakke=$calon->anakke;$jml_saudara=$calon->jml_saudara;$kandung=$calon->kandung;$tiri=$calon->tiri;$angkat=$calon->angkat;$berat=$calon->berat;$tinggi=$calon->tinggi;$gol_darah=$calon->gol_darah;$penyakit=$calon->penyakit;$tinggal_bersama=$calon->tinggal_bersama;$alamat_lengkap=$calon->alamat_lengkap;$telp=$calon->telp;$nama_sd=$calon->nama_sd;$alamat_sd=$calon->alamat_sd;$nisn=$calon->nisn;$nama_ayah=$calon->nama_ayah;$tempat_lahir_ayah=$calon->tempat_lahir_ayah;$alamat_ayah=$calon->alamat_ayah;$telp_ayah=$calon->alamat_ayah;$pend_terakhir_ayah=$calon->pend_terakhir_ayah;$pekerjaan_ayah=$calon->pekerjaan_ayah;$alamat_kantor_ayah=$calon->alamat_kantor_ayah;$penghasilan_ayah=$calon->penghasilan_ayah;$tanggungan_istri=$calon->tanggungan_istri;$tanggungan_anak=$calon->tanggungan_anak;$tanggungan_lain=$calon->tanggungan_lain;$nama_ibu=$calon->nama_ibu;$tempat_lahir_ibu=$calon->tempat_lahir_ibu;$alamat_ibu=$calon->alamat_ibu;$telp_ibu=$calon->telp_ibu;$pend_terakhir_ibu=$calon->pend_terakhir_ibu;$pekerjaan_ibu=$calon->pekerjaan_ibu;$alamat_kantor_ibu=$calon->alamat_kantor_ibu;$penghasilan_ibu=$calon->penghasilan_ibu;$nama_wali=$calon->nama_wali;$tempat_lahir_wali=$calon->tempat_lahir_wali;$hubungan_keluarga=$calon->hubungan_keluarga;$alamat_wali=$calon->alamat_wali;$telp_wali=$calon->telp_wali;$pend_terakhir_wali=$calon->pend_terakhir_wali;$pekerjaan_wali=$calon->pekerjaan_wali;$alamat_kantor_wali=$calon->alamat_kantor_wali;$penghasilan_wali=$calon->penghasilan_wali;$motivasi=$calon->motivasi;$password=$calon->password;$email=$calon->email;$photo=$calon->photo;$tanggal_lahir_ayah=$calon->tanggal_lahir_ayah;$tanggal_lahir_ibu=$calon->tanggal_lahir_ibu;$tanggal_lahir_wali=$calon->tanggal_lahir_wali;$no_ijazah=$calon->no_ijazah;$tahun_ijazah=$calon->tahun_ijazah;
}
?>
 <form action="<?php echo site_url()?>/santri/simpan_santri" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
	<div class="row">
		<div class="col-md-12 clearfix">
			<ul class="nav nav-tabs" >
				<li class="active"><a data-toggle="tab" href="#home">IDENTITAS PRIBADI</a></li>
				<li><a data-toggle="tab" href="#menu1">SEKOLAH</a></li>
				<li><a data-toggle="tab" href="#menu2">IDENTITAS AYAH</a></li>
				<li><a data-toggle="tab" href="#menu3">IDENTITAS IBU</a></li>
				<li><a data-toggle="tab" href="#menu4">WALI CALON SANTRI</a></li>
				<li><a data-toggle="tab" href="#menu5">MOTIVASI SEKOLAH</a></li>
				<li><a data-toggle="tab" href="#menu6">FOTO</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane active">
				<table class="table table-bordered">
				<tr class="success"><th colspan="2">IDENTITAS PRIBADI</th></tr>
				<tr>
					<td>Nama Lengkap, Nama Panggilan</td>
					<td> 
						<div class='col-sm-8'><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap?>" placeholder="Nama Lengkap" class="form-control" id="nama_lengkap" required ></div><div class="col-sm-3"><input type="text" name="nama_panggilan" placeholder='Nama Panggilan' id="nama_panggilan" value="<?php echo $nama_panggilan;?>" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input type="text" value="<?php echo $tempat_lahir;?>" name="tempat_lahir" placeholder="Tempat Lahir" id="tempat_lahir "class="form-control" required ></div>         <div class="col-sm-4"><input value="<?php echo $tanggal_lahir;?>" type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
				<td>Alamat Lengkap
				</td>
				<td>
				<div class='col-sm-8'><textarea name="alamat_lengkap" placeholder="Alamat Lengkap" class="form-control" required id="alamat_lengkap"><?php echo $alamat_lengkap;?></textarea></div>
				</td>
				</tr>
				<tr>
				<td>No Telepon
				</td>
				<td>
				<div class="col-sm-3"><input type="text" id="telp" name="telp" placeholder='No Telepon' class='form-control' value="<?php echo $telp?>" required></div>
				</td>
				</tr>
				<tr>
					<td>Kewarganegaraan, Bahasa</td>
					<td> 
						<div class='col-sm-4'><input type="text" name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control" value="<?php echo $kewarganegaraan ?>" id="kewarganegaraan" required ></div>         <div class="col-sm-6"><input value="<?php echo $bahasa ?>" id="bahasa" type="text" name="bahasa" placeholder="bahasa sehari-hari" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Anak Ke-</td>
					<td> 
						<div class='col-sm-2'><input type="text" id="anakke" name="anakke" value="<?php echo $anakke; ?>" placeholder="Anak Ke..." class="form-control" required ></div>
						</div>
					</td>
				</tr>
				<tr>
					<td>Jumlah Saudara</td>
					<td> 
						<div class='col-sm-4'><input type="text" name="jml_saudara" placeholder="Jumlah Saudara" value="<?php echo $jml_saudara ?>" id="jml_saudara" class="form-control" required ></div> 
						<br>        
						<br>        
						<br>        
						<div class="col-sm-3"><input type="text" value="<?php echo $kandung ?>" name="kandung" id="kandung" placeholder='Saudara Kandung' class='form-control' required>
						</div>
						<div class="col-sm-3"><input type="text" name="tiri" id="tiri" value="<?php echo $tiri; ?>" placeholder='Saudara Tiri' class='form-control' required>
						</div>
						<div class="col-sm-3"><input type="text" id="angkat" name="angkat" value="<?php echo $angkat; ?>" placeholder='Saudara Angkat' class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
				<td>Berat Badan / Tinggi Badan
				</td>
				<td>
				<div class='col-sm-3'><input type="text" name="berat" id="berat" placeholder="Berat Badan" value="<?php echo $berat;?>" class="form-control" required ></div>         <div class="col-sm-3"><input type="text" name="tinggi" value="<?php echo $tinggi;?>" placeholder='Tinggi Badan' id="tinggi" class='form-control' required></div>
				</td>
				</tr>
				<tr>
				<td>Golongan Darah / <br> Penyakit Yang Diderita
				</td>
				<td>
				<div class='col-sm-2'><input type="text" name="gol_darah" id="gol_darah" placeholder="Gol Darah" class="form-control" value="<?php echo $gol_darah;?>" required ></div>         <div class="col-sm-8"><input type="text" id="penyakit" name="penyakit" placeholder='Penyakit Yang Diderita' value="<?php echo $penyakit;?>" class='form-control' required></div>
				</td>
				</tr>
				</table>
				</div>
	
	
    <div id="menu1" class="tab-pane">
     <table class="table table-bordered">
				<tr class="success"><th colspan="2">SEKOLAH</th></tr>
				<tr>
					<td>Nama SD</td>
					<td> 
						<div class='col-sm-8'><input value="<?php echo $nama_sd;?>" type="text" id="nama_sd"name="nama_sd" placeholder="Nama SD" class="form-control" required >
						</div>
					</td>
				</tr>
				<input type="hidden" id="nisn" name="nisn" value="<?php echo $nisn;?>" >
				<input type="hidden" id="nis" name="nis" value="<?php echo $nis;?>" >
				<tr>
					<td>Alamat SD</td>
					<td> 
						<div class='col-sm-8'><textarea name="alamat_sd" placeholder="Alamat SD" id="alamat_sd" class="form-control" required ><?php echo $alamat_sd;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Dan Tahun Ijazah/STTB</td>
					<td> 
						<div class='col-sm-4'><input type="text" id="no_ijazah" name="no_ijazah" placeholder="No. Ijazah/STTB" class="form-control" value="<?php echo $no_ijazah;?>" required ></div><div class='col-sm-4'><input type="text" value="<?php echo $tahun_ijazah;?>" id="tahun_ijazah" name="tahun_ijazah" placeholder="Tahun Ijazah/STTB" class="form-control" required >
						</div>
					</td>
				</tr>
				</table>
    </div>
	
	
    <div id="menu2" class="tab-pane">
       <table class="table table-bordered">
				<tr class="success"><th colspan="2">IDENTITAS AYAH</th></tr>
				<tr>
					<td>Nama Lengkap Ayah</td>
					<td> 
						<div class='col-sm-6'><input type="text" id="nama_ayah"name="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah" class="form-control" required  value="<?php echo $tempat_lahir_ayah ?>"></div>         <div class="col-sm-4"><input type="text" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" value="<?php echo $tanggal_lahir_ayah;?>" placeholder="Tanggal Lahir Ayah" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat Rumah</td>
					<td> 
						<div class='col-sm-8'><textarea name="alamat_ayah" placeholder="Alamat Rumah" id="alamat_ayah" class="form-control" required ><?php echo $alamat_ayah?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td> 
						<div class='col-sm-4'><input type="text" name="telp_ayah" placeholder="No. Telepon" class="form-control" value="<?php echo $telp_ayah;?>" id="telp_ayah" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>
        <div class='col-sm-4'><select value="<?php echo $pend_terakhir_ayah;?>" id="pend_terakhir_ayah" class='form-control' name='pend_terakhir_ayah' ><option value='' >---Silahkan Pilih---</option><option value='SD' >SD</option><option value='SMP' >SMP</option><option value='SMA' >SMA</option></option><option value='D3' >D3</option><option value='D4/S1' >D4/S1</option><option value='S2' >S2</option><option value='S3' >S3</option></select></div>    		</td>
				</tr>
				<tr>
					<td>Pekerjaan Ayah, Alamat Kantor</td>
					<td> 
						<div class='col-sm-4'><input type="text" value="<?php echo $pekerjaan_ayah;?>" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control" required >
						</div> <div class='col-sm-6'><textarea name="alamat_kantor_ayah" placeholder="Alamat Kantor" id="alamat_kantor_ayah" class="form-control" required ><?php echo $alamat_kantor_ayah;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Penghasilan Perbulan</td>
					<td>
						<div class="col-sm-4">
							<select value="<?php echo $penghasilan_ayah; ?>" name="penghasilan_ayah" id="penghasilan_ayah" class='form-control'>
							<option value='' >---Silahkan Pilih---</option>
								<option value="Dibawah Rp. 1.000.000">Dibawah Rp. 1.000.000</option>
								<option value="Rp. 1.000.000 - Rp. 2.500.000">Rp. 1.000.000 - Rp. 2.500.000</option>
								<option value="Rp. 2.500.000 - Rp. 5.000.000">Rp. 2.500.000 - Rp. 5.000.000</option>
								<option value="Diatas Rp. 5.000.000">Diatas Rp. 5.000.000</option>
							</select>
						</div>
					</td>
				</tr>
				<tr>
					<td>Tanggungan Keluarga</td>
					<td> 
						<div class='col-sm-3'><input value="<?php echo $tanggungan_istri;?>" type="text" id="tanggungan_istri" name="tanggungan_istri" placeholder="Tanggungan Istri" class="form-control" required >
						</div>
						<div class='col-sm-3'><input type="text" id="tanggungan_anak "name="tanggungan_anak" placeholder="Tanggungan Anak" value="<?php echo $tanggungan_anak; ?>"class="form-control" required > </div>
						<div class='col-sm-3'><input type="text" name="tanggungan_lain" id="tanggungan_lain" placeholder="Tanggungan Lainnya.." value="<?php echo $tanggungan_lain;?>" class="form-control" required > </div>
					</td>
				</tr>
			</table>
    </div>
	
	
    <div id="menu3" class="tab-pane">
      <table class="table table-bordered">
				<tr class="success"><th colspan="2">IDENTITAS IBU</th></tr>
				<tr>
					<td>Nama Lengkap Ibu</td>
					<td> 
						<div class='col-sm-6'><input value="<?php echo $nama_ibu; ?>" type="text" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input id="tempat_lahir_ibu" type="text" value="<?php echo $tempat_lahir_ibu; ?>" name="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu" class="form-control" required ></div>         <div class="col-sm-4"><input value="<?php echo $tanggal_lahir_ibu;?>" type="text" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat Rumah</td>
					<td> 
						<div class='col-sm-8'><textarea name="alamat_ibu" id="alamat_ibu" placeholder="Alamat Rumah" class="form-control" required ><?php echo $alamat_ibu;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td> 
						<div class='col-sm-4'><input value="<?php echo $telp_ibu;?>" type="text" id="telp_ibu" name="telp_ibu" placeholder="No. Telepon" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>
        <div class='col-sm-4'><select value="<?php echo $pend_terakhir_ibu; ?>" class='form-control' id="pend_terakhir_ibu" name='pend_terakhir_ibu' ><option value='' >---Silahkan Pilih---</option><option value='SD' >SD</option><option value='SMP' >SMP</option><option value='SMA' >SMA</option></option><option value='D3' >D3</option><option value='D4/S1' >D4/S1</option><option value='S2' >S2</option><option value='S3' >S3</option></select></div>    		</td>
				</tr>
				<tr>
					<td>Pekerjaan Ibu, Alamat Kantor</td>
					<td> 
						<div class='col-sm-4'><input value="<?php echo $pekerjaan_ibu;?>" type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" class="form-control" required >
						</div> <div class='col-sm-6'><textarea name="alamat_kantor_ibu" placeholder="Alamat Kantor" id="alamat_kantor_ibu"class="form-control" required ><?php echo $alamat_kantor_ibu;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Penghasilan Perbulan</td>
					<td>
						<div class="col-sm-4">
							<select value="<?php echo $penghasilan_ibu;?>" id="penghasilan_ibu" name="penghasilan_ibu" class='form-control'>
							<option value='' >---Silahkan Pilih---</option>
								<option value="Dibawah Rp. 1.000.000">Dibawah Rp. 1.000.000</option>
								<option value="Rp. 1.000.000 - Rp. 2.500.000">Rp. 1.000.000 - Rp. 2.500.000</option>
								<option value="Rp. 2.500.000 - Rp. 5.000.000">Rp. 2.500.000 - Rp. 5.000.000</option>
								<option value="Diatas Rp. 5.000.000">Diatas Rp. 5.000.000</option>
							</select>
						</div>
					</td>
				</tr>
				</table>
    </div>
	
	<div id="menu4" class="tab-pane">
       <table class="table table-bordered">
				<tr class="success"><th colspan="2">WALI CALON SANTRI</th></tr>
				<tr>
					<td>Nama Lengkap Wali</td>
					<td> 
						<div class='col-sm-6'><input value="<?php echo $nama_wali?>" type="text" id="nama_wali" name="nama_wali" placeholder="Nama Wali" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input type="text" value="<?php echo $tempat_lahir_wali;?>" id="tempat_lahir_wali" name="tempat_lahir_wali" placeholder="Tempat Lahir Wali" class="form-control" required ></div>         <div class="col-sm-4"><input type="text" id="tanggal_lahir_wali" name="tanggal_lahir_wali" placeholder="Tanggal Lahir Wali" value="<?php echo $tanggal_lahir_wali;?>" class='form-control' required>
						</div>
					</td>
				</tr>
				
				<tr>
				<td>Hubungan Keluarga</td>
					<td> 
						<div class='col-sm-6'><input type="text" id="hubungan_keluarga" name="hubungan_keluarga" value="<?php echo $hubungan_keluarga; ?>" placeholder="Hubungan Keluarga" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat Rumah</td>
					<td> 
						<div class='col-sm-8'><textarea id="alamat_wali" name="alamat_wali" placeholder="Alamat Rumah" class="form-control" required ><?php echo $alamat_wali; ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td> 
						<div class='col-sm-4'><input type="text" id="telp_wali" name="telp_wali" placeholder="No. Telepon" class="form-control" value="<?php echo $telp_wali;?>" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>
        <div class='col-sm-4'><select value="<?php echo $pend_terakhir_wali;?>" id="pend_terakhir_wali" class='form-control' name='pend_terakhir_wali' ><option value='' >---Silahkan Pilih---</option><option value='SD' >SD</option><option value='SMP' >SMP</option><option value='SMA' >SMA</option></option><option value='D3' >D3</option><option value='D4/S1' >D4/S1</option><option value='S2' >S2</option><option value='S3' >S3</option></select></div>    		</td>
				</tr>
				<tr>
					<td>Pekerjaan Wali, Alamat Kantor</td>
					<td> 
						<div class='col-sm-4'><input value="<?php echo $pekerjaan_wali;?>" type="text" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Pekerjaan Wali" class="form-control" required >
						</div> <div class='col-sm-6'><textarea name="alamat_kantor_wali" id="alamat_kantor_wali" placeholder="Alamat Kantor" class="form-control" required ><?php echo $alamat_kantor_wali; ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Penghasilan Perbulan</td>
					<td>
						<div class="col-sm-4">
							<select value="<?php echo $penghasilan_wali;?>" name="penghasilan_wali" class='form-control' id="penghasilan_wali">
							<option value='' >---Silahkan Pilih---</option>
								<option value="Dibawah Rp. 1.000.000">Dibawah Rp. 1.000.000</option>
								<option value="Rp. 1.000.000 - Rp. 2.500.000">Rp. 1.000.000 - Rp. 2.500.000</option>
								<option value="Rp. 2.500.000 - Rp. 5.000.000">Rp. 2.500.000 - Rp. 5.000.000</option>
								<option value="Diatas Rp. 5.000.000">Diatas Rp. 5.000.000</option>
							</select>
						</div>
					</td>
				</tr>
				</table>
    </div>
	
	<div id="menu5" class="tab-pane">
       <table class="table table-bordered">
				<tr class="success"><th colspan="2">MOTIVASI SEKOLAH</th></tr>
				<tr>
					<td>Motivasi Menyekolahkan Anak <br>Ke SMPIT Imam Bukhari Boarding School</td>
					<td> 
						<div class='col-sm-10'><textarea name="motivasi" id="motivasi" placeholder="" class="form-control" required ><?php echo $motivasi;?></textarea>
						</div>
					</td>
				</tr>
			
				</table>
    </div>
	<div id="menu6" class="tab-pane">
       <table class="table table-bordered">
				<tr class="success"><th colspan="2">FOTO</th></tr>
				<tr>
					
					<td> 
						<div class='col-sm-5'><?php echo $photo!=''?'<img src="'.base_url().'/upload/foto_profil/'.$photo.'" width="250" height="250">':'<img src="'.base_url().'/upload/foto_users/noface.png'.'"width="250" height="250">'?><br>
	<input type="file" class="form-control" name="photo" id="photo">
						</div>
					</td>
				</tr>
			
				</table>
    </div>
	
	
	<input type="submit" value="SIMPAN" class="btn btn-danger  btn-sm">
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	
