<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
    <meta name="keywords"
          content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title> Zahraa Academy Dashboard</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    @if(app()->getLocale()=='en')
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">

    @else
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/vendors.css')}}">
    @endif
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    @if(app()->getLocale()=='en')

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/custom.css')}}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/calendars/clndr.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom.css')}}">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/calendars/clndr.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/meteocons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.xyz/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    @if(app()->getLocale()=='en')

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/style.css')}}">

    @else
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/style.css')}}">
        <style>
            th
            {
                text-align: right !important;

            }
        </style>

    @endif
    <style>
        .dataTables_wrapper
        {
            overflow-x: scroll;

        }
    </style>

    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
      data-menu="vertical-menu" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand"
                                        href="{{asset('html/rtl/vertical-menu-template/index.html')}}">
                        <img class="brand-logo" alt="robust admin logo" style="width: 100px;margin-left: 50%;margin-right: 50%;"
                             src="{{asset('app-assets/images/logo/Logo Zahraa.png')}}"/>
                    </a>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"> </i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">

                            <i class="flag-icon flag-icon-{{app()->getLocale()=='en'?'gb':'kw'}}"></i>
                            <span>{{app()->getLocale()=='en'?'English':'العربية'}}</span><span
                                class="selected-language"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                <a class="dropdown-item"
                                   href="{{ url(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)) }}"><i
                                        class="flag-icon flag-icon-{{$properties['regional']}}"></i> {{ $properties['native'] }}
                                </a>

                            @endforeach
                            {{--                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>--}}
                            {{--                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>--}}
                            {{--                        --}}
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                             <span class="avatar avatar-online">
                                 <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar">
                                </span><span class="user-name">{{auth()->user()->name}}</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('logout')}}"><i
                                    class="ft-power"></i> {{__('dashboard.logout')}}</a>
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
                <a href="{{url('/dashboard')}}"><i class="ft-align-right"></i><span class="menu-title"
                                                                                    data-i18n="nav.dash.main">{{__('dashboard.categories')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('categories.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.categories')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('categories.create')}}"
                           data-i18n="nav.dash.project">{{__('dashboard.add-category')}}</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa fa-flag-checkered"></i><span class="menu-title"
                                                                                          data-i18n="nav.dash.main">{{__('dashboard.countries')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('country.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.countries')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('country.create')}}"
                           data-i18n="nav.dash.project">{{__('dashboard.add-country')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa f fa-book"></i><span class="menu-title"
                                                                                  data-i18n="nav.dash.main">{{__('dashboard.ebooks')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('ebook.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.ebooks')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('ebook.create')}}"
                           data-i18n="nav.dash.project">{{__('dashboard.add-ebooks')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa fa-file"></i><span class="menu-title"
                                                                                data-i18n="nav.dash.main">{{__('dashboard.pages')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('page.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.pages')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('page.create')}}"
                           data-i18n="nav.dash.project">{{__('dashboard.add-pages')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa fa-youtube-play"></i><span class="menu-title"
                                                                                        data-i18n="nav.dash.main">{{__('dashboard.free-videos')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('freeVideos.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.free-videos')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('freeVideos.create')}}"
                           data-i18n="nav.dash.project">{{__('dashboard.add-free-videos')}}</a>
                    </li>
                </ul>
            </li>
            {{--            <li class=" nav-item">--}}
            {{--                <a href="{{url('/dashboard')}}"><i class="fa fa-youtube-play"></i><span class="menu-title" data-i18n="nav.dash.main"> {{__('dashboard.videos')}}</span> </a>--}}
            {{--                <ul class="menu-content">--}}
            {{--                    <li >--}}
            {{--                        <a class="menu-item" href="{{route('videos.index')}}" data-i18n="nav.dash.ecommerce">{{__('dashboard.videos')}}</a>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <a class="menu-item" href="{{route('videos.create')}}" data-i18n="nav.dash.project">{{__('dashboard.add-videos')}}</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa f fa-cogs"></i><span class="menu-title"
                                                                                  data-i18n="nav.dash.main">{{__('dashboard.general-setting')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('setting.edit',1)}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.edit-setting')}}</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-user-circle-o"></i><span class="menu-title"
                                                                                          data-i18n="nav.dash.main">{{__('dashboard.instructors')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('instructors.index')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.instructors')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('instructors.create')}}"
                           data-i18n="nav.dash.ecommerce"> {{__('dashboard.add-instructors')}}</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-user-circle-o"></i><span class="menu-title"
                                                                                          data-i18n="nav.dash.main"> {{__('dashboard.customers')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('customers.index')}}"
                           data-i18n="nav.dash.ecommerce">   {{__('dashboard.customers')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('customers.create')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.add-customers')}}</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.courses')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('courses.index')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.courses')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('courses.create')}}"
                           data-i18n="nav.dash.ecommerce"> {{__('dashboard.add-courses')}}</a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-home"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.home-section')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('home-section.index')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.home-section')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('home-section.create')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.add-section')}}</a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.online-courses')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('online-courses.index')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.online-courses')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('online-courses.create')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.add-online-courses')}}</a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-question-circle"></i><span class="menu-title"
                                                                                            data-i18n="nav.dash.main">{{__('dashboard.questions')}}  </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('question.index')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.questions')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('question.create')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.add-questions')}}</a>
                    </li>


                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-user-circle-o"></i><span class="menu-title"
                                                                                          data-i18n="nav.dash.main">{{__('dashboard.instructors-requests')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('instructor-requests.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.instructors-requests')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-user-circle-o"></i><span class="menu-title"
                                                                                          data-i18n="nav.dash.main">{{__('dashboard.contacts')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('contacts.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.contacts')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.ebook-orders')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('ebook-orders.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.ebook-orders')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.course-orders')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('course-orders.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.course-orders')}}</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-book"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.online-course-orders')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('online-course-orders.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.online-course-orders')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-tasks"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.employment-applications')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('employment.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.employment-applications')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('employment.create')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.add-employment-applications')}}</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-send"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.send-emails')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('send-emails.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.send-emails')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-send"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.coupon')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('coupon.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.coupon')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-bookmark"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.appointments')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('appointments.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.appointments')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-bookmark"></i><span class="menu-title"
                                                                                 data-i18n="nav.dash.main">{{__('dashboard.apply-job')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('applyJob')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.apply-job')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-bookmark"></i><span class="menu-title"
                                                                                     data-i18n="nav.dash.main">{{__('dashboard.booking-appointments')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('booking-appointments.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.booking-appointments')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-bookmark"></i><span class="menu-title"
                                                                                     data-i18n="nav.dash.main">{{__('dashboard.subscriptions')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('subscriptions')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.subscriptions')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="{{url('/dashboard')}}"><i class="fa  fa-paypal"></i><span class="menu-title"
                                                                                     data-i18n="nav.dash.main">{{__('dashboard.payment-method')}}</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{route('payment-method.index')}}"
                           data-i18n="nav.dash.ecommerce">{{__('dashboard.payment-method')}}</a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('payment-method.create')}}"
                           data-i18n="nav.dash.ecommerce">  {{__('dashboard.add-payment-method')}}</a>
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

{{--<footer class="footer footer-static footer-light navbar-border">--}}
{{--    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2023 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>--}}
{{--</footer>--}}

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
