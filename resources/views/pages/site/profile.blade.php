@extends('layouts.site.app')

@section('title', 'Profile')

@section('content')
    <div class="content p-0">
        <div class="content">
            <div class="container-fluid pt-5">
                <div class="ml-vw pt-5">
                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold"> Profile </h3>
                        </div>
                    </div>
                    <div class="row filter_card mt-3" style="box-shadow: 0px 1px 7px -4px;">
                        <div class="col-md-4 col-12 text-center">
                            <div class="row pt-md-5 ">
                                <div class="col pt-md-5 profile_border">
                                    <img src="{{ asset('assets/vet/profile.png') }}" alt="" class="profile_img">
                                </div>
                            </div>
                            <div class="row pb-md-5">
                                <div class="col pb-md-5 profile_border">
                                    <h3 class="text-black font-weight-bold"> Bailey </h3>
                                    <h6 class="text-black"> Member Since 2008 </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-12 text-left pl-md-5">
                            <div class="row pt-md-2 ">
                                <div class="col">
                                    <h4 class="text-black font-weight-bold"> Contact Info </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="color: #00bcd4">
                                        bailey@gmail.com<br>
                                        +1 000 0000 <br>
                                        (815) 00 00000
                                    </p>
                                </div>
                                <div class="col-3 text-right">
                                    <button class="btn btn-primary btn-sm edit"> Edit </button>
                                    <button class="btn btn-success btn-sm save" hidden> Save </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="text-black font-weight-bold"> Personal Info </h4>
                                </div>
                            </div>
                            <div class="row text-black">
                                <div class="col-4"> First Name
                                </div>
                                <div class="col-8"><input type="text" name="" id="" class="form-control wid-50" readonly value="Bailey"> </div>
                            </div>
                            <div class="row text-black">
                                <div class="col-4"> Last Name
                                </div>
                                <div class="col-8"> <input type="text" name="" id="" class="form-control wid-50" readonly value="Ipsum"> </div>
                            </div>
                          
                            <div class="row text-black">
                                <div class="col-4"> Address
                                </div>
                                <div class="col-8"> <input type="text" name="" id=""  class="form-control wid-50" readonly value="228 Park Ave"> </div>
                            </div>
                            <div class="row text-black">
                                <div class="col-4"> City
                                </div>
                                <div class="col-8"> <input type="text" name="" id="" class="form-control wid-50" readonly value="Florida"> </div>
                            </div>
                            <div class="row text-black">
                                <div class="col-4"> State
                                </div>
                                <div class="col-8"> <input type="text" name="" id="" class="form-control wid-50" readonly value="Chilli"> </div>
                            </div>
                            <div class="row text-black">
                                <div class="col-4"> Zip Code
                                </div>
                                <div class="col-8"> <input type="text" name="" id="" class="form-control wid-50" readonly value="0678"> </div>
                            </div>
                            <div class="row text-black hideemail" hidden>
                                <div class="col-4"> Email
                                </div>
                                <div class="col-8"> <input type="text" name="" id="" class="form-control wid-50" readonly value="bailey@gmail.com"> </div>
                            </div>
                            <div class="row text-black hideemail" hidden>
                                <div class="col-4"> Phone
                                </div>
                                <div class="col-8"> <input type="text" name="" id="" class="form-control wid-50" readonly value="(815) 00 00000"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        $('.edit').click(function (){
           $('.form-control').removeAttr('readonly');
           $('.save').removeAttr('hidden');
           $('.hideemail').removeAttr('hidden');

        });
        $('.save').click(function (){
            $('.form-control').attr('readonly', true);
           $('.save').attr('hidden', true);
           $('.hideemail').attr('hidden', true);

        });
    </script>
@endsection
