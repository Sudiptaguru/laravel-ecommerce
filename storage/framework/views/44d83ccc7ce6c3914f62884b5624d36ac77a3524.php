

<?php $__env->startSection('content'); ?>

<table class="table">
	<thead>
		<tr>
			<th>S.no</th>
			<th>Category Name</th>
			<th>Parent Category Name</th>
			<th>Create Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($key+1); ?></td>
			<td><?php echo e($categorie->name); ?></td>
			<td>
				<?php if($categorie->category_id): ?>
					<?php echo e($categorie->parent->name); ?>

				<?php else: ?>
					No parent category
				<?php endif; ?>
			</td>
			<td><?php echo e($categorie->created_at); ?></td>
			<td>
				<a href="<?php echo e(route('category.edit',$categorie->id)); ?>" style="font-size:17px;padding:5px;"><i class="fa fa-edit"></i></a>
				<a href="javaseript::void(0)" style="font-size:17px;padding:5px;" data-id="<?php echo e($categorie->id); ?>" class="category_delete"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-script'); ?>
	<script>
		$('.category_delete').on('click',function(){
			if(confirm('Are you delete this category.')){
			var id = $(this).data('id');
			$.ajax({
				url:'<?php echo e(route("category.delete")); ?>',
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/admin/category/index.blade.php ENDPATH**/ ?>