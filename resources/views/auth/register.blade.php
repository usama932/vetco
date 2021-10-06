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
                    <div class="filter_card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 col-md-2 bg-primary font-weight-bold text-white text-center rounded"> Step 01
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center text-primary">
                                    <h3 class="font-weight-bold"> Sign Up </h3>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
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
                                        <a href="{{ url('/add-pet') }}" type="button" id="" class="btn btn-primary">
                                            {{ __('Sign up') }}
                                        </a>
                                    </div>
                                </div>
                            </form>

                            <div class="form-group row mb-0">
                                <div class="col-12 text-center text-primary">
                                    <small> Already a member </small> <a href="{{ url('login') }}"
                                                                         class="font-weight-bold text-primary"> Login
                                        here! </a>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col text-center">
                                    <a href="javascript:;" class="fiar">
                                        <i class="fa fa-facebook fi fir bg-primary text-white text-center"
                                           > </i>
                                    </a>
                                    <a href="javascript:;" class="fiar">
                                        <i class="fa fa-apple fi fir bg-primary text-white text-center"
                                          > </i>
                                    </a>
                                    <a href="javascript:;" class="fiar">
                                        <i class="fa fa-envelope fi fir bg-primary text-white text-center"
                                           > </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-left mt-0 font-weight-bold" id="exampleModalLabel">Email
                        Confirmation</h3>
                    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--                        <span aria-hidden="true">&times;</span>--}}
                    {{--                    </button>--}}
                </div>
                <div class="modal-body text-secondary font-weight-bold">
                    Email has been sent, go their to confirm verification!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger ml-auto mr-auto" data-dismiss="modal">Close</button>
                    {{--                    <a href="{{ url('add-pet') }}" class="btn btn-danger ml-auto mr-auto">Open Gmail</a>--}}
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
