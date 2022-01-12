

<?php $__env->startSection('page-content'); ?>

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Payment Method
              </div>
              <div class="col-auto">
                <a href="<?php echo e(URL::to('checkout')); ?>" class="btn btn-sm btn-danger">
                  Close
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Payment Method</th>
                    <th>Description</th>
                    <th>Admin Fee</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <?php echo e($data->payment_method); ?>

                    </td>
                    <td>
                      <?php echo e($data->payment_desc); ?>

                    </td>
                    <td>
                      <?php echo e($data->admin_fee); ?>

                    </td>
                    <td>
                      <form action="<?php echo e(route('payment.update', $data->id)); ?>" method="post">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <?php if($data->status == 'selected'): ?>
                        <button type="submit" class="btn btn-primary btn-sm" disabled>Selected</button>
                        <?php else: ?>
                        <button type="submit" class="btn btn-primary btn-sm">Select</button>
                        <?php endif; ?>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bokpedia_book\resources\views/payment.blade.php ENDPATH**/ ?>