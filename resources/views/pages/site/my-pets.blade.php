@extends('layouts.site.app')

@section('title', 'My Pets')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">
                <div class="ml-vw">
                    <div class="row pt-5">
                        <div class="col">
                            <span class="my_pets"> My Pets: </span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-md-4">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <img src="{{ asset('assets/vet/mp_1.png') }}" alt="" class="mp_img">
                                </div>
                                <div class="col-8 text-left">
                                    <div class="row">
                                        <span class="mp_name"> TOMI </span>
                                    </div>
                                    <div class="row">
                                        <span class="mp_type"> Dog, Persian </span>
                                    </div>
                                    <div class="row">
                                        <span class="mp_type"> 1 Year 6 months </span>
                                    </div>
                                    <div class="row">
                                        <a href="{{ url('checklist') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Well Guide Checklist </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <img src="{{ asset('assets/vet/mp_2.png') }}" alt="" class="mp_img">
                                </div>
                                <div class="col-8 text-left">
                                    <div class="row">
                                        <span class="mp_name"> Catoo </span>
                                    </div>
                                    <div class="row">
                                        <span class="mp_type"> Cat, American </span>
                                    </div>
                                    <div class="row">
                                        <span class="mp_type"> 6 weeks </span>
                                    </div>
                                    <div class="row">
                                        <a href="{{ url('checklist') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Well Guide Checklist </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row filter_card mt-3">
                        <div class="col">
                            <div class="row pt-3 pt-md-4">
                                <div class="col pl-3 pl-md-5">
                                 <span class="anp">
                                     Add New Pets
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
                                        Pet name
                                    </label>
                                    <input type="text" class="form-control w-50 text-primary ml-auto mr-auto" placeholder="Pet Name">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_age" class="anp_label text-primary">
                                        Pet Age
                                    </label>
                                    <input type="text" class="form-control w-50 text-primary ml-auto mr-auto" placeholder="Pet Age">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_type" class="anp_label text-primary">
                                        Pet Type
                                    </label>
                                    <input type="text" class="form-control w-50 text-primary ml-auto mr-auto" placeholder="Pet Type">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_breed" class="anp_label text-primary">
                                        Pet Breed
                                    </label>
                                    <input type="text" class="form-control w-50 text-primary ml-auto mr-auto" placeholder="Pet Breed">
                                </div>
                                <div class="col-12 text-center pt-3 pt-md-4">
                                    <button class="btn btn-primary btn-sm"> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
