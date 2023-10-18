<?php
    $translation = $row->translate();
?>
<div class="for_blog feat_property">
    <a href="<?php echo e($row->getDetailUrl()); ?>">
        <div class="thumb">
            <img src="<?php echo e(get_file_url($row->image_id,'medium')); ?>" class="img-whp" alt="<?php echo e($translation->name ?? ''); ?>">
        </div>
        <div class="details">
            <div class="tc_content">
                <?php $category = $row->category; ?>
                <?php if(!empty($category)): ?>
                    <?php $t = $category->translate(); ?>
                    <p class="text-thm">
                        <a href="<?php echo e($category->getDetailUrl(app()->getLocale())); ?>">
                            <?php echo e($t->name ?? ''); ?>

                        </a>
                    </p>
                <?php endif; ?>
                <h4><a href="<?php echo e($row->getDetailUrl(app()->getLocale())); ?>"><?php echo e($translation->title); ?></a></h4>
            </div>
            <div class="fp_footer">
                <ul class="fp_meta float-left mb0">
                    <?php if(!empty($row->user->id)): ?>
                    <li class="list-inline-item"><a href="#">
                    <?php if($avatar_url = $row->user->getAvatarUrl()): ?>
                        <img class="avatar" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($row->user->getDisplayName()); ?>">
                    <?php else: ?>
                        <span class="avatar-text-list"><?php echo e(ucfirst($row->user->getDisplayName()[0])); ?></span>
                    <?php endif; ?>
                    </a></li>
                    <li class="list-inline-item"><a href="#"><?php echo e($row->user->getDisplayName()); ?></a></li>
                    <?php endif; ?>
                </ul>
                <a class="fp_pdate float-right" href="#"><?php echo e(display_date($row->updated_at)); ?></a>
            </div>
        </div>
    </a>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/News/Views/frontend/blocks/list-news/loop.blade.php ENDPATH**/ ?>