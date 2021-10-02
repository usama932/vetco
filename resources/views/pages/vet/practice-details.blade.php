@extends('layouts.vet.app')

@section('title', 'Home')

@section('content')

<style>
    .togglebutton label input[type=checkbox]:checked + .toggle {
    background-color: #306ed5;
    }
</style>

    <div class="container">
        <div class="container">
            <div class="row pl-md-5 pr-md-5 pt-md-5 justify-content-center">
                <div class="col-md-6 col-lg-5 pl-2">
                    <h3 class="text-blue">Practice Details</h3>
                </div>
{{--                <div class="col text-right">--}}
{{--                    <a href="{{ url('vet/add-services') }}" class="btn btn-blue"> Add Service </a>--}}
{{--                </div>--}}
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 card ml-auto mr-auto pl-5 pr-5">
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
                            <h4><b>Service areas</b></h4>
                            <p class="pb-0 mb-0"> Blackhorse Grove London W6 7HB US</p>
                            <p class="pb-0 mb-0"> Blackhorse Grove London W6 7HB US</p>
                            <p class="pb-0 mb-0"> Blackhorse Grove London W6 7HB US</p>

                            </td>
                            <td>
                            <a onclick="showmodal2()">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td> <i class="fa fa-clock" style="font-size:20px" aria-hidden="true"></i></td>
                            <td>
                         <p class="pb-0 mb-0"><span class=" ">Sunay</span><span class="float-right pr-3">Close</span></p>
                            <p class="pb-0 mb-0"><span class="">Monday</span><span class="float-right pr-3">Close</span></p>
                            <p class="pb-0 mb-0"><span class="">Tuesday</span><span class="float-right pr-3">Close</span></p>
                            <p class="pb-0 mb-0"><span class="">Wednesday</span><span class="float-right pr-3">8:00 AM to 4:00 PM</span></p>
                            <p class="pb-0 mb-0"><span class="">Thursday</span><span class="float-right pr-3">8:00 AM to 4:00 PM</span></p>
                            <p class="pb-0 mb-0"><span class="">Friday</span><span class="float-right pr-3">Close</span></p>
                            <p class="pb-0 mb-0"><span class="">Saturday</span><span class="float-right pr-3">Close</span></p>

                            </td>
                            <td>
                            <a onclick="showmodal1()">  <i class="fa  fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <i class="fa fa-calendar" style="font-size:20px" aria-hidden="true"></i></td>
                            <td>
                            Add Special Hour
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