
<?php $__env->startSection('content'); ?>
    <section class="listing-title-area p-0">
        <?php echo $__env->make('Property::frontend.layouts.details.gallery_property', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <!-- Agent Single Grid View -->
    <section class="our-agent-single bgc-f7 pb30-991">
        <div class="container">
            <?php echo $__env->make('Agencies::frontend.detail.search_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <div class="col-md-12 col-lg-8 mt50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="listing_single_description2 mt30-767 mb30-767">
                                <div class="single_property_title">
                                    <h2>
                                        <?php echo e($translation->title ?? ''); ?>


                                    </h2>
                                    <p><?php echo e($translation->address); ?></p>
                                </div>
                                <div class="single_property_social_share style2">
                                    <div class="price">
                                        <h2><?php echo e($row['display_price'] ? $row['display_price'] : ''); ?></h2>
                                        <?php if($row->is_sold): ?>
                                            <div><span class="badge badge-danger is_sold_out"><?php echo e(__("Sold Out")); ?></span></div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="listing_single_description style2">
                                <div class="lsd_list">
                                    <ul class="mb0">
                                        <?php if(!empty($row['Category'])): ?>
                                            <?php $translationCategory = $row['Category']->translate(); ?>
                                            <li class="list-inline-item"><a href="#"><?php echo e(__($translationCategory->name)); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($row['bed'])): ?>
                                            <li class="list-inline-item"><a href="#"><?php echo e(__("Beds")); ?>: <?php echo e(!empty($row['bed']) ? $row['bed'] : ''); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($row['bathroom'])): ?>
                                            <li class="list-inline-item"><a href="#"><?php echo e(__("Baths")); ?>: <?php echo e(!empty($row['bathroom']) ? $row['bathroom'] : ''); ?></a></li>
                                        <?php endif; ?>
                                        <?php if(!empty($row['square'])): ?>
                                            <li class="list-inline-item"><a href="#"><?php echo e(__("Sq Ft")); ?>: <?php echo e(!empty($row['square']) ? $row['square'] : ''); ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>


                                <?php if(!empty($row['content'])): ?>
                                    <h4 class="mb30"><?php echo e(__("Description")); ?></h4>
                                    <div class="gpara second_para white_goverlay mt10 mb10"><?php echo clean(Str::words($translation->content,50)); ?></div>
                                    <div class="collapse" id="collapseExample">
                                        <div class="card card-body">
                                            <div class="mt10 mb10"><?php echo clean($translation->content); ?></div>
                                        </div>
                                    </div>
                                    <p class="overlay_close">
                                        <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <?php echo e(__('Show More')); ?> <span class="flaticon-download-1 fz12"></span>
                                        </a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15"><?php echo e(__("Property Details")); ?></h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <dl class="inline">
                                            <dt><p><?php echo e(__("Property ID")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->id ? $row->id : 0); ?></p></dd>
                                            <dt><p><?php echo e(__("Price")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->display_price ? $row->display_price : 0); ?></p></dd>
                                            <dt><p><?php echo e(__("Property Size")); ?> :</p></dt>
                                            <dd><p><?php echo !empty($row['square']) ? size_unit_format($row['square']) : 0; ?></p></dd>
                                            <dt><p><?php echo e(__("Year Built")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->year_built ? $row->year_built : __('None')); ?></p></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">

                                        <dl class="inline">
                                            <dt><p><?php echo e(__("Bedrooms")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->bed ? $row->bed : 0); ?></p></dd>
                                            <dt><p><?php echo e(__("Bathrooms")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->bathroom ? $row->bathroom : 0); ?></p></dd>
                                            <dt><p><?php echo e(__("Garage")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->garages ? $row->garages : 0); ?></p></dd>
                                        </dl>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <dl class="inline">
                                            <dt><p><?php echo e(__("Property Type")); ?> :</p></dt>
                                            <dd><p><?php echo e($row->category ? $row->category->name : ''); ?></p></dd>
                                            <dt><p><?php echo e(__("Property Status")); ?> :</p></dt>
                                            <dd><p><span><?php echo e($row->property_type == 1 ? __('For Buy') : __('For Rent')); ?></span></p></dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15"><?php echo e(__('Additional details')); ?></h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <ul class="list-inline-item">
                                            <li><p><?php echo e(__('Deposit')); ?> :</p></li>
                                            <li><p><?php echo e(__('Pool Size')); ?> :</p></li>
                                            <li><p><?php echo e(__('Additional Rooms')); ?> :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span><?php echo e($row->deposit ? $row->deposit : 0); ?>%</span></p></li>
                                            <li><p><span><?php echo $row->pool_size ? size_unit_format($row->pool_size) : 0; ?></span></p></li>
                                            <li><p><span><?php echo e($row->additional_zoom ? $row->additional_zoom : 0); ?></span></p></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <ul class="list-inline-item">
                                            <li><p><?php echo e(__('Last remodel year')); ?> :</p></li>
                                            <li><p><?php echo e(__('Amenities')); ?> :</p></li>
                                            <li><p><?php echo e(__('Equipment')); ?> :</p></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span><?php echo e($row->remodal_year ? $row->remodal_year : __('None')); ?></span></p></li>
                                            <li><p><span><?php echo e($row->amenities ? $row->amenities : 0); ?></span></p></li>
                                            <li><p><span><?php echo e($row->equipment ? $row->equipment : 0); ?></span></p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('Property::frontend.layouts.details.property_feature', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php if(!empty($row->location->name)): ?>
                            <?php $location =  $row->location->translate() ?>
                        <?php endif; ?>
                        <div class="col-lg-12">
                            <div class="application_statics mt30">
                                <h4 class="mb30"><?php echo e(__("Location")); ?> <small class="application_statics_location float-right"><?php echo e(!empty($location->name) ? $location->name : ''); ?></small></h4>
                                <div class="property_video p0">
                                    <div class="thumb">
                                        <div class="h400" id="map-canvas"></div>
                                        <div class="overlay_icon">
                                            <a href="#"><img class="map_img_icon" src="<?php echo e(asset('findhouse/images/header-logo.png')); ?>" alt="header-logo.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo $__env->make('Property::frontend.layouts.details.property_video', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="col-lg-12">
                            <?php echo $__env->make('Agencies::frontend.detail.review', ['review_service_id' => $row['id'], 'review_service_type' => 'property'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php echo $__env->make('Property::frontend.layouts.details.property-related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 mt50">
                    <div class="sidebar_listing_list">
                        <div class="sidebar_advanced_search_widget">
                            <?php echo $__env->make('Property::frontend.layouts.details.agent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('Property::frontend.layouts.details.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <?php echo $__env->make('Property::frontend.layouts.search.form-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('Property::frontend.sidebar.FeatureProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('Property::frontend.sidebar.categoryProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('Property::frontend.sidebar.recentViewdProperty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <link href="<?php echo e(asset('libs/fotorama/fotorama.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('libs/fotorama/fotorama.js')); ?>"></script>
    <link href="<?php echo e(asset('themes/findhouse/libs/magnific/magnific-popup.css')); ?>" />
    <script src="<?php echo e(asset('themes/findhouse/libs/magnific/jquery.magnific-popup.min.js')); ?>"></script>
    <?php echo App\Helpers\MapEngine::scripts(); ?>

    <script>
        jQuery(function ($) {
            new BravoMapEngine('map-canvas', {
                fitBounds: true,
                center: [<?php echo e($row->map_lat ?? "51.505"); ?>, <?php echo e($row->map_lng ?? "-0.09"); ?>],
                zoom:<?php echo e($row->map_zoom ?? "8"); ?>,
                ready: function (engineMap) {
                    <?php if($row->map_lat && $row->map_lng): ?>
                    engineMap.addMarker([<?php echo e($row->map_lat); ?>, <?php echo e($row->map_lng); ?>], {
                        icon_options: {}
                    });
                    <?php endif; ?>
                    engineMap.on('click', function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                    engineMap.on('zoom_changed', function (zoom) {
                        $("input[name=map_zoom]").attr("value", zoom);
                    });
                    engineMap.searchBox($('.bravo_searchbox'),function (dataLatLng) {
                        engineMap.clearMarkers();
                        engineMap.addMarker(dataLatLng, {
                            icon_options: {}
                        });
                        $("input[name=map_lat]").attr("value", dataLatLng[0]);
                        $("input[name=map_lng]").attr("value", dataLatLng[1]);
                    });
                }
            });

            $('.review-picture-lists').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                }
            });
        })

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/detail.blade.php ENDPATH**/ ?>