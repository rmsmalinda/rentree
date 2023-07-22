@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">DAILY REVENUE</h4>

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
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <strong style="color:#ff0000;">FROM :: {{$from}} </strong></br>
                    <strong style="color:#ff0000;">TO :: {{$to}} </strong>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3><strong style="color:#ff0000;">TOTAL :: {{$total_revenue}}</strong> LKR</h3>
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
