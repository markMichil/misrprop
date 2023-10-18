<?php if(!empty($row['video'])): ?>
<div class="col-lg-12">
    <div class="shop_single_tab_content style2 mt30">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Property video</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent2">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="property_video">
                    <div class="thumb">
                        <img class="pro_img img-fluid w100" src="<?php echo e(get_file_url($row['banner_image_id'], 'full')); ?>" alt="video">
                        <div class="overlay_icon">
                            <a class="video_popup_btn red popup-youtube" href="<?php echo e($row['video']); ?>"><span class="flaticon-play"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/details/property_video.blade.php ENDPATH**/ ?>