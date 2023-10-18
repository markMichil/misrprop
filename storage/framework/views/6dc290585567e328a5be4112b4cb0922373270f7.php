<?php
	$attr_request = explode("|", $key);
    if(isset($attr_request[1])) {
		$attr_id = $attr_request[1];
		$attr = \Modules\Core\Models\Attributes::where('service', 'property')->with(['terms'])->find($attr_id);
	}
?>
<?php if(isset($attr)): ?>
	<li>
		<div id="accordion" class="panel-group">
			<div class="panel">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a href="#panelBodyRating<?php echo e($attr_id); ?>" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> <?php echo e(isset($attr)?$attr->name : ""); ?></a>
					</h4>
				</div>
				<div id="panelBodyRating<?php echo e($attr_id); ?>" class="panel-collapse collapse">
					<div class="panel-body row">
						<?php if(isset($attr)): ?>
							<div class="col-lg-12">
								<ul class="ui_kit_checkbox selectable-list float-left fn-400">
									<?php $__currentLoopData = $attr->terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<label class="custom-control custom-checkbox">
											<input type="checkbox" name="terms[]" value="<?php echo e($term->id); ?>" 
												class="custom-control-input" id="customCheck<?php echo e($term->id); ?>"
												<?php if(!empty(Request::input('terms'))): ?>
													<?php $__currentLoopData = Request::input('terms'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($t == $term->id): ?>
															checked
														<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
											>
											<span class="custom-control-label" for="customCheck<?php echo e($term->id); ?>"><?php echo e($term->name); ?></span>
										</label>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</li>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/fields/attribute.blade.php ENDPATH**/ ?>