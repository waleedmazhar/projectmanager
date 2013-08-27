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
  <link href="<?php echo base_url()?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
  
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
   
    <form class="form-horizontal form-signin well" method="post" id="form" action="<?php echo base_url(); ?>index.php/login/doforget">
        <div class="top-bar">
          <h3><i class="icon-leaf"></i><b>Reset Password</b></h3>
        </div>
        <div class="well no-padding">
			<?php if( isset($info)): ?>
                <div class="alert alert-success">
                    <?php echo($info) ?>
                </div>
            <?php elseif( isset($error)): ?>
                <div class="alert alert-error">
                    <?php echo($error) ?>
                </div>
            <?php endif; ?>
          <div class="control-group">
					<label class="control-label" for="inputEmail"><i class="icon-envelope"></i></label>
					<div class="controls">
						<input name="email" type="text" id="inputEmail" placeholder="Registered Email Address">
					</div>
				</div>
            
              <div class="padding">
              <button class="btn btn-primary" type="submit">Submit</button>
              </div>
          </div>
          
    </form>
</div>
</body>
 
 
 <!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url()?>assets/js/jquery.hotkeys.js"></script>
	<script src="<?php echo base_url()?>/assets/js/calendar/fullcalendar.min.js"></script>
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
