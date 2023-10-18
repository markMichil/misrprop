<section class="home-three bg-img3" style="background-image: url('<?php echo e($bg_image_url); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="home3_home_content">
                    <?php if(!empty($title)): ?>
                        <h1><?php echo e($title); ?></h1>
                    <?php endif; ?>
                    <?php if(!empty($sub_title)): ?>
                        <h4><?php echo e($sub_title); ?></h4>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="home3_home_content">
                    <?php if(!empty($video_url)): ?>
                    <a class="popup_video_btn popup-iframe popup-youtube" href="<?php echo e($video_url); ?>"><i class="flaticon-play"></i></a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make("Template::frontend.blocks.form-search-all-service.form-search",['class_form'=>"home3"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </div>
</section>

<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/form-search-all-service/style_4.blade.php ENDPATH**/ ?>