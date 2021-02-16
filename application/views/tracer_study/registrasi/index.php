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
    <body style="background-color: #394263;">
        <!-- Login Alternative Row -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div id="login-alt-container">
                        <!-- Title -->
                        <h1 class="push-top-bottom">
                            <strong>Tracer Study FEB Unismuh Makassar</strong><br>
                            <small>SELAMAT DATANG</small><br>
                            <small>Bagi Alumni Universitas Muhammadiyah Makassar <br>
                            Fakultas Ekonomi dan Bisnis siapkan diri anda untuk <br>
                            mengisi kuisioner tracer study</small>
                        </h1>
                        <!-- END Title -->

                        <!-- Key Features -->
                        <ul class="fa-ul text-muted">
                            <li><i class="fa fa-check fa-li text-success"></i> 10571xxxxxxx -> Ekonomi Pembanguan </li>
                            <li><i class="fa fa-check fa-li text-success"></i> 10572xxxxxxx -> Menejamen</li>
                            <li><i class="fa fa-check fa-li text-success"></i> 10573xxxxxxx -> Akuntansi</li>
                            <li><i class="fa fa-check fa-li text-success"></i> 10574xxxxxxx -> Ekonomi Islam</li>
                            <li><i class="fa fa-check fa-li text-success"></i> 10575xxxxxxx -> D3 Perpajakan</li>
                        </ul>
                        <!-- END Key Features -->

                        <!-- Footer -->
                        <footer class="text-muted push-top-bottom">
                            <small><?php echo date("Y");?></span> &copy; <a href="https://career.feb.unismuh.ac.id" target="_new">CareerCenterFEB</a></small>
                        </footer>
                        <!-- END Footer -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- Login Container -->
                    <div id="login-container" style="top : 100px">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                            <h1><strong>Form Registrasi</strong></h1>
                        </div>
                        <!-- END Login Title -->

                        <!-- Login Block -->
                        <div class="block push-bit">
                            <?php if ($this->session->flashdata('email_sent')): ?>
                            <div class="alert alert-info alert-dismissible" id="success-alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h4><i class="icon fa fa-info"></i> Konfirmasi !</h4>
                              <?php echo $this->session->flashdata('email_sent'); ?>
                            </div>
                          <?php endif; ?>
                            <!-- Login Form -->
                            <form action="<?php echo base_url();?>tracer_study/simpan_registrasi" method="post" id="form-register" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-edit"></i></span>
                                            <input type="text" id="inp_nim" name="inp_nim" class="form-control input-lg" placeholder="Nomor Induk Mahasiswa" maxlength="12" minlength="12" required oninput="getProdi(this)">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-edit"></i></span>
                                            <input type="text" id="inp_prodi" name="inp_prodi" class="form-control input-lg" placeholder="Program Studi" required readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-edit"></i></span>
                                            <input type="text" id="inp_nama" name="inp_nama" class="form-control input-lg" placeholder="Nama Lengkap Anda" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="email" id="alumniemail" name="alumniemail" class="form-control input-lg" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="inppassword" name="inppassword" class="form-control input-lg" placeholder="Password" maxlength="20" minlength="5" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="inppassword_verify" name="inppassword_verify" class="form-control input-lg" placeholder="Verify Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-12 text-right">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Register Form -->
                        </div>
                        <!-- END Login Block -->
                    </div>
                    <!-- END Login Container -->
                </div>
            </div>
        </div>
        <!-- END Login Alternative Row -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?php echo base_url();?>assets/js/vendor/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.js"></script>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function()
    {
        window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    });
    var getProdi = function(el)
    {
        var kode = $(el).val();
        var res = kode.substring(0, 5);
        if(res=="10571"){
            var ketprodi = "Ekonomi Pembangunan";
        } else if(res=="10572") {
            var ketprodi = "Manajemen";
        } else if(res=="10573"){
            var ketprodi = "Akuntansi";
        } else if(res=="10574") {
            var ketprodi = "Ekonomi Islam";
        } else if(res=="10575") {
            var ketprodi = "D3 Perpajakan";
        } else {
            var ketprodi = "";
        }
        $("#inp_prodi").val(ketprodi);
    }
</script>