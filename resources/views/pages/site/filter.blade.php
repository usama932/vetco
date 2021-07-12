@extends('layouts.site.app')

@section('title', 'Filter')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col text-center pt-md-5">
                        <p class="vfpf pt-md-5">
                            Find the Best Vet for Your Pet
                        </p>
                        <p class="rvb">
                            Revolutionizing Transparency in Healthcare
                        </p>
                    </div>
                </div>
                <div class=" ml-vw  pt-3">
                    <div class="row">
                        <div
                            class="col-md-8 text-center form-inline form-border rounded ml-auto mr-auto mt-2 mb-2 mb-md-4 mt-md-4">
                            <select class="selectpicker filter_form_input ml-auto mr-auto"
                                    data-style="select-with-transition" title="Choose Pet" data-size="4">
                                <option value="2">Cats</option>
                                <option value="3">Dogs</option>
                                <option value="4">Snakes</option>
                                <option value="5">Birds</option>
                                <option value="6">Rabbits</option>
                            </select>
                            <select class="selectpicker filter_form_input ml-auto mr-auto"
                                    data-style="select-with-transition" title="Condition, Procedure, Doctor"
                                    data-size="4">
                                <option value="2">Physical Wellness Exam</option>
                                <option value="3">Dental Cleanings</option>
                                <option value="4">Dental Extractions</option>
                                <option value="5">Deworming</option>
                                <option value="6">Vacinations</option>
                            </select>
                            <select class="selectpicker filter_form_input ml-auto mr-auto"
                                    data-style="select-with-transition" title="City, State, Zipcode" data-size="4">
                                <option value="2">000, Broadway</option>
                                <option value="3">000, Broadway</option>
                                <option value="4">000, Broadway</option>
                                <option value="5">000, Broadway</option>
                                <option value="6">000, Broadway</option>
                            </select>
                            <div class="input-group  filter_form_input  ml-auto mr-auto">
                                <input type="text" class="form-control datepicker input_margin">
                                <div class="input-group-append">
                                        <span class="input-group-text p-0">
                                            <i class="fa fa-calendar" aria-hidden="true"
                                               style="margin-left: -1vw; margin-right: 0.2vw;"></i>
                                        </span>
                                </div>
                            </div>
                            <a href="{{ url('search') }}" type="button"
                               class="btn btn-primary ml-auto mr-auto p-0 pt-2 pb-2 filter_form_btn"><i
                                    class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ml-vw pt-3">
                    <div class="row p-3">
                        <div class="col ct">
                            02 Providers
                        </div>
                    </div>

                    <div class="filter_sec">
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

                <div class="row"></div>
            </div>
        </div>
    </div>
@endsection
