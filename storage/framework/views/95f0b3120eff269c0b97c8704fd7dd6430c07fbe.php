<!-- Home Design -->
<section class="home-one home5-overlay home5_bgi5 parallax" data-stellar-background-ratio="1.5"  style="background-image: url('<?php echo e($bg_image_url); ?>');">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-7">
					<div class="home_content home5">
						<div class="home-text home5">
							<?php if(!empty($title)): ?>
							<h2 class="fz55"><?php echo e($title); ?></h2>
							<?php endif; ?>
								<?php if(!empty($sub_title)): ?>
								<p class="discounts_para fz18 color-white"><?php echo e($sub_title); ?></p>
								<?php endif; ?>
								<?php if(!empty($category_ids)): ?>
									<h4><?php echo e(__('What are you looking for?')); ?></h4>
									<ul class="mb0">
										<?php $__currentLoopData = $category_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li class="list-inline-item">
											<div class="icon_home5">
												<div class="icon"><span class="<?php echo e($category->icon); ?>"></span></div>
												<p><?php echo e($category->name); ?></p>
											</div>
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="home_content home5 style2">
                        <?php echo $__env->make("Template::frontend.blocks.form-search-all-service.form-search",['class_form'=>"home5"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div>
				</div>
			</div>
		</div>
	</section><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/form-search-all-service/style_3.blade.php ENDPATH**/ ?>