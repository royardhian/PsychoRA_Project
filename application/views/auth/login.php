<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="RA.ico">

    <title>Pshycora Project</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('dist/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('dist/cust_css/signin.css') ?>" rel="stylesheet">
    <link href="<?= base_url('dist/cust_css/animate.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--container-->
    <div class="container">
    <?php echo form_open("auth/login","class='form-signin'");?>
      <h2 class="form-signin-heading" color>Please sign in</h2>
      <div id="infoMessage"><?php echo $message;?></div>
      <?php
      echo lang('login_identity_label', 'identity');
      echo form_input($identity, "1","class='form-control' onclick='focusFunction()'' onblur='blurFunction()'");
      
      echo lang('login_identity_label', 'identity');
      echo form_input($password, "1","class='form-control' onclick='focusFunction()'' onblur='blurFunction()'");
      ?>

      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-lg btn-primary btn-block"');?></p>
    <?php echo form_close();?>
  </div> 
  <!--/container-->

  <!--logo-->
    <section id="welcome">
      <div class="container">
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            <img class="animated tada" src="<?= base_url('assets/img/welcome/logo.png') ?>" alt="logo">
        </div>
    </section>
    <!--/logo-->
    <script src="<?= base_url('dist/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?= base_url('dist/cust_js/welcome.js') ?>"></script>
  </body>
</html>