<!-- Main Container -->
<header class="navbar navbar-default">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
        <li>
            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                <i class="fa fa-bars fa-fw"></i>
            </a>
        </li>
        <!-- END Main Sidebar Toggle Button -->
    </ul>
    <!-- END Left Header Navigation -->
    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">
        <!-- User Dropdown -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                <?php if(empty($res->foto)){?>
                    <img src="<?php echo base_url();?>assets/img/placeholders/avatars/avatar_2.jpg" alt="Photo">
                <?php } else {?>
                    <img src="<?php echo base_url();?>assets/upload/profil/<?php echo $res->foto;?>" alt="Photo">
                <?php } ?> <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Account</li>
                <li>
                    <a href="<?php echo base_url();?>panel_caree/setting"><i class="fa fa-cog fa-fw pull-right"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url();?>panel_career/logout"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- END Header -->