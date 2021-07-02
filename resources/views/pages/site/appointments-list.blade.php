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
                                <span class="ual">
                                    Upcoming Appointments List
                                </span>
                            </div>
                            <div class="col-4 text-right">
                                <span class="mp bg-primary">
                                    <a href="{{ url('my-pets') }}" class="text-white"> My Pets </a>
                                </span>
                            </div>
                            <div class="col-md-12 pt-3 pt-md-5">
                                <div class="table-responsive">
                                    <table class="table appointments_table">
                                        <thead class=" text-primary font-weight-bold">
                                        <tr>
                                            <th>
                                                Pet Name
                                            </th>
                                            <th>
                                                Practice Name
                                            </th>
                                            <th>
                                                Practice Address
                                            </th>
                                            <th>
                                                Appointment Date
                                            </th>
                                            <th>
                                                Time
                                            </th>
                                            <th>
                                                Previous Appointment
                                            </th>
                                            <th>
                                                Upcoming Appointment
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem
                                            </td>
                                            <td>
                                                Ipsum
                                            </td>
                                            <td>
                                                102, Broadway
                                            </td>
                                            <td>
                                                00-00-0000
                                            </td>
                                            <td>
                                                00-00
                                            </td>
                                            <td>
                                                00-00-00, 00:00 PM
                                            </td>
                                            <td>
                                                00-00-00, 00:00 AM
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <span class="ml-2 mr-2">First</span>
                                <span class="ml-2 mr-2">Prev</span>
                                <span class="ml-2 mr-2 bg-primary text-white" style="padding: 5px 10px; border-radius: 50%; text-align: center;">1</span>
                                <span class="ml-2 mr-2">2</span>
                                <span class="ml-2 mr-2">3</span>
                                <span class="ml-2 mr-2">Next</span>
                                <span class="ml-2 mr-2">Last</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
