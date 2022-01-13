

<?php $__env->startSection('page-content'); ?>

<form action="/dashboard-books/new-books" method="GET">
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-primary btn-sm">New Book</button>
  </form>

<div class="d-flex">
    <div class="col-8" id="all-books-data">
        <div class="row no-gutters">
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo e($data['img']); ?>" class="card-img-top" alt="Picture">
          <div class="card-body">
            <h5 class="card-title"><?php echo e($data['title']); ?></h5>
            <p class="card-text fs-5">Rp. <?php echo e($data['price']); ?></p>

      <div class="d-flex">
        <form action="/dashboard-books/update/<?php echo e($data->id); ?>" method="GET">
            <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
        <form action="/dashboard-books/delete/<?php echo e($data->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('delete')); ?>

            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
     </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    </div>

</div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('transact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (2)\Bookpedia-main\resources\views/dashboard/book.blade.php ENDPATH**/ ?>