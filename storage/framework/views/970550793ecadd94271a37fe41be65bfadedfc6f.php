
<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="my_dashboard_review mt30">
        <form action="<?php echo e(route('user.profile.profile_post')); ?>" method="post" class="input-has-icon bravo_user_profile_form">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-title">
                        <strong><?php echo e(__("Personal Information")); ?></strong>
                    </div>
                    <?php if($is_vendor_access): ?>
                        <div class="form-group">
                            <label><?php echo e(__("Business name")); ?></label>
                            <input type="text" value="<?php echo e(old('business_name',$dataUser->business_name)); ?>" name="business_name" placeholder="<?php echo e(__("Business name")); ?>" class="form-control">
                            <i class="fa fa-user input-icon"></i>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label><?php echo e(__("E-mail")); ?></label>
                        <input type="text" name="email" value="<?php echo e(old('email',$dataUser->email)); ?>" placeholder="<?php echo e(__("E-mail")); ?>" class="form-control">
                        <i class="fa fa-envelope input-icon"></i>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo e(__("First name")); ?></label>
                                <input type="text" value="<?php echo e(old('first_name',$dataUser->first_name)); ?>" name="first_name" placeholder="<?php echo e(__("First name")); ?>" class="form-control">
                                <i class="fa fa-user input-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo e(__("Last name")); ?></label>
                                <input type="text" value="<?php echo e(old('last_name',$dataUser->last_name)); ?>" name="last_name" placeholder="<?php echo e(__("Last name")); ?>" class="form-control">
                                <i class="fa fa-user input-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Phone Number")); ?></label>
                        <input type="text" value="<?php echo e(old('phone',$dataUser->phone)); ?>" name="phone" placeholder="<?php echo e(__("Phone Number")); ?>" class="form-control">
                        <i class="fa fa-phone input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Birthday")); ?></label>
                        <input type="text" value="<?php echo e(old('birthday',$dataUser->birthday? display_date($dataUser->birthday) :'')); ?>" name="birthday" placeholder="<?php echo e(__("Birthday")); ?>" class="form-control date-picker">
                        <i class="fa fa-birthday-cake input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("About Yourself")); ?></label>
                        <textarea name="bio" rows="5" class="form-control"><?php echo e(old('bio',$dataUser->bio)); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Avatar")); ?></label>
                        <div class="upload-btn-wrapper">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <?php echo e(__("Browse")); ?>… <input type="file">
                                    </span>
                                </span>
                                <input type="text" data-error="<?php echo e(__("Error upload...")); ?>" data-loading="<?php echo e(__("Loading...")); ?>" class="form-control text-view" readonly value="<?php echo e($dataUser->getAvatarUrl()?? __("No Image")); ?>">
                            </div>
                            <input type="hidden" class="form-control" name="avatar_id" value="<?php echo e($dataUser->avatar_id?? ""); ?>">
                            <img class="image-demo" src="<?php echo e($dataUser->getAvatarUrl()?? ""); ?>"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-title">
                        <strong><?php echo e(__("Location Information")); ?></strong>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Address Line 1")); ?></label>
                        <input type="text" value="<?php echo e(old('address',$dataUser->address)); ?>" name="address" placeholder="<?php echo e(__("Address")); ?>" class="form-control">
                        <i class="fa fa-location-arrow input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Address Line 2")); ?></label>
                        <input type="text" value="<?php echo e(old('address2',$dataUser->address2)); ?>" name="address2" placeholder="<?php echo e(__("Address2")); ?>" class="form-control">
                        <i class="fa fa-location-arrow input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("City")); ?></label>
                        <input type="text" value="<?php echo e(old('city',$dataUser->city)); ?>" name="city" placeholder="<?php echo e(__("City")); ?>" class="form-control">
                        <i class="fa fa-street-view input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("State")); ?></label>
                        <input type="text" value="<?php echo e(old('state',$dataUser->state)); ?>" name="state" placeholder="<?php echo e(__("State")); ?>" class="form-control">
                        <i class="fa fa-map-signs input-icon"></i>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Country")); ?></label>
                        <select name="country" class="form-control">
                            <option value=""><?php echo e(__('-- Select --')); ?></option>
                            <?php $__currentLoopData = get_country_lists(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if((old('country',$dataUser->country ?? '')) == $id): ?> selected <?php endif; ?> value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(__("Zip Code")); ?></label>
                        <input type="text" value="<?php echo e(old('zip_code',$dataUser->zip_code)); ?>" name="zip_code" placeholder="<?php echo e(__("Zip Code")); ?>" class="form-control">
                        <i class="fa fa-map-pin input-icon"></i>
                    </div>


                    <div class="form-group profile-social">
                        <label><?php echo e(__('User Social')); ?></label>
                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="form-controls">
                                        <div class="form-group-item">
                                            <div class="form-group-item">
                                                <div class="g-items-header">
                                                    <div class="row">
                                                        <div class="col-md-3"><?php echo e(__("Name social")); ?></div>
                                                        <div class="col-md-3"><?php echo e(__('Code icon')); ?></div>
                                                        <div class="col-md-3"><?php echo e(__('Link social')); ?></div>
                                                        <div class="col-md-3"></div>
                                                    </div>
                                                </div>
                                                <div class="g-items">
                                                    <?php
                                                    $social = $dataUser->user_social;

                                                    if(!empty($social)) $social = json_decode($social,true);
                                                    if(empty($social) or !is_array($social))
                                                        $social = [];
                                                    ?>
                                                    <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="item" data-number="<?php echo e($key); ?>">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <input type="text" name="user_social[<?php echo e($key); ?>][title]" class="form-control" value="<?php echo e($item['title']); ?>">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input name="user_social[<?php echo e($key); ?>][code]" rows="5" class="form-control" value="<?php echo e($item['code']); ?>">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input name="user_social[<?php echo e($key); ?>][link]" rows="5" class="form-control" value="<?php echo e($item['link']); ?>">
                                                                </div>
                                                                <div class="col-md-3">
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
                                                                <input type="text" __name__="user_social[__number__][title]" class="form-control" value="">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <input __name__="user_social[__number__][code]" class="form-control" rows="5" value="">
                                                            </div>

                                                            <div class="col-md-3">
                                                                <input __name__="user_social[__number__][link]" class="form-control" rows="5" value="">
                                                            </div>
                                                            <div class="col-md-3">
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
                        
                    </div>

                </div>
                <div class="col-md-12">
                    <hr>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> <?php echo e(__('Save Changes')); ?></button>
                </div>
            </div>
        </form>
        <?php if(!empty(setting_item('user_enable_permanently_delete')) and !is_admin()): ?>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-danger">
                        <?php echo e(__("Delete account")); ?>

                    </h4>
                    <div class="mb-4 mt-2">
                        <?php echo clean(setting_item_with_lang('user_permanently_delete_content','',__('Your account will be permanently deleted. Once you delete your account, there is no going back. Please be certain.'))); ?>

                    </div>
                    <a data-toggle="modal" data-target="#permanentlyDeleteAccount" class="btn btn-danger" href=""><?php echo e(__('Delete your account')); ?></a>
                </div>

                <!-- Modal -->
                <div class="modal  fade" id="permanentlyDeleteAccount" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo e(__('Confirm permanently delete account')); ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="my-3">
                                    <?php echo clean(setting_item_with_lang('user_permanently_delete_content_confirm')); ?>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                <a href="<?php echo e(route('user.permanently.delete')); ?>" class="btn btn-danger"><?php echo e(__('Confirm')); ?></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/User/Views/frontend/profile.blade.php ENDPATH**/ ?>