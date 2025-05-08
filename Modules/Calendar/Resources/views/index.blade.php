@extends('backend.layouts.master')

@section('title')
    Economic Calendar List
@endsection

@section('admin-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">
                Economic Calendar List
            </h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Economic Calendar List</li>
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
        @if (Auth::user()->can('calendar.create'))
            <div class="col-md-6 col-lg-3 col-xlg-3 pointer" onclick="showForm(0)">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">
                            <i class="fa fa-plus-circle"></i>
                        </h1>
                        <h6 class="text-white">Create New Calendar Event</h6>
                    </div>
                </div>
            </div>
        @endif
    
    </div>
    <div class="table-responsive product-table">
        <table class="table table-striped table-bordered display ajax_view" id="datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Event Name</th>
                    <th>Actual</th>
                    <th>Forecast</th>
                    <th>Previous</th>
                    <th width="100">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">FORM EVENT CALENDAR</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="fm">
                    @csrf
                    <input type="hidden" name="id">
                   
                    <div class="form-group row">
                        <label class="col-md-3">Date</label>
                        <div class="col-md-6">
                           <input type="date" class="form-control" name="date_calendar" value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Time</label>
                        <div class="col-md-6">
                            <input type="time" class="form-control" name="time_calendar" value="{{ date('H:i:s') }}">
                            <div class="invalid-feedback mata_uang_err"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Event Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="event_name">
                            <div class="invalid-feedback event_name_err"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Actual</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="actual">
                            <div class="invalid-feedback actual_err"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Forecast</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="forecast">
                            <div class="invalid-feedback forecast_err"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Previous</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="previous">
                            <div class="invalid-feedback previous_err"></div>
                        </div>
                    </div>
                    
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-info proses-button" onclick="doSave()" id="simpan">SAVE</button>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('scripts')
    <script>
        const ajaxURL = "{{ url('admin/economic-calendar/data') }}";
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
                {data: 'date_calendar', name: 'date_calendar'},
                {data: 'time_calendar', name: 'time_calendar'},
                {data: 'event_name', name: 'event_name'},
                {data: 'actual', name: 'actual'},
                {data: 'forecast', name: 'forecast'},
                {data: 'previous', name: 'previous'},
                {data: 'action', name: 'action' ,render : (data,type,row) => {
                    var button = `<button class="btn btn-info btn-sm" onclick="showForm(${row.id})"><i class="fa fa-edit"></i></button>`;
                        button = `<button class="btn btn-danger btn-sm" onclick="doDelete(${row.id})"><i class="fa fa-trash"></i></button>`;
                    return button;
                }}
            ]
        });

        function showForm(id) {
            $('#fm .form-control').removeClass("is-invalid");
            $('#fm .invalid-feedback').text("");
            $('#fm [name="id"]').val(id);
            if(id != 0) {
                $.get("{{ url('admin/calendar/row') }}",{id:id}).done(resp => {
                    $.each(resp,function(k,v) {
                        $(`#fm [name="${k}"]`).val(v);
                    });
                })
            } else {
                $('#fm')[0].reset();
            }

            $('#model-form').modal('show');
        }

        function doSave() {
            $('#fm .form-control').removeClass("is-invalid");
            $('#fm .invalid-feedback').text("");
            notifyBlockOpen();
            $.post("{{ url('admin/calendar/save') }}",$('#fm').serialize()).done(resp => {
                notifyBlockClose();
            }).fail(err => {
                notifyBlockClose();
                var errors = JSON.parse(err.responseText);
                //console.log(err);
                if(!$.isEmptyObject(errors)) {
                    if(err.status == 422) {
                        if(!$.isEmptyObject(errors.errors)) {
                            $.each( errors.errors, function( key, value ) {
                                $('#fm .'+key+'_err').text(value);
                                $(`#fm [name=${key}]`).addClass("is-invalid");
                            });
                        }
                    } else {
                        notifyError(errors.message);
                    }
                }
            })
        }

        function doDelete(id) {
            Notiflix.Confirm.show("Confirm","Are you Sure?",'Yes',"No",() => {
                $.post("{{ url('admin/calendar/delete') }}",{id:id}).done(resp => {

                });
            });
        }
    </script>
@endsection
