<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Attribute Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Update Attribute')); ?></b> </h3>
                <a class="btn btn-primary   btn-sm" href="<?php echo e(route('back.attribute.index',$item->id)); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="<?php echo e(route('back.attribute.update',[$item->id,$attribute->id])); ?>"
									method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('PUT'); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="attr_name"><?php echo e(__('Name')); ?> *</label>
										<input type="text" name="name" class="form-control" id="attr_name"
											placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($attribute->name); ?>" >
									</div>
                                    <input type="hidden" id="attr_keyword" name="keyword" value="<?php echo e($attribute->keyword); ?>">
                                    <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">

									<div class="form-group">
										<button type="submit" class="btn btn-secondary"><?php echo e(__('Submit')); ?></button>
									</div>


									<div>
								</form>

						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\rndmart1\core\resources\views/back/item/attribute/edit.blade.php ENDPATH**/ ?>