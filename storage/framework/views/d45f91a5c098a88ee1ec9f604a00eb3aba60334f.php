<?php
    $categories = \Themes\Findhouse\Property\Models\PropertyCategory::with('property')->get();
?>
<?php if(!empty($categories)): ?>
<div class="terms_condition_widget">
    <h4 class="title"><?php echo e(__('Categories')); ?></h4>
    <div class="widget_list">
        <ul class="list_details">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $catTrans = $category->translate();
                ;?>
            <li><a href="<?php echo e(route('property.search', ['category_id' => $category->id])); ?>"><i class="fa fa-caret-right mr10"></i><?php echo e($catTrans->name); ?> <span class="float-right"><?php echo e($category->property->count()); ?> <?php echo e($category->property->count() < 1 ? __('property') :  __('properties')); ?></span></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/sidebar/categoryProperty.blade.php ENDPATH**/ ?>