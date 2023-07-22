@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

<script>

  function addDiscount()
  {
    var discount_percentage = document.getElementById("discount_percentage");
    var purchase_amount     = document.getElementById("purchase_amount");
    var discount_price      = document.getElementById("discount_price");
    var s_product_price     = document.getElementById("send_product_price");

    var product_price       = "{{$product_data->product_price}}";

    var discount_percentage =  discount_percentage.value;

    var discount            = Number(product_price)*(Number(discount_percentage)/100);
    discount_price.value    = discount;

    var new_price           = Number(product_price) - Number(discount);
    s_product_price.value   = Number(new_price).toFixed(2);
    purchase_amount.value   = Number(new_price).toFixed(2);

    alert("Added discount : "+Number(discount).toFixed(2));


  }


</script>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">ORDER NOW</h4>

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
                                <form class="form-horizontal" method="POST" action="/order_now_final" enctype="multipart/form-data">
                                        @csrf
                                            <input type="hidden" value="{{$product_data->product_id}}" name="product_id"/>
                                            <input id="send_product_price" type="hidden" value="{{$product_data->product_price}}" name="product_price"/>
                                            <input id="discount_price" type="hidden" name="discount"/>
                                           <div class="form-group">
                                                <label for="product_code">BILL NUMBER</label>
                                                <input

                                                    placeholder="BILL NUMBER (REQUIRED)"
                                                    id="bill_number"
                                                    type="text"
                                                    class="form-control @error('bill_number') is-invalid @enderror"
                                                    name="bill_number"
                                                    required autocomplete="bill_number"

                                                autofocus>

                                                @error('bill_number')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="order_date">ORDERED DATE</label>
                                                <input
                                                    disabled
                                                    type="text"
                                                    class="form-control @error('order_date') is-invalid @enderror"
                                                    name="order_date"
                                                    value="{{date('Y-m-d')}}"
                                                    />
                                           </div>
                                           <div class="form-group">
                                                <label for="rental_date">RENTAL DATE</label>
                                                <input

                                                    placeholder="Date"
                                                    id="rental_date"
                                                    type="date"
                                                    class="form-control @error('date') is-invalid @enderror"
                                                    name="rental_date"
                                                    required autocomplete="rental_date"

                                                autofocus>

                                                @error('return_date')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="return_date">RETURN DATE</label>
                                                <input

                                                    placeholder="Date"
                                                    id="return_date"
                                                    type="date"
                                                    class="form-control @error('date') is-invalid @enderror"
                                                    name="return_date"
                                                    required autocomplete="return_date"

                                                autofocus>

                                                @error('return_date')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="discount">TOTAL PRICE</label>
                                                <input
                                                    disabled
                                                    value="{{$product_data->product_price}}"
                                                    id="purchase_amount"
                                                    style="text-align:right"
                                                    class="form-control @error('date') is-invalid @enderror"
                                                />
                                                @error('discount')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                           <div class="form-group">
                                                <label for="discount">DISCOUNT PERCENTAGE</label>
                                                <input
                                                    id="discount_percentage"
                                                    style="text-align:right"
                                                    class="form-control @error('discount') is-invalid @enderror"
                                                    type="text"
                                                autofocus>
                                                </br>
                                                <button class="btn btn-success" onclick="addDiscount();">Add Discount</button>
                                                @error('discount')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                           <div class="form-group">
                                                <label for="purchase_amount">PURCHASE AMOUNT | LKR</label>
                                                <input
                                                    style="text-align:right"
                                                    id="purchase_amount"
                                                    type="number"
                                                    step="0.01"
                                                    class="form-control @error('purchase_amount') is-invalid @enderror"
                                                    name="purchased"
                                                    required autocomplete="purchase_amount"
                                                autofocus>

                                                @error('purchase_amount')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                           <div class="form-group">
                                                <label for="customer_name">CUSTOMER NAME</label>
                                                <input

                                                    placeholder="CUSTOMER NAME (REQUIRED)"
                                                    id="customer_name"
                                                    type="text"
                                                    class="form-control @error('customer_name') is-invalid @enderror"
                                                    name="customer_name"
                                                    required autocomplete="customer_name"
                                                >

                                                @error('customer_name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="customer_phone">CUSTOMER PHONE</label>
                                                <input

                                                    placeholder="CUSTOMER PHONE (REQUIRED)"
                                                    id="customer_phone"
                                                    type="number"
                                                    pattern="[0-9]{10}"
                                                    class="form-control @error('customer_phone') is-invalid @enderror"
                                                    name="customer_phone"
                                                    required autocomplete="customer_phone"


                                                autofocus>

                                                @error('customer_phone')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="nic_text">CUSTOMER NIC</label>
                                                <input

                                                    placeholder="CUSTOMER NIC (REQUIRED)"
                                                    id="nic_text"
                                                    type="text"
                                                    class="form-control @error('nic_text') is-invalid @enderror"
                                                    name="nic_text"
                                                    required autocomplete="nic_text"

                                                autofocus>

                                                @error('nic_text')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                           <div class="form-group">
                                                <label for="customer_address">CUSTOMER ADDRESS</label>
                                                <input

                                                    placeholder="CUSTOMER ADDRESS (OPTIONAL)"
                                                    id="customer_address"
                                                    type="text"
                                                    class="form-control @error('customer_address') is-invalid @enderror"
                                                    name="customer_address"
                                                >

                                                @error('customer_address')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label>NIC IMAGE (OPTIONAL)</label>
                                                <input type="file" name="nic_image" class="btn btn-dark">
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">PLACE ORDER</button>
                                            </div>
                                    </form>




                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body table-responsive">
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

@stop
