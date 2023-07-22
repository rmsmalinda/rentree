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

                                <form class="form-horizontal" method="GET" action="/category_update_final">
                                        @csrf

                                           <div class="form-group">
                                                <label for="category">UPDATE CATEGORY</label>
                                                <input type="hidden" name="category_id" value="{{$category_data->category_id}}"/>
                                                <input

                                                    placeholder="category_name"
                                                    id="category_name"
                                                    type="text"
                                                    class="form-control @error('category_name') is-invalid @enderror"
                                                    name="category_name"
                                                    required autocomplete="category_name"
                                                    value="{{$category_data->category_name}}"

                                                autofocus>

                                                @error('category_name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror

                                            </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">UPDATE CATEGORY</button>
                                        </div>
                                    </form>




                </div>
            </div>
        </div>
    </div>


@stop
