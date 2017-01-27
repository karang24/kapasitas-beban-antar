<?php $this->load->view('header');?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a class="site_title"><i class="fa fa-graduation-cap"></i> <span>SISMONVEN YPBPI</span></a>
                    </div>
                    <div class="clearfix"></div>
                    
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo base_url(); ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome</span>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h2> Sidebar Menu </h2>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-windows"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/c_utama">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Hak Akses Admin -->
                                <li><a><i class="fa fa-users"></i> Kelola user <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>">View Data User</a>
                                    </ul>
                                </li>
                                 <!-- Hak Akses Kepala Deputi Sarana -->
                                <li><a><i class="fa fa-sitemap"></i> Kelola Kategori <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                     <li><a href="<?php echo site_url(); ?>/C_kategori/viewkategori">View Data Kategori</a>
                                    </ul>
                                </li> 
                                <li><a><i class="fa fa-building"></i> Kelola Gedung <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/C_gedung/viewgedung">View Data Gedung</a>  
                                    </ul>
                                </li>
                                <!-- Hak Akses Asisten Deputi Sarana -->
                                <li><a><i class="fa fa-home"></i> Kelola Ruangan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/Ruangan/viewruangan">View Data Ruangan </a>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-suitcase"></i> Kelola Barang <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/Barang/viewbarang">View Data Barang </a>  
                                    </ul>
                                </li> 
                                <li><a><i class="fa fa-shopping-cart"></i> Penempatan Barang <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                     <li><a href="<?php echo site_url(); ?>/Penempatan/addpenempatan">Kelola Penempatan Baru </a>  
                                     <li><a href="<?php echo site_url(); ?>/Penempatan/viewpenempatans">View Penempatan </a>    
                                    </ul>
                                </li> 
                                <li><a><i class="fa fa-share"></i> Mutasi Barang <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                     <li><a href="<?php echo site_url(); ?>/Mutasi/addmutasi">Kelola Mutasi </a>  
                                     <li><a href="<?php echo site_url(); ?>/Mutasi/viewmutasi">View Mutasi </a> 
                                    </ul>
                                </li>
                                <!-- Hak Akses Pengurus Yayasan -->
                                <li><a><i class="fa fa-print"></i> Kelola Laporan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/Barang/report">Report Barang </a>
                                    </ul>
                                </li>    
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
					 
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    
                                    <span class=" fa fa-angle-down"> User Action </span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="<?php echo site_url(); ?>/login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->