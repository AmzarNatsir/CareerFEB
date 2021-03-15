<figure class="highcharts-figure">
<div id="container_2_2"></div>
</figure>
<script>
    Highcharts.chart('container_2_2', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Bagi yang sedang mencari pekerjaan, informasi pekerjaan berasal dari'
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
        data: [<?php echo $a_2_2;?>]
    }
    ]
});
</script>