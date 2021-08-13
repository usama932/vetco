@extends('layouts.site.app')

@section('title', 'Profile')

@section('content')
    <div class="content p-0 shadow_bottom">
        <div class="content">
            <div class="container-fluid">
                <div class="row pt-3 pt-md-5">
                    <div class="col pt-3 pt-md-5">
                        <div class="row filter_card ml-vw2">
                            <div class="col-8">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#profile" data-toggle="tab">
                                                    <span class="text-primary">Upcoming Appointments</span>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#messages" data-toggle="tab">
                                                    <span class="text-primary">Past Appointments</span>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 text-right">
                                <span class="mp bg-primary">
                                    <a href="{{ url('my-pets') }}" class="text-white"> My Pets </a>
                                </span>
                            </div>
                            <div class="col-md-12 pt-3 pt-md-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <div class="table-responsive">
                                            <table class="table appointments_table">
                                                <thead class=" text-primary font-weight-bold">
                                                <tr>
                                                    <th>
                                                        Pet Name
                                                    </th>
                                                    <th class="text-center">
                                                        Practice Name
                                                    </th>
                                                    <th class="text-center">
                                                        Practice Address
                                                    </th>
                                                    <th class="text-center">
                                                        Phone Number
                                                    </th>
                                                    <th class="text-center">
                                                        Appointment Date
                                                    </th>
                                                    <th class="text-center">
                                                        Time
                                                    </th>
                                                    <th class="text-center">

                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <div class="table-responsive">
                                            <table class="table appointments_table">
                                                <thead class=" text-primary font-weight-bold">
                                                <tr>
                                                    <th>
                                                        Pet Name
                                                    </th>
                                                    <th class="text-center">
                                                        Practice Name
                                                    </th>
                                                    <th class="text-center">
                                                        Practice Address
                                                    </th>
                                                    <th class="text-center">
                                                        Phone Number
                                                    </th>
                                                    <th class="text-center">
                                                        Appointment Date
                                                    </th>
                                                    <th class="text-center">
                                                        Time
                                                    </th>
                                                    <th class="text-center">

                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
                                                                <li><a href="#">Cancel</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lorem
                                                    </td>
                                                    <td class="text-center">
                                                        Ipsum
                                                    </td>
                                                    <td class="text-center">
                                                        102, Broadway
                                                    </td>
                                                    <td class="text-center">
                                                        00000000000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00-0000
                                                    </td>
                                                    <td class="text-center">
                                                        00-00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" class="btn bg-white btn-round btn-sm"
                                                               data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v text-dark"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a>Reschedule</a></li>
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
                            <div class="col-md-12 text-right" style="font-weight: bold">
                                @if($id > 1)
                                    <a href="{{ url('appointments-list/'.($id-1)) }}">
                                        <span class="ml-2 mr-2">Prev</span>
                                    </a>
                                @endif
                                <a href="{{ url('appointments-list/1') }}" @if($id == 1) class="text-white bg-primary"
                                   @endif style="cursor: pointer; padding: 6px 12px; border-radius: 50%; text-align: center;">1</a>
                                <a href="{{ url('appointments-list/2') }}" @if($id == 2) class="text-white bg-primary"
                                   @endif style="cursor: pointer; padding: 6px 12px; border-radius: 50%; text-align: center;">2</a>
                                <a href="{{ url('appointments-list/3') }}" @if($id == 3) class="text-white bg-primary"
                                   @endif style="cursor: pointer; padding: 6px 12px; border-radius: 50%; text-align: center;">3</a>
                                @if($id < 3)
                                    <a href="{{ url('appointments-list/'.($id+1)) }}">
                                        <span class="ml-2 mr-2">Next</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
