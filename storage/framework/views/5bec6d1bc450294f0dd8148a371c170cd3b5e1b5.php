<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cssfolder/loginpage.css">
    <title>Document</title>
</head>
<body>

    <div class="card ml-auto mr-auto" style="width: 750px; overflow:auto">
        <div class="card-header">
      </div>

        <div class="card-body">

            <form action="/login" method="POST" class="login-form">
            <img src="https://drive.google.com/uc?export=view&id=1DR4SRIkYl6IboNzavnwqC4QK0cx6jQ2A" alt="">
            <h3>Login to your account</h3>
                <?php echo csrf_field(); ?>
                <label class="lbl" for="email">Email:</label><br>
                <input type="email" class="edit-input" id="email-check" name="email" required autofocus value=<?php echo e(Cookie::get('myCookie') !== null ? Cookie::get('myCookie') : ""); ?>><br>

                <label class="lbl" for="password">Password:</label><br>
                <input type="password" class="edit-input" id="password-check" name="password" required><br>

                

                <div class="container">
                  <div class="center">
                  <button class="btn btn-primary" type="submit">Login</a>
                  </div>
                </div>

                <small>Don’t have account? <a href="/register">Register Now!</a> </small>
                                
              </form>

            <?php if(session()->has('success')): ?>
            <div class="alert alert-success d-flex align-items-center" role="alert">
            <?php echo e(session('loginError')); ?>

            </div>
            <?php endif; ?>

            <?php if(session()->has('loginError')): ?>

            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <?php echo e(session('loginError')); ?>

            </div>

            <?php endif; ?>
              

        </div>
      </div>

</body>
</html>
<?php /**PATH C:\Users\Kevin's\Downloads\bp\resources\views/login.blade.php ENDPATH**/ ?>