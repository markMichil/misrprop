<!-- About Text Content -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2 class="mt0"><?php echo e($title ?? ''); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="<?php if(!empty($image)): ?> col-lg-8 col-xl-7 <?php else: ?> col-12 <?php endif; ?>">
                <div class="about_content">
                    <?php echo @clean($description ?? ''); ?>

                    <?php if(!empty($list_item)): ?>
                    <ul class="ab_counting">
                        <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-inline-item">
                            <div class="about_counting">
                                <div class="icon"><span class="<?php echo e($item['icon_class'] ?? ''); ?>"></span></div>
                                <div class="details">
                                    <h3><?php echo e($item['value'] ?? ''); ?></h3>
                                    <p><?php echo e($item['title'] ?? ''); ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($image)): ?>
                <div class="col-lg-4 col-xl-5">
                    <div class="about_thumb">
                        <img class="img-fluid w100" src="<?php echo e(\Modules\Media\Helpers\FileHelper::url($image, 'full')); ?>" alt="<?php echo e($title ?? ''); ?>">
                        <?php if(!empty($video_url)): ?>
                            <a class="popup-iframe popup-youtube color-white" href="<?php echo e($video_url); ?>"><i class="flaticon-play"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/image-text/index.blade.php ENDPATH**/ ?>