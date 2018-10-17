<td>Nama Pelanggaran</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td><select onchange="GetSelectedTextValue(this);" class="form-control" id ="id_jenis" name="id_jenis_pelanggaran">
    <?php
    if(count($nama->result_array())>0)
    {
        echo "<option>- Pilih Nama Pelanggaran -</option>";
        foreach($nama->result_array() as $k)
        {
       echo "<option value='".$k['id_jenis_pelanggaran']."'>".$k['nama_pelanggaran']."</option>";
        }
    }
    else{
        echo "<option>- Data Belum Tersedia -</option>";
    }
    ?>
</select></td>