@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.general-setting')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> {{__('dashboard.general-setting')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.edit-setting')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.edit-setting')}}</h4>
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
                                        <form class="form" method="post" action="{{url("setting/{$setting->id}")}}" enctype='multipart/form-data'>
                                            @csrf
                                            {{ method_field('put') }}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i>{{__('dashboard.edit-setting')}}</h4>

                                                             <div class="row">
                                                                @foreach(config('translatable.locales') as $locale)
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">{{__('dashboard.title')}} ({{$locale}})</label>
                                                                            <input type="text" required id="projectinput1" class="form-control" value="{{$setting->translate($locale)->title}}"   name="{{$locale}}[title]">
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.keywords')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->Keywords ??''}}" name="Keywords">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.phone')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->phone ??''}}" name="phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.whatsapp')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->whatsapp ??''}}" name="whatsapp">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.email')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->email ??''}}" name="email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.address')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->address ??''}}" name="address">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.google_map')}}  </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->google_map ??''}}" name="google_map">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.facebook_url')}}  </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->facebook_url ??''}}" name="facebook_url">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.twitter_url')}}  </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->twitter_url ??''}}" name="twitter_url">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.youtube_url')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->youtube_url ??''}}" name="youtube_url">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label   for="inputGroupFile01">{{__('dashboard.tiktok_url')}} </label>
                                                                        <input type="text"    class="form-control" id="inputGroupFile01" value="{{$setting->tiktok_url ??''}}" name="tiktok_url">
                                                                    </div>
                                                                </div>


                                                                @foreach(config('translatable.locales') as $locale)
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">{{__('dashboard.description')}} ({{$locale}})</label>
                                                                            <textarea required id="projectinput1" class="form-control"   name="{{$locale}}[description]">
                                                                {!! $setting->translate($locale)->description !!}
                                                                            </textarea>
                                                                        </div>
                                                                    </div>
                                                                @endforeach


                                                            </div>

                                                    <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <a href="{{route('setting.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> {{__('dashboard.save')}}
                                                </button>
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
