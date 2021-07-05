@extends('layouts.auth.app')

@section('title', 'Add Pet')

@section('content')
    <div class="container-fluid shadow_bottom pt-5 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="step text-light bg-primary">1</span>
                            <span class="arrow">&#8594;</span>
                            <span class="step text-light bg-primary">2</span>
                            <span class="arrow">&#8594;</span>
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
                                <div class="col-4 col-md-2 bg-primary font-weight-bold text-white text-center rounded"> Step 02
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center text-primary">
                                    <h3 class="font-weight-bold"> Add Your Pet </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center mb-3">
                                        <input type="text" class="form-control wid-50 ml-auto mr-auto text-primary" placeholder="Pet Name">
                                </div>
                                <div class="col-12 text-center mb-3">
                                        <input type="date" class="form-control wid-50 ml-auto mr-auto text-primary" placeholder="Pet Birthdate">
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <select class="form-control wid-50 ml-auto mr-auto text-primary">
                                        <option value="">Pet Type</option>
                                        <option value="">Type 1</option>
                                        <option value="">Type 2</option>
                                    </select>
{{--                                    <select class="selectpicker w-100" data-style="select-with-transition" title="Select Pet" data-size="4">--}}
{{--                                        <option disabled> Select Pet </option>--}}
{{--                                        <option value=""> Type 1</option>--}}
{{--                                        <option value=""> Type 2</option>--}}
{{--                                        <option value=""> Type 3</option>--}}
{{--                                        <option value=""> Type 5</option>--}}
{{--                                        <option value=""> Type 6</option>--}}
{{--                                    </select>--}}
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <input type="text" class="form-control wid-50 ml-auto mr-auto text-primary" placeholder="Pet Breed">
                                </div>
                                <div class="col-12 text-center mb-3">
                                    <label for="" class="text-primary"> Does your pet have insurance? If yes, which </label>
                                    <br>
                                    <div class="ml-auto mr-auto wid-50" style="max-height: 100px; overflow-y: scroll;">
                                    <input type="checkbox" id="1" name="" value="1">
                                    <label for="1" class="text-primary"> Lorem Ipsum </label><br>
                                    <input type="checkbox" id="2" name="" value="2">
                                    <label for="2" class="text-primary"> Lorem Ipsum </label><br>
                                    <input type="checkbox" id="3" name="" value="3">
                                    <label for="3" class="text-primary"> Lorem Ipsum </label><br>
                                    <input type="checkbox" id="4" name="" value="4">
                                    <label for="4" class="text-primary"> Lorem Ipsum </label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-12 text-center">
                                    <a href="{{ url('pet-suggestion') }}" type="submit" id="register_submit" class="btn btn-primary">
                                        {{ __('Add Pet') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-script')
    <script>
    </script>
@endsection
