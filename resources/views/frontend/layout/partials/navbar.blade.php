<div class="branding d-flex align-items-center">

    <div class="container position-relative d-flex align-items-center justify-content-end">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        @include('frontend.layout.partials.logo')
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">@lang('fe.home')</a></li>
          <li><a href="{{ route('articles') }}" class="@if(Route::current()->getName() == 'articles') active @endif">@lang('fe.article')</a></li>
          <li><a href="{{ route('trading-support') }}" class="@if(Route::current()->getName() == 'trading-support') active @endif">@lang('fe.trading_support')</a></li>
          <li><a href="{{ route('download') }}" class="@if(Route::current()->getName() == 'download') active @endif">@lang('fe.download')</a></li>
          <li><a href="{{ route('contact') }}" class="@if(Route::current()->getName() == 'contact') active @endif">@lang('fe.contact')</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn text-white" href="index.html#appointment"><i class="bi bi-person"></i> MEMBER AREA</a>

    </div>

  </div>