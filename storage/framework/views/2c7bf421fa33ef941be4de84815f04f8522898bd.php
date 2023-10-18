<div class="panel">
    <div class="panel-title"><strong><?php echo e(__("Agency Content")); ?></strong></div>
    <div class="panel-body">
        <div class="form-group">
            <label><?php echo e(__("Name")); ?></label>
            <input type="text" value="<?php echo e(old('name',$translation->name)); ?>" placeholder="<?php echo e(__("Agency name")); ?>" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label"><?php echo e(__("Content")); ?></label>
            <div class="">
                <textarea name="content" class="d-none has-ckeditor" cols="30" rows="10"><?php echo e(old('content',$translation->content)); ?></textarea>
            </div>
        </div>
        <?php if(is_default_lang()): ?>
        <div class="row form-group">
            <div class="col-md-6 col-sm-12">
                <label class="control-label"><?php echo e(__("Office")); ?></label>
                <input type="text" name="office" class="form-control" value="<?php echo e($row->office ? $row->office : old('office')); ?>" placeholder="<?php echo e(__("Office")); ?>">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label"><?php echo e(__("Mobile")); ?></label>
                <input type="text" name="mobile" class="form-control" value="<?php echo e($row->mobile ? $row->mobile : old('mobile')); ?>" placeholder="<?php echo e(__("Mobile")); ?>">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-6 col-sm-12">
                <label class="control-label"><?php echo e(__("Email")); ?></label>
                <input type="text" name="email" class="form-control" value="<?php echo e($row->email ? $row->email : old('email')); ?>" placeholder="<?php echo e(__("Email")); ?>">
            </div>
            <div class="col-md-6 col-sm-12">
                <label class="control-label"><?php echo e(__("Fax")); ?></label>
                <input type="text" name="fax" class="form-control" value="<?php echo e($row->fax ? $row->fax : old('fax')); ?>" placeholder="<?php echo e(__("Fax")); ?>">
            </div>
        </div>
        <?php endif; ?>

        <?php if(is_default_lang()): ?>
            <div class="form-group">
                <label class="control-label"><?php echo e(__("Banner Image")); ?></label>
                <div class="form-group-image">
                    <?php echo \Modules\Media\Helpers\FileHelper::fieldUpload('banner_image_id',$row->banner_image_id); ?>

                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php if(is_default_lang()): ?>
<div class="panel">
    <div class="panel-title"><strong><?php echo e(__("Social Info")); ?></strong></div>
    <div class="panel-body">
        <div class="form-group">
            <div class="form-controls">
                <div class="form-group-item">
                    <div class="form-group-item">
                        <div class="g-items-header">
                            <div class="row">
                                <div class="col-md-3"><?php echo e(__("Name social")); ?></div>
                                <div class="col-md-4"><?php echo e(__('Code icon')); ?></div>
                                <div class="col-md-4"><?php echo e(__('Link social')); ?></div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                        <div class="g-items">
                            <?php
                            $social = $row->social;

                            if(!empty($social)) $social = json_decode($social,true);
                            if(empty($social) or !is_array($social))
                                $social = [];
                            ?>
                            <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item" data-number="<?php echo e($key); ?>">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" name="social[<?php echo e($key); ?>][title]" class="form-control" value="<?php echo e($item['title']); ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <textarea name="social[<?php echo e($key); ?>][code]" rows="5" class="form-control"><?php echo e($item['code']); ?></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <textarea name="social[<?php echo e($key); ?>][link]" rows="5" class="form-control"><?php echo e($item['link']); ?></textarea>
                                        </div>
                                        <div class="col-md-1">
                                            <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="text-right">
                            <span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> <?php echo e(__('Add item')); ?></span>
                        </div>
                        <div class="g-more hide">
                            <div class="item" data-number="__number__">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" __name__="social[__number__][title]" class="form-control" value="">
                                    </div>

                                    <div class="col-md-4">
                                        <textarea __name__="social[__number__][code]" class="form-control" rows="5"></textarea>
                                    </div>

                                    <div class="col-md-4">
                                        <textarea __name__="social[__number__][link]" class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="col-md-1">
                                        <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Agencies/Views/admin/agency/include/content.blade.php ENDPATH**/ ?>