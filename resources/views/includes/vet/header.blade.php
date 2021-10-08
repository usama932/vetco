<nav class="navbar  bg-blue    navbar-expand-lg " id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/vet/home') }}">
                <img src="{{asset('vet/assets/img/logo.png')}}" alt="" class="img-fluid" width="120"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo($page == "Dashboard" ? "active" : "")?> ">
                    <a class="nav-link" href="{{ url('vet/home') }}" style="color:white !important">Dashboard</a>
                </li>
{{--                <li class="nav-item <?php echo($page == "Services" ? "active" : "")?> ">--}}
{{--                    <a class="nav-link" href="{{ url('vet/services') }}">Services</a>--}}
{{--                </li>--}}
                <li
                    class="dropdown nav-item <?php echo($page == "All Practices" || $page == "Pending Requests" ? "active" : "")?> ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" style="color:white !important">
                        Appointments
                    </a>
                    <div class="dropdown-menu dropdown-with-icons bg-blue">
                        <a href="{{ url('vet/appointments') }}" class="dropdown-item text-white" style="color:white !important">
                            All Appointments
                        </a>
                        <!-- <a href="{{ url('vet/pending-appointments') }}" class="dropdown-item text-white" style="color:white !important">
                            Pending Appointments
                        </a> -->
                    </div>
                </li>
                <li
                    class="dropdown nav-item <?php echo($page == "Services" || $page == "Claim Practice" ? "active" : "")?> ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" style="color:white !important">
                        Profile
                    </a>
                    <div class="dropdown-menu dropdown-with-icons bg-blue">
                        <a href="{{ url('vet/practice-details') }}" class="dropdown-item text-white">
                            Practice Details
                        </a>
                        <a href="{{ url('vet/services') }}" class="dropdown-item text-white">
                            Services
                        </a>
                        {{--                        <a href="{{ url('vet/claim-practice') }}" class="dropdown-item text-white">--}}
                        {{--                            Claim Pratice--}}
                        {{--                        </a>--}}
                    </div>
                </li>
{{--                <li class="nav-item <?php echo($page == "Reviews" ? "active" : "")?> ">--}}
{{--                    <a class="nav-link" href="{{ url('vet/reviews') }}">Reviews</a>--}}
{{--                </li>--}}
                <!-- <li class="nav-item">
                    <a class="nav-link" href="" id="add_practise_btn">Add New Practice</a>
                </li> -->
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
{{--                    <a href="{{ url('/vet/login') }}" class="ml-2 text-white" style="font-size: 18px;">--}}
{{--                        <i class="fas fa-sign-out-alt pt-1"></i>--}}
{{--                    </a>--}}
                    <a class="ml-2 text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

{{--                <li class=" nav-item">--}}
{{--                    <input type="text" class="rounded border-0" placeholder="Keyword">--}}

{{--                </li>--}}
{{--                <li class=" nav-item ml-3 mr-3">--}}
{{--                    <input type="text" class="rounded border-0" placeholder="Zip code, State">--}}

{{--                </li>--}}
{{--                <li class="button-container nav-item iframe-extern">--}}
{{--                    <a href="{{ url('vet/search-result') }}" class="btn search-btn btn-light-blue btn-block">--}}
{{--                        Search--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="dropdown nav-item  ">--}}
{{--                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">--}}
{{--                        <i class="fas fa-gear"></i>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu bg-blue dropdown-with-icons">--}}
{{--                        <a href="{{ url('vet/profile') }}" class="dropdown-item text-white">--}}
{{--                            Profile--}}
{{--                        </a>--}}
{{--                        <a href="{{ url('vet/login') }}" class="dropdown-item text-white">--}}
{{--                            Logout--}}
{{--                        </a>--}}

{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
