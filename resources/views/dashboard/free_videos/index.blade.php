@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.free-videos')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.free-videos')}}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-4" style="margin-right: auto;">
                    <a class="btn btn-primary" style="width: 300px;color: #f0f0f0" href="{{route('freeVideos.create')}}"  >{{__('dashboard.add-free-videos')}}</a>
                </div>
            </div>
            <div class="content-body">
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card p-3 rounded-10">
                                {!! $dataTable->table() !!}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>






@endsection
@section('script')

    {!! $dataTable->scripts() !!}



@endsection
