<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Authentication</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>
<body>
    <h2>Login Form</h2>
    <div class="container">
        <div class="forms">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">

            <div class="block">
                <input class="form-checks" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-labels" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="form-google row-mb-3">
                <div class="col-md-7 offset-md-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png" alt="">
                    <a href="{{route('login')}}" class="btn">
                    Login with Google</a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
