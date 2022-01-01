<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="card ml-auto mr-auto" style="width: 750px; overflow:auto">
        <div class="card-header">
        Login
      </div>

        <div class="card-body">

            @if (session()->has('loginError'))

            <div class="alert alert-danger d-flex align-items-center" role="alert">
            {{session('loginError')}}
            </div>

            @endif

            <form action="/login" method="POST" class="login-form">
                @csrf
                <label class="lbl" for="email">Email:</label><br>
                <input type="email" class="edit-input" id="email-check" name="email" required autofocus value={{Cookie::get('myCookie') !== null ? Cookie::get('myCookie') : ""}}><br>
                <label class="lbl" for="password">Password:</label><br>
                <input type="password" class="edit-input" id="password-check" name="password" required><br>
                <input class="checkbox" type="checkbox" id="remember" name="remember" checked={{Cookie::get('myCookie') !== null}}>
                <label class="checkbox-text" for="remember-check"> Remember me</label>
                <button class="btn btn-primary" type="submit">Login</a>
              </form>

        </div>
      </div>

</body>
</html>
