<?php
    $translation = $row->translate();
?>
<div class="item">
    <div class="properti_city home6">
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
                    <div class=" thumb_img bg_img_placeholder feature_property_bg_image_overlay"
                         style="background-image:
                        url(<?php echo e($row->image_url); ?>)">

                    </div>


                    </a>
                <?php endif; ?>
            <?php else: ?>
                <span class="avatar-text-large"><?php echo e($row->vendor ? $row->vendor->getDisplayNameAttribute()[0] : ''); ?></span>
            <?php endif; ?>
                <div class="thmb_cntnt">
                    <ul class="tag mb0">
                        <li class="list-inline-item"><a href="#"><?php echo e($row->property_type == 1 ? __('For Buy') : __('For Rent')); ?></a></li>
                        <?php if($row->is_featured): ?>
                        <li class="list-inline-item"><a href="#"><?php echo e(__('Featured')); ?></a></li>
                        <?php endif; ?>
                        <?php if($row->is_sold): ?>
                            <li class="list-inline-item"><a class="sold_out"><?php echo e(__("Sold Out")); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>



            <div class="property-action">
                <a class="service-wishlist <?php if($row->hasWishList): ?> active <?php endif; ?>" data-id="<?php echo e($row->id); ?>" data-type="property"><i class="fa fa-heart"></i></a>

            </div>
        </div>
        <div class="overlay">
            <div class="details">

                <a class="fp_price" href="#"><?php echo e($row->prefix_price); ?> <?php echo e($row->display_price); ?></a>
                <?php if(!empty($row->location->name)): ?>
                    <?php $location =  $row->location->translate() ?>
                <?php endif; ?>
                <h4><?php echo e($location->name ?? ''); ?></h4>
                <ul class="prop_details mb0">

                    <li class="list-inline-item"><a href="#"><?php echo e(__('Beds:')); ?> <?php echo e($row->bed); ?></a></li>
                    <li class="list-inline-item"><a href="#"><?php echo e(__('Baths:')); ?> <?php echo e($row->bathroom); ?></a></li>
                    <li class="list-inline-item"><a href="#"><?php echo e(__('Sq:')); ?> <?php echo size_unit_format($row->square); ?></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/loop-gird-overlay.blade.php ENDPATH**/ ?>