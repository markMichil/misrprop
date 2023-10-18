<?php
    /**
    * @var $row \Modules\Location\Models\Location
    * @var $to_location_detail bool
    * @var $service_type string
    */
    $translation = $row->translate();
    $link_location = false;
?>

<a href="<?php echo e(route('property.search', ['location_id' => $row->id])); ?>">
    <div class="properti_city bg_img_placeholder property_city_bg_style_3 <?php echo e($layout == "style_2" ? 'home5' : ''); ?>"
         style="background-image: url('<?php echo e($row->getImageUrl()); ?>')">

        <div class="overlay">
            <div class="details ">
                <div  class="<?php echo e($layout == "style_2" ? 'left' : ''); ?>">
                    <h4 ><?php echo e($translation->name); ?></h4>
                </div>
                <p class="desc">
                    <?php $count = $row->getDisplayNumberServiceInLocation('property') ?>
                    <span><?php echo e($count); ?></span>
                </p>
            </div>
        </div>
    </div>
</a>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Location/Views/frontend/blocks/list-locations/loop_style_3.blade.php ENDPATH**/ ?>