@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')
<style>
    .togglebutton label input[type=checkbox]:checked + .toggle {
    background-color: #306ed5;
    }
</style>

    <div class="container">
        <div class="card p-3 rounded-borders">

            <h3>Pending Practices</h3>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="myTable">
                        <thead class="">
                        <tr>
                            <th>Practice Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">City</th>
                            <th class="text-center">State</th>
                            <th class="text-center">Zip</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-left"></th>
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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                            <td class="text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn bg-white btn-round btn-sm" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v text-dark"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" data-toggle="modal" data-target="#moreDetailModal">View Details</a></li>
                                        <li><a href="mailto:lorem@lorem.com">Contact </a></li>
                                        <li><a href="mailto:lorem@lorem.com">Approve </a></li>
                                                                                <li><a href="mailto:lorem@lorem.com">Deny </a></li>

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
                    <!-- <div class="row justify-content-center">
                    <div class="col-md-6 ml-auto mr-auto">
                            <table class="table table-hover text-blue">
                                <tbody>
                                <tr class="">
                                    <th>Name</th>
                                    <th>
                                        <input type="text" name="" id="" value="Lore lorem" class="form-control"  >
                                    </th>
                                </tr>
                                <tr class="">
                                    <th>Email</th>
                                    <th>
                                        <input type="text" name="" id="" value="lorem@gmail.com" class="form-control"  >
                                    </th>
                                </tr>
                                <tr class="">
                                    <th>Address</th>
                                    <th>
                                        <input type="text" name="" id="" value="Lorem Lorem Lorem" class="form-control"  >
                                    </th>
                                </tr>
                                <tr class="">
                                    <th>Phone Number</th>
                                    <th>
                                        <input type="text" name="" id="" value="123243254325" class="form-control"  >
                                    </th>
                                </tr>
                                <tr class="">
                                    <th>Dental Cleaning</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control"  >
                                    </th>
                                </tr>
                                <tr class="">
                                    <th>Deworming</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control"  ></th>
                                </tr>
                                <tr class="">
                                    <th>Oral Surgery</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control"  ></th>
                                </tr>
                                <tr class="">
                                    <th>Vaccinations</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control"  ></th>
                                </tr>
                                <tr class="">
                                    <th>Lorem ipsum</th>
                                    <th>
                                        <input type="text" name="" id="" value="200" class="form-control"  ></th>
                                </tr>
                                </tbody>

                            </table>

                        </div>
                      
                        
                        <div class="col-12 text-right">
                            <button class="btn btn-blue update-btn" style="background-color: #306ed5 !important;">Update</button>
                        </div>
                    </div>
                </div> -->
                <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7  ml-auto mr-auto pl-5 pr-5">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th colspan="2"><h3 class="mb-0 pb-0">The Vetco</h3></th>
                            <td class="text-right">
                              <a onclick="showmodal('Vetco')">  <i class="fa  fa-pen"></i></a>
                            </td>
                       </tr>
                        <tr>
                            <td colspan="2"><h5 class="mt-0">Veterinan</h5> </td>
                            <td class="text-right">
                           <a onclick="showmodal('Veterinan')">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-map-marker" style="font-size:24px"></i></td>
                            <td>1252,lorem lorem lorem lorem lorem 1252,lorem lorem lorem</td>
                            <td >
                            <a onclick="showmodal('1252,lorem lorem lorem lorem lorem 1252,lorem lorem lorem')" >  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        
                        <tr>
                                    <td><i class="fa fa-stop-circle" style="font-size:20px" aria-hidden="true"></i></td>
                                    <td>
                                        <h4><b>Service Areas</b></h4>
                                        <p class="pb-0 mb-0"> Blackhorse Grove London W6 7HB US</p>
                                        <p class="pb-0 mb-0"> Blackhorse Grove London W6 7HB US</p>
                                        <p class="pb-0 mb-0"> Blackhorse Grove London W6 7HB US</p>

                                    </td>
                                    <td>
                                        <a onclick="showmodal2()"> <i class="fa  fa-pen"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <!-- <td><i class="fa fa-stop-circle" style="font-size:20px" aria-hidden="true"></i></td>
                            <td> -->
                                    <td colspan="2">

                                        <div class="row w-100">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5><b>Service Type</b></h5>
                                                        </h5>
                                                        <select class="form-control">
                                                            <option>lorem</option>
                                                            <option>lorem</option>
                                                            <option>lorem</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5><b>Service Price</b></h5>
                                                <input type="number" placeholder="$" class="form-control" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a onclick="addmore()"> <i class="fa  fa-plus"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="row w-100" id="append">

                                        </div>
                                    </td>
                                </tr>
                        <tr>
                            <td> <i class="fa fa-clock" style="font-size:20px" aria-hidden="true"></i></td>
                            <td>
                         <p class="pb-0 mb-0"><span class=" ">Sunay</span><span class="float-right pr-3">Closed</span></p>
                            <p class="pb-0 mb-0"><span class="">Monday</span><span class="float-right pr-3">Closed</span></p>
                            <p class="pb-0 mb-0"><span class="">Tuesday</span><span class="float-right pr-3">Closed</span></p>
                            <p class="pb-0 mb-0"><span class="">Wednesday</span><span class="float-right pr-3">8:00 AM to 4:00 PM</span></p>
                            <p class="pb-0 mb-0"><span class="">Thursday</span><span class="float-right pr-3">8:00 AM to 4:00 PM</span></p>
                            <p class="pb-0 mb-0"><span class="">Friday</span><span class="float-right pr-3">Closed</span></p>
                            <p class="pb-0 mb-0"><span class="">Saturday</span><span class="float-right pr-3">Closed</span></p>

                            </td>
                            <td>
                            <a onclick="showmodal1()">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <i class="fa fa-calendar" style="font-size:20px" aria-hidden="true"></i></td>
                            <td>
                            Add Special Hours
                            </td>
                            <td>
                            <a onclick="showmodal('Add Special Hour')">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                       <td> <i class="fa fa-phone" style="font-size:20px" aria-hidden="true"></i></td>
                            <td>
                            +123435435355
                            </td>
                            <td>
                            <a onclick="showmodal('+123435435355')">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                        <td>  
                             <i class="fa fa-globe" style="font-size:20px" aria-hidden="true"></i></td>
                            <td>
                            https://vetco.com
                            </td>
                            <td>
                            <a onclick="showmodal('https://vetco.com')">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                      
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- <div class="modal fade" id="moreDetailModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-blue font-weight-bold">Practice Details 3425325</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
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
                          

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     -->
    <div class="row w-100" id="servicetext">
        <div class="col-12" >
          <div class="row">
          <div class="col-5">
            <div class="row">
              <div class="col-12">
                <select class="form-control">
                  <option>lorem</option>
                  <option>lorem</option>
                  <option>lorem</option>
      
                </select>
              </div>
            </div>
          </div>
          <div class="col-5">
            <input type="number" placeholder="$" class="form-control" />
          </div>
          <div class="col-2 text-right">
            <i class="fa fa-times" onclick=remove(this)></i>
          </div>
        </div>
      </div>
      </div>
