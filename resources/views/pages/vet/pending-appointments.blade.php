@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="card p-3 rounded-borders">
            <h3></h3>
              <div class="col-12">
              <a class="btn btn-outline-info"  href="{{ url('vet/appointments') }}">All Appointments</a>
              <a class="btn btn-info" style="background-color: #306ed5;border-color: #306ed5;" href="{{ url('vet/pending-appointments') }}">Pending Appointments</a>
              </div>
                 <div class="card-content">
                <div class="table-responsive">
                    <table class="table " id="myTable">
                        <thead>
                        <tr>
                            <th>Appointment Name</th>
                            <th class="text-center">Pets Type</th>
                            <th class="text-center">Service</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Owner Name</th>

                            <th class="text-left disabled-sorting"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Oral Surgery</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">1-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">lorem lorem</td>
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#">Contact</a></li>


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
