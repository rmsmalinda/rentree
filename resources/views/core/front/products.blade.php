@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">FRONT PRODUCTS</h4>

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

                                <form class="form-horizontal" method="POST" action="/update_front_products_final" enctype="multipart/form-data">
                                        @csrf

                                           <div class="form-group">
                                                <label for="title">TITLE</label>
                                                <input

                                                    placeholder="TITLE"
                                                    id="title"
                                                    type="text"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    name="title"
                                                    required autocomplete="title"

                                                autofocus>

                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                            </div>

                                           <div class="form-group">
                                                <label for="description">DESCRIPTION</label>
                                                <input

                                                    placeholder="DESCRIPTION"
                                                    id="description"
                                                    type="text"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    name="description"
                                                    required
                                                    autocomplete="description"

                                                autofocus>

                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                            </div>

                                        <div class="form-group">
                                            <label for="name">IMAGE-01</label>
                                            <input type="file" name="image_1" class="btn btn-dark">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">IMAGE-02</label>
                                            <input type="file" name="image_2" class="btn btn-dark">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">IMAGE-03</label>
                                            <input type="file" name="image_3" class="btn btn-dark">
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
                <div class="card-body">

                    <h4 class="card-title">Default Datatable</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td><button type="button" class="btn btn-success waves-effect waves-light btn-sm">Edit</button></td>
                            <td><button type="button" class="btn btn-danger waves-effect waves-light btn-sm">Delete</button></td>
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
