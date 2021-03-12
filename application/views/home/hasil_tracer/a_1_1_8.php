<figure class="highcharts-figure">
<div id="container_1_8"></div>
</figure>
<?php 
$arr = explode(",", $a_1_8);
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
    Highcharts.chart('container_1_8', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Institusi tempat kerja'
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
            name: 'Industri manufaktur',
            y: <?php echo $val_1;?>,
            sliced: true,
            selected: true
        }, {
            name: 'Pendidikan',
            y: <?php echo $val_2;?>
        }, {
            name: 'Wirausaha',
            y: <?php echo $val_3;?>
        }, {
            name: 'Industri Broadcasting',
            y: <?php echo $val_4;?>
        }, {
            name: 'Industri keuangan / Perbankan',
            y: <?php echo $val_5;?>
        }, {
            name: 'Lembaga Pemerintah/ PNS',
            y: <?php echo $val_6;?>
        }, {
            name: 'BUMN',
            y: <?php echo $val_7;?>
        }, {
            name: 'Rumah Sakit',
            y: <?php echo $val_8;?>
        }]
    }]
});
</script>