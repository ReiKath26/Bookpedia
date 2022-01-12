

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


<?php if(count($errors) > 0): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-warning"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if($message = Session::get('error')): ?>
    <div class="alert alert-warning">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>
<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

<div>

<div class="title-page">My Cart</div>
<div class="box"></div>

<?php if($thisCart): ?>


<div class="row mb-2">
    <div class="col col-12 mb-2">
      <div class="card">
        <div class="card-header">
          Your Order
        </div>
        <div class="card-body">
            <?php $__currentLoopData = $thisCart->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="d-flex">

                <img class="cart-image m-3" src=<?php echo e($detail->product->img); ?>>

                <div class="data-cart d-inline">
                <div class="title-cart ml-2 mt-2"><?php echo e($detail->product->title); ?></div>
                <div class="title-author"><?php echo e($detail->product->author->name); ?></div>
                <div class="title-sub"><?php echo e($detail->subtotal); ?></div>

                </div>

                <div class="button-group mt-5 d-flex">
                    <form action="<?php echo e(route('cartDetail.update',$detail->id)); ?>" method="post">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                          <input type="hidden" name="param" value="min">
                          <button class="btn btn-primary btn-sm">
                          -
                          </button>
                        </form>
                        <button class="btn-qty btn-outline-custom btn-sm" disabled="true">
                        <?php echo e(number_format($detail->qty)); ?>

                        </button>
                        <form action="<?php echo e(route('cartDetail.update',$detail->id)); ?>" method="post">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                          <input type="hidden" name="param" value="plus">
                          <button class="btn btn-primary btn-sm">
                          +
                          </button>
                        </form>

                </div>

                <form action="<?php echo e(route('cartDetail.destroy', $detail->id)); ?>" method="post" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('delete')); ?>

                    <button type="submit" class="trash-button btn btn-sm mt-5 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg>
                    </button>
                  </form>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="card-footer">
                <a href="/checkout" class="cart-button btn btn-block">Checkout</button>

              </div>
        </div>
      </div>
    </div>
</div>


</div>


<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kevin's\Downloads\bp\resources\views/cart.blade.php ENDPATH**/ ?>