<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="author" content="Laravel" />
        <meta
            name="description"
            content="Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things."
        />
        <link rel="canonical" href="{{ env('APP_URL') }}" />
        <title>{{ env("APP_NAME", "Laravel") }}</title>

        <!-- AdminLTE -->
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- iCheck -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'
                )
            }}"
        />
        <!-- Theme style -->
        <link
            rel="stylesheet"
            href="{{ asset('admin-lte/dist/css/adminlte.min.css') }}"
        />
        <!-- overlayScrollbars -->
        <link
            rel="stylesheet"
            href="{{
                asset(
                    'admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'
                )
            }}"
        />
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <header>
                <!-- Navbar -->
                <nav
                    class="main-header navbar navbar-expand navbar-white navbar-light"
                >
                    <!-- Left -->
                    <ul class="navbar-nav ml-4">
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-widget="pushmenu"
                                href="#"
                                role="button"
                            >
                                <i class="fa-solid fa-bars"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav ml-auto mr-4">
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="far fa-user"></i>
                                {{ Auth::user()->name }}
                            </a>
                            <ul
                                class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                            >
                                <li class="dropdown-item dropdown-header">
                                    Account Settings
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="dropdown-item">
                                    <form
                                        method="POST"
                                        action="{{ route('logout') }}"
                                    >
                                        @csrf

                                        <a
                                            class="fs-sm text-danger text-decoration-none"
                                            href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                        >
                                            Logout
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                data-widget="fullscreen"
                                href="#"
                                role="button"
                            >
                                <i class="fa-solid fa-expand-arrows-alt"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>

            <main>
                <aside class="main-sidebar sidebar-dark-primary elevation-2">
                    <!-- Brand Logo -->
                    <a
                        href="{{ route('/') }}"
                        class="brand-link text-decoration-none bg-white"
                    >
                        <img
                            src="{{ asset('img/icon.png') }}"
                            alt="{{ env('APP_NAME') }} Logo"
                            class="brand-image"
                        />
                        <span class="brand-text fw-bold fs-xs"
                            >Arsip Nasional Republik Indonesia</span
                        >
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidenav -->
                        <nav class="mt-2">
                            <ul
                                class="nav nav-pills nav-sidebar flex-column"
                                data-widget="treeview"
                                role="menu"
                                data-accordion="false"
                            >
                                @can('admin')
                                <li class="nav-header">Admin Panel</li>
                                <li class="nav-item">
                                    <a
                                        href="{{ route('dashboard') }}"
                                        class="nav-link"
                                    >
                                        <i
                                            class="nav-icon fa-solid fa-tachometer-alt"
                                        ></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                @endcan
                                <li class="nav-item">
                                    <a
                                        href="{{
                                            route('dashboard.account_settings')
                                        }}"
                                        class="nav-link"
                                    >
                                        <i
                                            class="nav-icon fa-solid fa-screwdriver-wrench"
                                        ></i>
                                        <p>Account Settings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form
                                        method="POST"
                                        action="{{ route('logout') }}"
                                    >
                                        @csrf
                                        <a
                                            type="submit"
                                            class="nav-link text-danger"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                        >
                                            <i
                                                class="nav-icon fa-solid fa-right-from-bracket"
                                            ></i>
                                            <p>Logout</p>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

                <div class="content-wrapper">
                    <!-- Content Header -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <!-- Breadcumbs -->
                                    <ol class="breadcrumb float-sm-left">
                                        <li class="breadcrumb-item active">
                                            <a
                                                class="text-decoration-none tw-text-gray-600"
                                                href="{{ route('dashboard') }}"
                                                >Dashboard</a
                                            >
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <section class="content">
                        <div class="container-fluid">
                            {{ $slot }}
                        </div>
                    </section>
                </div>
            </main>

            <footer class="main-footer">Admin LTE 3.1</footer>
        </div>

        <!-- jQuery -->
        <script src="{{
                asset('admin-lte/plugins/jquery/jquery.min.js')
            }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{
                asset('admin-lte/plugins/jquery-ui/jquery-ui.min.js')
            }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{
                asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')
            }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{
                asset(
                    'admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'
                )
            }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
