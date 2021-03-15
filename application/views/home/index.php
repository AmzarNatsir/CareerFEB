<!-- Page content -->
<div id="page-content">
    <!-- Page Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-book_open"></i>Selamat Datang di <strong>Career Center</strong><br><small>Fakultas Ekonomi dan Bisnis (FEB) Universitas Muhammadiyah Makassar</small>
            </h1>
        </div>
    </div>
    <!-- END Page Header -->
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <!-- Account Stats Block -->
            <div class="block">
                <!-- Account Status Title -->
                <div class="block-title themed-background-dark" style="color:white">
                    <h2><strong>Dekan</strong></h2>
                </div>
                <div class="row block-section text-center">
                    <div class="col-xs-4">
                            <img src="<?php echo base_url();?>assets/img/dekan_feb.jpg" alt="logo" class="img-responsive">
                    </div>
                    <div class="col-xs-8">
                        <table class="table table-borderless table-striped table-vcenter">
                            <tbody>
                                <tr>
                                    <td class="text-left"><blockquote>Career center system & Tracer Study diharapkan mampu menjadi pusat pelatihan serta media penghubung antara perguruan tinggi dengan alumninya. Tentu dengan adanya sistem ini, berbagai informasi dari alumni seperti informasi domisili alumni, dan lain sebagainya bisa di share dengan mudah kepada Instansi maupun alumni lainnya. Selain itu, fungsi penting dari adanya sistem tracer study adalah adanya feedback yang diberikan oleh alumni untuk keperluan evaluasi capaian manajemen terhadap proses pembelajaran yang dilakukan.</blockquote>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="block">
                <div class="block-title themed-background-dark" style="color:white">
                    <h3 class="widget-content-light">
                    INFORMASI KEGIATAN / <strong>EVENT</strong>
                    </h3>
                </div>
                <div class="widget-extra">
                    <div class="timeline">
                        <ul class="timeline-list">
                            <?php 
                            foreach($all_kegiatan as $dt1) {?>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-check"></i></div>
                                <div class="timeline-time"><small><?php echo date_format(date_create($dt1['tgl_posting']), "d/m/y");?></small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="#"><strong><?php echo $dt1['judul_kegiatan'];?></strong></a></p>
                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-warning">Kategori : <?php echo $dt1['nama_kategori'];?></a>
                                    <p class="push-bit"><?php echo substr($dt1['deskripsi'], 0, 100);?> ....</p>
                                    <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> <?php echo $dt1['pengunjung'];?></a> | <a href="#" class="btn btn-xs btn-info"><i class="fa fa-user"></i> <?php echo $dt1['nama_lengkap'];?></a>
                                    </p>
                                    <?php if($dt1['ada_file']==1) {?>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-6">
                                            <a href="<?php echo base_url();?>assets/upload/kegiatan/<?php echo $dt1['file_gambar'];?>" data-toggle="lightbox-image">
                                                <img src="<?php echo base_url();?>assets/upload/kegiatan/<?php echo $dt1['file_gambar'];?>" alt="Gambar">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block">
                <div class="block-title themed-background-dark" style="color:white">
                    <h3 class="widget-content-light">
                    INFORMASI LOWONGAN KERJA / <strong>JOB VACANCY</strong>
                    </h3>
                </div>
                <div class="widget-extra">
                    <div class="timeline">
                        <ul class="timeline-list">
                            <?php 
                            foreach($all_loker as $dt1) {?>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-check"></i></div>
                                <div class="timeline-time"><small><?php echo date_format(date_create($dt1['tgl_posting']), "d/m/y");?></small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="#"><strong><?php echo $dt1['nama_perusahaan'];?></strong></a></p>
                                    <p class="push-bit"><?php echo strtoupper($dt1['alamat'].", ".$dt1['nama_kabupaten'].", ".$dt1['nama_provinsi']);?></p>
                                    <p class="push-bit"><a href="#"><strong>Waktu Proses Lamaran : <?php echo date_format(date_create($dt1['tgl_mulai']), "d-m-Y");?> s/d <?php echo date_format(date_create($dt1['tgl_akhir']), "d-m-Y");?></strong></a></p>

                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-warning"><i class="fa fa-info"></i> Kategori : <?php echo $dt1['nama_kategori'];?></a> | <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> <?php echo $dt1['pengunjung'];?></a>
                                    </p>
                                    <?php if($dt1['ada_file']==1) {?>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-6">
                                            <a href="<?php echo base_url();?>assets/upload/loker/<?php echo $dt1['file_lampiran'];?>" data-toggle="lightbox-image">
                                                <img src="<?php echo base_url();?>assets/upload/loker/<?php echo $dt1['file_lampiran'];?>" alt="Gambar">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->