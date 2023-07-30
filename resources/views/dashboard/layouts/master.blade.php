<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Robust - Responsive Bootstrap 4 Admin Dashboard Template for Web Application</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
     <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/custom.css')}}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/calendars/clndr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/meteocons/style.min.css')}}">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.xyz/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/style.css')}}">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{asset('html/rtl/vertical-menu-template/index.html')}}">
                        <img class="brand-logo" alt="robust admin logo" style="width: 100px;margin-left: 50%;margin-right: 50%;" src="{{asset('app-assets/images/logo/Logo Zahraa.png')}}">
{{--                        <h3 class="brand-text">Robust Admin</h3></a></li>--}}
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Robust...">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span>English</span><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                    </li>
                     <li class="dropdown dropdown-user nav-item">
                         <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                             <span class="avatar avatar-online">
                                 <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar">
                                </span><span class="user-name">{{auth()->user()->name}}</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="{{route('logout')}}"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="ft-align-right"></i><span class="menu-title" data-i18n="nav.dash.main">CATEGORY</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('categories.index')}}" data-i18n="nav.dash.ecommerce">Categories</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('categories.create')}}" data-i18n="nav.dash.project">Add Category</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa fa-flag-checkered"></i><span class="menu-title" data-i18n="nav.dash.main">COUNTRY</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('country.index')}}" data-i18n="nav.dash.ecommerce">Countries</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('country.create')}}" data-i18n="nav.dash.project">Add Country</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa f fa-book"></i><span class="menu-title" data-i18n="nav.dash.main">E-BOOKS</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('ebook.index')}}" data-i18n="nav.dash.ecommerce">E-Books</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('ebook.create')}}" data-i18n="nav.dash.project">Add E-Book</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa fa-file"></i><span class="menu-title" data-i18n="nav.dash.main">PAGES</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('page.index')}}" data-i18n="nav.dash.ecommerce">Pages</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('page.create')}}" data-i18n="nav.dash.project">Add Pages</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa fa-youtube-play"></i><span class="menu-title" data-i18n="nav.dash.main">FREE VIDEOS</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('freeVideos.index')}}" data-i18n="nav.dash.ecommerce">free videos</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('freeVideos.create')}}" data-i18n="nav.dash.project">Add free videos</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa f fa-cogs"></i><span class="menu-title" data-i18n="nav.dash.main">GENERAL SETTING</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('setting.index')}}" data-i18n="nav.dash.ecommerce">  SETTING</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-user-circle-o"></i><span class="menu-title" data-i18n="nav.dash.main">INSTRUCTORS</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('instructors.index')}}" data-i18n="nav.dash.ecommerce">  instructors</a>
                    </li>
                    <li >
                        <a class="menu-item" href="{{route('instructors.create')}}" data-i18n="nav.dash.ecommerce"> Add instructors</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-user-circle-o"></i><span class="menu-title" data-i18n="nav.dash.main">CUSTOMERS</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('customers.index')}}" data-i18n="nav.dash.ecommerce">  customers</a>
                    </li>
                    <li >
                        <a class="menu-item" href="{{route('customers.create')}}" data-i18n="nav.dash.ecommerce"> Add customers</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title" data-i18n="nav.dash.main">COURSES</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('courses.index')}}" data-i18n="nav.dash.ecommerce">  courses</a>
                    </li>
                    <li >
                        <a class="menu-item" href="{{route('courses.create')}}" data-i18n="nav.dash.ecommerce"> Add courses</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-home"></i><span class="menu-title" data-i18n="nav.dash.main">HOME SECTION</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('home-section.index')}}" data-i18n="nav.dash.ecommerce">  Home section</a>
                    </li>
                    <li >
                        <a class="menu-item" href="{{route('home-section.create')}}" data-i18n="nav.dash.ecommerce">  add section for home</a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title" data-i18n="nav.dash.main">ONLINE COURSES</span> </a>
                <ul class="menu-content">
                    <li >
                        <a class="menu-item" href="{{route('online-courses.index')}}" data-i18n="nav.dash.ecommerce">  Online courses</a>
                    </li>
                    <li >
                        <a class="menu-item" href="{{route('online-courses.create')}}" data-i18n="nav.dash.ecommerce">  add online courses</a>
                    </li>


                </ul>
            </li>




                </ul>
            </li>

        </ul>
    </div>
</div>
@include('sweetalert::alert')

@yield('content')<!-- ////////////////////////////////////////////////////////////////////////////-->


<footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2023 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>

<script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.js')}}"></script>

<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
 <script src="https://www.efb.eg/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.xyz/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/full-all/ckeditor.js"></script>

@yield('script')
</body>
</html>
