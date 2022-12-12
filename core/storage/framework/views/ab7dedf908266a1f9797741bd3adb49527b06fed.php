<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Option Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b><?php echo e(__('Edit Options')); ?></b> </h3>
                <a class="btn btn-primary   btn-sm" href="<?php echo e(route('back.option.index',$item->id)); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
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
								<form class="admin-form" action="<?php echo e(route('back.option.update',[$item->id,$option->id])); ?>"
									method="POST" enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('PUT'); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
                                        <label for="attribute_id"><?php echo e(__('Attribute')); ?> *</label>
                                        <select name="attribute_id" class="form-control" id="attribute_id" >
                                            <option value=""><?php echo e(__('Select Attribute')); ?></option>
                                            <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($attribute->id); ?>" <?php echo e($attribute->id == $option->attribute_id ? 'selected' : ''); ?>><?php echo e($attribute->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
									</div>

									<div class="form-group">
										<label for="attr_name"><?php echo e(__('Name')); ?> *</label>
										<input type="text" name="name" class="form-control" id="attr_name"
											placeholder="<?php echo e(__('Enter Name')); ?>" value="<?php echo e($option->name); ?>" >
									</div>

                                    <div class="form-group">
										<label for="stock"><?php echo e(__('Stock')); ?> *</label>
										<input type="text" name="stock" class="form-control" id="stock"
											placeholder="<?php echo e(__('Enter Stock')); ?>" value="<?php echo e($option->stock); ?>" >
                                            <label for="unlimited">
                                                <input type="checkbox" <?php echo e($option->stock == 'unlimited' ? 'checked' : ''); ?> class="my-2" id="unlimited">
                                            <?php echo e(__('Unlimited Stock')); ?>

                                            </label>
									</div>

                                    <div class="form-group">
                                        <label for="price"><?php echo e(__('Price')); ?> *</label>
                                        <small>(<?php echo e(__('Set 0 to make it free')); ?>)</small>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php echo e($curr->sign); ?></span>
                                            </div>
                                            <input type="text" id="price"
                                                name="price" class="form-control"
                                                placeholder="<?php echo e(__('Enter Price')); ?>"

                                                value="<?php echo e(PriceHelper::setPrice($option->price)); ?>" >
                                        </div>
                                    </div>

                                    <input type="hidden" id="attr_keyword" name="keyword" value="<?php echo e($option->keyword); ?>">

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

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\rndmart1\core\resources\views/back/item/attribute_option/edit.blade.php ENDPATH**/ ?>