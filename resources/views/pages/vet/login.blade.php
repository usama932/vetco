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
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('vet/assets/img/logo.png') }}" class="img-fluid" width="120" alt=""> </a>

        </div>

    </div>
</nav>
<div class="page-header header-filter"
     style="background-image: url('./assets/img/bg.png'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-19 col-12 ml-auto mr-auto">


                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden border-0 bg-transparent no-shadow">

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card-body bg-transparent border-0">
                            <h2 class="card-description text-center text-white font-weight-bold">Vet Login</h2>
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
                                    <label class="text-white">
                                        <input type="checkbox" name="optionsCheckboxes">
                                        Remember Me
                                    </label>
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="text-italic text-white">Forgot Password
                                        ?</a>

                                </div>
                            </div>
                            <div class="form-group row mt-3 pl-5">
                                <div class="col-12 text-center">
                                    <small class="text-white"> Don't have account? </small> <a href="{{ url('vet/register') }}"  class="text-white"> Sign up
                                        Here! </a>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer justify-content-center">
                            <button class="btn btn-blue">Login</button>
                        </div>
                    </div>
                </form>
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
