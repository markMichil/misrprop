<?php $listviewtype =  request()->input('type','grid') ?>
<section class="our-listing bgc-f7 pb30-991">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php echo $__env->make('Property::frontend.layouts.search.filter-search-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="dn db-991">
					<div id="main2">
						<span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> <?php echo e(__('Show Filter')); ?></span>
					</div>
				</div>
				<div class="breadcrumb_content style2 mt30-767 mb30-767">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></li>
						<li class="breadcrumb-item active text-thm" aria-current="page"><?php echo e(__('List Property')); ?></li>
					</ol>
					<h2 class="breadcrumb_title"><?php echo e(__('List Property')); ?></h2>
				</div>
			</div>
            <div class="col-lg-6">
                <div class="listing_list_style mb20-xsd tal-991">
                    <ul class="mb0">

                        <li class="list-inline-item <?php echo e($listviewtype == 'grid' ? 'active' : ''); ?> link_for_grid_view" onclick="javascript:window.location='<?php echo e(request()->fullUrlWithQuery(['type'=>'grid'])); ?>'"><a href="javascript:void(0)" ><span class="fa fa-th-large"></span></a></li>
                        <li class="list-inline-item <?php echo e($listviewtype == 'list' ? 'active' : ''); ?> link_for_list_view" onclick="javascript:window.location='<?php echo e(request()->fullUrlWithQuery(['type'=>'list'])); ?>'"><a href="javascript:void(0)" ><span class="fa fa-th-list"></span></a></li>
                    </ul>
                </div>

            </div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-xl-4">
				<?php echo $__env->make('Property::frontend.layouts.search.form-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('Property::frontend.sidebar.FeatureProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('Property::frontend.sidebar.categoryProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('Property::frontend.sidebar.recentViewdProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>
			<div class="col-md-12 col-lg-8">
				<div class="bravo-list-item">
					<div class="row">
						<div class="grid_list_search_result">
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
								<div class="left_area tac-xsd">
									<p>
										<?php if($rows->total() > 1): ?>
											<?php echo e(__(":count properties found",['count'=>$rows->total()])); ?>

										<?php else: ?>
											<?php echo e(__(":count property found",['count'=>$rows->total()])); ?>

										<?php endif; ?>
									</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
								<div class="right_area text-right tac-xsd">
									<form method="GET">
										<ul>
											<li class="list-inline-item"><span class="shrtby"><?php echo e(__('Sort by')); ?>:</span>
												<select value="<?php echo e($filter); ?>" onchange="changeFilterProperty(this)" name="filter" class="selectpicker property-select-filter show-tick">
													<option data-url="<?php echo e(request()->fullUrlWithQuery(['filter'=>'new'])); ?>" value="new" <?php if(Request::input('filter') == 'new'): ?> selected <?php endif; ?>><?php echo e(__('Newest')); ?></option>
													<option data-url="<?php echo e(request()->fullUrlWithQuery(['filter'=>'old'])); ?>" value="old" <?php if(Request::input('filter') == 'old'): ?> selected <?php endif; ?>><?php echo e(__('Oldest')); ?></option>
													<option data-url="<?php echo e(request()->fullUrlWithQuery(['filter'=>'price_high'])); ?>" value="price_high" <?php if(Request::input('filter') == 'price_high'): ?> selected <?php endif; ?>><?php echo e(__('Price [high to low]')); ?></option>
													<option data-url="<?php echo e(request()->fullUrlWithQuery(['filter'=>'price_low'])); ?>" value="price_low" <?php if(Request::input('filter') == 'price_low'): ?> selected <?php endif; ?>><?php echo e(__('Price [low to high]')); ?></option>
													<option data-url="<?php echo e(request()->fullUrlWithQuery(['filter'=>'name_high'])); ?>" value="name_high" <?php if(Request::input('filter') == 'name_high'): ?> selected <?php endif; ?>><?php echo e(__('Name [a->z]')); ?></option>
													<option data-url="<?php echo e(request()->fullUrlWithQuery(['filter'=>'name_low'])); ?>" value="name_low" <?php if(Request::input('filter') == 'name_low'): ?> selected <?php endif; ?>><?php echo e(__('Name [z->a]')); ?></option>
												</select>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="list-item">
						<div class="row">
							<?php if($rows->total() > 0): ?>
								<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($listviewtype=='grid'): ?>
									<div class="col-lg-6 col-md-6 display_type_grid">
										<?php echo $__env->make('Property::frontend.layouts.search.loop-gird', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
                                    <?php else: ?>
                                    <div class="col-lg-12  display_type_list">
										<?php echo $__env->make('Property::frontend.layouts.search.loop-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</div>
                                    <?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<div class="col-lg-12">
									<div class="border rounded p-3 bg-white">
										<?php echo e(__("Property not found")); ?>

									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-12 mt20">
						<div class="mbp_pagination">
							<?php echo e($rows->appends(request()->query())->links()); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/list-item-rtl.blade.php ENDPATH**/ ?>