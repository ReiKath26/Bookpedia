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

            <form action="/login" method="GET" class="login-form">
            <img src="https://drive.google.com/uc?export=view&id=1DR4SRIkYl6IboNzavnwqC4QK0cx6jQ2A" alt="">
            <h3>Register Account</h3>
                <?php echo csrf_field(); ?>
                <label class="lbl" for="fullname">Full Name:</label><br>
                <input type="text" class="edit-input" id="fullname-check" name="text" required> <br>

                <label class="lbl" for="email">Email Address:</label><br>
                <input type="email" class="edit-input" id="email-check" name="email" required><br>

                <label class="lbl" for="password">Password:</label><br>
                <input type="password" class="edit-input" id="password-check" name="password" required><br>

                <label class="lbl" for="address">Address:</label><br>
                <input type="text" class="edit-input" id="address-check" name="text" required> <br>

                <label class="lbl" for="address">Phone Number:</label><br>
                <input type="number" class="edit-input" id="number-check" name="number" required> <br>

                <div class="container">
                  <div class="center">
                  <button class="btn btn-primary" type="submit">Register</a>
                  </div>
                </div>

                <small>Have account? <a href="/login">Login Now!</a> </small>
                                
              </form>
    </div>
</body>
</html><?php /**PATH C:\Users\kenis\Documents\BINUS\Web Programming\Bookpediaaa\resources\views/register.blade.php ENDPATH**/ ?>