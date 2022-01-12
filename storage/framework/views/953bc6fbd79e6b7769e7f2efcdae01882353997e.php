

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
<!-- TITLE -->
<div class="d-flex" id="title-allbooks">
  <h2 class="fw-bold">Filter</h2>
  <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="book-order-menu">
    Newest
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Newest</a>
    <a class="dropdown-item" href="#">Name</a>
    <a class="dropdown-item" href="#">Top Selling</a>
  </div>
</div>

<!-- Page content: side menu and book display -->

  <div class="row">
    <div class="col-3 " id="left-sidemenu">
      <div class="row">
        <h4>Category</h4>
        
        <div class="row" id="category-sidemenu">
          <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#booksMenu" aria-expanded="false" aria-controls="collapseExample" id="selection">
            Books
          </button>
          <div class="collapse" id="booksMenu">
            <a class="dropdown-item" href="#">Book Category</a>
          </div>

          <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#comicMenu" aria-expanded="false" aria-controls="collapseExample" id="selection">
            Comics
          </button>
          <div class="collapse" id="comicMenu">
            <a class="dropdown-item" href="#">Comic Category</a>
          </div>

          <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#ebookMenu" aria-expanded="false" aria-controls="collapseExample" id="selection">
            E-book
          </button>
          <div class="collapse" id="ebookMenu">
            <a class="dropdown-item" href="#">E-book Category</a>
          </div>

          <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#referenceMenu" aria-expanded="false" aria-controls="collapseExample" id="selection">
            Refence Book
          </button>
          <div class="collapse" id="referenceMenu">
            <a class="dropdown-item" href="#">Reference Book Category</a>
          </div>

        </div>
      </div>
      
      <div class="row">
        <h4>Price</h4>
        <form>
          <div class="form-group row" id="form-set-price">
            <label for="inputMinimalNumber">Min</label>
            <input type="number" class="form-control" id="minAmount" placeholder="Enter min. amount">
            <label for="inputMaxNumber">Max</label>
            <input type="number" class="form-control" id="maxAmount" placeholder="Enter max. amount">
          </div>
        </form>
        
      </div>

      <div class="row">
        <h4>Stock</h4>
        <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#avaibilityMenu" aria-expanded="false" aria-controls="collapseExample" id="selection">
          Avaible Only
        </button>
        <div class="collapse" id="avaibilityMenu">
          <a class="dropdown-item" href="#">Avaible</a>
          <a class="dropdown-item" href="#">Not Avaible</a>
        </div>
      </div>
    </div>

    <div class="col-8" id="all-books-data">
      <div class="row no-gutters">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
          <a href="/books/<?php echo e($data['id']); ?>" class="card m-3" id="cat-card" style="width: 12vw; height: 45vh">
            <div class="card-body">
              <img class = image-cat src=<?php echo e($data['img']); ?>>
              <h5 class="category-text "><?php echo e($data['title']); ?></h5>
              <h6 class="category-subtext">Rp. <?php echo e($data['price']); ?></h6>
            </div>
          </a>
        </div>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>
<style>
  #title-allbooks{
    margin: 5vh;
    margin-bottom: 0;
    justify-content: space-between;
    align-items: center;
  }
  #title-allbooks h2{
    color: #8F3F09;
  }
  #book-order-menu{
    color: #8F3F09;
    border-radius: 0;
    border-color: #FCCC76;
    background-color: white;
  }
  /* .no-gutters {
    margin-right: 0;
    margin-left: 0;

    > .col,
    > [class*="col-"] {
      padding-right: 0;
      padding-left: 1vh;
    }
  } */

  #left-sidemenu{
    margin: 0vh;
    margin-left: 5vh;
    margin-bottom: 2vh;
    justify-content: space-between;
    align-items: center;
  }
  .row h4{
    color: #8F3F09;
    margin-top: 2vh;
  }
  
  .form-control{
    width: 15vw;
  }
  #form-set-price label{
    margin-bottom: 1vh;
    margin-top: 1vh;
    font-size: 20px;
    color:#E9B98A;
  }
  #form-set-price input{
    border-color:#E9B98A;
  }

  #selection{
    background-color: white;
    color: #D47415;
    outline-color: #9F2F00;
  }

</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bookpediaaa\resources\views/allBooks.blade.php ENDPATH**/ ?>