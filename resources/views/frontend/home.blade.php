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
@endsection