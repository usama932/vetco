@extends('layouts.site.app')

@section('title', 'Appointments')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">

                <div class="ml-vw2 row pt-md-2">
                    <div class="col text-lest">
                        <p class="vfp pt-md-5">
                            @guest
                            @else
                                Hey, Bailey
                            @endguest
                        </p>
                        <p class="rvb pb-0">
                            Let’s help you stay on top of your Pet health
                        </p>
                    </div>
                </div>

                <div class="ml-vw pt-2">
                    <div
                        class="row pt-md-3 mb-4 form-border search-form custom-search-form rounded  pl-md-5 pr-md-5 ml-4 mr-4 ml-md-0 mr-md-0">
                        <div class="col-4 col-sm-4 col-md-2 p-md-0 pl-2 pr-2">
                            <select class="selectpicker ml-auto mr-auto" data-style="select-with-transition"
                                    title="Pet Type" data-size="4" data-width="fit" data-max-options="1"
                                    data-actions-box="true" data-deselect-all-text="Deselect" multiple>
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
                                    data-actions-box="true" data-deselect-all-text="Deselect" multiple>
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
                                    data-live-search="true" data-max-options="1" data-actions-box="true"
                                    data-deselect-all-text="Deselect" multiple>
                                <option value="3">001, Broadway</option>
                                <option value="4">002, Broadway</option>
                                <option value="5">003, Broadway</option>
                                <option value="6">004, Broadway</option>
                                <option value="5">005, Broadway</option>
                            </select>
                        </div>
                        <div class="col-6 col-sm-5 col-md-2 p-md-0 pl-2 pr-2">
                            <div class="form-group p-0 m-0 mt-1">
                                <div class="input-group date">
                                    <input type="text" class="form-control datepicker"/>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar pt-2 mt-1 mr-2"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-1 ml-auto mr-auto col-md-1 pl-1 pr-1">
                            <a href="{{ url('filter') }}" type="button"
                               style="text-align:center;width: 100%;background: #03388b;color: white;margin: 2px;margin-top: 6px;padding: 3px;margin-bottom: 10px;border-radius: 6px;"><i
                                    class="fa fa-search pt-1" aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="ml-vw">
                    <div class="row">
                        <div class="col pt-2 mt-1">
                            <span style="font-weight: 700; font-size: 17px">
                            Based on your zip code, the average price for "Dental Cleaning" for a "Cat" is "$250"
                                </span>
                        </div>
                    </div>
                </div>
                <div class="ml-vw2 pt-3 pb-5">

                    <div class="row p-1 p-md-3 rounded"
                         style="background-image: linear-gradient(to left, #ffffff, #f5f5f5, #efefef); box-shadow: 0px 4px 16px -9px;">
                        <div class="col-md-8 col-12 pl-1 pr-1 pl-md-2 pr-md-2">
                            <div class="row pl-md-3">
                                <div class="col">
                                    <h4 class="text-primary font-weight-bold"> All
                                        Appointments </h4>
                                </div>
                            </div>
                            <div class="row pl-md-3">
                                <div class="col text-left custom-search-form">
                                    <select class="selectpicker ml-auto mr-auto" data-style="select-with-transition"
                                            title="Sort" data-size="4" data-width="fit" data-max-options="1"
                                            data-actions-box="true" data-deselect-all-text="Deselect" multiple>
                                        <option value="2">Nearest to Farthest</option>
                                        <option value="3">Low to High</option>
                                        <option value="4">Avg. Patient Review</option>
                                    </select>
                                </div>
{{--                                <div class="col-lg col-xl-2 col-6">--}}
{{--                                    <span class="btn btn-primary btn-block p-1 text-capitalize">Dentist</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg col-xl-2 col-6">--}}
{{--                                    <span class="btn btn-primary btn-block p-1 text-capitalize">4/14</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg col-xl-2 col-6">--}}
{{--                                    <span class="btn btn-primary btn-block p-1 text-capitalize">Speciality</span>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg col-xl-2 col-6">--}}
{{--                                    <span--}}
{{--                                        class="btn btn-primary btn-block p-1 text-capitalize">Availability</span>--}}
{{--                                </div>--}}
                            </div>
                            <div class="row pl-md-3 mt-2">
                                <div class="col">
                                    <h4 class="text-primary font-weight-bold"> 43 Practices Found </h4>
                                </div>
                            </div>
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
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-o text-warning" aria-hidden="true"></i>
                                                        <a href="{{ url('vet-profile') }}">
                                                            <sub> <sup><i class="fa fa-caret-down mr-1" aria-hidden="true"></i>579</sup></sub>
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
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-secondary" aria-hidden="true"></i>
                                                        <a href="{{ url('vet-profile') }}">
                                                            <sub> <sup><i class="fa fa-caret-down mr-1" aria-hidden="true"></i>700</sup></sub>
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
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        <i class="fa fa-star text-secondary" aria-hidden="true"></i>
                                                        <a href="{{ url('vet-profile') }}">
                                                            <sub> <sup><i class="fa fa-caret-down mr-1" aria-hidden="true"></i>579</sup></sub>
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
                                width="100%" height="600" frameborder="0"
                                style="border:0; margin-top: 40px; padding: 20px" allowfullscreen=""></iframe>
                        </div>
                    </div>

                </div>

                <div class="ml-vw2">

                    <div class="col-12">
                        <div class="row p-5">
                            <div class="col-12 mb-5">
                                <p class="mps">
                                    Most Popular Services
                                </p>
                            </div>
                            <div
                                class="col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                <div class="card mps-card">
                                    <div
                                        class="card-body col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0 mps-sub-card"
                                                 style="margin-top: -40px !important;box-shadow: 0px 1px 6px -2px;">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <img src="{{ asset('assets/vet/teeth_cleaning.png') }}" alt=""
                                                             class="mps_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center text-primary">
                                                <p class="mps_t mb-1">
                                                    Dental Cleanings
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                <div class="card mps-card">
                                    <div
                                        class="card-body col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0 mps-sub-card"
                                                 style="margin-top: -40px !important;box-shadow: 0px 1px 6px -2px;">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <img src="{{ asset('assets/vet/teeth_cleaning_2.png') }}" alt=""
                                                             class="mps_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center text-primary">
                                                <p class="mps_t mb-1">
                                                    Dental Extractions
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                <div class="card mps-card">
                                    <div
                                        class="card-body col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0 mps-sub-card"
                                                 style="margin-top: -40px !important;box-shadow: 0px 1px 6px -2px;">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <img src="{{ asset('assets/vet/Oral_Surgery_f.png') }}" alt=""
                                                             class="mps_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center text-primary">
                                                <p class="mps_t mb-1">
                                                    Oral Surgery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                <div class="card mps-card">
                                    <div
                                        class="card-body col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0 mps-sub-card"
                                                 style="margin-top: -40px !important;box-shadow: 0px 1px 6px -2px;">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <img src="{{ asset('assets/vet/Parasite_Protection.png') }}"
                                                             alt=""
                                                             class="mps_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center text-primary">
                                                <p class="mps_t mb-1">
                                                    Parasite Protection
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                <div class="card mps-card">
                                    <div
                                        class="card-body col-md col-sm-12 pl-1 pr-1 pl-sm-2 pr-sm-2 pl-md-1 pr-md-1 pr-lg-2 pl-lg-2 pl-xl-3 pr-xl-3">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0 mps-sub-card"
                                                 style="margin-top: -40px !important;box-shadow: 0px 1px 6px -2px;">
                                                <div class="row">
                                                    <div class="col text-center">
                                                        <img src="{{ asset('assets/vet/Vaccinations_f.png') }}" alt=""
                                                             class="mps_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center text-primary">
                                                <p class="mps_t mb-1">
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
