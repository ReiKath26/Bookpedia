

<?php $__env->startSection('page-content'); ?>

<div class="container">
    <div class="row">
      <div class="col col-12 mb-2">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                Book
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
                New Book
              </div>
              <div class="card-body">
                <form action="/dashboard-payment/update/{id}" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="receiver_name">ISBN</label>
                        <input type="text" name="ISBN" class="form-control" value=<?php echo e(old('ISBN')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="address">Title</label>
                        <input type="text" name="title" class="form-control" value=<?php echo e(old('title')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="phone">Description</label>
                        <input type="text" name="description" class="form-control" value=<?php echo e(old('description')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="province">Price</label>
                        <input type="number" name="price" class="form-control" value=<?php echo e(old('price')); ?>>
                      </div>

                      <div class="form-group">
                        <label for="province">Category</label>
                        <<select name="category" id="cars">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($data->id); ?>><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="province">Publisher</label>
                        <<select name="publisher" id="cars">
                            <?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($data->id); ?>><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="province">Author</label>
                        <<select name="author" id="cars">
                            <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($data->id); ?>><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="province">Year</label>
                        <input type="number" name="year" class="form-control" value=<?php echo e(old('year')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="phone">Language</label>
                        <input type="text" name="language" class="form-control" value=<?php echo e(old('language')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="province">Page</label>
                        <input type="number" name="page" class="form-control" value=<?php echo e(old('page')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="province">Stock</label>
                        <input type="number" name="stock" class="form-control" value=<?php echo e(old('stock')); ?>>
                      </div>
                      <div class="form-group">
                        <label for="phone">URL to Image</label>
                        <input type="text" name="img" class="form-control" value=<?php echo e(old('img')); ?>>
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
<?php echo $__env->make('transact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (2)\Bookpedia-main\resources\views/dashboard/new.blade.php ENDPATH**/ ?>