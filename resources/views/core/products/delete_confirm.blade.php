@extends('core.layouts.app')
@section('title', 'Dashboard Admin')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">CONFIRM DELETE</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="assets/images/delete/delete.png" style="width:130px;height:130px;"/>
                        <h1> Delete Category , Are you sure!  </h1>
                        </br>
                        <div class="col">
                                <form action="/product_delete_final" method="GET">
                                @csrf
                                    <input type="hidden" value="{{$product_id}}" name="product_id"/>
                                    <input type="submit" value="CONFIRM" class="btn btn-danger" />
                                </form>
                        </div>
                        </br></br>
                        <div class="col">
                                <form action="/product_dashboard" method="GET">
                                @csrf
                                    <input type="submit" value="Go BACK" class="btn btn-primary" />
                                </form>
                        </div>
                        </br></br>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
