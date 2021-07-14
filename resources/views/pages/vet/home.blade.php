@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Total Views</p>
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
                            <p class="card-category">Total Appointments</p>
                            <h3 class="card-title text-dark">37</h3>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon no-shadow">
                            <div class="card-icon bg-blue">
                                <i class="material-icons">weekend</i>
                            </div>
                            <p class="card-category">Appointments</p>


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
                            <p class="card-category">Average Spend per Appointment</p>

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
                            <p class="card-category">Most Popular Services</p>

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

@section('page-script')

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Lorem ipsum',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        var ctx = document.getElementById('myChart1').getContext('2d');
        var myChart1 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Lorem ipsum',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart2 = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: 'Lorem ipsum',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
