<figure class="highcharts-figure">
<div id="container_1_11"></div>
</figure>
<?php 
$arr = explode(",", $a_1_11);
$val_1 = $arr[0];
$val_2 = $arr[1];
$val_3 = $arr[2];
$val_4 = $arr[3];
$val_5 = $arr[4];
$val_6 = $arr[5];
?>
<script>
    Highcharts.chart('container_1_11', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah karyawan (x) di tempat kerja saat ini'
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
            name: 'x < 20 orang',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: '100 < x ≤ 300',
            y: <?php echo $val_2;?>
        }, {
            name: '500 < x ≤ 1000',
            y: <?php echo $val_3;?>
        }, {
            name: '20 < x ≤ 100',
            y: <?php echo $val_4;?>
        }, {
            name: '300 < x ≤ 500',
            y: <?php echo $val_5;?>
        }, {
            name: 'x > 1000',
            y: <?php echo $val_6;?>
        }]
    }]
});
</script>