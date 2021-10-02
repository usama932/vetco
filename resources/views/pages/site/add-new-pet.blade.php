@extends('layouts.site.app')

@section('title', 'My Pets')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">
                <div class="ml-vw pt-5 pb-5 vh-100">
                    <div class="row filter_card mt-3 ">
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
                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Name">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_age" class="anp_label text-primary">
                                        Pet DOB
                                    </label>
                                    <input type="date" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Age">
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_type" class="anp_label text-primary">
                                        Pet Type
                                    </label>
                                    <select class="form-control wid-50 text-primary ml-auto mr-auto" >
                                        <option value="dog">Dog</option>
                                        <option value="cat">Cate</option>
                                </select>
                                </div>
                                <div class="col-12 ">
                                    <label for="pet_breed" class="anp_label text-primary">
                                        Pet Breed
                                    </label>
                                    <select class="form-control wid-50 text-primary ml-auto mr-auto" >
                                        <option value="dog">German Shepherd</option>
                                        <option value="cat">lorem</option>
                                </select>                                </div>
                                <div class="col-12 text-center pt-3 pt-md-4">
                                    <a href="{{ url('my-pets') }}" class="btn btn-primary btn-sm text-white"> Save </a>
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
