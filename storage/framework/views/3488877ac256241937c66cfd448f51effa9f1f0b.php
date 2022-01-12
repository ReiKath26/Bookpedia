

<?php $__env->startSection('page-content'); ?>


<div class="row">
    <div class="container">
        <h2 class="text-center my-5">Please upload your transaction proof here</h2>

        <div class="col-lg-8 mx-auto my-5">

            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?> <br/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>

            <form action="/success" method="GET" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="file">
                </div>

                <input type="submit" value="Upload" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('transact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bookpediaaa\resources\views/proof.blade.php ENDPATH**/ ?>