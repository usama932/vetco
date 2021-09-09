@extends('layouts.site.app')

@section('title', 'Suggestion')

@section('content')

    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">

                <div class="ml-vw row pt-md-2">
                    <div class="col text-lest">
                        <p class="vfp pt-md-5">
                            @guest
                            @else
                                Hey, Bailey
                            @endguest
                        </p>
                        <p class="rvb">
                            Let’s help you stay on top of your pet’s health
                        </p>
                    </div>
                </div>

                <div class=" ml-vw pt-2">
                    <div class="row">
                        <div class="col-12 col-md-12 ml-auto mr-auto custom-search-formbackground">
                            <div
                                class="row pt-md-3 mb-2 form-border custom-search-form custom-search-formcss rounded  pl-md-5 pr-md-5 ml-4 mr-4 ml-md-0 mr-md-0">
                                <div class="col-6 col-sm-4 col-md-2 p-md-0 pl-2 pr-2">
                                    <select class="selectpicker ml-auto mr-auto" data-style="select-with-transition"
                                            title="Pet Type" data-size="4" data-width="fit" data-max-options="1"
                                            >
                                        <option value="2">Cat</option>
                                        <option value="3">Dog</option>
                                        <option value="4">Snake</option>
                                        <option value="5">Bird</option>
                                        <option value="6">Rabbit</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 p-md-0 pl-2 pr-2">
                                    <select class="selectpicker ml-auto mr-auto" data-style="select-with-transition"
                                            title="Services, Procedure, Doctor" data-size="4" data-width="fit"
                                            data-max-options="1"
                                            >
                                        <option value="2">Physical Wellness Exam</option>
                                        <option value="3">Dental Cleanings</option>
                                        <option value="4">Dental Extractions</option>
                                        <option value="5">Deworming</option>
                                        <option value="6">Vacinations</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-4 col-md-3 p-md-0 pl-2 pr-2">
                                    <select class="selectpicker ml-auto mr-auto" data-style="select-with-transition"
                                            title="City, State, Zipcode" data-size="4" data-width="fit"
                                            data-live-search="true" data-max-options="1" >
                                        <option value="3">001, Broadway</option>
                                        <option value="4">002, Broadway</option>
                                        <option value="5">003, Broadway</option>
                                        <option value="6">004, Broadway</option>
                                        <option value="5">005, Broadway</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-6 col-md-2 p-md-0 pl-2 pr-2">
                                    <select class="selectpicker ml-auto mr-auto"
                                            data-style="select-with-transition" title="Radius" data-size="4"
                                            data-width="fit" data-live-search="true" data-max-options="1">
                                        <option value="2">5 miles</option>
                                        <option value="2">10 miles</option>
                                        <option value="2">20 miles</option>
                                        <option value="2">30 miles</option>
                                        <option value="2">50 miles</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-5 col-md-2 p-md-0 pl-2 pr-2">
                                    <div class="form-group p-0 m-0 mt-1">
                                        <div class="input-group date datepicker">
                                            <input type="text" class="form-control"/>
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar pt-2 mt-1 mr-2"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-1 ml-auto mr-auto col-md-1 pl-1 pr-0">
                                    <a href="{{ url('filter') }}" type="button"
                                       style="text-align:center;width: 100%;background: #306ed5;color: white;padding: 9px;"><i
                                            class="fa fa-search pt-1" aria-hidden="true"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="ml-vw pt-3">
                    <div class="row p-3">
                        <div class="col-9 aps text-left">
                            Based on your Pet gender and age
                        </div>
                        <div class="col-3 aps text-right">
                            <span class="cat-dog">
                                <span class="dog bg-primary text-white">Dog</span><span class="cat">Cat</span>
                            </span>
                        </div>
                    </div>

                    <div class="row filter_card2">
                        <div class="col-md-2 col-sm-12 text-center mb-3">
                            <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt="" width="103"
                                 height="103">
                        </div>
                        <div class="col-md-4 col-sm-12 text-left">
                            <div class="filter_card_h mb-3">
                                Physical Wellness
                            </div>
                            <div class="filter_card_i mb-2">
                                Last Visit: Lorem ipsum
                            </div>
                            <div class="filter_card_i mb-2">
                                Find a pet care doctor
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 text-right">
                            <div class="filter_card_i mb-2">
                                {{--                                <small> Price: </small>250$--}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">
                            <a href="{{ url('search') }}" type="button" class="cb"> Book Physical Wellness </a>
                        </div>
                    </div>
                    <div class="row filter_card2">
                        <div class="col-md-2 col-sm-12 text-center mb-3">
                            <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt="" width="103"
                                 height="103">
                        </div>
                        <div class="col-md-4 col-sm-12 text-left">
                            <div class="filter_card_h mb-3">
                                Dental Cleaning
                            </div>
                            <div class="filter_card_i mb-2">
                                Last Visit: Lorem ipsum
                            </div>
                            <div class="filter_card_i mb-2">
                                Find a pet care doctor
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 text-right">
                            <div class="filter_card_i mb-2">
                                {{--                                <small> Price: </small>250$--}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">
                            <a href="{{ url('search') }}" type="button" class="cb"> Book Dental Cleaning </a>
                        </div>
                    </div>

                </div>

                <div class="row ">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        $('.dog').click(function () {
            $(this).addClass('bg-primary text-white');
            $('.cat').removeClass('bg-primary text-white');
        });
        $('.cat').click(function () {
            $(this).addClass('bg-primary text-white');
            $('.dog').removeClass('bg-primary text-white');
        });
    </script>
@endsection
