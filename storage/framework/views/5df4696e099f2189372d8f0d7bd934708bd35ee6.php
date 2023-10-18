<?php if($list_item): ?>
<!-- Our Testimonials -->
<section id="our-testimonials" class="our-testimonial"  style="background-image: url('<?php echo e($bg_image_url); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2 class="color-white"><?php echo e($title ?? ''); ?></h2>
                    <p class="color-white"><?php echo e($sub_title ?? ''); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="testimonial_grid_slider">
                    <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $avatar_url = get_file_url($item['avatar'], 'full'); ?>
                    <div class="item">
                        <div class="testimonial_grid">
                            <div class="thumb">
                                <img src="<?php echo e($avatar_url); ?>" alt="<?php echo e($item['name'] ?? ''); ?>">
                            </div>
                            <div class="details">
                                <h4><?php echo e($item['name'] ?? ""); ?></h4>
                                <p><?php echo e($item['position'] ?? ""); ?></p>
                                <p class="mt25"><?php echo e($item['desc'] ?? ""); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/blocks/testimonial/index.blade.php ENDPATH**/ ?>