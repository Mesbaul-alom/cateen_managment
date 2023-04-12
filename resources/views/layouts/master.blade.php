<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ausbd Kitchen | Catering Servicee in Bangladesh</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
            user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Ausbd Kitchen Catering Servicee in
            Bangladesh, Wedding
            Catering, Engagement Catering, Outdoor Catering, Business /
            Corporate, Anniversary Celebrations, Birthday Party Catering,
            Private / Theme Party, Daily Lunch & Dinner Box." />
    <meta name="keywords"
        content="Ausbd Kitchen Catering Servicee in
            Bangladesh, Wedding
            Catering, Engagement Catering, Outdoor Catering, Business /
            Corporate, Anniversary Celebrations, Birthday Party Catering,
            Private / Theme Party, Daily Lunch & Dinner Box." />
    <meta name="author" content="Bigbag Software" />

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-n.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('bower_components/chartist/css/chartist.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widget.css') }}" />
</head>

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>



        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            <img class="img-fluid" src="files/assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword" />
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()"
                                    class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <img src="files/assets/images/avatar-4.jpg" class="img-radius"
                                            alt="User-Profile-Image" /> --}}

                                        <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                                        <span>{{ Auth::user()->name }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i>
                                                Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>

                                        <li>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                <i class="feather icon-log-out"></i>
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="subcriptions.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Subcriptions</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Meal Plan</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="pcoded-hasmenu">
                                                <a href="{{ route('food.variant') }}"
                                                    class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Food Variant</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu">
                                                <a href="{{ route('food.manu') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Food Menu</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu">
                                                <a href="{{ route('day') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Day</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu">
                                                <a href="{{ route('menu.details') }}"
                                                    class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Menu Details</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu">
                                                <a href="{{ route('food.plan') }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Food Plan</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="{{ route('customer.reg') }}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Customer Register</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}">
    </script>
    <script src="{{ asset('assets/pages/chart/float/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/pages/chart/float/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('bower_components/chartist/js/chartist.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.min.js') }}"></script>


    @include('sweetalert::alert')

    @yield('footer_script')
</body>

</html>
