@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">RENTED PRODUCTS</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">ROMEO.LK</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <h4 class="card-title">RENTED PRODUCTS</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>BILL NUMBER</th>
                            <th>PRODUCT DETAILS</th>
                            <th>RENTED DATE</th>
                            <th>RETURN DATE</th>
                            <th>CUSTOMER DETAILS</th>
                            <th>PURCHASED</th>
                            <th style="color:#ff0000;">STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($summary_data)
                                @foreach($summary_data as $summary_data)
                                    <tr>
                                        <td>{{$summary_data->id}}</td>
                                        <td>{{$summary_data->bill_number}}</td>
                                        <td>
                                            <img src="{{DB::table('core_products')->where('product_id',$summary_data->product_id)->first()->product_image}}" width="100" height="auto"/></br>
                                            {{DB::table('core_products')->where('product_id',$summary_data->product_id)->first()->product_code}}</br>
                                            {{DB::table('core_products')->where('product_id',$summary_data->product_id)->first()->product_name}}</br>
                                            {{DB::table('core_products')->where('product_id',$summary_data->product_id)->first()->category_name}}
                                        </td>
                                        <td>{{$summary_data->rental_date}}</td>
                                        <td>{{$summary_data->return_date}}</td>
                                        <td>
                                            <img src="{{$summary_data->nic_image}}" width="100" height="auto"/></br>
                                            {{$summary_data->customer_name}}</br>
                                            {{$summary_data->nic_text}}</br>
                                            {{$summary_data->customer_phone}}
                                        </td>
                                        <td>{{$summary_data->product_price}}</td>
                                        <td style="color:#ff0000;">{{$summary_data->rental_stat}}</td>
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
