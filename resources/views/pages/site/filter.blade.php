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
                        <p class="rvb mt-3">
                            Revolutionizing Transparency in Healthcare
                        </p>
                    </div>
                </div>
                <div class=" ml-vw  custom-search-formbackground">
                    <div
                        class="row pt-md-3 mb-2 form-border search-form custom-search-formcss custom-search-form rounded  pl-md-5 pr-md-5 ml-md-0 mr-md-0">
                        <div class="col-4 col-sm-4 col-md-2 p-md-0 pl-2 pr-2">
                            <select class="selectpicker ml-auto mr-auto" data-style="select-with-transition" title="Pet Type" data-size="4" data-width="fit" data-max-options="1">
                                <option value="2">Cat</option>
                                <option value="3">Dog</option>
                                <option value="4">Snake</option>
                                <option value="5">Bird</option>
                                <option value="6">Rabbit</option>
                            </select>
                        </div>
                        <div class="col-8 col-sm-8 col-md-4 p-md-0 pl-2 pr-2">
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
                        <div class="col-6 col-sm-6 col-md-3 p-md-0 pl-2 pr-2">
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
                        <div class="col-6 col-sm-5 col-md-2 p-md-0 pl-2 pr-2">
                            <div class="form-group p-0 m-0 mt-1">
                                <div class="input-group date datepicker">
                                    <input type="text" class="form-control" id="pickerinput"/>
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

                <div class="ml-vw ">
                    
                    <div class="col-12 text-center">
                            <span class="boy">
                                Based on your zip code, the average price for Dental Cleaning for a Cat is $250
                            </span>
                        </div>
                    
                </div>
                <div class="ml-vw2 pt-3 mt-4 pb-5">
                <div class="row p-3">
                        <div class="col-md-6 ct pt-2 mt-1">
                            2 Practices Found
                        </div>
                        <div class="col-md-6 text-right custom-search-form">
                            <select class="selectpicker col-md-4 ml-auto mr-auto" data-style="select-with-transition"
                                    title="Sort" data-size="4" data-width="fit" data-max-options="1"
                                    data-live-search="true" data-actions-box="true" >
                                <option value="2">Distance: Nearest to Farthest</option>
                                <option value="3">Price: Low to High</option>
                                <option value="4">Avg. Patient Review</option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-1 pt-md-3 pb-md-3 pl-md-0 pr-md-0  rounded"
                         style="background-image: linear-gradient(to left, #ffffff, #f5f5f5, #efefef); box-shadow: 0px 4px 16px -9px;">
                        <div class="col-md-8 col-12 pl-1 pr-1 pl-md-1 pr-md-1">
                            <div class="ap_dr_sec">
                                <div class="row ap_dr_row">

                                    <div class="col-md-7 col-sm-12 p-0 ml-auto">
                                        <div class="row text-center">
                                            <div class="col-1 p-0 pt-3 text-right">
                                                &lt;
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
                                            <div class="col-1 p-0 pt-3 text-left">
                                                &gt;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row filter_card2">
                                            <div class="col-md-2 col-sm-12 p-1">
                                                <img src="{{ asset('assets/vet/doc_1.png') }}" alt=""
                                                     width="105" height="144" style="max-width: 100%;">
                                            </div>
                                            <div class="col-md-3 col-sm-12 p-0">
                                                <div class="row">
                                                    <div class="col-12 text-right text-black"><small>10 Miles</small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <span class="vet_name"> Physical Wellness </span>
                                                        {{--                                                        <span class="vet_name"> Dr. Steven Portman, MD </span>--}}
                                                        {{--                                                        <small> Dentist </small>--}}

                                                    </div>
                                                    <div class="col-12 text-left text-black">

                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> 300, suite Florida, United state. </small>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o text-warning"
                                                           aria-hidden="true"></i>
                                                        <a href="http://localhost/vetco/public/vet-profile">
                                                            <sub> <sup><i class="fa fa-caret-down mr-1"
                                                                          aria-hidden="true"></i>579</sup></sub>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                       <span>$244</span>
                                                    </div>
                                                    <div class="col-12 text-left pr-1">
                                                        <a href="http://localhost/vetco/public/vet-profile">
                                                            <sub>
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                View Practice Profile
                                                            </sub>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12 p-0">
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ap_dr_row">

                                    <div class="col-md-7 col-sm-12 p-0 ml-auto">
                                        <div class="row text-center">
                                            <div class="col-1 p-0 pt-3 text-right">
                                                &lt;
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
                                            <div class="col-1 p-0 pt-3 text-left">
                                                &gt;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row filter_card2">
                                            <div class="col-md-2 col-sm-12 p-1">
                                                <img src="{{ asset('assets/vet/doc_2.png') }}" alt=""
                                                     width="105" height="144" style="max-width: 100%;">
                                            </div>
                                            <div class="col-md-3 col-sm-12 p-0">
                                                <div class="row">
                                                    <div class="col-12 text-right text-black"><small>10 Miles</small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <span class="vet_name"> Dental Cleaning </span>
                                                        {{--                                                        <span class="vet_name"> Dr. Steven Portman, MD </span>--}}
                                                        {{--                                                        <small> Dentist </small>--}}

                                                    </div>
                                                    <div class="col-12 text-left text-black">

                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> 300, suite Florida, United state. </small>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o text-warning"
                                                           aria-hidden="true"></i>
                                                        <a href="http://localhost/vetco/public/vet-profile">
                                                            <sub> <sup><i class="fa fa-caret-down mr-1"
                                                                          aria-hidden="true"></i>579</sup></sub>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                       <span>$244</span>
                                                    </div>
                                                    <div class="col-12 text-left pr-1">
                                                        <a href="http://localhost/vetco/public/vet-profile">
                                                            <sub>
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                View Practice Profile
                                                            </sub>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12 p-0">
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ap_dr_row">

                                    <div class="col-md-7 col-sm-12 p-0 ml-auto">
                                        <div class="row text-center">
                                            <div class="col-1 p-0 pt-3 text-right">
                                                &lt;
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
                                            <div class="col-1 p-0 pt-3 text-left">
                                                &gt;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row filter_card2">
                                            <div class="col-md-2 col-sm-12 p-1">
                                                <img src="{{ asset('assets/vet/doc_1.png') }}" alt=""
                                                     width="105" height="144" style="max-width: 100%;">
                                            </div>
                                            <div class="col-md-3 col-sm-12 p-0">
                                                <div class="row">
                                                    <div class="col-12 text-right text-black"><small>10 Miles</small>
                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <span class="vet_name"> Physical Wellness </span>
                                                        {{--                                                        <span class="vet_name"> Dr. Steven Portman, MD </span>--}}
                                                        {{--                                                        <small> Dentist </small>--}}
                                                    </div>
                                                    <div class="col-12 text-left text-black">

                                                    </div>
                                                    <div class="col-12 text-left text-black">
                                                        <small> 300, suite Florida, United state. </small>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o text-warning"
                                                           aria-hidden="true"></i>
                                                        <a href="http://localhost/vetco/public/vet-profile">
                                                            <sub> <sup><i class="fa fa-caret-down mr-1"
                                                                          aria-hidden="true"></i>579</sup></sub>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 text-left">
                                                       <span>$244</span>
                                                    </div>
                                                    <div class="col-12 text-left pr-1">
                                                        <a href="http://localhost/vetco/public/vet-profile">
                                                            <sub>
                                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                                View Practice Profile
                                                            </sub>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-12 p-0">
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col-1"></div>
                                                </div>
                                                <div class="row text-center mt-2">
                                                    <div class="col-1"></div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
                                                    </div>
                                                    <div class="col p-0">
                                                    <span
                                                        class="bg-primary text-white text-center time_span"> <small> <strong>10:00</strong> AM </small></span>
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
