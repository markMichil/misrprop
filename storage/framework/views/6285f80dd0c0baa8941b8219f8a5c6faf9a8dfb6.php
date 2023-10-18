<?php if(!empty($list_item)): ?>
    <!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title text-center">
                        <h2><?php echo e($title ?? ''); ?></h2>
                        <p><?php echo e($desc ?? ''); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
                <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <a href="<?php echo e($item['link_more']); ?>" class="btn btn-default w100">
                            <div class="why_chose_us home19">
                                <?php if(!empty($item['featured_icon'])): ?>
                                <div class="icon">
                                    <span class="<?php echo e($item['featured_icon']); ?>"></span>
                                </div>
                                <?php endif; ?>
                                <div class="details">
                                    <h4><?php echo e($item['title']); ?></h4>
                                    <p><?php echo $item['desc']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/offer-block/style_5.blade.php ENDPATH**/ ?>