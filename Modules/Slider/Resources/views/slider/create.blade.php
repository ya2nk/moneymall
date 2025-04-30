@extends('backend.layouts.master')

@section('title')
    @include('slider::slider.partials.title')
@endsection

@section('admin-content')
    @include('slider::slider.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
           @include('slider::slider.partials.form')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
       
    </script>
@endsection
