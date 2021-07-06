@extends('layouts.site.app')

@section('title', 'Settings')

@section('content')
    <div class="container-fluid shadow_bottom pt-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="filter_card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center text-primary">
                                    <h3 class="font-weight-bold"> Profile Update </h3>
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
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-12 text-center">
                                        <button type="button" id="" class="btn btn-primary"
                                                data-toggle="modal" data-target="#exampleModal">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                    <h3 class="modal-title text-left mt-0 font-weight-bold" id="exampleModalLabel">Success</h3>
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
                </div>
                <div class="modal-body text-secondary font-weight-bold">
                    Profile Updated Successfully.
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
