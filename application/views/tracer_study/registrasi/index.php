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
                <div class="col-sm-12">
                    <!-- Login Container -->
                    <div style="top : 10px; position:relative; padding-top: 20px; padding-right: 0px; padding-bottom: 0px; padding-left:0px; background: #171a27;">
                        <!-- Login Title -->
                        <div class="login-title text-center">
                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo-mini.ico" style="width: 50px;"><a>
                            <h1 style="color: white;"><strong>Form Registrasi</strong></h1>
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
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-xs-12 checkbox text-right">
                                            <label for="lupa_nim">
                                                <input type="checkbox" id="lupa_nim" name="lupa_nim" value="1" onclick="goLupaNim(this)"> Klik Jika Lupa NIM
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group" id="inp_lp_nim" style="display: none;">
                                        <div class="col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="gi gi-edit"></i></span>
                                                <select class="form-control" name="pilihan_prodi" id="pilihan_prodi">
                                                <option value="1">Ekonomi Pembangunan</option>
                                                <option value="2">Manajemen</option>
                                                <option value="3">Akuntansi</option>
                                                <option value="4">Ekonomi Islam</option>
                                                <option value="5">D3 Perpajakan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="inp_ingat_nim">
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
                                                    <input type="hidden" name="id_prodi" id="id_prodi">
                                                </div>
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
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-xs-12 checkbox text-right">
                                            
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
                                            <div class="input-group" id="frm_passwd">
                                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                                <input type="password" id="inppassword" name="inppassword" class="form-control input-lg" placeholder="Password" maxlength="50" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="input-group" id="frm_passwdverify">
                                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                                <input type="password" id="inppassword_verify" name="inppassword_verify" class="form-control input-lg" placeholder="Verify Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-xs-12 text-right">
                                            <button type="submit" class="btn btn-sm btn-success" id="tbl_reg" disabled><i class="fa fa-plus"></i> Register</button>
                                            <button type="button" class="btn btn-sm btn-danger" id="tbl_login" style="display: none;" onclick="gotoTracer()"><i class="fa fa-question"></i> Form Tracer Study</button>
                                        </div>
                                        <div class="col-xs-12" id="pesan_1" style="display: none;">
                                            <div class="alert alert-info alert-dismissible" id="success-alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <h4><i class="icon fa fa-info"></i> Konfirmasi !</h4>
                                                Akun anda sudah aktif dan telah mengisi kuisioner tracer study.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <!-- END Register Form -->
                        </div>
                        <!-- END Login Block -->
                    </div>
                    <!-- END Login Container -->
                </div>
                <div class="col-sm-12">
                    <div style="top : 10px; position: relative;" class="text-center">
                        <img src="<?php echo base_url();?>assets/img/alur_tracer_study.jpg" class="img-responsive">
                        <!-- END Footer -->
                    </div>
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
    var goLupaNim = function(el)
    {
        var stscheck = $(el).prop("checked");
        if(stscheck==true) {
            $("#inp_lp_nim").show(1000);
            $("#inp_ingat_nim").hide(1000);
            $("#tbl_reg").attr("disabled", false);
            $("#inp_nim").attr("required", false);
            $("#inp_prodi").attr("required", false);
        } else {
            $("#inp_lp_nim").hide(1000);
            $("#inp_ingat_nim").show(1000);
            $("#tbl_reg").attr("disabled", true);
            $("#inp_nim").attr("required", true);
            $("#inp_prodi").attr("required", true);
        }
    }
    var getProdi = function(el)
    {
        var kode = $(el).val();
        var res = kode.substring(0, 5);
        if(res=="10571"){
            var ketprodi = "Ekonomi Pembangunan";
            var idprodi=1;
        } else if(res=="10572") {
            var ketprodi = "Manajemen";
            var idprodi=2;
        } else if(res=="10573"){
            var ketprodi = "Akuntansi";
            var idprodi=3;
        } else if(res=="10574") {
            var ketprodi = "Ekonomi Islam";
            var idprodi=4;
        } else if(res=="10575") {
            var ketprodi = "D3 Perpajakan";
            var idprodi=5;
        } else {
            var ketprodi = "";
            var idprodi="";
        }
        $("#inp_prodi").val(ketprodi);
        $("#id_prodi").val(idprodi);
        if(kode.length==12){
            $.ajax (
            {
                url : "<?php echo site_url();?>tracer_study/periksa_akun",
                type : "post",
                data : {kode:kode},
                success : function(d)
                {
                    var dt = d.split("-");
                    if(dt[0]==1){
                        $("#tbl_reg").show();
                        $("#tbl_reg").attr("disabled", false);
                        $("#inp_nama").attr("disabled", false);
                        $("#alumniemail").attr("disabled", false);
                        $("#inppassword").attr("disabled", false);
                        $("#inppassword_verify").attr("disabled", false);
                        $("#inp_nama").val("");
                        $("#alumniemail").val("");
                        $("#inppassword").val("");
                        $("#inppassword_verify").val("");
                        $("#frm_passwd").show();
                        $("#frm_passwdverify").show();
                        $("#tbl_login").hide();
                        $("pesan_1").hide();
                    } else {
                        $("#tbl_reg").hide();
                        $("#tbl_reg").attr("disabled", true);
                        $("#inp_nama").attr("disabled", true);
                        $("#alumniemail").attr("disabled", true);
                        $("#inppassword").attr("disabled", true);
                        $("#inppassword_verify").attr("disabled", true);
                        var dt2 = dt[1].split("#");
                        $("#inp_nama").val(dt2[0]);
                        $("#alumniemail").val(dt2[1]);
                        $("#inppassword").val("");
                        $("#inppassword_verify").val("");
                        $("#frm_passwd").hide();
                        $("#frm_passwdverify").hide();
                        if(dt2[2]==1) {
                            $("pesan_1").show();
                            $("#tbl_login").hide();
                        } else {
                            $("#tbl_login").show();
                            $("pesan_1").hide();
                        }
                    }
                }
            });
        }
    }
    var gotoTracer = function()
    {
        window.location.assign("<?php echo base_url();?>tracer_study/login");
    }
</script>