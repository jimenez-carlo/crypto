
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login - My System</title>

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <!-- <form class="form-login" action=""> -->
      <?php echo form_open(base_url().'login/submit',array('class' => 'form-login')); ?>  
        <h2 class="form-login-heading">My System v.1.0.1</h2>
        <div class="login-wrap">
          <?php echo $login_error; ?>
          <div class="form-group <?php echo $login_class; ?>">
          <p>*Username</p>
          <?php echo form_input('login_user', $_POST['login_user'] ?? '', attribute()->username_login); ?>
          <br>
          <p>*Password</p>
          <?php echo form_password('login_pass', $_POST['login_pass'] ?? '', attribute()->password_login); ?>
          </div>
         <!--  <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me-->
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <?php echo form_button(attribute()->submit_login); ?> 
          <hr>
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="button"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="button"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" data-toggle="modal" href="#CreateModal">
              Create an account
              </a>
          </div>
        </div>
        <!-- Forgot Password -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Forgot Password-->
        <!-- Create Account -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="CreateModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Create Account ?</h4>
              </div>
              <div class="modal-body">
              <?php echo $create_error; ?>
              <div class="form-group <?php echo $create_class; ?>">
                <p>*Username</p>
                <?php echo form_input('new_user', $_POST['new_user'] ?? '', attribute()->username_create); ?>
                <p>*Password</p>
                <?php echo form_password('new_pass', $_POST['new_pass'] ?? '', attribute()->password_create); ?>
              </div>
            </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <?php echo form_button(attribute()->submit_create); ?> 
              </div>
            </div>
          </div>
        </div>
        <!-- Create Account -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?php echo base_url(); ?>assets/img/login-bg.jpg", {
      speed: 500
    });
  </script>
  <?php echo $open_modal; ?>
</body>

</html>
