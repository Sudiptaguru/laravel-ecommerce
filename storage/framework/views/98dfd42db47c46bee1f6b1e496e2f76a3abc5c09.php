


<?php $__env->startSection('slider'); ?>

<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/5.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="themes/images/carousel/6.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right">200+ featured products</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
				<?php $i=0; ?>
				<?php $__currentLoopData = $products->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  <div class="item <?php if($i==0): ?> active <?php endif; ?>">
				<?php $i=1; ?>
				  <ul class="thumbnails">
				  	<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="span3">
						  <div class="thumbnail">
						  <i class="tag"></i>
							<a href="<?php echo e(route('productView',$value->id)); ?>"><img src="<?php echo e(asset('uploads/'.$value->image)); ?>" alt=""></a>
							<div class="caption">
							  <h5><?php echo e($value->name); ?></h5>
							  <h4><a class="btn" href="<?php echo e(route('productView',$value->id)); ?>">VIEW</a> <span class="pull-right">$<?php echo e($value->price); ?></span></h4>
							</div>
						  </div>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </ul>
			  </div>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
			  <?php $__currentLoopData = $new_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="<?php echo e(asset('productView')); ?>"><img src="<?php echo e(asset('uploads/'.$new_product->image)); ?>" alt=""/></a>
					<div class="caption">
					  <h5><?php echo e($new_product->name); ?></h5>
					  <h4 style="text-align:center"><a class="btn" href="#"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo e(route('productView',$new_product->id)); ?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$<?php echo e($new_product->price); ?></a></h4>
					</div>
				  </div>
				</li>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </ul>	
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/front/home.blade.php ENDPATH**/ ?>