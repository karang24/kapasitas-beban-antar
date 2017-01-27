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
                                        <li><a href="<?php echo site_url(); ?>/utama/admin">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Hak Akses Admin -->
                                <li><a><i class="fa fa-users"></i> Kelola user <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/ws_client_data">View Data User</a>
                                    </ul>
                                </li>
                                <!-- Hak Akses Pengurus Yayasan -->
                                <li><a><i class="fa fa-print"></i> Kelola Laporan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/Pdf">Report Barang </a>
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
                        <div class="nav toggle"></div>
					 
                        <ul class="nav navbar-nav navbar-right">
                          <li class="">                            </li>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->