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
                        <div
                            class="col col-md-8 ml-auto mr-auto mt-md-4 mb-md-4 mt-2 mb-4 text-center form-inline form-border rounded">
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input"
                                    data-style="select-with-transition" title="Choose Pet" data-size="4">
                                <option value="2">Cats</option>
                                <option value="3">Dogs</option>
                                <option value="4">Snakes</option>
                                <option value="5">Birds</option>
                                <option value="6">Rabbits</option>
                            </select>
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input"
                                    data-style="select-with-transition" title="Condition, Procedure, Doctor"
                                    data-size="4">
                                <option value="2">Physical Wellness Exam</option>
                                <option value="3">Dental Cleanings</option>
                                <option value="4">Dental Extractions</option>
                                <option value="5">Deworming</option>
                                <option value="6">Vacinations</option>
                            </select>
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input"
                                    data-style="select-with-transition" title="City, State, Zipcode" data-size="4">
                                <option value="2">000, Broadway</option>
                                <option value="3">000, Broadway</option>
                                <option value="4">000, Broadway</option>
                                <option value="5">000, Broadway</option>
                                <option value="6">000, Broadway</option>
                            </select>
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input"
                                    data-style="select-with-transition" title="Radius" data-size="4">
                                <option value="2">5 miles</option>
                                <option value="2">10 miles</option>
                                <option value="2">20 miles</option>
                                <option value="2">30 miles</option>
                                <option value="2">50 miles</option>
                            </select>
                            <div class="input-group  suggestion_form_input  ml-auto mr-auto">
                                <input type="text" class="form-control datepicker input_margin">
                                <div class="input-group-append">
                                        <span class="input-group-text p-0">
                                            <i class="fa fa-calendar" aria-hidden="true"
                                               style="margin-left: -1vw; margin-right: 0.2vw;"></i>
                                        </span>
                                </div>
                            </div>
                            <a href="{{ url('search') }}" type="button"
                               class="btn btn-primary ml-auto mr-auto p-0 pt-2 pb-2 suggestion_form_btn"><i
                                    class="fa fa-search" aria-hidden="true"></i>
                            </a>
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
