<!-- Page content -->
<div id="page-content">
    <!-- Page Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-table"></i>Manajemen Data Lowongan Kerja
            </h1>
        </div>
    </div>
    <!-- END Page Header -->
    <div class="row">
        <form role="form" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo base_url();?>panel_career/manaj_loker_rubah" onsubmit="return konfirm()">
        <input type="hidden" name="id_tabel" value="<?php echo $res->id;?>">
        <div class="col-md-8">
            <?php if ($this->session->flashdata('konfirm')): ?>
            <div class="alert alert-info alert-dismissible" id="success-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-success"></i> Konfirmasi !</h4>
              <?php echo $this->session->flashdata('konfirm'); ?>
            </div>
            <?php endif; ?>
            <div class="block">
                <div class="block-title themed-background-dark">
                    <div class="block-options pull-right">
                        <a href="<?php echo base_url();?>panel_career/manaj_loker" class="btn btn-sm btn-default" data-toggle="tooltip" title="Kembali"><i class="fa fa-home"></i></a>
                    </div>
                    <h2 style="color: white;"><strong><i class="fa fa-edit"></i> Edit data Lowongan Kerja</strong></h3>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pil_kategori">Kategori Lowongan Kerja</label>
                    <div class="col-md-9">
                        <select id="pil_kategori" name="pil_kategori" class="select-chosen" data-placeholder="Pilihan Katgeori Lowongan Kerja" style="width: 100%;">
                        <?php foreach($kategori_loker as $kat) {
                            if($kat['id']==$res->id_kategori) {
                                echo "<option value=".$kat['id']." selected>".$kat['nama_kategori']."</option>";
                            } else {
                                echo "<option value=".$kat['id'].">".$kat['nama_kategori']."</option>";
                            }
                        } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_nama_perusahaan">Nama Perusahaan</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="inp_nama_perusahaan" id="inp_nama_perusahaan" maxlength="200" value="<?php echo $res->nama_perusahaan;?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_deskripsi">Deskripsi</label>
                    <div class="col-md-9">
                        <textarea name="inp_deskripsi" id="inp_deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #000; padding: 10px;"><?php echo $res->deskripsi;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_alamat_perusahaan">Alamat Perusahaan</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="inp_alamat_perusahaan" id="inp_alamat_perusahaan" maxlength="200" value="<?php echo $res->alamat;?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pil_provinsi">Provinsi</label>
                    <div class="col-md-9">
                        <select class="form-control select-select2" name="pil_provinsi" id="pil_provinsi" data-placeholder="Pilihan Provinsi" required>
                        <option></option>
                        <?php 
                        foreach($provinsi as $prov){ 
                            if($prov['id']==$res->id_provinsi)
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
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pil_kabupaten">Kabupaten/Kota</label>
                    <div class="col-md-9">
                        <select class="form-control select-select2" name="pil_kabupaten" id="pil_kabupaten" data-placeholder="Pilihan Kabupaten/Kota" required>
                        <option></option>
                        <option></option>
                        <?php 
                        foreach($kabupaten as $kab){ 
                            if($kab['id']==$res->id_kabupaten) {
                                echo "<option value=".$kab['id']." selected>".strtoupper($kab['nama_kabupaten'])."</option>";
                            } else {
                                echo "<option value=".$kab['id'].">".strtoupper($kab['nama_kabupaten'])."</option>";
                            }
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_kontak_person">Kontak Person</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="inp_kontak_person" id="inp_kontak_person" value="<?php echo $res->kontak_person;?>" maxlength="100">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_pelaksana">Waktu Proses Lamran</label>
                    <div class="col-md-9">
                        <div class="input-group input-daterange" data-date-format="dd-mm-yyyy">
                            <input type="text" id="tgl_star" name="tgl_star" class="form-control text-center" placeholder="Mulai" value="<?php echo date_format(date_create($res->tgl_mulai), 'd-m-Y');?>" required>
                            <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                            <input type="text" id="tgl_end" name="tgl_end" class="form-control text-center" placeholder="Sampai" value="<?php echo date_format(date_create($res->tgl_akhir), 'd-m-Y');?>" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_sumber">Sumber/Link</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="inp_sumber" id="inp_sumber" value="<?php echo $res->sumber_link;?>" maxlength="200">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pil_tampil">Tampilkan di Site <br>(Career Center)</label>
                    <div class="col-md-9">
                        <label class="radio-inline" for="pil_tampil">
                                <input type="radio" id="pil_tampil" name="tampilkan_info" value="1" <?php echo ($res->tampilkan==1)? "checked" : "" ?>> Ya
                            </label>
                            <label class="radio-inline" for="pil_tidak_tampil">
                                <input type="radio" id="pil_tidak_tampil" name="tampilkan_info" value="2" <?php echo ($res->tampilkan==2)? "checked" : "" ?>> Tidak
                            </label>
                    </div>
                </div>
                <hr>
                <div class="form-group form-actions">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-md btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-title themed-background-dark">
                    <h2 style="color: white;"><strong><i class="fa fa-image"></i> Upload Gambar</strong></h3>
                </div>
                <div class="widget-extra">
                    <div class="form-group row">
                        <label class="col-md-5 control-label">Upload Gambar ?</label>
                        <div class="col-md-7">
                            <label class="radio-inline" for="pil_ya">
                                <input type="radio" id="pil_ya" name="upload_gambar" value="1" <?php echo ($res->ada_file==1)? "checked" : "" ?>> Ya
                            </label>
                            <label class="radio-inline" for="pil_tidak">
                                <input type="radio" id="pil_tidak" name="upload_gambar" value="2" <?php echo ($res->ada_file==2)? "checked" : "" ?>> Tidak
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div id="area_upload" style="<?php echo($res->ada_file==1)? "" : "display:none" ?> ">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="file" name="inp_gambar" id="inp_gambar" class="form-control" onchange="loadFile_file(this)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12" style="text-align: center;">
                                <img id="preview_file" style="width: 100%; height: auto;" 
                                <?php if($res->ada_file==1) {?> 
                                    src="<?php echo base_url();?>assets/upload/loker/<?php echo $res->file_lampiran;?>"
                                <?php } else {?> 
                                    src=""
                                <?php } ?>>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<!--<script src="<?php echo base_url();?>assets/js/ckeditor/ckeditor.js"></script>-->
<script src="https://cdn.ckeditor.com/4.16.0/basic/ckeditor.js"></script>
<!-- END Page Content -->
<script type="text/javascript">
  $(document).ready(function() 
  {
    window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
	CKEDITOR.replace('inp_deskripsi');
    $("#pil_provinsi").on("change", function()
    {
        var id_prov = $("#pil_provinsi").val();
        $("#pil_kabupaten").load("<?php echo base_url();?>tracer_study/tampilkan_kabupaten/"+id_prov);
    });
    $("input[name='upload_gambar']").on("change", function()
    {
        var isi = $("input[name=upload_gambar]:checked").val();
        if(isi==1) {
            $("#area_upload").show(1000);
        } else {
            $("#area_upload").hide(1000);
        }
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