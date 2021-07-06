<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top pt-3 pb-3">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            {{--            <div class="navbar-minimize">--}}
            {{--                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">--}}
            {{--                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>--}}
            {{--                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>--}}
            {{--                </button>--}}
            {{--            </div>--}}
            <a class="navbar-brand p-1" href="{{ url('/')  }}">
                <img src="{{ asset('assets/vet/logo_3.png') }}" alt="" class="logo">
            </a>
        </div>
{{--        <button class="navbar-toggler" type="button" id="mob-dropdown" >--}}
{{--            <span class="sr-only">Toggle navigation</span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--        </button>--}}
        <a href="javascript:;" id="mob-dropdown" class="desk-hide" >
            <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        <div
            class="dropdown-menu mob-dropdown-menu dropdown-menu-right bg-primary text-white logout_dropdown ml-auto desk-hide"
            aria-labelledby="navbarDropdownProfile" aria-controls="navigation-index" style="right: 2vw; width: 50%;">
            @guest
                <a class="dropdown-item text-white border-bottom" href="{{ url('/#about_us') }}">About us</a>
                <a class="dropdown-item text-white border-bottom" href="javascript:;">Claim Practice</a>
                <a class="dropdown-item text-white border-bottom" href="{{ route('register') }}">Sign up</a>
                <a class="dropdown-item text-white border-bottom" href="{{ route('login') }}">Login</a>
            @else
                <a class="dropdown-item text-white border-bottom" href="{{ url('appointments-list') }}">Appointments</a>
                <a class="dropdown-item text-white border-bottom" href="{{ url('profile') }}">Profile</a>
{{--                <a class="dropdown-item text-white border-bottom" href="{{ url('profile-edit') }}">Settings</a>--}}
                <a class="dropdown-item text-white border-bottom" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link header_link text-primary @if(url('/') == url()->current())about_us_a"
                       href="#action" @else about_us_a" href="{{ url('/#about_us') }}" @endif>
                    About us
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link header_link text-primary" href="javascript:;">
                            Claim Practice
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('register') }}"
                           class="btn btn-primary header_btn header_btn_active pt-2 pb-2 pl-4 pr-4 ml-2">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('login') }}"
                           class="btn btn-primary header_btn pt-2 pb-2 pl-4 pr-4 ml-3 mr-4 text-primary bg-light">Login</a>
                    </li>
                @else
                    <li class="nav-item dropdown show bg-primary text-white rounded ml-4" style="width: 10vw;">
                        <a class="nav-link p-1" href="javascript:;" id="navbarDropdownProfile"
                           style="font-size: 0.8vw; font-weight: 700"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="row">
                                <div class="col text-left">
                                    {{--                                    {{ Auth::user()->first_name }}--}}
                                    Bailey
                                </div>
                                <div class="col text-right">
                                    <i class="fa fa-caret-down" aria-hidden="true" style="font-size: 1vw"></i></div>
                            </div>

                            {{--                        <i class="material-icons">person</i>--}}
                            {{--                        <p class="d-lg-none d-md-block">--}}
                            {{--                            Account--}}
                            {{--                        </p>--}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-primary text-white logout_dropdown"
                             aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item text-white border-bottom" href="{{ url('appointments-list') }}">Appointments</a>
                            <a class="dropdown-item text-white border-bottom" href="{{ url('profile') }}">Profile</a>
{{--                            <a class="dropdown-item text-white border-bottom"--}}
{{--                               href="{{ url('profile-edit') }}">Settings</a>--}}
                            <a class="dropdown-item text-white border-bottom" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
