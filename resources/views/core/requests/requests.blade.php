@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

@php
    $ordered_data = 0;

@endphp


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
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">

                    <h4 class="card-title">ORDERED ITEMS</h4>
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>CUSTOMER NAME</th>
                            <th>CALL/SMS NUMBER</th>
                            <th>WHATSAPP NUMBER</th>
                            <th>EMAIL ADDRESS</th>
                            <th>NIC</th>
                        </tr>
                        </thead>

                        <tbody>
                            {{-- @isset($ordered_data)
                                @foreach($ordered_data as $ordered_data)
                                    <tr>
                                        <td>hi</td>
                                        <td>hi</td>
                                        <td>
                                            hi
                                        </td>
                                        <td>
                                            hi
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            @endisset --}}
                            <tr>
                                <td>hi</td>
                                <td>hi</td>
                                <td>hi</td>
                                <td>hi</td>
                                <td>hi</td>
                                <td>hi</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@stop
