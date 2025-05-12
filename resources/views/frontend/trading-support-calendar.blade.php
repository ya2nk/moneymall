@extends('frontend.layout.main')

@section("content")
<div class="contact-section mt-5">
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('trading-support') }}">Trading Support</a></li>
          <li class="breadcrumb-item active" aria-current="page">Economic Calendar</li>
        </ol>
    </nav>

    <div class="row mt-5 my-5">
        <div class="col-lg-8">
            <div class="card border-0">
                <div class="card-body">
                    <p><span class="heading-content">High Impact News 21 - 25 April 2025</span><br>
                    <span class="subheading-content">By Anggoro Dwi on 20 April 2025 - 16:30</span></p>
                    <div class="mt-5">
                        <div class="table-responsive">
                            <div class="calendar-date">
                                Monday, 21 April 2025
                            </div>
                            <table class="table table-calendar">
                                <tr>
                                    <th>NO</th>
                                    <th>TIME</th>
                                    <th>EVENT</th>
                                    <th class="text-center">ACTUAL</th>
                                    <th class="text-center">FORECAST</th>
                                    <th class="text-center">PREVIOUS</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>08:00 WIB</td>
                                    <td>CNY 1-y Loan Prime Rate</td>
                                    <td class="text-center">3.10%</td>
                                    <td class="text-center">3.10%</td>
                                    <td class="text-center">3.10%</td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="calendar-date">
                NEW ARCHIVE
            </div>
            <div class="card border-0">
                
                <div class="card-body">
                    <p><a href="#"><span class="float-start">High Impact News 14 - 18 April 2025</a><br><span class="subheading-content">By Anggoro Dwi on 20 April 2025 - 16:30</span></span><a href="#" class="float-end"><i class="fa fa-caret-right"></i></a>
                    </p>
                    <div class="clearfix"></div>
                    <hr>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
@endsection