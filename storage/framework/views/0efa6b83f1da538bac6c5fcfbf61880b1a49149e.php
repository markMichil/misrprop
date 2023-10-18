
<!-- Property Cities -->
<section id="property-city" class="property-city pt0 pb30 style_3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h2><?php echo e($title); ?></h2>
                    <p><?php echo e($desc); ?> <a class="float-right" href="<?php echo e(route('property.search')); ?>"><?php echo e(__('View All')); ?> <span
                                class="flaticon-next"></span></a></p>

                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl">
                    <?php echo $__env->make('Location::frontend.blocks.list-locations.loop_style_3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Location/Views/frontend/blocks/list-locations/style_3.blade.php ENDPATH**/ ?>