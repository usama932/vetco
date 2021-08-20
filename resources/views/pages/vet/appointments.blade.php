@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')



    <div class="container">
        <div class="card p-3 rounded-borders">
            <h3>Appointments</h3>

            <div class="card-content">
                <div class="table-responsive">
                    <table class="table " id="myTable">
                        <thead>
                        <tr>
                            <th>Pet Name</th>
                            <th class="text-center">Pet Type</th>
                            <th class="text-center">Service</th>
                            <th class="text-center">Appointment Date</th>
                            <th class="text-center">Time</th>
                            <th class="text-center">Owner Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Tommi1</td>
                            <td class="text-center">Dog</td>
                            <td class="text-center">Dental Warming</td>
                            <td class="text-center">11-02-2020</td>
                            <td class="text-center">12:00 PM</td>
                            <td class="text-center">Lorem Ipsum</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="modal" data-target="#viewDetails">View Detail</a></li>
                                        <li><a href="mailto:someone@example.com">Contact</a></li>
                                        <li><a data-toggle="modal" data-target="#reschedule">Reschedule</a></li>
                                        <li><a href="#" class="remove">Cancel</a></li>

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
                                    <td>Owner Name</td>
                                    <td><input type="text" class="form-control" value="Oral Surgery"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" class="form-control" value="pet@test.com"></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" class="form-control" value="0000000000000"></td>
                                </tr>
                                <tr>
                                    <td>Pet Breed</td>
                                    <td><input type="text" class="form-control" value="Poodle"></td>
                                </tr>
                                <tr>
                                    <td>Pet Age</td>
                                    <td><input type="text" class="form-control" value="3"></td>
                                </tr>
                                <tr>
                                    <td>Seen By</td>
                                    <td><input type="text" class="form-control" value="Lorem Ipsum"></td>
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
