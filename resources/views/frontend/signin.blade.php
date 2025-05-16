<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.partials.head')
</head>
<body class="signin">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-start">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('fe/assets/img/logo.webp') }}" class="img-fluid">
            </a>
            <div class="d-flex align-items-center justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle bg-transparent border-0 dark-grey" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fi fi-{{ LaravelLocalization::getCurrentLocaleShort() }}"></i> {{ LaravelLocalization::getCurrentLocaleName() }}
                    </button>
                    <ul class="dropdown-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><i class="fi fi-{{ $properties['short'] }}"></i> {{ $properties['native'] }}</a></li>
                    @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
        <div class="my-2">&nbsp;</div>
        <div class="row mt-5 p-5">
            <div class="col-lg-6 p-5">
                <h1 class="text-white">Futures brokerage company with official business license from BAPPEBTI</h1>
                <svg width="19.505859" height="15.503052" viewBox="0 0 19.5059 15.5031" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>
                            Created with Pixso.
                    </desc>
                    <defs/>
                    <path id="Vector" d="M18.75 0.75L9.75 9.75L0.75 0.75M18.75 0.75L18.75 13.97C18.75 14.17 18.67 14.37 18.53 14.52C18.39 14.66 18.2 14.75 18 14.75L1.5 14.75C1.3 14.75 1.11 14.66 0.97 14.52C0.83 14.37 0.75 14.17 0.75 13.97L0.75 0.75L18.75 0.75ZM7.75 7.75L0.75 14.75M18.75 14.75L11.75 7.75" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
                </svg>
                <span class="text-white">info@moneymallfutures.com</span>                
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="card rounded-0 p-3">
                    <div class="card-body">
                        <h6>MEMBER SIGNIN</h6>
                        <form class="signin-form">
                        <div class="form-group">
                            <input type="email"  placeholder="Email Address">
                        </div>
                        <div class="form-group user-box mt-3">
                           <input type="password"  placeholder="Password" id="password">
                           <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="text-center"><a href="#">FORGOT PASSWORD</a></div>
                        <div class="text-center mt-3"><button class="">SIGN IN</button></div>
                        <div class="text-center mt-3">Doesn’t have an account? <a href="#">Sign up here!</a></div>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright mt-4">
            <div class="row">
                <div class="col-lg-6 text-start text-secondary">
                    © 2025 PT Gatra Mega Berjangka - Money Mall. All rights reserved
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ url('policy/privacy-policy') }}" class="mx-2 text-secondary">Sitemap</a> - 
                    <a href="{{ url('policy/privacy-policy') }}" class="mx-2 text-secondary">Term Of Service</a> - 
                    <a href="{{ url('policy/privacy-policy') }}" class="mx-2 text-secondary">Privacy Policy</a> - 
                    <a href="{{ url('policy/general-policy') }}" class="mx-2 text-secondary">General Policy</a> 
                </div>
            </div>
        </div>
    <script src="{{ asset('fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const passwordField = document.getElementById("password");
        const togglePassword = document.querySelector(".password-toggle-icon i");

        togglePassword.addEventListener("click", function () {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
        }
        });
</script>
</body>
</html>