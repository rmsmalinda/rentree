@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">UNAVAILABLE PRODUCTS</h4>

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
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <h4 class="card-title">UNAVAILABLE PRODUCTS</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>CATEGORY</th>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>PRICE | LKR</th>
                            <th>QUANTITY</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($summary_data)
                                @foreach($summary_data as $summary_data)
                                    <tr>
                                        <td>{{$summary_data->id}}</td>
                                        <td>
                                            <img src="{{$summary_data->product_image}}" width="100" height="auto"/>
                                        </td>
                                        <td>{{$summary_data->category_name}}</td>
                                        <td>{{$summary_data->product_code}}</td>
                                        <td>{{$summary_data->product_name}}</td>
                                        <td>{{$summary_data->product_price}}</td>
                                        <td>{{$summary_data->product_quantity}}</td>
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
