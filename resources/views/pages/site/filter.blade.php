@extends('layouts.site.app')

@section('title', 'Filter')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">

                <div class="row pt-5 ">
                    <div class="col text-center">
                        <p class="vfp">
                            Find the Best Vet for Your Pet
                        </p>
                        <p class="rvb">
                            Revolutionizing Value Based Pet Care
                        </p>
                    </div>
                </div>
                <div class=" ml-vw  pt-3">
                    <div class="row">
                        <div class="col text-center form-inline">
                            <select class="selectpicker filter_form_input ml-auto mr-auto" data-style="select-with-transition" title="Choose Pet" data-size="4">
                                <option value="2">Cats </option>
                                <option value="3">Dogs</option>
                                <option value="4">Snakes</option>
                                <option value="5">Birds</option>
                                <option value="6">Rabbits </option>
                            </select>
                            <select class="selectpicker filter_form_input ml-auto mr-auto" data-style="select-with-transition" title="Condition, Procedure, Doctor" data-size="4">
                                <option value="2">Physical Wellness Exam </option>
                                <option value="3">Dental Cleanings</option>
                                <option value="4">Dental Extractions</option>
                                <option value="5">Deworming</option>
                                <option value="6">Vacinations  </option>
                            </select>
                            <select class="selectpicker filter_form_input ml-auto mr-auto" data-style="select-with-transition" title="City, State, Zipcode" data-size="4">
                                <option value="2">000, Broadway </option>
                                <option value="3">000, Broadway</option>
                                <option value="4">000, Broadway</option>
                                <option value="5">000, Broadway</option>
                                <option value="6">000, Broadway </option>
                            </select>
                            <input type="text" class="form-control datepicker filter_form_input  ml-auto mr-auto" value="">
                            <button type="submit" class="btn btn-primary ml-auto mr-auto p-0 pt-2 pb-2 filter_form_btn"><i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="ml-vw pt-3">
                    <div class="row p-3">
                        <div class="col ct">
                            02 Providers
                        </div>
                    </div>

                    <div class="row filter_card">
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
                                <small> Price: </small>250$
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">
                            <button class="cb"> Book Dental Cleaning</button>
                        </div>
                    </div>
                    <div class="row filter_card">
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
                                <small> Price: </small>250$
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">
                            <button class="cb"> Book Dental Cleaning</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
