<?php
if(empty($row->user->id)) return;
?>
<div class="sl_creator">
    <h4 class="mb25"><?php echo e(__("Listed By")); ?></h4>
    <div class="media">
        <a href="<?php echo e(route('agent.detail',['id'=>$row->user->id])); ?>" class="c-inherit">
            <?php if($avatar_url = $row->user->getAvatarUrl()): ?>
                <img class="mr-3" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($row->user->getDisplayName()); ?>">
            <?php else: ?>
                <span class="mr-3"><?php echo e(ucfirst($row->user->getDisplayName()[0])); ?></span>
            <?php endif; ?>
        </a>
        <div class="media-body">
            <h5 class="mt-0 mb0">
                <a href="<?php echo e(route('agent.detail',['id'=>$row->user->id])); ?>" class="c-inherit"><?php echo e($row->user->getDisplayName()); ?>

                    <?php echo $__env->make('Property::frontend.layouts.details.verify-badge',['user'=>$row->user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </h5>
            <?php if(!empty(setting_item('vendor_show_phone'))): ?>
                <p class="mb0"><?php echo e(!empty($row->user->phone) ? $row->user->phone : ''); ?></p>
            <?php endif; ?>
            <?php if(!empty(setting_item('vendor_show_email'))): ?>
                <p class="mb0"><?php echo e(!empty($row->user->email) ? $row->user->email : ''); ?></p>
            <?php endif; ?>
            <a class="text-thm" href="<?php echo e(route('agent.detail',['id'=>$row->user->id])); ?>"><?php echo e(__("View My Listing")); ?></a>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/details/agent.blade.php ENDPATH**/ ?>