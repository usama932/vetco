@extends('layouts.auth.app')

@section('title', 'Login')

@section('content')
    <div class="container-fluid shadow_bottom ">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 ml-auto mr-auto pt-5 pb-5">
                    <div class="filter_card pt-0">
                        <!-- <div class="login_header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="font-weight-bold mt-2">Log in</h3>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col pb-2">
                                    <a href="javascript:;" class="fia">
                                        <i class="fa fa-facebook fi text-primary"> </i></a><a href="javascript:;"
                                                                                              class="fia">
                                        <i class="fa fa-apple fi text-primary"> </i></a><a href="javascript:;"
                                                                                           class="fia">
                                        <i class="fa fa-envelope fi text-primary    "> </i></a>
                                </div>
                            </div>
                        </div> -->
                        <div class="card-body pt-0">
                        <h3 class="font-weight-bold mt-2 text-center">Log in</h3>
                        <div class="col-12">
                            <a href="{{ route('login.google') }}"><button class="btn btn-block btn-outline-primary pl-1 py-2"><i class="fa fa-google" style="float:left;margin-top:0px"></i><span class="text-capitalize">Log in with Google</span></button></a>
                            <a href="{{ route('login.facebook') }}"><button class="btn btn-block btn-outline-primary pl-1 py-2"><i class="fa fa-facebook" style="float:left;margin-top:0px"></i><span class="text-capitalize">Log in with Facebook</span></button></a>
                            <a href="{{ route('login.apple') }}"><button class="btn btn-block btn-outline-primary pl-1 py-2"><i class="fa fa-apple" style="float:left;margin-top:0px"></i><span class="text-capitalize">Log in with Apple</span></button></a>


                        </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row mt-3 mb-3">

                                    <div  class="d-inline-flex w-100"><div style="display: flex; flex: 1;"><hr style="width: 95%;"></div><div  class="mt-2">OR</div><div style="display: flex; flex: 1;"><hr style="width: 95%;"></div></div>
                                    <div class="col-12 mt-3">
                                        <input id="email" type="email"
                                               class="form-control text-primary @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="{{ __('E-Mail Address') }}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mb-3">
                                    <div class="col-12">
                                        <input id="password" type="password"
                                               class="form-control text-primary @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password"
                                               placeholder="{{ __('Password') }}">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mt-3 mb-5">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value=""> Remember Me
                                                <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                            </label>
                                        </div>
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
                                    <div class="col-12 text-center text-primary p-0">
                                        <small> Don't have account?
                                            <a href="{{ route('register') }}" class="fw-700"> Sign up Here! </a>
                                        </small>
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
