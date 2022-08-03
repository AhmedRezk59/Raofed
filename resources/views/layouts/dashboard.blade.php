<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/images/favicon.ico') }}" />

    <!-- Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" />
    <!-- alpine js -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/css/style.css') }}" />
    @livewireStyles
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/jquery-3.3.1.min.js') }}"></script>

</head>

<body>
    <div class="wrapper">
        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{ asset('images/pre-loader/loader-01.svg') }}" alt="" />
        </div>

        <!--=================================
 preloader -->

        <!--=================================
 header start-->

        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="/"><img
                        src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/images/logo-dark.png') }}"
                        alt="" /></a>
                <a class="navbar-brand brand-logo-mini" href="/"><img
                        src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/images/logo-icon-dark.png') }}"
                        alt="" /></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
                <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                        <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search" />
                            <button class="search-button" type="submit">
                                <i class="fa fa-search not-click"></i>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-bell"></i>
                        <span class="badge badge-danger notification-status"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">
                            <strong>Notifications</strong>
                            <span
                                class="badge badge-pill badge-warning">{{ auth()->guard('admin')->user()->unReadNotifications->count() }}</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        @foreach (auth()->guard('admin')->user()->unReadNotifications as $n)
                            <a href="#" class="dropdown-item notification">{{ $n->data['name'] }}
                                <strong class="float-right time">
                                    <h6>{{ $n->data['tel'] }}</h6>
                                    <form action="{{ route('dashboard.mark_as_read') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $n->id }}">
                                        <button type="submit" class="btn button">تم القراءة</button>
                                    </form>
                                </strong>
                                <p>{{ $n->data['message'] }}</p>

                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="true">
                        <i class="ti-view-grid"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big">
                        <div class="dropdown-header">
                            <strong>Quick Links</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i>
                                <h5>New Task</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                                <h5>Assign Task</h5>
                            </a>
                        </div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                                <h5>Add Orders</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-truck text-danger"></i>
                                <h5>New Orders</h5>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/images/profile-avatar.jpg') }}"
                            alt="avatar" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">{{ auth()->guard('admin')->user()->name }}</h5>
                                    <span>{{ auth()->guard('admin')->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a>
                        <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
                        <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
                        <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects
                            <span class="badge badge-info">6</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i
                                    class="text-danger ti-unlock"></i>{{ __('auth.logout') }}</button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->

        <!--=================================
 Main content -->

        <div class="container-fluid">
            <div class="row">
                <!-- Left Sidebar start-->
                <div class="side-menu-fixed">
                    <div class="scrollbar side-menu-bg">
                        <ul class="nav navbar-nav side-menu" id="sidebarnav">
                            <!-- menu item Dashboard-->

                            {{-- <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                                    <div class="pull-left">
                                        <i class="ti-home"></i><span class="right-nav-text">Dashboard</span>
                                    </div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                                    <li><a href="index.html">Dashboard 01</a></li>
                                    <li><a href="index-02.html">Dashboard 02</a></li>
                                    <li><a href="index-03.html">Dashboard 03</a></li>
                                    <li><a href="index-04.html">Dashboard 04</a></li>
                                    <li><a href="index-05.html">Dashboard 05</a></li>
                                </ul>
                            </li> --}}




                            <li>
                                <a href="{{ route('dashboard.admins.index') }}">
                                    <div class="pull-left">
                                        <i class="ti-layout-tab-window"></i><span
                                            class="right-nav-text">{{ __('site.admins') }}</span>
                                    </div>

                                </a>

                            </li>

                            <li>
                                <a href="{{ route('dashboard.users.index') }}">
                                    <div class="pull-left">
                                        <i class="ti-layout-tab-window"></i><span
                                            class="right-nav-text">{{ __('site.users') }}</span>
                                    </div>

                                </a>

                            </li>
                            <li>
                                <a href="{{ route('dashboard.jobs.index') }}">
                                    <div class="pull-left">
                                        <i class="ti-layout-tab-window"></i><span
                                            class="right-nav-text">{{ __('site.jobs') }}</span>
                                    </div>

                                </a>

                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                                    <div class="pull-left">
                                        <i class="ti-home"></i><span
                                            class="right-nav-text">{{ __('site.languages') }}</span>
                                    </div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Left Sidebar End-->

                <!--=================================
wrapper -->

                <div class="content-wrapper">
                    @yield('header')


                    <!-- Orders Status widgets-->
                    <div class=" h-auto w-100 pb-4">
                        @yield('content')
                    </div>
                    <!--=================================
 footer -->

                    <footer class="bg-white p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center text-md-left">
                                    <p class="mb-0">
                                        &copy; Copyright
                                        <span id="copyright">
                                            <script>
                                                document
                                                    .getElementById("copyright")
                                                    .appendChild(
                                                        document.createTextNode(new Date().getFullYear())
                                                    );
                                            </script>
                                        </span>. <a href="#"> Webmin </a> All Rights
                                        Reserved.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="text-center text-md-right">
                                    <li class="list-inline-item">
                                        <a href="#">Terms & Conditions </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">API Use Policy </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Privacy Policy </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- main content wrapper end-->
            </div>
        </div>
    </div>

    <!--=================================
 footer -->

    <!--=================================
 jquery -->

    <!-- jquery -->

    <!-- plugins-jquery -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/plugins-jquery.js') }}"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = "{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/') }}";
    </script>

    <!-- chart -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/chart-init.js') }}"></script>

    <!-- calendar -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/calendar.init.js') }}"></script>

    <!-- charts sparkline -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/sparkline.init.js') }}"></script>

    <!-- charts morris -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/morris.init.js') }}"></script>

    <!-- datepicker -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/datepicker.js') }}"></script>

    <!-- sweetalert2 -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/sweetalert2.js') }}"></script>

    <!-- toastr -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/toastr.js') }}"></script>

    <!-- validation -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/validation.js') }}"></script>

    <!-- lobilist -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/lobilist.js') }}"></script>

    <!-- custom -->
    <script src="{{ asset(LaravelLocalization::getCurrentLocaleDirection() . '/js/custom.js') }}"></script>
    @livewireScripts
</body>

</html>
