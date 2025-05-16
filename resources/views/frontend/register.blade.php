<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.partials.head')
</head>
<body class="register">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-start mt-3">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                @include('frontend.layout.partials.logo')
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
        
        <div class="row mt-2 p-5">
             <div class="col-lg-6 offset-lg-3">
                <div class="card rounded-0 p-3">
                    <div class="card-body">
                        <h5>MEMBER REGISTRATION</h5>
                        <form class="signin-form mt-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Fullname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email"  placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text"  placeholder="Pnone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select>
                                            <option>Country</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <input type="checkbox"> I agree with the <a href="#">Terms and Conditions</a> applied
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="g-recaptcha" 
                                    data-sitekey="6Len8TwrAAAAALY_tAoTBmki3EedWzzL8bUstU-Q">
                                </div>
                            </div>
                            <div class="text-center mt-3"><button class="">REGISTER</button></div>
                            <div class="text-center mt-3">Already a member? <a href="#">SIGN IN HERE!</a></div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright mt-4">
            <div class="row">
                <div class="col-lg-6 text-start dark-grey">
                    © 2025 PT Gatra Mega Berjangka - Money Mall. All rights reserved
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ url('policy/privacy-policy') }}" class="mx-2 dark-grey">Sitemap</a> - 
                    <a href="{{ url('policy/privacy-policy') }}" class="mx-2 dark-grey">Term Of Service</a> - 
                    <a href="{{ url('policy/privacy-policy') }}" class="mx-2 dark-grey">Privacy Policy</a> - 
                    <a href="{{ url('policy/general-policy') }}" class="mx-2 dark-grey">General Policy</a> 
                </div>
            </div>
        </div>
    </div>
    <script src=
        "https://www.google.com/recaptcha/api.js" async defer>
    </script>
</body>
</html>