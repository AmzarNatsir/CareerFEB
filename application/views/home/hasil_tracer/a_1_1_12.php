<?php 
$arr = explode(",", $a_1_12);
$val_1_tp = $arr[0]; $val_1_kp = $arr[1];$val_1_b = $arr[2];$val_1_p = $arr[3];$val_1_sp = $arr[4];
$val_2_tp = $arr[5]; $val_2_kp = $arr[6];$val_2_b = $arr[7];$val_2_p = $arr[8];$val_2_sp = $arr[9];
$val_3_tp = $arr[10]; $val_3_kp = $arr[11];$val_3_b = $arr[12];$val_3_p = $arr[13];$val_3_sp = $arr[14];
$val_4_tp = $arr[15]; $val_4_kp = $arr[16];$val_4_b = $arr[17];$val_4_p = $arr[18];$val_4_sp = $arr[19];
$val_5_tp = $arr[20]; $val_5_kp = $arr[21];$val_5_b = $arr[22];$val_5_p = $arr[23];$val_5_sp = $arr[24];
$val_6_tp = $arr[25]; $val_6_kp = $arr[26];$val_6_b = $arr[27];$val_6_p = $arr[28];$val_6_sp = $arr[29];
$val_7_tp = $arr[30]; $val_7_kp = $arr[31];$val_7_b = $arr[32];$val_7_p = $arr[33];$val_7_sp = $arr[34];
$val_8_tp = $arr[35]; $val_8_kp = $arr[36];$val_8_b = $arr[37];$val_8_p = $arr[38];$val_8_sp = $arr[39];
$val_9_tp = $arr[40]; $val_9_kp = $arr[41];$val_9_b = $arr[42];$val_9_p = $arr[43];$val_9_sp = $arr[44];
$val_10_tp = $arr[45]; $val_10_kp = $arr[46];$val_10_b = $arr[47];$val_10_p = $arr[48];$val_10_sp = $arr[49];
$val_11_tp = $arr[50]; $val_11_kp = $arr[51];$val_11_b = $arr[52];$val_11_p = $arr[53];$val_11_sp = $arr[54];
$val_12_tp = $arr[55]; $val_12_kp = $arr[56];$val_12_b = $arr[57];$val_12_p = $arr[58];$val_12_sp = $arr[59];
$val_13_tp = $arr[60]; $val_13_kp = $arr[61];$val_13_b = $arr[62];$val_13_p = $arr[63];$val_13_sp = $arr[64];
$val_14_tp = $arr[65]; $val_14_kp = $arr[66];$val_14_b = $arr[67];$val_14_p = $arr[68];$val_14_sp = $arr[69];
/*
$tp = $arr[0].", ".$arr[5].", ".$arr[10].", ".$arr[15].", ".$arr[20].", ".$arr[25].", ".$arr[30].", ".$arr[35].", ".$arr[40].", ".$arr[45].", ".$arr[50].", ".$arr[55].", ".$arr[60].", ".$arr[65];

$kp = $arr[1].", ".$arr[6].", ".$arr[11].", ".$arr[16].", ".$arr[21].", ".$arr[26].", ".$arr[31].", ".$arr[36].", ".$arr[41].", ".$arr[46].", ".$arr[51].", ".$arr[56].", ".$arr[61].", ".$arr[66];

$b = $arr[2].", ".$arr[7].", ".$arr[12].", ".$arr[17].", ".$arr[22].", ".$arr[27].", ".$arr[2].", ".$arr[37].", ".$arr[42].", ".$arr[47].", ".$arr[52].", ".$arr[57].", ".$arr[62].", ".$arr[67];

$p = $arr[3].", ".$arr[8].", ".$arr[13].", ".$arr[18].", ".$arr[23].", ".$arr[28].", ".$arr[33].", ".$arr[38].", ".$arr[43].", ".$arr[48].", ".$arr[53].", ".$arr[58].", ".$arr[63].", ".$arr[68];

$sp = $arr[4].", ".$arr[9].", ".$arr[14].", ".$arr[19].", ".$arr[24].", ".$arr[29].", ".$arr[34].", ".$arr[39].", ".$arr[44].", ".$arr[49].", ".$arr[54].", ".$arr[9].", ".$arr[64].", ".$arr[69]
*/
?>
<table class="table table-responsive" style="width: 100%;" >
<tr>
<td colspan="7">TP: Tidak Penting, KP: Kurang Penting, B: Biasa, P: Penting, SP: Sangat Penting</td>
</tr>
<tr>
    <th style="width: 5%;" rowspan="2">No.</th>
    <th style="width: 45%;" rowspan="2">Kategori</th>
    <th style="width: 50%; text-align: center;" colspan="5">Jumlah Responden</th>
