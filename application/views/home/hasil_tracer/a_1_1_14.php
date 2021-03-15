<?php 
$arr = explode(",", $a_1_14);
$val_1_sk = $arr[0]; $val_1_k = $arr[1];$val_1_c = $arr[2];$val_1_lc = $arr[3];$val_1_sm = $arr[4];
$val_2_sk = $arr[5]; $val_2_k = $arr[6];$val_2_c = $arr[7];$val_2_lc = $arr[8];$val_2_sm = $arr[9];
$val_3_sk = $arr[10]; $val_3_k = $arr[11];$val_3_c = $arr[12];$val_3_lc = $arr[13];$val_3_sm = $arr[14];
$val_4_sk = $arr[15]; $val_4_k = $arr[16];$val_4_c = $arr[17];$val_4_lc = $arr[18];$val_4_sm = $arr[19];
$val_5_sk = $arr[20]; $val_5_k = $arr[21];$val_5_c = $arr[22];$val_5_lc = $arr[23];$val_5_sm = $arr[24];
$val_6_sk = $arr[25]; $val_6_k = $arr[26];$val_6_c = $arr[27];$val_6_lc = $arr[28];$val_6_sm = $arr[29];
$val_7_sk = $arr[30]; $val_7_k = $arr[31];$val_7_c = $arr[32];$val_7_lc = $arr[33];$val_7_sm = $arr[34];
$val_8_sk = $arr[35]; $val_8_k = $arr[36];$val_8_c = $arr[37];$val_8_lc = $arr[38];$val_8_sm = $arr[39];
$val_9_sk = $arr[40]; $val_9_k = $arr[41];$val_9_c = $arr[42];$val_9_lc = $arr[43];$val_9_sm = $arr[44];
$val_10_sk = $arr[45]; $val_10_k = $arr[46];$val_10_c = $arr[47];$val_10_lc = $arr[48];$val_10_sm = $arr[49];
$val_11_sk = $arr[50]; $val_11_k = $arr[51];$val_11_c = $arr[52];$val_11_lc = $arr[53];$val_11_sm = $arr[54];
$val_12_sk = $arr[55]; $val_12_k = $arr[56];$val_12_c = $arr[57];$val_12_lc = $arr[58];$val_12_sm = $arr[59];
$val_13_sk = $arr[60]; $val_13_k = $arr[61];$val_13_c = $arr[62];$val_13_lc = $arr[63];$val_13_sm = $arr[64];
$val_14_sk = $arr[65]; $val_14_k = $arr[66];$val_14_c = $arr[67];$val_14_lc = $arr[68];$val_14_sm = $arr[69];
/*
$tp = $arr[0].", ".$arr[5].", ".$arr[10].", ".$arr[15].", ".$arr[20].", ".$arr[25].", ".$arr[30].", ".$arr[35].", ".$arr[40].", ".$arr[45].", ".$arr[50].", ".$arr[55].", ".$arr[60].", ".$arr[65];

$kp = $arr[1].", ".$arr[6].", ".$arr[11].", ".$arr[16].", ".$arr[21].", ".$arr[26].", ".$arr[31].", ".$arr[36].", ".$arr[41].", ".$arr[46].", ".$arr[51].", ".$arr[56].", ".$arr[61].", ".$arr[66];

$b = $arr[2].", ".$arr[7].", ".$arr[12].", ".$arr[17].", ".$arr[22].", ".$arr[27].", ".$arr[2].", ".$arr[37].", ".$arr[42].", ".$arr[47].", ".$arr[52].", ".$arr[57].", ".$arr[62].", ".$arr[67];

$p = $arr[3].", ".$arr[8].", ".$arr[13].", ".$arr[18].", ".$arr[23].", ".$arr[28].", ".$arr[33].", ".$arr[38].", ".$arr[43].", ".$arr[48].", ".$arr[53].", ".$arr[58].", ".$arr[63].", ".$arr[68];

$sp = $arr[4].", ".$arr[9].", ".$arr[14].", ".$arr[19].", ".$arr[24].", ".$arr[29].", ".$arr[34].", ".$arr[39].", ".$arr[44].", ".$arr[49].", ".$arr[54].", ".$arr[9].", ".$arr[64].", ".$arr[69]
*/
?>
<table class="table table-responsive" style="width: 100%;">
<tr>
<td colspan="7">SK: Sangat Kurang, K: Kurang, C: Cukup, LC: Lebih dari cukup, SM: Sangat Memadai</td>
</tr>
<tr>
    <th style="width: 5%;" rowspan="2">No.</th>
    <th style="width: 45%;" rowspan="2">Kategori</th>
    <th style="width: 50%; text-align: center;" colspan="5">Jumlah Responden</th>
</tr>
<tr>
    <th style="width: 10%; text-align: center;">SK</th>
    <th style="width: 10%; text-align: center;">K</th>
    <th style="width: 10%; text-align: center;">C</th>
    <th style="width: 10%; text-align: center;">LC</th>
    <th style="width: 10%; text-align: center;">SM</th>
</tr>
<tr>
    <td>1</td>
    <td>Integritas (etika dan moral)</td>
    <td style="text-align: center;"><?php echo $val_1_sk;?></td>
    <td style="text-align: center;"><?php echo $val_1_k;?></td>
    <td style="text-align: center;"><?php echo $val_1_c;?></td>
    <td style="text-align: center;"><?php echo $val_1_lc;?></td>
    <td style="text-align: center;"><?php echo $val_1_sm;?></td>
</tr>
<tr>
    <td>2</td>
    <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
    <td style="text-align: center;"><?php echo $val_2_sk;?></td>
    <td style="text-align: center;"><?php echo $val_2_k;?></td>
    <td style="text-align: center;"><?php echo $val_2_c;?></td>
    <td style="text-align: center;"><?php echo $val_2_lc;?></td>
    <td style="text-align: center;"><?php echo $val_2_sm;?></td>
