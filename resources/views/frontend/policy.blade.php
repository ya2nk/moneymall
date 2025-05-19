@extends('frontend.layout.main')

@section("content")
<div class="contact-section p-5">
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ ucfirst(str_replace("-"," ",$type)) }}</li>
        </ol>
    </nav>

    <div class="row mt-5 mb-5">
        <div class="col-lg-8 offset-lg-2">
            <div class="card rounded-0">
                <div class="card-body">
                    <h3>{{ @$row->title }}</h3>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection