@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')



    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-blue">Services</h3>
                </div>
                <div class="col text-right">
                    <a href="{{ url('vet/add-services') }}" class="btn btn-blue"> Add Service </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="row p-5">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9 col-12">
                                <div class="card"
                                     style="border-top: 6px solid #03388b;border-bottom: 8px solid #03388b;border-right: 2px solid #5f88c8;border-left: 2px solid #5f88c8;">
                                    <a href="{{ url('vet/edit-services') }}">
                                    {{--                                <div class="bg-blue rounded m-0 p-0" style="height:5px;width:100%"></div>--}}
                                    <div class="text-right">
                                        <i class="fas fa-remove text-danger mr-1 remove-service"></i>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="{{ asset('vet/assets/img/tooth.png') }}" alt="" width="140"
                                                     height="140" style="border-radius: 50%;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-center p-0">
                                                <p class="mps_t text-blue font-weight-bold">
                                                    Oral Surgery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}

                                    </a>
                                </div>
                            </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9 col-12">
                            <div class="card"
                                 style="border-top: 6px solid #03388b;border-bottom: 8px solid #03388b;border-right: 2px solid #5f88c8;border-left: 2px solid #5f88c8;">
                                <a href="{{ url('vet/edit-services') }}">
                                {{--                                <div class="bg-blue rounded m-0 p-0" style="height:5px;width:100%"></div>--}}
                                <div class="text-right">
                                    <i class="fas fa-remove text-danger mr-1 remove-service"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{ asset('vet/assets/img/dog.png') }}" alt="" width="140"
                                                 height="140" style="border-radius: 50%;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center p-0">
                                            <p class="mps_t text-blue font-weight-bold">
                                                Parasite Protection
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9 col-12">
                            <div class="card"
                                 style="border-top: 6px solid #03388b;border-bottom: 8px solid #03388b;border-right: 2px solid #5f88c8;border-left: 2px solid #5f88c8;">
                                <a href="{{ url('vet/edit-services') }}">
                                {{--                                <div class="bg-blue rounded m-0 p-0" style="height:5px;width:100%"></div>--}}
                                <div class="text-right">
                                    <i class="fas fa-remove text-danger mr-1 remove-service"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{ asset('vet/assets/img/cleaning.png') }}" alt="" width="140"
                                                 height="140" style="border-radius: 50%;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center p-0">
                                            <p class="mps_t text-blue font-weight-bold">
                                                Dental Cleaning
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9 col-12">
                            <div class="card"
                                 style="border-top: 6px solid #03388b;border-bottom: 8px solid #03388b;border-right: 2px solid #5f88c8;border-left: 2px solid #5f88c8;">
                                <a href="{{ url('vet/edit-services') }}">
                                {{--                                <div class="bg-blue rounded m-0 p-0" style="height:5px;width:100%"></div>--}}
                                <div class="text-right">
                                    <i class="fas fa-remove text-danger mr-1 remove-service"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{ asset('vet/assets/img/vaccinate.png') }}" alt="" width="140"
                                                 height="140" style="border-radius: 50%;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center p-0">
                                            <p class="mps_t text-blue font-weight-bold">
                                                Vaccinations
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9 col-12">
                            <div class="card"
                                 style="border-top: 6px solid #03388b;border-bottom: 8px solid #03388b;border-right: 2px solid #5f88c8;border-left: 2px solid #5f88c8;">
                                <a href="{{ url('vet/edit-services') }}">
                                {{--                                <div class="bg-blue rounded m-0 p-0" style="height:5px;width:100%"></div>--}}
                                <div class="text-right">
                                    <i class="fas fa-remove text-danger mr-1 remove-service"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <img src="{{ asset('vet/assets/img/extraction.png') }}" alt="" width="140"
                                                 height="140" style="border-radius: 50%;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center p-0">
                                            <p class="mps_t text-blue font-weight-bold">
                                                Dental Extractions
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}
                                </a>
                            </div>
                        </div>


                        {{--                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9 col-12">--}}
                        {{--                            <div class="card">--}}
                        {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}
                        {{--                                <div class="text-right">--}}
                        {{--                                    <i class="fas fa-edit text-blue" data-toggle="modal" data-target="#myModal1"></i>--}}

                        {{--                                </div>--}}

                        {{--                                <div class="card-body">--}}
                        {{--                                    <div class="row">--}}
                        {{--                                        <div class="col text-center">--}}
                        {{--                                            <img src="{{ asset('vet/assets/img/extraction.png') }}" alt=""--}}
                        {{--                                                 class="mps_img">--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="row">--}}
                        {{--                                        <div class="col text-center">--}}
                        {{--                                            <p class="mps_t">--}}
                        {{--                                                Dental Extractions--}}
                        {{--                                            </p>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="bg-blue rounded" style="height:5px;width:100%"></div>--}}

                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>


                </div>

            </div>


        </div>

    </div>

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-blue font-weight-bold">Pricing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <table class="table table-hover text-blue">
                                <tbody>
                                <tr class="border-bottom">
                                    <th>Dental Cleaning</th>
                                    <th>$200</th>
                                </tr>
                                <tr class="border-bottom">
                                    <th>Deworming</th>
                                    <th>$200</th>
                                </tr>
                                <tr class="border-bottom">
                                    <th>Oral Surgery</th>
                                    <th>$200</th>
                                </tr>
                                <tr class="border-bottom">
                                    <th>Vaccinations</th>
                                    <th>$200</th>
                                </tr>
                                <tr class="border-bottom">
                                    <th>Lorem ipsum</th>
                                    <th>$200</th>
                                </tr>
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
