<script src="{{ asset('vet/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('vet/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('vet/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

{{--<!--  Google Maps Plugin    -->--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('vet/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('vet/assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('vet/assets/js/plugins/jasny-bootstrap.min.js') }}" type="text/javascript"></script>
<!--	Plugin for Small Gallery in Product Page -->
<script src="{{ asset('vet/assets/js/plugins/jquery.flexisel.js') }}" type="text/javascript"></script>
<!-- Plugins for presentation and navigation  -->
<script src="{{ asset('vet/assets/demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vet/assets/demo/vertical-nav.js') }}" type="text/javascript"></script>
{{--<script src="{{ asset('vet/assets/js/plugins/fullcalendar.min.js') }}" type="text/javascript"></script>--}}
<script src="{{ asset('vet/assets/js/plugins/main.min.js') }}" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
<script src="{{ asset('vet/assets/demo/demo.js') }}" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('vet/assets/js/material-kit.js?v=2.2.0') }}" type="text/javascript"></script>


<script src="{{ asset('vet/assets/js/jquery-confirm.min.js') }}"></script>


<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.min.js"
        integrity="sha512-JxJpoAvmomz0MbIgw9mx+zZJLEvC6hIgQ6NcpFhVmbK1Uh5WynnRTTSGv3BTZMNBpPbocmdSJfldgV5lVnPtIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        // md.initDashboardPageCharts();
        //
        // md.initVectorMap();
        $('#mob-dropdown').click(function (){
            $('.mob-dropdown-menu').slideToggle();
        });
        $('.datepicker').datetimepicker({
            format:'DD/MM/YYYY',
        });
        $('.about_us_a').click(function () {

            var position = $('#about_us').offset().top;

            $("body, html").animate({
                scrollTop: position
            } /* speed */);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            responsive: {
                details: false
            }
        });

    });
</script>

<script>
    $("#add_practise_btn").on("click", function(e) {
        e.preventDefault();
        $('#myModal2').modal('show');
    });

    $(".remove").click(function(e) {
        e.preventDefault();
        var href = $(this).attr("href");
        $.confirm({
            title: 'Confirm!',
            content: 'You are about to Cancel Appointment. Are you sure you want to Delete this Appointment?',
            buttons: {
                YES: function() {
                    $(location).attr('href', href);
                },
                NO: function() {}
            }
        });
    });
</script>

<!-- Classic Modal -->
<div class="modal fade rounded-borders" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Practice</h5>
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
<!--  End Modal -->
