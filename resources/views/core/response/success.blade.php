@extends('core.layouts.app')
@section('title', 'ROMEO.LK')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">OPERATION SUCCESS</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="assets/images/success/success.png" style="width:130px;height:130px;"/>
                        <h1> Operation success!  </h1>
                        </br>
                        <form action="{{$return_path}}" method="GET">
                        @csrf
                            <input type="submit" value="CONTINUE" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
