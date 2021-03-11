<figure class="highcharts-figure">
<div id="container_1_1"></div>
</figure>
<script>
    Highcharts.chart('container_1_1', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Informasi Asal Pekerjaan'
    },
    xAxis: {
        categories: [
        'Pengumuman lowongan pekerjaan pada surat kabar', 
        'Pengumuman di internet', 
        'Informasi internal perusahaan', 
        'Lamaran langsung ke prusahaan', 
        'Career center FEB Unismuh Makassar',
        'Alumni',
        'Perusahaan / agen perekrut tenaga kerja',
        'Kontak personal/pribadi',
        'Dinas tenaga kerja',
        'Bursa kerja',
        'Informasi teman',
        'Kerabat/keluarga'
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
        data: [<?php echo $a_1_1;?>]
    }
    ]
});
</script>