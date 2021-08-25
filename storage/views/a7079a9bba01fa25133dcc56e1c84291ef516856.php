

<?php $__env->startSection('title'); ?> پنل مدیریت | مقاله ها <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">اگهی ها </h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>" title="پیشخوان">داشبورد</a></li>
                        <li><a href="<?php echo e(route('dashboard.ads.index')); ?>" class="text-dark" title="پیشخوان">اگهی ها </a>
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
                                    <th>عنوان</th>
                                    <th>تصویر</th>
                                    <th>دسته بندی</th>
                                    <th>آدرس</th>
                                    <th>مشخصات</th>
                                    <th>تگ</th>
                                    <th> کاربر</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="">1</a></td>
                                        <td><a href=""><?php echo e($item->title); ?></a></td>
                                        <td><img width="90" class="img-fluid" src="<?php echo e($item->banner->thumb()); ?>" alt=""></td>
                                        <td><a href=""><?php echo e($item->category->name); ?></a></td>
                                        <td><?php echo e($item->address); ?></td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><?php echo e($item->user->first_name); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('dashboard.ads.gallery.index',[$item->id])); ?>" class="btn btn-sm btn-default ac-btn-ui"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="گالری">
                                                <i class="ri-image-line"></i>
                                            </a>


                                            <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="مشاهده">
                                                <i class="ri-eye-fill"></i>
                                            </button>

                                            <a class="d-inline-block"
                                               href="<?php echo e(route('dashboard.ads.edit',[$item->id])); ?>">


                                                <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="ویرایش"
                                                        aria-describedby="tooltip286794"><i
                                                            class="ri-edit-2-line"></i>
                                                </button>

                                            </a>
                                            <a class="d-inline-block">
                                                <form action="<?php echo e(route('dashboard.ads.destroy',[$item->id])); ?>"
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
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/ads/index.blade.php ENDPATH**/ ?>