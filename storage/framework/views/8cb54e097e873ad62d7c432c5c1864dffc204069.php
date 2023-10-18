<!-- Our Blog -->
<section class="our-blog bb1 pb30"  style="background-color: <?php echo e($bg_color); ?>;background-image: url('<?php echo e($bg_image_url); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2><?php echo e($title); ?></h2>
                    <?php if(!empty($desc)): ?>
                    <p><?php echo e($desc); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <?php echo $__env->make('News::frontend.blocks.list-news.loop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/News/Views/frontend/blocks/list-news/index.blade.php ENDPATH**/ ?>