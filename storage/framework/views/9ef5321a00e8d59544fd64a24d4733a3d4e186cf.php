

<?php $__env->startSection('content'); ?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>S.no</th>
			<th>Name</th>
			<th>Email</th>
			<th>Created Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($key+1); ?></td>
			<td><?php echo e($user->name); ?></td>
			<td><?php echo e($user->email); ?></td>
			<td><?php echo e($user->created_at); ?></td>
			<td>
				<a href="javaseript::void(0)" style="font-size:17px;padding:5px;" data-id="<?php echo e($user->id); ?>" class="delete"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-script'); ?>
	<script>
		$('.delete').on('click',function(){
			if(confirm('Are you delete this user.')){
			var id = $(this).data('id');
			$.ajax({
				url:'<?php echo e(route("user.delete")); ?>',
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
<?php echo $__env->make('admin.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\ecommerce\resources\views/admin/user/index.blade.php ENDPATH**/ ?>