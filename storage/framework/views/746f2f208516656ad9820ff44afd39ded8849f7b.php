

<?php $__env->startSection('page-content'); ?>

<?php
    $productTotal = 0;
?>

<div class="container my-5">
    <div class="row color-brown">
        <div class="col-3">
            <h4><?php echo e(Auth::user()->name); ?></h4>
            <div class="list-group">
                <a href="/history" class="list-group-item list-group-item-action">Order</a>
                <a href="" class="list-group-item list-group-item-action active" aria-current="true" style="background-color: brown">
                    Detail History
                </a>
            </div>
        </div>
        <div class="col-9">
            <div class="card p-3 fw-bolder">
                <div class="d-flex justify-content-between">
                    <p >Order Status</p>
                    <p class=" <?php if($head->status == "Success"): ?>
                        text-success
                        <?php else: ?>
                        text-danger
                    <?php endif; ?> "><?php echo e($head->status); ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="">Order Date</p>
                    <p><?php echo e(date_format($head->created_at,"M d, Y")); ?></p>
                </div>
            </div>
            <h1 class="fw-bold">Product Detail</h1>
            <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex justify-content-between">
                            <img src="<?php echo e($detail->book->img); ?>" height="150px" alt="">
                            <div class="ms-3">
                                <h5><?php echo e($detail->book->title); ?></h5>
                                <p>Rp. <?php echo e($detail->book->price); ?> x <?php echo e($detail->qty); ?></p>
                            </div>
                        </div>
                        <a class="text-decoration-none text-white px-3 py-1 rounded" href="/books/<?php echo e($detail->book->id); ?>" style="background-color: brown">Beli Lagi</a>
                    </div>
                </div>

                <?php
                    $productTotal += $detail->book->price * $detail->qty;
                ?>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <h1 class="fw-bold">Order Address</h1>
            <div class="fw-bolder">
                <p><?php echo e($head->address->receiver_name); ?></p>
                <p><?php echo e($head->address->phone); ?></p>
                <p><?php echo e($head->address->address); ?>, <?php echo e($head->address->city); ?></p>
                <p><?php echo e($head->address->province); ?>, <?php echo e($head->address->postcode); ?></p>
            </div>
            <h3 class="fw-bold">Courier <?php echo e($head->shipping->shipment_company); ?></h3>
            
            <br><br>
            <h1 class="fw-bold">Transaction Detail</h1>
            <div class="fw-bolder">
                <div class="d-flex justify-content-between">
                    <p>Payment Method</p>
                    <p><?php echo e($head->payment->payment_method); ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>product price</p>
                    <p>Rp. <?php echo e($productTotal); ?></p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping price</p>
                    <p>Rp. <?php echo e($head->shipping->shipment_price); ?></p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <h3 class="fw-bold">Total Price</h3>
                <h3 class="fw-bold">Rp. <?php echo e($head->total); ?></h3>
            </div>
        </div>
    </div>
    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevin's\Downloads\bp\resources\views/historyDetail.blade.php ENDPATH**/ ?>