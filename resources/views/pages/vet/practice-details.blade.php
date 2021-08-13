@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')



    <div class="container">
        <div class="container">
            <div class="row pl-md-5 pr-md-5 pt-md-5">
                <div class="col">
                    <h3 class="text-blue">Practice Details</h3>
                </div>
{{--                <div class="col text-right">--}}
{{--                    <a href="{{ url('vet/add-services') }}" class="btn btn-blue"> Add Service </a>--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto pl-5 pr-5">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Email</th>
                            <td>Lorem</td>
                        </tr>
                        <tr>
                            <th>Phone No.</th>
                            <td>Lorem</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>Lorem</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>Lorem</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td>Lorem</td>
                        </tr>
                        <tr>
                            <th>Zip Code</th>
                            <td>Lorem</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
