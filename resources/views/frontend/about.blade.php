@extends('frontend.layout.main')

@section('content')
    <div class="color-blue-light pt-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About - Company Profile</li>
            
            </nav>
        </div>
        <div class="">
            <img src="{{ asset('fe/assets/img/about.webp') }}" class="img-fluid">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Company Profile:
                        Money Mall - PT. Gatra Mega Berjangka</h1>
                    <div class="box-about p-5">
                        <p class="color-blue">
                            <svg width="19.500000" height="19.500000" viewBox="0 0 19.5 19.5" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                        Created with Pixso.
                                </desc>
                                <defs/>
                                <g style="mix-blend-mode:normal">
                                    <path id="Vector" d="" fill="#D8D8D8" fill-opacity="0" fill-rule="nonzero"/>
                                    <path id="Vector" d="M18.75 9.75L16.75 9.75C15.64 9.75 14.75 10.64 14.75 11.75L14.75 13.75C14.75 14.85 15.64 15.75 16.75 15.75C17.85 15.75 18.75 14.85 18.75 13.75L18.75 9.75C18.75 4.77 14.72 0.75 9.75 0.75C4.77 0.75 0.75 4.77 0.75 9.75L0.75 13.75C0.75 14.85 1.64 15.75 2.75 15.75C3.85 15.75 4.75 14.85 4.75 13.75L4.75 11.75C4.75 10.64 3.85 9.75 2.75 9.75L0.75 9.75M18.75 11.75L18.75 15.75C18.75 15.75 18.75 18.75 16.75 18.75C14.75 18.75 11.75 18.75 11.75 18.75" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="1.500000" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            CONTACT US
                        </p>
                        <ul>
                            <li>+6231 58282962</li>
                            <li>info@moneymallfutures.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>
                        PT. Gatra Mega Berjangka (Money Mall) is a futures brokerage company that focuses its business on foreign currency investment and foreign stock indexes. This futures brokerage company was founded in 1999 and is headquartered in a strategic business area in Surabaya, precisely at Jl. Untung Suropati No.63, DR. Soetomo, Kec. Tegalsari, Surabaya, East Java 60264.
                    </p>
                    <h3>Trustworthy Broker</h3>
                    <p>Since its operation, PT. Gatra Mega Berjangka (Money Mall) has proven itself as a competent, responsive, professional and reliable futures brokerage company for its customers. In a short time, PT. Gatra Mega Berjangka (Money Mall) has become a rapidly growing broker and already has branch offices spread across various cities such as Solo, Kediri and in the near future plans to expand its reach to other cities. Customers and prospective customers can contact PT Gatra Mega Berjangka (Money Mall) at all of its branch offices at any time to get the best and most professional service.</p>
                    <h3>Secure and Safe Guarantee</h3>
                    <p>PT. Gatra Mega Berjangka (Money Mall) memberikan jaminan keamanan bagi para nasabahnya, karena selain PT. Gatra Mega Berjangka (Money Mall) memiliki ijin usaha resmi yang dikeluarkan oleh Badan Pengawas Perdagangan Berjangka Komoditi (Bappebti), nasabah yang menempatkan dananya di PT. Gatra Mega Berjangka (Money Mall) akan mendapatkan perlindungan dengan menyimpan ke dalam rekening secara terpisah (segregated account) di bank-bank yang ditunjuk oleh Bappebti. Layanan yang terbaik selalu siap diberikan kepada para nasabah.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>To ensure the security of customer funds, PT Gatra Mega Berjangka (Money Mall) has fulfilled various statutory requirements and has received various certificates from government agencies.</p>
                    <p class="mt-2">With complete permits and membership from the official institutions above, PT Gatra Mega Berjangka (Money Mall) has been proven to be a responsible company and has a strong and official legal basis.</p>
                    <h3>Proof of Documents</h3>
                    <img src="{{ asset('fe/assets/img/image279.webp') }}" class="img-fluid">
                    <p><small>BAPPEBTI LICENSE 2004</small></p>
                    <img src="{{ asset('fe/assets/img/image280.webp') }}" class="img-fluid">
                    <p><small>Indonesian Derivatives Clearing House 2004</small></p>
                    <img src="{{ asset('fe/assets/img/image281.webp') }}" class="img-fluid">
                    <p><small>BAPPEBTI LICENSE 2007</small></p>
                    <img src="{{ asset('fe/assets/img/image282.webp') }}" class="img-fluid">
                    <p><small>BAPPEBTI LICENSE 2014 - For online users</small></p>
                    <img src="{{ asset('fe/assets/img/image283.webp') }}" class="img-fluid">
                    <p><small>Certificate if Membership - Jakarta Futures Exchange 2003</small></p>
                    <img src="{{ asset('fe/assets/img/image284.webp') }}" class="img-fluid">
                    <p><small>Company CSR program - Bakti Sosial Yayasan Triasih dan Wisma Sahabat Baru</small></p>
                </div>
                <div class="col-lg-6">
                    <h3>Legality</h3>
                    <div class="box-about p-5 mt-3">
                        <p class="color-blue">
                            <svg width="19.000000" height="22.000000" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                        Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M11 10L5 10M7 14L5 14M13 6L5 6M18 16.42L18 13.92L15.81 13.14C15.28 12.95 14.71 12.95 14.18 13.14L12 13.92L12 16.42C12 18.57 15 20 15 20C15 20 18 18.57 18 16.42ZM9.5 21L5.79 21C4.11 21 3.27 21 2.63 20.67C2.07 20.38 1.61 19.92 1.32 19.36C1 18.72 1 17.88 1 16.2L1 5.79C1 4.11 1 3.27 1.32 2.63C1.61 2.07 2.07 1.61 2.63 1.32C3.27 1 4.11 1 5.79 1L12.2 1C13.88 1 14.72 1 15.36 1.32C15.92 1.61 16.38 2.07 16.67 2.63C17 3.27 17 4.11 17 5.79L17 9" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>
                            REGISTERED
                        </p>
                        <ul>
                            <li>Anggota Bursa Berjangka Jakarta (SPAB-049/BBJ/07/03)</li>
                            <li>Anggota Kliring Berjangka Indonesia (20/AK-KBI/III/2004)</li>
                        </ul>
                    </div>

                    <div class="box-about p-5 mt-3">
                        <p class="color-blue">
                            <svg width="19.000000" height="22.000000" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                        Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M11 10L5 10M7 14L5 14M13 6L5 6M18 16.42L18 13.92L15.81 13.14C15.28 12.95 14.71 12.95 14.18 13.14L12 13.92L12 16.42C12 18.57 15 20 15 20C15 20 18 18.57 18 16.42ZM9.5 21L5.79 21C4.11 21 3.27 21 2.63 20.67C2.07 20.38 1.61 19.92 1.32 19.36C1 18.72 1 17.88 1 16.2L1 5.79C1 4.11 1 3.27 1.32 2.63C1.61 2.07 2.07 1.61 2.63 1.32C3.27 1 4.11 1 5.79 1L12.2 1C13.88 1 14.72 1 15.36 1.32C15.92 1.61 16.38 2.07 16.67 2.63C17 3.27 17 4.11 17 5.79L17 9" stroke="#23A0DB" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>

                            BUSINESS LICENSE
                        </p>
                        <ul>
                            <li>Izin Usaha Pialang Berjangka (No.271/BAPPEBTI/SI/X/2003)</li>
                            <li>Persetujuan Bappebti sebagai Peserta Sistem Perdagangan Alternatif (No.1163/BAPPEBTI/SP/5/2007)</li>
                            <li>Penetapan Bappebti sebagai Pialang Berjangka Yang Melakukan Kegiatan Penerimaan Nasabah Secara Elektronik On-line (No.32/BAPPEBTI/KEP-PBK/11/2014)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection