

<?php $__env->startSection('title'); ?> پنل مدیریت | ویرایش مقاله  <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="toolbar-ui">
                    <h1 class="text-dark fs-5 fw-bold">ایجاد اگهی</h1>
                    <ul class="breadcrumb-ui ps-0">
                        <li><a href="<?php echo e(route('dashboard.index')); ?>" title="پیشخوان">پیشخوان</a></li>
                        <li><a href="<?php echo e(route('dashboard.ads.index')); ?>" title="پیشخوان">اگهی ها</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="body">
                        <form action="<?php echo e(route('dashboard.ads.store')); ?>" id="form" method="post"
                              enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="عنوان "
                                               value="<?php echo e(old('title')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="آدرس"
                                               value="<?php echo e(old('address')); ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="floor" class="form-control" placeholder="کف "
                                               value="<?php echo e(old('floor')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="year" class="form-control" placeholder="سال ساخت"
                                               value="<?php echo e(old('year')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="amount" class="form-control" placeholder="قیمت"
                                               value="<?php echo e(old('amount')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="area" class="form-control" placeholder="متراژ"
                                               value="<?php echo e(old('area')); ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="room" class="form-control" placeholder="اتاق"
                                               value="<?php echo e(old('room')); ?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <ul class="tags ps-0">
                                        <li class="tagAdd taglist">
                                            <input type="text" name="ww" class="" id="search-field"
                                                   placeholder="تگ ها">
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group file-upload-ui">
                                        <label for="file-ip-1">اپلود تصویر</label>
                                        <input type="file" name="banner" id="file-ip-1" onchange="showreview(event);"
                                               class="form-control" value="" accept="image/*">
                                        <div class="preview">
                                            <img id="file-ip-1-preview">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <ul class="list-group mb-3 tp-setting">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <label class="form-label mb-0">وضعیت اگهی</label>
                                                <div class="">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="status"
                                                               id="flexSwitchCheckDefault">
                                                        <label class="form-check-label"
                                                               for="flexSwitchCheckDefault"></label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="toolbar-container bg-white"></div>
                                        <textarea class="form-control" id="editor" name="body" rows="5" cols="30"
                                                  required><?php echo old('body'); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="storeroom">
                                            <option value="">انتخاب انبار</option>
                                            <option value="0">ندارد</option>
                                            <option value="1">دارد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="balcony">
                                            <option value="">انتخاب بالکن</option>
                                            <option value="0">ندارد</option>
                                            <option value="1">دارد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="toilet">
                                            <option value="">انتخاب توالت</option>
                                            <option value="0">ایرانی</option>
                                            <option value="1">فرهنگی</option>
                                            <option value="2">ایرانی و فرنگی</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="sell_status">
                                            <option value="">انتخاب نوع اگهی</option>
                                            <option value="0">اجاره و رهن</option>
                                            <option value="1">فروشی</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="type">
                                            <option value="">انتخاب نوع ملک</option>
                                            <option value="0">آپارتمان</option>
                                            <option value="1">ویلایی</option>
                                            <option value="2">زمین</option>
                                            <option value="3">سوله</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="parking">
                                            <option value="">انتخاب پارکینگ</option>
                                            <option value="0">ندارد</option>
                                            <option value="1">دارد</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="js-select-ui form-select" name="cat_id">
                                            <option value="">انتخاب دسته بندی</option>
                                            <?php $__currentLoopData = $parentCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary-ui mt-4  w-100 d-block">ایجاد اگهی</button>
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
<?php echo $__env->make('panel.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/ads/create.blade.php ENDPATH**/ ?>