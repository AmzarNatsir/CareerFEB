<figure class="highcharts-figure">
<div id="container_2_5"></div>
</figure>
<script>
    Highcharts.chart('container_2_5', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Sumber biaya hidup selama tidak bekerja'
    },
    xAxis: {
        categories: [
        'Tabungan', 
        'Keluarga', 
        'Pinjaman', 
        'Sumber Lainnya'
    ]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Responden'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Responden',
        data: [<?php echo $a_2_5;?>]
    }
    ]
});
</script>