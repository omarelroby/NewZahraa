@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.indexes')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.indexes')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-indexes')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body"><!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-indexes')}}</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form class="form" method="post" action="{{url('store-indexes-videos')}}" enctype='multipart/form-data'>
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i> INDEXES</h4>
                                                <div class="row">
                                                    <input type="text" name="indexes_video_id" hidden value="{{$indexes_video_id}}">
                                                    @foreach(config('translatable.locales') as $locale)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.title')}} ({{$locale}})</label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="{{$locale}}[title]">
                                                        </div>
                                                    </div>
                                                @endforeach
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput6">{{__('dashboard.minute-to')}}  </label>
                                                            <input type="number" step=".01" required id="projectinput6" class="form-control input-custom"   name="time_to">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5">{{__('dashboard.minute-from')}}  </label>
                                                            <input type="number" step=".01" required id="projectinput5" class="form-control input-custom"   name="time_from">
                                                        </div>
                                                    </div>

                                                </div>



                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-100">
                                                    <a href="{{url('indexes-videos',$indexes_video_id)}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-main">
                                                    <i class="fa fa-check-square-o"></i> {{__('dashboard.save')}}
                                                </button>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                     </div>








                 </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
@section('script')



    <script>
        CKEDITOR.replace('ar[description]' );
        CKEDITOR.replace('en[description]' );
    </script>





@endsection
