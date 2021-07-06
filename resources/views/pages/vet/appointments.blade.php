@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')



    <div class="container">
        <div class="card p-3 rounded-borders">
            <h3>Appointment</h3>

            <div class="card-content">
                <div class="table-responsive">
                    <table class="table " id="myTable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Pet Name</th>
                            <th>Pet Type</th>
                            <th>Services</th>
                            <th>Owner Name</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>11-02-2020</td>
                            <td>12:00 PM</td>
                            <td>Tommi</td>
                            <td>Dog</td>
                            <td>Dental Warming</td>
                            <td>Lorem Ipsum</td>
                            <td>0 000 0000</td>

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>11-02-2020</td>
                            <td>12:00 PM</td>
                            <td>Tommi</td>
                            <td>Dog</td>
                            <td>Dental Warming</td>
                            <td>Lorem Ipsum</td>
                            <td>0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>11-02-2020</td>
                            <td>12:00 PM</td>
                            <td>Tommi</td>
                            <td>Dog</td>
                            <td>Dental Warming</td>
                            <td>Lorem Ipsum</td>
                            <td>0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>11-02-2020</td>
                            <td>12:00 PM</td>
                            <td>Tommi</td>
                            <td>Dog</td>
                            <td>Dental Warming</td>
                            <td>Lorem Ipsum</td>
                            <td>0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>11-02-2020</td>
                            <td>12:00 PM</td>
                            <td>Tommi</td>
                            <td>Dog</td>
                            <td>Dental Warming</td>
                            <td>Lorem Ipsum</td>
                            <td>0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>11-02-2020</td>
                            <td>12:00 PM</td>
                            <td>Tommi</td>
                            <td>Dog</td>
                            <td>Dental Warming</td>
                            <td>Lorem Ipsum</td>
                            <td>0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="#">Message</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#">Cancel</a></li>

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

    <div class="modal fade" id="reschedule" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-blue font-weight-bold">Reschedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div id='calendar'></div>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-blue">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <table class="table">

                                <tbody>

                                <tr>
                                    <td>Appointment Name</td>
                                    <td><input type="text" class="form-control" value="Oral Surgery"></td>

                                </tr>
                                <tr>
                                    <td>Pets Type</td>
                                    <td><input type="text" class="form-control" value="Dog"></td>

                                </tr>
                                <tr>
                                    <td>Ph No</td>
                                    <td><input type="text" class="form-control" value="+1 222 2222"></td>

                                </tr>
                                <tr>
                                    <td>Appointment Date</td>
                                    <td><input type="text" class="form-control" value="00:00"></td>

                                </tr>
                                <tr>
                                    <td>Appointment Time</td>
                                    <td><input type="text" class="form-control" value="00:00"></td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <div class="text-center">
                        <button class="btn btn-sm btn-blue">Update</button>

                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
            $('#reschedule').on('shown.bs.modal', function () {
                calendar.render();
            });
        });
    </script>
@endsection
