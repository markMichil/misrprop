
<li>
    <div class="small_dropdown2 <?php echo e($class_form??""); ?>">
        <div id="prncgs2" class="btn dd_btn property_select_price">
            <span><?php echo e(__('Price')); ?></span>
            <label ><span class="dropdown-toggle"></span></label>
        </div>
        <div class="dd_content2 property_select_price--slider <?php echo e($class_form??""); ?>">
            <div class="pricing_acontent">
                <div class="clearfix">
                    <input type="text" name="price_range[0]" class="amount" placeholder="0">
                    <input type="text" name="price_range[1]" class="amount2" placeholder="<?php echo e($property_min_max_price[1]); ?>">
                </div>
                <input type="hidden" id="max_value" value="<?php echo e($property_min_max_price[1]); ?>" >
                
                <div class="slider-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    
                </div>
            </div>
        </div>
    </div>
</li>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/fields/price.blade.php ENDPATH**/ ?>