<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> <?php if(Auth::user()): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?></strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="<?php echo e(route('cart')); ?>"><span class="">Fr</span></a>
		<a href="<?php echo e(route('cart')); ?>"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="<?php echo e(route('cart')); ?>"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="<?php echo e(route('cart')); ?>"><span class="">$</span></a>
		<a href="<?php echo e(route('cart')); ?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('themes/images/logo.png')); ?>" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?php echo e(route('specialOffer')); ?>">Specials Offer</a></li>
	 <li class=""><a href="<?php echo e(route('delivery')); ?>">Delivery</a></li>
	 <li class=""><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
	 <li class="">
	 <?php if(Auth::user()): ?>
	 	<a href="<?php echo e(route('user_logout')); ?>"><span class="btn btn-large btn-success">Log out</span></a>
	 <?php else: ?>
	 	<a href="<?php echo e(route('user_login')); ?>"><span class="btn btn-large btn-success">Login</span></a>
	 <?php endif; ?>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/front/layout/header.blade.php ENDPATH**/ ?>