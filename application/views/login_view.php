<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Project Management Tool</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Styles -->
  <link href='<?php echo base_url()?>/assets/css/chosen.css' rel='stylesheet' tyle="text/css">
  <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>/assets/css/theme/avocado.css" rel="stylesheet" type="text/css" id="theme-style">
  <link href="<?php echo base_url()?>/assets/css/prism.css" rel="stylesheet/less" type="text/css">
  <link href='<?php echo base_url()?>/assets/css/fullcalendar.css' rel='stylesheet' tyle="text/css">
  <link href='<?php echo base_url()?>/assets/css/custom.css' rel='stylesheet' tyle="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
  <style type="text/css">
    body { padding-top: 102px; }
  </style>
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- JavaScript/jQuery, Pre-DOM -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <script src="<?php echo base_url()?>/assets/js/charts/excanvas.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/charts/jquery.flot.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.jpanelmenu.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.cookie.js"></script>
  <script src="<?php echo base_url()?>/assets/js/avocado-custom-predom.js"></script>

  <!-- HTML5, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
 <body>
   
   
   <div class="container">  

       <!-- <form class="form-signin form-horizontal">-->
       <?php echo form_open('verifylogin',array('class'=>'form-signin form-horizontal')); ?>
        <div class="top-bar">
          <h3><i class="icon-leaf"></i> Login<b>Panel</b></h3>
        </div>
        <div class="well no-padding">
			<?php //echo validation_errors(); ?>
  			<?php //echo form_error('check_database'); ?>
          <div class="control-group">
            <label class="control-label" for="inputName"><i class="icon-user"></i></label>
            <div class="controls"><span class="error"><?php echo form_error('username'); ?></span>
              <input name="username" type="text" id="inputName" placeholder="Username">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputUsername"><i class="icon-key"></i></label>
            <div class="controls"><span class="error"><?php echo form_error('password'); ?></span>
              <input name="password" type="password" id="inputUsername" placeholder="Password">
            </div>
          </div>

        <div class="padding">
          <button class="btn btn-primary" type="submit">Sign in</button>
          <a class="btn" href="index.php/login/forget">Forgot Password</a>
          </div>
        </div>
      </form>

    </div> 
   
   
 </body>
 
 
 <!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='<?php echo base_url()?>assets/js/jquery.hotkeys.js'></script>
	<script src='<?php echo base_url()?>/assets/js/calendar/fullcalendar.min.js'></script>
	<script src="<?php echo base_url()?>/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery.pajinate.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery.prism.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/charts/jquery.flot.time.js"></script>
	<script src="<?php echo base_url()?>/assets/js/charts/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url()?>/assets/js/charts/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap/bootstrap-wysiwyg.js"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap/bootstrap-typeahead.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/jquery.chosen.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/avocado-custom.js"></script>

  
</html>
