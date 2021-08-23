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
                    <div class="row">
                        <div class="col">
                            <div class="row mt-3 flex-row flex-nowrap  table-responsive" style="display: inline-flex">
                                <div class="col-12 col-md-6">
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
                                                <a href="{{ url('edit-pet') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Edit / Remove </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
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
                                                <a href="{{ url('edit-pet') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Edit / Remove </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
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
                                                <a href="{{ url('edit-pet') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Edit / Remove </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
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
                                                <a href="{{ url('edit-pet') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Edit / Remove </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
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
                                                <a href="{{ url('edit-pet') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Edit / Remove </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
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
                                                <a href="{{ url('edit-pet') }}">
                                            <span class="bg-primary text-white mp_link">
                                            Edit / Remove </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">

                            <div class="row">
                                <div class="col text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ url('add-new-pet') }}">
                                        Add New Pet
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row filter_card mt-3" style="box-shadow: 0px 1px 7px -4px;">
                        <div class="col">
                            <div class="row pt-3 pt-md-4">
                                <div class="col-6 pl-3 pl-md-5">
                                 <span class="wg_cl">
                                     Based on your pet(s), we recommend
                                 </span>
                                </div>
                                <div class="col-6 pl-3 pl-md-5 text-right">
                                     <span class="bar">
                                         <i class="fa fa-minus" aria-hidden="true"></i>
                                     </span>
                                    <span class="bar">
                                         <i class="fa fa-minus" aria-hidden="true"></i>
                                     </span>
                                    <span class="bar">
                                         <i class="fa fa-minus text-secondary" aria-hidden="true"></i>
                                     </span>
                                    <span class="bar">
                                         <i class="fa fa-minus text-secondary" aria-hidden="true"></i>
                                     </span>
                                    <span class="bar">
                                         <i class="fa fa-minus text-secondary" aria-hidden="true"></i>
                                     </span>
                                    <span class="cl_status">
                                     2/5 Completed
                                 </span>
                                </div>
                            </div>
                            <div class="row pl-3 pr-3 pl-md-5 pr-md-5">
                                <div class="col">
                                    <div class="row filter_card mt-3 " style="box-shadow: 0px 1px 7px -4px;">
                                        <div class="col-md-8 col-12">
                                            <div class="row">
                                                <span class="cl_title">
                                                    Vaccination
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span class="cl_detail">
                                                    Vetcoo recommends regular checkups once per year to catch any health problem early
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="javascript:;" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Mark up-to-date</a>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="{{ url('search') }}" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Book Appointment</a>
                                        </div>
                                    </div>
                                    <div class="row filter_card mt-3 " style="box-shadow: 0px 1px 7px -4px;">
                                        <div class="col-md-8 col-12">
                                            <div class="row">
                                                <span class="cl_title">
                                                    Vaccination
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span class="cl_detail">
                                                    Vetcoo recommends regular checkups once per year to catch any health problem early
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="javascript:;" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Mark up-to-date</a>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="{{ url('search') }}" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Book Appointment</a>
                                        </div>
                                    </div>
                                    <div class="row filter_card mt-3 " style="box-shadow: 0px 1px 7px -4px;">
                                        <div class="col-md-8 col-12">
                                            <div class="row">
                                                <span class="cl_title">
                                                    Vaccination
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span class="cl_detail">
                                                    Vetcoo recommends regular checkups once per year to catch any health problem early
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="javascript:;" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Mark up-to-date</a>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="{{ url('search') }}" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Book Appointment</a>
                                        </div>
                                    </div>
                                    <div class="row filter_card mt-3 " style="box-shadow: 0px 1px 7px -4px;">
                                        <div class="col-md-8 col-12">
                                            <div class="row">
                                                <span class="cl_title">
                                                    Vaccination
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span class="cl_detail">
                                                    Vetcoo recommends regular checkups once per year to catch any health problem early
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="javascript:;" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Mark up-to-date</a>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="{{ url('search') }}" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Book Appointment</a>
                                        </div>
                                    </div>
                                    <div class="row filter_card mt-3 " style="box-shadow: 0px 1px 7px -4px;">
                                        <div class="col-md-8 col-12">
                                            <div class="row">
                                                <span class="cl_title">
                                                    Vaccination
                                                </span>
                                            </div>
                                            <div class="row">
                                                <span class="cl_detail">
                                                    Vetcoo recommends regular checkups once per year to catch any health problem early
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="javascript:;" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Mark up-to-date</a>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <a href="{{ url('search') }}" class="btn btn-primary cl_a text-capitalize p-1 btn-block">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="row filter_card mt-3">--}}
{{--                        <div class="col">--}}
{{--                            <div class="row pt-3 pt-md-4">--}}
{{--                                <div class="col pl-3 pl-md-5">--}}
{{--                                 <span class="anp">--}}
{{--                                     Add New Pets--}}
{{--                                 </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row pt-3 pt-md-4">--}}
{{--                                <div class="col text-center">--}}
{{--                                    <img src="{{ asset('assets/vet/mp_3.png') }}" alt="" class="anp_img">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row pt-3 pt-md-4 text-center">--}}
{{--                                <div class="col-12 ">--}}
{{--                                    <label for="pet_name" class="anp_label text-primary">--}}
{{--                                        Pet name--}}
{{--                                    </label>--}}
{{--                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Name">--}}
{{--                                </div>--}}
{{--                                <div class="col-12 ">--}}
{{--                                    <label for="pet_age" class="anp_label text-primary">--}}
{{--                                        Pet Age--}}
{{--                                    </label>--}}
{{--                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Age">--}}
{{--                                </div>--}}
{{--                                <div class="col-12 ">--}}
{{--                                    <label for="pet_type" class="anp_label text-primary">--}}
{{--                                        Pet Type--}}
{{--                                    </label>--}}
{{--                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Type">--}}
{{--                                </div>--}}
{{--                                <div class="col-12 ">--}}
{{--                                    <label for="pet_breed" class="anp_label text-primary">--}}
{{--                                        Pet Breed--}}
{{--                                    </label>--}}
{{--                                    <input type="text" class="form-control wid-50 text-primary ml-auto mr-auto" placeholder="Pet Breed">--}}
{{--                                </div>--}}
{{--                                <div class="col-12 text-center pt-3 pt-md-4">--}}
{{--                                    <a href="{{ url('pet-suggestion') }}" class="btn btn-primary btn-sm text-white"> Save </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
