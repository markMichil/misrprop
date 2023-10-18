<?php
    $translation = $row->translate();
?>
<div class="item">
    <div class="feat_property">
        <div class="thumb">
            <?php if($row->image_url): ?>
                <?php if(setting_item('property_thumb_open_gallery') and request()->routeIs('property.search')): ?>
                <?php $modalId = 'modal_gallery_'.$row->id ?>
                <a class="thumb-image" data-toggle="modal" data-target="#<?php echo e($modalId); ?>">
                    <img class="img-whp" src="<?php echo e($row->image_url); ?>" alt="property image">
                </a>
                    <?php if(!empty($gallery = $row->getGallery())): ?>
                        <div class="property_gallery_modal modal fade" id="<?php echo e($modalId); ?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="fullscreen-gallery">
                                            <div class="fotorama"
                                                 data-width="100%"
                                                 data-maxwidth="100%"
                                                 data-fit="cover"
                                                 data-ratio="16/9"
                                                 data-allowfullscreen="true"
                                                 data-nav="thumbs">
                                                <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <img src="<?php echo e($item['large']); ?>">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <a class="thumb-image" <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl()); ?>">
                        <img class="img-whp" src="<?php echo e($row->image_url); ?>" alt="property image">
                    </a>
                <?php endif; ?>
            <?php else: ?>
                <span class="avatar-text-large"><?php echo e($row->vendor ? $row->vendor->getDisplayNameAttribute()[0] : ''); ?></span>
            <?php endif; ?>
            <div class="property-tag">
                <a><?php echo e($row->property_type == 1 ? __('For Buy') : __('For Rent')); ?></a>

                <?php if($row->is_featured): ?>
                    <a><?php echo e(__('Featured')); ?></a>
                <?php endif; ?>
            </div>
            <?php if($row->is_sold): ?>
                <a class="sold_out"><?php echo e(__("Sold Out")); ?></a>
            <?php endif; ?>

            <div class="property-action">
                <a class="service-wishlist <?php if($row->hasWishList): ?> active <?php endif; ?>" data-id="<?php echo e($row->id); ?>" data-type="property"><i class="fa fa-heart"></i></a>
                <a class="fp_price" href="#"><?php echo e($row->prefix_price); ?> <?php echo e($row->display_price); ?></a>
            </div>
        </div>
        <div class="details">
            <div class="tc_content">
                <?php if($row->Category): ?>
                    <p class="text-thm"><?php echo e($row->Category->name); ?></p>
                <?php endif; ?>
                <a <?php if(!empty($blank)): ?> target="_blank" <?php endif; ?> href="<?php echo e($row->getDetailUrl()); ?>">
                    <h4><?php echo e($translation->title); ?></h4>
                </a>
                <?php if(!empty($row->location->name)): ?>
                    <?php $location =  $row->location->translate() ?>
                <?php endif; ?>
                <p><span class="flaticon-placeholder"></span> <?php echo e($location->name ?? ''); ?></p>
                <ul class="prop_details mb0">
                    <li class="list-inline-item"><?php echo e(__('Beds:')); ?> <?php echo e($row->bed); ?></li>
                    <li class="list-inline-item"><?php echo e(__('Baths:')); ?> <?php echo e($row->bathroom); ?></li>
                    <li class="list-inline-item"><?php echo e(__('Sq:')); ?> <?php echo size_unit_format($row->square); ?></li>
                </ul>
            </div>
            <div class="fp_footer">
                <?php if($row->user): ?>
                <ul class="fp_meta float-left mb0">
                    <?php if($row->user->id): ?>
                    <li class="list-inline-item"><a href="<?php echo e(route('agent.detail', ['id' => $row->user->id])); ?>">
                    <?php if($avatar_url = $row->user->getAvatarUrl()): ?>
                        <img class="avatar" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($row->user->getDisplayName()); ?>">
                    <?php else: ?>
                        <span class="avatar-text-list"><?php echo e(ucfirst($row->user->getDisplayName()[0])); ?></span>
                    <?php endif; ?>
                    </a>
                    </li>
                    <li class="list-inline-item"><a href="<?php echo e(route('agent.detail', ['id' => $row->user->id])); ?>"><?php echo e($row->user->getDisplayName()); ?> <?php echo $__env->make('Property::frontend.layouts.details.verify-badge',['user'=>$row->user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a></li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>
                <div class="fp_pdate float-right"><?php echo e(display_date($row->updated_at)); ?></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/loop-gird.blade.php ENDPATH**/ ?>