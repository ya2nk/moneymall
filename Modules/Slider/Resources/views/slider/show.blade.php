@extends('backend.layouts.master')

@section('title')
    @include('slider::slider.partials.title')
@endsection

@section('admin-content')
    @include('slider::slider.partials.header-breadcrumbs')
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Name</label>
                                    <br>
                                    {{ $slider->name }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label" for="status">Status</label>
                                    <br>
                                    {{ $slider->status === 1 ? 'Active' : 'Inactive' }}
                                </div>
                            </div>
                        </div>


                       

                        <div class="row ">
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="banner_image">Image</label>
                                    <br>
                                    @if ($slider->image != null)
                                        <a href="{{ asset('public/images/slider/'.$slider->image) }}" target="_blank"><img src="{{ asset('public/images/slider/'.$slider->image) }}" alt="Image" class="img img-fluid" width="100"/></a>
                                    @else
                                    <span class="border p-2">
                                        No Image
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Description</label>
                                    <div>
                                        {!! $slider->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                
                                <div class="form-actions">
                                    <div class="card-body">
                                        @if (Auth::user()->can('slider.edit'))
                                            <a  class="btn btn-success" href="{{ route('admin.slider.edit', $slider->id) }}"> <i class="fa fa-edit"></i> Edit Now</a>
                                        @endif
                                        <a href="{{ route('admin.slider.index') }}" class="btn btn-dark ml-2">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    $(".categories_select").select2({
        placeholder: "Select a Category"
    });
    </script>
@endsection
