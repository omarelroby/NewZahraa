@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="">
                <div class="">
                    <div class="">

                        <div class="row gap-2 flex-wrap">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 card p-3">
                                <div class="pb-1">
                                    <div class="clearfix mb-1">
                                        <i class="icon-book-open font-large-1 blue-grey float-left mt-1"></i>
                                        <span class="font-large-2 text-bold-300 info float-right">{{$ebooks}}</span>
                                    </div>
                                    <div class="clearfix">
                                        <span class="text-muted">{{__('dashboard.ebooks')}}</span>
{{--                                        <span class="info float-right"><i class="ft-arrow-up info"></i> 16.89%</span>--}}
                                    </div>
                                </div>
                                <div class="progress mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 card p-3">
                                <div class="pb-1">
                                    <div class="clearfix mb-1">
                                        <i class="icon-folder-alt font-large-1 blue-grey float-left mt-1"></i>
                                        <span class="font-large-2 text-bold-300 danger float-right">{{$courses}}</span>
                                    </div>
                                    <div class="clearfix">
                                        <span class="text-muted">{{__('dashboard.courses')}}</span>
{{--                                        <span class="danger float-right"><i class="ft-arrow-up danger"></i> 5.14%</span>--}}
                                    </div>
                                </div>
                                <div class="progress mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 card p-3">
                                <div class="pb-1">
                                    <div class="clearfix mb-1">
                                        <i class="icon-screen-desktop font-large-1 blue-grey float-left mt-1"></i>
                                        <span class="font-large-2 text-bold-300 success float-right">{{$online_course}}</span>
                                    </div>
                                    <div class="clearfix">
                                        <span class="text-muted">{{__('dashboard.online-courses')}}</span>
{{--                                        <span class="success float-right"><i class="ft-arrow-down success"></i> 2.24%</span>--}}
                                    </div>
                                </div>
                                <div class="progress mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 card p-3">
                                <div class="pb-1">
                                    <div class="clearfix mb-1">
                                        <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                        <span class="font-large-2 text-bold-300 ball-grid-beat float-right">{{$customers}}</span>
                                    </div>
                                    <div class="clearfix">
                                        <span class="text-muted">{{__('dashboard.students')}}</span>
{{--                                        <span class="warning float-right"><i class="ft-arrow-up warning"></i> 43.84%</span>--}}
                                    </div>
                                </div>
                                <div class="progress mb-0" style="height: 7px;">
                                    <div class="progress-bar ball-grid-beat" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 card p-3">
                                <div class="pb-1">
                                    <div class="clearfix mb-1">
                                        <i class="icon-social-youtube font-large-1 blue-grey float-left mt-1"></i>
                                        <span class="font-large-2 text-bold-300 warning float-right">{{$free_videos}}</span>
                                    </div>
                                    <div class="clearfix">
                                        <span class="text-muted">{{__('dashboard.free-videos')}}</span>
                                        {{--                                        <span class="warning float-right"><i class="ft-arrow-up warning"></i> 43.84%</span>--}}
                                    </div>
                                </div>
                                <div class="progress mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-2 card p-3">
                                <div class="pb-1">
                                    <div class="clearfix mb-1">
                                        <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                        <span class="font-large-2 text-bold-300 brown float-right">{{$instructors}}</span>
                                    </div>
                                    <div class="clearfix">
                                        <span class="text-muted">{{__('dashboard.instructors')}}</span>
                                        {{--                                        <span class="warning float-right"><i class="ft-arrow-up warning"></i> 43.84%</span>--}}
                                    </div>
                                </div>
                                <div class="progress mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-brown" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
