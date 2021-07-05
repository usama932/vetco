@extends('layouts.site.app')

@section('title', 'Profile')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">

                <div class="ml-vw2 row pt-5 ">
                    <div class="col text-lest">
                        <h3 class="font-weight-bold">
                            Practice Profile
                        </h3>
                    </div>
                </div>
                <div class="ml-vw2 row filter_card">
                    <div class="col pl-3 pr-3 pl-md-5 pr-md-5">
                        <div class="row">
                            <div class="col-md-1 col-4 p-0 text-left">
                                <img src="{{ asset('assets/vet/doc_3.png') }}" alt="" class="dp_img">
                            </div>
                            <div class="col-md-11 col-8 text-left">
                                <div class="row">
                                <span class="dp_name">
                                    Dr. Smith
                                </span></div>
                                <div class="row">
                                <span class="dp_speciality">
                                    Pets Physical Specialist
                                </span></div>
                                <div class="row" style="margin-top: -5px">
                                <span class="dp_rating">
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning mr-2" aria-hidden="true"></i>5 <sub> stars </sub>
                                </span>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book.
                            </div>
                        </div>
                        <div class="row mt-4 mb-3">
                            <div class="col">
                                <span class="dp_name">
                                    Reviews
                                </span>
                            </div>
                        </div>
                        <div class="row pl-3 pl-md-5">
                            <div class="vt_re_sc">
                                <div class="col-12 filter_card" style="    box-shadow: 0px 0px 4px -2px black;">
                                    <div class="row">
                                        <div class="col-6 col-md-1 text-center">
                                            <img src="{{ asset('assets/vet/review_1.png') }}" alt="" class="dp_r_img">
                                        </div>
                                        <div class="col-6 col-md-9 text-left pt-2 pt-md-3">
                                            <span class="dp_r_name">Mr Josaf</span>
                                        </div>
                                        <div class="col-12 col-md-2 text-center pt-2 pt-md-3">
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it
                                            to make a type specimen book.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                    <div class="row">
                                        <div class="col-6 col-md-1 text-center">
                                            <img src="{{ asset('assets/vet/review_2.png') }}" alt="" class="dp_r_img">
                                        </div>
                                        <div class="col-6 col-md-9 text-left pt-2 pt-md-3">
                                            <span class="dp_r_name">Mr Josaf</span>
                                        </div>
                                        <div class="col-12 col-md-2 text-center pt-2 pt-md-3">
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it
                                            to make a type specimen book.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                    <div class="row">
                                        <div class="col-6 col-md-1 text-center">
                                            <img src="{{ asset('assets/vet/review_2.png') }}" alt="" class="dp_r_img">
                                        </div>
                                        <div class="col-6 col-md-9 text-left pt-2 pt-md-3">
                                            <span class="dp_r_name">Mr Josaf</span>
                                        </div>
                                        <div class="col-12 col-md-2 text-center pt-2 pt-md-3">
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it
                                            to make a type specimen book.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                    <div class="row">
                                        <div class="col-6 col-md-1 text-center">
                                            <img src="{{ asset('assets/vet/review_2.png') }}" alt="" class="dp_r_img">
                                        </div>
                                        <div class="col-6 col-md-9 text-left pt-2 pt-md-3">
                                            <span class="dp_r_name">Mr Josaf</span>
                                        </div>
                                        <div class="col-12 col-md-2 text-center pt-2 pt-md-3">
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                            <i class="fa fa-star text-warning mr-1" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it
                                            to make a type specimen book.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                </div>
            </div>
        </div>
    </div>
@endsection
