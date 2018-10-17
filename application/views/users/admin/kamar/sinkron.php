<td>Kapasitas</td><td>&nbsp&nbsp:</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td><td>
    <?php
    if(count($nama->result_array())>0)
    {
        foreach($nama->result_array() as $k)
        {
       echo "<input type='text' id='kapasitas' class='form-control' readonly value='".$k['kapasitas']."'></td>";
       
        }
    }
    ?>