<!-- Page content -->
<div id="page-content">
    <!-- Page Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="gi gi-table"></i>Edit Data <strong>Profil</strong></h1>
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
        <form enctype="multipart/form-data" action="<?php echo base_url();?>panel_career/simpan_data_profil" method="post" onsubmit="return konfirm()">
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
                        <hr>
                        <div class="form-group row">
                            <label class="col-md-5 control-label">Upload Gambar ?</label>
                            <div class="col-md-7">
                                <label class="radio-inline" for="pil_ya">
                                    <input type="radio" id="pil_ya" name="upload_gambar" value="1" <?php echo (!empty($res->foto)) ? "checked" : "";?> > Ya
                                </label>
                                <label class="radio-inline" for="pil_tidak">
                                    <input type="radio" id="pil_tidak" name="upload_gambar" value="2" <?php echo (empty($res->foto)) ? "checked" : "";?>> Tidak
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div id="area_upload" style="<?php echo (!empty($res->foto)) ? '' : 'display: none;'?>">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="file" name="inp_gambar" id="inp_gambar" class="form-control" onchange="loadFile_file(this)">
                                </div>
                            </div>
                        </div>
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
                            <td>
                            <input type="text" class="form-control" name="inp_tahun_lulus" id="inp_tahun_lulus" value="<?php echo $res->tahun_lulus;?>" maxlength="4" required>
                        </td>
                        </tr>
                        <tr>
                            <td><strong>Tempat/Tanggal Lahir</strong></td>
                            <td>
                            <div class="col-sm-8 row">
                            <input type="text" class="form-control" name="inp_tempat_lahir" id="inp_tempat_lahir" value="<?php echo $res->tempat_lahir;?>" maxlength="100" required>
                            </div>
                            <div class="col-sm-4 row">
                            <input type="date" class="form-control" name="inp_tanggal_lahir" id="inp_tanggal_lahir" value="<?php echo $res->tgl_lahir;?>" maxlength="100" required>
                            </div>
                        </td>
                        </tr>
                        <tr>
                            <td><strong>Alamat Sekarang</strong></td>
                            <td>
                            <input type="text" class="form-control" name="inp_alamat" id="inp_alamat" value="<?php echo $res->domisili;?>" maxlength="100" required>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_provinsi">Provinsi</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_provinsi" id="pil_provinsi" data-placeholder="Pilihan Provinsi" required>
                                    <option></option>
                                    <?php 
                                    foreach($provinsi as $prov){ 
                                        if($prov['id']==$res->id_prov_domisili)
                                        {
                                            echo "<option value=".$prov['id']." selected>".strtoupper($prov['nama_provinsi'])."</option>";
                                        } else {
                                            echo "<option value=".$prov['id'].">".strtoupper($prov['nama_provinsi'])."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_kabupaten">Kabupaten/Kota</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_kabupaten" id="pil_kabupaten" data-placeholder="Pilihan Kabupaten/Kota" required>
                                    <option></option>
                                    <?php 
                                    foreach($kabupaten as $kab){ 
                                        if($kab['id']==$res->id_kab_domisi) {
                                            echo "<option value=".$kab['id']." selected>".strtoupper($kab['nama_kabupaten'])."</option>";
                                        } else {
                                            echo "<option value=".$kab['id'].">".strtoupper($kab['nama_kabupaten'])."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_kabupaten">Kecamatan</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_kecamatan" id="pil_kecamatan" data-placeholder="Pilihan Kecamatan" required>
                                    <option></option>
                                    <?php 
                                    foreach($kecamatan as $kec){ 
                                        if($kec['id']==$res->id_kec_domisili) {
                                            echo "<option value=".$kec['id']." selected>".strtoupper($kec['nama_kecamatan'])."</option>";
                                        } else {
                                            echo "<option value=".$kec['id'].">".strtoupper($kec['nama_kecamatan'])."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_kelurahan">Kelurahan</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_kelurahan" id="pil_kelurahan" data-placeholder="Pilihan Kelurahan" required>
                                    <option></option>
                                    <?php 
                                    foreach($kelurahan as $kel){ 
                                        if($kel['id']==$res->id_kel_domisili) {
                                            echo "<option value=".$kel['id']." selected>".strtoupper($kel['nama_kelurahan'])."</option>";
                                        } else {
                                            echo "<option value=".$kel['id'].">".strtoupper($kel['nama_kelurahan'])."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                        </td>
                        </tr>
                        <tr>
                            <td><strong>No.Telepon</strong></td>
                            <td><input type="text" class="form-control" name="inp_no_telepon" id="inp_no_telepon" value="<?php echo $res->no_telepon;?>" maxlength="50"></td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td><input type="email" class="form-control" name="inp_email" id="inp_email" value="<?php echo $res->email;?>" maxlength="150" required></td>
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
                            <td style="width: 70%;">
                            <input type="text" class="form-control" name="inp_nama_pt_akhir" id="inp_nama_pt_akhir" value="<?php echo $res->nama_pt_akhir;?>" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td><strong>Jenjang Pendidikan</strong></td>
                            <td>
                            <select class="form-control select-select2" name="pil_pend_akhir" id="pil_pend_akhir" data-placeholder="Pilihan Jenjang Pendidikan Akhir">
                            <option></option>
                            <?php 
                            $arr_jenjang = array("1"=>"Sarjana", "2"=>"Magister", "3"=>"Doktor");
                            foreach($arr_jenjang as $key => $jenjang){ 
                                if($key==$res->id_pendidikan_akhir) {
                                    echo "<option value=".$key." selected>".strtoupper($jenjang)."</option>";
                                } else {
                                    echo "<option value=".$key.">".strtoupper($jenjang)."</option>";
                                }
                            }
                            ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Jurusan</strong></td>
                            <td><input type="text" class="form-control" name="inp_jurusan" id="inp_jurusan" value="<?php echo $res->jurusan_prodi_akhir;?>" maxlength="200">
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Status Pendidikan Akhir</strong></td>
                            <td>
                            <select class="form-control select-select2" name="pil_status_pend_akhir" id="pil_status_pend_akhir" data-placeholder="Pilihan Jenjang Pendidikan Akhir">
                            <option></option>
                            <?php 
                            $arr_status_pend = array("1"=>"Belum Selesai", "2"=>"Selesai");
                            foreach($arr_status_pend as $key => $status){ 
                                if($key==$res->status_pend_akhir) {
                                    echo "<option value=".$key." selected>".strtoupper($status)."</option>";
                                } else {
                                    echo "<option value=".$key.">".strtoupper($status)."</option>";
                                }
                            }
                            ?>
                            </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="block-title">
                    <h2>Pekerjaan Anda Saat ini</h2>
                </div>
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 30%;"><strong>Apakah anda sudah bekerja ?</strong></td>
                            <td style="width: 70%;">
                            <div class="form-group row">
                                <div class="col-md-12">
                                <label class="radio-inline" for="pil_ya">
                                    <input type="radio" id="pil_ya" name="pil_kerja" value="1" <?php echo ($res->bekerja==1) ? "checked" : "";?>> Bekerja
                                </label>
                                <label class="radio-inline" for="pil_tidak">
                                    <input type="radio" id="pil_tidak" name="pil_kerja" value="2" <?php echo ($res->bekerja==2) ? "checked" : "";?>> Belum Bekerja
                                </label>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Nama Instansi</strong></td>
                            <td>
                            <input type="text" class="form-control" name="inp_nama_instansi" id="inp_nama_instansi" value="<?php echo $res->nama_instansi;?>" maxlength="200">
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Alamat Instansi</strong></td>
                            <td>
                            <input type="text" class="form-control" name="inp_alamat_instansi" id="inp_alamat_instansi" value="<?php echo $res->alamat_instansi;?>" maxlength="200">
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_provinsi_ins">Provinsi</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_provinsi_ins" id="pil_provinsi_ins" data-placeholder="Pilihan Provinsi">
                                    <option></option>
                                    <?php 
                                    foreach($provinsi as $prov){ 
                                        if($prov['id']==$res->id_prov_instansi)
                                        {
                                            echo "<option value=".$prov['id']." selected>".strtoupper($prov['nama_provinsi'])."</option>";
                                        } else {
                                            echo "<option value=".$prov['id'].">".strtoupper($prov['nama_provinsi'])."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_kabupaten_ins">Kabupaten/Kota</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_kabupaten_ins" id="pil_kabupaten_ins" data-placeholder="Pilihan Kabupaten/Kota">
                                    <option></option>
                                    <?php 
                                    foreach($kabupaten_ins as $kab){ 
                                        if($kab['id']==$res->id_kab_instansi) {
                                            echo "<option value=".$kab['id']." selected>".strtoupper($kab['nama_kabupaten'])."</option>";
                                        } else {
                                            echo "<option value=".$kab['id'].">".strtoupper($kab['nama_kabupaten'])."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_kecamatan_ins">Kecamatan</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_kecamatan_ins" id="pil_kecamatan_ins" data-placeholder="Pilihan Kecamatan">
                                    <option></option>
                                    <?php 
                                    foreach($kecamatan_ins as $kec){ 
                                        if($kec['id']==$res->id_kec_instansi) {
                                            echo "<option value=".$kec['id']." selected>".strtoupper($kec['nama_kecamatan'])."</option>";
                                        } else {
                                            echo "<option value=".$kec['id'].">".strtoupper($kec['nama_kecamatan'])."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label" for="pil_kelurahan_ins">Kelurahan</label>
                                <div class="col-md-9">
                                    <select class="form-control select-select2" name="pil_kelurahan_ins" id="pil_kelurahan_ins" data-placeholder="Pilihan Kelurahan">
                                    <option></option>
                                    <?php 
                                    foreach($kelurahan_ins as $kel){ 
                                        if($kel['id']==$res->id_kel_instansi) {
                                            echo "<option value=".$kel['id']." selected>".strtoupper($kel['nama_kelurahan'])."</option>";
                                        } else {
                                            echo "<option value=".$kel['id'].">".strtoupper($kel['nama_kelurahan'])."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2"><button type="submit" class="btn btn-primary" name="simpan_profil" id="simpan_profil">Update Data Profil</button></td>
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
    $("input[name='upload_gambar']").on("change", function()
    {
        var isi = $("input[name=upload_gambar]:checked").val();
        var output = document.getElementById('preview_file');
        output.src ="<?php echo base_url();?>assets/img/placeholders/avatars/avatar_2.jpg";
        if(isi==1) {
            $("#area_upload").show(1000);
            $("#inp_gambar").attr("required", true);
        } else {
            $("#inp_gambar").attr("required", false);
            $("#area_upload").hide(1000);
        }
    });
    $("#pil_provinsi").on("change", function()
    {
        var id_prov = $("#pil_provinsi").val();
        $("#pil_kabupaten").load("<?php echo base_url();?>tracer_study/tampilkan_kabupaten/"+id_prov);
        $("#pil_kecamatan").empty();
        $("#pil_kelurahan").empty();
    });
    $("#pil_kabupaten").on("change", function()
    {
        var id_kab = $("#pil_kabupaten").val();
        $("#pil_kecamatan").load("<?php echo base_url();?>tracer_study/tampilkan_kecamatan/"+id_kab);
        $("#pil_kelurahan").empty();
    });
    $("#pil_kecamatan").on("change", function()
    {
        var id_kec = $("#pil_kecamatan").val();
        $("#pil_kelurahan").load("<?php echo base_url();?>tracer_study/tampilkan_kelurahan/"+id_kec);
    });
    //alamat instansi
    $("#pil_provinsi_ins").on("change", function()
    {
        var id_prov = $("#pil_provinsi_ins").val();
        $("#pil_kabupaten_ins").load("<?php echo base_url();?>tracer_study/tampilkan_kabupaten/"+id_prov);
        $("#pil_kecamatan_ins").empty();
        $("#pil_kelurahan_ins").empty();
    });
    $("#pil_kabupaten_ins").on("change", function()
    {
        var id_kab = $("#pil_kabupaten_ins").val();
        $("#pil_kecamatan_ins").load("<?php echo base_url();?>tracer_study/tampilkan_kecamatan/"+id_kab);
        $("#pil_kelurahan_ins").empty();
    });
    $("#pil_kecamatan_ins").on("change", function()
    {
        var id_kec = $("#pil_kecamatan_ins").val();
        $("#pil_kelurahan_ins").load("<?php echo base_url();?>tracer_study/tampilkan_kelurahan/"+id_kec);
    });
  });
var _validFileExtensions = [".jpg", ".jpeg", ".png"];
var loadFile_file = function(oInput) {
if (oInput.type == "file") {
    var sFileName = oInput.value;
    var sSizeFile = oInput.files[0].size;
    var output = document.getElementById('preview_file');
    //alert(sSizeFile);
    if (sFileName.length > 0) {
        var blnValid = false;
        for (var j = 0; j < _validFileExtensions.length; j++) {
            var sCurExtension = _validFileExtensions[j];
            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                blnValid = true;
                break;
            }
        }
        
        if (!blnValid) {
            alert("Maaf, " + sFileName + " tidak valid, jenis file yang boleh di upload adalah: " + _validFileExtensions.join(", "));
            oInput.value = "";
            output.src = "";
            return false;
        } 
        if(sSizeFile>500000) //50 KB
        {
            alert("Maaf, " + sFileName + " tidak valid, Ukuran file terlalu besar: " + sSizeFile);
            oInput.value = "";
            output.src = "";
            return false;
        } else {
            
            output.src = URL.createObjectURL(oInput.files[0]);
        }
    }
    
}
return true;

}; 
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