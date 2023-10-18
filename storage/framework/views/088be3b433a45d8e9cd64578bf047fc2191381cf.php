<div class="preloader d-none"></div>





	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed  stricky main-menu <?php echo e((!empty($row->header_style) and $row->header_style=='transparent')   ? '  header-'.$row->header_style :
	'header-normal style2'); ?> ">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
					<?php if($logo_id = setting_item("logo_id")): ?>
						<?php $logo = get_file_url($logo_id,'full') ?>
						<img class="nav_logo_img img-fluid" src="<?php echo e($logo); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
					<?php endif; ?>
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
				<a href="<?php echo e(url(app_get_locale(false,'/'))); ?>" class="navbar_brand float-left dn-smd" >
					<?php if((isset($is_homepage) && $is_homepage == true)): ?>
						<?php if($logo_id_tran = setting_item("logo_id_tran")): ?>
							<?php $logo_tran = get_file_url($logo_id_tran,'full') ?>
							<img class="logo1 " style="width: 70%" src="<?php echo e($logo_tran); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
						<?php endif; ?>
					<?php else: ?>
						<?php if($logo_id = setting_item("logo_id")): ?>
							<?php $logo = get_file_url($logo_id,'full') ?>
							<img class="logo1 " style="width: 70%"  src="<?php echo e($logo); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
						<?php endif; ?>
					<?php endif; ?>
		            <?php if($logo_id = setting_item("logo_id")): ?>
                        <?php $logo = get_file_url($logo_id,'full') ?>
                        <img class="logo2 "  style="width: 70%"src="<?php echo e($logo); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
					<?php endif; ?>

		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
					<?php generate_menu('primary',[
                        'walker'=>\Themes\Findhouse\Core\Walkers\MenuWalker::class
                    ]) ?>

                    <?php echo $__env->make('Language::frontend.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<?php if(!Auth::id()): ?>
						<li class="list-inline-item">
							<a href="javascript:void(0)" class="btn flaticon-user"> <span class="dn-lg" data-toggle="modal" data-target="#login"><?php echo e(__('Login')); ?></span>
                                <?php if(is_enable_registration()): ?>
                                    /
                                    <span data-toggle="modal" data-target="#register"><?php echo e(__('Register')); ?></span>
                                <?php endif; ?>
                            </a>
						</li>
					<?php else: ?>
						<li class="login-item dropdown">
							<a href="#" data-toggle="dropdown" class="is_login <?php if(!($avatar_url = Auth::user()->getAvatarUrl())): ?> no_avatar <?php endif; ?>">
								<?php if($avatar_url = Auth::user()->getAvatarUrl()): ?>
									<img class="avatar" src="<?php echo e($avatar_url); ?>" alt="<?php echo e(Auth::user()->getDisplayName()); ?>">
								<?php else: ?>
									<span class="avatar-text"><?php echo e(ucfirst( Auth::user()->getDisplayName()[0])); ?></span>
								<?php endif; ?>
								<?php echo e(__("Hi, :Name",['name'=>Auth::user()->getDisplayName()])); ?>

							</a>
							<ul class="dropdown-menu dropdown-menu-right text-left">
								<?php if(Auth::user()->hasPermission('dashboard_agent_access')): ?>
									<li class=" menu-hr"><a href="<?php echo e(route('vendor.dashboard')); ?>"><i class="fa fa-line-chart"></i> <?php echo e(__("Agent Dashboard")); ?></a></li>
								<?php endif; ?>
								<li class="<?php if(Auth::user()->hasPermission('dashboard_agent_access')): ?> menu-hr <?php endif; ?>">
									<a href="<?php echo e(route('user.profile.index')); ?>"><i class="fa fa-user"></i> <?php echo e(__("My profile")); ?></a>
								</li>
								<li class="menu-hr"><a href="<?php echo e(route('user.change_password')); ?>"><i class="fa fa-lock"></i> <?php echo e(__("Change password")); ?></a></li>
                                <?php if(is_enable_plan() ): ?>
                                    <li class="menu-hr"><a href="<?php echo e(route('user.plan')); ?>"><i class="fa fa-list-alt"></i> <?php echo e(__("My plan")); ?></a></li>
                                <?php endif; ?>
								<?php if(Auth::user()->hasPermission('dashboard_access')): ?>
									<li class="menu-hr"><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-cog"></i> <?php echo e(__("Admin Dashboard")); ?></a></li>
								<?php endif; ?>
								<li class="menu-hr">
									<a  href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?></a>
								</li>
							</ul>
							<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
								<?php echo e(csrf_field()); ?>

							</form>
						</li>
					<?php endif; ?>

                </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center" onclick="window.location.href='<?php echo e(asset('/')); ?>'">
					
						<?php if($logo_id = setting_item("logo_id_mb")): ?>
							<?php $logo = get_file_url($logo_id,'full') ?>
							<img class="nav_logo_img mt20" style="width: 50%" src="<?php echo e($logo); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
							<span class="mt20"><?php echo e(setting_item("site_title")); ?></span>
						<?php endif; ?>
					
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="<?php echo e(route('vendor.dashboard')); ?>"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1 mm-menu_offcanvas">
			<ul>
				<?php generate_menu('primary',[
                    'walker'=>\Themes\Findhouse\Core\Walkers\MenuWalker::class
                ]) ?>
				<?php if(!Auth::id()): ?>
					<li><a href="<?php echo e(route('login')); ?>" ><span class="flaticon-user"></span> <?php echo e(__('Login')); ?></a></li>
                    <?php if(is_enable_registration()): ?>
					    <li><a href="<?php echo e(route('auth.register')); ?>"><span class="flaticon-edit"></span> <?php echo e(__('Register')); ?></a></li>
                    <?php endif; ?>
				<?php endif; ?>

					<li><?php echo $__env->make('Language::frontend.switcher',['mobile'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></li>
			</ul>
		</nav>
    </div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Layout/parts/header.blade.php ENDPATH**/ ?>