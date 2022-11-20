<!--Navbar -->
<nav id="navbar" class="navbar navbar-expand-md fixed-top bg-transparent navbar-dark">
    <div class="container-fluid container-lg">
        <!--Brand -->
        <a class="navbar-brand text-white" href="{{ route('/') }}">
            <img id="dark-brand-image" src="https://laravel.com/img/logomark.min.svg" alt="Logo"
                class="d-inline-block align-text-center img-fluid" width="40" />
        </a>

        <!--Toggler Button -->
        <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Open">
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </a>

        <!--Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <!--Offcanvas Header -->
            <div class="offcanvas-header">
                <span class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="https://laravel.com/img/logomark.min.svg" alt="Logo"
                        class="d-inline-block align-text-center img-fluid" width="40" />
                </span>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <!--Offcanvas Body -->
            <div class="offcanvas-body align-items-center">
                <ul id="nav-items"
                    class="navbar-nav justify-content-end align-items-start align-items-md-center flex-grow-1 animate slideIn">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/') }}">Home</a>
                    </li>
                    <!-- 
                    <li class="nav-item dropdown">
                        <a class="nav-link text-muted" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                    </li>
                    -->
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link text-muted" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item text-danger" href="#!"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Logout
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
