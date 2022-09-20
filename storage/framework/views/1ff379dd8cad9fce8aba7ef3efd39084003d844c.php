

<?php $__env->startSection('content'); ?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>S.no</th>
			<th>Product Name</th>
			<th>Category Name</th>
			<th>Price</th>
			<th>Extra Details</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($key+1); ?></td>
			<td><?php echo e($product->name); ?></td>
			<td>
				<?php if($product->category_id): ?>
					<?php echo e($product->category->name); ?>

				<?php endif; ?>
			</td>
			<td><?php echo e($product->price); ?></td>
			<td><button><a href="<?php echo e(route('product.extraDetails',$product->id)); ?>">Add</a></button></td>
			<td><img style="height:80px;width:80px;" src="<?php echo e(asset('uploads/'.$product->image)); ?>"></td>
			<td>
				<a href="<?php echo e(route('product.edit',$product->id)); ?>" style="font-size:17px;padding:5px;"><i class="fa fa-edit"></i></a>
				<a href="javaseript::void(0)" style="font-size:17px;padding:5px;" data-id="<?php echo e($product->id); ?>" class="delete"><i class="fa fa-trash"></i></a>
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
				url:'<?php echo e(route("product.delete")); ?>',
				method:'post',
				data:{
					_token: "<?php echo e(csrf_token()); ?>",
					'id':id
				},
				success: function(data){
						location.reload();
				}
			});
		}
		});
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/admin/product/index.blade.php ENDPATH**/ ?>