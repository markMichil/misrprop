<?php
    $languages = \Modules\Language\Models\Language::getActive();
    $locale = session('website_locale',app()->getLocale());
?>

<?php if(!empty($languages) && setting_item('site_enable_multi_lang')): ?>
    <li class="dropdown language-dropdown">
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($locale == $language->locale): ?>
                <a href="#" data-toggle="dropdown" class="is_login">





                    <?php if($language->name == 'Egyptian'): ?>
                        AR
                    <?php elseif($language->name == 'English'): ?>
                        EN
                    <?php else: ?>
                        <?php echo e($language->name); ?>

                        <?php endif; ?>

                    <i class="fa fa-angle-down"></i>
                </a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <ul class="dropdown-menu text-left">
            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($locale != $language->locale): ?>
                    <li>
                        <a href="<?php echo e(get_lang_switcher_url($language->locale)); ?>" class="is_login">



                                <?php if($language->name == 'Egyptian'): ?>
                                    AR
                                <?php elseif($language->name == 'English'): ?>
                                    EN
                                <?php else: ?>
                                    <?php echo e($language->name); ?>

                                <?php endif; ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </li>
<?php endif; ?>

<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\modules/Language/Views/frontend/switcher.blade.php ENDPATH**/ ?>