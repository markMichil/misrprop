<?php
    $recentProperty = \Themes\Findhouse\Property\Models\Property::OrderBy('recent_view')->limit(3)->get();
?>

<div class="sidebar_feature_listing">
    <h4 class="title"><?php echo e(__('Recently Viewed')); ?></h4>
    <?php $__currentLoopData = $recentProperty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="media">
        <img class="align-self-start mr-3" src="<?php echo e($item->image_url); ?>" alt="<?php echo e($item->title); ?>" style="width: 90px; height: 80px">
        <div class="media-body">
            <a target="_blank" href="<?php echo e($item->getDetailUrl()); ?>">
                <h5 class="mt-0 post_title"><?php echo e($item->title); ?></h5>
            </a>
            <a href="<?php echo e($item->getDetailUrl()); ?>"><?php echo e($item->prefix_price); ?> <?php echo e($item->display_price); ?></a>
            <ul class="mb0">
                <li class="list-inline-item"><?php echo e(__('Beds')); ?>: <?php echo e($item->bed); ?></li>
                <li class="list-inline-item"><?php echo e(__('Baths')); ?>: <?php echo e($item->bathroom); ?></li>
                <li class="list-inline-item"><?php echo e(__('Sq Ft')); ?>: <?php echo size_unit_format($item->square); ?></li>
            </ul>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/sidebar/recentViewdProperty.blade.php ENDPATH**/ ?>