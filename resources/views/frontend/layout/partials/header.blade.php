<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
          <div class="d-flex justify-content-start">
            <div class="d-none d-md-flex align-items-center">
              <i class="bi bi-telephone me-1 icon-1"></i> <span class="text-1">+1 5589 55488 55</span>
            </div>
            <div class="d-none d-md-flex align-items-center mx-3">
              <i class="bi bi-envelope me-1 icon-1"></i> <span class="text-1">info@moneymall.com</span>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <div class="d-flex align-items-center">
              <span class="text-1">@lang('fe.follow_us')</span>
            </div>
            <div class="d-flex align-items-center mx-2">
              @include('frontend.layout.partials.social')
              
               
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
          </div>
    </div>
    @include('frontend.layout.partials.navbar')
</header>