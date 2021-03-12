<figure class="highcharts-figure">
<div id="container_1_5"></div>
</figure>
<?php 
$arr = explode(",", $a_1_5);
$val_1 = $arr[0];
$val_2 = $arr[1];
$val_3 = $arr[2];
$val_4 = $arr[3];
$val_5 = $arr[4];
$val_6 = $arr[5];
?>
<script>
    Highcharts.chart('container_1_5', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Tingkat Gaji/pendapatann (x) (Rupiah/per bulan)'
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
            name: 'x < 1 juta',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: '2 < x ≤ 3 juta',
            y: <?php echo $val_2;?>
        }, {
            name: '4 < x ≤ 5 juta',
            y: <?php echo $val_3;?>
        }, {
            name: '1 < x ≤ 2 juta',
            y: <?php echo $val_4;?>
        }, {
            name: '3 < x ≤ 4 juta',
            y: <?php echo $val_5;?>
        }, {
            name: 'x > 5 juta',
            y: <?php echo $val_6;?>
        }]
    }]
});
</script>