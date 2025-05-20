@extends('frontend.layout.main')

@section('content')
<!--
<ul class='anim-slider h-auto'>
    
    <li class='anim-slide'>
      <div class="container">
       <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
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
        <i class='fa fa-chevron-left fa-2x'></i>
      </span>
      <span class='anim-arrows-next'>
        <i class='fa fa-chevron-right fa-2x'></i>
      </span>
    </nav>
  </ul>
-->
<style>
  .carousel-indicators {
    top: 50px;
    justify-content: left !important;
    margin-left: 10%;
    height: 10px;
}
</style>
<div id="carouselExampleIndicators" class="carousel slide anim-slider">
  <div class="carousel-indicators container">
   
   
  </div>
  <div class="carousel-inner container">
    
       <div class="carousel-item active">
        <div class="p-3 d-flex flex-row justify-content-md-between">
          <div class="d-sm-flex justify-content-start flex-column">
            <h1 class="text-white anim-title text-start">Empower Your Financial Journey</h1>
            <span class="anim-title-sub text-start">Start trading with confidence on a platform built for growth, stability, and success.</span>
            
            <p class="text-start anim-link"><a href="#" class="text-white">START TRADING NOW <i class="bi bi-arrow-right"></i></a></p>
              
           
          </div>
          <div class="d-flex justify-content-end flex-sm-row d-none d-sm-block">
            <div class="bg-image">
              <img src="{{ asset('fe/assets/img/image255.png') }}" class="img-fluid">
            </div>
            
          </div>
        </div>
      </div>
       
    
  </div>
  <button class="carousel-control-prev d-none d-sm-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next d-none d-sm-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

      

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
          <div class="card border-blue rounded-0">
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

	  <div class="col-md-3">
          <div class="card border-blue rounded-0">
            <div class="card-body p-4">
                <table width="100%">
                  <tr>
                    <td><span class="product-item-head">Gold</span>
                      
                    </td>
                    <td rowspan="2" align="right">
                      <img src="{{ asset('fe/assets/img/pack-gold.webp') }}">
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
                  <div><span class="dark-grey fw-lighter">Start From</span> <span class="product-item-content-left">45</span></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <div class="product-item-content-left">
                    Commission/Lot
                  </div>
                  <div><span class="product-item-content-left">1</span></div>
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

	  <div class="col-md-3">
          <div class="card border-blue rounded-0">
            <div class="card-body p-4">
                <table width="100%">
                  <tr>
                    <td><span class="product-item-head">platinum</span>
                      
                    </td>
                    <td rowspan="2" align="right">
                      <img src="{{ asset('fe/assets/img/pack-platinum.webp') }}">
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
                  <div><span class="dark-grey fw-lighter">Start From</span> <span class="product-item-content-left">9</span></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <div class="product-item-content-left">
                    XAU Spread
                  </div>
                  <div><span class="dark-grey fw-lighter">Start From</span> <span class="product-item-content-left">18</span></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <div class="product-item-content-left">
                    Commission/Lot
                  </div>
                  <div><span class="product-item-content-left">1</span></div>
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

	  <div class="col-md-3">
          <div class="card border-blue rounded-0">
            <div class="card-body p-4">
                <table width="100%">
                  <tr>
                    <td><span class="product-item-head">diamond</span>
                      
                    </td>
                    <td rowspan="2" align="right">
                      <img src="{{ asset('fe/assets/img/pack-diamond.webp') }}">
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
                  <div><span class="dark-grey fw-lighter">Start From</span> <span class="product-item-content-left">30</span></div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <div class="product-item-content-left">
                    Commission/Lot
                  </div>
                  <div><span class="product-item-content-left">5</span></div>
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
          <p class="text-start product-head">@lang('fe.ahead_competition')</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head-big">@lang('fe.market_insights')</p>
        </div>
      </div>
      <div class="mt-5">&nbsp;</div>
      <div class="row mt-5">
        <div class="col-md-3">
          <p class="marketing-list-text">@lang('fe.market_trends')</p>
          <p class="marketing-list-text">@lang('fe.closing_price')</p>
          <p class="marketing-list-text">@lang('fe.economic_calendar')</p>
          <p class="marketing-list-text">@lang('fe.table_pivot')</p>
         
        </div>
        <div class="col-md-5">
          <p class="marketing-content-head">@lang('fe.fibonacci_tool')</p>
          <p>@lang('fe.fibonacci_tool_desc')</p>
          <ul class="marketing-list">
            <li>@lang('fe.retracement')<br>@lang('fe.retracement_2')</li>
            <li>@lang('fe.chart')<br>@lang('fe.chart_2')</li>
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
          <p class="product-head">@lang('fe.simple_steps')</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="product-head-big">@lang('fe.steps_desc')</p>
        </div>
      </div>
      <div class="row mt-5"></div>
        <div class="row mt-5">
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">@lang('fe.step') 1</span> - <span class="step-text-2">@lang('fe.choose_your_strategy')</span></p>
                <p class="text-center step-content-text">@lang('fe.choose_your_strategy_desc')</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration2.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">@lang('fe.step') 2</span> - <span class="step-text-2">@lang('fe.consultation')</span></p>
                <p class="text-center step-content-text">@lang('fe.consultation_desc')</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration3.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">@lang('fe.step') 3</span> - <span class="step-text-2">@lang('fe.start_trading')</span></p>
                <p class="text-center step-content-text">@lang('fe.start_trading_desc')</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-transparent border-0">
              <div class="card-body text-center">
                <img src="{{ asset('fe/assets/img/illustration4.png') }}" class="img-fluid">
                <p class="mt-4 text-center"><span class="step-text">@lang('fe.step') 4</span> - <span class="step-text-2">@lang('fe.financial_freedom')</span></p>
                <p class="text-center step-content-text">@lang('fe.financial_freedom_desc')</p>
              </div>
            </div>
          </div>
    </div>
  </section>

  <section id="news" class="news section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head">@lang('fe.trading_news')</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-start product-head-big">@lang('fe.latest_update')</p>
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
  
</script>
@endpush