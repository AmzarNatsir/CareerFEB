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
                                    <h4 class="sub-header"><strong>I. Tentang Pekerjaan</strong></h4>
                                    <div class="form-group row">
                                        <label class="col-md-6 control-label">Apakah anda sudah bekerja ?</label>
                                        <div class="col-md-6">
                                        <label class="radio-inline" for="pil_ya">
                                            <input type="radio" id="pil_ya" name="pil_kerja" value="1"> Bekerja
                                        </label>
                                        <label class="radio-inline" for="pil_tidak">
                                            <input type="radio" id="pil_tidak" name="pil_kerja" value="2"> Belum Bekerja
                                        </label>
                                        </div>
                                    </div>
                                    <div id="faq1" class="panel-group" style="display: none;">
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
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q10">Tingkat Gaji/pendapatann (x) (Rupiah/per bulan) saat ini</a></h4>
                                            </div>
                                            <div id="faq1_q10" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_10_1">
                                                            <input type="radio" id="pil_10_1" name="pil_10" value="1"> x < 1 juta
                                                        </label><br>
                                                        <label for="pil_10_2">
                                                            <input type="radio" id="pil_10_2" name="pil_10" value="2"> 2 < x ≤ 3 juta
                                                        </label><br>
                                                        <label for="pil_10_3">
                                                            <input type="radio" id="pil_10_3" name="pil_10" value="3"> 4 < x ≤ 5 juta
                                                        </label><br>
                                                        <label for="pil_10_4">
                                                            <input type="radio" id="pil_10_4" name="pil_10" value="4"> 6 < x ≤ 7 juta
                                                        </label><br>
                                                        <label for="pil_10_5">
                                                            <input type="radio" id="pil_10_5" name="pil_10" value="5"> 8 < x ≤ 9 juta
                                                        </label><br>
                                                        <label for="pil_10_6">
                                                            <input type="radio" id="pil_10_6" name="pil_10" value="6"> 1 < x ≤ 2 juta
                                                        </label><br>
                                                        <label for="pil_10_7">
                                                            <input type="radio" id="pil_10_7" name="pil_10" value="7"> 3 < x ≤ 4 juta
                                                        </label><br>
                                                        <label for="pil_10_8">
                                                            <input type="radio" id="pil_10_8" name="pil_10" value="8"> 5 < x ≤ 6 juta
                                                        </label><br>
                                                        <label for="pil_10_9">
                                                            <input type="radio" id="pil_10_9" name="pil_10" value="9"> 7 < x ≤ 8 juta
                                                        </label><br>
                                                        <label for="pil_10_10">
                                                            <input type="radio" id="pil_10_10" name="pil_10" value="10"> x > 9 juta
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q11">Jumlah karyawan (x) di tempat kerja saat ini</a></h4>
                                            </div>
                                            <div id="faq1_q11" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_11_1">
                                                            <input type="radio" id="pil_11_1" name="pil_11" value="1"> x < 20 orang
                                                        </label><br>
                                                        <label for="pil_11_2">
                                                            <input type="radio" id="pil_11_2" name="pil_11" value="2"> 100 < x ≤ 300
                                                        </label><br>
                                                        <label for="pil_11_3">
                                                            <input type="radio" id="pil_11_3" name="pil_11" value="3"> 500 < x ≤ 1000
                                                        </label><br>
                                                        <label for="pil_11_4">
                                                            <input type="radio" id="pil_11_4" name="pil_11" value="4"> 20 < x ≤ 100
                                                        </label><br>
                                                        <label for="pil_11_5">
                                                            <input type="radio" id="pil_11_5" name="pil_11" value="5"> 300 < x ≤ 500
                                                        </label><br>
                                                        <label for="pil_11_6">
                                                            <input type="radio" id="pil_11_6" name="pil_11" value="6"> x > 1000
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q12">Berikan peniliaian tingkat kepentingan kompetensi berikut dalam bidang pekerjaan Anda saat ini </a></h4>
                                            </div>
                                            <div id="faq1_q12" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                <table class="table" style="width: 100%;">
                                                <tr>
                                                    <td colspan="7">TP: tidak penting, KP: kurang penting, B:biasa, P: penting, SP: sangat penting</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5%;">No</td>
                                                    <td style="width: 45%;">Kompetensi</td>
                                                    <td style="width: 10%;">TP</td>
                                                    <td style="width: 10%;">KP</td>
                                                    <td style="width: 10%;">B</td>
                                                    <td style="width: 10%;">P</td>
                                                    <td style="width: 10%;">SP</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Integritas (etika dan moral)</td>
                                                    <td><input type="radio" id="pil_12_1_1" name="pil_12_1_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_1_2" name="pil_12_1_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_1_3" name="pil_12_1_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_1_4" name="pil_12_1_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_1_5" name="pil_12_1_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
                                                    <td><input type="radio" id="pil_12_2_1" name="pil_12_2_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_2_2" name="pil_12_2_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_2_3" name="pil_12_2_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_2_4" name="pil_12_2_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_2_5" name="pil_12_2_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bahasa Inggris</td>
                                                    <td><input type="radio" id="pil_12_3_1" name="pil_12_3_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_3_2" name="pil_12_3_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_3_3" name="pil_12_3_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_3_4" name="pil_12_3_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_3_5" name="pil_12_3_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Penggunaan Teknologi Informasi</td>
                                                    <td><input type="radio" id="pil_12_4_1" name="pil_12_4_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_4_2" name="pil_12_4_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_4_3" name="pil_12_4_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_4_4" name="pil_12_4_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_4_5" name="pil_12_4_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Kemampuan komunikasi</td>
                                                    <td><input type="radio" id="pil_12_5_1" name="pil_12_5_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_5_2" name="pil_12_5_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_5_3" name="pil_12_5_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_5_4" name="pil_12_5_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_5_5" name="pil_12_5_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Kerjasama tim</td>
                                                    <td><input type="radio" id="pil_12_6_1" name="pil_12_6_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_6_2" name="pil_12_6_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_6_3" name="pil_12_6_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_6_4" name="pil_12_6_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_6_5" name="pil_12_6_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Kewirausahaan</td>
                                                    <td><input type="radio" id="pil_12_7_1" name="pil_12_7_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_7_2" name="pil_12_7_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_7_3" name="pil_12_7_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_7_4" name="pil_12_7_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_7_5" name="pil_12_7_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Pemecahan masalah</td>
                                                    <td><input type="radio" id="pil_12_8_1" name="pil_12_8_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_8_2" name="pil_12_8_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_8_3" name="pil_12_8_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_8_4" name="pil_12_8_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_8_5" name="pil_12_8_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Hubungan antar manusia (human relation)</td>
                                                    <td><input type="radio" id="pil_12_9_1" name="pil_12_9_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_9_2" name="pil_12_9_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_9_3" name="pil_12_9_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_9_4" name="pil_12_9_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_9_5" name="pil_12_9_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Pengembangan diri</td>
                                                    <td><input type="radio" id="pil_12_10_1" name="pil_12_10_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_10_2" name="pil_12_10_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_10_3" name="pil_12_10_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_10_4" name="pil_12_10_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_10_5" name="pil_12_10_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Kemampuan bekerja mandiri</td>
                                                    <td><input type="radio" id="pil_12_11_1" name="pil_12_11_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_11_2" name="pil_12_11_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_11_3" name="pil_12_11_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_11_4" name="pil_12_11_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_11_5" name="pil_12_11_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Kepemimpinan / Kemampuan Berorganisasi</td>
                                                    <td><input type="radio" id="pil_12_12_1" name="pil_12_12_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_12_2" name="pil_12_12_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_12_3" name="pil_12_12_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_12_4" name="pil_12_12_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_12_5" name="pil_12_12_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Kemampuan menulis</td>
                                                    <td><input type="radio" id="pil_12_13_1" name="pil_12_13_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_13_2" name="pil_12_13_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_13_3" name="pil_12_13_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_13_4" name="pil_12_13_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_13_5" name="pil_12_13_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Bekerja di bawah tekanan</td>
                                                    <td><input type="radio" id="pil_12_14_1" name="pil_12_14_1" value="1"></td>
                                                    <td><input type="radio" id="pil_12_14_2" name="pil_12_14_1" value="2"></td>
                                                    <td><input type="radio" id="pil_12_14_3" name="pil_12_14_1" value="3"></td>
                                                    <td><input type="radio" id="pil_12_14_4" name="pil_12_14_1" value="4"></td>
                                                    <td><input type="radio" id="pil_12_14_5" name="pil_12_14_1" value="5"></td>
                                                </tr>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q13">Bagaimana Anda menilai kualifikasi untuk melaksanakan pekerjaan saat ini </a></h4>
                                            </div>
                                            <div id="faq1_q13" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                <table class="table" style="width: 100%;">
                                                <tr>
                                                    <td style="width: 5%;">1</td>
                                                    <td>Kualifikasi dalam pekerjaan</td>
                                                    <td style="width: 20%;">
                                                        <label for="pil_13_1_1">
                                                            <input type="radio" id="pil_13_1_1" name="pil_13_1" value="1"> Over Qualified
                                                        </label>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <label for="pil_13_1_2">
                                                            <input type="radio" id="pil_13_1_2" name="pil_13_1" value="2"> Qualified
                                                        </label>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <label for="pil_13_1_3">
                                                            <input type="radio" id="pil_13_1_3" name="pil_13_1" value="3"> Under Qualified
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Kesesuaian bidang ilmu dengan pekerjaan saat ini</td>
                                                    <td style="width: 20%;">
                                                        <label for="pil_13_2_1">
                                                            <input type="radio" id="pil_13_2_1" name="pil_13_2" value="1"> Over Qualified
                                                        </label>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <label for="pil_13_2_2">
                                                            <input type="radio" id="pil_13_2_2" name="pil_13_2" value="2"> Qualified
                                                        </label>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <label for="pil_13_2_3">
                                                            <input type="radio" id="pil_13_2_3" name="pil_13_2" value="3"> Under Qualified
                                                        </label>
                                                    </td>
                                                </tr>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1" href="#faq1_q14">Tingkat perhatian institusi terhadap aspek kompetensi berikut pada saat kuliah </a></h4>
                                            </div>
                                            <div id="faq1_q14" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                <table class="table" style="width: 100%;">
                                                <tr>
                                                    <td colspan="7">SK: angat kurang, K: kurang, C: cukup, LC: Lebih dari cukup, SM: sangat memadai</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5%;">No</td>
                                                    <td style="width: 45%;">Kompetensi</td>
                                                    <td style="width: 10%;">SK</td>
                                                    <td style="width: 10%;">K</td>
                                                    <td style="width: 10%;">C</td>
                                                    <td style="width: 10%;">LC</td>
                                                    <td style="width: 10%;">SM</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Integritas (etika dan moral)</td>
                                                    <td><input type="radio" id="pil_14_1_1" name="pil_14_1_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_1_2" name="pil_14_1_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_1_3" name="pil_14_1_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_1_4" name="pil_14_1_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_1_5" name="pil_14_1_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Keahlian berdasarkan bidang ilmu (profesionalisme)</td>
                                                    <td><input type="radio" id="pil_14_2_1" name="pil_14_2_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_2_2" name="pil_14_2_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_2_3" name="pil_14_2_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_2_4" name="pil_14_2_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_2_5" name="pil_14_2_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Bahasa Inggris</td>
                                                    <td><input type="radio" id="pil_14_3_1" name="pil_14_3_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_3_2" name="pil_14_3_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_3_3" name="pil_14_3_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_3_4" name="pil_14_3_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_3_5" name="pil_14_3_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Penggunaan Teknologi Informasi</td>
                                                    <td><input type="radio" id="pil_14_4_1" name="pil_14_4_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_4_2" name="pil_14_4_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_4_3" name="pil_14_4_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_4_4" name="pil_14_4_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_4_5" name="pil_14_4_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Kemampuan komunikasi</td>
                                                    <td><input type="radio" id="pil_14_5_1" name="pil_14_5_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_5_2" name="pil_14_5_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_5_3" name="pil_14_5_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_5_4" name="pil_14_5_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_5_5" name="pil_14_5_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Kerjasama tim</td>
                                                    <td><input type="radio" id="pil_14_6_1" name="pil_14_6_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_6_2" name="pil_14_6_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_6_3" name="pil_14_6_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_6_4" name="pil_14_6_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_6_5" name="pil_14_6_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Kewirausahaan</td>
                                                    <td><input type="radio" id="pil_14_7_1" name="pil_14_7_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_7_2" name="pil_14_7_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_7_3" name="pil_14_7_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_7_4" name="pil_14_7_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_7_5" name="pil_14_7_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Pemecahan masalah</td>
                                                    <td><input type="radio" id="pil_14_8_1" name="pil_14_8_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_8_2" name="pil_14_8_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_8_3" name="pil_14_8_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_8_4" name="pil_14_8_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_8_5" name="pil_14_8_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Hubungan antar manusia (human relation)</td>
                                                    <td><input type="radio" id="pil_14_9_1" name="pil_14_9_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_9_2" name="pil_14_9_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_9_3" name="pil_14_9_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_9_4" name="pil_14_9_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_9_5" name="pil_14_9_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Pengembangan diri</td>
                                                    <td><input type="radio" id="pil_14_10_1" name="pil_14_10_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_10_2" name="pil_14_10_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_10_3" name="pil_14_10_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_10_4" name="pil_14_10_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_10_5" name="pil_14_10_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Kemampuan bekerja mandiri</td>
                                                    <td><input type="radio" id="pil_14_11_1" name="pil_14_11_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_11_2" name="pil_14_11_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_11_3" name="pil_14_11_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_11_4" name="pil_14_11_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_11_5" name="pil_14_11_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Kepemimpinan / Kemampuan Berorganisasi</td>
                                                    <td><input type="radio" id="pil_14_12_1" name="pil_14_12_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_12_2" name="pil_14_12_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_12_3" name="pil_14_12_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_12_4" name="pil_14_12_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_12_5" name="pil_14_12_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Kemampuan menulis</td>
                                                    <td><input type="radio" id="pil_14_13_1" name="pil_14_13_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_13_2" name="pil_14_13_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_13_3" name="pil_14_13_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_13_4" name="pil_14_13_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_13_5" name="pil_14_13_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Bekerja di bawah tekanan</td>
                                                    <td><input type="radio" id="pil_14_14_1" name="pil_14_14_1" value="1"></td>
                                                    <td><input type="radio" id="pil_14_14_2" name="pil_14_14_1" value="2"></td>
                                                    <td><input type="radio" id="pil_14_14_3" name="pil_14_14_1" value="3"></td>
                                                    <td><input type="radio" id="pil_14_14_4" name="pil_14_14_1" value="4"></td>
                                                    <td><input type="radio" id="pil_14_14_5" name="pil_14_14_1" value="5"></td>
                                                </tr>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Belum Bekerja -->
                                    <div id="faq2" class="panel-group" style="display: none;">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1">Kegiatan Anda Saat ini (bisa lebih dari 1 pilihan)</a></h4>
                                            </div>
                                            <div id="faq2_q1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="checkbox">
                                                        <label for="pil_15_1">
                                                            <input type="checkbox" id="pil_15_1" name="pil_15_1" value="1"> Tidak bekerja dan tidak mencari pekerjaan
                                                        </label><br>
                                                        <label for="pil_15_2">
                                                            <input type="checkbox" id="pil_15_2" name="pil_15_2" value="2"> Mengurus rumah tangga
                                                        </label><br>

                                                        <label for="pil_15_3">
                                                            <input type="checkbox" id="pil_15_3" name="pil_15_3" value="3"> Sedang mencari pekerjaan
                                                        </label><br>
                                                        <label for="pil_15_4">
                                                            <input type="checkbox" id="pil_15_4" name="pil_15_4" value="4"> Melanjutkan studi
                                                        </label>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2">Bagi yang sedang mencari pekerjaan, informasi pekerjaan berasal dari (bisa lebih dari 1 pilihan)</a></h4>
                                            </div>
                                            <div id="faq2_q2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="checkbox">
                                                        <label for="pil_16_1">
                                                            <input type="checkbox" id="pil_16_1" name="pil_16_1" value="1"> Pengumuman lowongan pekerjaan pada surat kabar
                                                        </label><br>
                                                        <label for="pil_16_2">
                                                            <input type="checkbox" id="pil_16_2" name="pil_16_2" value="2"> Informasi internal perusahaan
                                                        </label><br>
                                                        <label for="pil_16_3">
                                                            <input type="checkbox" id="pil_16_3" name="pil_16_3" value="3"> Career center FEB Unismuh Makassar
                                                        </label><br>
                                                        <label for="pil_16_4">
                                                            <input type="checkbox" id="pil_16_4" name="pil_16_4" value="4"> Perusahaan / agen perekrut tenaga kerja
                                                        </label><br>

                                                        <label for="pil_16_5">
                                                            <input type="checkbox" id="pil_16_5" name="pil_16_5" value="5"> Dinas tenaga kerja
                                                        </label><br>
                                                        <label for="pil_16_6">
                                                            <input type="checkbox" id="pil_16_6" name="pil_16_6" value="6"> Informasi teman
                                                        </label><br>
                                                        <label for="pil_16_7">
                                                            <input type="checkbox" id="pil_16_7" name="pil_16_7" value="7"> Pengumuman di internet
                                                        </label><br>
                                                        <label for="pil_16_8">
                                                            <input type="checkbox" id="pil_16_8" name="pil_16_8" value="8"> Lamaran langsung ke prusahaan
                                                        </label><br>
                                                        <label for="pil_16_9">
                                                            <input type="checkbox" id="pil_16_9" name="pil_16_9" value="9"> Alumni
                                                        </label><br>
                                                        <label for="pil_16_10">
                                                            <input type="checkbox" id="pil_16_10" name="pil_16_10" value="10"> Kontak personal/pribadi 
                                                        </label><br>
                                                        <label for="pil_16_11">
                                                            <input type="checkbox" id="pil_16_11" name="pil_16_11" value="11"> Bursa kerja
                                                        </label><br>


                                                        <label for="pil_16_12">
                                                            <input type="checkbox" id="pil_16_12" name="pil_16_12" value="12"> Kerabat / Keluarga
                                                        </label>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3">Jumlah lamaran kerja yang pernah dikirimkan sampai saat ini</a></h4>
                                            </div>
                                            <div id="faq2_q3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_17_1">
                                                            <input type="radio" id="pil_17_1" name="pil_17" value="1"> ≤ 5
                                                        </label><br>
                                                        <label for="pil_17_2">
                                                            <input type="radio" id="pil_17_2" name="pil_17" value="2"> 6-10
                                                        </label><br>
                                                        <label for="pil_17_3">
                                                            <input type="radio" id="pil_17_3" name="pil_17" value="3"> 21- 25
                                                        </label><br>
                                                        <label for="pil_17_4">
                                                            <input type="radio" id="pil_17_4" name="pil_17" value="4"> 11-15
                                                        </label><br>
                                                        <label for="pil_17_5">
                                                            <input type="radio" id="pil_17_5" name="pil_17" value="5"> 16-20
                                                        </label><br>
                                                        <label for="pil_17_6">
                                                            <input type="radio" id="pil_17_6" name="pil_17" value="6"> >25
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4">Jumlah lamaran kerja yang mendapatkan respon</a></h4>
                                            </div>
                                            <div id="faq2_q4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_18_1">
                                                            <input type="radio" id="pil_18_1" name="pil_18" value="1"> ≤ 5
                                                        </label><br>
                                                        <label for="pil_18_2">
                                                            <input type="radio" id="pil_18_2" name="pil_18" value="2"> 6-10
                                                        </label><br>
                                                        <label for="pil_18_3">
                                                            <input type="radio" id="pil_18_3" name="pil_18" value="3"> 21- 25
                                                        </label><br>
                                                        <label for="pil_18_4">
                                                            <input type="radio" id="pil_18_4" name="pil_18" value="4"> 11-15
                                                        </label><br>
                                                        <label for="pil_18_5">
                                                            <input type="radio" id="pil_18_5" name="pil_18" value="5"> 16-20
                                                        </label><br>
                                                        <label for="pil_18_6">
                                                            <input type="radio" id="pil_18_6" name="pil_18" value="6"> >25
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q5">Sumber biaya hidup selama tidak bekerja</a></h4>
                                            </div>
                                            <div id="faq2_q5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="checkbox">
                                                        <label for="pil_19_1">
                                                            <input type="checkbox" id="pil_19_1" name="pil_19_1" value="1"> Tabungan
                                                        </label><br>
                                                        <label for="pil_19_2">
                                                            <input type="checkbox" id="pil_19_2" name="pil_19_2" value="2"> Keluarga
                                                        </label><br>

                                                        <label for="pil_19_3">
                                                            <input type="checkbox" id="pil_19_3" name="pil_19_3" value="3"> Pinjaman
                                                        </label><br>
                                                        <label for="pil_19_4">
                                                            <input type="checkbox" id="pil_19_4" name="pil_19_4" value="4"> Sumber Lainnya
                                                        </label>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq2" href="#faq2_q6">Berikan opini Anda perlunya kegiatan berikut untuk membantu mendapatkan pekerjaan. Isi sebanyak yang anda lakukan</a></h4>
                                            </div>
                                            <div id="faq2_q6" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                <table class="table" style="width: 100%;">
                                                <tr>
                                                    <td colspan="7">TP: tidak penting, KP: kurang penting, B: biasa, P: penting, SP: sangat penting</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5%;">No</td>
                                                    <td style="width: 45%;">Kegiatan</td>
                                                    <td style="width: 10%;">TP</td>
                                                    <td style="width: 10%;">KP</td>
                                                    <td style="width: 10%;">B</td>
                                                    <td style="width: 10%;">P</td>
                                                    <td style="width: 10%;">SP</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Membuat lamaran pekerjaan</td>
                                                    <td><input type="radio" id="pil_20_1_1" name="pil_20_1_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_1_2" name="pil_20_1_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_1_3" name="pil_20_1_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_1_4" name="pil_20_1_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_1_5" name="pil_20_1_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Mengunjungi Bursa Kerja</td>
                                                    <td><input type="radio" id="pil_20_2_1" name="pil_20_2_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_2_2" name="pil_20_2_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_2_3" name="pil_20_2_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_2_4" name="pil_20_2_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_2_5" name="pil_20_2_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Kursus Bahasa Inggris</td>
                                                    <td><input type="radio" id="pil_20_3_1" name="pil_20_3_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_3_2" name="pil_20_3_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_3_3" name="pil_20_3_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_3_4" name="pil_20_3_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_3_5" name="pil_20_3_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Mengikuti Bimbingan Karir</td>
                                                    <td><input type="radio" id="pil_20_4_1" name="pil_20_4_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_4_2" name="pil_20_4_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_4_3" name="pil_20_4_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_4_4" name="pil_20_4_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_4_5" name="pil_20_4_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Belajar membuat riwayat hidup</td>
                                                    <td><input type="radio" id="pil_20_5_1" name="pil_20_5_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_5_2" name="pil_20_5_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_5_3" name="pil_20_5_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_5_4" name="pil_20_5_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_5_5" name="pil_20_5_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Belajar teknik wawancara kerja</td>
                                                    <td><input type="radio" id="pil_20_6_1" name="pil_20_6_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_6_2" name="pil_20_6_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_6_3" name="pil_20_6_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_6_4" name="pil_20_6_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_6_5" name="pil_20_6_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Kursus keterampilan</td>
                                                    <td><input type="radio" id="pil_20_7_1" name="pil_20_7_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_7_2" name="pil_20_7_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_7_3" name="pil_20_7_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_7_4" name="pil_20_7_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_7_5" name="pil_20_7_1" value="5"></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Menghubungi career center</td>
                                                    <td><input type="radio" id="pil_20_8_1" name="pil_20_8_1" value="1"></td>
                                                    <td><input type="radio" id="pil_20_8_2" name="pil_20_8_1" value="2"></td>
                                                    <td><input type="radio" id="pil_20_8_3" name="pil_20_8_1" value="3"></td>
                                                    <td><input type="radio" id="pil_20_8_4" name="pil_20_8_1" value="4"></td>
                                                    <td><input type="radio" id="pil_20_8_5" name="pil_20_8_1" value="5"></td>
                                                </tr>
                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="sub-header"><strong>II. Himpunan Alumni</strong></h4>
                                    <div id="faq3" class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1">Apakah anda merupakan anggota aktif dari Ikatan Alumni FEB ?</a></h4>
                                            </div>
                                            <div id="faq3_q1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="radio">
                                                        <label for="pil_21_1">
                                                            <input type="radio" id="pil_21_1" name="pil_21" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_21_2">
                                                            <input type="radio" id="pil_21_2" name="pil_21" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2">Kontribusi yang pernah diberikan melalui himpunan alumni ?</a></h4>
                                            </div>
                                            <div id="faq3_q2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    1. Sumbangan Dana
                                                    <div class="radio">
                                                        <label for="pil_22_1">
                                                            <input type="radio" id="pil_22_1" name="pil_22" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_22_2">
                                                            <input type="radio" id="pil_22_2" name="pil_22" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                    2. Fasilitas (alat - buku)
                                                    <div class="radio">
                                                        <label for="pil_23_1">
                                                            <input type="radio" id="pil_23_1" name="pil_23" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_23_2">
                                                            <input type="radio" id="pil_23_2" name="pil_23" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                    3. Terlibat dalam kegiatan akademik
                                                    <div class="radio">
                                                        <label for="pil_24_1">
                                                            <input type="radio" id="pil_24_1" name="pil_24" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_24_2">
                                                            <input type="radio" id="pil_24_2" name="pil_24" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                    4. Terlibat dalam kegiatan non akademik
                                                    <div class="radio">
                                                        <label for="pil_25_1">
                                                            <input type="radio" id="pil_25_1" name="pil_25" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_25_2">
                                                            <input type="radio" id="pil_25_2" name="pil_25" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                    5. Membangun jejaring dengan universitas
                                                    <div class="radio">
                                                        <label for="pil_26_1">
                                                            <input type="radio" id="pil_26_1" name="pil_26" value="1"> Ya
                                                        </label><br>
                                                        <label for="pil_26_2">
                                                            <input type="radio" id="pil_26_2" name="pil_26" value="2"> Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="sub-header"><strong>III. SARAN</strong></h4>
                                        <div id="faq4" class="panel-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="fa fa-angle-right"></i> <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4" href="#faq4_q1">Berdasarkan pengalaman pada pekerjaan Anda saat ini, apa saran yang anda berikan untuk peningkatan kualitas pembelajaran di Fakultas Ekonomi dan Bisnis (FEB) Universitas Muhammadiyah Makassar ?</a></h4>
                                            </div>
                                            <div id="faq4_q1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="checkbox">
                                                        <label for="pil_27_1">
                                                            <input type="checkbox" id="pil_27_1" name="pil_27_1" value="1"> Penambahan bahan Pustaka
                                                        </label><br>
                                                        <label for="pil_27_2">
                                                            <input type="checkbox" id="pil_27_2" name="pil_27_2" value="2"> Pengembangan softskill
                                                        </label><br>
                                                        <label for="pil_27_3">
                                                            <input type="checkbox" id="pil_27_3" name="pil_27_3" value="3"> Menjaga rasio dosen: mahasiswa yang ideal
                                                        </label><br>
                                                        <label for="pil_27_4">
                                                            <input type="checkbox" id="pil_27_4" name="pil_27_4" value="4"> Bimbingan karir
                                                        </label><br>
                                                        <label for="pil_27_5">
                                                            <input type="checkbox" id="pil_27_5" name="pil_27_5" value="5"> Bahan kuliah yang lebih kini
                                                        </label><br>
                                                        <label for="pil_27_6">
                                                            <input type="checkbox" id="pil_27_6" name="pil_27_6" value="6"> Peningkatan kualitas SDM
                                                        </label><br>
                                                        <label for="pil_27_7">
                                                            <input type="checkbox" id="pil_27_7" name="pil_27_7" value="7"> Peningkatan sarana / prasarana
                                                        </label><br>
                                                        <label for="pil_27_8">
                                                            <input type="checkbox" id="pil_27_8" name="pil_27_8" value="8"> Membangun jejaring dengan industri
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
        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url();?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo base_url();?>assets/js/pages/readyTasks.js"></script>
        <script>$(function(){ ReadyTasks.init(); });</script>
        <script>
            $(document).ready(function() {
                $("input[name='pil_kerja']").on("change", function()
                {
                    var isi = $("input[name=pil_kerja]:checked").val();
                    if(isi==1) {
                        $("#faq1").show(1000);
                        $("#faq2").hide(1000);
                    } else {
                        $("#faq2").show(1000);
                        $("#faq1").hide(1000);
                    }
                });
            });
        </script>
    </body>
</html>