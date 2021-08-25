<!doctype html>
<html lang="fa">
<head>
    <?php echo $__env->make('app.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body class="home-body">

<?php echo $__env->make('app.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--MAIN-->
<?php echo $__env->yieldContent('content'); ?>
<!--END MAIN-->
<?php echo $__env->make('app.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->make('app.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\wamp64\www\mvc_project\resources\views/app/layouts/master.blade.php ENDPATH**/ ?>