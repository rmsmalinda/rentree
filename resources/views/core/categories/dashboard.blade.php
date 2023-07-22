@extends('core.layouts.app')
@section('title', 'SYSTEM')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">PRODUCT CATEGORIES</h4>

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

                                <form class="form-horizontal" method="POST" action="/add_core_category">
                                        @csrf

                                           <div class="form-group">
                                                <label for="category">NEW CATEGORY</label>
                                                <input

                                                    placeholder="category"
                                                    id="category"
                                                    type="text"
                                                    class="form-control @error('category') is-invalid @enderror"
                                                    name="category"
                                                    required autocomplete="category"

                                                autofocus>

                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                            </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">SAVE CATEGORY</button>
                                        </div>
                                    </form>




                </div>
            </div>
        </div>
    </div>







    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body table-responsive">

                    <h4 class="card-title">CATEGORIES</h4>


                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATEGORY NAME</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                        </thead>

                        <tbody>
                            @isset($category_data)
                                @foreach($category_data as $category_data)
                                    <tr>
                                        <td>{{$category_data->id}}</td>
                                        <td>{{$category_data->category_name}}</td>
                                        <td>
                                            <form action="/category_update_confirm" method="GET">
                                                <input type="hidden" value="{{$category_data->category_id}}" name="category_id"/>
                                                <input type="submit" class="btn btn-success waves-effect waves-light btn-sm" value="UPDATE"/>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="/category_delete_confirm" method="GET">
                                                <input type="hidden" value="{{$category_data->category_id}}" name="category_id"/>
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
