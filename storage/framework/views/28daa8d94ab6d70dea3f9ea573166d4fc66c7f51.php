<!-- Our Testimonials -->
<section class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center mb20">
                    <h2><?php echo e($title ?? ''); ?></h2>
                    <p><?php echo e($sub_title ?? ''); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="testimonial_grid_slider style2">
                    <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $avatar_url = get_file_url($item['avatar'] ?? '', 'full'); ?>
                        <div class="item">
                            <div class="testimonial_grid style2">
                                <div class="thumb">
                                    <?php if(!empty($avatar_url)): ?>
                                        <img src="<?php echo e($avatar_url); ?>" alt="<?php echo e($item['name'] ?? ''); ?>">
                                    <?php endif; ?>
                                    <div class="tg_quote"><span class="fa fa-quote-left"></span></div>
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
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/blocks/testimonial/style_3.blade.php ENDPATH**/ ?>