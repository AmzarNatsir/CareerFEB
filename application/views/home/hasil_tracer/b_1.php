<figure class="highcharts-figure">
<div id="container_3_1"></div>
</figure>
<?php 
$arr = explode(",", $b_1);
$val_1 = $arr[0];
$val_2 = $arr[1];
?>
<script>
    Highcharts.chart('container_3_1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Alumni yang merupakan anggota aktif dari Ikatan Alumni FEB'
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
            name: 'Ya',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: 'Tidak',
            y: <?php echo $val_2;?>
        }]
    }]
});
</script>