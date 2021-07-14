@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')


    <div class="container">
        <div class="card p-3 rounded-borders">
            <h3>Pending Appointments</h3>

            <div class="card-content">
                <div class="table-responsive">
                    <table class="table " id="myTable">
                        <thead>
                        <tr>
                            <th>Appointment Name</th>
                            <th>Pets Type</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Oral Surgery</td>
                            <td>Dog</td>
                            <td>1-02-2020</td>
                            <td>12:00 PM</td>


                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td>Dog</td>
                            <td>1-02-2020</td>
                            <td>Dog</td>

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td>Dog</td>
                            <td>1-02-2020</td>
                            <td>Dog</td>

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td>Dog</td>
                            <td>1-02-2020</td>
                            <td>Dog</td>

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td>Dog</td>
                            <td>1-02-2020</td>
                            <td>Dog</td>

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td>Dog</td>
                            <td>1-02-2020</td>
                            <td>Dog</td>

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

@endsection
