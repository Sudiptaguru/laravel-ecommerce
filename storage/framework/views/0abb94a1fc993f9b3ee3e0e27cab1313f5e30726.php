

<?php $__env->startSection('content'); ?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>S.no</th>
			<th>Product Name</th>
			<th>User Name</th>
			<th>Qty</th>
			<th>Total Amount</th>
			<th>Payment Status</th>
			<th>booking Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $booking_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$booking_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($key+1); ?></td>
			<td><?php echo e($booking_product->product->name); ?></td>
			<td><?php echo e($booking_product->user->name); ?></td>
			<td><?php echo e($booking_product->qty); ?></td>
			<td>$<?php echo e($booking_product->qty * $booking_product->product->price); ?></td>
			<td><?php echo e($booking_product->payment_status); ?></td>
			<td>
				<?php $book_status = $booking_product->booking_status; ?>
				<select class="book_status" data-id="<?php echo e($booking_product->id); ?>">
					<option value="0" <?php if($book_status == '0'): ?> selected <?php endif; ?>>In Progress</option>
					<option value="1" <?php if($book_status == '1'): ?> selected <?php endif; ?>>Booking Cancel</option>
					<option value="2" <?php if($book_status == '2'): ?> selected <?php endif; ?>>Booked</option>
				</select>
			</td>
			<td>
				<a href="javaseript::void(0)" style="font-size:17px;" data-id="<?php echo e($booking_product->id); ?>" class="delete"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-script'); ?>
	<script>
		$('.delete').on('click',function(){
			if(confirm('Are you delete this product.')){
			var id = $(this).data('id');
			$.ajax({
				url:'<?php echo e(route("booking.product.delete")); ?>',
				data:{
					'id':id
				},
				success: function(data){
						location.reload();
				}
			});
		}
		});

		$('.book_status').on('change',function(){
			var booking_status = $(this).val();
			var id = $(this).data('id');
			$.ajax({
				url:'<?php echo e(route("booking.product.status")); ?>',
				data:{
					'booking_status':booking_status,
					'id':id,
				}
			});
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/admin/bookedProducts/index.blade.php ENDPATH**/ ?>