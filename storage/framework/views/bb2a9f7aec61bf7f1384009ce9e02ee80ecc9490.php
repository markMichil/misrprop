<?php if(count($property_related) > 0): ?>
    <div class="col-lg-12">
        <h4 class="mt30 mb30"><?php echo e(__("Similar Properties")); ?></h4>
    </div>
    <?php $__currentLoopData = $property_related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6">
            <?php echo $__env->make('Property::frontend.layouts.search.loop-gird',['row'=> $item,'include_param'=>0], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/details/property-related.blade.php ENDPATH**/ ?>