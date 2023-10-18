
<section class="home-six home6-overlay" style="background-image: url('<?php echo e($bg_image_url); ?>');">
    <div class="container">
        <div class="row posr">
            <div class="col-lg-12">
                <div class="home_content home6">
                    <div class="home-text home6 text-center">
                        <?php if(!empty($title)): ?>
                        <h2 class="fz55"><?php echo e($title); ?></h2>
                        <?php endif; ?>
                            <?php if(!empty($sub_title)): ?>
                            <p class="fz18"><?php echo e($sub_title); ?></p>
                            <?php endif; ?>
                    </div>
                    <?php echo $__env->make("Template::frontend.blocks.form-search-all-service.form-search",['class_form'=>"home6"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/form-search-all-service/style_5.blade.php ENDPATH**/ ?>