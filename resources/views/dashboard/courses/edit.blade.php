@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.courses')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> {{__('dashboard.courses')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.edit-courses')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.edit-courses')}}</h4>
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

                                        <form class="form" method="post" action="{{url("courses/{$courses->id}")}}" enctype='multipart/form-data'>
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
                                                <h4 class="form-section"><i class="ft-align-right"></i>Free Videos</h4>
                                                             <div class="row">
                                                                @foreach(config('translatable.locales') as $locale)
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1"><span style="color: red;">*</span>title ({{$locale}})</label>
                                                                            <input type="text"  value="{{$courses->translate($locale)->title}}" required id="projectinput1" class="form-control input-custom    "   name="{{$locale}}[title]">
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.categories')}} </label>
                                                                <select type="text" required id="projectinput1" class="form-control input-custom"   name="category_id">
                                                                    <option value="">{{__('dashboard.select-category')}}</option>
                                                                    @foreach($categories as $category)
                                                                        <option @if($category->id==$courses->category_id)selected @endif value="{{$category->id}}">{{$category->translate('ar')->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label   for="inputGroupFile20"><span style="color: red;">*</span>{{__('dashboard.price')}} </label>
                                                                <input type="text" value="{{$courses->price}}"  required class="form-control input-custom" id="inputGroupFile20"  name="price">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label   for="inputGroupFile20">{{__('dashboard.preview-videos')}} </label>
                                                                <input type="file"   class="form-control input-custom" id="inputGroupFile20"  name="preview_video">
                                                            </div>
                                                        </div>

                                                    @foreach(config('translatable.locales') as $locale)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"><span style="color: red;">*</span>Description ({{$locale}})</label>
                                                                <textarea required id="projectinput1" class="form-control"   name="{{$locale}}[description]">
                                                              {{$courses->translate($locale)->description}}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="col-12" style="margin-right: auto;">
                                                        <a class="btn btn-primary" style="width: 300px;color: #f0f0f0" href="{{route('indexes.create',$courses->id)}}"  >{{__('dashboard.add-indexes')}}</a>
                                                    </div>
                                                    <hr>


                                                    <div class="col-md-12 form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('courses.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-main">
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
