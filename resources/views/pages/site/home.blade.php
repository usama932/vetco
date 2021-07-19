@extends('layouts.site.app')

@section('title', 'Home')

@section('content')
    <div class="content p-0">
        <div class="content">
            <div class="container-fluid">

                <div class="row pt-md-5 pt-3 shadow_bottom vh-92">
                    <div class="col-md col-sm-12 w-100 p-0 text-center pt-md-5 mob-hide">
                        <img src="{{ asset('assets/vet/Ill2.png') }}" alt="" class="vfp_img">
                    </div>
                    <div class="col-md-5 col-sm-12 text-center pt-md-5">
                        <p class="vfp">
                            Find the Best Vet for Your Pet
                        </p>
                        <p class="rvb">
                            Revolutionizing Transparency in Healthcare
                        </p>
                        <div class="col-12 w-100 text-center desk-hide pb-4">
                            <img src="{{ asset('assets/vet/Ill2.png') }}" alt="" class="vfp_img">
                        </div>
{{--                        <div class="row pt-md-3 pb-4">--}}
{{--                            <div class="col text-center form-inline pl-md-5 pr-md-5 form-border rounded ml-4 mr-4 ml-md-0 mr-md-0">--}}
{{--                                <select class="selectpicker filter_form_input ml-auto mr-auto"--}}
{{--                                        data-style="select-with-transition" title="Choose Pet" data-size="4">--}}
{{--                                    <option value="2">Cats</option>--}}
{{--                                    <option value="3">Dogs</option>--}}
{{--                                    <option value="4">Snakes</option>--}}
{{--                                    <option value="5">Birds</option>--}}
{{--                                    <option value="6">Rabbits</option>--}}
{{--                                </select>--}}
{{--                                <select class="selectpicker filter_form_input ml-auto mr-auto"--}}
{{--                                        data-style="select-with-transition" title="Condition, Procedure, Doctor"--}}
{{--                                        data-size="4">--}}
{{--                                    <option value="2">Physical Wellness Exam</option>--}}
{{--                                    <option value="3">Dental Cleanings</option>--}}
{{--                                    <option value="4">Dental Extractions</option>--}}
{{--                                    <option value="5">Deworming</option>--}}
{{--                                    <option value="6">Vacinations</option>--}}
{{--                                </select>--}}
{{--                                <select class="selectpicker filter_form_input ml-auto mr-auto"--}}
{{--                                        data-style="select-with-transition" title="City, State, Zipcode" data-size="4">--}}
{{--                                    <option value="2">000, Broadway</option>--}}
{{--                                    <option value="3">000, Broadway</option>--}}
{{--                                    <option value="4">000, Broadway</option>--}}
{{--                                    <option value="5">000, Broadway</option>--}}
{{--                                    <option value="6">000, Broadway</option>--}}
{{--                                </select>--}}

