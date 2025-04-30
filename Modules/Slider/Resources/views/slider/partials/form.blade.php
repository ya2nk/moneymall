<form action="{{ Route::is('admin.slider.edit') ? route('admin.slider.update', @$slider->id) : route('admin.slider.store') }}" method="POST" enctype="multipart/form-data"
    data-parsley-validate data-parsley-focus="first">
    @csrf
        <div class="form-body">
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="title">Slider Title <span
                                    class="required">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                value="{{ $slider->name ?? old('name') }}" placeholder="Enter Title" />
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>
                
                    <div class="col-md-2">
                        <div class="form-group has-success">
                            <label class="control-label" for="status">Status <span class="required">*</span></label>
                            <select class="form-control custom-select" id="status" name="status" required>
                                <option value="1" {{ old('status') === 1 ? 'selected' : null }} {{ isset($slider) && $slider->status === 1 ? 'selected' : null }}>Active</option>
                                <option value="0" {{ old('status') === 0 ? 'selected' : null }} {{ isset($slider) && $slider->status === 0 ? 'selected' : null }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                </div>

                <div class="row ">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="banner_image">Slider Image </label>
                            <input type="file" class="form-control dropify @error('image') is-invalid @enderror" data-height="70"
                                data-allowed-file-extensions="png jpg jpeg webp" id="banner_image"
                                name="image" @if(isset($slider) && $slider->image != null)  data-default-file="{{ asset('public/images/slider/'.$slider->image) }}" @endif/>
                            @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>


                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="description">Slider Description <span
                                    class="optional">(optional)</span></label>
                            <textarea type="text" class="form-control tinymce_advance" id="description"
                                name="description">{!! $slider->description ?? old('description') !!}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                    
                        <div class="form-actions">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                    Save</button>
                                <a href="{{ route('admin.slider.index') }}" class="btn btn-dark">Cancel</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </form>