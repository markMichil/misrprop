<?php
    $listCat = \Themes\Findhouse\Property\Models\Property::where("is_featured",1)->get();
?>
<?php if(!empty($listCat)): ?>
    <div class="terms_condition_widget">
        <h4 class="title"><?php echo e(__('Featured Properties')); ?></h4>
        <div class="sidebar_feature_property_slider">
            <?php $__currentLoopData = $listCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <div class="feat_property home7">
                    <div class="thumb">
                        <img class="img-whp" src="<?php echo e($item->image_url); ?>" alt="<?php echo e($item->title); ?>">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a><?php echo e($item->property_type == 1 ? __('For Buy') : __('For Rent')); ?></a></li>
                                <?php if($item->is_featured == 1): ?>
                                <li class="list-inline-item"><a><?php echo e(__('Featured')); ?></a></li>
                                <?php else: ?>
                                <li></li>
                                <?php endif; ?>
                            </ul>
                            <a class="fp_price" href="#"><?php echo e($item->prefix_price); ?> <?php echo e($item->display_price); ?><small></small></a>
                            <a href="<?php echo e($item->getDetailUrl()); ?>"><h4 class="posr color-white"><?php echo e($item->title); ?></h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/sidebar/FeatureProperty.blade.php ENDPATH**/ ?>