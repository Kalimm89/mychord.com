<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('public/assets/admin/css/admin.css') }}" rel="stylesheet" />
</head>

<body class="signup-page">
    <div class="signup-box">

        <div class="card">
            <div class="body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form id="sign_up" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="msg">
                        <h1>Авторизация</h1>
                    </div>
                  
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6"
                                placeholder="Password" required>
                        </div>
                    </div>



                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Войти</button>

                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/assets/admin/js/admin.js') }}"></script>
</body>

</html>
