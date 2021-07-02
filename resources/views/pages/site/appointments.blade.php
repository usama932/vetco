@extends('layouts.site.app')

@section('title', 'Appointments')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">

                <div class="ml-vw2 row pt-5 ">
                    <div class="col text-lest">
                        <p class="vfp">
                            Hey, Bailey
                        </p>
                        <p class="rvb">
                            Let’s help you stay on top of your Pet health
                        </p>
                    </div>
                </div>

                <div class="ml-vw2  pt-3">
                    <div class="row">
                        <div class="col text-center form-inline">
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input" data-style="select-with-transition" title="Choose Pet" data-size="4" style="font-family: 'FontAwesome'">
                                <option value="2">Cats  &#xf042;</option>
                                <option value="3">Dogs</option>
                                <option value="4">Snakes</option>
                                <option value="5">Birds</option>
                                <option value="6">Rabbits </option>
                            </select>
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input" data-style="select-with-transition" title="Condition, Procedure, Doctor" data-size="4">
                                <option value="2">Physical Wellness Exam </option>
                                <option value="3">Dental Cleanings</option>
                                <option value="4">Dental Extractions</option>
                                <option value="5">Deworming</option>
                                <option value="6">Vacinations  </option>
                            </select>
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input" data-style="select-with-transition" title="City, State, Zipcode" data-size="4">
                                <option value="2">000, Broadway </option>
                                <option value="3">000, Broadway</option>
                                <option value="4">000, Broadway</option>
                                <option value="5">000, Broadway</option>
                                <option value="6">000, Broadway </option>
                            </select>
                            <select class="selectpicker ml-auto mr-auto suggestion_form_input" data-style="select-with-transition" title="Radius" data-size="4">
                                <option value="2">05 miles </option>
                                <option value="2">10 miles </option>
                                <option value="2">20 miles </option>
                                <option value="2">30 miles </option>
                                <option value="2">50 miles </option>
                            </select>
                            <input type="text" class="form-control datepicker suggestion_form_input" value="">
                            <button type="submit"
                                    class="btn btn-primary ml-auto mr-auto p-0 pt-2 pb-2 suggestion_form_btn"><i
                                    class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="ml-vw2 pt-3">

                    <div class="row p-1 p-md-3 rounded"
                         style="background-image: linear-gradient(to left, #ffffff, #f5f5f5, #efefef); box-shadow: 0px 4px 16px -9px;">
                        <div class="col-md-8 col-12 pl-1 pr-1 pl-md-2 pr-md-2">
                            <div class="row pl-md-3">
                                <div class="col">
                                    <h4 class="text-primary font-weight-bold" style="text-decoration: underline"> All
                                        Appointments </h4>
                                </div>
                            </div>
                            <div class="row pl-md-3">
                                <div class="col-md-2 col-6">
                                    <span class="btn btn-primary btn-block p-1 text-capitalize">Dentist</span>
                                </div>
                                <div class="col-md-2 col-6">
                                    <span class="btn btn-primary btn-block p-1 text-capitalize">April 14</span>
                                </div>
                                <div class="col-md-2 col-6">
                                    <span class="btn btn-primary btn-block p-1 text-capitalize">Speciality</span>
                                </div>
                                <div class="col-md-2 col-6">
                                    <span
                                        class="btn btn-primary btn-block p-1 text-capitalize">Avalaibility</span>
                                </div>
                            </div>
                            <div class="row pl-md-3 mt-2">
                                <div class="col">
                                    <h4 class="text-primary font-weight-bold"> 43 Providers </h4>
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
                                                Mon <br> <small>April 16</small>
                                            </div>
                                            <div class="col p-0">
                                                Tue <br> <small>April 17</small>
                                            </div>
                                            <div class="col p-0">
                                                Wed <br> <small>April 18</small>
                                            </div>
                                            <div class="col p-0">
                                                Thu <br> <small>April 19</small>
                                            </div>
                                            <div class="col p-0">
                                                Fri <br> <small>April 20</small>
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
                                                <strong> Mon </strong> <br> <small>April 16</small>
                                            </div>
                                            <div class="col p-0">
                                                Tue <br> <small>April 17</small>
                                            </div>
                                            <div class="col p-0">
                                                Wed <br> <small>April 18</small>
                                            </div>
                                            <div class="col p-0">
                                                Thu <br> <small>April 19</small>
                                            </div>
                                            <div class="col p-0">
                                                Fri <br> <small>April 20</small>
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
                                                <strong> Mon </strong> <br> <small>April 16</small>
                                            </div>
                                            <div class="col p-0">
                                                Tue <br> <small>April 17</small>
                                            </div>
                                            <div class="col p-0">
                                                Wed <br> <small>April 18</small>
                                            </div>
                                            <div class="col p-0">
                                                Thu <br> <small>April 19</small>
                                            </div>
                                            <div class="col p-0">
                                                Fri <br> <small>April 20</small>
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
                            <div class="col-md col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0"
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
                            <div class="col-md col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0"
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
                            <div class="col-md col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0"
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
                            <div class="col-md col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0"
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
                            <div class="col-md col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ml-3 mr-3">
                                            <div class="card pb-4 m-0"
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
