<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php echo $__env->make('panel.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>


<body>

<!--begin::Sidebar-->
<?php echo $__env->make('panel.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end::Sidebar-->

<!--begin::Content-->
<div class="content">

    <!--begin::Header-->
<?php echo $__env->make('panel.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end::Header-->

    <!--begin::Theme Setting-->
<?php echo $__env->make('panel.layouts.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end::Theme Setting-->

    <!--begin::Main Content-->
<?php echo $__env->yieldContent('content'); ?>

<!--end::Main Content-->

</div>
<!--end::Content-->

<!--begin::Scripts-->
<?php echo $__env->make('panel.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('scripts'); ?>
<!--end::Scripts-->

</body>

</html><?php /**PATH C:\wamp64\www\mvc_project\resources\views/panel/layouts/master.blade.php ENDPATH**/ ?>