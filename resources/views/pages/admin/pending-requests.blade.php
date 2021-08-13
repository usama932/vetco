@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')


    <div class="container">
        <div class="card p-3 rounded-borders">

            <h3>Pending Practices</h3>

            <div class="card-body">
                <div class="table-responsive">


                    <table class="table" id="myTable">
                        <thead class="">
                        <tr>
                            <th>Practices Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">City</th>
                            <th class="text-center">State</th>
                            <th class="text-center">Zip</th>
                            <th class="text-center">Phone no</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td class="text-center">Broad way, 201</td>
                            <td class="text-center">Chelli</td>
                            <td class="text-center">Indiana</td>
                            <td class="text-center">2200</td>
                            <td class="text-center">+0 000 0000</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Approve</a></li>
                                        <li><a href="#">Deny</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
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
    <div class="modal fade" id="moreDetailModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-blue font-weight-bold">Practice Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table text-blue">
                                <tbody>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Phone No.
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="" id="" class="form-control" value="lorem" readonly disabled>
                                    </td>
                                    <td>
                                        <input type="text" name="" id="" class="form-control" value="Ipsum" readonly disabled>
                                    </td>
                                    <td>
                                        <input type="text" name="" id="" class="form-control" value="lorem@lorem.com" readonly disabled>
                                    </td>
                                    <td>
                                        <input type="text" name="" id="" class="form-control" value="lorem ipsum dolar" readonly disabled>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                            <table class="table table-hover text-blue">
                                <tbody>
                                <tr class="">
                                    <th>Dental Cleaning</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control" readonly disabled>
                                    </th>
                                </tr>
                                <tr class="">
                                    <th>Deworming</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control" readonly disabled></th>
                                </tr>
                                <tr class="">
                                    <th>Oral Surgery</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control" readonly disabled></th>
                                </tr>
                                <tr class="">
                                    <th>Vaccinations</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control" readonly disabled></th>
                                </tr>
                                <tr class="">
                                    <th>Lorem ipsum</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control" readonly disabled></th>
                                </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
