<?php
    $terms_ids = $row->terms->pluck('term_id');
    $attributes = \Modules\Core\Models\Terms::getTermsById($terms_ids);
?>
<?php if(!empty($terms_ids) and !empty($attributes)): ?>
    <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $translate_attribute = $attribute['parent']->translate() ?>
        <?php if(empty($attribute['parent']['hide_in_single'])): ?>
            <div class="col-lg-12">
                <div class="application_statics mt30 g-attributes <?php echo e($attribute['parent']->slug); ?> attr-<?php echo e($attribute['parent']->id); ?>" >
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="mb10"><?php echo e($translate_attribute->name); ?></h4>
                        </div>
                        <?php $terms = $attribute['child'] ?>
                        <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $translate_term = $term->translate() ?>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <ul class="order_list list-inline-item">
                                    <li><a href="#">
                                        <?php if($translate_term->icon): ?>
                                            <span class="<?php echo e($translate_term->icon); ?>"></span>
                                        <?php else: ?>
                                            <span class="flaticon-tick"></span>
                                        <?php endif; ?>
                                        <?php echo e($translate_term->name); ?>

                                    </a></li>
                                </ul>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/details/property_feature.blade.php ENDPATH**/ ?>