</tr>
<tr>
    <td>3</td>
    <td>Bahasa Inggris</td>
    <td style="text-align: center;"><?php echo $val_3_sk;?></td>
    <td style="text-align: center;"><?php echo $val_3_k;?></td>
    <td style="text-align: center;"><?php echo $val_3_c;?></td>
    <td style="text-align: center;"><?php echo $val_3_lc;?></td>
    <td style="text-align: center;"><?php echo $val_3_sm;?></td>
</tr>
<tr>
    <td>4</td>
    <td>Penggunaan Teknologi Informasi</td>
    <td style="text-align: center;"><?php echo $val_4_sk;?></td>
    <td style="text-align: center;"><?php echo $val_4_k;?></td>
    <td style="text-align: center;"><?php echo $val_4_c;?></td>
    <td style="text-align: center;"><?php echo $val_4_lc;?></td>
    <td style="text-align: center;"><?php echo $val_4_sm;?></td>
</tr>
<tr>
    <td>5</td>
    <td>Kemampuan komunikasi</td>
    <td style="text-align: center;"><?php echo $val_5_sk;?></td>
    <td style="text-align: center;"><?php echo $val_5_k;?></td>
    <td style="text-align: center;"><?php echo $val_5_c;?></td>
    <td style="text-align: center;"><?php echo $val_5_lc;?></td>
    <td style="text-align: center;"><?php echo $val_5_sm;?></td>
</tr>
<tr>
    <td>6</td>
    <td>Kerjasama tim</td>
    <td style="text-align: center;"><?php echo $val_6_sk;?></td>
    <td style="text-align: center;"><?php echo $val_6_k;?></td>
    <td style="text-align: center;"><?php echo $val_6_c;?></td>
    <td style="text-align: center;"><?php echo $val_6_lc;?></td>
    <td style="text-align: center;"><?php echo $val_6_sm;?></td>
</tr>
<tr>
    <td>7</td>
    <td>Kewirausahaan</td>
    <td style="text-align: center;"><?php echo $val_7_sk;?></td>
    <td style="text-align: center;"><?php echo $val_7_k;?></td>
    <td style="text-align: center;"><?php echo $val_7_c;?></td>
    <td style="text-align: center;"><?php echo $val_7_lc;?></td>
    <td style="text-align: center;"><?php echo $val_7_sm;?></td>
</tr>
<tr>
    <td>8</td>
    <td>Pemecahan masalah</td>
    <td style="text-align: center;"><?php echo $val_8_sk;?></td>
    <td style="text-align: center;"><?php echo $val_8_k;?></td>
    <td style="text-align: center;"><?php echo $val_8_c;?></td>
    <td style="text-align: center;"><?php echo $val_8_lc;?></td>
    <td style="text-align: center;"><?php echo $val_8_sm;?></td>
</tr>
<tr>
    <td>9</td>
    <td>Hubungan antar manusia (human relation)</td>
    <td style="text-align: center;"><?php echo $val_9_sk;?></td>
    <td style="text-align: center;"><?php echo $val_9_k;?></td>
    <td style="text-align: center;"><?php echo $val_9_c;?></td>
    <td style="text-align: center;"><?php echo $val_9_lc;?></td>
    <td style="text-align: center;"><?php echo $val_9_sm;?></td>
</tr>
<tr>
    <td>10</td>
    <td>Pengembangan diri</td>
    <td style="text-align: center;"><?php echo $val_10_sk;?></td>
    <td style="text-align: center;"><?php echo $val_10_k;?></td>
    <td style="text-align: center;"><?php echo $val_10_c;?></td>
    <td style="text-align: center;"><?php echo $val_10_lc;?></td>
    <td style="text-align: center;"><?php echo $val_10_sm;?></td>
</tr>
<tr>
    <td>11</td>
    <td>Kemampuan bekerja mandiri</td>
    <td style="text-align: center;"><?php echo $val_11_sk;?></td>
    <td style="text-align: center;"><?php echo $val_11_k;?></td>
    <td style="text-align: center;"><?php echo $val_11_c;?></td>
    <td style="text-align: center;"><?php echo $val_11_lc;?></td>
    <td style="text-align: center;"><?php echo $val_11_sm;?></td>
</tr>
<tr>
    <td>12</td>
    <td>Kepemimpinan / Kemampuan Berorganisasi</td>
    <td style="text-align: center;"><?php echo $val_12_sk;?></td>
    <td style="text-align: center;"><?php echo $val_12_k;?></td>
    <td style="text-align: center;"><?php echo $val_12_c;?></td>
    <td style="text-align: center;"><?php echo $val_12_lc;?></td>
    <td style="text-align: center;"><?php echo $val_12_sm;?></td>
</tr>
<tr>
    <td>13</td>
    <td>Kemampuan menulis</td>
    <td style="text-align: center;"><?php echo $val_13_sk;?></td>
    <td style="text-align: center;"><?php echo $val_13_k;?></td>
    <td style="text-align: center;"><?php echo $val_13_c;?></td>
    <td style="text-align: center;"><?php echo $val_13_lc;?></td>
    <td style="text-align: center;"><?php echo $val_13_sm;?></td>
</tr>
<tr>
    <td>14</td>
    <td>Bekerja di bawah tekanan</td>
    <td style="text-align: center;"><?php echo $val_14_sk;?></td>
    <td style="text-align: center;"><?php echo $val_14_k;?></td>
    <td style="text-align: center;"><?php echo $val_14_c;?></td>
    <td style="text-align: center;"><?php echo $val_14_lc;?></td>
    <td style="text-align: center;"><?php echo $val_14_sm;?></td>
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