<?php if(!empty($list_slider)): ?>
	<section class="p0">
		<div class="container-fluid p0">
			<div class="home8-slider vh-100">
				<div id="bs_carousel" class="carousel slide bs_carousel" data-ride="carousel" data-pause="true" data-interval="7000">
					<div class="carousel-inner">
						<?php $__currentLoopData = $list_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php
								$img = get_file_url($item['bg_image'],'full');
							?>
							<div class="carousel-item <?php if($i==0): ?> active <?php endif; ?>" data-slide="0" data-interval="false">
								<div class="bs_carousel_bg" <?php if(!empty($img)): ?> style="background-image: url(<?php echo e($img); ?>);" <?php endif; ?>></div>
								<div class="bs-caption">
									<div class="container">
										<div class="row">
											<div class="col-md-7 col-lg-8">
												<?php if(!empty($item['title'])): ?>
													<div class="main_title"><?php echo e($item['title']); ?></div>
												<?php endif; ?>
												<?php if(!empty($item['sub_title'])): ?>
													<p class="parag"><?php echo e($item['title']); ?></p>
												<?php endif; ?>
											</div>
											<div class="col-md-5 col-lg-4">
												<?php if(!empty($property = $item['row'])): ?>
                                                    <?php
                                                    $translation = $property->translate();
                                                    ;?>
													<div class="feat_property home8">
														<div class="details">
															<div class="tc_content w-100">
																<ul class="tag">
																	<li class="list-inline-item"><a href="#"><?php echo e($property->property_type == 1 ? __('For Buy') : __('For Rent')); ?></a></li>
																	<?php if($property->is_featured): ?>
																		<li class="list-inline-item"><a href="#">Featured</a></li>
																	<?php endif; ?>
																</ul>
																<?php if($property->Category): ?>
																	<p class="text-thm"><?php echo e($property->Category->name); ?></p>
																<?php endif; ?>
																<a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($property->getDetailUrl()); ?>">
																	<h4><?php echo e($translation->title); ?></h4>
																</a>
																<?php if(!empty($property->location->name)): ?>
																	<?php $location =  $property->location->translate() ?>
																<?php endif; ?>
																<p><span class="flaticon-placeholder"></span> <?php echo e($location->name ?? ''); ?></p>
																<ul class="prop_details">
																	<li class="list-inline-item"><a href="#"><?php echo e(__('Beds:')); ?> <?php echo e($property->bed); ?></a></li>
																	<li class="list-inline-item"><a href="#"><?php echo e(__('Baths:')); ?> <?php echo e($property->bathroom); ?></a></li>
																	<li class="list-inline-item"><a href="#"><?php echo e(__('Sq:')); ?> <?php echo size_unit_format($property->square); ?></a></li>
																</ul>
																<a class="fp_price" href="#"><?php echo e($property->prefix_price); ?> <?php echo e($property->display_price); ?></a>
																<ul class="icon">
																	<li class="list-inline-item"><i class="fa fa-heart"></i></li>

																	<li class="list-inline-item">
																		<a class="service-wishlist <?php if($property->hasWishList): ?> active <?php endif; ?>" data-id="<?php echo e($property->id); ?>" data-type="property"><i class="fa fa-heart"></i></a></li>
																</ul>
															</div>
															<div class="fp_footer">
                                                                <?php if($property->user->id): ?>
																<ul class="fp_meta float-left">
																	<li class="list-inline-item"><a href="<?php echo e(route('agent.detail', ['id' => $property->user->id])); ?>">
																			<?php if($avatar_url = $property->user->getAvatarUrl()): ?>
																				<img class="avatar" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($property->user->getDisplayName()); ?>">
																			<?php else: ?>
																				<span class="avatar-text-list"><?php echo e(ucfirst($property->user->getDisplayName()[0])); ?></span>
																			<?php endif; ?>
																		</a></li>
																	<li class="list-inline-item"><a href="<?php echo e(route('agent.detail', ['id' => $property->user->id])); ?>"><?php echo e($property->user->getDisplayName()); ?>

                                                                            <?php echo $__env->make('Property::frontend.layouts.details.verify-badge',['user'=>$property->user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a></li>
																</ul>
                                                                <?php endif; ?>
																<div class="fp_pdate float-right"><?php echo e(display_date($property->updated_at)); ?></div>
															</div>
														</div>
													</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<?php if($hide_slider_controls != 1): ?>
						<div class="property-carousel-controls">
							<a class="property-carousel-control-prev" role="button" data-slide="prev">
								<span class="flaticon-left-arrow-1"></span>
							</a>
							<a class="property-carousel-control-next" role="button" data-slide="next">
								<span class="flaticon-right-arrow"></span>
							</a>
						</div>
					<?php endif; ?>
				</div>
				<?php if($hide_slider_controls != 1): ?>
					<div class="carousel slide bs_carousel_prices" data-ride="carousel" data-pause="false" data-interval="false">
						<div class="carousel-inner"></div>
						<div class="property-carousel-ticker">
							<div class="property-carousel-ticker-counter"></div>
							<div class="property-carousel-ticker-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</div>
							<div class="property-carousel-ticker-total"></div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Template/Views/frontend/blocks/banner-property/index.blade.php ENDPATH**/ ?>