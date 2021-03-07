<!-- Page content -->
<div id="page-content">
    <!-- Page Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="gi gi-table"></i>Setting | <strong>Rubah Password</strong></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php if ($this->session->flashdata('konfirm')): ?>
            <div class="alert alert-info alert-dismissible" id="success-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-success"></i> Konfirmasi !</h4>
              <?php echo $this->session->flashdata('konfirm'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <form action="<?php echo base_url();?>panel_career/rubah_password" method="post" onsubmit="return konfirm()">
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
                    <h2>Tentang <strong><?php echo $this->session->userdata("nmalumni");?></strong></h2>
                </div>
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"><strong>Masukkan Password Lama Anda</strong></td>
                            <td>
                            <input type="hidden" id="tmp_pass_lm" value="<?php echo $res->passwd;?>">
                            <input type="password" class="form-control" name="inp_pass_lm" id="inp_pass_lm" maxlength="50" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Masukkan Password Baru Anda</td>
                            <td>
                            <input type="password" class="form-control" name="inp_pass_br_1" id="inp_pass_br_1" maxlength="50" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Masukkan Kembali Password Baru Anda</td>
                            <td>
                            <input type="password" class="form-control" name="inp_pass_br_2" id="inp_pass_br_2" maxlength="50" required>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                        <button type="button" class="btn btn-primary" id="tbl_verifikasi"><i class="fa fa-check"></i> Verifikasi</button>
                        <button type="submit" class="btn btn-success" name="simpan_profil" id="simpan_profil" disabled>Update Data Profil</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        </form>
    </div>
</div>
<!-- END Page Content -->
<script type="text/javascript">
  $(document).ready(function() 
  {
    window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    $("#tbl_verifikasi").on("click", function()
        {
            var ps_lm_temp = $("#tmp_pass_lm").val();
            var ps_lm = $("#inp_pass_lm").val();
            var ps_br_1 = $("#inp_pass_br_1").val();
            var ps_br_2 = $("#inp_pass_br_2").val();
            if(ps_lm=="")
            {
                alert("Masukkan password lama anda");
                $("#inp_pass_lm").focus();
            } else if(ps_br_1=="")
            {
                alert("Kolom penulisan password baru masih kosong");
                $("#inp_pass_br_1").focus();
            } else if(ps_br_2=="")
            {
                alert("Kolom penulisan ulang password baru masih kosong");
                $("#inp_pass_br_1").focus();
            } else {
                $.ajax (
                {
                    url : "<?php echo site_url();?>panel_career/get_md5",
                    type : "post",
                    data : {ps_lm:ps_lm},
                    success : function(d)
                    {
                        if(d==ps_lm_temp)
                        {
                            if(ps_br_1==ps_br_2)
                            {
                                $("#inp_pass_lm").attr("disabled", true);
                                $("#inp_pass_br_1").attr("disabled", true);
                                $("#inp_pass_br_2").attr("disabled", true);
                                $("#simpan_profil").attr("disabled", false);
                                $("#tbl_verifikasi").attr("disabled", true);
                            } else {
                                alert("Penulisan ulang password baru anda salah..");
                                return false;
                            }
                        } else {
                            alert("password lama yang anda masukkan salah");
                            return false;
                        }
                    }
                 });
            }
        });
    
  });
  function konfirm()
  {
    var psn = confirm("Yakin akan menyimpan data ?");
    if(psn==true)
    {
        return true;
    } else {
      return false;
    }
  }
</script>