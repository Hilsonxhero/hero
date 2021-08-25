

<?php $__env->startSection('title'); ?> پنل مدیریت |  مشاهده کامنت <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">مشاهده نظر </h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>">داشبورد</a></li>
                        <li><a href="<?php echo e(route('dashboard.comment.index')); ?>" class="">کامنت ها </a></li>
                        <li><a href="" class="text-dark"> مشاهده نظر </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="card">
                    <div class="body p-0">
                        <div class="card-info-ui d-flex align-items-center p-3">
                            <a class="card-header__back-ui" href=""></a>
                            <div class=""><a class="text-dark" href=""><?php echo e($comment->post->title); ?></a></div>
                        </div>
                        <div class="transition-comment">
                            <div class="transition-comment-header px-3 d-flex align-items-center">
                                <div>
                                    <img src="<?php echo e(asset('panel/assets/images/profile.jpg')); ?>" alt="" class="logo-pic">
                                </div>
                                <div class="nav-comment-status">
                                    <div class="username">کاربر : امیر</div>
                                    <div class="comment-date">6 ماه پیش</div>
                                </div>
                            </div>
                            <div class="transition-comment-body p-3">
                                <div>
                                    <?php echo e($comment->comment); ?>

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <form action="" id="form" method="post">
                            <div class="form-group">
                                <div class="toolbar-container bg-white"></div>
                                <textarea class="form-control" id="editor" name="body" rows="5" cols="30"
                                          required>پاسخ شما</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary-ui">ارسال پاسخ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/comment/show.blade.php ENDPATH**/ ?>