@extends('layouts.auth.app')

@section('title', 'Login')

@section('content')
    <div class="container-fluid shadow_bottom pt-5 mt-5">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-md-5 pt-5">
                    <div class="filter_card">
                        <div class="login_header">
                            <div class="row">
                                    <div class="col">
                                        <h3 class="font-weight-bold mt-2">Log in</h3>
                                    </div>
                                </div>

                            <div class="row mb-5">
                                <div class="col pb-2">
                                    <a href="javascript:;" class="fia">
                                    <i class="fa fa-facebook fi text-primary"> </i></a><a href="javascript:;" class="fia">
                                    <i class="fa fa-apple fi text-primary"> </i></a><a href="javascript:;" class="fia">
                                    <i class="fa fa-envelope fi text-primary    "> </i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row mt-3 mb-3">
                                    <div class="col-12">
                                        <input id="email" type="email"
                                               class="form-control text-primary @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="{{ __('E-Mail Address') }}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mb-5">
                                    <div class="col-12">
                                        <input id="password" type="password"
                                               class="form-control text-primary @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0 pb-0">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Let\'s Go') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row mb-5 mt-0">
                                    <div class="col-12 text-center text-primary">
                                       <small> Don't have account? </small> Sign up Here!
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
