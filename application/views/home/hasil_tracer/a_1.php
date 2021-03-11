<figure class="highcharts-figure">
<div id="container_1"></div>
</figure>
<script>
    Highcharts.chart('container_1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Status Pekerjaan Alumni'
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
            name: 'Bekerja',
            y: <?php echo $kerja_ya;?>,
            sliced: true,
            selected: true
        }, {
            name: 'Belum Bekerja',
            y: <?php echo $kerja_tidak;?>
        }]
    }]
});
</script>