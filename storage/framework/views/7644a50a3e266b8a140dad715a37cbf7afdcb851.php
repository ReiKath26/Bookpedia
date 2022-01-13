

<?php $__env->startSection('page-content'); ?>

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Shipping
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
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Shipment Provider</th>
                    <th>Type</th>
                    <th>Delivery fee</th>
                    <th>Duration</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $shipping; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <?php echo e($data->shipment_company); ?>

                    </td>
                    <td>
                      <?php echo e($data->shipment_type); ?>

                    </td>
                    <td>
                      <?php echo e($data->shipment_price); ?>

                    </td>
                    <td>
                        <?php echo e($data->min_shipment_duration); ?> - <?php echo e($data->max_shipment_duration); ?> days
                    </td>
                    <td>
                      <form action="/dashboard-shipping/update/<?php echo e($data->id); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                      </form>
                    </td>

                    <td>
                        <form action="<?php echo e(route('shipping.destroy', $data->id)); ?>" method="POSt">
                          <?php echo csrf_field(); ?>
                          <?php echo e(method_field('delete')); ?>

                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>

          
          <div class="col col-12">
            <div class="card">
              <div class="card-header">
                New Shipping
              </div>
              <div class="card-body">
                <form action="<?php echo e(route('shipping.store')); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">Shipment Provider</label>
                        <input type="text" name="shipment_company" class="form-control" value=<?php echo e(old('shipment_company')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="address">Shipment Type</label>
                        <input type="text" name="shipment_type" class="form-control" value=<?php echo e(old('shipment_type')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="phone">Shipment Price</label>
                        <input type="number" name="shipment_price" class="form-control" value=<?php echo e(old('shipment_price')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="province">Min duration(days)</label>
                        <input type="number" name="min_shipment_duration" class="form-control" value=<?php echo e(old('min_shipment_duration')); ?>>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="city">Max duration(days)</label>
                        <input type="number" name="max_shipment_duration" class="form-control" value=<?php echo e(old('max_shipment_duration')); ?>>
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

<?php echo $__env->make('transact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (2)\Bookpedia-main\resources\views/dashboard/shipping.blade.php ENDPATH**/ ?>