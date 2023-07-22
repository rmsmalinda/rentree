@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">DAILY REVENUE</h4>

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

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>DATE</th>
                            <th>NAME</th>
                            <th>E-MAIL</th>
                            <th>SUBJECT</th>
                            <th>MESSAGE</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($contact_data)
                                @foreach($contact_data as $contact_data)
                                    <tr>
                                        <td>{{$contact_data->created_at}}</td>
                                        <td>{{$contact_data->name}}</td>
                                        <td>{{$contact_data->email}}</td>
                                        <td>{{$contact_data->subject}}</td>
                                        <td>{{$contact_data->message}}</td>
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
