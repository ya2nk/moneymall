@extends('backend.layouts.master')

@section('title')
    Member List
@endsection

@section('admin-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                Member List
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Member List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row mt-1">
        <!-- Column -->
        <!-- Column -->
       
    
    </div>
    <div class="table-responsive product-table">
        <table class="table table-striped table-bordered display ajax_view" id="datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Status</th>
                    
                    <th width="100">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    
</div>
@endsection

@section('scripts')
    <script>
        const ajaxURL = "{{ url('admin/member/data') }}";
        $('table#datatable').DataTable({
            dom: 'Blfrtip',
            language: {processing: "<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Loading Data..."},
            processing: true,
            serverSide: true,
            ajax: {url: ajaxURL},
            aLengthMenu: [[25, 50, 100, 1000, -1], [25, 50, 100, 1000, "All"]],
            buttons: ['excel', 'pdf', 'print'],
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'fullname', name: 'fullname'},
                {data: 'email', name: 'email'},
                {data: 'phone_number', name: 'phone_number'},
                {data: 'country', name: 'country'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action' ,render : (data,type,row) => {
                    var button = `<button class="btn btn-info btn-sm" onclick="showForm(${row.id})"><i class="fa fa-edit"></i></button>`;
                        button = `<button class="btn btn-danger btn-sm" onclick="doDelete(${row.id})"><i class="fa fa-trash"></i></button>`;
                    return button;
                }}
            ]
        });

        

        
    </script>
@endsection

