<?php
$dataUser = Auth::user();
$menus = [
    'dashboard'       => [
        'url'        => route("vendor.dashboard"),
        'title'      => __("Dashboard"),
        'icon'       => 'fa fa-home',
        'permission' => 'dashboard_agent_access',
        'position'   => 10
],
    "wishlist"=>[
        'url'   => route("user.wishList.index"),
        'title' => __("Wishlist"),
        'icon'  => 'fa fa-heart-o',
        'position' => 21
    ],
    'profile'         => [
        'url'      => route("user.profile.index"),
        'title'    => __("My Profile"),
        'icon'     => 'fa fa-cogs',
        'position' => 22
    ],
    'password'        => [
        'url'      => route("user.change_password"),
        'title'    => __("Change password"),
        'icon'     => 'fa fa-lock',
        'position' => 100
    ],
    'admin'           => [
        'url'        => 'admin',
        'title'      => __("Admin Dashboard"),
        'icon'       => 'icon ion-ios-ribbon',
        'permission' => 'dashboard_access',
        'position'   => 110
    ],

];

// Modules
$custom_modules = \Modules\ServiceProvider::getActivatedModules();
if(!empty($custom_modules)){
    foreach($custom_modules as $module=>$moduleData){
        $moduleClass = $moduleData['class'];
        if(class_exists($moduleClass))
        {
            $menuConfig = call_user_func([$moduleClass,'getUserMenu']);
            if(!empty($menuConfig)){
                $menus = array_merge($menus,$menuConfig);
            }
            $menuSubMenu = call_user_func([$moduleClass,'getUserSubMenu']);
            if(!empty($menuSubMenu)){
                foreach($menuSubMenu as $k=>$submenu){
                    $submenu['id'] = $submenu['id'] ?? '_'.$k;
                    if(!empty($submenu['parent']) and isset($menus[$submenu['parent']])){
                        $menus[$submenu['parent']]['children'][$submenu['id']] = $submenu;
                        $menus[$submenu['parent']]['children'] = array_values(\Illuminate\Support\Arr::sort($menus[$submenu['parent']]['children'], function ($value) {
                            return $value['position'] ?? 100;
                        }));
                    }
                }
            }
        }
    }
}

// Custom Menu
$custom_modules = \Custom\ServiceProvider::getModules();
if(!empty($custom_modules)){
    foreach($custom_modules as $module){
        $moduleClass = "\\Custom\\".ucfirst($module)."\\ModuleProvider";
        if(class_exists($moduleClass))
        {
            $menuConfig = call_user_func([$moduleClass,'getUserMenu']);
            if(!empty($menuConfig)){
                $menus = array_merge($menus,$menuConfig);
            }
            $menuSubMenu = call_user_func([$moduleClass,'getUserSubMenu']);
            if(!empty($menuSubMenu)){
                foreach($menuSubMenu as $k=>$submenu){
                    $submenu['id'] = $submenu['id'] ?? '_'.$k;
                    if(!empty($submenu['parent']) and isset($menus[$submenu['parent']])){
                        $menus[$submenu['parent']]['children'][$submenu['id']] = $submenu;
                        $menus[$submenu['parent']]['children'] = array_values(\Illuminate\Support\Arr::sort($menus[$submenu['parent']]['children'], function ($value) {
                            return $value['position'] ?? 100;
                        }));
                    }
                }
            }
        }
    }
}
// Plugins Menu
$plugins_modules = \Plugins\ServiceProvider::getModules();

if(!empty($plugins_modules)){
    foreach($plugins_modules as $module){
        $moduleClass = "\\Plugins\\".ucfirst($module)."\\ModuleProvider";
        if(class_exists($moduleClass))
        {
            $menuConfig = call_user_func([$moduleClass,'getUserMenu']);
            if(!empty($menuConfig)){
                $menus = array_merge($menus,$menuConfig);
            }
            $menuSubMenu = call_user_func([$moduleClass,'getUserSubMenu']);
            if(!empty($menuSubMenu)){
                foreach($menuSubMenu as $k=>$submenu){
                    $submenu['id'] = $submenu['id'] ?? '_'.$k;
                    if(!empty($submenu['parent']) and isset($menus[$submenu['parent']])){
                        $menus[$submenu['parent']]['children'][$submenu['id']] = $submenu;
                        $menus[$submenu['parent']]['children'] = array_values(\Illuminate\Support\Arr::sort($menus[$submenu['parent']]['children'], function ($value) {
                            return $value['position'] ?? 100;
                        }));
                    }
                }
            }
        }
    }
}

