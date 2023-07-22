@extends('core.layouts.app')
@section('title', 'PROFILE')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Profile</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">ROMEO.LK</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start row -->
    <div class="row">
        <div class="col-md-12 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-widgets py-3">

                        <div class="text-center">
                            <div class="">
                               <img src="@if(Auth::user()->image != null)
                                         {{ Auth::user()->image }}
                                       @else
                                       {{ asset('/assets/images/users/avatar.png') }}
                                       @endif" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                <div class="online-circle"><i class="fas fa-circle text-success"></i></div>
                            </div>
                            <div class="mt-3 ">
                                <form action="/update_profile_image" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ Auth::user()->email }}"/>
                                    <input type="file" name="image" class="btn btn-dark">
                                    </br></br>
                                    <input type="submit" value="Change Profile Picture" class="btn btn-dark">
                                </form>
                            </div>
                            <div class="mt-3 ">
                                <a href="#" class="text-dark font-weight-medium font-size-16">{{Auth::user()->name}}</a>
                                <p class="text-body mt-1 mb-0 font-size-13">{{Auth::user()->email}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Personal Information</h5>

                    <div class="mt-3">
                        <p class="font-size-12 text-muted mb-1">Email Address</p>
                        <h6 class="">{{$user_data->email}}</h6>
                    </div>
                    <div class="mt-3">
                        <p class="font-size-12 text-muted mb-1">Office Address</p>
                        <h6 class="">No 156 1 Floor
                            Lower Street, Badulla</h6>
                    </div>

                </div>
            </div>


        </div>

        <div class="col-md-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4> Update Your Profile</h4>
                        <form action="/update_profile_data" method="POST">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="firstname">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter first name" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <label for="useremail">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{$user_data->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"/>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            </div>
                            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Update Profile"/>
                         </form>
            </div>
        </div>
    </div>


@stop
