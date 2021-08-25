

<?php $__env->startSection('title'); ?> پنل مدیریت | دسته بندی ها <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">دسته بندی ها</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="index.html">داشبورد</a></li>
                        <li><a href="index.html" class="text-dark">دسته بندی ها</a></li>
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
                                    <th>نام دسته بندی</th>
                                    <th>نام انگلیسی دسته بندی</th>
                                    <th>دسته پدر</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="">1</a></td>
                                        <td><a href=""><?php echo e($category->name); ?></a></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td><?php echo e($category->parentName()); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-default ac-btn-ui"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="مشاهده">
                                                <i class="ri-eye-fill"></i>
                                            </button>


                                            <a class="d-inline-block" href="<?php echo e(route('dashboard.category.edit',[$category->id])); ?>">
                                                <button type="submit" class="btn btn-sm btn-default ac-btn-ui"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="ویرایش"
                                                        aria-describedby="tooltip286794"><i
                                                            class="ri-edit-2-line"></i>
                                                </button>
                                            </a>
                                            <a class="d-inline-block">
                                                <form action="<?php echo e(route('dashboard.category.destroy',[$category->id])); ?>"
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
                        <form action="<?php echo e(route('dashboard.category.store')); ?>" id="form" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="نام دسته بندی">
                                <div class="mt-3">
                                    <small class="text-danger"><?php echo e(errorText('name')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="slug" class="form-control" placeholder="نام انگلیسی دسته بندی">
                                <div class="mt-3">
                                    <small class="text-danger"><?php echo e(errorText('slug')); ?></small>
                                </div>
                            </div>


                            <div class="form-group">
                                <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                                <select class="js-select-ui form-select" name="parent_id">
                                    <option value=""> ندارد</option>
                                    <?php $__currentLoopData = $parentCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
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
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_router\resources\views/panel/category/index.blade.php ENDPATH**/ ?>