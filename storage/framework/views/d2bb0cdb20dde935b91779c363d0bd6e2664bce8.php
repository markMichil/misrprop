<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb" <?php if(!empty($bg_image_url)): ?> style="background-image: url('<?php echo e($bg_image_url); ?>'); background-size: cover" <?php endif; ?> >
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url(app_get_locale(false, '/'))); ?>"><?php echo e(__("Home")); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($title ?? ''); ?></li>
                    </ol>
                    <h1 class="breadcrumb_title"><?php echo e($title ?? ''); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/page-banner/index.blade.php ENDPATH**/ ?>