@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="container">

            <h3>All Practices</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Total Practices</p>
                            <h3 class="card-title text-dark">184</h3>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Total Unique Views</p>
                            <h3 class="card-title text-dark">184</h3>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Total Clicks</p>
                            <h3 class="card-title text-dark">184</h3>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Appointments Over Time</p>


                        </div>
                        <div class="card-body">
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Appointments per Practice</p>

                        </div>
                        <div class="card-body">
                            <canvas id="myChart1" width="400" height="400"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Most Booked Services</p>

                        </div>
                        <div class="card-body">
                            <canvas id="myChart2" width="400" height="400"></canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