{{--                                <div class="input-group  filter_form_input  ml-auto mr-auto">--}}
{{--                                    <input type="text" class="form-control datepicker input_margin">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <span class="input-group-text p-0">--}}
{{--                                            <i class="fa fa-calendar" aria-hidden="true" style="margin-left: -1vw; padding-right: 0.2vw;"></i>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <a href="{{ url('filter') }}" type="button"--}}
{{--                                        class="btn btn-primary ml-auto mr-auto p-0 pt-2 pb-2 filter_form_btn text-white"><i--}}
{{--                                        class="fa fa-search" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row pt-md-3 mb-4 form-border search-form rounded  pl-md-5 pr-md-5 ml-4 mr-4 ml-md-0 mr-md-0">
                            <div class="col-4 col-sm-4 col-md-2 p-0">
                                <select class="selectpicker ml-auto mr-auto"
                                        data-style="select-with-transition" title="Pet Type" data-size="4">
                                    <option value="2">Cats</option>
                                    <option value="3">Dogs</option>
                                    <option value="4">Snakes</option>
                                    <option value="5">Birds</option>
                                    <option value="6">Rabbits</option>
                                </select>
                            </div>
                            <div class="col-8 col-sm-8 col-md-4 p-0">

                                <select class="selectpicker ml-auto mr-auto"
                                        data-style="select-with-transition" title="Services, Procedure, Doctor"
                                        data-size="4">
                                    <option value="2">Physical Wellness Exam</option>
                                    <option value="3">Dental Cleanings</option>
                                    <option value="4">Dental Extractions</option>
                                    <option value="5">Deworming</option>
                                    <option value="6">Vacinations</option>
                                </select>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 p-0">

                                <select class="selectpicker ml-auto mr-auto"
                                        data-style="select-with-transition" title="City, State, Zipcode" data-size="4">
                                    <option value="2">000, Broadway</option>
                                    <option value="3">000, Broadway</option>
                                    <option value="4">000, Broadway</option>
                                    <option value="5">000, Broadway</option>
                                    <option value="6">000, Broadway</option>
                                </select>
                            </div>
                            <div class="col-6 col-sm-5 col-md-2 p-0" style="display: flex;">
                                <input type="text" class="form-control datepicker mt-1">
                                            <i class="fa fa-calendar" aria-hidden="true" style="margin-left: -17px;margin-top: 13px;margin-right: 5px;"></i>
                            </div>
                            <div class="col-6 col-sm-1 ml-auto mr-auto col-md-1 pl-1 pr-1">
                                <a href="{{ url('filter') }}" type="button" style="text-align:center;width: 100%;background: #03388b;color: white;margin: 2px;margin-top: 6px;padding: 3px;margin-bottom: 10px;border-radius: 6px;"><i
                                        class="fa fa-search pt-1" aria-hidden="true"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md col-sm-12 w-100 p-0 text-center pt-md-5 mob-hide">
                        <img src="{{ asset('assets/vet/Ill3.png') }}" alt="" class="vfp_img2">
                    </div>
                </div>

                <div class="row pt-2 pl-md-4 pr-md-4 pb-5 pl-2 pr-2 vh-100" id="about_us" style="background: #f0f0ef">
                    <div class="col-12 pt-md-5">
                        <p class="as text-center">
                            About us
                        </p>
                        <p class="asd pt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit venenatis risus sed
                            malesuada. Donec tincidunt acum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                            venenatis risus sed
                            malesuada. Donec tincidunt acum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                            venenatis risus sed
                            malesuada. Donec tincidunt ac sapien ut accumsan. Proin finibus congue lectus quis iaculis.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit venenatis risus sed
                            malesuada. Donec tincidunt acum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                            venenatis risus sed
                            malesuada. Donec tincidunt acum dolor sit amet, consectetur adipiscing elit. Donec hendrerit
                            venenatis risus sed
                            malesuada. Donec tincidunt ac sapien ut accumsan. Proin finibus congue lectus quis iaculis.
                        </p>
                    </div>
{{--                    <div class="col-md-3 col-6 pl-3 pr-3">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col text-center pt-5">--}}
{{--                                        <img src="{{ asset('assets/vet/dogi.png') }}" alt="" class="asc">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col text-center">--}}
{{--                                        <p class="ct pt-3 text-primary">--}}
{{--                                            Woof woof!--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col text-left">--}}
{{--                                        <p class="cd pt-3">--}}
{{--                                            Lorem Ipsum is simply dummy text of the--}}
{{--                                            printingand typesetting industry.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col text-center pt-5 pb-2">--}}
{{--                                        <button class="cb  btn btn-primary"> Learn more</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-3 col-6 pl-1 pr-1 pl-md-3 pr-md-3">
                        <div class="card mt-1 mb-1 mt-md-4 mb-md-4">
                            <div class="card-body p-xl-4 p-lg-3 p-md-2 p-sm-4 p-2">
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-4 pt-md-3 pt-sm-4 pt-2">
                                        <img src="{{ asset('assets/vet/dogi.png') }}" alt="" class="asc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="ct pt-3 text-primary">
                                            Woof woof!
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="cda pt-md-3 pt-1">
                                            Lorem Ipsum is simply dummy text of the
                                            printingand typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-3 pt-md-1 pt-1 pb-md-2 pb-1">
                                        <button class="cba btn btn-primary"> Learn more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 pl-1 pr-1 pl-md-3 pr-md-3">
                        <div class="card mt-1 mb-1 mt-md-4 mb-md-4">
                            <div class="card-body p-xl-4 p-lg-3 p-md-2 p-sm-4 p-2">
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-4 pt-md-3 pt-sm-4 pt-2">
                                        <img src="{{ asset('assets/vet/catt.png') }}" alt="" class="asc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="ct pt-3 text-primary">
                                            Meow!
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="cda pt-md-3 pt-1">
                                            Lorem Ipsum is simply dummy text of the
                                            printingand typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-3 pt-md-1 pt-1 pb-md-2 pb-1">
                                        <button class="cba btn btn-primary"> Learn more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 pl-1 pr-1 pl-md-3 pr-md-3">
                        <div class="card mt-1 mb-1 mt-md-4 mb-md-4">
                            <div class="card-body p-xl-4 p-lg-3 p-md-2 p-sm-4 p-2">
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-4 pt-md-3 pt-sm-4 pt-2">
                                        <img src="{{ asset('assets/vet/Snake.png') }}" alt="" class="asc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="ct pt-3 text-primary">
                                            ssssssss!
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="cda pt-md-3 pt-1">
                                            Lorem Ipsum is simply dummy text of the
                                            printingand typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-3 pt-md-1 pt-1 pb-md-2 pb-1">
                                        <button class="cba btn btn-primary"> Learn more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 pl-1 pr-1 pl-md-3 pr-md-3">
                        <div class="card mt-1 mb-1 mt-md-4 mb-md-4">
                            <div class="card-body p-xl-4 p-lg-3 p-md-2 p-sm-4 p-2">
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-4 pt-md-3 pt-sm-4 pt-2">
                                        <img src="{{ asset('assets/vet/bird.png') }}" alt="" class="asc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="ct pt-3 text-primary">
                                            Cheep Cheep!
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <p class="cda pt-md-3 pt-1">
                                            Lorem Ipsum is simply dummy text of the
                                            printingand typesetting industry.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center pt-xl-5 pt-lg-3 pt-md-1 pt-1 pb-md-2 pb-1">
                                        <button class="cba btn btn-primary"> Learn more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row shadow_bottom">
                    <div class="col-12">
                        <div class="row p-5">
                            <div class="col-md-6 col-sm-12">
                                <p class="ap text-center">
                                    About Pets
                                </p>
                                <p class="aps pt-4 text-center">
                                    (Revolutionizing Transparency in Healthcare)
                                </p>
                                <p class="asd pt-4 text-justify">
                                    Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type
                                    specimen book.
                                    Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type
                                    specimen book.
                                    Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a
                                    galley of type and scrambled it to make a type
                                    specimen book.
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <img src="{{ asset('assets/vet/Ill1.png') }}" alt="" class="ap_img">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row p-5">
                            <div class="col-12">
                                <p class="mps">
                                    Most Popular Services
                                </p>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="card mps-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt=""
                                                     class="mps_img">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="mps_t">
                                                    Dental Cleanings
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="card mps-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="{{ asset('assets/vet/teeth_cleaning_2.png') }}" alt=""
                                                     class="mps_img">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="mps_t">
                                                    Dental Extractions
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="card mps-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="{{ asset('assets/vet/Oral_Surgery_f.png') }}" alt=""
                                                     class="mps_img">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="mps_t">
                                                    Oral Surgery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="card mps-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="{{ asset('assets/vet/Parasite_Protection.png') }}" alt=""
                                                     class="mps_img">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="mps_t">
                                                    Parasite Protection
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-12">
                                <div class="card mps-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="{{ asset('assets/vet/Vaccinations_f.png') }}" alt=""
                                                     class="mps_img">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <p class="mps_t">
                                                    Vaccinations
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
