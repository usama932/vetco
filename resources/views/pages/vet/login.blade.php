<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vet/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('vet/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Vetco
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('vet/assets/css/material-kit.css?v=2.2.0') }}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('vet/assets/demo/demo.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vet/assets/demo/vertical-nav.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('vet/assets/css/custom.css') }}">
</head>

<body class="login-page sidebar-collapse">
<nav class="navbar navbar-transparent    fixed-top  navbar-expand-lg " id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{ asset('/assets/vet/logo_3.png') }}" class="img-fluid" width="120" alt=""> </a>

        </div>

    </div>
</nav>
<div class="page-header header-filter"
     style="background-image: linear-gradient(#ffffff, #ffffff, #cbcbc9); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
        <div class="col-xl-4 col-lg-2 col-md-3  col-12 ml-auto mr-auto mob-hide d-none d-lg-block d-xl-block">
        <img src="{{ asset('/assets/vet/Image1.png') }}" class="img-fluid" alt=""> </a>

        </div>



            <div class="col-xl-4 col-lg-8 col-md-10 col-12 ml-auto mr-auto ">
                    <div class="filter_card">
                        <!-- <div class="login_header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="font-weight-bold mt-2">Log in</h3>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col pb-2">
                                    <a href="javascript:;" class="fia" style="color:#306ed5">
                                        <i class="fa fa-facebook fi "> </i></a><a style="color:#306ed5" href="javascript:;"
                                                                                              class="fia">
                                        <i class="fa fa-apple fi "> </i></a><a style="color:#306ed5" href="javascript:;"
                                                                                           class="fia">
                                        <i class="fa fa-envelope fi "> </i></a>
                                </div>
                            </div>
                        </div> -->
                        <div class="card-body">
                        <h3 class="font-weight-bold mt-2 text-center text-dark">Log in</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row mt-3 mb-3">
                                <div class="col-12">
                                        <button class="btn btn-block btn-outline-primary pl-1 py-2"><i class="fa fa-google" style="float:left;margin-top:0px"></i><span class="text-capitalize">Log in with Google</span></button>
                                        <button class="btn btn-block btn-outline-primary pl-1 py-2"><i class="fa fa-facebook" style="float:left;margin-top:0px"></i><span class="text-capitalize">Log in with Facebook</span></button>
                                        <button class="btn btn-block btn-outline-primary pl-1 py-2"><i class="fa fa-apple" style="float:left;margin-top:0px"></i><span class="text-capitalize">Log in with Apple</span></button>

                                    </div>
                                    <div  class="d-inline-flex w-100 text-dark"><div style="display: flex; flex: 1;"><hr style="width: 95%;"></div><div  class="mt-2">OR</div><div style="display: flex; flex: 1;"><hr style="width: 95%;"></div></div>

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
                                        <button type="submit" class="btn btn-primary" style="background:#306ed5 !important">
                                            {{ __('Let\'s Go') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row mb-5 mt-0">
                                    <div class="col-12 text-center text-primary p-0">
                                        <small> Don't have account?
                                            <a href="{{ url('vet/register') }}" style="color:#306ed5" class="fw-700"> Sign up Here! </a>
                                        </small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden " style="background:#f6f6f6">

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card-body bg-transparent border-0">
                            <h2 class="card-description text-center text-dark font-weight-bold">Vet Login</h2>
                            <span class="bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">account_circle</i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" class="form-control login" placeholder="Email" required>
                                    </div>
                                </span>

                            <span class="bmd-form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control login" placeholder="Password" required>
                                    </div>
                                </span>


                            <div class="d-flex align-items-center justify-content-around mt-3 pl-5">
                                <div class="checkbox">
                                    <label class="text-dark">
                                        <input type="checkbox" name="optionsCheckboxes">
                                        Remember Me
                                    </label>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="text-italic text-dark">Forgot Password
                                        ?</a>

                                </div>
                            </div>
                            <div class="form-group row mt-3 pl-5">
                                <div class="col-12 text-center">
                                    <small class="text-dark"> Don't have account? </small> <a href="{{ route('vet.register') }}"  class="text-dark"> Sign up
                                        Here! </a>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer justify-content-center">
                            <button class="btn btn-blue">Login</button>
                        </div>
                    </div>
                </form> -->
            <div class="col-xl-4 col-lg-2 col-md-3  col-12 ml-auto mr-auto d-none d-lg-block d-xl-block">
            <img src="{{ asset('/assets/vet/image2.png') }}" class="img-fluid"  alt=""> </a>

        </div>
        </div>


    </div>

</div>
<!--   Core JS Files   -->
<script src="{{ asset('vet/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('vet/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('vet/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

{{--<!--  Google Maps Plugin    -->--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('vet/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('vet/assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('vet/assets/js/plugins/jasny-bootstrap.min.js') }}" type="text/javascript"></script>
<!--	Plugin for Small Gallery in Product Page -->
<script src="{{ asset('vet/assets/js/plugins/jquery.flexisel.js') }}" type="text/javascript"></script>
<!-- Plugins for presentation and navigation  -->
<script src="{{ asset('vet/assets/demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/demo/vertical-nav.js') }}" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js') }}"></script>
<!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
<script src="{{ asset('vet/assets/demo/demo.js') }}" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('vet/assets/js/material-kit.js?v=2.2.0') }}" type="text/javascript"></script>
</body>

</html>
