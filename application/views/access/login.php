<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <title>PEMERINTAH KOTA JOGJA</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('assets/bootstrap/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('assets/dist/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=base_url('assets/plugins/iCheck/square/blue.css');?>" rel="stylesheet" type="text/css" />
	<?php echo $this->session->flashdata('msg');?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <div class="row">
  <body background="<?php echo base_url()?>assets/dist/img/login.png">
  </div>
  <!-- Header-->
  <div>
  <div class="container" style="float:right;margin-top:200px;margin-right:600px"> 
        <div class="row">
            <div class="col-md-10">
             
            </div>
            </br></br>
            <!-- CONTENT PENGUMUMAN -->				
            <div class="col-md-8">	
            </div>

            <!-- SIDEBAR -->
            <div class="col-md-4 panel-group" id="accordion">
                <div class="panel-title">
                </div>
                <div class="panel panel-success" style="background-color: rgba(255,255,255,0.)">
                    <div class="button-login panel-heading" data-toggle="collapse" data-parent="#accordion" >
                        <div class="panel-title">
                            <center><b>FORM LOGIN</b></center>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo site_url()?>/auth/cek_login">
                            <div class="form-group">
                                <label for="username">User ID</label>
                                <input type="text" name="username" class="form-control" id="username" style="background-color:#edecec" placeholder="Masukkan Username" required >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" style="background-color:#edecec" placeholder="Masukkan Password" required>
                            </div>
                            <button type="submit" class="btn btn-lg btn-block btn-success" style="font-size:12px"><b>LOGIN</b></button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
		
    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url('assets/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url('assets/plugins/iCheck/icheck.min.js');?>" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
  
</html>

<?php
