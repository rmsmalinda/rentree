@extends('auth.app')
@section('title', 'OTP Verification')

@section('content')

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Phone Number Verification</h5>
                                <a href="/" class="logo logo-admin mt-4">
                                    <img src="{{ asset('/img/uvalogo.png') }}" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5 text-center">
                            <div class="p-2">

                                <form class="form-horizontal" method="POST" action="#">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Enter OTP Code</label>

                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>


                                    </div>
                                    <button type="button" class="btn btn-success waves-effect waves-light">Submit</button>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Go <a href="/" class="font-weight-medium text-primary"> Home</a> </p>
                        <p>© 2020 Badulla Municipal Council. Design & Develop by <i class="mdi mdi-heart text-danger"></i> K-Mech Innovations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
