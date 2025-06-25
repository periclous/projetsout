<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | ki-admin - Laravel</title>

    <link href="{{ asset('dash/assets/images/logo/favicon.png') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('dash/assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/vendor/tabler-icons/tabler-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/vendor/phosphor/phosphor-bold.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <div class="main-container">
        <div class="container main-container">
            <div class="row main-content-box">
                <div class="col-lg-7 image-contentbox d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                            <span>
                                <img src="{{ asset('dash/assets/images/logo/1.png') }}" alt="" class="img-fluid">
                            </span>
                        </div>
                        <div class="signup-bg-img">
                            <img src="{{ asset('dash/assets/images/login/02.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 form-content-box">
                    <div class="form-container">
                        <form method="POST" action="{{ route('register') }}" class="app-form">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5 text-center text-lg-start">
                                        <h2 class="text-white f-w-600">Create <span class="text-dark">Account</span></h2>
                                        <p>Get Started For Free Today!</p>
                                    </div>
                                </div>

                                <!-- Username -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               id="UserName" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">
                                        <label for="UserName">Username</label>
                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               id="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                                        <label for="email">Email</label>
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                               id="password" name="password" required placeholder="Password">
                                        <label for="password">Password</label>
                                        @error('password')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control"
                                               id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
                                        <label for="password_confirmation">Confirm Password</label>
                                    </div>
                                </div>

                                <!-- Terms -->
<!--                                  
                                <div class="col-12">
                                    <div class="form-check d-flex align-items-center gap-2 mb-3">
                                        <input type="checkbox" class="form-check-input w-25 h-25" id="checkDefault" required>
                                        <label for="checkDefault" class="form-check-label text-white mt-2 f-s-16 text-dark">
                                            Accept Terms & Conditions
                                        </label>
                                    </div>
                                </div> -->

                                <!-- Sign Up Button -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                                    </div>
                                </div>

                                <!-- Sign in link -->
                                <div class="col-12 text-center text-lg-start f-w-500">
                                    Already Have An Account?
                                    <a href="{{ route('login') }}" class="text-white-800 text-decoration-underline">Sign in</a>
                                </div>

                                <!-- Divider -->
                                <!-- <div class="app-divider-v light justify-content-center py-lg-5 py-3">
                                    <p>OR</p>
                                </div> -->

                                <!-- Social logins -->
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

                            </div> <!-- end row -->
                        </form>
                    </div>
                </div> <!-- end col-lg-5 -->
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('dash/assets/js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('dash/assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
