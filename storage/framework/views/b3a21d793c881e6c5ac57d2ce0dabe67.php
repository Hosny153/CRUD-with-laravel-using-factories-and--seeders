<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('Bootstrap/css/bootstrap.min.css')); ?>">
</head>
<body>
    <section class="py-4" >
        <div class="container">
            <div class="d-flex justify-content-center mt-5 mb-3">
                <a class="btn btn-primary mx-3" href="<?php echo e(route('Pages.index')); ?>">All Products</a>
                <a class="btn btn-warning mx-3" href="<?php echo e(route('Pages.create')); ?>">Add new Products</a>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </section>
    <script src="<?php echo e(asset('Bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>

<?php /**PATH D:\Programming\Final Revision\Laravel\Last Day Rev\Laravel\Crud\resources\views/Layout/Design.blade.php ENDPATH**/ ?>