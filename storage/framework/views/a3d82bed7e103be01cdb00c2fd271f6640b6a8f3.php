
<div class="home10-mainslider" >
    <?php if(!empty($list_slider)): ?>
        <div class="container-fluid p-lg-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner-wrapper">
                        <div class="banner-style-one owl-theme owl-carousel">
                            <?php $__currentLoopData = $list_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $img = get_file_url($item['bg_image'],'full');
                                ?>
                                <div class="slide slide-one" <?php if(!empty($img)): ?> style="background-image: url(<?php echo e($img); ?>); height: 450px" <?php endif; ?>>
                                    <div class="container">
                                        <?php if(!empty($property = $item['row'])): ?>
                                            <?php
                                            $translation = $property->translate();
                                            $detailUrl = $property->getDetailUrl();
                                            ;?>
                                            <div class="row home-content">
                                                <div class="col-lg-12 text-center p0">
                                                    <h2 class="banner_top_title"><?php echo e($property->prefix_price); ?> <?php echo e($property->display_price); ?></h2>
                                                    <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($detailUrl); ?>">
                                                        <h3 class="banner-title"><?php echo e($translation->title); ?></h3>
                                                    </a>
                                                    <p><?php echo e(__('Beds:')); ?> <?php echo e($property->bed); ?> <?php echo e(__(', Baths:')); ?> <?php echo e($property->bathroom); ?> <?php echo e(__(', Sq:')); ?> <?php echo size_unit_format($property->square); ?></p>
                                                    <div class="btn"><a href="<?php echo e($detailUrl); ?>" class="banner-btn"><?php echo e(__('Learn More')); ?></a></div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn">
                            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
                            <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<div class="header_top home6 dn-992 p0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="<?php echo e(url('img')); ?>/image.jpg" style="width:1520px;  height:100%" >
         </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/form-search-all-service/style_6.blade.php ENDPATH**/ ?>