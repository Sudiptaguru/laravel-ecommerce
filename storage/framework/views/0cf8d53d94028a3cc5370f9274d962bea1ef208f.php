<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
    <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
    <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
    <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
    -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->
    
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo e(asset('themes/bootshop/bootstrap.min.css')); ?>" media="screen"/>
    <link href="<?php echo e(asset('themes/css/base.css')); ?>" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
    <link href="<?php echo e(asset('themes/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('themes/css/font-awesome.css')); ?>" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->   
    <link href="<?php echo e(asset('themes/js/google-code-prettify/prettify.css')); ?>" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('themes/images/ico/favicon.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('themes/images/ico/apple-touch-icon-144-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('themes/images/ico/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('themes/images/ico/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('themes/images/ico/apple-touch-icon-57-precomposed.png')); ?>">
    <style type="text/css" id="enject"></style>
  </head>
<body>
	<?php echo $__env->make('front.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('slider'); ?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	 <?php echo $__env->make('front.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	 <?php echo $__env->yieldContent('content'); ?>
		</div>
	</div>
</div>
<?php echo $__env->make('front.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo e(asset('themes/js/jquery.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('themes/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('themes/js/google-code-prettify/prettify.js')); ?>"></script>
  
  <script src="<?php echo e(asset('themes/js/bootshop.js')); ?>"></script>
  <script src="<?php echo e(asset('themes/js/jquery.lightbox-0.5.js')); ?>"></script>
	
  <?php echo $__env->yieldPushContent('footer-script'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/front/layout/layout.blade.php ENDPATH**/ ?>