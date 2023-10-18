<?php if(!empty($list_item)): ?>
    <!-- Why Chose Us -->
    <section class="you-looking-for" style="background-image: url(<?php echo e($bg_image_url); ?>); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title text-center mb30">
                        <h2><?php echo e($title ? clean($title) : ''); ?></h2>
                        <p><?php echo e($desc ? clean($desc) : ''); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Cities -->
    <section id="property-city" class="property-city pb30">
        <div class="container">
            <div class="row features_row">
                <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-3 col-xl-3 p0">
                    <a href="<?php echo e($item['link_more']); ?>">
                    <div class="why_chose_us home6">
                        <?php if(!empty($item['featured_icon'])): ?>
                        <div class="icon">
                            <span class="<?php echo e($item['featured_icon']); ?>"></span>
                        </div>
                        <?php endif; ?>
                        <div class="details">
                            <h4><?php echo e(clean($item['title'])); ?></h4>
                            <p><?php echo $item['desc']; ?></p>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>

<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/offer-block/style_2.blade.php ENDPATH**/ ?>