<div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-body">
        <h4>Hours</h4>
        <table>
            <tbody>
                <tr>
                    <th style="width:10%"></th>
                    <th style="width:20%"></th>
                    <th style="width:30%"></th>

                </tr>
                <tr>
                <td>Sunday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Monday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Tuesday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Wednesday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Thursday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Friday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Saturday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                <td>Sunday</td>
                <td> <div class="togglebutton" >
                        <label>
                          <input type="checkbox" checked="" onchange="checkbox(this)">
                          <span class="toggle"></span>
                         <span id="labeltext">Open</span> 
                        </label>
                      </div></td>
                <td>
                    <div class="row">
                        <div class="col-6">
                        <select class="form-control" id="openat"><option value="">Open At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                        <div class="col-6">
                            <select class="form-control" id="closeat"><option value="">Close At</option><option value="12:00 AM">12:00 AM</option><option value="01:00 AM">01:00 AM</option><option value="02:00 AM">02:00 AM</option></select>
                        </div>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
        <div class="col-12 text-right">
            <button class="btn btn-primary" style="background-color: #2f6bcf;border-color: #2f6bcf;">Apply</button>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Small modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <input type="text" id="textbox" class="form-control" value="Blackhorse Grove London W6 7HB US">
      <input type="text" id="textbox" class="form-control" value="Blackhorse Grove London W6 7HB US">
      <input type="text" id="textbox" class="form-control" value="Blackhorse Grove London W6 7HB US">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: #2f6bcf;border-color: #2f6bcf;">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-sm" id="bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-body">
        <form>
      <input type="text" id="textbox" class="form-control" value="Lorem Lorem lorem">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info" style="background: #2a60b9;">Save</button>
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

            $(".delete").click(function (e) {
                e.preventDefault();
                var href = $(this).attr("href");
                $.confirm({
                    title: 'Confirm!',
                    content: 'You are about to Delete Appointment. Are you sure you want to Delete this Appointment?',
                    buttons: {
                        YES: function () {
                            $(location).attr('href', href);
                        },
                        NO: function () {
                        }
                    }
                });
            });
        });
    </script>
    <script>
         function remove(e) {
    $(e).parent().parent().remove();
  }
  function addmore() {
    var html = $('#servicetext').html();
    $('#append').append(html);
  }
  
   $('#edit').on('click',function(){
       $("#edit").css("display","none");
    $('#save').css("display","block");
   $('input').removeAttr("",true);
   }) 
   
   function showmodal(val)
   {
   $('#textbox').val(val);
  $('#bd-example-modal-sm').modal("show");
   }
   function showmodal1(val)
   {
  $('#bd-example-modal-lg').modal("show");
   }

   function showmodal2(val)
   {
  $('#exampleModal').modal("show");
   }
   
   function checkbox(e){
      $(e).next().next().text(function(i, text){
          return text === "Close" ? "Open" : "Close";
      })
        if($(e).next().next().text()=="Open"){
        $(e).closest('tr').find('#openat').css("display","block");
        $(e).closest('tr').find('#closeat').css("display","block");
      }
      else{
        $(e).closest('tr').find('#openat').css("display","none");
        $(e).closest('tr').find('#closeat').css("display","none");
      }
   }
</script>
@endsection