@extends('frontend.layout.main')

@section('content')
    <section class="articles">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('fe/assets/img/news-img-1.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column">
                        <div class="articles-hot-news text-center">
                            <img src="{{ asset('fe/assets/img/hot-news.png') }}" class="me-2">
                            <span class="articles-hot-text">Hot Update</span>
                        </div>
                        <div class="news-home-date mt-3">18 April 2025</div>
                        <div class="articles-hot-title">China retaliates again in Trump's trade war, prompting flight from US assets</div>
                        <div class="articles-hot-content">China is not backing down. On Friday, Beijing announced plans to raise retaliatory tariffs on the United States from 84 percent to 125 percent, to go into effect on Saturday.</div>
                        <div>
                            <a href="{{ route('article.detail',['slug' => 'nama-slug']) }}">view news 
                                <svg width="64.000000" height="24.000000" viewBox="0 0 64 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                    
                                    </desc>
                                    <defs/>
                                    <path id="Vector" d="M51.5 5L58.5 12L51.5 19M58.5 12L4 12" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                                </svg>
                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="{{ asset('fe/assets/img/news-image-1.png') }}" class="card-img-top img-fluid" alt="...">
          
                    <p class="articles-date mt-4">30 March 2025</p>
                    <p class="articles-title">Rilis data USD - ISM Non-Manufacturing (Services) PMI dan Final Services PMI</p>
                    <p class="articles-content">1.USD ISM Non-Manufacturing PMI (actual : 53.5 , f'cast : 52.5, previous : 52.8)</p>
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
@endsection