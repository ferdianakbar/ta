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

    <?php foreach ($instansi as $data) ?>
   <div class="row">
		<div class="col-md-12 clearfix">
				<div id="form-group" class="tab-pane active">
				<table class="table table-bordered">
					<tr class="success"><th colspan="2">Data Unit Kerja <?php echo $data->nama_ins;?> </th></tr>
          <td>Tahun</td>
						<td> 
            <?php foreach ($keg as $row) ?>
							<div class='col-sm-3'><input type="text" name="tahun" class="form-control" id="tahun" value="<?php echo $row->tahun; ?>" placeholder="tahun" class="form-control" required ></div>
						</td>
					</tr>
				</table>
        </div>
			</form>			
		</div>		
    </div>

   <!-- <div class="col-md-12"> -->
   <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><center>NO</center></th>
            <th><center>NAMA KEGIATAN</center></th>
            <th><center>PPTK</center></th>
            <th><center>TARGET FISIK</center></th>
            <th><center>TARGET KEUANGAN</center></th>
            <th><center>AKSI</center></th>
          </tr>
        </thead>
        <tbody>
        <?php $nourut=0;
    
		foreach ($keg as $row) {
		$nourut++?>
<tr style="font-size:12pt" align="center">
	<td><?php echo $nourut ?></td>
	<td><?php echo $row->nama_keg;?></td>
  <td><?php echo $row->PPTK;?></td>
  <td><?php echo $row->trg_fisik;?></td>
  <td><?php echo $row->trg_keu;?></td>
  <td class="text-center">
                                    <div class="btn">
                                    <a href="<?php echo site_url().'/kegiatan/detail_kegiatan/'.$row->nama_keg;?>">UPDATE</a>
                                    </div>
                                    <div class="btn">
                                    <a href="<?php echo site_url().'/kegiatan/detail_kegiatan/'.$row->nama_keg;?>">UPDATE KELUARAN KEGIATAN</a>
                                    </div>
	</tr> <?php } ?>
		</tbody>
      </table>
    </div><!-- /.box-body -->
  <!-- /.box -->
</div>
</div>
</div>
	</section>
		