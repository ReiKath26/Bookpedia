<?php $__env->startSection('navbar-menu'); ?>

<?php if(auth()->guard()->check()): ?>

<?php if(Auth::user()->status == 'user'): ?>

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
    <a class="nav-link" href="/profile">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
    </a>
  </li>

  <?php endif; ?>


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

<?php if(auth()->guard()->check()): ?>

<?php if(Auth::user()->status == 'admin'): ?>

<h2 class="fw-bold welcome-dashboard">Welcome to admin dashboard!</h2>
<div class="d-flex justify-content-center">

<div class="d-flex">
  <div class="card" style="width: 18rem; height: 25rem;">
    <a href="/dashboard-books" class="text-decoration-none text-black">
        <div class="card-body">
          <h3 class="card-title">Manage Books</h3>
          <img src="https://freepngimg.com/thumb/book/9-2-book-png-thumb.png" class="card-img-top" alt="Picture">
        </div>
    </a>
  </div>
  </div>

  <div class="d-flex">
    <div class="card" style="width: 18rem; height: 25rem;">
      <a href="/dashboard-shipping" class="text-decoration-none text-black">
          <div class="card-body">
            <h3 class="card-title">Manage Shipping</h3>
            <img src="https://www.kindpng.com/picc/m/735-7350529_fast-delivery-icon-png-transparent-png.png" class="card-img-top" alt="Picture">
          </div>
      </a>
    </div>
    </div>

    <div class="d-flex">
      <div class="card" style="width: 18rem; height: 25rem;">
        <a href="/dashboard-payment" class="text-decoration-none text-black">
            <div class="card-body">
              <h3 class="card-title">Manage Payment</h3>
              <img src="https://icons-for-free.com/iconfiles/png/512/bill-131979040781653683.png" class="card-img-top" alt="Picture">
            </div>
        </a>
      </div>
      </div>

    </div>

    <?php endif; ?>

  <?php if(Auth::user()->status == 'user'): ?>
<!-- CAROUSEL -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://drive.google.com/uc?export=view&id=1NI108Law2DA5s18IRTF12x8ofRjA3MgX" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1cZQDA8e3OSYpsdDENPouLhsPoRtDLjye" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1by8c779GDr3Ud0kTFIIpH1QaXACVmMP9" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- TITLE -->
<div class="home-title d-flex">
    <h2 class="fw-bold">Recommended This Week</h2>
    <a href="/all-books" class="see-all fw-bold text-decoration-none">See All</a>
</div>

<!-- CARD -->
<div class="d-flex">
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 18rem;">
  <a href="/books/<?php echo e($data['id']); ?>" class="text-decoration-none text-black">
    <img src="<?php echo e($data['img']); ?>" class="card-img-top" alt="Picture">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($data['title']); ?></h5>
        <p class="card-text fs-5">Rp. <?php echo e($data['price']); ?></p>
      </div>
  </a>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- BOOK TYPE -->
<div class="book-type d-flex justify-content-center text-center mt-3 mb-3">
  <a href="#" class="text-decoration-none">
    <div class="choose-book-type">
      <img src="https://drive.google.com/uc?export=view&id=1W1jR6bgXIukhma3uTKe0prm812UxT7cP" class="image" alt="">
      <p class="fw-bold fs-2">Top Selling Books</p>
    </div>  
  </a>

  <a href="#" class="text-decoration-none">
    <div class="choose-book-type">
      <img src="https://drive.google.com/uc?export=view&id=1FrPI7WBCn50b0qf8DlexwPcKVg8bLIsg" class="image" alt="">
      <p class="fw-bold fs-2">Imported Book</p>
    </div>
  </a>

  <a href="#" class="text-decoration-none">
    <div class="choose-book-type">
      <img src="https://drive.google.com/uc?export=view&id=1LJkHRZE6U6GSo6sNxKi81t4EgX6bDnyO" class="image" alt="">
      <p class="fw-bold fs-2">Scholar Books</p>
    </div>
  </a>
</div>

<!-- NEW ARRIVALS -->
<div class="new-arrivals">
  <div class="home-title d-flex">
      <h2 class="fw-bold fs-1 mt-3">NEW ARRIVALS</h2>
      <a href="/all-books" class="see-all fw-bold text-decoration-none">See All</a>
  </div>

  <div class="d-flex">
  <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card" style="width: 18rem;">
    <a href="/books/<?php echo e($data['id']); ?>" class="text-decoration-none text-black">
      <img src="<?php echo e($data['img']); ?>" class="card-img-top" alt="Picture">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($data['title']); ?></h5>
          <p class="card-text fs-5">Rp. <?php echo e($data['price']); ?></p>
        </div>
    </a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

