
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
						<div class='col-sm-8'><input readonly type="text" name="nama_lengkap" value="<?php echo $nama_lengkap?>" placeholder="Nama Lengkap" class="form-control" id="nama_lengkap" required ></div><div class="col-sm-3"><input readonly type="text" name="nama_panggilan" placeholder='Nama Panggilan' id="nama_panggilan" value="<?php echo $nama_panggilan;?>" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input type="text" readonly value="<?php echo $tempat_lahir;?>" name="tempat_lahir" placeholder="Tempat Lahir" id="tempat_lahir "class="form-control" required ></div>         <div class="col-sm-4"><input value="<?php echo $tanggal_lahir;?>" type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" readonly class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
				<td>Alamat Lengkap
				</td>
				<td>
				<div class='col-sm-8'><textarea name="alamat_lengkap" placeholder="Alamat Lengkap" class="form-control" required id="alamat_lengkap" readonly><?php echo $alamat_lengkap;?></textarea></div>
				</td>
				</tr>
				<tr>
				<td>No Telepon
				</td>
				<td>
				<div class="col-sm-3"><input readonly type="text" id="telp" name="telp" placeholder='No Telepon' class='form-control' value="<?php echo $telp?>" required></div>
				</td>
				</tr>
				<tr>
					<td>Kewarganegaraan, Bahasa</td>
					<td> 
						<div class='col-sm-4'><input type="text" readonly name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control" value="<?php echo $kewarganegaraan ?>" id="kewarganegaraan" required ></div>         <div class="col-sm-6"><input value="<?php echo $bahasa ?>" readonly id="bahasa" type="text" name="bahasa" placeholder="bahasa sehari-hari" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Anak Ke-</td>
					<td> 
						<div class='col-sm-2'><input type="text" id="anakke" readonly name="anakke" value="<?php echo $anakke; ?>" placeholder="Anak Ke..." class="form-control" required ></div>
						</div>
					</td>
				</tr>
				<tr>
					<td>Jumlah Saudara</td>
					<td> 
						<div class='col-sm-4'><input type="text" readonly name="jml_saudara" placeholder="Jumlah Saudara" value="<?php echo $jml_saudara ?>" id="jml_saudara" class="form-control" required ></div> 
						<br>        
						<br>        
						<br>        
						<div class="col-sm-3"><input type="text" readonly value="<?php echo $kandung ?>" name="kandung" id="kandung" placeholder='Saudara Kandung' class='form-control' required>
						</div>
						<div class="col-sm-3"><input type="text" readonly name="tiri" id="tiri" value="<?php echo $tiri; ?>" placeholder='Saudara Tiri' class='form-control' required>
						</div>
						<div class="col-sm-3"><input type="text" id="angkat" readonly name="angkat" value="<?php echo $angkat; ?>" placeholder='Saudara Angkat' class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
				<td>Berat Badan / Tinggi Badan
				</td>
				<td>
				<div class='col-sm-3'><input type="text" name="berat" id="berat" readonly placeholder="Berat Badan" value="<?php echo $berat;?>" class="form-control" required ></div>         <div class="col-sm-3"><input type="text" readonly name="tinggi" value="<?php echo $tinggi;?>" placeholder='Tinggi Badan' id="tinggi" class='form-control' required></div>
				</td>
				</tr>
				<tr>
				<td>Golongan Darah / <br> Penyakit Yang Diderita
				</td>
				<td>
				<div class='col-sm-2'><input type="text" name="gol_darah" id="gol_darah" placeholder="Gol Darah" readonly class="form-control" value="<?php echo $gol_darah;?>" required ></div>         <div class="col-sm-8"><input type="text" readonly id="penyakit" name="penyakit" placeholder='Penyakit Yang Diderita' value="<?php echo $penyakit;?>" class='form-control' required></div>
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
						<div class='col-sm-8'><input value="<?php echo $nama_sd;?>" type="text" readonly id="nama_sd"name="nama_sd" placeholder="Nama SD" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat SD</td>
					<td> 
						<div class='col-sm-8'><textarea name="alamat_sd" placeholder="Alamat SD" readonly id="alamat_sd" class="form-control" required ><?php echo $alamat_sd;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Dan Tahun Ijazah/STTB</td>
					<td> 
						<div class='col-sm-4'><input type="text" id="no_ijazah" readonly name="no_ijazah" placeholder="No. Ijazah/STTB" class="form-control" value="<?php echo $no_ijazah;?>" required ></div><div class='col-sm-4'><input type="text" value="<?php echo $tahun_ijazah;?>" id="tahun_ijazah" readonly name="tahun_ijazah" placeholder="Tahun Ijazah/STTB" class="form-control" required >
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
						<div class='col-sm-6'><input type="text" id="nama_ayah"name="nama_ayah" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" class="form-control" required readonly>
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input type="text" readonly id="tempat_lahir_ayah" name="tempat_lahir_ayah" placeholder="Tempat Lahir Ayah" class="form-control" required  value="<?php echo $tempat_lahir_ayah ?>"></div>         <div class="col-sm-4"><input type="text" id="tanggal_lahir_ayah" readonly name="tanggal_lahir_ayah" value="<?php echo $tanggal_lahir_ayah;?>" placeholder="Tanggal Lahir Ayah" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat Rumah</td>
					<td> 
						<div class='col-sm-8'><textarea name="alamat_ayah" readonly placeholder="Alamat Rumah" id="alamat_ayah" class="form-control" required ><?php echo $alamat_ayah?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td> 
						<div class='col-sm-4'><input type="text" name="telp_ayah" readonly placeholder="No. Telepon" class="form-control" value="<?php echo $telp_ayah;?>" id="telp_ayah" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>
        <div class='col-sm-4'><input type="text" value="<?php echo $pend_terakhir_ayah;?>" readonly id="pend_terakhir_ayah" class='form-control' name='pend_terakhir_ayah'></div>    		</td>
				</tr>
				<tr>
					<td>Pekerjaan Ayah, Alamat Kantor</td>
					<td> 
						<div class='col-sm-4'><input type="text" value="<?php echo $pekerjaan_ayah;?>" id="pekerjaan_ayah" name="pekerjaan_ayah" readonly placeholder="Pekerjaan Ayah" class="form-control" required >
						</div> <div class='col-sm-6'><textarea name="alamat_kantor_ayah" placeholder="Alamat Kantor" id="alamat_kantor_ayah" class="form-control" readonly required ><?php echo $alamat_kantor_ayah;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Penghasilan Perbulan</td>
					<td>
						<div class="col-sm-4">
							<input type="text" readonly value="<?php echo $penghasilan_ayah; ?>" name="penghasilan_ayah" id="penghasilan_ayah" class='form-control'>
							
						</div>
					</td>
				</tr>
				<tr>
					<td>Tanggungan Keluarga</td>
					<td> 
						<div class='col-sm-3'><input value="<?php echo $tanggungan_istri;?>" type="text" id="tanggungan_istri" name="tanggungan_istri" placeholder="Tanggungan Istri" readonly class="form-control" required >
						</div>
						<div class='col-sm-3'><input type="text" id="tanggungan_anak readonly "name="tanggungan_anak" placeholder="Tanggungan Anak" value="<?php echo $tanggungan_anak; ?>"class="form-control" required > </div>
						<div class='col-sm-3'><input type="text" name="tanggungan_lain" id="tanggungan_lain" readonly placeholder="Tanggungan Lainnya.." value="<?php echo $tanggungan_lain;?>" class="form-control" required > </div>
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
						<div class='col-sm-6'><input value="<?php echo $nama_ibu; ?>" readonly type="text" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input id="tempat_lahir_ibu" type="text" readonly value="<?php echo $tempat_lahir_ibu; ?>" name="tempat_lahir_ibu" placeholder="Tempat Lahir Ibu" class="form-control" required ></div>         <div class="col-sm-4"><input value="<?php echo $tanggal_lahir_ibu;?>" type="text" readonly id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu" class='form-control' required>
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat Rumah</td>
					<td> 
						<div class='col-sm-8'><textarea name="alamat_ibu" id="alamat_ibu" placeholder="Alamat Rumah" class="form-control" required readonly ><?php echo $alamat_ibu;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td> 
						<div class='col-sm-4'><input value="<?php echo $telp_ibu;?>" readonly type="text" id="telp_ibu" name="telp_ibu" placeholder="No. Telepon" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>
        <div class='col-sm-4'><input type="text" value="<?php echo $pend_terakhir_ibu; ?>" class='form-control' id="pend_terakhir_ibu" name='pend_terakhir_ibu' readonly></div>    		</td>
				</tr>
				<tr>
					<td>Pekerjaan Ibu, Alamat Kantor</td>
					<td> 
						<div class='col-sm-4'><input value="<?php echo $pekerjaan_ibu;?>" readonly type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" class="form-control" required >
						</div> <div class='col-sm-6'><textarea name="alamat_kantor_ibu" readonly placeholder="Alamat Kantor" id="alamat_kantor_ibu"class="form-control" required ><?php echo $alamat_kantor_ibu;?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Penghasilan Perbulan</td>
					<td>
						<div class="col-sm-4">
							<input type="text" readonly value="<?php echo $penghasilan_ibu;?>" id="penghasilan_ibu" name="penghasilan_ibu" class='form-control'>
							
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
						<div class='col-sm-6'><input value="<?php echo $nama_wali?>" type="text" readonly id="nama_wali" name="nama_wali" placeholder="Nama Wali" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td> 
						<div class='col-sm-4'><input type="text" value="<?php echo $tempat_lahir_wali;?>" id="tempat_lahir_wali" name="tempat_lahir_wali" placeholder="Tempat Lahir Wali" class="form-control" required readonly ></div>         <div class="col-sm-4"><input type="text" id="tanggal_lahir_wali" name="tanggal_lahir_wali" readonly placeholder="Tanggal Lahir Wali" value="<?php echo $tanggal_lahir_wali;?>" class='form-control' required>
						</div>
					</td>
				</tr>
				
				<tr>
				<td>Hubungan Keluarga</td>
					<td> 
						<div class='col-sm-6'><input type="text" id="hubungan_keluarga" name="hubungan_keluarga" readonly value="<?php echo $hubungan_keluarga; ?>" placeholder="Hubungan Keluarga" class="form-control" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Alamat Rumah</td>
					<td> 
						<div class='col-sm-8'><textarea id="alamat_wali" name="alamat_wali" readonly placeholder="Alamat Rumah" class="form-control" required ><?php echo $alamat_wali; ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>No. Telepon</td>
					<td> 
						<div class='col-sm-4'><input type="text" id="telp_wali" name="telp_wali" readonly placeholder="No. Telepon" class="form-control" value="<?php echo $telp_wali;?>" required >
						</div>
					</td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>
        <div class='col-sm-4'><input type="text" readonly value="<?php echo $pend_terakhir_wali;?>" id="pend_terakhir_wali" class='form-control' name='pend_terakhir_wali' readonly ></div>    		</td>
				</tr>
				<tr>
					<td>Pekerjaan Wali, Alamat Kantor</td>
					<td> 
						<div class='col-sm-4'><input readonly value="<?php echo $pekerjaan_wali;?>" type="text" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Pekerjaan Wali" class="form-control" required >
						</div> <div class='col-sm-6'><textarea readonly name="alamat_kantor_wali" id="alamat_kantor_wali" placeholder="Alamat Kantor" class="form-control" required ><?php echo $alamat_kantor_wali; ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Penghasilan Perbulan</td>
					<td>
						<div class="col-sm-4">
							<input type="text" value="<?php echo $penghasilan_wali;?>" name="penghasilan_wali" class='form-control' id="penghasilan_wali" readonly>
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
						<div class='col-sm-10'><textarea name="motivasi" id="motivasi" placeholder="" class="form-control" readonly required ><?php echo $motivasi;?></textarea>
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
	
	
<div class="box-header">
				<h3 class="breadcrumb">
					<center><a style="color:black;font-size:18pt" href="<?php echo site_url().'/'.$this->uri->segment(1).'/edit_santri/'.$calon->nis;?>" class="fa fa-pencil">&nbsp EDIT</center></a>
				</h3>
				</div>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>
	
