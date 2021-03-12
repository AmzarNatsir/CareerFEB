<figure class="highcharts-figure">
<div id="container_1_2"></div>
</figure>
<?php 
$arr = explode(",", $a_1_2);
$val_1 = 10;
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
            y: <?php echo $kerja_tidak;?>
        }, {
            name: '10 sampai 12 bulan',
            y: <?php echo $kerja_tidak;?>
        }, {
            name: '19 sampai 24 bulan',
            y: <?php echo $kerja_tidak;?>
        }, {
            name: 'Kurang 3 bulan',
            y: <?php echo $kerja_tidak;?>
        }, {
            name: 'Antara 7 sampai 9 bulan',
            y: <?php echo $kerja_tidak;?>
        }, {
            name: '13 sampai 18 bulan',
            y: <?php echo $kerja_tidak;?>
        }, {
            name: 'Lebih dari 24 bulan',
            y: <?php echo $kerja_tidak;?>
        }]
    }]
});
</script>