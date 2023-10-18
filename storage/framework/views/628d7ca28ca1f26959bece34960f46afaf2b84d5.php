<?php
    if($name == 'location_id' ){
        $list_json_location = [];
        $traverse_location = function ($list_location, $prefix = '') use (&$traverse_location, &$list_json_location) {
            foreach ($list_location as $location) {
                $translate = $location->translate();
                $list_json_location[] = [
                    'id' => $location->id,
                    'title' => $prefix . ' ' . $translate->name,
                ];
                $traverse_location($location->children, $prefix . '-');
            }
        };
        $traverse_location($list_location);
    }
    if($name == 'category_id'){
        $list_json = [];
        $traverse = function ($list_category, $prefix = '') use (&$traverse, &$list_json) {
            foreach ($list_category as $location) {
                $translate = $location->translate();
                $list_json[] = [
                    'id' => $location->id,
                    'title' => $prefix . ' ' . $translate->name,
                ];
                $traverse($location->children, $prefix . '-');
            }
        };
        $traverse($list_category);
    }

?>
<li>
    <div class="search_option_two">
        <div class="candidate_revew_select">
            <select name="<?php echo e($name); ?>" class="selectpicker w100 show-tick">
                <option value="0"><?php echo e($holder); ?></option>
                <?php if($name != 'location_id' && $name != 'category_id'): ?>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php if(Request::input('property_type') == $item->id && $name == 'property_type'): ?> selected <?php endif; ?>
                            <?php if(Request::input('bathroom') == $item->id && $name == 'bathroom'): ?> selected <?php endif; ?>
                            <?php if(Request::input('bedroom') == $item->id && $name == 'bedroom'): ?> selected <?php endif; ?>
                            <?php if(Request::input('garage') == $item->id && $name == 'garage'): ?> selected <?php endif; ?>
                            <?php if(Request::input('year_built') == $item->id && $name == 'year_built'): ?> selected <?php endif; ?>
                        ><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php elseif($name == 'location_id'): ?>
                    <?php $__currentLoopData = $list_json_location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item['id']); ?>"
                        <?php if(Request::input('location_id') == $item['id'] && $name == 'location_id'): ?> selected <?php endif; ?>
                        ><?php echo e($item['title']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = $list_json; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item['id']); ?>"
                        <?php if(Request::input('category_id') == $item['id'] && $name == 'category_id'): ?> selected <?php endif; ?>
                        ><?php echo e($item['title']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </select>
        </div>
    </div>
</li>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/search/fields/option.blade.php ENDPATH**/ ?>