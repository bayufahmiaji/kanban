<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        | SIM - STP
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/btplogo.png')}}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    @yield('header_styles')
</head>

<body class="sidebar-left-hidden">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand" href="index1">
                    <h4><img src="{{asset('assets/img/btplogo.png')}}" class="admin_img" alt="logo"> SIM - STP</h4>
                </a>
                <div class="menu mr-sm-auto">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="top_search_box d-none d-md-flex">
                    <form class="header_input_search">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
                <div class="topnav dropdown-menu-right">
                    <div class="btn-group small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('assets/img/admin.jpg')}}" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>Micheal</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="login2"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="mt-3">
                <div class="left_media">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                     src="{{asset('assets/img/admin.jpg')}}">
                                <p class="user-info menu_hide">Welcome Micheal</p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                </div>
                <ul id="menu">
                <li {!! (Request::is('/')? 'class="active"':"") !!}>
                        <a href="{{ URL('/') }} ">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Beranda</span>
                        </a>
                        </li>
                        <!-- Menu Tenant Service -->
                        <li {!! (Request::is('tenant')? 'class="active"':"") !!}>
                        <a href="{{ URL('/tenant') }} ">
                            <i class="fa fa-building"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Tenant Service</span>
                        </a>
                        </li>

                        <!-- Menu Inkubator Bisnis -->
                        <li {!! (Request::is('inkubator')? 'class="active"':"") !!}>
                        <a href="{{ URL('/inkubator') }} ">
                            <i class="fa fa-cube"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Inkubator Bisnis</span>
                        </a>
                        </li>

                        <!-- Menu Hilirisasi Riset -->
                        <li {!! (Request::is('hilirisasi')? 'class="active"':"") !!}>
                        <a href="{{ URL('/hilirisasi') }} ">
                            <i class="fa fa-flask"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Hilirisasi Riset</span>
                        </a>
                        </li>

                        <!-- Menu Layanan Teknologi -->
                        <li {!! (Request::is('layanan')? 'class="active"':"") !!}>
                        <a href="{{ URL('/layanan') }} ">
                            <i class="fa fa-desktop"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Layanan Teknologi</span>
                        </a>
                        </li>

                        <!-- Kanban -->
                        <li {!! (Request::is('kanban')? 'class="active"':"") !!}>
                        <a href="{{ URL('/kanban') }} ">
                        <i class="fa fa-book"></i>
                        <span class="link-title menu_hide">&nbsp;&nbsp;Kanban</span>
                        </a>
                        </li>

                        <!-- Pengaturan -->
                        <li {!! (Request::is('pengaturan')? 'class="active"':"") !!}>
                        <a href="{{ URL('/pengaturan') }} ">
                        <i class="fa fa-gear"></i>
                        <span class="link-title menu_hide">&nbsp;&nbsp;Pengaturan</span>
                        </a>
                        </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->

        <div id="content" class="bg-container">
            <!-- Content -->
            @yield('content')
            <!-- Content end -->
        </div>
        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <form>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="float-right" aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group search_bar_small">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <span class="input-group-append">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#content -->
    @include('layouts/right_sidebar/default')

</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- end of global scripts-->
<!-- page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>