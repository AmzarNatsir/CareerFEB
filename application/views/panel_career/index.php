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
                            <img src="<?php echo base_url();?>assets/img/placeholders/avatars/avatar_2.jpg" alt="Photo" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-lg-8">
            <div class="block">
                <!-- Your Account Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit Profil"><i class="fa fa-pencil"></i></a>
                    </div>
                    <h2>Tentang <strong><?php echo $this->session->userdata("nmalumni");?></strong></h2>
                </div>
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 20%;"><strong>Program Studi</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Tahun Lulus</strong></td>
                            <td><a href="javascript:void(0)"></a></td>
                        </tr>
                        <tr>
                            <td><strong>Tempat/Tanggal Lahir</strong></td>
                            <td><a href="javascript:void(0)"></a></td>
                        </tr>
                        <tr>
                            <td><strong>Alamat Sekarang</strong></td>
                            <td><a href="javascript:void(0)"></a></td>
                        </tr>
                        <tr>
                            <td><strong>No.Telepon</strong></td>
                            <td><a href="javascript:void(0)"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->