

<?php $__env->startSection('title'); ?> پنل مدیریت | کامنت ها <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">کامنت ها </h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>" title="پیشخوان">داشبورد</a></li>
                        <li><a href="<?php echo e(route('dashboard.comment.index')); ?>" class="text-dark" title="پیشخوان">کامنت
                                ها </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="title__row d-none">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>شناسه</th>
                                    <th>کاربر</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href=""><?php echo e($comment->id); ?></a></td>
                                        <td><a href=""><?php echo e($comment->user->first_name); ?></a></td>
                                        <td><a href=""><?php echo e($comment->approved); ?></a></td>
                                        <td>
                                            <a class="d-inline-block" href="<?php echo e(route('dashboard.comment.show',[$comment->id])); ?>">
                                                <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="مشاهده">
                                                    <i class="ri-eye-fill"></i>
                                                </button>

                                            </a>

                                            <a class="d-inline-block"
                                               href="<?php echo e(route('dashboard.post.edit',[$post->id])); ?>">


                                                <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="ویرایش"
                                                        aria-describedby="tooltip286794"><i
                                                            class="ri-edit-2-line"></i>
                                                </button>

                                            </a>
                                            <a class="d-inline-block">
                                                <form action="<?php echo e(route('dashboard.post.destroy',[$post->id])); ?>"
                                                      method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button type="submit" class="btn btn-sm btn-default ac-btn-ui"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="حذف"
                                                            aria-describedby="tooltip286794"><i
                                                                class="ri-delete-bin-line"></i>
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/comment/index.blade.php ENDPATH**/ ?>