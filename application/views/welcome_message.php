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
    <link href="assets/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/admin/cust_css/signin.css" rel="stylesheet">
    <link href="assets/admin/cust_css/animate.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--container-->
    <div class="container">
		<form class="form-signin" method="POST" action="<?= base_url('welcome/login') ?>">
			<h2 class="form-signin-heading" color>Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" onfocus="focusFunction()" onblur="blurFunction()" required>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" onfocus="focusFunction()" onblur="blurFunction()" autocomplete="new-password" placeholder="Password" required>
			
			<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			</div>

			<div class="form-group">
				<!--label for="txt_identity" class="col-sm-4 control-label">Username</label-->
				<div class="col-sm-12">
					<?php if(isset($message))echo $message;?>
				</div>
			</div>

			<button class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Sign in</button>
		</form>
	</div> 
	<!--/container-->

	<!--logo-->
    <section id="welcome">
    	<div class="container">
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            <img class="animated tada" src="assets/img/welcome/logo.png" alt="logo">
        </div>
    </section>
  	<!--/logo-->
  	<script src="assets/admin/js/jquery-3.1.1.min.js"></script>
  	<script src="assets/admin/cust_js/welcome.js"></script>
  </body>
</html>