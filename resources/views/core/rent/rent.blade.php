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
    <!-- end page title -->

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                       SELECTED CATEGORY  : <strong style="color:#ff0000;">{{$category_name}} </strong>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                <form class="form-horizontal" method="GET" action="/rent_product_filter">
                        @csrf

                           <div class="form-group">
                                <label for="product_code">SELECT CATEGORY</label>
                                @isset($category_data)
                                    <select name="category_id" class="btn btn-block select-picker" style="border: 2px solid blue;">
                                        @foreach($category_data as $category_data)
                                            <option value="{{$category_data->category_id}}">{{$category_data->category_name}}</option>
                                        @endforeach
                                    </select>
                                @endisset
                           </div>
                           <div class="mt-4">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">FILTER</button>
                           </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <h4 class="card-title">AVAILABLE PRODUCTS</h4>


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
                            <th>ORDER NOW</th>
                            <th>RENT NOW</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($product_data)
                                @foreach($product_data as $product_data)
                                    <tr>
                                        <td>{{$product_data->id}}</td>
                                        <td>
                                            <img src="{{$product_data->product_image}}" width="100" height="auto"/>
                                        </td>
                                        <td>{{$product_data->category_name}}</td>
                                        <td>{{$product_data->product_code}}</td>
                                        <td>{{$product_data->product_name}}</td>
                                        <td>{{$product_data->product_price}}</td>
                                        <td>{{$product_data->product_quantity}}</td>
                                        <td>
                                            <form action="/order_now_dashboard" method="GET">
                                                <input type="hidden" value="{{$product_data->product_id}}" name="product_id"/>
                                                <input type="submit" class="btn btn-danger waves-effect waves-light btn-sm" value="ORDER NOW"/>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/rent_now_dashboard" method="GET">
                                                <input type="hidden" value="{{$product_data->product_id}}" name="product_id"/>
                                                <input type="submit" class="btn btn-success waves-effect waves-light btn-sm" value="RENT NOW"/>
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
