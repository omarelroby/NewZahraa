@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.instructors')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.instructors')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-instructors')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-instructors')}}</h4>
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
                                        <form class="form" autocomplete="off" method="post" action="{{route('instructors.store')}}" enctype='multipart/form-data'>
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.instructors')}}</h4>
                                                <div class="row">
                                                     <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.name')}} </label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2"><span style="color: red;">*</span>{{__('dashboard.phone')}} </label>
                                                            <input type="text" required id="projectinput2" class="form-control input-custom"   name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2"><span style="color: red;">*</span>{{__('dashboard.brief')}} </label>
                                                            <input type="text" required id="projectinput2" class="form-control input-custom"   name="brief">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.email')}} </label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.password')}} </label>
                                                            <input type="password" required id="projectinput1" class="form-control input-custom"   name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput11"><span style="color: red;">*</span>{{__('dashboard.commission_instructor')}} </label>
                                                            <input type="number" required id="projectinput11" class="form-control input-custom"   name="commission_instructor">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.categories')}} </label>
                                                            <select type="text" required id="projectinput1" class="form-control input-custom"   name="category_id">
                                                                <option value="">{{__('dashboard.select-category')}}</option>
                                                               @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->translate('ar')->name}}</option>
                                                                @endforeach
                                                             </select>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.countries')}} </label>
                                                            <select type="text" required id="projectinput1" class="form-control input-custom"   name="country_id">
                                                                <option value="">{{__('dashboard.select-country')}}</option>
                                                               @foreach($countries as $country)
                                                                 <option value="{{$country->id}}">{{$country->translate(app()->getLocale())->name}}</option>
                                                                @endforeach
                                                             </select>
                                                        </div>
                                                    </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="custom-file-label" for="inputGroupFile01"><span style="color: red;">*</span>{{__('dashboard.image')}} </label>
                                                        <input type="file"  required  class="custom-file-input" id="inputGroupFile01"  name="image">
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="custom-file-label" for="inputGroupFile01"><span style="color: red;">*</span>{{__('dashboard.instructor-attachments')}} </label>
                                                        <input type="file" multiple required  class="custom-file-input" id="inputGroupFile01"  name="attachs[]">
                                                    </div>
                                                </div>

                                                </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('instructors.index')}}" style="color: white">
                                                        <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
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






@endsection
