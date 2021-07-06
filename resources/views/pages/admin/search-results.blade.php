@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card p-2 rounded-borders mb-3 mt-3   ">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="./assets/img/faces/avatar.jpg" alt="Raised Image"
                                     class="img-raised rounded img-fluid" width="100%">

                            </div>
                            <div class="col-md-9">
                                <h6 class="text-light-blue">Added By Admin</h6>
                                <h4> <a href="{{ url('admin/search-details') }}" class="text-dark"> Dr. Kathrine</a></h4>
                                <p>Dental Cleaning Specialist</p>
                                <p>1500 Broadway, California, America</p>
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <a href="" class="text-dark font-small">(22 Reviews)</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card p-2 rounded-borders mb-3 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="./assets/img/faces/avatar.jpg" alt="Raised Image"
                                     class="img-raised rounded img-fluid" width="100%">

                            </div>
                            <div class="col-md-9">
                                <h6 class="text-light-blue">Added By Admin</h6>
                                <h4> <a href="{{ url('admin/search-details') }}" class="text-dark"> Dr. Kathrine</a></h4>
                                <p class="p-0">Dental Cleaning Specialist</p>
                                <p class="p-0">1500 Broadway, California, America</p>
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <a href="" class="text-dark font-small">(22 Reviews)</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card p-2 rounded-borders mb-3 mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="./assets/img/faces/avatar.jpg" alt="Raised Image"
                                     class="img-raised rounded img-fluid" width="100%">

                            </div>
                            <div class="col-md-9">
                                <h6 class="text-light-blue">Added By Admin</h6>
                                <h4> <a href="{{ url('admin/search-details') }}" class="text-dark"> Dr. Kathrine</a></h4>
                                <p>Dental Cleaning Specialist</p>
                                <p>1500 Broadway, California, America</p>
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <a href="" class="text-dark font-small">(22 Reviews)</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
