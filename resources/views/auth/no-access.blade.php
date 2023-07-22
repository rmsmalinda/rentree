@extends('auth.app')
@section('title', 'Can not find the data')

@section('content')

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Can not find the data</h5>
                                <a href="/" class="logo logo-admin mt-4">
                                    <img src="{{ asset('/img/uvalogo.png') }}" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5 text-center">
                            <div class="p-2">
                                <img src="{{ asset('/assets/images/access.png') }}" height="100">
                            </div>

                            <div class="p-2">
                                    <a href="/" type="button" class="btn btn-success waves-effect waves-light">Home</a>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>© 2020 Badulla Municipal Council. Design & Develop by <i class="mdi mdi-heart text-danger"></i> K-Mech Innovations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
