@extends('layouts.vet.app')

@section('title', 'Add service')

@section('content')



    <div class="container">
        <div class="container">
            <h3 class="text-blue">Add Vaccination</h3>
            <div class="row">
                <div class="col-6 pl-5 pt-5">
                    <input type="text" class="form-control" placeholder="Service Name" >
                </div>
{{--                <div class="col pr-5 pt-5">--}}
{{--                    <input type="file" name="" id="" class="form-control">--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <div class="col ml-auto mr-auto p-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Pet Type</th>
                            <th scope="col">Service Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><select type="text" class="form-control" value=""><option value="Lorem">Lorem</option><option value="Lorem1">Lorem1</option></select></td>
                            <td><input type="text" class="form-control" value=""></td>
                            <td class="text-center">
                                <i class="fas fa-remove text-danger mr-1 remove-pet"></i>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col pl-5 pr-5 pb-5 text-right">
                    <button class="btn btn-blue add_pet"> Add More</button>
                    <button class="btn btn-blue" onclick="clicksave();"> Save </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('page-script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function clicksave(){
            Swal.fire('Information saved successfully');
        }
        $('.add_pet').click(function () {
            var content = '';
            content += '<tr>';
            content += '<td><select type="text" class="form-control" value=""><option value="Lorem">Lorem</option><option value="Lorem1">Lorem1</option></select></td>';
            content += '<td><input type="text" class="form-control" value=""></td>';
            content += '<td class="text-center">';
            content += '<i class="fas fa-remove text-danger mr-1 remove-pet"></i>';
            content += '</td>';
            content += '</tr>';
            $('.table').append(content);
        });
        $(document).on('click', '.remove-pet', function (e){
            e.preventDefault();
            var obj = this;
            $.confirm({
                title: 'Confirm!',
                content: 'You are about to Remove Pet. Are you sure you want to Remove this Pet?',
                buttons: {
                    YES: function () {
                        $(obj).closest('tr').remove();
                    },
                    NO: function () {
                    }
                }
            });
        });
    </script>
@endsection
