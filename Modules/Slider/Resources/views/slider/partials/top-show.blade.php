
<!-- ============================================================== -->
<!-- Top Show Data of Categorie List Service -->
<!-- ============================================================== -->
<div class="row mt-1">
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3 pointer"  onclick="location.href='{{ route('admin.slider.index') }}'">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">{{ $count_slider }}</h1>
                <h6 class="text-white">Total Slider</h6>
            </div>
        </div>
    </div>

    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3 pointer"  onclick="location.href='{{ route('admin.slider.index') }}'">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white">{{ $count_active_slider }}</h1>
                <h6 class="text-white">Active Slider</h6>
            </div>
        </div>
    </div>

    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3 pointer" onclick="location.href='{{ route('admin.slider.trashed') }}'">
        <div class="card card-hover">
            <div class="box bg-primary text-center">
                <h1 class="font-light text-white">{{ $count_slider - $count_active_slider }} / {{ $count_trashed_slider }} </h1>
                <h6 class="text-white">Inactive/Trashed Slider</h6>
            </div>
        </div>
    </div>

    <!-- Column -->
    @if (Auth::user()->can('slider.create'))
        <div class="col-md-6 col-lg-3 col-xlg-3 pointer" onclick="location.href='{{ route('admin.slider.create') }}'">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white">
                        <i class="fa fa-plus-circle"></i>
                    </h1>
                    <h6 class="text-white">Create New Slider</h6>
                </div>
            </div>
        </div>
    @endif

</div>
