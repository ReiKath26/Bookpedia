

<?php $__env->startSection('page-content'); ?>

<div class="container">
    <div class="row">
      <div class="col col-8">
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
              <div class="card-header">Shipping Address</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-stripped">
                    <thead>
                      <tr>
                        <th>Receiver Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if($thisShippingAddress): ?>
                      <tr>
                        <td>
                          <?php echo e($thisShippingAddress->receiver_name); ?>

                        </td>
                        <td>
                          <?php echo e($thisShippingAddress->address); ?><br />
                          <?php echo e($thisShippingAddress->city); ?>, <?php echo e($thisShippingAddress->province); ?> - <?php echo e($thisShippingAddress -> province); ?>

                        </td>
                        <td>
                          <?php echo e($thisShippingAddress->phone); ?>

                        </td>
                        <td>
                          <a href="<?php echo e(route('shippingaddress.index')); ?>" class="btn btn-secondary btn-sm">
                            Change address
                          </a>
                        </td>
                      </tr>
                    <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                <a href="<?php echo e(route('shippingaddress.index')); ?>" class="btn btn-sm btn-secondary">
                  Add new address
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

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
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
      </div>

      <div class="col col-12">
        <div class="card">
          <div class="card-header">Shipping Method</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Shipping Company</th>
                    <th>Type</th>
                    <th>Delivery fee</th>
                    <th>Duration</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php if($thisShipping): ?>
                  <tr>
                    <td>
                      <?php echo e($thisShipping->shipment_company); ?>

                    </td>
                    <td>
                      <?php echo e($thisShipping->shipment_type); ?>

                    </td>
                    <td>
                      <?php echo e($thisShipping->shipment_price); ?>

                    </td>
                    <td>
                        <?php echo e($thisShipping->min_shipment_duration); ?> - <?php echo e($thisShipping->max_shipment_duration); ?> days
                    </td>
                    <td>
                      <a href="<?php echo e(route('shipping.index')); ?>" class="btn btn-secondary btn-sm">
                        Change Method
                      </a>
                    </td>
                  </tr>

                  <?php else: ?>
                  <td>None selected</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="<?php echo e(route('shipping.index')); ?>" class="btn btn-secondary btn-sm">
                      Pick Method
                    </a>
                  </td>
                <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card">
          <div class="card-header">Payment Method</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped">
                <thead>
                  <tr>
                    <th>Payment Method</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php if($thisPayment): ?>
                  <tr>
                    <td>
                      <?php echo e($thisPayment->payment_method); ?>

                    </td>
                    <td>
                      <a href="<?php echo e(route('payment.index')); ?>" class="btn btn-secondary btn-sm">
                        Change Payment
                      </a>
                    </td>
                  </tr>

                  <?php else: ?>
                <td>None selected</td>

                <td>
                    <a href="<?php echo e(route('payment.index')); ?>" class="btn btn-secondary btn-sm">
                      Pick Payment Method
                    </a>
                  </td>
                <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <div class="col col-4">
        <div class="card">
          <div class="card-header">
            Overview
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <td>Subtotal</td>
                <td class="text-right">
                 Rp.  <?php echo e($thisCart->total); ?>

                </td>
              </tr>
              <?php if($thisShipping): ?>
              <tr>
                <td>Shipping fee</td>
                <td class="text-right">
                    Rp. <?php echo e($thisShipping->shipment_price); ?>

                </td>
              </tr>
              <?php endif; ?>
              <?php if($thisPayment): ?>
              <tr>
                <td>Admin fee</td>
                <td class="text-right">
                    Rp. <?php echo e($thisPayment->admin_fee); ?>

                </td>
              </tr>
              <?php endif; ?>
              <tr>
                <td>Total</td>

                <?php if($thisShipping && $thisPayment): ?>
                <td class="text-right">
                   Rp.  <?php $thisCart->total + $thisShipping->shipment_price + $thisPayment->admin_fee?>
                </td>
                <?php else: ?>
                <td>Calculating...</td>
                <?php endif; ?>
              </tr>
            </table>
          </div>
          <div class="card-footer">
            <form action="/order/billing" method="post">
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-secondary btn-block">Order</button>
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

<?php echo $__env->make('transact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bokpedia_book\resources\views/checkout.blade.php ENDPATH**/ ?>