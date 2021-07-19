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
                    {{--                    <div class="row">--}}
                    {{--                        <div--}}
                    {{--                            class="col-md-8 text-center form-inline form-border rounded ml-auto mr-auto mt-2 mb-2 mb-md-4 mt-md-4">--}}
                    {{--                            <select class="selectpicker filter_form_input ml-auto mr-auto"--}}
                    {{--                                    data-style="select-with-transition" title="Choose Pet" data-size="4">--}}
                    {{--                                <option value="2">Cats</option>--}}
                    {{--                                <option value="3">Dogs</option>--}}
                    {{--                                <option value="4">Snakes</option>--}}
                    {{--                                <option value="5">Birds</option>--}}
                    {{--                                <option value="6">Rabbits</option>--}}
                    {{--                            </select>--}}
                    {{--                            <select class="selectpicker filter_form_input ml-auto mr-auto"--}}
                    {{--                                    data-style="select-with-transition" title="Condition, Procedure, Doctor"--}}
                    {{--                                    data-size="4">--}}
                    {{--                                <option value="2">Physical Wellness Exam</option>--}}
                    {{--                                <option value="3">Dental Cleanings</option>--}}
                    {{--                                <option value="4">Dental Extractions</option>--}}
                    {{--                                <option value="5">Deworming</option>--}}
                    {{--                                <option value="6">Vacinations</option>--}}
                    {{--                            </select>--}}
                    {{--                            <select class="selectpicker filter_form_input ml-auto mr-auto"--}}
                    {{--                                    data-style="select-with-transition" title="City, State, Zipcode" data-size="4">--}}
                    {{--                                <option value="2">000, Broadway</option>--}}
                    {{--                                <option value="3">000, Broadway</option>--}}
                    {{--                                <option value="4">000, Broadway</option>--}}
                    {{--                                <option value="5">000, Broadway</option>--}}
                    {{--                                <option value="6">000, Broadway</option>--}}
                    {{--                            </select>--}}
                    {{--                            <div class="input-group  filter_form_input  ml-auto mr-auto">--}}
                    {{--                                <input type="text" class="form-control datepicker input_margin">--}}
                    {{--                                <div class="input-group-append">--}}
                    {{--                                        <span class="input-group-text p-0">--}}
                    {{--                                            <i class="fa fa-calendar" aria-hidden="true"--}}
                    {{--                                               style="margin-left: -1vw; margin-right: 0.2vw;"></i>--}}
                    {{--                                        </span>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <a href="{{ url('search') }}" type="button"--}}
                    {{--                               class="btn btn-primary ml-auto mr-auto p-0 pt-2 pb-2 filter_form_btn"><i--}}
                    {{--                                    class="fa fa-search" aria-hidden="true"></i>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div
                        class="row pt-md-3 mb-4 form-border search-form rounded  pl-md-5 pr-md-5 ml-4 mr-4 ml-md-0 mr-md-0">
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
                            <i class="fa fa-calendar" aria-hidden="true"
                               style="margin-left: -17px;margin-top: 13px;margin-right: 5px;"></i>
                        </div>
                        <div class="col-6 col-sm-1 ml-auto mr-auto col-md-1 pl-1 pr-1">
                            <a href="{{ url('filter') }}" type="button"
                               style="text-align:center;width: 100%;background: #03388b;color: white;margin: 2px;margin-top: 6px;padding: 3px;margin-bottom: 10px;border-radius: 6px;"><i
                                    class="fa fa-search pt-1" aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="ml-vw pt-3">
                    <div class="row p-3">
                        <div class="col ct pt-2 mt-1">
                            2 Providers
                        </div>
                        <div class="col-md-3 col-7 text-right">
                            <select class="selectpicker ml-auto mr-auto"
                                    data-style="select-with-transition" title="Sort" data-size="4">
                                <option value="2">Nearest to Farthest</option>
                                <option value="3">Low to High</option>
                                <option value="4">Avg. Patient Review</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pl-3 pr-3 mb-2">
                        <div class="col-12">
                            <span style="font-weight: 700; font-size: 14px">
                            Based on your zip code, the average price for "Dental Cleaning" for a "Cat" is "$250"
                                </span>
                        </div>
                    </div>
                </div>
                <div class="ml-vw2 pt-3 pb-5">
                    <div class="row p-1 p-md-3 rounded"
                         style="background-image: linear-gradient(to left, #ffffff, #f5f5f5, #efefef); box-shadow: 0px 4px 16px -9px;">
                        <div class="col-md-8 col-12 pl-1 pr-1 pl-md-2 pr-md-2">
                            <div class="ap_dr_sec">
                                <div class="row ap_dr_row">
                                    <div class="col-md-6 col-sm-12">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row text-center">
                                            <div class="col-1 p-0 pt-3">
                                                <
                                            </div>
                                            <div class="col p-0">
                                                Mon <br> <small>4/16</small>
                                            </div>
                                            <div class="col p-0">
                                                Tue <br> <small>4/17</small>
                                            </div>
                                            <div class="col p-0">
                                                Wed <br> <small>4/18</small>
                                            </div>
                                            <div class="col p-0">
                                                Thu <br> <small>4/19</small>
                                            </div>
                                            <div class="col p-0">
                                                Fri <br> <small>4/20</small>
                                            </div>
                                            <div class="col-1 p-0 pt-3">
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 filter_card2">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12">
                                                <img src="{{ asset('assets/vet/doc_1.png') }}" alt="" width="105"
                                                     height="144">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="row">
                                                    <div class="col-12 text-right text-black"><small>10 Miles</small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <h5 class="font-weight-bold mb-0"> Dr. Steven Portman, MD </h5>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> Dentist </small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> 300, suite Florida, United state. </small>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <a href="{{ url('vet-profile') }}">
                                                            <sub> <sup>See Reviews</sup></sub>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <a href="{{ url('vet-profile') }}">
                                                            <small>
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                View Doctor Profile
                                                            </small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 p-0">
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ap_dr_row">
                                    <div class="col-md-6 col-sm-12">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row text-center">
                                            <div class="col-1 p-0 pt-3">
                                                <
                                            </div>
                                            <div class="col p-0">
                                                <strong> Mon </strong> <br> <small>4/16</small>
                                            </div>
                                            <div class="col p-0">
                                                Tue <br> <small>4/17</small>
                                            </div>
                                            <div class="col p-0">
                                                Wed <br> <small>4/18</small>
                                            </div>
                                            <div class="col p-0">
                                                Thu <br> <small>4/19</small>
                                            </div>
                                            <div class="col p-0">
                                                Fri <br> <small>4/20</small>
                                            </div>
                                            <div class="col-1 p-0 pt-3">
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 filter_card2">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12">
                                                <img src="{{ asset('assets/vet/doc_2.png') }}" alt="" width="105"
                                                     height="144">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="row">
                                                    <div class="col-12 text-right text-black"><small>10 Miles</small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <h5 class="font-weight-bold mb-0"> Dr. Kathrine, MD </h5>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> Dentist </small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> 300, suite Florida, United state. </small>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <a href="{{ url('vet-profile') }}">
                                                            <sub> <sup>See Reviews</sup></sub>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <a href="{{ url('vet-profile') }}">
                                                            <small>
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                View Doctor Profile
                                                            </small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 p-0">
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ap_dr_row">
                                    <div class="col-md-6 col-sm-12">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row text-center">
                                            <div class="col-1 p-0 pt-3">
                                                <
                                            </div>
                                            <div class="col p-0">
                                                <strong> Mon </strong> <br> <small>4/16</small>
                                            </div>
                                            <div class="col p-0">
                                                Tue <br> <small>4/17</small>
                                            </div>
                                            <div class="col p-0">
                                                Wed <br> <small>4/18</small>
                                            </div>
                                            <div class="col p-0">
                                                Thu <br> <small>4/19</small>
                                            </div>
                                            <div class="col p-0">
                                                Fri <br> <small>4/20</small>
                                            </div>
                                            <div class="col-1 p-0 pt-3">
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 filter_card2">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12">
                                                <img src="{{ asset('assets/vet/doc_1.png') }}" alt="" width="105"
                                                     height="144">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="row">
                                                    <div class="col-12 text-right text-black"><small>10 Miles</small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <h5 class="font-weight-bold mb-0"> Dr. Jayun, MD </h5>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> Dentist </small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> 300, suite California, United state. </small>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                        <a href="{{ url('vet-profile') }}">
                                                            <sub> <sup>See Reviews</sup></sub>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <a href="{{ url('vet-profile') }}">
                                                            <small>
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                View Doctor Profile
                                                            </small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 p-0">
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col p-0">
                                                        <a href="{{ route('login') }}">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                        </a>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6028.218820157943!2d-74.16819217014017!3d40.93526925255779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fc5699f995d9%3A0xcb88f11921242943!2s16%20E%205th%20St%2C%20Paterson%2C%20NJ%2007524%2C%20USA!5e0!3m2!1sen!2s!4v1574772648849!5m2!1sen!2s"
                                width="100%" height="500" frameborder="0"
                                style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                {{--                    <div class="filter_sec">--}}
                {{--                        <div class="row filter_card">--}}
                {{--                            <div class="col-md-2 col-sm-12 text-center mb-3">--}}
                {{--                                <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt="" width="103"--}}
                {{--                                     height="103">--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-4 col-sm-12 text-left">--}}
                {{--                                <div class="filter_card_h mb-3">--}}
                {{--                                    Dental Cleaning--}}
                {{--                                </div>--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    Last Visit: Lorem ipsum--}}
                {{--                                </div>--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    Find a pet care doctor--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-2 col-sm-12 text-right">--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    <small> Price: </small>250$--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">--}}
                {{--                                <button class="cb"> Book Dental Cleaning</button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="row filter_card">--}}
                {{--                            <div class="col-md-2 col-sm-12 text-center mb-3">--}}
                {{--                                <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt="" width="103"--}}
                {{--                                     height="103">--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-4 col-sm-12 text-left">--}}
                {{--                                <div class="filter_card_h mb-3">--}}
                {{--                                    Dental Cleaning--}}
                {{--                                </div>--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    Last Visit: Lorem ipsum--}}
                {{--                                </div>--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    Find a pet care doctor--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-2 col-sm-12 text-right">--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    <small> Price: </small>250$--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">--}}
                {{--                                <button class="cb"> Book Dental Cleaning</button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="row filter_card">--}}
                {{--                            <div class="col-md-2 col-sm-12 text-center mb-3">--}}
                {{--                                <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt="" width="103"--}}
                {{--                                     height="103">--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-4 col-sm-12 text-left">--}}
                {{--                                <div class="filter_card_h mb-3">--}}
                {{--                                    Dental Cleaning--}}
                {{--                                </div>--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    Last Visit: Lorem ipsum--}}
                {{--                                </div>--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    Find a pet care doctor--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-2 col-sm-12 text-right">--}}
                {{--                                <div class="filter_card_i mb-2">--}}
                {{--                                    <small> Price: </small>250$--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-md-4 col-sm-12 text-center" style="padding-top: 34px;">--}}
                {{--                                <button class="cb"> Book Dental Cleaning</button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="row"></div>
            </div>
        </div>
    </div>
@endsection
