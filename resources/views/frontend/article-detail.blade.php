@extends('frontend.layout.main')
<style>
    .testimonial-group > .row {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        }
.testimonial-group > .row > .col-lg-4 {
  flex: 0 0 auto;
}
</style>
@section('content')
    <section class="articles">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('articles') }}">Articles</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ @$row->title }}</li>
                
                </ol>
            </nav>
        </div>
        <img src="{{ asset('fe/assets/img/img-news.webp')}}" class="img-fluid">
        <div class="container">
            <div class="article-hot text-center">
                    <img src="{{ asset('fe/assets/img/hot-news.png') }}" class="me-2">
                    <span class="articles-hot-text">Hot Update</span>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-6">
                    
                    <div class="news-home-date mt-3">18 April 2025 By Raga Gyandikara</div>
                    
                    <div class="articles-hot-title mt-3">China retaliates again in Trump's trade war, prompting flight from US assets</div>
                    <div class="box-about p-5 mt-3">
                        <p class="color-blue">
                            <svg width="17.503418" height="17.503357" viewBox="0 0 17.5034 17.5034" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                        Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M15.98 5.84C16.45 6.31 16.68 6.54 16.73 6.79C16.78 7.01 16.73 7.23 16.61 7.42C16.47 7.63 16.17 7.76 15.55 8.02L13.46 8.92C13.37 8.96 13.33 8.98 13.28 9C13.25 9.02 13.21 9.05 13.18 9.07C13.14 9.1 13.11 9.14 13.04 9.21L11.73 10.52C11.62 10.62 11.57 10.68 11.52 10.74C11.49 10.79 11.46 10.85 11.43 10.91C11.4 10.98 11.39 11.06 11.36 11.2L10.74 14.28C10.58 15.08 10.5 15.48 10.29 15.67C10.11 15.83 9.86 15.91 9.62 15.87C9.34 15.83 9.05 15.55 8.48 14.97L2.52 9.02C1.95 8.44 1.66 8.15 1.62 7.87C1.59 7.63 1.66 7.38 1.82 7.2C2.01 6.99 2.41 6.91 3.21 6.75L6.29 6.13C6.44 6.1 6.51 6.09 6.58 6.06C6.64 6.04 6.7 6.01 6.75 5.97C6.82 5.93 6.87 5.87 6.98 5.77L8.29 4.45C8.36 4.39 8.39 4.35 8.42 4.31C8.45 4.28 8.47 4.25 8.49 4.21C8.51 4.17 8.53 4.12 8.57 4.03L9.47 1.94C9.73 1.33 9.86 1.02 10.07 0.88C10.26 0.76 10.49 0.72 10.7 0.76C10.95 0.81 11.19 1.05 11.66 1.52L15.98 5.84ZM5.5 11.99L0.75 16.75" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>&nbsp;
                            SUMMARY
                        </p>
                        <ul>
                            <li>China to increase tariffs on US goods to 125%, up from 84%</li>
                            <li>U.S. stocks end higher after volatile trading</li>
                            <li>Dollar pummeled again as trade war roils markets</li>
                            <li>Investors grapple with tariff-driven economic threat</li>
                            <li>Vietnam eyes crackdown on some China trade</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 pt-4">
                    <p class="mb-2">China is not backing down. On Friday, Beijing announced plans to raise retaliatory tariffs on the United States from 84 percent to 125 percent, to go into effect on Saturday.</p>
                    <p class="mb-2">This marks the third massive countermeasure between the two superpowers in recent weeks, and it comes after U.S. President Donald Trump put a 90-day pause on new so-called reciprocal tariffs for all U.S. trading partners except China. (Other countries still face a universal 10 percent levy from the United States of America.)</p>
                    <p class="mb-2">The United States’ trade actions “will become a joke in the history of the world economy,” China’s Finance Ministry said in a statement on Friday. “However, if the U.S. insists on continuing to substantially infringe on China’s interests, China will resolutely counter and fight to the end.” China’s Commerce Ministry said it plans to file another lawsuit with the World Trade Organization against the Trump administration’s actions.</p>
                    <p class="mb-2">U.S. tariffs on China now total a minimum rate of 145 percent, including the increased 125 percent duty that Trump announced on Wednesday on top of the 20 percent levy that he issued near the start of his second term.</p>
                    <img src="{{ asset('fe/assets/img/img-news-detail.webp') }}" class="img-fluid">
                    <p class="my-2">China’s tariffs on the United States, meanwhile, will affect key U.S. exports, such as soybeans, pharmaceuticals, and aircraft. Last week, China also suspended imports from some U.S. companies that sell sorghum, poultry, and bonemeal, and it placed more export controls on Chinese rare earths.</p>
                    <p class="mb-2">“There are no winners in a tariff war, and going against the world will only result in self-isolation,” Chinese President Xi Jinping said on Friday in his first public comments since the tit-for-tat escalation began.</p>
                    <p>Read more in today’s World Brief: China Retaliates With a 125 Percent Tariff on U.S. Goods</p>
                </div>
            </div>
            <h4 class="mt-5">OTHER UPDATES</h4>
            <div class="testimonial-group">
            <div class="row">
                @foreach(range(1,5) as $number)
                <div class="col-lg-4">
                     <img src="{{ asset('fe/assets/img/news-image-1.png') }}" class="card-img-top" alt="...">
                        
                        <p class="news-home-date mt-4">30 March 2025</p>
                        <p class="news-article-title">Rilis data USD - ISM Non-Manufacturing (Services) PMI dan Final Services PMI</p>
                        <p class="news-article-content">1.USD ISM Non-Manufacturing PMI (actual : 53.5 , f'cast : 52.5, previous : 52.8)</p>
                        <p><a href="#"><svg width="55.560547" height="15.060547" viewBox="0 0 55.5605 15.0605" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                            
                            </desc>
                            <defs/>
                            <path id="Vector" d="M47.5 0.53L54.5 7.53L47.5 14.53M54.5 7.53L0 7.53" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000"/>
                        </svg>
                        </a></p>
                </div>
                @endforeach
            <div>
            </div>
        </div>

        
    </section>
@endsection