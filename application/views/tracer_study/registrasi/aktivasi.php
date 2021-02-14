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
                            <li><i class="fa fa-check fa-li text-success"></i> Masukkan email anda yang aKtif</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Kode Aktivasi akan dikirim ke email anda.</li>
                            <li><i class="fa fa-check fa-li text-success"></i> Masukkan kode aktivasi untuk memulai mengisi kuisioner</li>
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
                    <div id="login-container">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                            <h1><strong>Aktivasi Akun</strong></h1>
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
                            <form action="<?php echo base_url();?>tracer_study/aktivasi_kode" method="post" id="form-register" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                            <input type="text" id="inp_kode" name="inp_kode" class="form-control input-lg" placeholder="Kode Aktivasi" maxlength="6" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group form-actions">
                                    <div class="col-xs-12 text-right">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Aktivasi Akun</button>
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
</script>