</tr>
<tr>
    <th style="width: 10%; text-align: center;">TP</th>
    <th style="width: 10%; text-align: center;">KP</th>
    <th style="width: 10%; text-align: center;">B</th>
    <th style="width: 10%; text-align: center;">P</th>
    <th style="width: 10%; text-align: center;">SP</th>
</tr>
<tr>
    <td>1</td>
    <td>Integritas (etika dan moral)</td>
    <td style="text-align: center;"><?php echo $val_1_tp;?></td>
    <td style="text-align: center;"><?php echo $val_1_kp;?></td>
    <td style="text-align: center;"><?php echo $val_1_b;?></td>
    <td style="text-align: center;"><?php echo $val_1_p;?></td>
    <td style="text-align: center;"><?php echo $val_1_sp;?></td>
</tr>
<tr>
    <td>2</td>
    <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
    <td style="text-align: center;"><?php echo $val_2_tp;?></td>
    <td style="text-align: center;"><?php echo $val_2_kp;?></td>
    <td style="text-align: center;"><?php echo $val_2_b;?></td>
    <td style="text-align: center;"><?php echo $val_2_p;?></td>
    <td style="text-align: center;"><?php echo $val_2_sp;?></td>
</tr>
<tr>
    <td>3</td>
    <td>Bahasa Inggris</td>
    <td style="text-align: center;"><?php echo $val_3_tp;?></td>
    <td style="text-align: center;"><?php echo $val_3_kp;?></td>
    <td style="text-align: center;"><?php echo $val_3_b;?></td>
    <td style="text-align: center;"><?php echo $val_3_p;?></td>
    <td style="text-align: center;"><?php echo $val_3_sp;?></td>
</tr>
<tr>
    <td>4</td>
    <td>Penggunaan Teknologi Informasi</td>
    <td style="text-align: center;"><?php echo $val_4_tp;?></td>
    <td style="text-align: center;"><?php echo $val_4_kp;?></td>
    <td style="text-align: center;"><?php echo $val_4_b;?></td>
    <td style="text-align: center;"><?php echo $val_4_p;?></td>
    <td style="text-align: center;"><?php echo $val_4_sp;?></td>
</tr>
<tr>
    <td>5</td>
    <td>Kemampuan komunikasi</td>
    <td style="text-align: center;"><?php echo $val_5_tp;?></td>
    <td style="text-align: center;"><?php echo $val_5_kp;?></td>
    <td style="text-align: center;"><?php echo $val_5_b;?></td>
    <td style="text-align: center;"><?php echo $val_5_p;?></td>
    <td style="text-align: center;"><?php echo $val_5_sp;?></td>
</tr>
<tr>
    <td>6</td>
    <td>Kerjasama tim</td>
    <td style="text-align: center;"><?php echo $val_6_tp;?></td>
    <td style="text-align: center;"><?php echo $val_6_kp;?></td>
    <td style="text-align: center;"><?php echo $val_6_b;?></td>
    <td style="text-align: center;"><?php echo $val_6_p;?></td>
    <td style="text-align: center;"><?php echo $val_6_sp;?></td>
</tr>
<tr>
    <td>7</td>
    <td>Kewirausahaan</td>
    <td style="text-align: center;"><?php echo $val_7_tp;?></td>
    <td style="text-align: center;"><?php echo $val_7_kp;?></td>
    <td style="text-align: center;"><?php echo $val_7_b;?></td>
    <td style="text-align: center;"><?php echo $val_7_p;?></td>
    <td style="text-align: center;"><?php echo $val_7_sp;?></td>
</tr>
<tr>
    <td>8</td>
    <td>Pemecahan masalah</td>
    <td style="text-align: center;"><?php echo $val_8_tp;?></td>
    <td style="text-align: center;"><?php echo $val_8_kp;?></td>
    <td style="text-align: center;"><?php echo $val_8_b;?></td>
    <td style="text-align: center;"><?php echo $val_8_p;?></td>
    <td style="text-align: center;"><?php echo $val_8_sp;?></td>
