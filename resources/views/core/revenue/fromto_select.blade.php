@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">FROM TO REVENUE</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">ROMEO.LK</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>SELECT DATES</h1>
                        <form action="/revenue_from_to_final" method="GET">
                          <label for="from_date">SELECT FROM</label>
                          <input type="date" name="from_date">
                          <label for="to_date">SELECT TO</label>
                          <input type="date" name="to_date">
                          <input type="submit" class="btn btn-primary" value="CONTINUE"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
