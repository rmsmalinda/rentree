@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">RENT A PRODUCT</h4>

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

                    <h4 class="card-title">ORDERED ITEMS</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>BILL NUMBER</th>
                            <th>IMAGE</th>
                            <th>PRODUCT DETAILS</th>
                            <th>ORDERED DATE</th>
                            <th>RENTAL DATE</th>
                            <th>RETURN DATE</th>
                            <th>CUSTOMER</th>
                            <th>PURCHASED</th>
                            <th>DISCOUNT</th>
                            <th>RENT NOW</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($ordered_data)
                                @foreach($ordered_data as $ordered_data)
                                    <tr>
                                        <td>{{$ordered_data->id}}</td>
                                        <td>{{$ordered_data->bill_number}}</td>
                                        <td>
                                            <img src="{{DB::table('core_products')->where('product_id',$ordered_data->product_id)->first()->product_image}}" width="100" height="auto"/>
                                        </td>
                                        <td>
                                            {{DB::table('core_products')->where('product_id',$ordered_data->product_id)->first()->product_code}}</br>
                                            {{DB::table('core_products')->where('product_id',$ordered_data->product_id)->first()->product_name}}</br>
                                            {{DB::table('core_products')->where('product_id',$ordered_data->product_id)->first()->category_name}}
                                        </td>
                                        <td>{{$ordered_data->ordered_date}}</td>
                                        <td>{{$ordered_data->rental_date}}</td>
                                        <td>{{$ordered_data->return_date}}</td>
                                        <td>
                                            {{$ordered_data->customer_name}}</br>
                                            {{$ordered_data->nic_text}}</br>
                                            {{$ordered_data->customer_phone}}
                                        </td>
                                        <td>{{$ordered_data->purchased}}</td>
                                        <td>{{$ordered_data->discount}}</td>
                                        <td>
                                            <form action="/complete_order_dashboard" method="GET">
                                                <input type="hidden" value="{{$ordered_data->order_id}}" name="order_id"/>
                                                <input type="submit" class="btn btn-danger waves-effect waves-light btn-sm" value="RENT NOW"/>
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
