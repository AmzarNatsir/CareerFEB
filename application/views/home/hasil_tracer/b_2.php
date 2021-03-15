<figure class="highcharts-figure">
<div id="container_3_2"></div>
</figure>
<?php
$arr = explode(",", $b_2);
$ya = $arr['0'].", ".$arr[2].", ".$arr[4].", ".$arr[6].", ".$arr[8];
$tidak = $arr['1'].", ".$arr[3].", ".$arr[5].", ".$arr[7].", ".$arr[9];
?>
<script>
Highcharts.chart('container_3_2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Kontribusi yang pernah diberikan melalui himpunan alumni'
    },
    xAxis: {
        categories: [
            'Sumbangan Dana ',
            'Fasilitas (alat - buku)',
            'Terlibat dalam kegiatan akademik',
            'Terlibat dalam kegiatan non akademik',
            'Membangun jejaring dengan universitas'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Responden'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Ya',
        data: [<?php echo $ya;?>]

    }, {
        name: 'Tidak',
        data: [<?php echo $tidak;?>]

    }]
});
</script>