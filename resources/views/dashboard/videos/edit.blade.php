@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.videos')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> {{__('dashboard.videos')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.edit-videos')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.edit-videos')}}</h4>
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
                                        <form class="form" method="post" action="{{url("videos/{$videos->id}")}}" enctype='multipart/form-data'>
                                            @csrf
                                            {{ method_field('put') }}
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
                                                <h4 class="form-section"><i class="ft-align-right"></i>{{__('dashboard.videos')}}</h4>
                                                             <div class="row">
                                                                @foreach(config('translatable.locales') as $locale)
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">{{__('dashboard.title')}} ({{$locale}})</label>
                                                                            <input type="text"  value="{{$videos->translate($locale)->title}}" required id="projectinput1" class="form-control"   name="{{$locale}}[title]">
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                <div class="row">
                                                    @foreach(config('translatable.locales') as $locale)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.description')}} ({{$locale}})</label>
                                                                <textarea required id="projectinput1" class="form-control"   name="{{$locale}}[description]">
                                                              {{$videos->translate($locale)->description}}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label   for="inputGroupFile20">{{__('dashboard.preview-videos')}} </label>
                                                            <input type="file"   class="form-control" id="inputGroupFile20"  name="preview_video">
                                                        </div>
                                                    </div>
                                                        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label   for="inputGroupFile20">{{__('dashboard.complete-videos')}} </label>
                                                            <input type="file"   class="form-control" id="inputGroupFile20"  name="complete_video">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label   for="inputGroupFile20">{{__('dashboard.price')}}  </label>
                                                            <input type="text" value="{{$videos->price}}"  required class="form-control" id="inputGroupFile20"  name="price">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label   for="inputGroupFile20">{{__('dashboard.instructors')}}  </label>
                                                            <select  required class="form-control" id="inputGroupFile20"  name="instructor_id">
                                                                <option value="">{{__('dashboard.select-instructors')}}  </option>
                                                                @foreach($instructors as $instructor)
                                                                    <option @if($instructor->id==$videos->instructor_id)selected @endif value="{{$instructor->id}}">{{$instructor->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <a href="{{route('videos.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}  </a>
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
