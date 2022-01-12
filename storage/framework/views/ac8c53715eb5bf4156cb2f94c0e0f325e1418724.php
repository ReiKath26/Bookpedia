

<?php $__env->startSection('page-content'); ?>

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Shipping Address
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
                    <th>Receiver name</th>
                    <th>Address</th>
                    <th>Phone number</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <?php echo e($data->receiver_name); ?>

                    </td>
                    <td>
                      <?php echo e($data->address); ?><br />
                      <?php echo e($data->city); ?>, <?php echo e($data->province); ?> - <?php echo e($data->postcode); ?>

                    </td>
                    <td>
                      <?php echo e($data->phone); ?>

                    </td>
                    <td>
                      <form action="<?php echo e(route('shippingaddress.update', $data->id)); ?>" method="post">
                        <?php echo method_field('patch'); ?>
                        <?php echo csrf_field(); ?>
                        <?php if($data->status == 'selected'): ?>
                        <button type="submit" class="btn btn-primary btn-sm" disabled>Select</button>
                        <?php else: ?>
                        <button type="submit" class="btn btn-primary btn-sm">Select/button>
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
      <div class="col col-8">
        <div class="card">
          <div class="card-header">
            New Shipping Address
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
            <form action="<?php echo e(route('shippingaddress.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="receiver_name">Receiver name</label>
                    <input type="text" name="receiver_name" class="form-control" value=<?php echo e(old('receiver_name')); ?>>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value=<?php echo e(old('address')); ?>>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value=<?php echo e(old('no_tlp')); ?>>
                  </div>
                  <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" name="province" class="form-control" value=<?php echo e(old('province')); ?>>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" value=<?php echo e(old('city')); ?>>
                  </div>
                  <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" name="postcode" class="form-control" value=<?php echo e(old('postcode')); ?>>
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
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bokpedia_book\resources\views/address.blade.php ENDPATH**/ ?>