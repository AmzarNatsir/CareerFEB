<figure class="highcharts-figure">
<div id="container_1_2"></div>
</figure>
<?php 
$arr = explode(",", $a_1_2);
$val_1 = $arr[0];
$val_2 = $arr[1];
$val_3 = $arr[2];
$val_4 = $arr[3];
$val_5 = $arr[4];
$val_6 = $arr[5];
$val_7 = $arr[6];
$val_8 = $arr[7];
?>
<script>
    Highcharts.chart('container_1_2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Waktu Tunggu Sampai Mendapat Pekerjaan'
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
            name: 'Bekerja sebelum lulus',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: 'Antara 3 sampai 6 bulan',
            y: <?php echo $val_2;?>
        }, {
            name: '10 sampai 12 bulan',
            y: <?php echo $val_3;?>
        }, {
            name: '19 sampai 24 bulan',
            y: <?php echo $val_4;?>
        }, {
            name: 'Kurang 3 bulan',
            y: <?php echo $val_5;?>
        }, {
            name: 'Antara 7 sampai 9 bulan',
            y: <?php echo $val_6;?>
        }, {
            name: '13 sampai 18 bulan',
            y: <?php echo $val_7;?>
        }, {
            name: 'Lebih dari 24 bulan',
            y: <?php echo $val_8;?>
        }]
    }]
});
</script>