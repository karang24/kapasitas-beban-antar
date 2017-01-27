<?php $this->load->view('menu_4');?>
             <!-- page content -->
            <div class="right_col" role="main">
                <!--nav link--> 
                <header class="head">          
                    <div class="main-bar bg-light dker">
                        <i class="fa fa-users fa-jk"></i>
                        <a href="<?php echo site_url();?>/C_Utama">Home</a> /
                        <a href="<?php echo site_url();?>/C_Utama/viewuser">View User</a> /
                     <span class="active">
                            Edit Data Petugas
                    </span>
                    </div><!-- /.main-bar -->
                </header><!-- /.head -->

                <!-- end nav link--> 
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                            Form Edit User
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Edit Data User</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="form-horizontal form-label-left" method="post" action="<?php echo site_url('/c_utama/updatedata');?>" enctype="multipart/form-data">
                                        <?php echo form_open('/c_utama/editdata'.$hasil->id_petugas); ?>                   
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_petugas">ID Petugas <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->id_petugas; ?>" readonly id="id_petugas"class="form-control col-md-7 col-xs-12" data-validate-length-range="5" data-validate-number="7" name="id_petugas" placeholder="Contoh : 10975125 " required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->username; ?>" id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-number="10" name="username" placeholder="masukkan username " required="required" type="text">
                                            </div>
                                        </div>
                                       <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->password; ?>"id="password" type="password" name="password"  data-validate-length="0" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->password; ?>"id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_petugas">Nama Petugas <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->nama_petugas; ?>"type="text" id="nama_petugas" name="nama_petugas" value="<?php echo set_value('nama_petugas'); ?>"required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jabatan">Jabatan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->jabatan; ?>" id="jabatan" type="text" name="jabatan" value="<?php echo set_value('jabatan'); ?>" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hak Akses<span class="required"></span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control"name='hak_akses'>

                                                    <option value=""><?php echo $hasil->hak_akses; ?></option>
                                                    <option value="1">1 Pengurus Yayasan </option>
                                                    <option value="2">2 Asisten Deputi Sarana </option>
                                                    <option value="3">3 Kepala Deputi Sarana</option>
                                                    <option value="4">4 Administrator </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp"> No HP <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input value="<?php echo $hasil->no_hp; ?>"id="no_hp" type="text" name="no_hp" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>  
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Update Data</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- footer content -->
                    <?php $this->load->view('footer');?>
                <!-- /footer content -->
                
            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="<?php echo base_url();?>assets/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="<?php echo base_url();?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="<?php echo base_url();?>assets/s/icheck/icheck.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <!-- form validation -->
    <script src="<?php echo base_url();?>assets/js/validator/validator.js"></script>
    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>

</body>

</html>