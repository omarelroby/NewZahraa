@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.employment-applications')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.employment-applications')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-employment-applications')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-employment-applications')}}</h4>
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
                                        <form class="form" autocomplete="off" method="post" action="{{route('employment.store')}}" enctype='multipart/form-data'>
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.add-employment-applications')}}</h4>
                                                <div class="row">
                                                        @foreach(config('translatable.locales') as $locale)
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.title')}} ({{$locale}})</label>
                                                                    <input type="text" required id="projectinput1" class="form-control input-custom"   name="{{$locale}}[title]">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="custom-file-label" for="inputGroupFile01"><span style="color: red;">*</span>{{__('dashboard.image')}} </label>
                                                                <input type="file"  required  class="custom-file-input" id="inputGroupFile01"  name="image">
                                                            </div>
                                                        </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="custom-file-label" for="inputGroupFile01"><span style="color: red;">*</span>{{__('dashboard.cover')}} </label>
                                                                    <input type="file"  required  class="custom-file-input" id="inputGroupFile01"  name="cover">
                                                                </div>
                                                            </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput30"><span style="color: red;">*</span>{{__('dashboard.experience')}}  </label>
                                                                <input type="text" required id="projectinput30" class="form-control input-custom"   name="experience">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput30"><span style="color: red;">*</span>{{__('dashboard.Gender')}}  </label>
                                                                <select type="text" required id="projectinput30" class="form-control input-custom"   name="Gender">
                                                                    <option value="">{{__('dashboard.Gender')}}</option>
                                                                    <option value="Any">Any</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value=Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput30"><span style="color: red;">*</span>{{__('dashboard.job_type')}}  </label>
                                                                <input type="text" required id="projectinput30" class="form-control input-custom"   name="job_type">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput30"><span style="color: red;">*</span>{{__('dashboard.salary')}}  </label>
                                                                <input type="text" required id="projectinput30" class="form-control input-custom"   name="salary">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput30"><span style="color: red;">*</span>{{__('dashboard.expiration_date')}}  </label>
                                                                <input type="date" required id="projectinput30" class="form-control input-custom"   name="expiration_date">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput30"><span style="color: red;">*</span>{{__('dashboard.posted_date')}}  </label>
                                                                <input type="date" required id="projectinput30" class="form-control input-custom"   name="posted_date">
                                                            </div>
                                                        </div>
                                                        @foreach(config('translatable.locales') as $locale)
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.description')}} ({{$locale}})</label>
                                                                    <textarea required id="projectinput1" class="form-control"   name="{{$locale}}[description]">
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        @foreach(config('translatable.locales') as $locale)
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput12"><span style="color: red;">*</span>{{__('dashboard.qualifications')}} ({{$locale}})</label>
                                                                    <textarea required id="projectinput12" class="form-control"   name="{{$locale}}[qualifications]">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="col-md-6">
                                                            <div class="form-group form-check checkbox-lg">
                                                                <label for="projectinput30"> {{__('dashboard.status')}}  </label>
                                                                <input type="checkbox"   id="projectinput30"    value="1"   name="status">
                                                            </div>
                                                        </div>
                                                    </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('employment.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
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
        CKEDITOR.replace('ar[qualifications]' );
        CKEDITOR.replace('en[qualifications]' );
    </script>





@endsection
