<figure class="highcharts-figure">
<div id="container_2_1"></div>
</figure>
<?php 
$arr = explode(",", $a_2_1);
$val_1 = $arr[0];
$val_2 = $arr[1];
$val_3 = $arr[2];
$val_4 = $arr[3];
?>
<script>
    Highcharts.chart('container_2_1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Kegiatan Anda Saat ini'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Kategori',
        colorByPoint: true,
        data: [{
            name: 'Tidak bekerja dan tidak mencari pekerjaan',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: 'Mengurus rumah tangga',
            y: <?php echo $val_2;?>
        }, {
            name: 'Sedang mencari pekerjaan',
            y: <?php echo $val_3;?>
        }, {
            name: 'Melanjutkan studi',
            y: <?php echo $val_4;?>
        }]
    }]
});
</script>