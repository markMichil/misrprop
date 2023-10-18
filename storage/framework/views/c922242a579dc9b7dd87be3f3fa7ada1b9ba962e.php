<section id="feature-property" class="feature-property mt80 pb50">
    <?php if(empty($hide_scroll_down)): ?>
    <div class="mouse_scroll">
        <a href="#feature-property">
            <div class="icon">
                <h4><?php echo e(__('Scroll Down')); ?></h4>
                <p><?php echo e(__('to discover more')); ?></p>
            </div>
            <div class="thumb">
                <img src="<?php echo e(asset('themes/findhouse/images/resource/mouse.png')); ?>" alt="mouse.png">
            </div>
        </a>
    </div>
    <?php endif; ?>
    <div class="container-fluid ovh">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title mb40">
                    <?php if($title): ?>
                        <h2><?php echo e($title); ?></h2>
                    <?php endif; ?>
                        <p>
                    <?php if($desc): ?>
                        <?php echo e($desc); ?>

                    <?php endif; ?>
                   <a class="float-right" href="<?php echo e(route('property.search')); ?>"><?php echo e(__('View All')); ?> <span class="flaticon-next"></span></a></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="feature_property_home3_slider">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('Property::frontend.layouts.search.loop-gird-bg-image',
                        ['img_bg_class'=>'feature_property_bg_image_st2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/blocks/list-property/style_2.blade.php ENDPATH**/ ?>