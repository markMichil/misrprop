<div class="sidebar_listing_list dn-991">
    <div class="sidebar_advanced_search_widget">
        <ul class="sasw_list mb0">
            <form action="<?php echo e(route("property.search")); ?>" class="form bravo_form" method="get">
                <input type="hidden" name="filter" value="<?php echo e(request()->query('filter')); ?>">
                <input type="hidden" name="layout" value="<?php echo e(request()->query('layout')); ?>">
                <input type="hidden" name="type" value="<?php echo e(request()->query('type')); ?>">

                <?php $property_search_fields = setting_item_array('property_search_fields');
                $property_search_fields = array_values(\Illuminate\Support\Arr::sort($property_search_fields, function ($value) {
                    return $value['position'] ?? 0;
                }));
                $list_number = [
                    (object)['id' => 1,'name' => '1'],
                    (object)['id' => 2,'name' => '2'],
                    (object)['id' => 3,'name' => '3'],
                    (object)['id' => 4,'name' => '4'],
                    (object)['id' => 5,'name' => '5'],
                    (object)['id' => 6,'name' => '6'],
                    (object)['id' => 7,'name' => '7'],
                    (object)['id' => 8,'name' => '8']
                ];
                $list_garages_value = [
                    (object)['id' => 1,'name' => 'Yes'],
                    (object)['id' => 2,'name' => 'No'],
                    (object)['id' => 3,'name' => 'Others']
                ];
                $current_year = (int)date("Y");
                $list_year = [];
                for($year = $current_year;$year >= ($current_year - 8);$year--) {
                    $list_year[] = (object)['id' => $year,'name' => $year];
                }

                ?>
                <?php if(!empty($property_search_fields)): ?>
                    <?php $__currentLoopData = $property_search_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $field['title'] = $field['title_'.app()->getLocale()] ?? $field['title'] ?? "" ?>

                    <?php switch($field['field']):
                            case ('service_name'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.service_name', ['holder' => $field['title'], 'name' => 'service_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('location'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => $list_location, 'holder' => $field['title'], 'name' => 'location_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('category'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => $list_category,'holder' => $field['title'], 'name' => 'category_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('property_type'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => [(object)['id' => 1,'name' => 'For Buy'],(object)['id' => 2,'name' => 'For Rent']],'holder' => $field['title'], 'name' => 'property_type'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('bathrooms'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'bathroom'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('bedrooms'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'bedroom'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('garages'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => $list_number,'holder' => $field['title'], 'name' => 'garage'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('year_built'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.option',['list' => $list_year,'holder' => $field['title'], 'name' => 'year_built'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case ('price'): ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.price',['list' => $list_year,'holder' => $field['title'], 'name' => 'price'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                            <?php case (null): ?>
                            <?php break; ?>
                            <?php default: ?>
                                <?php echo $__env->make('Property::frontend.layouts.search.fields.attribute',['key' => $field['field'],'holder' => $field['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php break; ?>
                        <?php endswitch; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <li>
                    <div class="search_option_button">
                        <button type="submit" class="btn btn-block btn-thm"><?php echo e(__('Search')); ?></button>
                    </div>
                </li>
            </form>
        </ul>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/form-search.blade.php ENDPATH**/ ?>