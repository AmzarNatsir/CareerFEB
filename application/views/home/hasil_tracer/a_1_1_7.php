<figure class="highcharts-figure">
<div id="container_1_7"></div>
</figure>
<script>
    Highcharts.chart('container_1_7', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Bidang Pekerjaan Saat Ini'
    },
    xAxis: {
        categories: [
        'Arsitek', 
        'Teknik Komputer', 
        'Akuntansi', 
        'Manajemen Keuangan', 
        'Manajemen Pemasaran',
        'Manajemen Produksi',
        'Keuangan / Perbankan',
        'Manajemen SDN',
        'Database Administrator',
        'Database Designer',
        'Penulis',
        'Sistem Administrator',
        'Sistem Informasi',
        'Lain-lain'
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
        data: [<?php echo $a_1_7;?>]
    }
    ]
});
</script>