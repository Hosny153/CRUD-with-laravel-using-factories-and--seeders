
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-center ">
        <div style="width: 50rem" class="card p-1 mt-5">
            <div class="card-title">
                <h1 class="text-center bg-dark text-light p-2" >Details</h1>
            </div>
            <div class="card-body">
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Name:</span><?php echo e($Products->name); ?></h4>
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Brand:</span><?php echo e($Products->banrd); ?></h4>
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Price:</span><?php echo e($Products->price); ?></h4>
                <h4 class="text-center" ><span class="fw-bold fs-3 me-2">Description:</span><?php echo e($Products->desc); ?></h4>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Programming\Final Revision\Laravel\Last Day Rev\Laravel\Crud\resources\views/Pages/show.blade.php ENDPATH**/ ?>