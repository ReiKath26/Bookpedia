<?php $__env->startSection('navbar-menu'); ?>

<?php if(auth()->guard()->check()): ?>

<li class="nav-item">
    <a class="nav-link" href="/profile">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href=<?php echo e(route('cart.index')); ?>>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
    </a>
  </li>


<?php else: ?>
<li class="nav-item">
    <a class="nav-link" href="/login">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/login">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
    </a>
  </li>

<?php endif; ?>
<?php $__env->stopSection(); ?>

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
                            <img src="<?php echo e($detail->img); ?>" height="150px" alt="">
                            <div class="ms-3">
                                <h5><?php echo e($detail->book_title); ?></h5>
                                <p>Rp. <?php echo e($detail->price); ?> x <?php echo e($detail->qty); ?></p>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (2)\Bookpedia-main\resources\views/historyDetail.blade.php ENDPATH**/ ?>