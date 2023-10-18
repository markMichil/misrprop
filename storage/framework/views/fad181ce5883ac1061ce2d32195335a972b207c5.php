<?php if($list_item): ?>
<section id="our-partners" class="our-partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2><?php echo e($title); ?></h2>
                    <p><?php echo e($desc); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $link_image = get_file_url($item['avatar'], 'full')?>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?php echo e($link_image); ?>">
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Agencies/Views/frontend/blocks/partners.blade.php ENDPATH**/ ?>