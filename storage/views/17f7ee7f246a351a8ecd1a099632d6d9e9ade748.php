

<?php $__env->startSection('title'); ?> پنل مدیریت | ویرایش مقاله  <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">ویرایش مقاله </h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="index.html">داشبورد</a></li>
                        <li><a href="index.html" class="">مقاله ها</a></li>
                        <li><a href="index.html" class="text-dark">ایجاد مقاله </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo e(route('dashboard.post.update',[$post->id])); ?>" id="form" method="post"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="عنوان مقاله"
                                       value="<?php echo e($post->title); ?>">
                                <div class="mt-3">
                                    <small class="text-danger"><?php echo e(errorText('title')); ?></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="slug" class="form-control" placeholder="نام انگلیسی مقاله"
                                       value="<?php echo e($post->slug); ?>">
                                <div class="mt-3">
                                    <small class="text-danger"><?php echo e(errorText('slug')); ?></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <select class="js-select-ui form-select" name="cat_id">
                                    <option value=""> ندارد</option>
                                    <?php $__currentLoopData = $parentCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                                <?php if($item->id == $post->cat_id): ?> selected <?php endif; ?>> <?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="toolbar-container bg-white"></div>
                                <textarea class="form-control" id="editor" name="body" rows="5"
                                          cols="30"><?php echo $post->body; ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group file-upload-ui">
                                        <label for="file-ip-1">اپلود تصویر</label>
                                        <input type="file" name="attachment" id="file-ip-1"
                                               onchange="showreview(event);"
                                               class="form-control" accept="image/*">
                                        <div class="preview d-block">
                                            <img class="d-block" src="<?php echo e($post->banner->thumb()); ?>" alt="" id="file-ip-1-preview">
                                        </div>

                                        <div class="mt-3">
                                            <small class="text-danger"><?php echo e(errorText('attachment')); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <ul class="list-group mb-3 tp-setting">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label class="form-label mb-0">وضعیت مقاله</label>
                                                <div class="">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="status" type="checkbox"
                                                               <?php if($post->status == 1): ?> checked <?php endif; ?>
                                                               id="status">
                                                        <label class="form-check-label"
                                                               for="status"></label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/post/edit.blade.php ENDPATH**/ ?>