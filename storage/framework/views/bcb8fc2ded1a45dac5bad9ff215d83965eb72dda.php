<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Bookpedia</title>
  </head>
  <body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img class="logo" src="https://drive.google.com/uc?export=view&id=1DR4SRIkYl6IboNzavnwqC4QK0cx6jQ2A" alt="Logo Bookpedia">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                  </svg>
            </span>
          </button>
          <div class="navbar-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

            <form class="d-flex">
              <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
              </span>
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#8F3F09" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                </a>
              </li>



        </ul>
          </div>
        </div>
      </nav>

      <div class="page-content">
        <?php echo $__env->yieldContent('page-content'); ?>
    </div>



      <div class="newsletter d-flex">
        <img class="newsletter-mascot" src="https://drive.google.com/uc?export=view&id=1atyTTajIi5TGFKGVNXD13WTYLFSfHmHl" alt="mascot">

        <div>
        <div class="loyal-newsletter">"There's no friend as loyal as a good book"</div>
        <button class="btn-newsletter mt-4" type="button">Subscribe to Our News Letter</button>
        </div>

      </div>




      <nav class="navbar navbar-expand-lg navbar-footer">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img class="logo-footer" src="https://drive.google.com/uc?export=view&id=1iV6phfhqqKfZmskDOWDhDnPpkhOBIMjx" alt="Logo Bookpedia">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">

            <li class="nav-item">
                <a class="nav-link footer" href="/about-us">
                    About Us
                </a>
              </li>

            <li class="nav-item">
                <a class="nav-link footer" href="#">
                    See All Books
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link footer" href="#">
                  Contact Us
                </a>
            </li>

        </ul>
          </div>
        </div>
      </nav>

      <style>
          html{
            width: 100%;
            height: 100%;
          }

          .loyal-newsletter
          {
            margin-top: 15%;
            font-weight: bold;
            color: #8F3F09;
            font-size: 48px;
            text-align: center;
          }

          .btn-newsletter
          {
            background-color: #8F3F09;
            margin-left: 7%;
            color: white;
            width: 85%;
            /* height: 7%; */
            font-size: 32px;
            font-weight: bold;
            text-align: center;
          }

          .footer
          {
            color: white;
            font-size: 20px;
            margin-right: 30px;
            margin-left: 10px;
          }

          .newsletter-mascot
          {
            width: 36%;
            height: 36%;
          }

          .footer:hover
          {
            color: #FCCC76;
          }

          .input-group-text
          {
            background-color: #8F3F09;
          }

          .dropdown-toggle
          {
            color: white;
            background-color:#F7941D;
            border-radius: 50px;
            margin-right: 20px;
          }

          .dropdown-toggle:hover
          {
            color: white;
          }

          .dropdown-toggle:visited
          {
            color: white;
          }

          .navbar-footer
          {
              background-color: #8F3F09;
          }

          .form-control
          {
            width: 900px;
          }

          .navbar-custom
          {
            background-color: #FCCC76;
          }

          .logo
          {
            width: 300px;
            height: 47px;
          }

          .logo-footer
          {
              width: 500px;
              height: 80px;
          }

          /* ABOUT US PAGE */
          .about{
            font-size: 64px;
            margin-top: 64px;
            color: #9F2F00;
          }

          .about p{
            font-size: 24px;
            color: #B1580E;
          }

          .social-media p{
            color: #9F2F00;
          }

          .bookpedia-social-media img{
            width: 5vh;
          }

          .bookpedia-social-media{
            font-size: 24px;
          }
      </style>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>
<?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bookpedia-LEC\resources\views/master.blade.php ENDPATH**/ ?>