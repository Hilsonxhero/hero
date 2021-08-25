<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <h4><?php echo e($b->title); ?></h4>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($article->title); ?></h1>
</body>
</html><?php /**PATH C:\wamp64\www\mvc_project\resources\views/index.blade.php ENDPATH**/ ?>