<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- scripts helpers -->
    <script src="{{route('slc.js')}}" type="text/javascript"></script>

    <!-- JQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js" text="text/javascript"></script>

    <!-- jquery -->
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"  type="text/ecmascript"></script>
    <script
            src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"  type="text/ecmascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="{{str_contains(Request::url(), "/login") ? "bg-login" : ""}}">


    <div id="app">
        <div class="wrapper">
            @if(!str_contains(Request::url(), "/login"))
                <div class="main-header">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="tmontec">

                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('imagens/logo-branco.png') }}" alt="navbar brand" class="navbar-brand">
                        </a>

                        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                        </button>
                        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <!-- End Logo Header -->

                    <!-- Navbar Header -->
                    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="tmontec">

                        <div class="container-fluid">
                            {{--<div class="collapse" id="search-nav">--}}
                            {{--<form class="navbar-left navbar-form nav-search mr-md-3">--}}
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-prepend">--}}
                            {{--<button type="submit" class="btn btn-search pr-1">--}}
                            {{--<i class="fa fa-search search-icon"></i>--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            {{--<input type="text" placeholder="Search ..." class="form-control">--}}
                            {{--</div>--}}
                            {{--</form>--}}
                            {{--</div>--}}
                            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                                <li class="nav-item toggle-nav-search hidden-caret">
                                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                        <li>
                                            <div class="dropdown-title d-flex justify-content-between align-items-center">
                                                Messages
                                                <a href="#" class="small">Mark all as read</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-notif-scroll scrollbar-outer">
                                                <div class="notif-center">
                                                    <a href="#">
                                                        <div class="notif-img">
                                                            <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="subject">Jimmy Denis</span>
                                                            <span class="block">
                                                            How are you ?
                                                        </span>
                                                            <span class="time">5 minutes ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-img">
                                                            <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="subject">Chad</span>
                                                            <span class="block">
                                                            Ok, Thanks !
                                                        </span>
                                                            <span class="time">12 minutes ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-img">
                                                            <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="subject">Jhon Doe</span>
                                                            <span class="block">
                                                            Ready for the meeting today...
                                                        </span>
                                                            <span class="time">12 minutes ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-img">
                                                            <img src="../assets/img/talha.jpg" alt="Img Profile">
                                                        </div>
                                                        <div class="notif-content">
                                                            <span class="subject">Talha</span>
                                                            <span class="block">
                                                            Hi, Apa Kabar ?
                                                        </span>
                                                            <span class="time">17 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell"></i>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                        <li>
                                            <div class="dropdown-title">You have 4 new notification</div>
                                        </li>
                                        <li>
                                            <div class="notif-scroll scrollbar-outer">
                                                <div class="notif-center">
                                                    <a href="#">
                                                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                        <div class="notif-content">
                                                        <span class="block">
                                                            New user registered
                                                        </span>
                                                            <span class="time">5 minutes ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                                        <div class="notif-content">
                                                        <span class="block">
                                                            Rahmad commented on Admin
                                                        </span>
                                                            <span class="time">12 minutes ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-img">
                                                            <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                                        </div>
                                                        <div class="notif-content">
                                                        <span class="block">
                                                            Reza send messages to you
                                                        </span>
                                                            <span class="time">12 minutes ago</span>
                                                        </div>
                                                    </a>
                                                    <a href="#">
                                                        <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                        <div class="notif-content">
                                                        <span class="block">
                                                            Farrah liked Admin
                                                        </span>
                                                            <span class="time">17 minutes ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <i class="fas fa-layer-group"></i>
                                    </a>
                                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                        <div class="quick-actions-header">
                                            <span class="title mb-1">Quick Actions</span>
                                            <span class="subtitle op-8">Shortcuts</span>
                                        </div>
                                        <div class="quick-actions-scroll scrollbar-outer">
                                            <div class="quick-actions-items">
                                                <div class="row m-0">
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <i class="flaticon-file-1"></i>
                                                            <span class="text">Generated Report</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <i class="flaticon-database"></i>
                                                            <span class="text">Create New Database</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <i class="flaticon-pen"></i>
                                                            <span class="text">Create New Post</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <i class="flaticon-interface-1"></i>
                                                            <span class="text">Create New Task</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <i class="flaticon-list"></i>
                                                            <span class="text">Completed Tasks</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <i class="flaticon-file"></i>
                                                            <span class="text">Create New Invoice</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <div class="avatar-sm">
                                            <img src="{{ asset('imagens/logo-branco.png') }}" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                            <li>
                                                <div class="user-box">
                                                    <div class="avatar-lg"><img src="{{ asset('imagens/logo-branco.png') }}" alt="image profile" class="avatar-img rounded"></div>
                                                    <div class="u-text">
                                                        <h4>Hizrian</h4>
                                                        <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <a class="dropdown-item" href="#">My Balance</a>
                                                <a class="dropdown-item" href="#">Inbox</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Account Setting</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>

                @include("layouts.side-bar")
                <main class="main-panel">
                    {{--<div class="content">--}}
                        {{--<div class="page-inner">--}}
                            @yield('content')
                        {{--</div>--}}
                    {{--</div>--}}
                    <footer class="footer" data-background-color="tmontec-dark">
                        <div class="container-fluid">
                            <nav class="pull-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank" href="http://themekita.com/demo-atlantis-lite-bootstrap/livepreview/documentation/">
                                            Documentação
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="copyright ml-auto">
                                2019, Tmontec
                            </div>
                        </div>
                    </footer>
                </main>

            @else
                @yield('content')
            @endif

        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset("/css/fonts.min.css") }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script src="{{ asset('js/admin/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/admin/atlantis.js') }}" defer></script>
    @yield("scripts")
</body>
</html>
