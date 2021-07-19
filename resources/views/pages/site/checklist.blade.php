@extends('layouts.site.app')

@section('title', 'Checklist')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">
                <div class="ml-vw pt-5">
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
                    </div>
                    <div class="row filter_card mt-3" style="box-shadow: 0px 1px 7px -4px;">
                        <div class="col">
                            <div class="row pt-3 pt-md-4">
                                <div class="col-6 pl-3 pl-md-5">
                                 <span class="wg_cl">
                                     Well guide checklist
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
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
