

<?php $__env->startSection('title'); ?> پنل مدیریت | گالری اگهی <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">گالری تصاویر</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>">داشبورد</a></li>
                        <li><a href="" class="text-dark">گالری تصاویر</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th> تصویر</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="">1</a></td>
                                        <td><img width="100" src="<?php echo e($item->image->thumb()); ?>" alt=""></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="مشاهده">
                                                <i class="ri-eye-fill"></i>
                                            </button>


                                            <a class="d-inline-block"
                                               href="<?php echo e(route('dashboard.category.edit',[$category->id])); ?>">
                                                <button type="submit" class="btn btn-sm btn-default ac-btn-ui"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="ویرایش"
                                                        aria-describedby="tooltip286794"><i
                                                            class="ri-edit-2-line"></i>
                                                </button>
                                            </a>
                                            <a class="d-inline-block">
                                                <form action="<?php echo e(route('dashboard.ads.gallery.destroy',[$ads->id,$item->id])); ?>"
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
            <div class="col-md-4">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo e(route('dashboard.ads.gallery.store',[$ads->id])); ?>" id="form" method="post"
                              enctype="multipart/form-data">

                            <div class="form-group file-upload-ui">
                                <label for="file-ip-1">اپلود تصویر</label>
                                <input type="file" name="attachment" id="file-ip-1" onchange="showreview(event);"
                                       class="form-control" value="" accept="image/*">
                                <div class="preview">
                                    <img id="file-ip-1-preview" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary-ui">ایجاد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/ads/gallery/index.blade.php ENDPATH**/ ?>