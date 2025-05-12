@extends('frontend.layout.main')

@section('content')
<div class="contact-section mt-5">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>

        <div class="row mb-5">
            <div class="col-lg-6">
                
                <p class="contact-page-head">How to Start Trading with Money Mall</p>
                <div class="row mt-4">
                <div class="col-lg-1">
                    <img src="{{ asset('fe/assets/img/clipboardtext.webp') }}">
                </div>
                <div class="col-lg-11">
                    <p class="contact-page-list-head">Assess Your Financial Readiness</p>
                    <p class="contact-page-list-content">Gather your financial documents, complete the short form, and upload your details to get started.</p>
                </div>
                </div>
                <div class="row mt-4">
                <div class="col-lg-1">
                    <img src="{{ asset('fe/assets/img/iconchats.webp') }}">
                </div>
                <div class="col-lg-11">
                    <p class="contact-page-list-head">Consult & Get Insights</p>
                    <p class="contact-page-list-content">Our team will review your submission and provide you with an initial assessment, including estimated costs and timelines within 24 hours.</p>
                </div>
                </div>
                <div class="row mt-4">
                <div class="col-lg-1">
                    <img src="{{ asset('fe/assets/img/note.webp') }}">
                </div>
                <div class="col-lg-11">
                    <p class="contact-page-list-head">Begin Your Trading Journey</p>
                    <p class="contact-page-list-content">Once confirmed, we’ll guide you through the final steps to activate your account and start trading seamlessly.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="card">
                <div class="card-body p-3">
                    <p class="contact-form-head">CONTACT US</p>
                    <p class="contact-form-subhead">Have questions or need expert guidance? We’re here to help you!</p>
                    <form class="contact-form">
                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" placeholder="Full Name">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                        <input type="email" placeholder="Email Address">
                        </div>
                        <div class="col-md-6">
                        <input type="text" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                        <input type="text" placeholder="Message Content">
                        </div>
                        
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-6">
                        <button>SEND</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    </div>
</div>
@endsection