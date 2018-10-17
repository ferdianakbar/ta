          <link rel="stylesheet" href="<?=base_url('assets/plugins/jQueryUI/jquery-ui.css');?>" />
<script src="<?=base_url('assets/plugins/jQueryUI/jquery-ui-1.10.3.min.js');?>"></script>
          
		  <script type="text/javascript">
		$(document).ready(function () {
                
                $('#tanggal_datang').datepicker({
                    format: "dd-mm-yyyy"
                });  
            
            });
			$(document).ready(function () {
                
                $('#tanggal_pergi').datepicker({
                    format: "dd-mm-yyyy"
                });  
            
            });
			</script>
<script>
function validasi(){
			var tanggal_datang=document.getElementById('tanggal_datang');
			var tanggal_pergi=document.getElementById('tanggal_pergi');
			var jumlah=document.getElementById('jumlah');
			var jamp = tanggal_pergi.value;
			var jamd = tanggal_datang.value;
			var x =((Date.parse(jamd))  - (Date.parse(jamp)))/100000000;
			

	if( x >= 4){
		alert('Tidak Bisa Izin Melebihi 3 Hari');
		return false;
	 
	}	
	if( x < 0){
		alert('Tanggal Datang Harus Lebih Besar Dari Tanggal Pergi');
		return false;
	 
	}
	
	return true;
 }	
</script>
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
                            
                            
      <center><h3  class="box-title">Formulir Jam Kerja</h3></center>
   <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>Hari</center></th>
            <th><center>Jam Kerja</center></th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>Senin</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Selasa</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Rabu</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Kamis</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Jumat</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Sabtu</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Minggu</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
            <tr>
                <td>Toleransi</td><td> <input type="time" name="jam_pergi" id="jam_pergi" class="form-control"></td>
            </tr>
		</tbody>
                
      </table>
    </div>
   <!-- /.box-body -->
  <!-- /.box -->
  
</div>
</div>
</div>
	</section>
		