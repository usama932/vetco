<script src="{{ asset('admin/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('admin/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('admin/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

{{--<!--  Google Maps Plugin    -->--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('admin/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('admin/assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('admin/assets/js/plugins/jasny-bootstrap.min.js') }}" type="text/javascript"></script>
<!--	Plugin for Small Gallery in Product Page -->
<script src="{{ asset('admin/assets/js/plugins/jquery.flexisel.js') }}" type="text/javascript"></script>
<!-- Plugins for presentation and navigation  -->
<script src="{{ asset('admin/assets/demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/demo/vertical-nav.js') }}" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
<script src="{{ asset('admin/assets/demo/demo.js') }}" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('admin/assets/js/material-kit.js?v=2.2.0') }}" type="text/javascript"></script>

<script src="{{ asset('admin/assets/js/jquery-confirm.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.min.js"
        integrity="sha512-JxJpoAvmomz0MbIgw9mx+zZJLEvC6hIgQ6NcpFhVmbK1Uh5WynnRTTSGv3BTZMNBpPbocmdSJfldgV5lVnPtIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Lorem ipsum',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Lorem ipsum',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Lorem ipsum',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            responsive: {
                details: false
            }
        });

        $(".remove").click(function (e) {
            e.preventDefault();
            var href = $(this).attr("href");
            $.confirm({
                title: 'Confirm!',
                content: 'You are about to Cancel Appointment. Are you sure you want to Delete this Appointment?',
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
    $("#add_practice_btn").on("click", function (e) {
        e.preventDefault();
        $('#myModal2').modal('show');
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>

<!-- Classic Modal -->
<div class="modal fade rounded-borders" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
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
                                    <label for="" class="text-light-blue">Practice Name</label>
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
                                <div class="col-md-4 text-left">
                                    <select class="selectpicker" data-style="bg-transparent text-dark border-bottom"
                                            title="Single Select" data-size="7">
                                        <option disabled selected> Choose service</option>
                                        <option value="1">
                                            Dental Cleaning
                                        </option>
                                        <option value="2">
                                            Lorem, ipsum
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-2 text-left">
                                    <input type="number" name="" id="" placeholder="100" class="form-control">
                                </div>
                            </div>
                            <div class="service-section">

                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4 text-left">
                                </div>
                                <div class="col-md-6 text-left">
                                    <div class="text-right">
                                        <a href="javascript:void(0)" class="text-light-blue add_new_service"
                                           style="font-size:12px"><i
                                                class="fas fa-plus"></i> Add New Service</a>
                                    </div>
                                </div>
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

<script>
    $(document).ready(function () {
        $(document).on('click', '.remove-service', function (){
            $(this).closest('.service-section-inner').remove();
        });
        $('.add_new_service').click(function () {
            var content = '';
            content += '<div class="service-section-inner">';
            content += '<div class="row">'
            content += '<div class="col-md-4">';
            content += '</div>';
            content += '<div class="col-md-4 text-left">';
            content += '<select class="selectpicker" data-style="bg-transparent text-dark border-bottom"';
            content += 'title="Single Select" data-size="7">';
            content += '<option disabled selected> Choose service</option>';
            content += '<option value="1">';
            content += 'Dental Cleaning';
            content += '</option>';
            content += '<option value="2">';
            content += 'Lorem, ipsum';
            content += '</option>';
            content += '</select>';
            content += '</div>';
            content += '<div class="col-md-2 text-left pt-2">';
            content += '<input type="number" name="" id="" placeholder="100" class="form-control">';
            content += '</div>';
            content += '<div class="col-md-1 text-center">';
            content += '<i class="fas fa-times text-light-blue remove-service pt-3" style="cursor: pointer;"></i>';
            content += '</div>';
            content += '</div>';
            content += '</div>';
            $('.service-section').append(content).find('.selectpicker').selectpicker();
        });
    });
</script>