</tr>
<tr>
    <td>9</td>
    <td>Hubungan antar manusia (human relation)</td>
    <td style="text-align: center;"><?php echo $val_9_tp;?></td>
    <td style="text-align: center;"><?php echo $val_9_kp;?></td>
    <td style="text-align: center;"><?php echo $val_9_b;?></td>
    <td style="text-align: center;"><?php echo $val_9_p;?></td>
    <td style="text-align: center;"><?php echo $val_9_sp;?></td>
</tr>
<tr>
    <td>10</td>
    <td>Pengembangan diri</td>
    <td style="text-align: center;"><?php echo $val_10_tp;?></td>
    <td style="text-align: center;"><?php echo $val_10_kp;?></td>
    <td style="text-align: center;"><?php echo $val_10_b;?></td>
    <td style="text-align: center;"><?php echo $val_10_p;?></td>
    <td style="text-align: center;"><?php echo $val_10_sp;?></td>
</tr>
<tr>
    <td>11</td>
    <td>Kemampuan bekerja mandiri</td>
    <td style="text-align: center;"><?php echo $val_11_tp;?></td>
    <td style="text-align: center;"><?php echo $val_11_kp;?></td>
    <td style="text-align: center;"><?php echo $val_11_b;?></td>
    <td style="text-align: center;"><?php echo $val_11_p;?></td>
    <td style="text-align: center;"><?php echo $val_11_sp;?></td>
</tr>
<tr>
    <td>12</td>
    <td>Kepemimpinan / Kemampuan Berorganisasi</td>
    <td style="text-align: center;"><?php echo $val_12_tp;?></td>
    <td style="text-align: center;"><?php echo $val_12_kp;?></td>
    <td style="text-align: center;"><?php echo $val_12_b;?></td>
    <td style="text-align: center;"><?php echo $val_12_p;?></td>
    <td style="text-align: center;"><?php echo $val_12_sp;?></td>
</tr>
<tr>
    <td>13</td>
    <td>Kemampuan menulis</td>
    <td style="text-align: center;"><?php echo $val_13_tp;?></td>
    <td style="text-align: center;"><?php echo $val_13_kp;?></td>
    <td style="text-align: center;"><?php echo $val_13_b;?></td>
    <td style="text-align: center;"><?php echo $val_13_p;?></td>
    <td style="text-align: center;"><?php echo $val_13_sp;?></td>
</tr>
<tr>
    <td>14</td>
    <td>Bekerja di bawah tekanan</td>
    <td style="text-align: center;"><?php echo $val_14_tp;?></td>
    <td style="text-align: center;"><?php echo $val_14_kp;?></td>
    <td style="text-align: center;"><?php echo $val_14_b;?></td>
    <td style="text-align: center;"><?php echo $val_14_p;?></td>
    <td style="text-align: center;"><?php echo $val_14_sp;?></td>
</tr>
</table>
<!--
<figure class="highcharts-figure">
<div id="container_1_12"></div>
</figure>
<script>
    Highcharts.chart('container_1_12', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Berikan peniliaian tingkat kepentingan kompetensi berikut dalam bidang pekerjaan Anda saat ini'
    },
    xAxis: {
        categories: [
        'Integritas (etika dan moral)', 
        'Keahlian berdasarkan bidang ilmu (profesionalisme)', 
        'Bahasa Inggris', 
        'Penggunaan Teknologi Informasi', 
        'Kemampuan komunikasi',
        'Kerjasama tim',
        'Kewirausahaan',
        'Pemecahan masalah',
        'Hubungan antar manusia (human relation)',
        'Pengembangan diri',
        'Kemampuan bekerja mandiri',
        'Kepemimpinan / Kemampuan Berorganisasi',
        'Kemampuan menulis',
        'Bekerja di bawah tekanan'
    ]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Responden'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'TP: Tidak Penting',
        data: [<?php echo $tp;?>]
    },
    {
        name: 'KP: Kurang Penting',
        data: [<?php echo $kp;?>]
    },
    {
        name: 'B: Biasa',
        data: [<?php echo $b;?>]
    },
    {
        name: 'P: Penting',
        data: [<?php echo $p;?>]
    },
    {
        name: 'SP: Sangat Penting',
        data: [<?php echo $sp;?>]
    }
    ]
});
</script>
-->