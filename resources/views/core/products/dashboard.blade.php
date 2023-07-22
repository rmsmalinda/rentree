@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">PRODUCT DASHBOARD</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">ROMEO.LK</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">

                                <form class="form-horizontal" method="POST" action="/add_core_product" enctype="multipart/form-data">
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
                                           <div class="form-group">
                                                <label for="product_code">PRODUCT CODE</label>
                                                <input

                                                    placeholder="PRODUCT CODE (REQUIRED)"
                                                    id="product_code"
                                                    type="text"
                                                    class="form-control @error('product_code') is-invalid @enderror"
                                                    name="product_code"
                                                    required autocomplete="product_code"

                                                autofocus>

                                                @error('product_code')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>


                                           <div class="form-group">
                                                <label for="product_name">PRODUCT NAME</label>
                                                <input

                                                    placeholder="PRODUCT NAME (OPTIONAL)"
                                                    id="product_name"
                                                    type="text"
                                                    class="form-control @error('product_name') is-invalid @enderror"
                                                    name="product_name"
                                                >

                                                @error('product_name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="product_name">PRODUCT PRICE | LKR</label>
                                                <input

                                                    placeholder="PRODUCT PRICE"
                                                    id="product_price"
                                                    type="number"
                                                    step="0.01"
                                                    class="form-control @error('product_price') is-invalid @enderror"
                                                    name="product_price"
                                                    required autocomplete="product_price"
                                                    autofocus
                                                />

                                                @error('product_price')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="product_quantity">PRODUCT QUANTITY</label>
                                                <input

                                                    placeholder="ENTER QUANTITY"
                                                    id="product_quantity"
                                                    type="number"
                                                    class="form-control @error('product_quantity') is-invalid @enderror"
                                                    name="product_quantity"
                                                    required autocomplete="product_quantity"

                                                autofocus>

                                                @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label>PRODUCT IMAGE (OPTIONAL)</label>
                                                <input type="file" name="product_image" class="btn btn-dark">
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">SAVE PRODUCT</button>
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

                    <h4 class="card-title">CATEGORIES</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>CATEGORY</th>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
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
                                            <form action="/product_update_confirm" method="GET">
                                                <input type="hidden" value="{{$product_data->product_id}}" name="product_id"/>
                                                <input type="submit" class="btn btn-success waves-effect waves-light btn-sm" value="UPDATE"/>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/product_delete_confirm" method="GET">
                                                <input type="hidden" value="{{$product_data->product_id}}" name="product_id"/>
                                                <input type="submit" class="btn btn-danger waves-effect waves-light btn-sm" value="DELETE"/>
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
