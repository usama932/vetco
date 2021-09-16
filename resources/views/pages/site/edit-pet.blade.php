@extends('layouts.site.app')

@section('title', 'My Pets')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">
                <div class="ml-vw pt-5 pb-5 vh-100">
                    <div class="row filter_card mt-3">
                        <div class="col">
                            <div class="row pt-3 pt-md-4">
                                <div class="col pl-3 pl-md-5">
                                 <span class="anp">
                                     Edit Pet
                                 </span>
                                </div>
                            </div>
                            <div class="row pt-3 pt-md-4">
                                <div class="col text-center">
                                    <img src="{{ asset('assets/vet/mp_3.png') }}" alt="" class="anp_img">
                                </div>
                            </div>
                            <div class="row pt-3 pt-md-4 text-center">
                                <div class="col-12 ">
                                    <label for="pet_name" class="anp_label text-primary">
                                        Pet Name
                                    </label>
                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Name" value="Doggy">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_age" class="anp_label text-primary">
                                        Pet DOB
                                    </label>
                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Age" value="12/12/2010">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_type" class="anp_label text-primary">
                                        Pet Type
                                    </label>
                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Type" value="dog">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_breed" class="anp_label text-primary">
                                        Pet Breed
                                    </label>
                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Breed" value="German Shepherd">
                                </div>
                                <div class="col-12 text-center pt-3 pt-md-4">
                                    <a href="{{ url('my-pets') }}" class="btn btn-primary btn-sm text-white"> Update </a>
                                    <a href="{{ url('my-pets') }}" class="btn btn-primary btn-sm text-white"> Remove </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
