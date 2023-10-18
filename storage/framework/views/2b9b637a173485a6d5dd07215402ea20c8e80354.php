
<?php $__env->startSection('title',setting_item_with_lang('error_404_title')); ?>
<?php $__env->startSection('message',!empty($exception->getMessage())? $exception->getMessage() :setting_item_with_lang('error_404_desc')); ?>
<?php $__env->startSection('code',404); ?>
<?php $__env->startSection('image',get_file_url(setting_item('error_404_banner'))); ?>


<?php echo $__env->make('errors.illustrated-layout',['title'=>setting_item_with_lang('error_404_title')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/resources/views/errors/404.blade.php ENDPATH**/ ?>