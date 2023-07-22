@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">PENDING ITEMS</h4>

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

                    <h4 class="card-title">PENDING ITEMS</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>BILL NUMBER</th>
                            <th>PRODUCT IMAGE</th>
                            <th>PRODUCT DETAILS</th>
                            <th>RENTED DATE</th>
                            <th>RETURN DATE</th>
                            <th>CUSTOMER</th>
                            <th>PURCHASED</th>
                            <th>DISCOUNT</th>
                            <th>RETURN PRODUCT</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($pending_data)
                                @foreach($pending_data as $pending_data)
                                    <tr>
                                        <td>{{$pending_data->id}}</td>
                                        <td>{{$pending_data->bill_number}}</td>
                                        <td>
                                            <img src="{{DB::table('core_products')->where('product_id',$pending_data->product_id)->first()->product_image}}" width="100" height="auto"/>
                                        </td>
                                        <td>
                                            {{DB::table('core_products')->where('product_id',$pending_data->product_id)->first()->product_code}}</br>
                                            {{DB::table('core_products')->where('product_id',$pending_data->product_id)->first()->product_name}}</br>
                                            {{DB::table('core_products')->where('product_id',$pending_data->product_id)->first()->category_name}}
                                        </td>
                                        <td>{{$pending_data->rental_date}}</td>
                                        <td>{{$pending_data->return_date}}</td>
                                        <td>
                                            {{$pending_data->customer_name}}</br>
                                            {{$pending_data->nic_text}}</br>
                                            {{$pending_data->customer_phone}}
                                        </td>
                                        <td>{{$pending_data->product_price}}</td>
                                        <td>{{$pending_data->discount}}</td>
                                        <td>
                                            <form action="/return_item_dashboard" method="GET">
                                                <input type="hidden" value="{{$pending_data->rental_id}}" name="rental_id"/>
                                                <input type="submit" class="btn btn-danger waves-effect waves-light btn-sm" value="RETURN PRODUCT"/>
                                            </form>
                                        </td>
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
