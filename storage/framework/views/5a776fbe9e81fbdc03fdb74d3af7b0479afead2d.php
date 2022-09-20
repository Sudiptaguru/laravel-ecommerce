


<?php $__env->startSection('content'); ?>

<div class="span9">
	<ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
  </ul>
  <h3> Login</h3>
  <div class="well">
  	<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="input_email">Email <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="input_email" placeholder="Email">
				</div>
		  </div>

			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls">
				  <input type="password" id="password" placeholder="*******">
				</div>
		  </div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" value="Login"> 
				</div>
		  </div>

  	</form>
  </div>
  <h3> Registration</h3>
  <div class="well">
  	<form class="form-horizontal">
  		<div class="control-group">
				<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="inputFname1" placeholder="First Name">
				</div>
		 	</div>

		 	<div class="control-group">
				<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="inputLnam" placeholder="Last Name">
				</div>
		 	</div>

			<div class="control-group">
				<label class="control-label" for="input_email">Email <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="input_email" placeholder="Email">
				</div>
		  </div>

			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls">
				  <input type="password" id="password" placeholder="*******">
				</div>
		  </div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" value="Submit"> 
				</div>
		  </div>

  	</form>
  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/front/register.blade.php ENDPATH**/ ?>