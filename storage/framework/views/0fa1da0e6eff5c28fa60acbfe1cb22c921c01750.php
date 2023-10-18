
<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="our-error bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="error_page footer_apps_widget">
                        <img class="img-fluid" src="<?php echo $__env->yieldContent('image'); ?>" alt="error.png">
                        <div class="erro_code"><h1><?php echo $__env->yieldContent('title'); ?></h1></div>
                        <p><?php echo $__env->yieldContent('message'); ?></p>
                    </div>
                    <a href="<?php echo e(url('/')); ?>" class="btn btn_error btn-thm"><?php echo e(__("Go back to homepage")); ?></a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes\Findhouse\resources\views/errors/illustrated-layout.blade.php ENDPATH**/ ?>