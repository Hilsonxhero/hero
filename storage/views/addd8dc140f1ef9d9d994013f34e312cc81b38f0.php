

<?php $__env->startSection('title'); ?>
    ثبت نام
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="account-ui">
        <form class="form-ui" action="<?php echo e(route('users.register')); ?>" method="post">

            <div class="form-content-ui">
                <div class="user-icon"></div>
                <div class="form-group">
                    <label for="usernmae" class="col-form-label">نام کاربری :</label>
                    <div class="username-ui">
                        <input type="text" name="username" id="usernmae" class="form-control" placeholder="">
                    </div>

                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">ایمیل :</label>
                    <div class="email-iu">
                        <input type="email" name="email" id="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">رمز عبور :</label>
                    <div class="password-iu">
                        <input type="password" name="password" id="password" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirme-password" class="col-form-label">تکرار رمز عبور :</label>
                    <div class="password-iu">
                        <input type="password" name="password_confirmation" id="confirme-password" class="form-control"
                               placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="account-btn-ui">ثبت نام</button>
                </div>
                <div class="form-group">
                    <a href="<?php echo e(route('users.login')); ?>" class="account__sign-in-btn mt-2">ورود</a>
                </div>

            </div>


        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('app.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/auth/register.blade.php ENDPATH**/ ?>