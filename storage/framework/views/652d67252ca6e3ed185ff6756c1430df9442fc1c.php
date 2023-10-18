<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="<?php echo e($html_class ?? ''); ?>">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php ($favicon = setting_item('site_favicon')); ?>
    <link rel="icon" type="image/png" href="<?php echo e(!empty($favicon)?get_file_url($favicon,'full'):url('images/favicon.png')); ?>" />
    <?php echo $__env->make('Layout::parts.seo-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="<?php echo e(asset('libs/flags/css/flag-icon.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('themes/findhouse/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/findhouse/css/dashbord_navitaion.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/findhouse/css/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset("libs/daterange/daterangepicker.css")); ?>" >
    <link rel="stylesheet" href="<?php echo e(asset('themes/findhouse/dist/frontend/module/user/css/user.css')); ?>">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all' />
    <?php echo $__env->make('Layout::parts.global-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        var image_editer = {
            language: '<?php echo e(app()->getLocale()); ?>',
            translations: {
                <?php echo e(app()->getLocale()); ?>: {
                    'header.image_editor_title': '<?php echo e(__('Image Editor')); ?>',
                    'header.toggle_fullscreen': '<?php echo e(__('Toggle fullscreen')); ?>',
                    'header.close': '<?php echo e(__('Close')); ?>',
                    'header.close_modal': '<?php echo e(__('Close window')); ?>',
                    'toolbar.download': '<?php echo e(__('Save Change')); ?>',
                    'toolbar.save': '<?php echo e(__('Save')); ?>',
                    'toolbar.apply': '<?php echo e(__('Apply')); ?>',
                    'toolbar.saveAsNewImage': '<?php echo e(__('Save As New Image')); ?>',
                    'toolbar.cancel': '<?php echo e(__('Cancel')); ?>',
                    'toolbar.go_back': '<?php echo e(__('Go Back')); ?>',
                    'toolbar.adjust': '<?php echo e(__('Adjust')); ?>',
                    'toolbar.effects': '<?php echo e(__('Effects')); ?>',
                    'toolbar.filters': '<?php echo e(__('Filters')); ?>',
                    'toolbar.orientation': '<?php echo e(__('Orientation')); ?>',
                    'toolbar.crop': '<?php echo e(__('Crop')); ?>',
                    'toolbar.resize': '<?php echo e(__('Resize')); ?>',
                    'toolbar.watermark': '<?php echo e(__('Watermark')); ?>',
                    'toolbar.focus_point': '<?php echo e(__('Focus point')); ?>',
                    'toolbar.shapes': '<?php echo e(__('Shapes')); ?>',
                    'toolbar.image': '<?php echo e(__('Image')); ?>',
                    'toolbar.text': '<?php echo e(__('Text')); ?>',
                    'adjust.brightness': '<?php echo e(__('Brightness')); ?>',
                    'adjust.contrast': '<?php echo e(__('Contrast')); ?>',
                    'adjust.exposure': '<?php echo e(__('Exposure')); ?>',
                    'adjust.saturation': '<?php echo e(__('Saturation')); ?>',
                    'orientation.rotate_l': '<?php echo e(__('Rotate Left')); ?>',
                    'orientation.rotate_r': '<?php echo e(__('Rotate Right')); ?>',
                    'orientation.flip_h': '<?php echo e(__('Flip Horizontally')); ?>',
                    'orientation.flip_v': '<?php echo e(__('Flip Vertically')); ?>',
                    'pre_resize.title': '<?php echo e(__('Would you like to reduce resolution before editing the image?')); ?>',
                    'pre_resize.keep_original_resolution': '<?php echo e(__('Keep original resolution')); ?>',
                    'pre_resize.resize_n_continue': '<?php echo e(__('Resize & Continue')); ?>',
                    'footer.reset': '<?php echo e(__('Reset')); ?>',
                    'footer.undo': '<?php echo e(__('Undo')); ?>',
                    'footer.redo': '<?php echo e(__('Redo')); ?>',
                    'spinner.label': '<?php echo e(__('Processing...')); ?>',
                    'warning.too_big_resolution': '<?php echo e(__('The resolution of the image is too big for the web. It can cause problems with Image Editor performance.')); ?>',
                    'common.x': '<?php echo e(__('x')); ?>',
                    'common.y': '<?php echo e(__('y')); ?>',
                    'common.width': '<?php echo e(__('width')); ?>',
                    'common.height': '<?php echo e(__('height')); ?>',
                    'common.custom': '<?php echo e(__('custom')); ?>',
                    'common.original': '<?php echo e(__('original')); ?>',
                    'common.square': '<?php echo e(__('square')); ?>',
                    'common.opacity': '<?php echo e(__('Opacity')); ?>',
                    'common.apply_watermark': '<?php echo e(__('Apply watermark')); ?>',
                    'common.url': '<?php echo e(__('URL')); ?>',
                    'common.upload': '<?php echo e(__('Upload')); ?>',
                    'common.gallery': '<?php echo e(__('Gallery')); ?>',
                    'common.text': '<?php echo e(__('Text')); ?>',
                }
            }
        };
    </script>
    <!-- Styles -->
    <?php echo $__env->yieldPushContent('css'); ?>

    
    <link href="<?php echo e(route('core.style.customCss')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('libs/carousel-2/owl.carousel.css')); ?>" rel="stylesheet">
    <?php if(setting_item_with_lang('enable_rtl')): ?>
        <link href="<?php echo e(asset('themes/findhouse/dist/frontend/css/rtl.css')); ?>" rel="stylesheet">
    <?php endif; ?>
</head>
<body class="user-page bgc-f7 <?php echo e($body_class ?? ''); ?> <?php if(setting_item_with_lang('enable_rtl')): ?> is-rtl <?php endif; ?>">
    <?php echo setting_item('body_scripts'); ?>

    <div class="wrapper bravo_wrap">
        <?php echo $__env->make('Layout::parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-block d-sm-flex justify-content-start bravo_user_profile">
            <div class="dashboard_sidebar_menu dn-992">
                <?php echo $__env->make('User::frontend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <section class="our-dashbord dashbord bgc-f7">
                <div class="<?php if(empty($container)): ?> container-fluid <?php else: ?> container <?php endif; ?>">
                    <div class="row">
                        <div class="col-sm-12 maxw100flex-992">
                            <?php echo $__env->make('Layout::parts.user.mobile-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="mb10">
                                <?php if(!empty($breadcrumbs)): ?>
                                <div class="breadcrumb_content style2">
                                    <h3>
                                        <a href="<?php echo e(url('/')); ?>"><?php echo e(__("Home")); ?></a> &#187;
                                        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(!empty($breadcrumb['url'])): ?>
                                                <a href="<?php echo e(url($breadcrumb['url'])); ?>"><?php echo e($breadcrumb['name']); ?></a>
                                            <?php else: ?>
                                                <?php echo e($breadcrumb['name']); ?>

                                            <?php endif; ?>
                                            <?php if(isset($breadcrumbs[$key + 1])): ?>
                                                &#187;
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </h3>
                                </div>
                                <?php endif; ?>
                                <?php echo $__env->make('admin.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="my-content">
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                            <div class="row mt10 d-none">
                                <div class="col-lg-12">
                                    <div class="copyright-widget text-center">
                                        <p><?php echo e(__('© 2020 Find House. Made with love.')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



    </div>
    <?php if(Auth::id()): ?>
        <?php echo $__env->make('Media::browser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php echo setting_item('footer_scripts'); ?>

    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/libs/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('themes/findhouse/libs/vue/vue.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/jquery-migrate-3.0.0.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/popper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/jquery.mmenu.all.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/ace-responsive-menu.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/bootstrap-select.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/snackbar.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/simplebar.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/parallax.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/scrollto.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/jquery-scrolltofixed-min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/jquery.counterup.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/wow.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/progressbar.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/slider.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/timepicker.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/wow.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/dashboard-script.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('libs/tinymce/js/tinymce/tinymce.min.js')); ?>" ></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/js/script.js')); ?>"></script>
    <?php if(Auth::id()): ?>
        <script src="<?php echo e(asset('module/media/js/browser.js?_ver='.config('app.asset_version'))); ?>"></script>
    <?php endif; ?>
    <script src="<?php echo e(asset('js/functions.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('themes/findhouse/module/user/js/user.js')); ?>"></script>

    <script src="<?php echo e(asset('libs/filerobot-image-editor/filerobot-image-editor.min.js?_ver='.config('app.asset_version'))); ?>"></script><?php if(setting_item('user_enable_2fa')): ?>
    <?php echo $__env->make('auth.confirm-password-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script src="<?php echo e(asset('/module/user/js/2fa.js')); ?>"></script>
    <?php endif; ?>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Layout/user.blade.php ENDPATH**/ ?>