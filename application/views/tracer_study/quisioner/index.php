<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Tracer Study - Fakultas Ekonomi dan Bisnis Universitas Muhammadiyah Makassar</title>
        <meta name="description" content="Tracer Study FEB Unismuh Makassar">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/logo-mini.ico"> 
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>CC</strong>FEB</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie10"></div>
                </div>
            </div>
            
            <div id="page-container">
                <!-- Main Sidebar -->
                
                <!-- Main Container -->
                <div id="main-container">
                    <header class="navbar navbar-default">
                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url();?>assets/img/placeholders/avatars/avatar.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center"><?php echo $this->session->userdata("nmalumnicc"); ?></li>
                                    <li>
                                        <a href="<?php echo base_url();?>tracer_study/keluar_log"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Tasks Row -->
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <!-- Account Stats Block -->
                                <div class="block">
                                    <!-- Account Status Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-user"></i> Sambutan <strong>Dekan</strong></h2>
                                    </div>
                                    <!-- END Account Status Title -->

                                    <!-- Account Stats Content -->
                                    <div class="row block-section text-center">
                                        <div class="col-xs-12">
                                                <img src="<?php echo base_url();?>assets/img/dekan_feb.jpg" alt="logo" class="img-responsive">
                                        </div>
                                    </div>
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Kuesioner studi pelacakan lulusan (graduate tracer study) ini ditujukan untuk mendapatkan gambaran tentang profil alumni dan menjaring umpan balik dari lulusan Fakultas Ekonomi  Dan Bisnis (FEB) Universitas Muhammadiyah Makassar.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                Studi pelacakan ini juga sangat berguna untuk menggali informasi penting mengenai relevansi pendidikan tinggi dan dunia kerja, menyediakan informasi bagi pemangku kepentingan dan menjadi salah satu syarat kelengkapan akreditasi pendidikan tinggi.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                Kegiatan ini menjadi salah satu bukti upaya institusi untuk melakukan perbaikan yang berkelanjutan. Pada saat anda selesai mengisi kuesioner dan mengirimkannya, sistem memberikan akun panel alumni untuk mengelolah profil anda, manajemen kegiatan dan informasi anda dan manajemen lowongan kerja.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                Jika anda memerlukan penjelasan atau menemui masalah dalam pengisian studi pelacakan ini, mohon dapat menyampaikannya kepada kami melalui email: info@feb.unismuh.ac.id. Terima kasih atas kerjasama yang sudah diberikan.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Account Status Content -->
                                </div>
                                <!-- END Account Status Block -->
                            </div>
                            <div class="col-sm-8 col-lg-4">
                                <div class="block">
                                    <div class="block-title">
                                        <h2><i class="fa fa-user"></i> Biodata <strong><?php echo $this->session->userdata("nmalumnicc"); ?></strong></h2>
                                    </div>
                                    <table class="table table-borderless table-striped">
                                        <tbody>
                                            <tr>
                                                <td style="width: 20%;"><strong>NIM</strong></td>
                                                <td><strong><?php echo $this->session->userdata("nimalumnicc"); ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>Program Studi</strong></td>
                                                <td><strong><?php 
                                                if($this->session->userdata("prodialumnicc")==1) {
                                                    echo "Ekonomi Pembangunan";
                                                } elseif($this->session->userdata("prodialumnicc")==2) {
                                                    echo "Manajemen";
                                                } elseif($this->session->userdata("prodialumnicc")==3) {
                                                    echo "Akuntansi";
                                                } elseif($this->session->userdata("prodialumnicc")==4) {
                                                    echo "Ekonomi Islam";
                                                } else {
                                                    echo "D3 Perpajakan";
                                                }
                                                ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 20%;"><strong>Email</strong></td>
                                                <td><strong><?php echo $this->session->userdata("emailalumnicc"); ?></strong></td>
                                            </tr>
                                            <tr class="btn-warning">
                                                <td colspan="2"><strong>Lengkapi Biodata Data Berikut Ini : </strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <label for="inp_tempat_lahir">Tempat/Tanggal Lahir</label>
                                                        <div class="row">
                                                            <div class="col-sm-7">
                                                                <input type="text" class="form-control" name="inp_tempat_lahir" id="inp_tempat_lahir" maxlength="100" required>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input type="date" class="form-control"  name="inp_tanggal_lahir" id="inp_tanggal_lahir" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-4 control-label">Jenis Kelamin</label>
                                                        <div class="col-md-8">
                                                        <label class="radio-inline" for="pil_laki">
                                                            <input type="radio" id="pil_laki" name="pil_jenkel" value="1"> Laki-Laki
                                                        </label>
                                                        <label class="radio-inline" for="pil_perempuan">
                                                            <input type="radio" id="pil_perempuan" name="pil_jenkel" value="2"> Perempuan
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inp_alamat">Alamat Sekarang</label>
                                                        <input type="text" class="form-control" name="inp_alamat" id="inp_alamat" maxlength="100" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inp_kontak">Nomor Telepon</label>
                                                        <input type="text" class="form-control" name="inp_kontak" id="inp_kontak" maxlength="50" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inp_tahun_lulus">Tahun Lulus</label>
                                                        <input type="text" class="form-control" name="inp_tahun_lulus" id="inp_tahun_lulus" maxlength="4" required>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-8 col-lg-5">
                                <div class="block">
                                    <div class="block-title">
                                        <h2><i class="fa fa-tasks"></i> Quisioner</h2>
                                    </div>
                                    <h4 class="sub-header"><strong>Tentang Pekerjaan</strong></h4>
                                    <div id="faq1" class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1">Informasi pekerjaan berasal dari (bisa lebih dari 1 pilihan)</a></h4>
                                            </div>
                                            <div id="faq1_q1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="checkbox">
                                                        <label for="pil_1_1">
                                                            <input type="checkbox" id="pil_1_1" name="pil_1_1" value="1"> Pengumuman lowongan pekerjaan pada surat kabar
                                                        </label><br>
                                                        <label for="pil_1_2">
                                                            <input type="checkbox" id="pil_1_2" name="pil_1_2" value="2"> Pengumuman di internet
                                                        </label><br>

                                                        <label for="pil_1_3">
                                                            <input type="checkbox" id="pil_1_3" name="pil_1_3" value="3"> Informasi internal perusahaan
                                                        </label><br>
                                                        <label for="pil_1_4">
                                                            <input type="checkbox" id="pil_1_4" name="pil_1_4" value="4"> Lamaran langsung ke prusahaan
                                                        </label><br>
                                                        <label for="pil_1_5">
                                                            <input type="checkbox" id="pil_1_5" name="pil_1_5" value="5"> Career center FEB Unismuh Makassar
                                                        </label><br>
                                                        <label for="pil_1_6">
                                                            <input type="checkbox" id="pil_1_6" name="pil_1_6" value="6"> Alumni
                                                        </label><br>
                                                        <label for="pil_1_7">
                                                            <input type="checkbox" id="pil_1_7" name="pil_1_7" value="7"> Perusahaan / agen perekrut tenaga kerja
                                                        </label><br>
                                                        <label for="pil_1_8">
                                                            <input type="checkbox" id="pil_1_8" name="pil_1_8" value="8"> Kontak personal/pribadi
                                                        </label><br>
                                                        <label for="pil_1_9">
                                                            <input type="checkbox" id="pil_1_9" name="pil_1_9" value="9"> Dinas tenaga kerja
                                                        </label><br>
                                                        <label for="pil_1_10">
                                                            <input type="checkbox" id="pil_1_10" name="pil_1_10" value="10"> Bursa kerja
                                                        </label><br>
                                                        <label for="pil_1_11">
                                                            <input type="checkbox" id="pil_1_11" name="pil_1_11" value="11"> Informasi teman
                                                        </label><br>
                                                        <label for="pil_1_12">
                                                            <input type="checkbox" id="pil_1_12" name="pil_1_12" value="12"> Kerabat/keluarga
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2">Waktu tunggu sampai mendapatkan pekerjaan pertama ?</a></h4>
                                            </div>
                                            <div id="faq1_q2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_2_1">
                                                            <input type="radio" id="pil_2_1" name="pil_2" value="1"> Bekerja sebelum lulus
                                                        </label><br>
                                                        <label for="pil_2_2">
                                                            <input type="radio" id="pil_2_2" name="pil_2" value="2"> Antara 3 sampai 6 bulan
                                                        </label><br>
                                                        <label for="pil_2_3">
                                                            <input type="radio" id="pil_2_3" name="pil_2" value="3"> 10 sampai 12 bulan
                                                        </label><br>
                                                        <label for="pil_2_4">
                                                            <input type="radio" id="pil_2_4" name="pil_2" value="4"> 19 sampai 24 bulan
                                                        </label><br>
                                                        <label for="pil_2_5">
                                                            <input type="radio" id="pil_2_5" name="pil_2" value="5"> Kurang 3 bulan
                                                        </label><br>
                                                        <label for="pil_2_6">
                                                            <input type="radio" id="pil_2_6" name="pil_2" value="6"> Antara 7 sampai 9 bulan
                                                        </label><br>
                                                        <label for="pil_2_7">
                                                            <input type="radio" id="pil_2_7" name="pil_2" value="7"> 13 sampai 18 bulan
                                                        </label><br>
                                                        <label for="pil_2_8">
                                                            <input type="radio" id="pil_2_8" name="pil_2" value="8"> Lebih dari 24 bulan
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3">Jenis pekerjaan pertama</a></h4>
                                            </div>
                                            <div id="faq1_q3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_3_1">
                                                            <input type="radio" id="pil_3_1" name="pil_3" value="1"> Staff
                                                        </label><br>
                                                        <label for="pil_3_2">
                                                            <input type="radio" id="pil_3_2" name="pil_3" value="2"> Supervisor
                                                        </label><br>
                                                        <label for="pil_3_3">
                                                            <input type="radio" id="pil_3_3" name="pil_3" value="3"> Wirausaha
                                                        </label><br>
                                                        <label for="pil_3_4">
                                                            <input type="radio" id="pil_3_4" name="pil_3" value="4"> Management trainee
                                                        </label><br>
                                                        <label for="pil_3_5">
                                                            <input type="radio" id="pil_3_5" name="pil_3" value="5"> Manajerial
                                                        </label><br>
                                                        <label for="pil_3_6">
                                                            <input type="radio" id="pil_3_6" name="pil_3" value="6"> Lain-lain
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q4">Status pekerjaan pertama</a></h4>
                                            </div>
                                            <div id="faq1_q4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_4_1">
                                                            <input type="radio" id="pil_4_1" name="pil_4" value="1"> Bekerja penuh waktu
                                                        </label><br>
                                                        <label for="pil_4_2">
                                                            <input type="radio" id="pil_4_2" name="pil_4" value="2"> Bekerja kontrak semenstara
                                                        </label><br>
                                                        <label for="pil_4_3">
                                                            <input type="radio" id="pil_4_3" name="pil_4" value="3"> Wirausaha
                                                        </label><br>
                                                        <label for="pil_4_4">
                                                            <input type="radio" id="pil_4_4" name="pil_4" value="4"> Bekerja paruh waktu trainee
                                                        </label><br>
                                                        <label for="pil_4_5">
                                                            <input type="radio" id="pil_4_5" name="pil_4" value="5"> Tidak bekerja sedang mencari pekerjaan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q5">Tingkat Gaji/pendapatann (x) (Rupiah/per bulan)</a></h4>
                                            </div>
                                            <div id="faq1_q5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_5_1">
                                                            <input type="radio" id="pil_5_1" name="pil_5" value="1"> x < 1 juta
                                                        </label><br>
                                                        <label for="pil_5_2">
                                                            <input type="radio" id="pil_5_2" name="pil_5" value="2"> 2 < x ≤ 3 juta
                                                        </label><br>
                                                        <label for="pil_5_3">
                                                            <input type="radio" id="pil_5_3" name="pil_5" value="3"> 4 < x ≤ 5 juta
                                                        </label><br>
                                                        <label for="pil_5_4">
                                                            <input type="radio" id="pil_5_4" name="pil_5" value="4"> 1 < x ≤ 2 juta
                                                        </label><br>
                                                        <label for="pil_5_5">
                                                            <input type="radio" id="pil_5_5" name="pil_5" value="5"> 3 < x ≤ 4 juta
                                                        </label><br>
                                                        <label for="pil_5_6">
                                                            <input type="radio" id="pil_5_6" name="pil_5" value="6"> x > 5 juta
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q6">Apakah pekerjaan saat ini merupakan pekerjaan pertama setelah lulus</a></h4>
                                            </div>
                                            <div id="faq1_q6" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_6_1">
                                                            <input type="radio" id="pil_6_1" name="pil_6" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_6_2">
                                                            <input type="radio" id="pil_6_2" name="pil_6" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q7">Bidang Pekerjaan saat ini</a></h4>
                                            </div>
                                            <div id="faq1_q7" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="checkbox">
                                                        <label for="pil_7_1">
                                                            <input type="checkbox" id="pil_7_1" name="pil_7_1" value="1"> Arsitek
                                                        </label><br>
                                                        <label for="pil_7_2">
                                                            <input type="checkbox" id="pil_7_2" name="pil_7_2" value="2"> Teknik Komputer
                                                        </label><br>

                                                        <label for="pil_7_3">
                                                            <input type="checkbox" id="pil_7_3" name="pil_7_3" value="3"> Akuntansi
                                                        </label><br>
                                                        <label for="pil_7_4">
                                                            <input type="checkbox" id="pil_7_4" name="pil_7_4" value="4"> Manajemen Keuangan
                                                        </label><br>
                                                        <label for="pil_7_5">
                                                            <input type="checkbox" id="pil_7_5" name="pil_7_5" value="5"> Manajemen Pemasaran
                                                        </label><br>
                                                        <label for="pil_7_6">
                                                            <input type="checkbox" id="pil_7_6" name="pil_7_6" value="6"> Manajemen Produksi
                                                        </label><br>
                                                        <label for="pil_7_7">
                                                            <input type="checkbox" id="pil_7_7" name="pil_7_7" value="7"> Keuangan / Perbankan
                                                        </label><br>
                                                        <label for="pil_7_8">
                                                            <input type="checkbox" id="pil_7_8" name="pil_7_8" value="8"> Manajemen SDN
                                                        </label><br>

                                                        <label for="pil_7_9">
                                                            <input type="checkbox" id="pil_7_9" name="pil_7_9" value="9"> Database Administrator
                                                        </label><br>
                                                        <label for="pil_7_10">
                                                            <input type="checkbox" id="pil_7_10" name="pil_7_10" value="11"> Database Designer
                                                        </label><br>
                                                        <label for="pil_7_11">
                                                            <input type="checkbox" id="pil_7_11" name="pil_7_11" value="12"> Penulis
                                                        </label><br>
                                                        <label for="pil_7_12">
                                                            <input type="checkbox" id="pil_7_12" name="pil_7_12" value="13"> Sistem Administrator
                                                        </label><br>
                                                        <label for="pil_7_13">
                                                            <input type="checkbox" id="pil_7_13" name="pil_7_13" value="14"> Sistem Informasi
                                                        </label><br>
                                                        <label for="pil_7_14">
                                                            <input type="checkbox" id="pil_7_14" name="pil_7_14" value="15"> Lain-lain
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q8">Institusi tempat kerja</a></h4>
                                            </div>
                                            <div id="faq1_q8" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_8_1">
                                                            <input type="radio" id="pil_8_1" name="pil_8" value="1"> Industri manufaktur
                                                        </label><br>
                                                        <label for="pil_8_2">
                                                            <input type="radio" id="pil_8_2" name="pil_8" value="2"> Pendidikan
                                                        </label><br>
                                                        <label for="pil_8_3">
                                                            <input type="radio" id="pil_8_3" name="pil_8" value="3"> Wirausaha
                                                        </label><br>
                                                        <label for="pil_8_4">
                                                            <input type="radio" id="pil_8_4" name="pil_8" value="4"> Industri Broadcasting
                                                        </label><br>
                                                        <label for="pil_8_5">
                                                            <input type="radio" id="pil_8_5" name="pil_8" value="5"> Industri keuangan / Perbankan
                                                        </label><br>
                                                        <label for="pil_8_6">
                                                            <input type="radio" id="pil_8_6" name="pil_8" value="6"> Lembaga Pemerintah/ PNS
                                                        </label><br>
                                                        <label for="pil_8_7">
                                                            <input type="radio" id="pil_8_7" name="pil_8" value="7"> BUMN
                                                        </label><br>
                                                        <label for="pil_8_8">
                                                            <input type="radio" id="pil_8_8" name="pil_8" value="8"> Rumah Sakit
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q9">Berapa lama (x) saudara sudah bekerja di tempat kerja saat ini?</a></h4>
                                            </div>
                                            <div id="faq1_q9" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_9_1">
                                                            <input type="radio" id="pil_9_1" name="pil_9" value="1"> x < 1 tahun
                                                        </label><br>
                                                        <label for="pil_9_2">
                                                            <input type="radio" id="pil_9_2" name="pil_9" value="2"> 2 < x ≤ 3 tahun
                                                        </label><br>
                                                        <label for="pil_9_3">
                                                            <input type="radio" id="pil_9_3" name="pil_9" value="3"> 4 < x ≤ 5 tahun
                                                        </label><br>
                                                        <label for="pil_9_4">
                                                            <input type="radio" id="pil_9_4" name="pil_9" value="4"> 1 < x ≤ 2 tahun
                                                        </label><br>
                                                        <label for="pil_9_5">
                                                            <input type="radio" id="pil_9_5" name="pil_9" value="5"> 3 < x ≤ 4 tahun
                                                        </label><br>
                                                        <label for="pil_9_6">
                                                            <input type="radio" id="pil_9_6" name="pil_9" value="6"> x > 5 tahun
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Tasks Row -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-left">&copy; <?php echo date("Y");?> FEB Universitas Muhammadiyah Makassar</div>
                        <div class="pull-right"><a href="https://kreasiempatpilar.com" target="_new">Kreasi Emapt Pilar</a></div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                            <fieldset>
                                <legend>Vital Info</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">Admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                                    <div class="col-md-8">
                                        <label class="switch switch-primary">
                                            <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Password Update</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url();?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url();?>assets/js/pages/readyTasks.js"></script>
        <script>$(function(){ ReadyTasks.init(); });</script>
    </body>
</html>