<!-- BOOK OF THE MONTH -->
<div class="container-book-of-month">
  <div class="title text-center fw-bold mt-5 mb-5">
      <h1>BOOK OF THE MONTH</h1>
  </div>

  <div class="text-center">
    <img src="<?php echo e($data['img']); ?>" class="book-of-month-picture" alt="Picture">
    
    <div class="desc-book">
      <h3 class="book-title mt-3 mb-3 fw-bold fs-2"><?php echo e($data['title']); ?></h3>
      <h5 class="mb-3 fw-normal"><?php echo e($data['description']); ?></h5>
      <button type="button" class="btn btn-secondary"><a class="see-details-button text-white text-decoration-none" href="/books/<?php echo e($data['id']); ?>">See Details</a></button>
    </div>
  </div>
</div>

<?php endif; ?>

<?php else: ?>

<!-- CAROUSEL -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://drive.google.com/uc?export=view&id=1NI108Law2DA5s18IRTF12x8ofRjA3MgX" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1cZQDA8e3OSYpsdDENPouLhsPoRtDLjye" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://drive.google.com/uc?export=view&id=1by8c779GDr3Ud0kTFIIpH1QaXACVmMP9" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- TITLE -->
<div class="home-title d-flex">
    <h2 class="fw-bold">Recommended This Week</h2>
    <a href="/all-books" class="see-all fw-bold text-decoration-none">See All</a>
</div>

<!-- CARD -->
<div class="d-flex">
<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" style="width: 18rem;">
  <a href="/books/<?php echo e($data['id']); ?>" class="text-decoration-none text-black">
    <img src="<?php echo e($data['img']); ?>" class="card-img-top" alt="Picture">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($data['title']); ?></h5>
        <p class="card-text fs-5">Rp. <?php echo e($data['price']); ?></p>
      </div>
  </a>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- BOOK TYPE -->
<div class="book-type d-flex justify-content-center text-center mt-3 mb-3">
  <a href="#" class="text-decoration-none">
    <div class="choose-book-type">
      <img src="https://drive.google.com/uc?export=view&id=1W1jR6bgXIukhma3uTKe0prm812UxT7cP" class="image" alt="">
      <p class="fw-bold fs-2">Top Selling Books</p>
    </div>  
  </a>

  <a href="#" class="text-decoration-none">
    <div class="choose-book-type">
      <img src="https://drive.google.com/uc?export=view&id=1FrPI7WBCn50b0qf8DlexwPcKVg8bLIsg" class="image" alt="">
      <p class="fw-bold fs-2">Imported Book</p>
    </div>
  </a>

  <a href="#" class="text-decoration-none">
    <div class="choose-book-type">
      <img src="https://drive.google.com/uc?export=view&id=1LJkHRZE6U6GSo6sNxKi81t4EgX6bDnyO" class="image" alt="">
      <p class="fw-bold fs-2">Scholar Books</p>
    </div>
  </a>
</div>

<!-- NEW ARRIVALS -->
<div class="new-arrivals">
  <div class="home-title d-flex">
      <h2 class="fw-bold fs-1 mt-3">NEW ARRIVALS</h2>
      <a href="/all-books" class="see-all fw-bold text-decoration-none">See All</a>
  </div>

  <div class="d-flex">
  <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card" style="width: 18rem;">
    <a href="/books/<?php echo e($data['id']); ?>" class="text-decoration-none text-black">
      <img src="<?php echo e($data['img']); ?>" class="card-img-top" alt="Picture">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($data['title']); ?></h5>
          <p class="card-text fs-5">Rp. <?php echo e($data['price']); ?></p>
        </div>
    </a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

<!-- BOOK OF THE MONTH -->
<div class="container-book-of-month">
  <div class="title text-center fw-bold mt-5 mb-5">
      <h1>BOOK OF THE MONTH</h1>
  </div>

  <div class="text-center">
    <img src="<?php echo e($data['img']); ?>" class="book-of-month-picture" alt="Picture">
    
    <div class="desc-book">
      <h3 class="book-title mt-3 mb-3 fw-bold fs-2"><?php echo e($data['title']); ?></h3>
      <h5 class="mb-3 fw-normal"><?php echo e($data['description']); ?></h5>
      <button type="button" class="btn btn-secondary"><a class="see-details-button text-white text-decoration-none" href="/books/<?php echo e($data['id']); ?>">See Details</a></button>
    </div>
  </div>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (2)\Bookpedia-main\resources\views/home.blade.php ENDPATH**/ ?>