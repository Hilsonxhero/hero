

<?php $__env->startSection('title'); ?> پنل مدیریت | ویرایش دسته بندی  <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">ویرایش دسته بندی </h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>">داشبورد</a></li>
                        <li><a href="<?php echo e(route('dashboard.category.index')); ?>" class="">دسته بندی ها</a></li>
                        <li><a href="" class="text-dark">ویرایش بندی </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-4">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo e(route('dashboard.category.update',[$category->id])); ?>" id="form" method="post">
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="نام دسته بندی"
                                       value="<?php echo e($category->name); ?>">

                                <div class="mt-3">
                                    <small class="text-danger"><?php echo e(errorText('name')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="slug" class="form-control" placeholder="نام انگلیسی دسته بندی"
                                       value="<?php echo e($category->slug); ?>">
                                <div class="mt-3">
                                    <small class="text-danger"><?php echo e(errorText('slug')); ?></small>
                                </div>
                            </div>


                            <div class="form-group">
                                <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                                <select class="js-select-ui form-select" name="parent_id">
                                    <option value=""> ندارد</option>
                                    <?php $__currentLoopData = $parentCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php if($item->id == $category->parent_id): ?> selected <?php endif; ?>> <?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary-ui">ویرایش</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/category/edit.blade.php ENDPATH**/ ?>