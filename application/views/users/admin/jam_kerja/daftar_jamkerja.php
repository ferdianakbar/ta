<!DOCTYPE html>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
        </section>
        
        <!-- Main content -->
		<!-- <section class="content">	  -->
		
          <!-- Info boxes -->
		  <section class="content">
          <div class="col-md-4 panel-group" id="accordion" style="float:right;margin-top:150px;margin-right:490px">
                <div class="panel-title">
                </div>
		  <div class="panel panel-success" style="background-color: rgba(255,255,255,0.)">
                    
                    <div class="panel-body">
					<form action="<?php echo site_url()?>/jam_kerja/detail_jamkerja" method="GET" enctype="multipart/form-data" onsubmit="return validasi">
						<tr>
						<td>Nama Instansi<div id="instansi"></td>
						<select name="ins" class="form-control">
                			<?php foreach($instansi as $ins): ?>
                    			<option value="<?= $ins->id_ins; ?>"><?= $ins->nama_ins; ?></option>
               				 <?php endforeach; ?>
            			</select>
						</tr>
                       
                            <button type="submit" class="btn btn-lg btn-block btn-success" style="font-size:12px"><b>Submit</b></button>
                        </form>
                    </div>
                </div>
        </section>
</form>
</center>
</div>
</div>
</div>
	</section>
	
	
