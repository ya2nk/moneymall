@extends('frontend.layout.main')

@section('content')
    
    <div class="trading-support-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-4">
                    <div class="d-sm-flex justify-content-start flex-column">
                        <h1 class="text-white anim-title text-start">@lang('support.closing_price')</h1>
                        <p class="text-white text-start">@lang('support.closing_price_content')</p>
                        <p class="text-start">
                            <a href="{{ url('trading-support/closing-price') }}" class="text-white">@lang('support.closing_price_link')
                                <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    
                                </desc>
                                <defs/>
                                <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                                </svg>
                            </a> 
                        </p>
                          
                       
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trading-support-header-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-4 offset-md-6">
                    <div class="d-sm-flex justify-content-start flex-column">
                        <h1 class="anim-title text-start">@lang('support.economic_calendar')</h1>
                        <p class="text-start">@lang('support.economic_calendar_content')</p>
                        <p class="text-start">
                            <a href="{{ url('trading-support/economic-calendar') }}" class="">@lang('support.economic_calendar_link')
                                <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    
                                </desc>
                                <defs/>
                                <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                                </svg>
                            </a> 
                        </p>
                          
                       
                      </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="trading-support-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-4">
                    <div class="d-sm-flex justify-content-start flex-column">
                        <h1 class="text-white anim-title text-start">@lang('support.pivot_table')</h1>
                        <p class="text-white text-start">@lang('support.pivot_table_content')</p>
                        <p class="text-start"><a href="{{ url('trading-support/pivot-table') }}" class="text-white">@lang('support.pivot_table_link')
                          <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <desc>
                              
                          </desc>
                          <defs/>
                          <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                        </svg>
                    </a> 
                        </p>
                          
                       
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trading-support-header-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-4 offset-md-6">
                    <div class="d-sm-flex justify-content-start flex-column">
                        <h1 class="anim-title text-start">@lang('fibonacci')</h1>
                        <p class="text-start">@lang('fibonacci_content')</p>
                        <p class="text-start">
                            <a href="{{ url('trading-support/fibonacci') }}" class="">@lang('fibonacci_link')
                                <svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    
                                </desc>
                                <defs/>
                                <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                                </svg>
                            </a> 
                        </p>
                          
                       
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection