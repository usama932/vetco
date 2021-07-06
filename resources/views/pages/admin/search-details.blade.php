@extends('layouts.admin.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card p-2 rounded-borders">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="./assets/img/faces/avatar.jpg" alt="Raised Image"
                                     class="img-raised rounded img-fluid" width="100%">

                            </div>
                            <div class="col-md-6">
                                <h6 class="text-light-blue">Added By Admin</h6>
                                <h4> <a href="search-details.php" class="text-dark"> Dr. Kathrine</a></h4>
                                <p>Dental Cleaning Specialist</p>
                                <p>1500 Broadway, California, America</p>
                                <div class="d-flex">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <a class="text-dark font-small">(22
                                        Reviews)</a>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column">
                                    <button class="btn btn-light-blue" data-toggle="modal" data-target="#myModal1">Edit
                                        Details</button>
                                    <button class="btn btn-light-blue">Edit Business Hour</button>
                                    <button class="btn btn-light-blue" data-toggle="modal"
                                            data-target="#myModal">Reviews</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>

    <!-- Reviews Modal -->


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-f6f6f6">
                <div class="modal-header">
                    <h5 class="modal-title text-light-blue">Reviews</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row pl-3 pl-md-5">
                        <div class="vt_re_sc">
                            <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                <div class="row">
                                    <div class="col-6 col-md-1 text-center">
                                        <img src="https://vetco.esquall.com/assets/vet/review_1.png" alt=""
                                             class="dp_r_img">
                                    </div>
                                    <div class="col-6 col-md-8 text-left pt-2 pt-md-3">
                                        <span class="dp_r_name">Mr Josaf</span>
                                    </div>
                                    <div class="col-12 col-md-3 ">
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it
                                        to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                <div class="row">
                                    <div class="col-6 col-md-1 text-center">
                                        <img src="https://vetco.esquall.com/assets/vet/review_2.png" alt=""
                                             class="dp_r_img">
                                    </div>
                                    <div class="col-6 col-md-8 text-left pt-2 pt-md-3">
                                        <span class="dp_r_name">Mr Josaf</span>
                                    </div>
                                    <div class="col-12 col-md-3 ">
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it
                                        to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                <div class="row">
                                    <div class="col-6 col-md-1 text-center">
                                        <img src="https://vetco.esquall.com/assets/vet/review_2.png" alt=""
                                             class="dp_r_img">
                                    </div>
                                    <div class="col-6 col-md-8 text-left pt-2 pt-md-3">
                                        <span class="dp_r_name">Mr Josaf</span>
                                    </div>
                                    <div class="col-12 col-md-3 ">
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it
                                        to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 filter_card" style="
    box-shadow: 0px 0px 4px -2px black;">
                                <div class="row">
                                    <div class="col-6 col-md-1 text-center">
                                        <img src="https://vetco.esquall.com/assets/vet/review_2.png" alt=""
                                             class="dp_r_img">
                                    </div>
                                    <div class="col-6 col-md-8 text-left pt-2 pt-md-3">
                                        <span class="dp_r_name">Mr Josaf</span>
                                    </div>
                                    <div class="col-12 col-md-3 ">
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning " aria-hidden="true"></i>
                                    </div>
                                    <div class="col-12 pl-md-5 pl-3 pr-md-5 pr-3">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem
                                        Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled
                                        it
                                        to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row" style="max-height:700px; overflow-y:auto">
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="card p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img src="./assets/img/faces/avatar.jpg" alt="Thumbnail Image"
                                            class="img-raised rounded-circle img-fluid" width="80">
                                        <p class="ml-3">Mr Josaf</p>
                                    </div>
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quibusdam! Quam
                                        nostrum cum distinctio ut. Illum ratione consequatur voluptate nemo reiciendis
                                        minima repellat, deleniti quas, cum pariatur laborum excepturi soluta.</p>
                                    <div class="text-right">
                                        <button class="btn btn-blue btn-sm">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="card p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img src="./assets/img/faces/avatar.jpg" alt="Thumbnail Image"
                                            class="img-raised rounded-circle img-fluid" width="80">
                                        <p class="ml-3">Mr Josaf</p>
                                    </div>
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quibusdam! Quam
                                        nostrum cum distinctio ut. Illum ratione consequatur voluptate nemo reiciendis
                                        minima repellat, deleniti quas, cum pariatur laborum excepturi soluta.</p>
                                    <div class="text-right">
                                        <button class="btn btn-blue btn-sm">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="card p-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <img src="./assets/img/faces/avatar.jpg" alt="Thumbnail Image"
                                            class="img-raised rounded-circle img-fluid" width="80">
                                        <p class="ml-3">Mr Josaf</p>
                                    </div>
                                    <div>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quibusdam! Quam
                                        nostrum cum distinctio ut. Illum ratione consequatur voluptate nemo reiciendis
                                        minima repellat, deleniti quas, cum pariatur laborum excepturi soluta.</p>
                                    <div class="text-right">
                                        <button class="btn btn-blue btn-sm">Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> -->
                </div>

            </div>
        </div>
    </div>


    <!-- Edit Details Modal -->

    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-light-blue">Edit Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">

                            <form>

                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">Practise Name</label>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">Phone Number</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">Address</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">Zipcode</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">City</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">State</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">Hours</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="input-group align-items-center">

                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">
                                                <i class="fas fa-edit" style="font-size:12px"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-left">
                                        <label for="" class="text-light-blue">Service Price</label>

                                    </div>
                                    <div class="col-md-6 text-left">
                                        <select class="selectpicker" data-style="bg-transparent text-dark border-bottom"
                                                title="Single Select" data-size="7">
                                            <option disabled selected> Choose service</option>
                                            <option value="1">
                                                Dental Cleaning ($200)
                                            </option>
                                            <option value="2">
                                                Lorem, ipsum ($400)
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <i class="fas fa-plus text-light-blue"></i>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="javascript:void(0)" class="text-light-blue" style="font-size:12px"><i
                                            class="fas fa-plus"></i> Add New Service</a>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-blue">Next</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
