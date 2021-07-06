@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="container">

            <div class="card p-2 rounded-borders ">
                <div class="row mt-4">

                    <div class="col-md-4 text-center ">
                        <div class="border-right border-dark">

                            <div class="d-flex align-items-end justify-content-center mb-3">
                                <img src="{{ asset('vet/assets/img/faces/avatar.jpg') }}" alt="Thumbnail Image"
                                     class="img-raised rounded-circle img-fluid" width="100">
                                <i class="fas fa-edit"></i>
                            </div>

                            <h5>Lorem, ipsum. <i class="fas fa-edit"></i></h5>
                            <p>Lorem, ipsum.</p>

                            <p class="mt-5">Member Since 2019 <i class="fas fa-edit"></i></p>

                            <button class="btn btn-blue">Add additional practice</button>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <h6>Contact info</h6>
                        <table class="table ">
                            <tbody>
                            <tr>
                                <td>First Name</td>
                                <td>Bailey <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>Bailey <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>00 <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>bailey@gmail.com <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>228 Park Ave Street <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>City</td>
                                <td>Lorem <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>State</td>
                                <td>Lorem <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Zip</td>
                                <td>Lorem <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Phone#</td>
                                <td>(815) 00 00000 <i class="fas fa-edit"></i></td>

                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>lorem.com <i class="fas fa-edit"></i></td>

                            </tr>

                            <tr>
                                <td>Business Hours</td>
                                <td><button class="btn btn-blue btn-sm">Manage Business Hours</button></td>

                            </tr>




                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
