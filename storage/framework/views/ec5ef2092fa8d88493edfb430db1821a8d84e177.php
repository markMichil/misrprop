<section id="property-city" class="property-city pb30 <?php echo e($layout ?? ""); ?>" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <?php if($title): ?>
                        <h2><?php echo e($title); ?></h2>
                    <?php endif; ?>
                    <?php if($desc): ?>
                        <p><?php echo e($desc); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $size_col = 0; ?>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    if(($key % 2) == 0 && $size_col != 0) {
                        $size_col = 4 ? 8 : 4;
                    }else {
                        $size_col = $size_col == 4 ? 8 : 4;
                    }
                ?>
                <div class="col-lg-<?php echo e($size_col); ?> col-xl-<?php echo e($size_col); ?>">
                    <?php echo $__env->make('Location::frontend.blocks.list-locations.loop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Location/Views/frontend/blocks/list-locations/index.blade.php ENDPATH**/ ?>