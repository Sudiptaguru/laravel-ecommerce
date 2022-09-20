


<?php $__env->startSection('content'); ?>

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small>3 Item(s) </small>]<a href="products.html" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>		
			
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Product</th>
        <th>Name</th>
        <th>Quantity/Update</th>
				<th>Select</th>
				<th>Price</th>
			</tr>
    </thead>
      <tbody>
      	<?php $sum = 0;  ?>
      	<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      	<?php $sum = $sum + $cart->product->price;  ?>
        <tr>
          <td> <img width="60" src="<?php echo e(asset('uploads/'.$cart->product->image)); ?>" alt=""/></td>
          <td><?php echo e($cart->product->name); ?></td>
				  <td>
						<div class="input-append">
							<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" value="<?php echo e($cart->qty); ?>" type="number">
							<button class="btn" type="button"><i class="icon-minus"></i></button>
							<button class="btn" type="button"><i class="icon-plus"></i></button>
							<button class="btn btn-danger btn_close" data-id="<?php echo e($cart->id); ?>" type="button"><i class="icon-remove icon-white"></i></button></div>
				  </td>
          <td><input type="checkbox" name="select_product[]" cart-id="<?php echo e($cart->id); ?>"></td>
          <td>$<?php echo e($cart->product->price); ?></td>
        </tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td colspan="4" style="text-align:right">Total Price:	</td>
          <td> $<?php echo e($sum); ?></td>
        </tr>
				 <tr>
            <td colspan="3" style="text-align:right"></td>
            <td>Pay with eway<input type="checkbox" name="eway" style="margin-left: 12px;"></td>
            <td class="label label-important buy_product" style="display:block;cursor:pointer;"> <strong>Buy</strong></td>
          </tr>
			</tbody>
    </table>
			
	<a href="products.html" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-script'); ?>
<script>
	$('.btn_close').on('click',function(){
      if(confirm('Are you remove this product.')){
      var id = $(this).data('id');
      $.ajax({
        url:'<?php echo e(route("cart.delete")); ?>',
        data:{	
          'id':id
        },
        success: function(data){
            location.reload();
        }
      });
    }
   });

  $('.buy_product').on('click',function(){
    var cart_id = [];
    var payment_type = '';
    if($('input[name="eway"]').is(':checked')){
      payment_type = 'eway';
    }else{
      payment_type = 'pay_person';
    }
    
    jQuery('input[name="select_product[]"]:checkbox:checked').each(function(i){
        cart_id[i] = $(this).attr('cart-id');
    });
    
    if(cart_id.length == 0){
      alert('Please select atleast one product.');
    }else{
      $.ajax({
        url:'<?php echo e(route("product.booking")); ?>',
        type:'post',
        data:{  
          cart_id:cart_id,
          payment_type:payment_type,
          _token:'<?php echo e(csrf_token()); ?>'
        },
        success: function(data){
            if(data.type=='eway'){
              window.location = data.url;
            }else{
              location.reload();
            }
        }
      });
    }
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/front/cart.blade.php ENDPATH**/ ?>