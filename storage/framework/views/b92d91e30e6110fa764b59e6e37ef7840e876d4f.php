<?php if($list_item): ?>
<section class="our-team bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h2><?php echo e($title); ?></h2>
                    <p><?php echo e($desc ? $desc : ''); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team_slider">
                    <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $image_url = get_file_url($item['avatar'], 'full') ?>
                        <div class="item">
                            <div class="team_member">
                                <div class="thumb">
                                    <img class="img-fluid" src="<?php echo e($image_url); ?>" >
                                    <div class="overylay">
                                        <ul class="social_icon">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h4><?php echo e($item['name']); ?></h4>
                                    <p><?php echo e($item['type']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Agencies/Views/frontend/blocks/our_team.blade.php ENDPATH**/ ?>