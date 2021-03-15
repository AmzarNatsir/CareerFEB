<figure class="highcharts-figure">
<div id="container_2_4"></div>
</figure>
<?php 
$arr = explode(",", $a_2_4);
$val_1 = $arr[0];
$val_2 = $arr[1];
$val_3 = $arr[2];
$val_4 = $arr[3];
$val_5 = $arr[4];
$val_6 = $arr[5];
?>
<script>
    Highcharts.chart('container_2_4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah lamaran kerja yang mendapatkan respon'
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
            name: '≤ 5',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: '6-10',
            y: <?php echo $val_2;?>
        }, {
            name: '21- 25',
            y: <?php echo $val_3;?>
        }, {
            name: '11-15',
            y: <?php echo $val_4;?>
        }, {
            name: '16-20',
            y: <?php echo $val_5;?>
        }, {
            name: '>25',
            y: <?php echo $val_6;?>
        }]
    }]
});
</script>