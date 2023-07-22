@extends('auth.app')
@section('title', 'Login')

@section('content')

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">ROMEO.LK</h5>
                                <p class="text-white-50 mb-0">Online Store Management System</p>
                                <a href="/" class="logo logo-admin mt-4">
                                    <img src="{{ asset('/img/romeo_icon.png') }}" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                                        <div class="mt-5 text-center">

                                            <p>© 2021 ROMEO.LK</p>
                                            <p>From <a href="https://k-mech.com">K-MECH</a></p>
                                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
