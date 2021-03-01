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
        <form role="form" enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo base_url();?>panel_career/manaj_kegiatan_simpan" onsubmit="return konfirm()">
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
                    <h2 style="color: white;"><strong><i class="fa fa-edit"></i> input data baru</strong></h3>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="pil_kategori">Kategori Kegiatan</label>
                    <div class="col-md-9">
                        <select id="pil_kategori" name="pil_kategori" class="select-chosen" data-placeholder="Pilihan Katgeori Informasi" style="width: 100%;">
                        <?php foreach($kategori_kegiatan as $kat) {
                            echo "<option value=".$kat['id'].">".$kat['nama_kategori']."</option>";
                        } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_nama">Nama Kegiatan</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="inp_nama" id="inp_nama" maxlength="200" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inp_deskripsi">Deskripsi Kegiatan</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="inp_deskripsi" id="inp_deskripsi" ></textarea>
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
                                <input type="radio" id="pil_ya" name="upload_gambar" value="1" checked> Ya
                            </label>
                            <label class="radio-inline" for="pil_tidak">
                                <input type="radio" id="pil_tidak" name="upload_gambar" value="2"> Tidak
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div id="area_upload">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="file" name="inp_gambar" id="inp_gambar" class="form-control" onchange="loadFile_file(this)" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12" style="text-align: center;">
                                <img id="preview_file" style="width: 100%; height: auto;" src="">
                            </div>
                        </div>
                    </div>
                </div>
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