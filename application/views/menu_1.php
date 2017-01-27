<?php $this->load->view('header');?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a class="site_title"><i class="fa fa-graduation-cap"></i> <span>KBA</span></a>
                    </div>
                    <div class="clearfix"></div>
                    
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo base_url(); ?>assets/images/pos.png" alt="..." class="img-circle profile_img">
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
                                        <li><a href="<?php echo site_url(); ?>/utama/kkp">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                                 <li><a><i class="fa fa-suitcase"></i> Kapasitas Beban Antar <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/C_kba/viewkba1">View KBA </a>
                                         
                                    </ul>
                                </li>
                                <!-- Hak Akses Pengurus Yayasan -->
                                <li><a><i class="fa fa-users"></i> Kelola Petugas <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/c_kkp/viewpetugas">Report Petugas </a>
                                    </ul>
                                     <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/c_kkp/viewakun">Tambah Akun </a>
                                    </ul>
                                </li> 
           
                                    <ul class="nav child_menu" style="display: none">
                                      <li><a href="<?php echo site_url(); ?>/C_kbakkp/viewkbakkp">View KBA</a>                                        
                                    </ul>
                                   <li><a><i class="fa fa-print"></i> Kelola Laporan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo site_url(); ?>/c_kkp/viewbulanan">Report KBA Bulanan</a>
                                    </ul>
                                    <ul class="nav child_menu" style="display: none">
                                    </ul>
                                    <ul class="nav child_menu" style="display: none">
                                    
                                      
                                    </ul>
                                </li>  
                                
                                      
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