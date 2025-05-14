@extends('backend.layouts.master')

@section('title')
    Data {{ ucfirst(str_replace("-"," ",$type)) }}
@endsection

@section('admin-content')
    
    <div class="container-fluid">
        @include('backend.layouts.partials.messages')
        <div class="create-page">
            <form action="{{ route('admin.policy.store') }}" method="POST"  data-parsley-validate data-parsley-focus="first">
                @csrf
                <input type="hidden" name="type" value="{{ $type }}">
                <div class="form-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Title <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $row->title ?? old('title') }}" placeholder="Enter Title" required=""/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="lang">Language <span></label>
                                    <br>
                                    <select class="form-control custom-select select2" id="language" name="lang"
                                        style="width: 100%;" required="">
                                        <option value="">Select</option>
                                        @foreach (@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties))
                                            <option value="{{ $localCode }}" @if($row && $row->lang == $localCode) selected @endif>{{ $properties['native'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="description">Content </label>
                                    <textarea type="text" class="form-control tinymce_advance" id="content" name="content" required="">{{ $row->content ?? old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                               
                                <div class="form-actions">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <a href="{{ route('admin.policy.index') }}" class="btn btn-dark">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    
    </script>
@endsection