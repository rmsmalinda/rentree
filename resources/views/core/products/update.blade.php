@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">UPDATE CATEGORY</h4>

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

                                <form class="form-horizontal" method="POST" action="/product_update_final" enctype="multipart/form-data">
                                        @csrf
                                           <input type="hidden" value="{{$product_data->product_id}}" name="product_id"/>
                                           <div class="form-group">
                                                <h4>PREVIOUS CATEGORY : <strong> {{$product_data->category_name}}</strong></h4>
                                           </div>
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
                                                    value="{{$product_data->product_code}}"

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
                                                    value="{{$product_data->product_name}}"
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
                                                    value="{{$product_data->product_price}}"
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
                                                    value="{{$product_data->product_quantity}}"

                                                autofocus>

                                                @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <img src="{{$product_data->product_image}}" width="200" height="auto"/>
                                            </div>
                                            <div class="form-group">
                                                <label>PRODUCT IMAGE (OPTIONAL)</label>
                                                <input type="file" name="product_image" class="btn btn-dark">
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">UPDATE PRODUCT</button>
                                            </div>
                                    </form>




                </div>
            </div>
        </div>
    </div>

@stop
