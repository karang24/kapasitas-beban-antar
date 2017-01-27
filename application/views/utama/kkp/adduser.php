<?php $this->load->view('menu_2');?>

             <!-- page content -->
            <div class="right_col" role="main">
                <!--nav link--> 
                <header class="head">          
                    <div class="main-bar bg-light dker">
                        <i class="fa fa-users fa-jk"></i>
                        <a href="<?php echo site_url();?>/C_petugas">Home</a> /
                        <a href="<?php echo site_url();?>/C_petugas/viewpetugas">Daftar Petugas</a> /
                     <span class="active">
                            Entry data PEtugas</span>
                    </div>
                    <!-- /.main-bar -->
                </header><!-- /.head -->

                <!-- end nav link--> 
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                            Form Entry Petugas</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Input Entry Petugas</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>index.php/C_kkp/insertuser">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_barang">Username <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" name="username" value=""  required="required" type="text" placeholder="username">
                                            </div>
                                        </div>
                                    <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_petugas">Password<span class="required">*</span>
                                            </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" name="password" placeholder="password" required="required" type="password" />
                                                <input id="id_kantor" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" name="id_kantor" placeholder="password" required="required" type="hidden" value=" <?php $this->load->library('session');
	  $session_id = $this->session->userdata('id_kantor');
	  ?><?php print $session_id;?> " />
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                                               </div>
                                        
                                    <div class="item form-group">
                                      <label class="control-label col-md-3 ">Jabatan</label>
                                             <div class="col-md-6 col-sm-6 col-xs-12">
                                             <select class="form-control col-lg-2" id="level" name="level" required="required">
                                                <option value=""> Pilih Jabatan </option>
                                               
                                     
                                                <option value="3">SPV</option>
                                                <option value="2">Mandor</option>
                                               
                                            </select>
                                            </span></div>
                                    </div>

                                    <div class="item form-group">
                                            <label class="control-label col-md-3">Nippos</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input id="nippos" type="text" name="nippos" data-validate-length="0" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="reset" class="btn btn-warning">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
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