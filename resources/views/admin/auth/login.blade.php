<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/auth.css') }}" />
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    {{-- <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" /></a>
                    </div> --}}
                    @if (Session::has('errors'))
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">
                        Masuk dengan menggunakan akun anda.
                    </p>

                    <form action="{{ route('post.login') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username"
                                name="username" />
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password"
                                name="password" />
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" value="Log in" />

                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>
