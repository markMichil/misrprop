

<section id="property-search" class="property-search bg-img4" style="background-image: url(<?php echo e($bg_image_url); ?>); ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto ">
                <div class="<?php echo e($org_style == 'style_2' ? 'search_smart_property text-center' : 'modern_apertment mt30'); ?> " style="<?php echo e($org_style == 'style_3' ? 'background-color:'.$bg_color : ''); ?>">
                    <h2 class="title"><?php echo e(clean($title)); ?></h2>
                    <h4 class="subtitle"><?php echo e(clean($sub_title)); ?></h4>
                    <?php if(isset($desc) && $desc!=''): ?>
                        <p><?php echo e(clean($desc)); ?></p>
                    <?php endif; ?>
                    <?php if($link_title): ?>
                    <a class="<?php echo e($org_style == 'style_2' ? 'btn ssp_btn' : 'btn booking_btn btn-thm'); ?> " href="<?php echo e($link_more); ?>"><?php echo e(clean($link_title)); ?></a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/blocks/call-to-action/style_2.blade.php ENDPATH**/ ?>