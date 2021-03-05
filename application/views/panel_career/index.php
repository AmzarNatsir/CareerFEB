<!-- Page content -->
<div id="page-content">
    <!-- Page Header -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <div class="row">
                <!-- Main Title (hidden on small devices for the statistics to fit) -->
                <div class="col-md-4 col-lg-6 hidden-xs hidden-sm">
                    <h1>Selamat Datang <strong><?php echo $this->session->userdata("nmalumni");?></strong><br><small>Di Panel Career Center</small></h1>
                </div>
            </div>
        </div>
        <img src="<?php echo base_url();?>assets/img/placeholders/headers/dashboard_header.jpg" alt="header image" class="animation-pulseSlow">
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="block">
                <!-- Account Stats Content -->
                <div class="row block-section text-center">
                    <div class="col-xs-12">
                        <?php if(empty($res->foto)){?>
                            <img src="<?php echo base_url();?>assets/img/placeholders/avatars/avatar_2.jpg" alt="Photo" class="img-responsive" id="preview_file">
                        <?php } else {?>
                            <img src="<?php echo base_url();?>assets/upload/profil/<?php echo $res->foto;?>" alt="Photo" class="img-responsive" id="preview_file">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="block">
                <!-- Your Account Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="<?php echo base_url();?>panel_career/edit_profil" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit Profil"><i class="fa fa-pencil"></i></a>
                    </div>
                    <h2>Tentang <strong><?php echo $this->session->userdata("nmalumni");?></strong></h2>
                </div>
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"><strong>Program Studi</strong></td>
                            <td><a href="javascript:void(0)"><?php 
                            if($res->id_prodi==1) {
                                echo "Ekonomi Pembangunan";
                            } elseif($res->id_prodi==2) {
                                echo "Manajemen";
                            } elseif($res->id_prodi==3) {
                                echo "Akuntansi";
                            } elseif($res->id_prodi==4) {
                                echo "Ekonomi Islam";
                            } else {
                                echo "D3 Perpajakan";
                            } ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Tahun Lulus</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->tahun_lulus;?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Tempat/Tanggal Lahir</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->tempat_lahir;?>, <?php echo date_format(date_create($res->tgl_lahir), "d-m-Y");?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Alamat Sekarang</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->domisili.", ".$res->nama_kelurahan.", ".$res->nama_kecamatan.", ".$res->nama_kabupaten.", ".$res->nama_provinsi;?></a></td>
                        </tr>
                        <tr>
                            <td><strong>No.Telepon</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->no_telepon;?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->email;?></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="block-title">
                    <h2>Pendidikan Terakhir Anda</h2>
                </div>
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"><strong>Nama Perguruan Tinggi</strong></td>
                            <td style="width: 70%;"><a href="javascript:void(0)"><?php echo (empty($res->nama_pt_akhir)) ? "Tanpa Keterangan" : $res->nama_pt_akhir;?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Jenjang Pendidikan</strong></td>
                            <td><a href="javascript:void(0)"><?php 
                            if($res->id_pendidikan_akhir==1) {
                                echo "Sarjana";
                            } elseif($res->id_pendidikan_akhir==2) {
                                echo "Magister";
                            } elseif($res->id_pendidikan_akhir==3) {
                                echo "Doktor";
                            } else {
                                echo "Tanpa Keterangan";
                            } ?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Jurusan</strong></td>
                            <td><a href="javascript:void(0)"><?php echo (empty($res->jurusan_prodi_akhir)) ? "Tanpa Keterangan" : $res->jurusan_prodi_akhir;?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Status Pendidikan Akhir</strong></td>
                            <td><a href="javascript:void(0)"><?php 
                            if($res->status_pend_akhir==1) {
                                echo "Belum Selesai";
                            } elseif($res->status_pend_akhir==2) {
                                echo "Selesai";
                            } else {
                                echo "Tanpa Keterangan";
                            }?></a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="block-title">
                    <h2>Pekerjaan Anda Saat ini</h2>
                </div>
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"><strong>Pekerjaan</strong></td>
                            <td style="width: 70%;"><a href="javascript:void(0)"><?php echo (empty($res->bekerja)) ? "Belum Bekerja" : "Bekerja";?></a></td>
                        </tr>
                        <?php if($res->bekerja==1) {?>
                        <tr>
                            <td><strong>Nama Instansi</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->nama_instansi;?></a></td>
                        </tr>
                        <tr>
                            <td><strong>Alamat Instansi</strong></td>
                            <td><a href="javascript:void(0)"><?php echo $res->alamat_instansi.", ".$res->kelurahan_instansi.", ".$res->kecamatan_instansi.", ".$res->kabupaten_instansi.", ".$res->provinsi_instansi;?></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->