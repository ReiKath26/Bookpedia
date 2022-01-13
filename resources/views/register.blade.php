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
                @csrf
                @if ($errors->any())
                    {!! implode('', $errors->all('<div class="error-message"><b>:message</b></div>')) !!}
                @endif
                
                <label class="lbl" for="fullname">Full Name:</label><br>
                <input type="text" class="edit-input" id="fullname-check" name="fullname" required placeholder="Input your full name"> <br>

                <label class="lbl" for="email">Email Address:</label><br>
                <input type="email" class="edit-input" id="email-check" name="email" required placeholder="Input your valid email"><br>

                <label class="lbl" for="password">Password:</label><br>
                <input type="password" class="edit-input" id="password-check" name="password" required placeholder="Password at least 5 characters"><br>

                <label class="lbl" for="address">Address:</label><br>
                <input type="text" class="edit-input" id="address-check" name="address" required placeholder="Input your valid address"> <br>

                <label class="lbl" for="address">Phone Number:</label><br>
                <input type="text" class="edit-input" id="number-check" name="phoneNumber" required placeholder="Phone Number at least 10 numbers"> <br>

              <div class="container">
                <div class="center">
                <button class="register-button" type="submit">Register</button>
                </div>
              </div>
                                
              </form>

                <small>Have account? <a href="/login">Login Now!</a> </small>
    </div>
</body>
</html>