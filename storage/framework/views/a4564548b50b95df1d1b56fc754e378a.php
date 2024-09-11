
<?php $__env->startSection('content'); ?>
<h1 class="text-center p-3">All Products</h1>
<div class="container">
    <table class="table mt-2 table-bordered table-hover table-warning table-striped" >
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Brand</th>
                <th class="text-center">Price</th>
                <th class="text-center">Description</th>
                <th class="text-center">Show</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($product->id); ?></td>
                <td class="text-center"><?php echo e($product->name); ?></td>
                <td class="text-center"><?php echo e($product->brand); ?></td>
                <td class="text-center"><?php echo e($product->price); ?></td>
                <td class="text-center"><?php echo e($product->desc); ?></td>
                <td class="text-center"><a class="btn btn-primary" href="<?php echo e(route('Pages.show',$product->id)); ?>">Show</a></td>
                <td class="text-center"><a class="btn btn-success" href="<?php echo e(route('Pages.edit',$product->id )); ?>">Edit</a></td>
                <form action="<?php echo e(route('Pages.delete',$product->id )); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <td class="text-center"><button class="btn btn-danger" type="submit">Delete</button></td>
                </form>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Final Revision\Laravel\Last Day Rev\Laravel\Crud\resources\views/Pages/index.blade.php ENDPATH**/ ?>