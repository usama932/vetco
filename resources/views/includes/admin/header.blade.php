<nav class="navbar  bg-blue    navbar-expand-lg " id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('admin/home') }}">
                <img src="./assets/img/logo.png" alt="" class="img-fluid" width="120"> </a>
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
                    <a class="nav-link" href="{{ url('admin/home') }}">Dashboard</a>
                </li>
                <li
                    class="dropdown nav-item <?php echo($page == "All Practices" || $page == "Pending Requests" ? "active" : "")?> ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        Practices
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ url('admin/all-practices') }}" class="dropdown-item">
                            All Practices
                        </a>
                        <a href="{{ url('admin/pending-requests') }}" class="dropdown-item">
                            Pending Practices
                        </a>

                    </div>
                </li>
                {{--                <li class="nav-item <?php echo($page == "Profile" ? "active" : "")?> ">--}}
                {{--                    <a class="nav-link" href="{{ url('admin/profile') }}">Profile</a>--}}
                {{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="" id="add_practice_btn">Add New Practice</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">


                <li class=" nav-item">
                    <input type="text" class="rounded border-0" placeholder="Dental Cleaning">

                </li>
                <li class=" nav-item ml-3 mr-3">
                    <input type="text" class="rounded border-0" placeholder="1500, California Search">

                </li>
                <li class="button-container nav-item iframe-extern">
                    <a href="{{ url('admin/search-results') }}" class="btn search-btn btn-light-blue btn-block">
                        Search
                    </a>
                </li>
                <li class="button-container nav-item iframe-extern">
                    <a class="ml-2 text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
