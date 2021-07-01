@extends('layouts.auth.app')

@section('title', 'Sign up')

@section('content')
    <div class="container-fluid shadow_bottom pt-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="step text-light bg-primary ">1</span>
                            <span class="arrow">&#8594;</span>
                            {{--                            <span class="arrow"> 123 </span>--}}
                            <span class="step">2</span>
                            <span class="arrow text-white">&#8594;</span>
                            <span class="step">3</span>
                        </div>
                        <div class="col-12 text-center pt-3">
                            <span class="text-primary span_text"> Sign Up </span>
                            <span class="text-primary span_text"> Add Your Pet </span>
                            <span class="text-primary span_text"> Get Started </span>
                        </div>
                    </div>
                    <div class="card" style="background: #e1e1e1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 bg-primary font-weight-bold text-white text-center rounded"> Step 01
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center text-primary">
                                    <h3 class="font-weight-bold"> Sign Up </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="First Name"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="Last Name"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-envelope text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="Email"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-phone text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="Phone Number"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-address-book text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="Address"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-fort-awesome text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="City"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-university text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="State"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-flickr text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="Zipcode"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-lock text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary" placeholder="Password"
                                               aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="input-group mb-3 w-50 ml-auto mr-auto">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-lock text-primary" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control text-primary"
                                               placeholder="Confirm Password" aria-label="Username"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-12 text-center">
                                    <input type="checkbox" id="agree_checkbox" name="agree_checkbox" value="1">
                                    <label for="agree_checkbox"> Agree to <a href="#"> TERM & CONDITION </a></label>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" id="register_submit" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                                        {{ __('Sign up') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-12 text-center text-primary">
                                    <small> Don't have account? </small> Sign up Here!
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col text-right">
                                    <i class="fa fa-facebook fi bg-primary text-white"
                                       style="width: 2.2vw; padding: 0.7vw;"> </i>
                                    <i class="fa fa-apple fi bg-primary text-white"
                                       style="width: 2.2vw; padding: 0.7vw;"> </i>
                                    <i class="fa fa-envelope fi bg-primary text-white"
                                       style="width: 2.2vw; padding: 0.7vw;"> </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-left mt-0 font-weight-bold" id="exampleModalLabel">Email onfirmation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-primary font-weight-bold..
 ">
                    Email has been sent, go their to confirm verification!
                </div>
                <div class="modal-footer">
                    <a href="{{ url('add-pet') }}" class="btn btn-primary ml-auto mr-auto">Open Gmail</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        $('#register_submit').click(function () {
            // alert(123);
        });
    </script>
@endsection
