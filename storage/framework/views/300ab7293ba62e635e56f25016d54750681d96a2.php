<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssfolder/registerpage.css">
    <title>Register</title>
</head>
<body>
    <div class="card ml-auto mr-auto" style="width: 750px; overflow:auto">
        <div class="card-header">
      </div>

        <div class="card-body">

            <form method="POST" class="login-form" action='/register/regist'>
            <img src="https://drive.google.com/uc?export=view&id=1DR4SRIkYl6IboNzavnwqC4QK0cx6jQ2A" alt="">
            <h3>Register Account</h3>
                <?php echo csrf_field(); ?>
                <?php if($errors->any()): ?>
                    <?php echo implode('', $errors->all('<div class="container bg-danger"><b>:message</b></div>')); ?>

                <?php endif; ?>
                
                <label class="lbl" for="fullname">Full Name:</label><br>
                <input type="text" class="edit-input" id="fullname-check" name="fullname" required> <br>

                <label class="lbl" for="email">Email Address:</label><br>
                <input type="email" class="edit-input" id="email-check" name="email" required><br>

                <label class="lbl" for="password">Password:</label><br>
                <input type="password" class="edit-input" id="password-check" name="password" required><br>

                <label class="lbl" for="address">Address:</label><br>
                <input type="text" class="edit-input" id="address-check" name="address" required> <br>

                <label class="lbl" for="address">Phone Number:</label><br>
                <input type="text" class="edit-input" id="number-check" name="phoneNumber" required> <br>

                <div class="container">
                  <div class="center">
                  <button class="btn btn-primary" type="submit" class="register-button">Register</button>
                  </div>
                </div>

                <small>Have account? <a href="/login">Login Now!</a> </small>
                                
              </form>
    </div>
</body>
</html><?php /**PATH C:\Users\kathy\Downloads\Bookpedia-main (1)\Bookpedia-main\resources\views/register.blade.php ENDPATH**/ ?>