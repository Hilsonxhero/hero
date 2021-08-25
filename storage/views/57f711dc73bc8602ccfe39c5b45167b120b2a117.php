

<?php $__env->startSection('title'); ?> پنل مدیریت | اسلاید ها <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui d-flex justify-content-between">
                    <div>
                        <h1 class="text-dark fs-5 fw-bold">اسلاید </h1>
                        <ul class="breadcrumb-ui ps-0">
                            <li><a href="<?php echo e(route('dashboard.index')); ?>" title="پیشخوان">داشبورد</a></li>
                            <li><a href="<?php echo e(route('dashboard.slide.index')); ?>" class="text-dark" title="پیشخوان">اسلاید </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php echo e(route('dashboard.slide.create')); ?>" class="btn btn-primary-ui" >ایجاد اسلاید</a>
                    </div>

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
                                    <th>عنوان</th>
                                    <th>لینک</th>
                                    <th>آدرس</th>
                                    <th>مبلغ</th>
                                    <th>تصویر</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="">1</a></td>
                                        <td><a href=""><?php echo e($slide->title); ?></a></td>
                                        <td><a href=""><?php echo e($slide->url); ?></a></td>
                                        <td><a href=""><?php echo e($slide->address); ?></a></td>
                                        <td><a href=""><?php echo e($slide->amount); ?></a></td>
                                        <td><img width="90" class="img-fluid" src="<?php echo e($slide->banner->thumb()); ?>" alt=""></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="مشاهده">
                                                <i class="ri-eye-fill"></i>
                                            </button>

                                            <a class="d-inline-block"
                                               href="<?php echo e(route('dashboard.slide.edit',[$slide->id])); ?>">


                                                <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="ویرایش"
                                                        aria-describedby="tooltip286794"><i
                                                            class="ri-edit-2-line"></i>
                                                </button>

                                            </a>
                                            <a class="d-inline-block">
                                                <form action="<?php echo e(route('dashboard.slide.destroy',[$slide->id])); ?>"
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
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/slide/index.blade.php ENDPATH**/ ?>