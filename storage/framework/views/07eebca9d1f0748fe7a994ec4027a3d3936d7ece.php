<form action="<?php echo e(route('agent.contact')); ?>" method="POST" class="agent_contact_form">
    <?php echo csrf_field(); ?>
    <ul class="sasw_list mb0">
        <li class="search_area">
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="<?php echo e(__('Your Name')); ?>" name="name">
            </div>
        </li>
        <li class="search_area">
            <div class="form-group">
                <input type="number" class="form-control"  placeholder="<?php echo e(__('Phone')); ?>" name="phone">
            </div>
        </li>
        <li class="search_area">
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="<?php echo e(__('Email')); ?>" name="email">
            </div>
        </li>
        <li class="search_area">
            <div class="form-group">
                <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="<?php echo e(__('Your Message')); ?>"></textarea>
            </div>
        </li>
        <li>
            <input type="hidden" name="vendor_id" value="<?php echo e($row->user->id); ?>">
            <input type="hidden" name="object_id" value="<?php echo e($row->id); ?>">
            <input type="hidden" name="object_model" value="property">
        </li>
        <li>
            <div class="search_option_button">
                <button type="submit" class="btn btn-block btn-thm"><?php echo e(__('Contact')); ?></button>
            </div>
        </li>
    </ul>
    <div class="form-mess"></div>
</form>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Property/Views/frontend/layouts/details/contact.blade.php ENDPATH**/ ?>