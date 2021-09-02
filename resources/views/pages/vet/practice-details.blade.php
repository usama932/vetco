@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')



    <div class="container">
        <div class="container">
            <div class="row pl-md-5 pr-md-5 pt-md-5">
                <div class="col pl-2">
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
                            <td >
                            <input type="text" value="lorem" readonly class="col-md-2 col-sm-4 col-6 form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>Phone No.</th>
                            <td><input type="text" value="lorem" readonly class="col-md-2 col-sm-4 col-6 form-control"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><input type="text" value="lorem" readonly class="col-md-2 col-sm-4 col-6 form-control"></td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td><input type="text" value="lorem" readonly class="col-md-2 col-sm-4 col-6 form-control"></td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td><input type="text" value="lorem" readonly class="col-md-2 col-sm-4 col-6 form-control"></td>
                        </tr>
                        <tr>
                            <th>Zip Code</th>
                            <td><input type="text" value="lorem" readonly class="col-md-2 col-sm-4 col-6 form-control"></td>
                        </tr>
                        <tr>
                            <td class="text-right"></td>
                            <td><button class="btn btn-info py-1 px-4" style="display:block" id="edit">edit</button> <button id="save" style="display:none" class="btn btn-info py-1 px-4">Save</button><td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('page-script')
<script>
   $('#edit').on('click',function(){
       $("#edit").css("display","none");
    $('#save').css("display","block");
   $('input').removeAttr("readonly",true);
   }) 
</script>
@endsection