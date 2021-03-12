<figure class="highcharts-figure">
<div id="container_1_4"></div>
</figure>
<?php 
$arr = explode(",", $a_1_4);
$val_1 = $arr[0];
$val_2 = $arr[1];
$val_3 = $arr[2];
$val_4 = $arr[3];
$val_5 = $arr[4];
?>
<script>
    Highcharts.chart('container_1_4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Status Pekerjaan Pertama'
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
            name: 'Bekerja penuh waktu',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: 'Bekerja kontrak semenstara',
            y: <?php echo $val_2;?>
        }, {
            name: 'Wirausaha',
            y: <?php echo $val_3;?>
        }, {
            name: 'Bekerja paruh waktu trainee',
            y: <?php echo $val_4;?>
        }, {
            name: 'Tidak bekerja sedang mencari pekerjaan',
            y: <?php echo $val_5;?>
        }]
    }]
});
</script>