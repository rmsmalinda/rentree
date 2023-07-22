@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">MONTHLY REVENUE</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">ROMEO.LK</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <strong style="color:#0000ff">{{$year}}</strong>
                    <strong style="color:#0000ff">
                        @if($month == "01")January
                        @elseif($month == "02")February
                        @elseif($month == "03")March

                        @elseif($month == "04")April
                        @elseif($month == "05")May
                        @elseif($month == "06")June

                        @elseif($month == "07")July
                        @elseif($month == "08")August
                        @elseif($month == "09")September

                        @elseif($month == "10")October
                        @elseif($month == "11")November
                        @elseif($month == "12")December

                        @endif
                    </strong></br>
                    <strong style="color:#ff0000;">TOTAL REVENUE (LKR) </strong>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3><strong style="color:#ff0000;">{{$total_revenue}}</strong> LKR</h3>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                   <form action="/revenue_monthly_given">
                            <select name="month" class="select-picker" style="border: 2px solid blue;">
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>

                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>

                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>

                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                     <input type="submit" value="CONTINUE"/>
                   </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>DATE</th>
                            <th>DETAILS</th>
                            <th style="background-color:#424242;color:#ffffff;">AMOUNT</th>
                            <th>CUSTOMER</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($revenue_data)
                                @foreach($revenue_data as $revenue_data)
                                    <tr>
                                        <td>{{$revenue_data->date}}</td>
                                        <td>{{$revenue_data->details}}</td>
                                        <td style="background-color:#424242;color:#ffffff;text-align:right">{{$revenue_data->amount}}</td>
                                        <td>{{$revenue_data->customer}}</td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


@stop
