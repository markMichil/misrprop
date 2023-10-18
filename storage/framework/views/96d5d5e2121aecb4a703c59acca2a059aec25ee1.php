
<!-- Feature Properties -->
<section id="feature-property" class="feature-property-home6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title mb40">

                    <?php if($title): ?>
                        <h2><?php echo e(clean($title)); ?></h2>
                    <?php endif; ?>
                    <p>
                        <?php if($desc): ?>
                            <?php echo e(clean($desc)); ?>.
                    <?php endif; ?>
                            <a class="float-right" href="<?php echo e(route('property.search')); ?>"><?php echo e(__('View All')); ?> <span
                                    class="flaticon-next"></span></a></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature_property_home6_slider">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('Property::frontend.layouts.search.loop-gird-overlay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/blocks/list-property/style_4.blade.php ENDPATH**/ ?>