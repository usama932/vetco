<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vet/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('vet/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Vetco
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('vet/assets/css/material-kit.css?v=2.2.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('vet/assets/demo/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('vet/assets/demo/vertical-nav.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vet/assets/css/custom.css') }}">
    <style>
        .active {
            background-color: #ffffff;
            color: var(--white);
            border-radius: 4px;
        }

        .nav-pills .nav-item .nav-link.active {
            color: #fff !important;
            background-color: #5a95cd;
            box-shadow: 0 5px 20px 0px rgb(0 0 0 / 20%), 0 13px 24px -11px rgb(90 149 205);
        }
        .togglebutton label input[type=checkbox]:checked + .toggle {
    background-color: rgb(76 127 175);
        }
        .togglebutton label input[type=checkbox]:checked + .toggle:after {
    border-color: #4e81b1;
}
    </style>
</head>

<body class="login-page sidebar-collapse">
    <nav class="navbar navbar-transparent    fixed-top  navbar-expand-lg " id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="{{ asset('/assets/vet/logo_3.png') }}" class="img-fluid" width="120" alt="">
                </a>

            </div>

        </div>
    </nav>
    <div class="page-header header-filter"
         style="background:white">
        <div class="container" style="padding-top: 9vh;">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-12 ml-auto mr-auto">

                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#about" data-toggle="tab" role="tab" id="tab1" style="border: 1px solid #5a95cd;font-size: 1.6vw;min-width:0px !important">
                                1
                            </a>
                        </li>
                        <li class="nav-item">
                            <span class="arrow" style="font-size: 3vw;padding-left: 2vw;padding-right: 2vw; color: #306ed5;">→</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#account" data-toggle="tab" role="tab" id="tab2" style="border: 1px solid #5a95cd;font-size: 1.6vw;min-width:0px !important">
                                2
                            </a>
                        </li>


                    </ul>
                    <div class="wizard-container">
                        <div class="card card-wizard" data-color="info" id="wizardProfile" style="background:#f6f6f6">
                            <form action="" method="">
                                <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                                <div class="card-headers text-center">
                                    <h3 class="card-title text-primary">
                                        Vet Sign Up
                                    </h3>
                                    <!-- <h5 class="card-description">This information will let us know more about you.</h5> -->
                                </div>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="about" style="background:#f6f6f6">
                                            <!-- <h5 class="info-text text-dark"> Let's start with the basic information (with validation)</h5> -->
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col-lg-6 col-sm-10">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('first_name') is-invalid @enderror"
                                                                       placeholder="First Name" value="{{ old('first_name') }}"
                                                                       aria-label="Username" name="first_name"
                                                                       aria-describedby="basic-addon1">
                                                                @error('first_name')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('last_name') is-invalid @enderror"
                                                                       placeholder="Last Name" value="{{ old('last_name') }}"
                                                                       aria-label="Username" name="last_name"
                                                                       aria-describedby="basic-addon1">
                                                                @error('last_name')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('email') is-invalid @enderror"
                                                                       placeholder="Email" value="{{ old('email') }}"
                                                                       aria-label="Username" name="email" aria-describedby="basic-addon1">
                                                                @error('email')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-lock text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="password"
                                                                       class="form-control text-primary @error('password') is-invalid @enderror"
                                                                       placeholder="Password" id="password" name="password"
                                                                       aria-label="Username" value=""
                                                                       aria-describedby="basic-addon1">
                                                                @error('password')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-lock text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="password" class="form-control text-primary"
                                                                       placeholder="Confirm Password" name="password_confirmation"
                                                                       aria-label="Username" id="password_confirmation"
                                                                       aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-phone text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('phone') is-invalid @enderror"
                                                                       placeholder="Phone Number" value="{{ old('phone') }}"
                                                                       aria-label="Username" name="phone" aria-describedby="basic-addon1">
                                                                @error('phone')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-address-book text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('address') is-invalid @enderror"
                                                                       placeholder="Address" value="{{ old('address') }}"
                                                                       aria-label="Username" name="address" aria-describedby="basic-addon1">
                                                                @error('address')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-fort-awesome text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('city') is-invalid @enderror"
                                                                       placeholder="City" value="{{ old('city') }}"
                                                                       aria-label="Username" name="city" aria-describedby="basic-addon1">
                                                                @error('city')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-university text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('state') is-invalid @enderror"
                                                                       placeholder="State" value="{{ old('state') }}"
                                                                       aria-label="Username" name="state" aria-describedby="basic-addon1">
                                                                @error('state')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">
                                                                        <i class="fa fa-flickr text-primary" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <input type="text"
                                                                       class="form-control text-primary @error('zip') is-invalid @enderror"
                                                                       placeholder="Zipcode" value="{{ old('zip') }}"
                                                                       aria-label="Username" name="zip" aria-describedby="basic-addon1">
                                                                @error('zip')
                                                                <span class="invalid-feedback text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <div class="col-12 text-center">
                                                            <input type="checkbox" id="agree_checkbox" name="agreement"
                                                                   class="@error('agreement') is-invalid @enderror"
                                                                   value="1" {{(old('agreement') && old('agreement') == 1) ? 'checked' : ''}}>
                                                            <label for="agree_checkbox"> Agree to <a href="{{ url('/privacy') }}"> TERMS & CONDITIONS </a></label>
                                                            @error('agreement')
                                                            <span class="invalid-feedback text-danger" role="alert" style="display: block;">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            {{--                                        <button type="button" id="" class="btn btn-primary"--}}
                                                            {{--                                                data-toggle="modal" data-target="#exampleModal">--}}
                                                            {{--                                            {{ __('Sign up') }}--}}
                                                            {{--                                        </button>--}}
                                                            <a href="javascript:void(0)" onclick="next()" type="button" id="" class="btn btn-primary">
                                                                {{ __('Continue') }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wizard-navigation">
                                                <ul class="nav nav-pills">
                                                    <!-- <li class="nav-item">
                          <a class="nav-link active" href="#about" data-toggle="tab" role="tab"  id="tab1">
                            1
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#account" data-toggle="tab" role="tab"  id="tab2">
                          2
                          </a>
                        </li>                       -->
                                                    <!-- <li class="btn btn-secondary">
                          <a class="text-dark" href="javascript:void(0)" onclick="next()">
                          Next
                          </a>
                        </li>
                        <li class="btn btn-secondary">
                         <label> Already have an account? <a
                                          href="{{ url('vet/login') }}" class="text-blue font-weight-bold"> Log in
                                          Here! </a></label>
                        </li> -->

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="account" style="background:#f6f6f6">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10 col-lg-8 col-sm-12">
                                                <div id="accordion" role="tablist">

                                                     <div class="col-12">
                                                         <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#bd-example-modal-sm">Hours</button>
                                                     </div>
                                                   <div class="col-12 " id="hour"  style=" display:none;   color: black;background: #b7b7b7;">

                                                    <div class="col-12">
                                                        <div class="row" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
                                                            <div class="col-6">
                                                            Monday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-2" onclick="closemodal()" >
                                                            <div class="col-6">
                                                            Tuesday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-2" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
                                                            <div class="col-6">
                                                            Wednesday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-2" onclick="closemodal()">
                                                            <div class="col-6">
                                                            Thursday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-2" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
                                                            <div class="col-6">
                                                            Friday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-2" onclick="closemodal()">
                                                            <div class="col-6">
                                                            Saturday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mt-2" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
                                                            <div class="col-6">
                                                            Sunday
                                                            </div>
                                                            <div class="col-6 text-right">
                                                                7AM-10AM
                                                          </div>
                                                        </div>
                                                    </div>

                                                   </div>
                                                    <div class="col-12 text-center">
                                                        <div class="input-group mb-1 wid-50 ml-auto mr-auto">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    Pet Type:
                                                                </span>
                                                            </div>
                                                            <select class="form-control">
                                                                <option disabled selected value="---Select---">
                                                                    ---Select pet type---
                                                                </option>
                                                                <option value="1">
                                                                    lorem
                                                                </option>
                                                                <option value="2">
                                                                    lorem
                                                                </option>
                                                            </select>
                                                            @error('first_name')
                                                            <span class="invalid-feedback text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <div class="input-group px-2 mb-1 wid-50 ml-auto mr-auto">
                                                            <!-- <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    Service Type:
                                                                </span>
                                                            </div>

                                                            @error('first_name')
                                                            <span class="invalid-feedback text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror -->
                                                            <select class="form-control">
                                                                <option disabled selected value="Select">
                                                                    Select Service type
                                                                </option>
                                                                <option value="1">
                                                                    lorem
                                                                </option>
                                                                <option value="2">
                                                                    lorem
                                                                </option>
                                                            </select>
                                                            <select class="form-control">
                                                                <option disabled selected value="Select">
                                                                    Select Service Price
                                                                </option>
                                                                <option value="1">
                                                                    $ 100
                                                                </option>
                                                                <option value="2">
                                                                    $ 200
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <input type="button" onclick="clicksave()" style="background-color:#5a95cd" class="btn btn-next btn-fill btn-info btn-wd" name="Submit" value="Submit for Approval">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <label>
                                        Already a member ? <a href="{{ url('vet/login') }}" class="text-blue font-weight-bold"> Login here! </a>
                                    </label>

                                </div>
                                <div class="col text-center">
                                    <a href="{{ route('login.facebook') }}" class="fiar">
                                        <i class="fa fa-facebook fi fir bg-primary text-white text-center"> </i>
                                    </a>
                                    <a href="" class="fiar">
                                        <i class="fa fa-apple fi fir bg-primary text-white text-center"> </i>
                                    </a>
                                    <a href="{{ route('login.google') }}" class="fiar">
                                        <i class="fa fa-envelope fi fir bg-primary text-white text-center"> </i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="bd-example-modal-sm" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <h4>Hours</h4>
          <table>
            <tbody>
              <tr>
                <th style="width:10%"></th>
                <th style="width:20%"></th>
                <th style="width:30%"><div class="row"><div class="col-6">Open At</div> <div class="col-6">Close At</div> </th>
              </tr>
              <tr>
                <td>Sunday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Monday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Friday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Sunday</td>
                <td>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked="" onchange="checkbox(this)">
                      <span class="toggle"></span>
                      <span id="labeltext">Open</span>
                    </label>
                  </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-6">
                       <input type="time" class="form-control" />
                    </div>
                    <div class="col-6">
                      <input type="time" class="form-control" />
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="col-12 text-right">
            <button class="btn btn-primary" type="button" onclick="showhours()" style="background-color: #2f6bcf;border-color: #2f6bcf;">Apply</button>

          </div>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade bd-example-modal-sm" id="bd-example-modal-sm1" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="mt-1 mb-1 py-0"><b>Hours</b></h4>
          </div>
        <div class="modal-body pt-2">
          <div class="row" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
              <div class="col-6">
              Monday
              </div>
              <div class="col-6 text-right">
                  7AM-10AM
            </div>
          </div>
          <div class="row mt-2" onclick="closemodal()" >
            <div class="col-6">
            Tuesday
            </div>
            <div class="col-6 text-right">
                7AM-10AM
          </div>
        </div>
        <div class="row mt-2" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
            <div class="col-6">
            Wednesday
            </div>
            <div class="col-6 text-right">
                7AM-10AM
          </div>
        </div>

        <div class="row mt-2" onclick="closemodal()">
            <div class="col-6">
            Thursday
            </div>
            <div class="col-6 text-right">
                7AM-10AM
          </div>
        </div>

        <div class="row mt-2" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
            <div class="col-6">
            Friday
            </div>
            <div class="col-6 text-right">
                7AM-10AM
          </div>
        </div>
        <div class="row mt-2" onclick="closemodal()">
            <div class="col-6">
            Saturday
            </div>
            <div class="col-6 text-right">
                7AM-10AM
          </div>
        </div>

        <div class="row mt-2" onclick="closemodal()" style="background: #dfe7e7;cursor: pointer;">
            <div class="col-6">
            Sunday
            </div>
            <div class="col-6 text-right">
                7AM-10AM
          </div>
        </div>
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
    <script src="{{ asset('vet/assets/js/plugins/jquery.bootstrap-wizard.js') }}" type="text/javascript"></script>

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function clicksave() {
            Swal.fire('You did this, great!');
        }
        $(document).ready(function () {
            // Initialise the wizard
            demo.initMaterialWizard();
            setTimeout(function () {
                $('.card.card-wizard').addClass('active');
            }, 600);
        });

        function next() {
            $("#tab2").click();
            $("#tab2").click();
        }


        function previous() {
            $("#tab1").click();
            $("#tab1").click();
        }

         function showhours()
         {
             $('#hour').css("display","block");
             $('#bd-example-modal-sm').modal("hide");

         }
        // function mynav1() {
        //     alert("1");
        //     $("#about").show();
        // }


        // function mynav2() {
        //     alert("2");
        //     $("#tab2").account();
        // }

        function closemodal()
        {
            $('#bd-example-modal-sm').modal("hide");
        }
    </script>
</body>

</html>
