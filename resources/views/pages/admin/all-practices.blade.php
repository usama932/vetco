@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="card p-3 rounded-borders">
            <h3>All Practices</h3>

            <div class="card-content">
                <div class="table-responsive">
                    <table class="table " id="myTable">
                        <thead>
                        <tr>
                            <th>Practices Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Phone no</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact Practice</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>Lorem</td>
                            <td>Broad way, 201</td>
                            <td>Chelli</td>
                            <td>Indiana</td>
                            <td>2200</td>
                            <td>+0 000 0000</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#addEditModal">View</a></li>
                                        {{--                                        <li><a href="#">Edit</a></li>--}}
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View More Details</a></li>
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

    <div class="modal fade" id="addEditModal" tabindex="-1" role="dialog">
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
                                    <th></th>
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
                                    <td>
                                        <i class="fas fa-edit text-blue cursor-pointer edit_modal_info"></i>
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
                        <div class="col-12 text-right">
                            <button class="btn btn-blue update-btn">Update</button>
                        </div>
                    </div>
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
@section('page-script')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.edit_modal_info', function (){
                $(this).toggleClass('readonly');
                if($(this).hasClass('readonly')) {
                    $('#addEditModal').find('input').removeAttr('readonly disabled');
                }
                else {
                    $('#addEditModal').find('input').attr('readonly', true).attr('disabled', true);
                }
            });
            $(document).on('click', '.update-btn', function (){
                $('#addEditModal').modal('hide');
            });
        });
    </script>
@endsection
