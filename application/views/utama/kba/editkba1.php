<?php $this->load->view('menu_1');?>
             <!-- page content -->
            <div class="right_col" role="main">
                <!--nav link--> 
                <header class="head">          
                    <div class="main-bar bg-light dker"></div><!-- /.main-bar -->
                </header><!-- /.head -->

                <!-- end nav link--> 
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>&nbsp;</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>&nbsp;</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                  <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>index.php/C_kba/updatedata">
                                    <div class="item form-group">
                                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_ruangan">Nomer KBA <span class="required">*</span>
                                            </label>
                                            <div class="col-md-2 col-sm-2 col-xs-7">
                                              <input id="id_kba" class="form-control col-md-4 col-xs-7" data-validate-length-range="2" name="id_kba" placeholder="Contoh : R101 " required="required" type="text" value="<?php echo $hasil->id_kba ?>" readonly="readonly">
                                            </div>
                                    </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_ruangan">NIPPOS <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                             
                                              <select name="nippos" style="width:140px;" class="form-control" required="true">
		
          <option value="<?php echo $hasil->nippos;?>"> <?php echo $hasil->nippos;?></option>
		 
        </select>
                                            </div>
                                        </div>
 <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_ruangan">Kantor <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                             
                                              <select name="id_kantor" style="width:140px;" class="form-control" required="true">
		
          <option value="<?php echo $hasil->id_kantor;?>"> <?php echo $hasil->id_kantor;?></option>
		 
        </select>
                                            </div>
                                    </div>

                                        
                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_ruangan">Tanggal  <span class="required">*</span>
                                            </label>
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                              <select name="t_pengiriman" style="width:140px;" class="form-control" required="true">
		
          <option value="<?php echo $hasil->t_pengiriman;?>"> <?php echo $hasil->t_pengiriman;?></option>
        </select>
                                            </div>
                                        </div>
                                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_gedung">Jumlah<span class="required"> Dikirim*</span>
                                            </label>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                              <input id="jumlah" type="text" name="jumlah" data-validate-length="0" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $hasil->jumlah;?>">
                                            </div>   
                                        </div>
                                       <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_gedung">Jumlah Terkirim <span class="required">*</span>
                                            </label>
                                            <div class="col-md-1 col-sm-1 col-xs-1">
                                              <input id="terkirim" type="text" name="terkirim" data-validate-length="0" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $hasil->terkirim;?>">
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