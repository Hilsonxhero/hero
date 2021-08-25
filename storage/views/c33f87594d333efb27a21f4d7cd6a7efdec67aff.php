

<?php $__env->startSection('title'); ?> پنل مدیریت | ایجاد اسلاید  <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">ایجاد اسلاید </h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>">داشبورد</a></li>
                        <li><a href="<?php echo e(route('dashboard.slide.index')); ?>" class="">اسلاید ها</a></li>
                        <li><a href="" class="text-dark">ایجاد اسلاید </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo e(route('dashboard.slide.store')); ?>" id="form" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="عنوان مقاله" value="<?php echo e(old('title')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="url" class="form-control" placeholder="لینک" value="<?php echo e(old('slug')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="آدرس" value="<?php echo e(old('slug')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="amount" class="form-control" placeholder="مبلغ" value="<?php echo e(old('slug')); ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group file-upload-ui">
                                        <label for="file-ip-1">اپلود تصویر</label>
                                        <input type="file" name="attachment" id="file-ip-1" onchange="showreview(event);"
                                               class="form-control" value="" accept="image/*">
                                        <div class="preview">
                                            <img id="file-ip-1-preview">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="toolbar-container bg-white"></div>
                                        <textarea class="form-control" id="editor" name="body" rows="5" cols="30"
                                                  required><?php echo e($post->body); ?></textarea>
                                    </div>
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

<?php $__env->startSection('scripts'); ?>

    <script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script><!-- ckeditor Plugin Js -->

    <script>
        CKEDITOR.replace('body', {
            language: 'fa'
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/slide/create.blade.php ENDPATH**/ ?>