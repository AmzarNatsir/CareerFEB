<figure class="highcharts-figure">
<div id="container_c_1"></div>
</figure>
<script>
    Highcharts.chart('container_c_1', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Berdasarkan pengalaman pada pekerjaan alumni, saran yang berikan untuk peningkatan kualitas pembelajaran di Fakultas Ekonomi dan Bisnis (FEB) Universitas Muhammadiyah Makassar'
    },
    xAxis: {
        categories: [
        'Penambahan bahan Pustaka', 
        'Pengembangan softskill', 
        'Menjaga rasio dosen: mahasiswa yang ideal', 
        'Bimbingan karir', 
        'Bahan kuliah yang lebih kini',
        'Peningkatan kualitas SDM',
        'Peningkatan sarana / prasarana',
        'Membangun jejaring dengan industri'
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
        data: [<?php echo $c_1;?>]
    }
    ]
});
</script>