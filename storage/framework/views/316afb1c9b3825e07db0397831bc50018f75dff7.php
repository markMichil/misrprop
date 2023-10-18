
<section id="our-agents" class="our-agents pt40 pb15">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title mb30">
                    <?php if($title): ?>
                        <h2><?php echo e(clean($title)); ?></h2>
                    <?php endif; ?>
                    <p>
                    <?php if($desc): ?>
                    <?php echo e(clean($desc)); ?>.
                <?php endif; ?>. <a class="float-right" href="<?php echo e(route('agent.search')); ?>"><?php echo e(__('View All')); ?><span class="flaticon-next"></span></a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="our_agents_home6_slider">
                    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item">
                        <div class="our_agent">
                            <div class="thumb bg_img_placeholder our_agent_bg_img_styl_1"  style="background-image:url(<?php echo e($row->getAvatarUrl()); ?>)">

                                <div class="overylay">
                                    <?php
                                    $socialUser = $row->user_social;

                                    if(!empty($socialUser))
                                        $socialUser = json_decode($socialUser,true);

                                    if(empty($socialUser) or !is_array($socialUser))
                                        $socialUser = [];

                                    ?>
                                    <?php if(count($socialUser) > 0): ?>
                                    <ul class="social_icon">
                                        <?php $__currentLoopData = $socialUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialUserItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <li class="list-inline-item"><a href="<?php echo e($socialUserItem['link']); ?>"><i class="<?php echo e($socialUserItem['code']); ?>" target="_blank"></i></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>

                                </div>
                            </div>
                            <div class="details">
                                <h4><?php echo e(clean($row->display_name)); ?></h4>
                                <p><?php echo e(clean($row->role_name)); ?></p>
                            </div>
                        </div>
                    </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/blocks/list-users/style_2.blade.php ENDPATH**/ ?>