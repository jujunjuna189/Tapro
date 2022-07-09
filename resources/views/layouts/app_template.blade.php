<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Tapro (Task Progress)</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet" />
    <!-- Pus Dist -->
    <link href="{{ asset('assets/pus_dist/css/style.css') }}" rel="stylesheet" />
    <!-- Toast -->
    <link rel="stylesheet" href="{{ asset('assets/pus_dist/lib/jquery-toast-plugin/jquery.toast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/pus_dist/lib/sweetalert/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- ....... -->
</head>

<body class="layout-fluid theme-light">
    <div class="page">
        @if(!isset($nav) || $nav == true)
        <header class="navbar navbar-expand-md navbar-light d-print-none mx-3 my-2 rounded-10">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3 d-flex d-md-none">
                    <a href=".">
                        <img src="{{ asset('assets/dist/img/logo/logo.svg') }}" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <x-notification.bell-notification />
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm">{{ substr(Auth::user()->name, 0, 2) }}</span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <!-- <a href="#" class="dropdown-item">Set status</a> -->
                            <a href="#" class="dropdown-item">Profile &amp; account</a>
                            <!-- <a href="#" class="dropdown-item">Feedback</a> -->
                            <div class="dropdown-divider"></div>
                            <!-- <a href="#" class="dropdown-item">Settings</a> -->
                            <a href="#" class="dropdown-item" onclick="logout_app()">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav strong">
                            <li class="nav-item @if(isset($page->nav_code) && $page->nav_code == 0) active @endif">
                                <a class="nav-link" href="{{ route('home') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        {!! App\Models\GlobalModel::my_icon()->home !!}
                                    </span>
                                    <span class="nav-link-title">
                                        Beranda
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item @if(isset($page->nav_code) && $page->nav_code == 1) active @endif">
                                <a class="nav-link" href="{{ route('workspaces') }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        {!! App\Models\GlobalModel::my_icon()->layer !!}
                                    </span>
                                    <span class="nav-link-title">
                                        Ruang Kerja
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @endif
        <!-- Subnab jika ada -->
        @yield('subnav')
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                @yield('header')
            </div>
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none d-none d-md-block">
                <div class="container-xl">
                    <div class="row text-center align-items-center">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; Taspro
                                    Created By @Ujun Junaedi
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                                        v0.0.1-1.0.0
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <x-modal.logout />
    @yield('modal')
    <!-- Libs JS -->
    <script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/jsvectormap/dist/maps/world-merc.js') }}"></script>
    <!-- Tabler Core -->
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('assets/dist/libs/litepicker/dist/litepicker.js') }}"></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}"></script>
    <!-- ............. -->
    <!-- Hiiden Custome -->
    <div id="info" hidden class="hidden"></div>
    <script src="{{ asset('assets/pus_dist/lib/recognation/speechToText.js') }}"></script>
    <script src="{{ asset('assets/pus_dist/lib/jquery/jquery.min.js') }}"></script>
    <!-- Chart JustGage -->
    <script src="{{ asset('assets/pus_dist/lib/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/pus_dist/lib/justgage/justgage.js') }}"></script>
    <!-- Toast and sweetalert -->
    <script src="{{ asset('assets/pus_dist/lib/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('assets/pus_dist/lib/sweetalert/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Firebase -->
    <script type="module" src="{{ asset('assets/pus_dist/js/firebase/config.js') }}"></script>
    <!-- Custome Js -->
    <script src="{{ asset('assets/pus_dist/js/script.js') }}"></script>

    <script>
        let auth_user = <?= json_encode(Illuminate\Support\Facades\Auth::user()) ?>;
        let user_id = auth_user.id;
        let url = "<?= url('') ?>";
        let token = "<?= Illuminate\Support\Facades\Session::token() ?>";
    </script>
    @yield('script')
    @stack('script')
    <!-- Notif -->
    @if(session('success'))
    <script>
        notif('<?= session('success') ?>', 'info');
    </script>
    @endif

    @if(session('failed'))
    <script>
        notif('<?= session('failed') ?>', 'error');
    </script>
    @endif
</body>

</html>