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
                            <select name="" id="" class="form-control ml-auto mr-auto filter_form_input">
                                <option value="">Dogs</option>
                            </select>
                            <select name="" id="" class="form-control ml-auto mr-auto filter_form_input">
                                <option value="">Dental</option>
                            </select>
                            <select name="" id="" class="form-control ml-auto mr-auto filter_form_input">
                                <option value="">Florida</option>
                            </select>
                            <input type="date" name="" id="" class="form-control ml-auto mr-auto filter_form_input">
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
