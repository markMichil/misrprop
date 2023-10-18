<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div class="main-title text-center">
            <h2><?php echo e(clean($title)); ?></h2>
            <p><?php echo e(clean($desc)); ?></p>
        </div>
    </div>
</div>

<div class="row">
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <?php echo $__env->make('Location::frontend.blocks.list-locations.loop_side',['class_form'=>'property_city_home6'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Location/Views/frontend/blocks/list-locations/style_4.blade.php ENDPATH**/ ?>