

<?php $__env->startSection('page-content'); ?>

<div class="container my-5 color-brown ">
    <div class="row color-brown">
        <div class="col-3">
            <h4><?php echo e(Auth::user()->name); ?></h4>
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action active" aria-current="true"
                style="background-color: brown">
                Order
                </a>
            </div>
        </div>
        <div class="col-9 text-center">
        <div class="list-group">
            <h1 class="fw-bold">Order List</h1>
            <?php if(!$histories->isEmpty()): ?>
                <?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/history/<?php echo e($history->id); ?>" class="color-brown list-group-item list-group-item-action">
                        <div class="d-flex justify-content-between px-3">
                            <span><?php echo e($history->created_at); ?></span>
                            <span class="fw-bold"><?php echo e($history->status); ?></span>
                        </div>
                    </a>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            <?php else: ?>
                <hr>
                <h3 class="fw-bold">No Order Yet!</h3>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevin's\Downloads\bp\resources\views/history.blade.php ENDPATH**/ ?>