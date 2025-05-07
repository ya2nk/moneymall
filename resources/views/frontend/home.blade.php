@extends('frontend.layout.main')

@section('content')
<ul class='anim-slider h-auto'>
    <!-- Slide No1 -->
    <li class='anim-slide'>
      <div class="container">
        <div class="p-3 d-flex flex-row justify-content-md-between">
          <div class="d-sm-flex justify-content-start flex-column">
            <h1 class="text-white anim-title text-start">Empower Your Financial Journey</h1>
            <p class="text-white text-start">Start trading with confidence on a platform built for growth, stability, and success.</p>
            <p class="text-start"><a href="#" class="text-white">Read More</a> 
              <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <desc>
                  
              </desc>
              <defs/>
              <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
            </svg>
            </p>
              
           
          </div>
          <div class="d-flex justify-content-end flex-sm-row">
            <div class="bg-image">
              <img src="{{ asset('fe/assets/img/image255.png') }}" class="img-fluid">
            </div>
            
          </div>
        </div>
       
        </div>
    </li>

    <nav class='anim-arrows'>
      <span class='anim-arrows-prev'>
        <i class='fa fa-angle-left fa-3x'></i>
      </span>
      <span class='anim-arrows-next'>
        <i class='fa fa-angle-right fa-3x'></i>
      </span>
    </nav>
  </ul>

  <section id="featured-services" class="featured-services section">
    <div class="container p-5">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('fe/assets/img/img-feature.png') }}" class="img-fluid" alt="moneymall feature title">
        </div>
        
        <div class="col-md-6">
          <p class="feature-text-heading">
            @lang('feature.title')
          </p>
          <p class="feature-text-heading-big">
            @lang('feature.subtitle')
          </p>
          <hr class="feature-hr">
          <p class="feature-text-content">
            @lang('feature.content')
          </p>
          <p><a href="#" class="feature-link">@lang('fe.learn_more')  <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <desc>
                
            </desc>
            <defs/>
            <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
          </svg></a>  
          </p>
        </div>
      </div>
      <div class="row mt-5"></div>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card bg-transparent border-0">
            <div class="card-body text-center">
            <img src="{{ asset('fe/assets/img/icon-1.png') }}" alt="moneymall feature icon 1">
              <p class="feature-item-head">@lang('feature.list_title_1')</p>
              <p class="feature-item-content">@lang('feature.list_content_1')</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-transparent border-0">
            <div class="card-body text-center">
            <img src="{{ asset('fe/assets/img/icon-2.png') }}" alt="moneymall feature icon 2">
              <p class="feature-item-head">@lang('feature.list_title_2')</p>
              <p class="feature-item-content">@lang('feature.list_content_2')</p>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-transparent border-0">
            <div class="card-body text-center">
            <img src="{{ asset('fe/assets/img/icon-3.png') }}" alt="moneymall feature icon 3">
              <p class="feature-item-head">@lang('feature.list_title_3')</p>
              <p class="feature-item-content">@lang('feature.list_content_3')</p>
              
            </div>
          </div>
        </div>
    </div>
    
    </div>
  </section>

  <section id="product" class="product section accent-background">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="product-head">@lang('product.title')</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="product-head-big">@lang('product.subtitle')</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card border-blue">
            <div class="card-body p-4">
              <table width="100%">
                <tr>
                  <td><span class="product-item-head">Black</span>
                    
                  </td>
                  <td rowspan="2" align="right">
                    <img src="{{ asset('fe/assets/img/pack-black.png') }}">
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="product-item-subhead">Strategy</span>
                  </td>
                </tr>
               
              </table>
              <hr>
              <div class="d-flex justify-content-between mb-3">
                <div class="product-item-content-left">
                  Lot Transaction
                </div>
                <div><span class="dark-grey fw-lighter">Minimum</span> <span class="product-item-content-left">0.1</span></div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <div class="product-item-content-left">
                  Forex Spread
                </div>
                <div><span class="dark-grey fw-lighter">Start From</span> <span class="product-item-content-left">25</span></div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <div class="product-item-content-left">
                  XAU Spread
                </div>
                <div><span class="dark-grey fw-lighter">Start From</span> <span class="product-item-content-left">40</span></div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <div class="product-item-content-left">
                  Commission/Lot
                </div>
                <div><span class="product-item-content-left">11</span></div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <div class="product-item-content-left">
                  Leverage
                </div>
                <div><span class="product-item-content-left">1:400</span></div>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <div class="product-item-content-left">
                  Autocut
                </div>
                <div><span class="product-item-content-left">20%</span></div>
              </div>
              <hr class="mb-3">
              <div class="text-start"><a href="#" class="product-item-link">START TRADING 
                <span class="mx-1"></span>
                <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <desc>
                      
                  </desc>
                  <defs/>
                  <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                </svg>
                
                </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="marketing" class="marketing section">
    <div class="container-fluid mx-xl-5 mt-5">
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head">Ahead of Competition</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head-big">Market Insights</p>
        </div>
      </div>
      <div class="mt-5">&nbsp;</div>
      <div class="row mt-5">
        <div class="col-md-3">
          <p class="marketing-list-text">MARKET TRENDS</p>
          <p class="marketing-list-text">CLOSING PRICE</p>
          <p class="marketing-list-text">ECONOMIC CALENDAR</p>
          <p class="marketing-list-text">TABLE PIVOT</p>
         
        </div>
        <div class="col-md-5">
          <p class="marketing-content-head">Unlock Market Movement with Fibonacci Tools</p>
          <p>Explore price movements and predict potential reversals using Fibonacci levels. Whether you're swing trading or scalping, these tools bring precision to your technical game.</p>
          <ul class="marketing-list">
            <li>Retracement & Extension Tools<br>Identify support and resistance levels using Fibonacci sequences.</li>
            <li>Chart Integration<br>Overlay Fibonacci levels directly on price charts for clarity.</li>
          </ul>
        </div>
        <div class="col-md-4">
          <div class="bg-image">
            <img src="{{ asset('fe/assets/img/img5.png') }}" class="img-fluid">
          </div>
        </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="product-head">Simple Steps</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="product-head-big">Money Mall Simplifies Trading: Here's How</p>
        </div>
      </div>
      <div class="row mt-5"></div>
        <div class="row mt-5">
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">Step 1</span> - <span class="step-text-2">Choose Your Strategy</span></p>
                <p class="text-center step-content-text">Define your financial goals and select a strategy that aligns with your investment aspirations. Explore expert-backed plans designed for long-term success.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration2.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">Step 2</span> - <span class="step-text-2">Consultation</span></p>
                <p class="text-center step-content-text">Get personalized guidance from our financial experts. Discuss your strategy, analyze market opportunities, and refine your approach with professional insights.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration3.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">Step 3</span> - <span class="step-text-2">Start Trading</span></p>
                <p class="text-center step-content-text">Execute your investment strategy with confidence. Leverage cutting-edge tools, real-time data, and secure transactions to optimize your trading experience.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration4.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">Step 4</span> - <span class="step-text-2">Financial Freedom</span></p>
                <p class="text-center step-content-text">Reap the rewards of smart investing. Achieve financial independence, expand your portfolio, and enjoy a lifestyle driven by informed decisions.</p>
              </div>
            </div>
          </div>
    </div>
  </section>

  <section id="news" class="news section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head">Trading News</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head-big">Latest Update</p>
        </div>
      </div>
      <div class="row mt-5"></div>
      <div class="row mt-5">
        <div class="col-md-3">
          
            <img src="{{ asset('fe/assets/img/news-image-1.png') }}" class="card-img-top" alt="...">
            
            <p class="news-home-date mt-4">30 March 2025</p>
            <p class="news-home-title">Rilis data USD - ISM Non-Manufacturing (Services) PMI dan Final Services PMI</p>
            <p class="news-home-content">1.USD ISM Non-Manufacturing PMI (actual : 53.5 , f'cast : 52.5, previous : 52.8)</p>
            <p><a href="#"><svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <desc>
                  
              </desc>
              <defs/>
              <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
            </svg>
            </a></p>
        </div>
        <div class="col-md-3">
          
          <img src="{{ asset('fe/assets/img/news-image-1.png') }}" class="card-img-top" alt="...">
          
          <p class="news-home-date mt-4">30 March 2025</p>
          <p class="news-home-title">Rilis data USD - ISM Non-Manufacturing (Services) PMI dan Final Services PMI</p>
          <p class="news-home-content">1.USD ISM Non-Manufacturing PMI (actual : 53.5 , f'cast : 52.5, previous : 52.8)</p>
          <p><a href="#"><svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <desc>
               
            </desc>
            <defs/>
            <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
          </svg>
          </a></p>
      </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact section">
    @include('frontend.partials.contact')
  </section>
@endsection

@push('scripts')
<script>
  $(".anim-slider").animateSlider(
    {
        autoplay	:true,
        interval	:5000,
        animations 	: 
    {
        0	: 	//Slide No1
        {
            ".anim-title"	: 
            {
                show   	  : "bounceIn",
                hide 	  : "flipOutX",
                delayShow : "delay1s"
                },
            
                
        },
        
        
    }
});
</script>
@endpush