$currentUrl = url(Illuminate\Support\Facades\Route::current()->uri());
if (!empty($menus))
    $menus = array_values(\Illuminate\Support\Arr::sort($menus, function ($value) {
        return $value['position'] ?? 100;
    }));
    foreach ($menus as $k => $menuItem) {
        if (!empty($menuItem['permission']) and !Auth::user()->hasPermission($menuItem['permission'])) {
            unset($menus[$k]);
            continue;
        }
        $menus[$k]['class'] = $currentUrl == url($menuItem['url']) ? 'treeview active' : 'treeview';
        if (!empty($menuItem['children'])) {
            $menus[$k]['class'] .= ' has-children';
            foreach ($menuItem['children'] as $k2 => $menuItem2) {
                if (!empty($menuItem2['permission']) and !Auth::user()->hasPermission($menuItem2['permission'])) {
                    unset($menus[$k]['children'][$k2]);
                    continue;
                }
                $menus[$k]['children'][$k2]['class'] = $currentUrl == url($menuItem2['url']) ? 'active active_child' : '';
            }
        }
    }
?>
        <ul class="sidebar-menu">
            <li class="header d-flex justify-content-center align-items-center" onclick="window.location.href='<?php echo e(asset('/')); ?>'">
                <?php if($logo_id = setting_item("logo_id_mb")): ?>
                    <?php $logo = get_file_url($logo_id,'full') ?>
                    <img src="<?php echo e($logo); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
                <?php endif; ?>
                <span class="ml-2"><?php echo e(setting_item("site_title")); ?></span>
            </li>
            <?php if( !Auth::user()->hasPermission("dashboard_agent_access")): ?>
                <li class="d-flex justify-content-center align-items-center mt-3 mb-3">
                    <a class="badge badge-primary color-white border-0" href=" <?php echo e(route("user.upgrade_vendor")); ?>"><?php echo e(__("Become a agent")); ?></a>
                </li>
            <?php endif; ?>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="<?php echo e($menuItem['class']); ?>">
                    <a href="<?php echo e(url($menuItem['url'])); ?>">
                        <?php if(!empty($menuItem['icon'])): ?>
                            <span class="icon text-center"><i class="<?php echo e($menuItem['icon']); ?>"></i></span>
                        <?php endif; ?>
                        <?php echo clean($menuItem['title']); ?>


                    </a>
                    <?php if(!empty($menuItem['children'])): ?>
                        
                        
                    <?php endif; ?>
                    <?php if(!empty($menuItem['children'])): ?>
                        <ul class="treeview-menu">
                            <?php $__currentLoopData = $menuItem['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="<?php echo e($menuItem2['class']); ?>"><a href="<?php echo e(url($menuItem2['url'])); ?>">
                                        <?php if(!empty($menuItem2['icon'])): ?>
                                            <i class="<?php echo e($menuItem2['icon']); ?>"></i>
                                        <?php endif; ?>
                                        <?php echo clean($menuItem2['title']); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <li class="logout">
                <form id="logout-form-vendor" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-vendor').submit();">
                    <span class="icon text-center"><i class="flaticon-logout"></i></span> <?php echo e(__("Log Out")); ?>

                </a>
            </li>
            <li class="logout">
                <a href="<?php echo e(url('/')); ?>" style="color: #1ABC9C"><span class="icon text-center"><i class="fa fa-long-arrow-left"></i></span> <?php echo e(__("Back to Homepage")); ?></a>
            </li>
        </ul>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/User/Views/frontend/layouts/sidebar.blade.php ENDPATH**/ ?>