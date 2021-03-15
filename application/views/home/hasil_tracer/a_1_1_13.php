<?php 
$arr = explode(",", $a_1_13);
$val_1_oq = $arr[0]; $val_1_q = $arr[1]; $val_1_uq = $arr[2];
$val_2_oq = $arr[3]; $val_2_q = $arr[4]; $val_2_uq = $arr[5];
?>
<table class="table table-responsive" style="width: 100%;" >
<tr>
    <th style="width: 5%;" rowspan="2">No.</th>
    <th style="width: 65%;" rowspan="2">Kategori</th>
    <th style="width: 30%; text-align: center;" colspan="3">Jumlah Responden</th>
</tr>
<tr>
    <th style="width: 10%; text-align: center;">Over Qualified</th>
    <th style="width: 10%; text-align: center;">Qualified</th>
    <th style="width: 10%; text-align: center;">Under Qualified</th>
</tr>
<tr>
    <td>1</td>
    <td>Kualifikasi dalam pekerjaan</td>
    <td style="text-align: center;"><?php echo $val_1_oq;?></td>
    <td style="text-align: center;"><?php echo $val_1_q;?></td>
    <td style="text-align: center;"><?php echo $val_1_uq;?></td>
</tr>
<tr>
    <td>2</td>
    <td>Kesesuaian bidang ilmu dengan pekerjaan saat ini</td>
    <td style="text-align: center;"><?php echo $val_2_oq;?></td>
    <td style="text-align: center;"><?php echo $val_2_q;?></td>
    <td style="text-align: center;"><?php echo $val_2_uq;?></td>
</tr>
</table>