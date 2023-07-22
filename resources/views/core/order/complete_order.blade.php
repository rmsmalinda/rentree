@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">RENT NOW</h4>

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
                        <h6><strong style="color:#000000;">ORDER DETAILS</strong></h6>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap text-left" style="background-color:#ffffff;border-collapse: collapse; border-spacing: 0; width: 100%;">
                           <tbody>
                            <tr>
                                <td style="color:#000000">BILL NUMBER</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->bill_number}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">ORDERED DATE</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->ordered_date}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">RENTAL DATE</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->rental_date}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                 <td style="color:#000000">RETURN DATE</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->return_date}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">CUSTOMER NAME</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->customer_name}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">CUSTOMER PHONE</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->customer_phone}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">CUSTOMER ADDRESS</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->customer_address}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">NIC</td>
                                <td style="color:#000000">
                                    @isset($ordered_data)
                                            {{$ordered_data->nic_text}}
                                    @endisset
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#000000">NIC PHOTO</td>
                                <td style="color:#000000">
                                    <img src="{{$ordered_data->nic_image}}" width="auto" height="100"/>
                                </td>
                                <td>
                                    <a style="color:#ff0000;" href="{{$ordered_data->nic_image}}" target="_blank">View Photo Larger</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body table-responsive">
                            <h6><strong style="color:#000000;">PRODUCT DETAILS</strong></h6>
                            <img src="{{$product_data->product_image}}" width="auto" height="240"/>
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap text-left" style="background-color:#ffffff;border-collapse: collapse; border-spacing: 0; width: 100%;">
                               <tbody>
                                <tr>
                                    <td style="color:#000000">PRODUCT CODE</td>
                                    <td style="color:#000000">
                                        @isset($product_data)
                                                {{$product_data->product_code}}
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#000000">PRODUCT NAME</td>
                                    <td style="color:#000000">
                                        @isset($product_data)
                                                {{$product_data->product_name}}
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#000000">CATEGORY</td>
                                    <td style="color:#000000">
                                        @isset($product_data)
                                                {{$product_data->category_name}}
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                     <td style="color:#000000">PRICE | LKR</td>
                                    <td style="color:#000000">
                                        @isset($product_data)
                                                {{$product_data->product_price}}
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#000000">AVAILABLE QUANTITY</td>
                                    <td style="color:#000000">
                                        @isset($product_data)
                                                {{$product_data->product_quantity}}
                                        @endisset
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="/complete_order_final" enctype="multipart/form-data">
                        @csrf
                           <input type="hidden" value="{{$ordered_data->order_id}}" name="order_id"/>
                           <input type="hidden" value="{{number_format((float)$ordered_data->product_price - $ordered_data->purchased, 2, '.', '')}}" name="balance"/>
                           <div class="form-group">
                                <label for="purchase_amount">PRODUCT PRICE | LKR</label>
                                <input
                                    disabled
                                    style="text-align:right"
                                    class="form-control @error('date') is-invalid @enderror"
                                    disabled
                                    type="text"
                                    value="{{$product_data->product_price}}"
                                autofocus>

                                @error('purchase_amount')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                           <div class="form-group">
                                <label for="purchase_amount">DISCOUNT | LKR</label>
                                <input
                                    disabled
                                    style="text-align:right"
                                    class="form-control @error('date') is-invalid @enderror"
                                    disabled
                                    type="text"
                                    value="{{$ordered_data->discount}}"
                                autofocus>

                                @error('purchase_amount')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                           <div class="form-group">
                                <label for="purchase_amount">TOTAL AMOUNT | LKR</label>
                                <input
                                    disabled
                                    style="text-align:right"
                                    class="form-control @error('date') is-invalid @enderror"
                                    disabled
                                    type="text"
                                    value="{{$ordered_data->product_price}}"
                                autofocus>

                                @error('purchase_amount')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                           <div class="form-group">
                                <label for="purchase_amount">PURCHASED AMOUNT | LKR</label>
                                <input
                                    disabled
                                    style="text-align:right"
                                    class="form-control @error('date') is-invalid @enderror"
                                    disabled
                                    type="text"
                                    value="{{$ordered_data->purchased}}"
                                autofocus>

                                @error('purchase_amount')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                           <div class="form-group">
                                <label style="color:#ff0000;" for="balance">BALANCE | LKR</label>
                                <input
                                    disabled
                                    style="color:#ff0000;text-align:right"
                                    class="form-control @error('date') is-invalid @enderror"
                                    disabled
                                    type="text"
                                    value="{{number_format((float)$ordered_data->product_price - $ordered_data->purchased, 2, '.', '')}}"
                                autofocus>

                                @error('balance')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="mt-4">
                                <button style="color:#ffffff;" class="btn btn-primary btn-block waves-effect waves-light" type="submit">COMPLETE ORDER | RENT NOW</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
