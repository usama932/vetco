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
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link header_link text-primary" href="javascript:;">
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
                    <li class="nav-item dropdown show bg-primary text-white rounded" style="width: 8vw;">
                        <a class="nav-link " href="javascript:;" id="navbarDropdownProfile" style="font-size: 1.1vw"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bailey
                            {{--                        <i class="material-icons">person</i>--}}
                            {{--                        <p class="d-lg-none d-md-block">--}}
                            {{--                            Account--}}
                            {{--                        </p>--}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-primary text-white logout_dropdown"
                             aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item text-white border-bottom" href="#">Appointments</a>
                            <a class="dropdown-item text-white border-bottom" href="#">Profile</a>
                            <a class="dropdown-item text-white border-bottom" href="#">Settings</a>
                            <a class="dropdown-item text-white border-bottom" href="#">Log out</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
