<!-- Page content -->
<div id="page-content">
    <!-- Page Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Manajemen Data Kegiatan / <strong>Event</strong>
            </h1>
        </div>
    </div>
    <!-- END Page Header -->
    <div class="row">
        <div class="col-md-6">
            <div class="widget">
                <div class="widget-extra themed-background-dark">
                    <div class="widget-options">
                        <div class="btn-group btn-group-xs">
                            <a href="<?php echo base_url();?>panel_career/manaj_kegiatan_baru" class="btn btn-default" data-toggle="tooltip" title="Tambah Data Baru"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <h3 class="widget-content-light">
                    <strong>Postingan Kegiatan / Event Bulan Ini</strong>
                    </h3>
                </div>
                <div class="widget-extra">
                    <div class="timeline">
                        <ul class="timeline-list">
                            <?php 
                            foreach($kegiatan_bulan_ini as $dt1) {?>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-check"></i></div>
                                <div class="timeline-time"><small><?php echo date_format(date_create($dt1['tgl_posting']), "d/m/y");?></small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="#"><strong><?php echo $dt1['judul_kegiatan'];?></strong></a></p>
                                    <p class="push-bit"><?php echo substr($dt1['deskripsi'], 0, 100);?> ....</p>
                                    <p class="push-bit"><a href="#" class="btn btn-xs btn-warning"><i class="fa fa-info"></i> Kategori : <?php echo $dt1['nama_kategori'];?></a> | <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> <?php echo $dt1['pengunjung'];?></a> | 
                                    <button type="button" class="btn btn-xs btn-success" name="tbl_edit" id="<?php echo $dt1['id'];?>" data-toggle="tooltip" title="Edit Data"><i class="fa fa-edit"></i></button>
                                    </p>
                                    <?php if($dt1['ada_file']==1) {?>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-4">
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
            <div class="widget">
                <div class="widget-extra themed-background-dark">
                    <h3 class="widget-content-light">
                    <strong>Latest Post</strong>
                    </h3>
                </div>
                <div class="widget-extra">
                    <div class="timeline">
                        <ul class="timeline-list">
                            <li class="active">
                                <div class="timeline-icon themed-background-fire themed-border-fire"><i class="fa fa-check"></i></div>
                                <div class="timeline-time"><small>01/01/21</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.html"><strong>Jordan Carter</strong></a></p>
                                    <p class="push-bit">The trip was an amazing and a life changing experience!!</p>
                                    <p class="push-bit"><a href="page_ready_article.html" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> Read the article</a></p>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo22.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo22.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->