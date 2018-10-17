
<!DOCTYPE html>

<link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
       
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <h1>
           Selamat Datang,
         </h1>
       </section>
       
       <!-- Main content -->
       <section class="content">
         <!-- Info boxes -->
         
   <div class="row">
       <div class="col-xs-12">
           <div class="box">

    	<div class="row">
		<div class="col-md-12 clearfix">
     <?php 
     $nip='';
     $nama='';
     $id_user='';
     $akses='';
     $id_ins='';
     $password='';
     $photo='';
     
     if(isset($user)){
     $nip=$user->nip;
     $nama=$user->nama;
     $id_user=$user->id_user;
     $akses=$user->akses;
     $id_ins=$user->id_ins;
     $password=$user->password;
     $photo=$user->photo;
     }
     
       foreach ($users as $data) ?>
<center>
<h3>Form Update User</h3><br>
<form action="<?php echo site_url()?>/UP/update_users" method="POST" enctype="multipart/form-data" onsubmit="return validasi()">
<table style="font-size:18px">
<tr>
<td>NIP</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control"  value= "<?php echo $data->nip; ?>" id="nip"  readonly name="nip"></td>
</tr>
<tr>
<td>Nama Lengkap</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" class="form-control" value= "<?php echo $data->nama; ?>" name="nama"id="nama"></td>
</tr>
<tr><td>ID User</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" value="<?php echo $data->id_user;?>" class="form-control" name="id_user" id="id_user"></td>
</tr>
<tr><td>Pilih Dinas/ Unit Kerja<div id="instansi"></td>
    <td>&nbsp&nbsp:</td>
        <td>
				<td> 
					    <select name='id_ins' class="form-control">
									<?php 
										foreach($instansi as $ins):
                    if($ins->id_ins == $data->id_ins):
									?>
											<option selected value="<?= $ins->id_ins; ?>"><?= $ins->nama_ins; ?></option>
										<?php else: ?>
											<option value="<?= $ins->id_ins; ?>"><?= $ins->nama_ins; ?></option>
									<?php 
										endif;
										endforeach; 
									?>
								</select>
							</div>
						</td>
</tr>
<tr><td>AKSES</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="textfield" value="<?php echo $data->akses;?>" class="form-control" name="akses" id="akses"></td>
</tr><tr><td>Password</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><input required type="password" value="<?php echo $data->password; ?>" class="form-control" name="password" id="password"></td>
<tr>
<td>Foto</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><?php echo $data->photo!=''?'<img src="'.base_url().'assets/upload/foto_user/'.$data->photo.'" width="250" height="300">':'<img src="'.base_url().'/upload/foto_profil/noface.png" width="100" height="100">'?>
	<input type="file" class="form-control" name="photo" id="photo"></td>
</tr>
<td> </td> <td> </td> <td> </td><td><input type="submit" value="simpan" class="btn btn-danger  btn-sm">
      

</table>
</form>
</center>
</div>
</div>
</div>
   </section>
