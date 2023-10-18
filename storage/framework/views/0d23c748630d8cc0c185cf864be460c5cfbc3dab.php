<form action="<?php echo e(route('login')); ?>" class="bravo-form-login" method="POST">
    <input type="hidden" name="redirect" value="<?php echo e(request()->query('redirect')); ?>">
    <?php echo csrf_field(); ?>
    <div class="heading">
        <h4><?php echo e(__('Login')); ?></h4>
    </div>
    <?php if(setting_item('facebook_enable') or setting_item('google_enable') or setting_item('twitter_enable')): ?>
        <div class="row mt25">
            <?php if(setting_item('facebook_enable')): ?>
                <div class="col-lg-12">
                    <a href="<?php echo e(url('/social-login/facebook')); ?>" data-channel="facebook">
                        <button type="button" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> <?php echo e(__('Login with Facebook')); ?></button>
                    </a>

                </div>
            <?php endif; ?>
            <?php if(setting_item('google_enable')): ?>
                <div class="col-lg-12">
                    <a href="<?php echo e(url('social-login/google')); ?>" data-channel="google">
                        <button type="button" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> <?php echo e(__('Login with Google')); ?></button>
                    </a>
                </div>
            <?php endif; ?>
            <?php if(setting_item('twitter_enable')): ?>
                <div class="col-lg-12">
                    <a href="<?php echo e(url('social-login/twitter')); ?>" data-channel="twitter">
                        <button type="button" class="btn btn-tw btn-block"><i class="fa fa-twitter float-left mt5"></i> <?php echo e(__('Login with Twitter')); ?></button>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <hr>
    <?php endif; ?>
    <div class="input-group mb-2 mr-sm-2">
        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="email" autocomplete="off" placeholder="<?php echo e(__('Email')); ?>">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="flaticon-user"></i></div>
        </div>
        <span class="invalid-feedback error error-email"></span>
    </div>
    <div class="input-group form-group">
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off"  placeholder="<?php echo e(__('Password')); ?>">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="flaticon-password"></i></div>
        </div>
        <span class="invalid-feedback error error-password"></span>
    </div>
    <div class="form-group">
        <label class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember-me" value="1">
            <span class="custom-control-label" for="exampleCheck1"><?php echo e(__('Remember me')); ?></span>
        </label>

        <a class="btn-fpswd float-right" href="<?php echo e(route("password.request")); ?>"><?php echo e(__('Lost your password?')); ?></a>
    </div>
    <?php if(setting_item("user_enable_login_recaptcha")): ?>
        <div class="form-group">
            <?php echo e(recaptcha_field($captcha_action ?? 'login')); ?>

        </div>
    <?php endif; ?>
    <div class="error message-error invalid-feedback"></div>
    <button type="submit" class="btn btn-log btn-block btn-thm"><?php echo e(__('Log In')); ?></button>
    <?php if(is_enable_registration()): ?>
        <p class="text-center"><?php echo e(__('Do not have an account?')); ?> <a class="text-thm" href="javascript:void(0)" data-target="#register" data-toggle="modal"><?php echo e(__('Register')); ?></a></p>
    <?php endif; ?>
</form>
<?php /**PATH D:\xampp\htdocs\misrea\findhouse.2.1.0\findhouse.2.1.0\themes/Findhouse/Layout/auth/login-form.blade.php ENDPATH**/ ?>