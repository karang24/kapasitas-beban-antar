<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link rel="shortcut icon"  href="<?php echo base_url();?>assets/images/icon_ypbpi.png"/>
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/icheck/flat/green.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
     <script language='javascript' >
        var txt='Kapasitas Beban Antar';
        var speed=90;var refresh=null;function move() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("move()",speed);}move();
    </script>
</head>

<body style="background:#F1F1F1;">
    <div class="">
         <div class="text-center">
            <img src="<?php echo base_url(); ?>assets/images/header-bg.png">
        </div>
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form method="post" action="<?php echo base_url();?>index.php/login/process">
                        <h1>Login System</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username" required/>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password"  required/>
                        </div>
                        <div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">LOG IN</button>
                                                    </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div>
                                <h1><i style="font-size: 26px;"></i><img src="<?php echo base_url(); ?>assets/images/pos_2.png">Kapasitas Beban Antar</h1>

                                <p>©Tugas Ahir</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>