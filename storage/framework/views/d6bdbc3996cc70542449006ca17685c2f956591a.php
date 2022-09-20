<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('admin_theme/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('admin_theme/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('admin_theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('admin_theme/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('admin_theme/build/css/custom.min.css')); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('admin_theme/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('admin_theme/vendors/nprogress/nprogress.js')); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('admin_theme/build/js/custom.min.js')); ?>"></script>
	<?php echo $__env->yieldPushContent('footer-script'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/admin/layout/layout.blade.php ENDPATH**/ ?>