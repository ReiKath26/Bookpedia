

<?php $__env->startSection('page-content'); ?>

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Payment
              </div>
              <div class="col-auto">
                <a href="/" class="btn btn-sm btn-danger">
                  Back
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">

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

          <div class="col col-12">
            <div class="card">
              <div class="card-header">
                Update Payment
              </div>
              <div class="card-body">
                <form action="/dashboard-payment/update/{id}" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">Payment Method</label>
                        <input type="text" name="payment_method" class="form-control" value=<?php echo e($payment->payment_method); ?>>
                      </div>
                      <div class="form-group">
                        <label for="address">Type</label>
                        <input type="text" name="payment_type" class="form-control" value=<?php echo e($payment->payment_type); ?>>
                      </div>
                      <div class="form-group">
                        <label for="phone">Description</label>
                        <input type="text" name="payment_desc" class="form-control" value=<?php echo e($payment->payment_desc); ?>>
                      </div>
                      <div class="form-group">
                        <label for="province">Admin Fee</label>
                        <input type="number" name="admin_fee" class="form-control" value=<?php echo e($payment->admin_fee); ?>>
                      </div>
                    </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('transact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (2)\Bookpedia-main\resources\views/dashboard/updatePayment.blade.php ENDPATH**/ ?>