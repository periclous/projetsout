{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sign In | ki-admin</title>

    <!-- CSS -->
    <link href="{{ asset('dash/assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/vendor/tabler-icons/tabler-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/vendor/phosphor/phosphor-bold.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/css/responsive.css') }}" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('dash/assets/images/logo/favicon.png') }}">
</head>

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <div class="container main-container">
        <div class="row main-content-box">
            <!-- Left side image -->
            <div class="col-lg-7 image-content-box d-none d-lg-block">
                <div class="form-container">
                    <div class="signup-content mt-4">
                        <img alt="" class="img-fluid" src="{{ asset('dash/assets/images/logo/1.png') }}">
                    </div>
                    <div class="signup-bg-img">
                        <img alt="" class="img-fluid" src="{{ asset('dash/assets/images/login/01.png') }}">
                    </div>
                </div>
            </div>

            <!-- Right side form -->
            <div class="col-lg-5 form-content-box">
                <div class="form-container">
                    <form class="app-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5 text-center text-lg-start">
                                    <h2 class="text-white f-w-600">Welcome To <span class="text-dark">ki-admin!</span></h2>
                                    <p class="f-s-16 mt-2">Sign in with your data that you entered during registration</p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('email') is-invalid @enderror"
                                           id="UserName"
                                           name="email"
                                           type="email"
                                           value="{{ old('email') }}"
                                           required
                                           autofocus
                                           placeholder="Email">
                                    <label for="UserName">Email</label>
                                </div>
                            </div>

                            {{-- Password --}}
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror"
                                           id="floatingPassword"
                                           name="password"
                                           type="password"
                                           required
                                           placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="text-end">
                                    <a class="text-dark f-w-500 text-decoration-underline" href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>

                            {{-- Remember --}}
                            <div class="col-12">
                                <div class="form-check d-flex align-items-center gap-2 mb-3">
                                    <input class="form-check-input" id="remember" type="checkbox" name="remember">
                                    <label class="form-check-label text-dark" for="remember">Remember me</label>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Sign In</button>
                            </div>

                            {{-- Register redirect --}}
                            <div class="col-12 mt-4">
                                <div class="text-center text-lg-start f-w-500">
                                    Don't have an account?
                                    <a class="text-white-800 text-decoration-underline" href="{{ route('register') }}">Sign up</a>
                                </div>
                            </div>

                            {{-- Divider --}}
                            <!-- <div class="app-divider-v light justify-content-center py-lg-5 py-3">
                                <p>OR</p>
                            </div> -->

                            {{-- Social buttons --}}
<!--                             
                            <div class="col-12">
                                <div class="d-flex gap-3 justify-content-center text-center">
                                    <button class="btn btn-light-white icon-btn w-45 h-45 b-r-15" type="button">
                                        <i class="ph-bold ph-facebook-logo f-s-20"></i>
                                    </button>
                                    <button class="btn btn-light-white icon-btn w-45 h-45 b-r-15" type="button">
                                        <i class="ph-bold ph-google-logo f-s-20"></i>
                                    </button>
                                    <button class="btn btn-light-white icon-btn w-45 h-45 b-r-15" type="button">
                                        <i class="ph-bold ph-twitter-logo f-s-20"></i>
                                    </button>
                                </div>
                            </div> -->

                            {{-- Errors --}}
                            @if ($errors->any())
                                <div class="col-12 mt-3">
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('dash/assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('dash/assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
