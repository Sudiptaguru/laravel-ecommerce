<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('admin_theme/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('admin_theme/vendors/animate.css/animate.min.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('admin_theme/build/css/custom.min.css')); ?>" rel="stylesheet">
  </head>

  <body class="login">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
              </div>
            <?php endif; ?>
            <form action="<?php echo e(route('admin.makeLogin')); ?>" method="post">
              <h1>Login Form</h1>
              <?php echo csrf_field(); ?>
              <div>
                <input type="text" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" name="">
              </div>

            </form>
          </section>
        </div>

      </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/admin/login.blade.php ENDPATH**/ ?>